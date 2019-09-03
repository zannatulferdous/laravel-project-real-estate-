<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}/admin/assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('/')}}/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}/admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="{{asset('/')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('/')}}/admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="{{asset('/')}}/admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper">

    @include('admin.includes.header')


    @include('admin.includes.sidebar')
    <div class="page-wrapper">
@yield('body')
        @include('admin.includes.footer')
    <div>

</div>




<script src="{{asset('/')}}/admin/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/')}}/admin/dist/js/jquery.ui.touch-punch-improved.js"></script>
<script src="{{asset('/')}}/admin/dist/js/jquery-ui.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/')}}/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('/')}}/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/')}}/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('/')}}/admin/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('/')}}/admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('/')}}/admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('/')}}/admin/dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="{{asset('/')}}/admin/assets/libs/moment/min/moment.min.js"></script>
<script src="{{asset('/')}}/admin/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="{{asset('/')}}/admin/dist/js/pages/calendar/cal-init.js"></script>
        <script src="{{asset('/')}}/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
        <script src="{{asset('/')}}/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
        <script src="{{asset('/')}}/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
        <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
            $('#zero_config').DataTable();
        </script>
        <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>

</body>

</html>