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
        <div class="content-wrapper t-4">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header">
                            <a href="adminpanel/DataSigaAdmin/Kategori/<?php echo $GetDataIdUnit->idUnitKerja ?>" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>
                            <hr>
                            <center>
                                Tabel <?php echo $GetDataIdJudul->formatTabel; ?>
                                <h6>
                                    <b>
                                        <?php echo $GetDataIdJudul->judul; ?>
                                        <!-- <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#editDataSiga">
                                            <i class="nav-icon fas fa-edit"></i>
                                        </a> -->
                                    </b>
                                </h6>
                            </center>
                        </div>
                        <div class="card-body ">
                            <?php
                            for ($i = 2; $i <= 52; $i++) {
                                if ($GetDataIdJudul->formatTabel == (string)$i) {
                                    $this->load->view('admin/FormatTabel/tbl' . $i);
                                    break; // keluar dari loop setelah menemukan kecocokan
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->load->view('admin/tools/footer'); ?>
    </div>
    <!-- Modal data -->
    <div class="modal fade " id="editDataSiga" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-edit"></i> Ubah Data Siga
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="adminpanel/DataSigaAdmin/SimpanUbahSiga" method="POST">
                    <div class="modal-body isiEditDataSiga">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm" name="proses">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal data -->
    <?php $this->load->view('admin/tools/js_footer'); ?>
</body>
<script type="text/javascript">
    $('#editDataSiga').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        var idunit = $(e.relatedTarget).data('idunit');
        var idkate = $(e.relatedTarget).data('idkate');
        var idjudul = $(e.relatedTarget).data('idjudul');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/DataSigaAdmin/GetDataIdSiga",
            data: {
                id: id,
                idunit: idunit,
                idkate: idkate,
                idjudul: idjudul
            },
            success: function(data) {
                $('.isiEditDataSiga').html(data);
            }
        });
    });
</script>

</html>