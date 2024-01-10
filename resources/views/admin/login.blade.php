<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin Login | {{ get_system_title() }}</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ get_system_favicon() }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ get_system_favicon() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ get_system_favicon() }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('admin') }}/assets/css/admin.min.css">

</head>

<body>
    <div id="page-container">
        <main id="main-container">
            <div class="row g-0 justify-content-center bg-body-dark">
                <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
                    <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image"
                        style="background-image: url({{ get_system_logo() }});">
                        <div class="row g-0">
                            <div class="col-md-6 order-md-1 bg-body-extra-light">
                                <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                    <div class="mb-2 text-center">
                                        <a class="link-fx fw-bold fs-1" href="/">
                                            <span class="text-dark">{{ get_system_title() }}</span>
                                        </a>
                                        <p class="text-uppercase fw-bold fs-sm text-muted">Admin Login</p>
                                    </div>
                                    <form class="js-validation-signin" action="{{ route('admin.save_login') }}"
                                        method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-alt"
                                                id="login-username" name="email" placeholder="Email">
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-alt"
                                                id="login-password" name="password" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <button type="submit" class="btn w-100 btn-hero btn-primary">
                                                <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i>Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                                <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                    <div class="d-flex">
                                        <a class="flex-shrink-0 img-link me-3" href="javascript:void(0)">
                                            <img class="img-avatar img-avatar-thumb"
                                                src="{{ get_system_logo() }}" alt="">
                                        </a>
                                        <div class="flex-grow-1">
                                            <p class="text-white fw-semibold mb-1">
                                                {{ get_system_description() }}
                                            </p>
                                            <a class="text-white-75 fw-semibold" href="javascript:void(0)"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script src="{{ asset('admin') }}/assets/js/admin.core.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/admin.app.min.js"></script>
    <script src="{{ asset('admin/assets') }}/js/bootstrap-notify.min.js"></script>

    @if (session()->has('error'))
        <script>
              Dashmix.helpers('jq-notify', {
                    type: 'danger',
                    icon: 'fa fa-times me-1',
                    message: @json(session()->get('error')) + ' !'
                });
        </script>
    @endif

</body>

</html>