@extends('master.print.master')

@section('invoice')
    Cashbook
@endsection
@section('date')
    {{date('Y-m-d')}}
@endsection
@section('detail')
    <div class="row justify-content-between mb-4">
        <div class="col-auto">
            <div class="invoice-left"><b>Start Date:</b> {{$start_date}}
            </div>
            <div class="invoice-left"><b>End Date:</b> {{$end_date}}
            </div>
        </div>
    </div>
@endsection
@section('table')

    <table class="invoice-table">
        <thead>
        <tr class="text-primary">
            <th colspan="2" class="text-center f-s-small">Received Amount</th>
            <th colspan="2" class="text-center f-s-small">Expense Amount</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Previous Cash</td><td class="text-right">{{$previous_cash}}</td>
            <td></td><td class="text-right"></td></tr>
        <tr>
            <td>Customer Receive</td><td class="text-right">{{$receive}}</td>
            <td>Supplier Payment</td><td class="text-right">{{$pay}}</td>
        </tr>
        <tr>
            <td>Total Sales</td><td class="text-right">{{$sale_cash}}</td>
            <td>Due Sales</td><td class="text-right">{{$sale_due}}</td>
        </tr>
        <tr>
            <td>Other Income</td><td class="text-right">{{$income}}</td>
            <td>Other Expanse</td><td class="text-right">{{$expanse}}</td>
        </tr>
        <tr>
            <td>Bank Withdraw</td><td class="text-right">{{$bank_withdraw}}</td>
            <td>Bank Deposit</td><td class="text-right">{{$bank_deposite}}</td></tr>

        @php($totalReceive=0)
        @php($totalReceive=$previous_cash+$receive+$bank_withdraw+$sale_cash+$income)
        @php($totalPay=0)
        @php($totalPay=$sale_due+$pay+$bank_deposite+$expanse)

        <tr>
            <th class="text-center f-s-small">Total</th><td class="text-right f-s-small">{{$totalReceive}}</td>
            <th class="text-center f-s-small">Total</th><td class="text-right f-s-small">{{$totalPay}}</td>
        </tr>
        @php($net_cash=0)
        @php($net_cash=$totalReceive-$totalPay)
        <tr>
            <th colspan="1" class="text-left f-s-small text-success">Net Total</th><td colspan="3" class="text-center f-s-small">{{$net_cash}}</td>
        </tr>
        </tbody>
    </table>
    <div class="row justify-content-between">
        <div class="col-auto">
            <div class="invoice-left"><b></b>
                <p class="mb-0"></p></div>
        </div>
    </div>
@endsection
@section('back')
    {{route('cashbook.report')}}
@endsection
