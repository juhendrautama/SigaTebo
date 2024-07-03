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
        <section id="Data" class="pricing">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <center>
                        <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                            Temukan Informasi Data Gender dan Anak
                        </font>
                    </center>
                </div>
                <div class="card  p-4 border-info">
                    <div class="card h p-0" style="width:100%; ">
                        <div class="card-header ">
                            <center>
                                <font style="font-size:14px; font-weight: bold; color:#0663C4;">
                                    Informasi Perkiraan Cuaca
                                </font>
                            </center>
                        </div>
                        <div class="card-body">
                            <font style="font-size:11px; text-align: justify;">
                                <div id="id2976172a2e554"
                                    a='{"t":"g7bs","v":"1.2","lang":"id","locs":[1675],"ssot":"c","sics":"ds","cbkg":"#0097A7","cfnt":"#FFFFFF","cend":"#FFFFFF00"}'>
                                    Sumber Data Cuaca: <a href="https://cuacalab.id/cuaca_jambi-6190/minggu/">cuaca
                                        Jambi minggu
                                        ini</a></div>
                                <script async src="https://static1.cuacalab.id/widgetjs/?id=id2976172a2e554"></script>
                            </font>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 " data-aos="fade-left">
                        <?php foreach ($GetKategoriAll->result() as $row) { ?>
                        <div class="col p-3">
                            <a href="Kategori/Detail/<?php echo $row->idKategoriData; ?>/<?php echo str_replace(' ', '-', $row->nama); ?>#Kategori"
                                class="text-decoration-none text-reset">
                                <div class="card h rounded-5 p-0" style="width:100%; height:210px;">
                                    <div class="card-header rounded-top-5">
                                        <center>
                                            <font style="font-size:14px; font-weight: bold; color:#0663C4;">
                                                <?php echo $row->nama ?>
                                            </font>
                                        </center>
                                    </div>
                                    <div class="card-body">
                                        <font style="font-size:11px; text-align: justify;">
                                            <?php echo $row->Ket ?>
                                        </font>
                                    </div>
                                </div>
                            </a>
                        </div>
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


    <a href=" #" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>


    <!-- Vendor JS Files -->
    <?php $this->load->view('lending/tools/js'); ?>

</body>

</html>