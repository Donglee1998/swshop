<?php

namespace App\Http\Controllers;

use App\product;
use App\product_images;
use App\type_product;
use Illuminate\Http\Request;
use Cart;
use Session;
use App\customer;
use App\bill;
use App\bill_detail;
use App\users;
use Hash;
use Auth;


class PageController extends Controller
{
    public function getIndex(){
        $product = product::all();
        $new_product = product::where('new',1)->paginate(4);
        $product_sale = product::where('promotion_price','>',0)->paginate(4);
        return view('trangchu',compact('product','new_product','product_sale'));
    }
    public function getType($type){
        $product = product::where('id_type',$type)->paginate(8);
        return view('product',compact('product'));
    }

    public function getShirt($type){
        if ($type==1){
            $product = product::where('id_type','<','6')->paginate(8);
            return view('product',compact('product'));
        }elseif ($type==2){
            $product = product::whereBetween('id_type',[6,10])->paginate(8);
            return view('product',compact('product'));
        }elseif ($type==3){
            $product = product::whereBetween('id_type',[11,12])->paginate(8);
            return view('product',compact('product'));
        }else {
        $product = product::where('id_type','>','12')->paginate(8);
        return view('product',compact('product'));
    }

    }

    public function getProductdetail($id){
        $detail_product = product::where('id',$id)->first();
        $image = product_images::where('product_id',$id)->get();
        return view('product-detail',compact('detail_product','image'));
    }

    public function cart(){
        return view('cart');
    }



    Public function getBlog(){
        return view('blog');
    }

    Public function getContact(){
        return view('Contact');
    }

    Public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $req)
    {
        $cre = array('email'=> $req->email, 'password' => $req->password);
        if(Auth::attempt($cre))
        {
            return redirect()->back()->with(['flag' => 'success', 'message' => 'Dang nhap thanh cong']);
        }
        else
        {
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Dang nhap khong thanh cong']);
        }
    }



    Public function getSignout(){
        return view('signout');
    }

    public function postSignout(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'fullname' => 'required',
                're_password' => 'required|same:password'
            ],
            [
                'email.required' => 'Vui long nhap email',
                'email.email' => 'Nhap khong dung dinh dang email',
                'email.unique' => 'Email da co nguoi su dung',
                'password.required' => 'Vui long nhap mat khau',
                're_password.same' => 'Mat khau khong giong nhau',
                'password.min' =>"Mat khau it nhat 6 ky tu",
                'password.max' => "Mat khau toi da 20 ky tu"
            ]
        );
        $us = new users();
        $us->full_name = $req->fullname;
        $us->email = $req->email;
        $us->password = Hash::make($req->password);
        $us->phone = $req->phone;
        $us->address = $req->address;
        $us->save();
        return redirect()->back()->with('thongbao', 'Tao tai khoan thanh cong');
    }
    /**
    public function getAddtoCart(Request $req, $id)
    {
        $product = product::find($id);
        $oldcart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldcart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }
     * */
    public function getAddtoCart(Request $req, $id){
        $product = product::find($id);
        if(!$product) return redirect()->to('trangchu');
        Cart::add([
           'id' => $product->id, 'name' =>$product->name, 'qty' => 1, 'price' => price($product->unit_price,$product->promotion_price), 'weight' => 0,
            'options' =>[
                'size' => $req->size,
                'image' => $product->image,
                'promotion_price'=> $product->promotion_price,
                'description' => $product->description
            ]
        ]);
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Đã thêm sản phẩm vào giỏ hàng']);
    }

    public function getCart(){
        $product_cart = Cart::content();
        return view('cart',compact('product_cart'));

    }

    public function getDelItemCart($rowID)
    {
        Cart::remove($rowID);
        return redirect()->back();
    }

    public function getCheckOut()
    {
        $product_cart = Cart::content();
        $sum = tong(Cart::subtotal());
        return view('thanhtoan',compact('product_cart','sum'));
    }

    public function postCheckOut(Request $req)
    {
        $this->validate($req,
            [
                'name' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address'=>'required'
            ],
            [
                'name.required' => 'Vui lòng nhập họ tên đầy đủ',
                'phone.required' => 'Vui lòng nhập số điện thoại',
                'email.required' => 'Vui lòng nhập email',
                'address.required' => 'Vui lòng nhập địa chỉ',
            ]
        );

        if (Cart::subtotal()==0){
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Bạn phải mua hàng mới thanh toán được']);
        }else {

            $cus = new Customer;
            $cus->name = $req->name;
            $cus->gender = $req->gender;
            $cus->email = $req->email;
            $cus->address = $req->address;
            $cus->phone_number = $req->phone;
            $cus->note = $req->notes;
            $cus->save();

            $bill = new Bill;
            $bill->id_customer = $cus->id;
            $bill->date_order = date('Y-m-d');
            $bill->total = str_replace(',', '', \Cart::subtotal(0));
            $bill->check = 0;
            $bill->payment = $req->paymentMethod;
            $bill->note = $req->notes;
            $bill->save();

            foreach (Cart::content() as $key => $value) {
                $bd = new Bill_Detail;
                $bd->id_bill = $bill->id;
                $bd->id_product = $value->id;
                $bd->quantity = $value->qty;
                $bd->size = $value->options->size;
                $bd->unit_price = $value->price;
                $bd->save();
            }

            foreach (Cart::content() as $key => $value) {
                $product = product::find($value->id);
                $product->amount = $product->amount - $value->qty;
                $product->save();
            }
            Cart::destroy();
            return redirect()->route('trangchu')->with(['flag' => 'success', 'message' => 'Đặt hành thành công']);
        }
    }

    public function getSearch(Request $req){
        $search_product = product::where('name','like', '%'.$req->key.'%')->get();
        return view('search',compact('search_product'));
    }

    public function getAdmin(){
        return view('admin.master');
    }


}
