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
                                <h5><b>Profil Unit Kerja</b></h5>
                            </center>
                        </div>
                        <div class="card-body">
                            <form action="adminpanel/ProfilUnit/SimpanUbahUnit" method="POST"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label"> Nama Unit Kerja :</label>
                                        <input hidden type="text" name="id"
                                            value="<?php echo $GetDataIdUnit->idUnitKerja ?>">
                                        <input class="form-control" type="text"
                                            value="<?php echo $GetDataIdUnit->namaUnit ?>" name="namaUnit" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label"> Alamat :</label>
                                        <input class="form-control" type="text"
                                            value="<?php echo $GetDataIdUnit->alamat ?>" name="alamat" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label"> Lat :</label>
                                        <input class="form-control" type="text"
                                            value="<?php echo $GetDataIdUnit->lat ?>" name="lat" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label"> Long :</label>
                                        <input class="form-control" type="text"
                                            value="<?php echo $GetDataIdUnit->long ?>" name="long" required>
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