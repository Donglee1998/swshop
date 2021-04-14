@extends('admin.master')
@section('Noidung')
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('thongbao'))
        <div class="alert alert-success">{{Session::get('thongbao')}}</div>
    @endif
    @if(Session::has('loi'))
        <div class="alert alert-success">{{Session::get('loi')}}</div>
    @endif
    <form style="margin: auto; width: 1000px"  action="{{route('Add')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label>Tên Sản Phẩm</label>
            <div class="input-group">
                <input type="text" class="form-control" name="name" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Id Type</label>
            <div class="input-group">
                <input type="number" min="0" class="form-control" name="id_type" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <div class="input-group">
                <input type="text" class="form-control" name="description" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Giá Gốc</label>
            <div class="input-group">
                <input type="number" min="0" class="form-control" name="unit_price" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Giá ưu đãi</label>
            <div class="input-group">
                <input type="number" min="0" class="form-control" name="promotion_price" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Số lượng</label>
            <div class="input-group">
                <input type="number" min="0" class="form-control" name="amount" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Image: </label>
            <input type="file" name="image" id="image" >
        </div>
        <div class="mb-3">
            <label>Hãng</label>
            <div class="input-group">
                <input type="text" class="form-control" name="unit" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Tình trạng: </label>
                <input type="number" value="" max="1" min="0" name="new" >
            <label style="color: red">(Giảm giá chọn 1, không giảm giá chọn 0)</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Add</button>
    </form>
@endsection
