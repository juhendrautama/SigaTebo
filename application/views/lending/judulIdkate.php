<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('lending/tools/head'); ?>
    <style>
        .h {
            transition: box-shadow 0.3s ease;
            /* Menambahkan transisi halus */
        }

        .h:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.10);
            /* Efek bayangan saat di-hover */
        }
    </style>

</head>

<body>
    <?php
    // if ($Gerdataid->nilaiTampil == '1') {
    //     $this->load->view('lending/tools/modalInfo');
    // } else if ($Gerdataid->nilaiTampil == '2') {
    // }
    ?>

    <!-- ======= Header ======= -->
    <?php $this->load->view('lending/tools/header'); ?>
    <!-- ======= Header ======= -->

    <!-- ======= slider======= -->
    <?php $this->load->view('lending/tools/slider'); ?>
    <!-- ======= slider======= -->

    <!-- ======= konten ======= -->
    <main id="main">
        <section id="Kategori">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2><?php echo $GetDataIdKategori->nama; ?></h2>
                    <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                        <?php echo $GetDataIdKategori->nama; ?>
                    </font>
                </div>
                <div class="row">
                    <div data-aos="fade-left">
                        <?php foreach ($GetJudulIdkategori->result() as $row) { ?>
                            <a href="Data/Detail/<?php echo $row->idKategoriData ?>/<?php echo $row->idJudulData ?>/<?php echo str_replace(' ', '-', $row->judul); ?>#Data" class="text-decoration-none text-reset">
                                <div class="card  h p-3  pt-3 pb-4 pl-2 pr-2 text-black mb-8 rounded-4">
                                    <p><?php echo $row->judul ?></p>
                                    <?php setlocale(LC_TIME, 'id_ID'); ?>
                                    <font style="font-size:11px;"><?php echo date('d F Y', strtotime($row->tgl)); ?></font>
                                </div>
                            </a>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= konten ======= -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('lending/tools/footer'); ?>
    <!-- ======= Footer ======= -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <?php $this->load->view('lending/tools/js'); ?>

</body>

</html>