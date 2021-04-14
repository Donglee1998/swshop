<?php

namespace App\Http\Controllers;

use App\bill;
use App\bill_detail;
use App\product_images;
use Illuminate\Http\Request;
use App\product;
use Auth;

class Admincontroller extends Controller
{
    public function products(){
        $product=product::all();
        return view('Admin.Products',compact('product'));
    }
    public function getAdmin(){
        return view('Admin.master');
    }

    Public function getLogin(){
        return view('Admin.login');
    }

    public function postLogin(Request $req)
    {
        $cre = array('email'=> $req->email, 'password' => $req->password);
        if(Auth::attempt($cre))
        {
            return view('Admin.master')->with('thongbao' , 'Dang nhap thanh cong');
        }
        else
        {
            return redirect()->back()->with('loi' , 'Dang nhap khong thanh cong');
        }
    }

    Public function getLogout(){
        Auth::logout();
        return view('Admin.login');
    }

    public function getAdd()
    {
        return view('Admin.add_product');
    }

    public function postAdd(Request $req){
        $this->validate($req,[
            'name'=>'required|unique:product',
            'id_type'=>'required',
            'description'=>'required',
            'unit_price'=>'required',
            'amount'=>'required',
            'promotion_price'=>'required',
            'image'=>'required',
            'new'=>'required'
        ],[
            'name.required'=>'Ban chưa nhập tên sản phẩm',
            'name.unique'=>'Tên sản phẩm đã bị trùng với sản phẩm trước đó',
            'id_type.required'=>'Bạn chưa nhập id loại sản phẩm',
            'description.required'=>'Bạn chưa nhập mô tả sản phẩm',
            'amount.required'=>'Bạn chưa nhập số lượng',
            'unit_price.required'=>'Bạn chưa nhập giá gốc sản phẩm',
            'promotion_price.required'=>'Bạn chưa nhập giá ưu đãi',
            'image.required'=>'Bạn chưa upload hình sản phẩm',
            'new.required'=>'Bạn chưa nhập tình trạng sản phẩm'
        ]);
        $add = new product();
        $add->name = $req->name;
        $add->id_type=$req->id_type;
        $add->description=$req->description;
        $add->unit_price=$req->unit_price;
        $add->promotion_price=$req->promotion_price;
        $add->amount=$req->amount;
        $add->unit=$req->unit;
        $add->new=$req->new;
        $file=$req->file('image');
        $duoi=$file->getClientOriginalExtension();
        if ($duoi!='jpg' && $duoi!='png')
        {
            return redirect()->back()->with("loi", "Hình sản phẩm chỉ phải là đuôi jpg hoặc png");
        }
        $name=$file->getClientOriginalName();
        $hinh=rand(0,9999).'_'.$name;
        while (file_exists('uploads/'.$hinh))
        {
            $hinh=rand(0,9999).'_'.$name;
        }
        $file->move('uploads',$hinh);
        $add->image=$hinh;
        $add->save();
        return redirect()->back()->with("thongbao", "Thêm sản phẩm thành công");
    }

    public function getEdit($id){
        $sua = product::where('id',$id)->first();
        return view('admin.edit_product',compact('sua'));
    }

    public function postEdit(Request $req,$id){
        $test = bill_detail::find($id);
        if ($test !== null){
            return redirect()->back()->with("loi","Không thể chỉnh sửa sản phẩm có đơn hàng");
        }else {
            $add = product::find($id);
            $add->name = $req->name;
            $add->id_type = $req->id_type;
            $add->description = $req->description;
            $add->unit_price = $req->unit_price;
            $add->promotion_price = $req->promotion_price;
            $add->unit = $req->unit;
            $add->new = $req->new;
            if (!empty($req->file('image'))) {
                $file = $req->file('image');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                    return redirect()->back()->with("loi", "Hình sản phẩm chỉ phải là đuôi jpg, jpeg hoặc png");
                }
                $name = $file->getClientOriginalName();
                $hinh = rand(0, 9999) . '_' . $name;
                while (file_exists('uploads/' . $hinh)) {
                    $hinh = rand(0, 9999) . '_' . $name;
                }
                $file->move('uploads', $hinh);
                $add->image = $hinh;
            }
            $add->save();
            return redirect()->back()->with("thongbao", "Cập nhật sản phẩm thành công");
        }
    }
    public function getAddimage(){
        return view('Admin.add_product_image');
    }

    public function postAddimage(Request $req){
        $image = new product_images();
        $image->product_id=$req->product_id;
        $file=$req->file('image');
        $duoi=$file->getClientOriginalExtension();
        if ($duoi!='jpg' && $duoi!='png')
        {
            return redirect()->back()->with("loi", "Hình sản phẩm chỉ phải là đuôi jpg hoặc png");
        }
        $name=$file->getClientOriginalName();
        $hinh=rand(0,9999).'_'.$name;
        while (file_exists('uploads/'.$hinh))
        {
            $hinh=rand(0,9999).'_'.$name;
        }
        $file->move('uploads',$hinh);
        $image->image=$hinh;
        $image->save();
        return redirect()->back()->with("thongbao", "Thêm sản phẩm thành công");
    }

    public function getDelete($id) {
        $test = bill_detail::find($id);
        if ($test !== null){
            return redirect()->back()->with("loi","Không thể xóa sản phẩm có đơn hàng");
        }else {
            $del = product::find($id);
            $del->delete();
            return redirect()->back()->with("thongbao", "Xóa sản phẩm thành công");
            }
    }

    public function getUncensoredInvoice(){
        $bill = bill::where('check',0)->get();
        return view('Admin.uncensored_invoice',compact('bill'));
    }

    public function getCensoredInvoice(){
        $bill_cen = bill::where('check',1)->get();
        return view('Admin.censored_invoice',compact('bill_cen'));
    }

    public function getDetailInvoice($id){
        $detail = bill_detail::where('id_bill',$id)->get();
        return view('Admin.invoice_detail',compact('detail'));
    }

    public function getApprovalInvoice($id){
        $approval = bill::find($id);
        $approval->check = '1';
        $approval->save();
        return redirect()->back()->with('thongbao', 'Đã duyệt đơn hàng');
    }

    public function getDeleteInvoice($id){
        $delete = bill::find($id);
        $delete_detail = bill_detail::where('id_bill',$id);
        $delete_detail->delete();
        $delete->delete();
        return redirect()->back()->with('thongbao', 'Đã xóa đơn hàng');

    }

}
