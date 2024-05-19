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
        <section id="publikasi" class="pricing">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <center>
                        <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                            Data Publikasi
                        </font>
                    </center>
                </div>
                <div class="card  p-5 border-info">
                    <div class="row row-cols-2 row-cols-md-3 " data-aos="fade-left">
                        <?php foreach ($GetDataPublikasi->result() as $row) { ?>
                        <div class="col p-3">
                            <a href="">
                                <div class="card h rounded-5 p-2" style="width:100%; height:100%;">
                                    <div class="card-body">
                                        <img src="img/LOGO/pdf.svg" alt="">
                                        <font style="font-size:14px; font-weight: bold; color:#0663C4;">
                                            <?php echo $row->judul ?>
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