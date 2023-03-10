<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/invoices-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:59 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Invoice Detail | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="invoice-title">
                    <h4 class="float-right font-size-16">Order # 12345</h4>
                    <div class="mb-4">
                        <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="logo" height="20"/>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                            <strong>Billed To:</strong><br>
                            John Smith<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        <address class="mt-2 mt-sm-0">
                            <strong>Shipped To:</strong><br>
                            Kenny Rigdon<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mt-3">
                        <address>
                            <strong>Payment Method:</strong><br>
                            Visa ending **** 4242<br>
                            jsmith@email.com
                        </address>
                    </div>
                    <div class="col-sm-6 mt-3 text-sm-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            October 16, 2019<br><br>
                        </address>
                    </div>
                </div>
                <div class="py-2 mt-3">
                    <h3 class="font-size-15 font-weight-bold">Order summary</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 70px;">No.</th>
                            <th>Item</th>
                            <th class="text-right">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td>Skote - Bootstrap 4 Admin Dashboard</td>
                            <td class="text-right">$499.00</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Skote - Bootstrap 4 Landing Template</td>
                            <td class="text-right">$399.00</td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Veltrix - Bootstrap 4 Admin Template</td>
                            <td class="text-right">$499.00</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right">Sub Total</td>
                            <td class="text-right">$1397.00</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="border-0 text-right">
                                <strong>Shipping</strong></td>
                            <td class="border-0 text-right">$13.00</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="border-0 text-right">
                                <strong>Total</strong></td>
                            <td class="border-0 text-right"><h4 class="m-0">$1410.00</h4></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-print-none">
                    <div class="float-right">
                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
                        <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>

<script src="{{'/'}}admin/assets/js/app.js"></script>

<script>
    window.print();
</script>

</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/invoices-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:59 GMT -->
</html>
