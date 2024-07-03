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
                                <h5><b>Data Siga</b></h5>
                            </center>
                        </div>
                        <div class="card-body ">
                            <table id="example" class="table table-bordered table-hover "
                                style="font-size:14px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Format Tabel</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetJudulSiga->result() as $row) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td>Tabel <?php echo $row->formatTabel; ?></td>
                                        <td><?php echo $row->nama; ?></td>
                                        <td><?php echo $row->judul; ?></td>
                                        <?php setlocale(LC_TIME, 'id_ID'); ?>
                                        <td><?php echo date('d F Y', strtotime($row->tgl)); ?></td>
                                        <td align="center" style="width:90px;">
                                            <a style="font-size:12px;"
                                                href="adminpanel/DataSigaUser/Data/<?php echo $row->idUnitKerja; ?>/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>/<?php echo str_replace(' ', '-', $row->judul); ?>"
                                                class="btn btn-success btn-sm elevation-1">
                                                <i style="font-size:12px;" class="nav-icon fas fa-plus"></i> Data
                                                Siga
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