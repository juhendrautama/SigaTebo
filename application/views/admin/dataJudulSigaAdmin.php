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
                            <a href="adminpanel/Home" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-tachometer-alt"></i>
                            </a>
                            <center>
                                <h5><b>Judul Data Siga</b></h5>
                            </center>
                        </div>
                        <div class="card-body ">
                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal"
                                data-target="#TambahJudulSiga">
                                <i class="nav-icon  fas fa-plus"></i> Tambah Data
                            </a>

                            <?php $this->load->view('admin/modal/TambahJudulSiga'); ?>

                            <hr>
                            <table id="example" class="table table-bordered table-hover "
                                style="font-size:14px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Format Tabel</th>
                                        <th>Unit Kerja</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetJudulSigaAll->result() as $row) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->judul; ?></td>
                                        <td>Tabel <?php echo $row->formatTabel; ?></td>
                                        <td><?php echo $row->namaUnit; ?></td>
                                        <td><?php echo $row->namaKategori; ?></td>
                                        <?php setlocale(LC_TIME, 'id_ID'); ?>
                                        <td><?php echo date('d F Y', strtotime($row->tgl)); ?></td>
                                        <td align="center">
                                            <!-- <a href="adminpanel/JudulDataSiga/HapusDataKategori/<?php echo $row->idJudulData; ?>"
                                                onclick="return confirm('Apakah yakin ingin dihapus?');"
                                                class="btn btn-warning btn-sm elevation-1">
                                                <i class="nav-icon fas fa-trash"></i>
                                            </a> -->
                                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal"
                                                data-target="#editDataJudulSiga"
                                                data-id='<?php echo $row->idJudulData; ?>'>
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
    <div class="modal fade " id="editDataJudulSiga" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-edit"></i> Ubah Data Judul Siga
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="adminpanel/JudulDataSiga/SimpanUbahJudulSiga" method="POST">
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
$('#idUnitKerja').select2({
    dropdownParent: $('#TambahJudulSiga'),
    placeholder: "Pilih unit..."
});
$('#kategori').select2({
    dropdownParent: $('#TambahJudulSiga'),
    placeholder: "Pilih Kategori..."
});

$('#idformatTabel').select2({
    dropdownParent: $('#TambahJudulSiga'),
    placeholder: "Pilih Format Tabel..."
});

$(document).ready(function() {
    $('#example').DataTable();
});
$('#editDataJudulSiga').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    $.ajax({
        type: 'post',
        url: "<?php echo base_url(); ?>adminpanel/JudulDataSiga/GetDataIdJudul",
        data: {
            id: id
        },
        success: function(data) {
            $('.isiEditDataSiga').html(data);
        }
    });
});
</script>

</html>