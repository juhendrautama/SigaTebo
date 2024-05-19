<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('User/tools/head'); ?>
</head>

<body class="hold-transition sidebar-mini">


    <div class="wrapper">
        <!-- MENU ATAS -->
        <?php $this->load->view('User/tools/menu_atas'); ?>
        <!-- MENU ATAS-->

        <!-- MENU SAMPING -->
        <?php $this->load->view('User/tools/menu_samping'); ?>
        <!-- MENU SAMPING -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header">
                            <a href="adminpanel/Home" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-tachometer-alt"></i>
                            </a>
                            <center>
                                <h5><b>User Unit Kerja</b></h5>
                            </center>
                        </div>
                        <div class="card-body">
                            <form action="adminpanel/UsersGetOPD/SimpanUbahUser" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label"> Nama :</label>
                                        <input hidden type="text" name="id" value="<?php echo $GetDataIdUser->id_admin ?>">
                                        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->nama_admin ?>" name="nama_admin" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label"> User :</label>
                                        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->user ?>" name="user" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label"> Password :</label>
                                        <input class="form-control" type="password" value="<?php echo $GetDataIdUser->pass_samaran ?>" name="pass" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label"> No Telpon :</label>
                                        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->no_tlpn ?>" name="no_tlpn" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label"> Alamat :</label>
                                        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->alamat ?>" name="alamat" required>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success elevation-1" name="proses">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->load->view('User/tools/footer'); ?>
    </div>
</body>
<?php $this->load->view('User/tools/js_footer'); ?>

</html>