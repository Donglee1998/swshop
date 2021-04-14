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
                <a href="">Hóa đơn đã phê duyệt</a>
            </td>
        </tr>
        <tr class="header" style="text-align: center">
            <td>Mã khách hàng</td>
            <td>Mã sản phẩm</td>
            <td>Số lượng</td>
            <td>Size</td>
            <td>Giá</td>
            <td></td>
        </tr>
        @foreach($detail as $invoice)
            <tr>
                <td style="text-align: center">{{$invoice->id_bill}}</td>
                <td style="text-align: center">{{$invoice->id_product}}</td>
                <td style="text-align: center">{{$invoice->quantity}}</td>
                <td style="text-align: center">{{$invoice->size}}</td>
                <td style="text-align: center">{{$invoice->unit_price}}</td>

            </tr>
        @endforeach
    </table>

@endsection
