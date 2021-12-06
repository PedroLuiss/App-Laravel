

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{config("app.name")}}</title>
    <!-- all the meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    <!-- all the css files -->
    @include('layouts.templete.css')
</head>

<body data-layout="detached">
    <!-- HEADER -->
    <!-- Topbar Start -->
 @include('layouts.templete.topbar')
    <!-- end Topbar -->
<div class="container-fluid">
     

        <div class="wrapper">
            <!-- BEGIN CONTENT -->
            <!-- SIDEBAR -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.templete.sidebar')
            <!-- END SIDEBAR -->

            <!-- PAGE CONTAINER-->
            <div class="content-page" style="margin-top: 70px; margin-left: 254px;">
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                        @if (session('mensaje'))
                            <div class="alert alert-success">
                                <strong>{{ session('mensaje') }}</strong>
                            </div>
                        @endif
                 @yield('content');
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>

 <!-- ALL FILE JS-->
 @include('layouts.templete.script')


</body>
</html>
