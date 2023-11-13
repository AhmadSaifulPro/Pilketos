<!DOCTYPE html>
<html lang="en">

<head>

    <title>PILKETOS V3</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('/') }}assets/dist/assets/images/SMKRemove.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/assets/css/style.css">




</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <img src="{{ asset('/') }}assets/dist/assets/images/SMKRemove.png" width="50%" alt=""
                            class="img-fluid mb-4">
                        <h4 class="mb-5 f-w-400">Login</h4>
                        <form action="{{ route('do_login') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="floating-label" for="Username">Username</label>
                                <input type="text" class="form-control" name="username" id="Username" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" name="password" id="Password"
                                    placeholder="">
                            </div>
                            <button class="btn btn-primary btn-block mb-4" type="submit">Masuk</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('/') }}assets/dist/assets/js/vendor-all.min.js"></script>
<script src="{{ asset('/') }}assets/dist/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/dist/assets/js/ripple.js"></script>
<script src="{{ asset('/') }}assets/dist/assets/js/pcoded.min.js"></script>



</body>

</html>
