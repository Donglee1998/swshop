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
            <td>Ngày mua hàng</td>
            <td>Tổng tiền</td>
            <td>Hình thức thanh toán</td>
            <td>Chi tiết đơn hàng</td>
            <td></td>
        </tr>
        @foreach($bill_cen as $invoice)
            <tr>
                <td style="text-align: center">{{$invoice->id_customer}}</td>
                <td style="text-align: center">{{date('d-m-y',strtotime($invoice->date_order))}}</td>
                <td style="text-align: center">{{$invoice->total}}</td>
                <td style="text-align: center">{{$invoice->payment}}</td>

                <td style="text-align: center"><a href="{{route('Detail',$invoice->id)}}">Chi tiết</a></td>
                <td style="text-align: center"><a href="{{route('DeleteInvoice',$invoice->id)}}">Xóa đơn hàng</a></td>
            </tr>
        @endforeach
    </table>

@endsection
