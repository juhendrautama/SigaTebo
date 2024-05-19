<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGA - Sistem Informasi Gender dan Anak</title>
    <base href="<?php echo base_url(); ?>" />
    <!-- favicon -->
    <link rel="icon" href="img/LOGO/logo.png" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="AdminLTE/css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE/css/adminlte.min.css">
    <link rel="stylesheet" href="AdminLTE/select2/css/select2.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <center>
                    <img class="img-responsive" src="img/LOGO/logo.png" style="width:33%;">
                    <p>
                        <a class="h3" style="color:black;"><b>SIGA</b></a><br>
                        <font style="font-size: 20px; ">
                            Sistem Informasi Gender dan Anak</font><br>
                        <font style="font-size: 15px; ">Kabupaten Tebo</font>
                    </p>
                </center>
            </div>
            <div class="card-body">
                <center>
                    <a class="h7" style="color:#FFD500;"><b>LOGIN</b></a>
                </center>
                <p>
                <form action="Login_akses/Cek" method="post">
                    <div class="input-group mb-3">
                        <select required name="idUnitKerja" id="unit" class="form-control" style="width:85%;">
                            <option value="" disabled selected>Pilih unit...</option>
                            <?php foreach ($GetDataunit->result() as $row) { ?>
                                <option value="<?= $row->idUnitKerja; ?>"><?= $row->namaUnit; ?></option>
                            <?php } ?>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-users" style="vertical-align: middle;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="user" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-password" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary ">
                                <input type="checkbox" id="remember" class="form-checkbox">
                                <label for="remember">
                                    Show Password
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="AdminLTE/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="AdminLTE/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE/js/adminlte.min.js"></script>

    <script src="AdminLTE/select2/js/select2.min.js"></script>

    <script type="text/javascript">
        $('#unit').select2({
            placeholder: "Pilih unit..."
        });
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.form-password').attr('type', 'text');
                } else {
                    $('.form-password').attr('type', 'password');
                }
            });
        });
    </script>
</body>

</html>