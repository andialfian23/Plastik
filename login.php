<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE_3/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE_3/dist/css/adminlte.min.css">
    <!-- jQuery -->
    <script src="AdminLTE_3/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-dark" style='margin-top:-100px !important;'>
            <div class="card-header text-center">
                <img src="images/pdmanplas.png" alt="PD. Mandiri Plastik" width='50%'
                    style='margin-top:-30px !important;' />
                <p style='margin-top:-20px;font-size:20px;'>
                    <b>PD. Mandiri Plastik</b>
                </p>
            </div>
            <div class="card-body">

                <p class="login-box-msg" style="font-weight:bold;">Masukkan Username & Password</p>
                <form action="#">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" id="username" autofocus />
                        <div class="input-group-append">
                            <div class="input-group-text" id='icon-user'>
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password" />
                        <div class="input-group-append">
                            <div class="input-group-text" id='icon-pass'>
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block" id="btn_login">LOGIN</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <script>
                $(function() {
                    var base_url = window.location.origin + '/Plastik';

                    $('#btn_login').click(function() {
                        $('.login-box-msg').removeClass('text-danger');
                        $('.login-box-msg').html('Masukkan Username dan Password');
                        $('input').removeClass('border-danger');
                        $('.input-group-text').removeClass('border border-danger bg-danger');

                        if ($('#username').val() == '') {
                            $('.login-box-msg').addClass('text-danger');
                            $('.login-box-msg').html('Username Masih Kosong');
                            $('#username').addClass('border border-danger');
                            $('#icon-user').addClass('border border-danger bg-danger');
                            return false;
                        }
                        if ($('#password').val() == '') {
                            $('.login-box-msg').addClass('text-danger');
                            $('.login-box-msg').html('Password Masih Kosong');
                            $('#password').addClass('border border-danger');
                            $('#icon-pass').addClass('border border-danger bg-danger');
                            return false;
                        }
                        let params = {
                            username: $('#username').val(),
                            password: $('#password').val()
                        }

                        $.ajax({
                            url: base_url + '/app/proses_login.php',
                            type: 'POST',
                            data: params,
                            dataType: 'json',
                            success: function(res) {
                                if (res.kode == 0) {
                                    $('.login-box-msg').addClass('text-danger');
                                    $('.login-box-msg').removeClass('text-success');
                                } else {
                                    $('.login-box-msg').addClass('text-success');
                                }
                                $('.login-box-msg').html(res.pesan);
                            }
                        });

                    });
                });
                </script>

                <!-- <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p> -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="AdminLTE_3/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="AdminLTE_3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE_3/dist/js/adminlte.min.js"></script>
</body>

</html>