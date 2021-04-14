@extends('admin.master')
@section('Noidung')
    @if(Session::has('thongbao'))
        <div class="alert alert-success">{{Session::get('thongbao')}}</div>
    @endif
    @if(Session::has('loi'))
        <div class="alert alert-danger">{{Session::get('loi')}}</div>
    @endif
    <form action="{{route('Edit',$sua->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label>Tên Sản Phẩm</label>
            <div class="input-group">
                <input type="text" class="form-control" name="name" value="{{$sua->name}}" >
            </div>
        </div>
        <div class="mb-3">
            <label>Id Type</label>
            <div class="input-group">
                <input type="number" min="0" class="form-control" name="id_type" value="{{$sua->id_type}}" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <div class="input-group">
                <input type="text" class="form-control" name="description" value="{{$sua->description}}" >
            </div>
        </div>
        <div class="mb-3">
            <label>Giá Gốc</label>
            <div class="input-group">
                <input type="number" min="0" class="form-control" name="unit_price" value="{{$sua->unit_price}}" >
            </div>
        </div>
        <div class="mb-3">
            <label>Giá ưu đãi</label>
            <div class="input-group">
                <input type="number" min="0" class="form-control" name="promotion_price" value="{{$sua->promotion_price}}" >
            </div>
        </div>
        <div class="mb-3">
            <label>Image: </label>
            <label for="image" name="image" style="border: 1px solid lightgray;padding: 5px;border-radius: 5px;background-color: white">Thay đổi</label>
            <input type="file" name="image" id="image" style="display: none">
            <img src="{{asset('uploads/'.$sua->image)}}" width="10%" height="10%">
        </div>
        <div class="mb-3">
            <label>Hãng</label>
            <div class="input-group">
                <input type="text" class="form-control" name="unit" value="{{$sua->unit}}" >
            </div>
        </div>
        <div class="mb-3">
            <label>Tình trạng: </label>
            <input type="number" value="{{$sua->new}}" max="1" min="0" name="new">
            <label style="color: red">(Giảm giá chọn 1, không giảm giá chọn 0)</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
    </form>

@endsection
