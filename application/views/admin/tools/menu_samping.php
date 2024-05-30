<style>
    .main-sidebar {
        background: linear-gradient(90deg, #288ab1, #1ab355);
        ;
    }

    .container {
        display: flex;
        align-items: center;
    }

    .logo {
        width: 55px;
        height: auto;
        margin-right: 10px;
    }

    .text {
        display: flex;
        flex-direction: column;
        align-items: flex-start;

    }

    .text font:first-child {
        margin-bottom: -4px;
        font-weight: bold;
        /* Sesuaikan jarak sesuai keinginan Anda */
    }
</style>
<aside class="main-sidebar shadow sidebar-dark-dark text-light elevation-0 " style="position:fixed; top:0; left:0; height:100%;  overflow-y:auto; ">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="img/LOGO/logo.png" class="img-circle " alt="User Image">
            </div>
            <div class="info">
                <div class="text" style="margin-left: -5px;">
                    <font style="font-size:10px;">Sistem Informasi Gender dan Anak</font>
                    <font style="font-size:8px;">Kabupaten Tebo
                        <br>
                        <?php
                        $idUnit = $this->session->userdata('idUnitKerja');
                        $dataUnitKerja = $this->M_crud_unit->GetDataIdUnit($idUnit)->row();
                        echo $dataUnitKerja->namaUnit;
                        ?>
                    </font>
                </div>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="adminpanel/Home" style="color:#fff;" class=" nav-link 
                        <?php if ($this->uri->segment('2') == 'Home') {
                            echo "active";
                        } else {
                        } ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            HOME
                        </p>
                    </a>
                </li>
                <?php
                $level = $this->session->userdata('level');
                if ($level == '1') {
                ?>
                    <?php $this->load->view('admin/tools/isimenuSampingAdmin'); ?>
                <?php } else if ($level == '2') { ?>
                    <?php $this->load->view('User/tools/isimenuSampingUser'); ?>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>