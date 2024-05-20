<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('lending/tools/head'); ?>

    <!-- <link rel="stylesheet" href="tmpDepan/bootstrap5/css/dataTables.bootstrap5.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
        <section id="dataall">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Data</h2>
                    <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                        Data
                    </font>
                </div>
                <div class="card shadow-sm">

                    <div class="card-body ">
                        <table id="example" class="table  table-hover " style="font-size:14px; width: 100%;">
                            <thead style="text-align:center; vertical-align: middle;">
                                <tr>
                                    <th>
                                        <center>Daftar Judul</center>
                                    </th>
                                    <th width="150px">
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($GetDataJudulAll->result() as $row) { ?>
                                <tr>
                                    <td><?php echo $row->judul ?></td>
                                    <td><a href="Data/Detail/<?php echo $row->idKategoriData ?>/<?php echo $row->idJudulData ?>/<?php echo str_replace(' ', '-', $row->judul); ?>#Data"
                                            class="btn btn-success btn-sm">Selengkap Nya</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= konten ======= -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('lending/tools/footer'); ?>
    <!-- ======= Footer ======= -->


    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <?php $this->load->view('lending/tools/js'); ?>
    <!-- data tabel -->
    <!-- <script src="tmpDepan/bootstrap5/js/jquery.dataTables.min.js"></script> -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <!-- //copy -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <!-- //copy -->

    <!-- //csv -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <!-- //csv -->
    <!-- //excel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <!-- //excel -->
    <!-- //pdf -->
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <!-- //pdf -->
    <!-- //print -->
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <!-- //print -->
    <!-- <script src="tmpDepan/bootstrap5/js/dataTables.bootstrap5.min.js"></script> -->
    <!-- data tabel -->

    <script>
    new DataTable('#example', {});
    </script>
</body>

</html>