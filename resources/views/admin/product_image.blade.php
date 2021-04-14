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
    <form action="{{route('add_image')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label>Product ID</label>
            <div class="input-group">
                <input type="text" class="form-control" name="product_id" value="" >
            </div>
        </div>
        <div class="mb-3">
            <label>Image: </label>
            <input type="file" name="image" id="image" >
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Add</button>
    </form>
@endsection
