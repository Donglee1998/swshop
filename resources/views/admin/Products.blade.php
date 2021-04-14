@extends('admin.master')
@section('Noidung')
    @if(Session::has('thongbao'))
        <div class="alert alert-success">{{Session::get('thongbao')}}</div>
    @endif
    @if(Session::has('loi'))
        <div class="alert alert-danger">{{Session::get('loi')}}</div>
    @endif
    <table style="border-spacing: 10px;width: 100%" align="center">
        <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
            <td colspan="4">
                <a href="{{route('Add')}}">Thêm Sản Phẩm</a>
            </td>
        </tr>
        <tr class="header" style="text-align: center">
            <td>Id</td>
            <td>Tên Sản Phẩm</td>
            <td>Id Type</td>
            <td>Mô tả</td>
            <td>Giá gốc</td>
            <td>Giá khuyến mãi</td>
            <td>Image</td>
            <td>Hãng</td>
            <td>Tình trạng</td>
        </tr>
        @foreach($product as $sanpham)
        <tr>
            <td style="text-align: center">{{$sanpham->id}}</td>
            <td>{{$sanpham->name}}</td>
            <td style="text-align: center">{{$sanpham->id_type}}</td>
            <td>{{$sanpham->description}}</td>
            <td style="text-align: center">{{$sanpham->unit_price}}</td>
            <td style="text-align: center">{{$sanpham->promotion_price}}</td>
            <td><img src="{{asset('/uploads/'.$sanpham->image)}} " style="max-height: 80px"></td>
            <td style="text-align: center">{{$sanpham->unit}}</td>
            <td style="text-align: center">
                @if($sanpham->new==1)
                <h6>Giảm giá</h6>
                @else
                <h6>Không giảm giá</h6>
                @endif
            </td>
            <td><a href="{{route('Edit',$sanpham->id)}}">Edit</a> | <a href="{{route('Delete',$sanpham->id)}}" class="delete">Delete</a></td>
        </tr>
        @endforeach
    </table>

@endsection
