<a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahDataSigatbl6">
    <i class="nav-icon  fas fa-plus"></i>Tambah Data
</a>
<?php $this->load->view('admin/FormatTabel/modal/TambahDataSigatbl6');
?>
<hr>
<table id="tbl6" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>KABUPATEN</th>
            <th>IPM</th>
            <th>IPG</th>
            <th>IDG</th>
            <th>Tahun</th>
            <th>
                <center>Aksi</center>
            </th>
        </tr>

    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampilsiga->result() as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->kabupaten; ?></td>
                <td><?php echo $row->ipm; ?></td>
                <td><?php echo $row->ipg; ?></td>
                <td><?php echo $row->idg; ?></td>
                <td><?php echo $row->tahun; ?></td>
                <td>
                    <center>
                        <a href="adminpanel/DataSigaAdmin/HapusDataSiga/<?php echo $row->idSiga6; ?>/<?php echo $row->idUnitKerja; ?>/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>" class="btn btn-warning btn-sm elevation-1">
                            <i class="nav-icon fas fa-trash"></i>
                        </a>
                        <!-- <a href="#" class="btn btn-primary btn-sm elevation-1" data-toggle="modal" data-target="#editDataKetegori" data-id='<?php echo $row->idSiga6; ?>'>
                            <i class="nav-icon fas fa-edit"></i>
                        </a> -->
                    </center>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>
<?php $this->load->view('admin/tools/js_footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl6').DataTable();
    });
</script>