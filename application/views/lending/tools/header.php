<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img img-res="" src="img/LOGO/logo.png" class="img-fluid" style=" width: 35px; height:auto;">
            <div class="lh-1 ps-2">
                <div class="text-white fw-bold fw-semibold pb-1 ls-1" style="font-size:13px; letter-spacing: 1px; ">
                    <strong>Sistem Informasi Gender dan Anak</strong>
                </div>
                <div class="fs-8 text-white ls-1" style="font-size:10px;">
                    <strong>Kabupaten Tebo</strong>
                </div>
            </div>
        </div>
        <nav id="navbar" class="navbar ">
            <ul>
                <li><a class="nav-link scrollto active " href="">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                    <ul style="max-width: 215px; overflow: hidden; ">
                        <?php foreach ($GetKategoriAll->result() as $row) { ?>
                        <li class="p-1">
                            <a class="a "
                                href="Kategori/Detail/<?php echo $row->idKategoriData; ?>/<?php echo str_replace(' ', '-', $row->nama); ?>#Kategori"
                                style=" white-space: normal; word-wrap: break-word;">
                                <?php echo $row->nama; ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="DataAll#dataall">Data</a></li>
                <li><a class="nav-link scrollto" href="Publikasi#publikasi">Publikasi</a></li>
                <li><a class="nav-link scrollto btn-danger" href="login_akses">LOGIN</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>