<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/tools/head'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- MENU ATAS -->
        <?php $this->load->view('admin/tools/menu_atas'); ?>
        <!-- MENU ATAS-->

        <!-- MENU SAMPING -->
        <?php $this->load->view('admin/tools/menu_samping'); ?>
        <!-- MENU SAMPING -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-sm-12">
                            <center>
                                <img src="img/LOGO/logo.png" style="width:20%;">
                                <p>
                                    <a class="h1" style="color:black;"><b>Sistem Informasi Gender dan Anak</b></a><br>
                                    <font style="font-size:25px;">
                                        Kabupaten Tebo

                                    </font>
                                    <br>
                                    <font style="font-size:15px;">
                                        <?php
                                        $idUnit = $this->session->userdata('idUnitKerja');
                                        $dataUnitKerja = $this->M_crud_unit->GetDataIdUnit($idUnit)->row();
                                        echo $dataUnitKerja->namaUnit;
                                        ?>
                                    </font>
                                </p>
                            </center>
                        </div>
                    </div>
                    <hr>
                    <?php $level = $this->session->userdata('level');
                    if ($level == '1') { ?>
                        <?php $this->load->view('admin/tools/menuUtamaAdmin'); ?>
                    <?php } else if ($level == '2') { ?>
                        <?php $this->load->view('User/tools/menuUtamaUser'); ?>
                    <?php } ?>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <?php $this->load->view('admin/tools/footer'); ?>
        <!-- Footer -->
    </div>
</body>
<?php $this->load->view('admin/tools/js_footer'); ?>

</html>