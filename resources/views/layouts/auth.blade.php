<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>@yield('title')</title>
        <!-- base:css -->
        <link rel="stylesheet" href="{{asset('admin/template/vendors/typicons.font/font/typicons.css')}}">
        
        <link
            rel="stylesheet"
            href="{{asset('admin/template/vendors/css/vendor.bundle.base.css')}}"
        />
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link
            rel="stylesheet"
            href="{{asset('admin/template/css/vertical-layout-light/style.css')}}"
        />
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('admin/template/images/favicon.png')}}" />
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div
                    class="content-wrapper d-flex align-items-center auth px-0"
                >
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div
                                class="auth-form-light text-left py-5 px-4 px-sm-5"
                            >
                                <div class="brand-logo">
                                    <img
                                        src="{{asset('admin/template/images/logo.svg')}}"
                                        alt="logo"
                                    />
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- base:js -->
        <script src="{{asset('admin/template/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="{{asset('admin/template/js/off-canvas.js')}}"></script>
        <script src="{{asset('admin/template/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('admin/template/js/template.js')}}"></script>
        <script src="{{asset('admin/template/js/settings.js')}}"></script>
        <script src="{{asset('admin/template/js/todolist.js')}}"></script>
        <!-- endinject -->
    </body>
</html>
