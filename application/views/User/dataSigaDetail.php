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
                            <a href="adminpanel/DataSigaUser" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>
                            <center>
                                <h5><b><?php echo $GetDataIdJudul->judul; ?></b></h5>
                            </center>
                        </div>
                        <div class="card-body ">
                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahDataSiga">
                                <i class="nav-icon  fas fa-plus"></i> Data Siga
                            </a>

                            <?php $this->load->view('User/modal/TambahDataSiga'); ?>
                            <a href="adminpanel/DataSigaUser/ElemenData/<?php echo $this->session->userdata('idUnitKerja'); ?>/<?php echo $GetDataIdJudul->idKategoriData ?>/<?php echo $GetDataIdJudul->idJudulData ?>" class="btn btn-primary btn-sm elevation-1">
                                Elemen Data
                            </a>
                            <hr>
                            <table id="example" class="table table-bordered table-hover " style="font-size:14px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Elemen Data</th>
                                        <th>Tahun</th>
                                        <th>Nilai</th>
                                        <th>Satuan</th>
                                        <th>
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetDataSigaDetail->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->nama; ?></td>

                                            <?php setlocale(LC_TIME, 'id_ID'); ?>
                                            <td><?php echo date('Y', strtotime($row->tgl)); ?></td>

                                            <td><?php echo $row->nilaiData; ?></td>
                                            <td><?php echo $row->satuan; ?></td>
                                            <td align="center">
                                                <a href="adminpanel/DataSigaUser/HapusDataSiga/<?php echo $row->idDataDasar; ?>/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>" onclick="return confirm('Apakah yakin ingin dihapus?');" class="btn btn-warning btn-sm elevation-1">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#editDataSiga" data-idkate='<?php echo $row->idKategoriData; ?>' data-idjudul='<?php echo $row->idJudulData; ?>' data-id='<?php echo $row->idDataDasar; ?>'>
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
                <form action="adminpanel/DataSigaUser/SimpanUbahSiga" method="POST">
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
    $('#unit').select2({
        dropdownParent: $('#TambahDataSiga'),
        placeholder: "Pilih..."
    });
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#editDataSiga').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        var idkate = $(e.relatedTarget).data('idkate');
        var idjudul = $(e.relatedTarget).data('idjudul');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/DataSigaUser/GetDataIdSiga",
            data: {
                id: id,
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