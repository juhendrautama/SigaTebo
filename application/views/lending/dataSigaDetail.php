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
        <section id="Data">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2><?php echo $GetDataIdJudul->judul; ?></h2>
                    <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                        <?php echo $GetDataIdJudul->judul; ?>
                    </font><br>
                    <font style="font-size:13px;"><?php echo $GetDataIdKategori->nama; ?></font> ||
                    <?php setlocale(LC_TIME, 'id_ID'); ?>
                    <font style="font-size:13px;"><?php echo date('d F Y', strtotime($GetDataIdJudul->tgl)); ?></font>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header bg-white ">
                        <?php
                        $idUnit = $GetDataIdJudul->idUnitKerja;
                        $dataUnit = $this->M_crud_unit->GetDataIdUnit($idUnit)->row()
                        ?>
                        Deskripsi Data <br>
                        Sumber : <?php echo $dataUnit->namaUnit; ?>

                    </div>
                    <div class="card-body ">
                        <table id="example" class="table table-bordered table-hover " style="font-size:14px; width: 100%;">
                            <thead style="text-align:center; vertical-align: middle;">
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Elemen Data</th>
                                    <th class="text-center">Tahun (<?php echo date('Y'); ?>)</th>
                                    <th>Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($getdata as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row->nama . "</td>";
                                    echo "<td class='text-center'>" . $row->nilaiData . "</td>";
                                    echo "<td>" . $row->satuan . "</td>";
                                    echo "</tr>";
                                    $no++;
                                }
                                ?>
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


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <?php $this->load->view('lending/tools/js'); ?>
    <!-- data tabel -->
    <!-- <script src="tmpDepan/bootstrap5/js/jquery.dataTables.min.js"></script> -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> //copy
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script> //csv
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> //excel
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script> //pdf
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script> //print
    <!-- <script src="tmpDepan/bootstrap5/js/dataTables.bootstrap5.min.js"></script> -->
    <!-- data tabel -->
    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: [{
                            extend: 'copy',
                            className: 'btn btn-success glyphicon glyphicon-duplicate'
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-success glyphicon glyphicon-save-file'
                        },
                        {
                            extend: 'excel',
                            className: 'btn btn-success glyphicon glyphicon-list-alt'
                        },
                        {
                            extend: 'pdf',
                            className: 'btn btn-success glyphicon glyphicon-file'
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-success glyphicon glyphicon-print'
                        }
                    ]
                }
            }
        });
    </script>

</body>

</html>