@extends('admin.master')

@section('title')
    Invoice
@endsection

@section('body')
    <div class="page-content fade-in-up">
        <div class="ibox invoice" id="invoice">
            <div class="page-heading p-b-20">
                <div class="row">
                    <div class="col-12">
                        <h1 class="page-title">Invoice</h1>
                    </div>
                </div>
            </div>
            <div class="invoice-header">
                <div class="row">
                    <div class="col-6">
                        <div class="invoice-logo">
                            <img src="{{asset('/')}}/images/ecom_logo/ecom-logo.png" height="65px"/>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="clf" style="margin-bottom:30px;">
                            <dl class="row pull-right" style="width:400px;">
                                <dt class="col-sm-6">Invoice Date</dt>
                                <dd class="col-sm-6">{{$orders->order_date}}</dd>
                                <dt class="col-sm-6">Issue Date</dt>
                                <dd class="col-sm-6">{{$orders->order_date}}</dd>
                                <dt class="col-sm-6">Order No.</dt>
                                <dd class="col-sm-6">{{$orders->order_timestamp}}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <div class="m-b-5 font-bold">Invoice from</div>
                            <div>Ecom store.</div>
                            <ul class="list-unstyled m-t-10">
                                <li class="m-b-5">
                                    <span class="font-strong">Address:</span> Bashundhara city park, Bashundhara, Dhaka, Bangladesh.
                                </li>
                                <li class="m-b-5">
                                    <span class="font-strong">Email:</span> support@ecom.com
                                </li>
                                <li>
                                    <span class="font-strong">Phone:</span> +880-187-9272-291
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div>
                            <div class="m-b-5 font-bold">Invoice To</div>
                            <div>{{$orders->customer->name}}</div>
                            <ul class="list-unstyled m-t-10">
                                <li class="m-b-5">{{$orders->customer->address}}</li>
                                <li class="m-b-5">{{$orders->customer->email}}</li>
                                <li>{{$orders->customer->phone_number}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped no-margin table-invoice">
                <thead>
                    <tr>
                        <th>Item Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th class="text-right">Total</th>
                    </tr>
                </thead>
                @foreach($order_details as $details)
                    <tbody>
                        <tr>
                            <td>
                                <div><strong>{{$details->orderProduct->name}}</strong></div>
                                <small>{{$details->orderProduct->short_description}}</small>
                            </td>
                            <td>{{$details->product_quantity}}</td>
                            <td>৳ {{$details->product_price}}</td>
                            <td>৳ {{$details->product_price * $details->product_quantity}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <table class="table no-border">
                <thead>
                    <tr>
                        <th></th>
                        <th width="15%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-right">
                        <td>Subtotal:</td>
                        <td>৳ {{$orders->order_sub_total}}</td>
                    </tr>
                    <tr class="text-right">
                        <td>TAX 5%:</td>
                        <td>৳ {{$orders->tax_total}}</td>
                    </tr>
                    <tr class="text-right">
                        <td class="font-bold font-18">TOTAL:</td>
                        <td class="font-bold font-18">৳ {{$orders->order_total}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-right">
            <button class="btn btn-info" type="button" onclick="printDiv('invoice');">
                <i class="fa fa-print"></i> Print
            </button>
        </div>
        <style>
            .invoice {
                padding: 20px
            }
            .invoice-header {
                margin-bottom: 50px
            }
            .invoice-logo {
                margin-bottom: 50px;
            }
            .table-invoice tr td:last-child {
                text-align: right;
            }
        </style>
        <script type="text/javascript">
            function printDiv(invoice) {
                let printContents = document.getElementById(invoice).innerHTML;
                let originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>
    </div>
@endsection
