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
                            <a href="adminpanel/DataSigaUser/Data/<?= $GetDataIdKategori->idKategoriData ?>/<?= $GetDataIdJudul->idJudulData ?>" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>
                            <center>
                                <h5><b>Elemen Data</b></h5>
                            </center>
                        </div>
                        <div class="card-body ">
                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahElemenData">
                                <i class="nav-icon  fas fa-plus"></i> Elemen Data
                            </a>

                            <?php $this->load->view('User/modal/TambahElemenData');
                            ?>

                            <hr>
                            <table id="example" class="table table-bordered table-hover " style="font-size:14px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Elemen Data</th>
                                        <th>Tanggal</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetElemenData->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <?php setlocale(LC_TIME, 'id_ID'); ?>
                                            <td><?php echo date('d F Y', strtotime($row->tgl)); ?></td>
                                            <td align="center">
                                                <?php if ($row->totalcount == '0') { ?>
                                                    <a href="adminpanel/DataSigaUser/HapusElemenData/<?php echo $row->idElemenData; ?>/<?php echo $row->idUnitKerja; ?>/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>" onclick="return confirm('Apakah yakin ingin dihapus?');" class="btn btn-warning btn-sm elevation-1">
                                                        <i class="nav-icon fas fa-trash"></i>
                                                    </a>
                                                <?php } else { ?>
                                                    <a href="" data-toggle="modal" data-target="#PesanHapus" data-id='<?php echo $row->idElemenData; ?>' class="btn btn-danger btn-sm elevation-1">
                                                        <i class="nav-icon fas fa-trash"></i>
                                                    </a>
                                                <?php } ?>
                                                <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#editElemendata" data-id='<?php echo $row->idElemenData; ?>'>
                                                    <i class="nav-icon fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->load->view('admin/tools/footer'); ?>
    </div>
    <!-- Modal Hapus -->
    <div class="modal fade " id="PesanHapus" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-warning"></i> WARNING
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body isiPesanHapus">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->

    <!-- Modal data -->
    <div class="modal fade " id="editElemendata" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-edit"></i> Ubah Elemen Data
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="adminpanel/DataSigaUser/SimpanUbahElemenData" method="POST">
                    <div class="modal-body isiEditElemenData">
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
    $('#unit').select2({
        dropdownParent: $('#TambahJudulSiga'),
        placeholder: "Pilih unit..."
    });
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#PesanHapus').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/DataSigaUser/GetpesanHapus",
            data: {
                id: id
            },
            success: function(data) {
                $('.isiPesanHapus').html(data);
            }
        });
    });
    $('#editElemendata').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/DataSigaUser/GetElemenDataId",
            data: {
                id: id
            },
            success: function(data) {
                $('.isiEditElemenData').html(data);
            }
        });
    });
</script>

</html>