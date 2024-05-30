<a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahDataSigatbl2">
    <i class="nav-icon  fas fa-plus"></i>Tambah Data
</a>
<?php $this->load->view('admin/FormatTabel/modal/TambahDataSigatbl2');
?>
<hr>
<table id="tbl2" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>KECAMATAN</th>
            <th>Jenis Kelamin</th>
            <th>Nilai</th>
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
                <td><?php echo $row->namaKec; ?></td>
                <td><?php echo $row->jenisKelamin; ?></td>
                <td><?php echo $row->nilai; ?></td>
                <td>
                    <center>
                        <a href="adminpanel/DataSigaAdmin/HapusDataSiga/<?php echo $row->idSiga2; ?>/<?php echo $row->idUnitKerja; ?>/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>" class="btn btn-warning btn-sm elevation-1">
                            <i class="nav-icon fas fa-trash"></i>
                        </a>
                        <!-- <a href="#" class="btn btn-primary btn-sm elevation-1" data-toggle="modal" data-target="#editDataKetegori" data-id='<?php echo $row->idSiga2; ?>'>
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
        $('#tbl2').DataTable();
    });
</script>





<!-- 
Untuk tabel depan    
<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr style="text-align: center; vertical-align: middle;">
            <th rowspan="2">No</th>
            <th rowspan="2">KECAMATAN</th>
            <th colspan="3">TAHUN 2022 (JIWA)</th>
            <th colspan="3">TAHUN 2023 (JIWA)</th>
            <th rowspan="2">
                <center>Aksi</center>
            </th>
        </tr>
        <tr>
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-laki + Perempuan</th>

            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-laki + Perempuan</th>
        </tr>
        <?php $no = 1;
        foreach ($GetDataKec->result() as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->namaKec; ?>hh</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php $no++;
        } ?>
    </thead>
    <tbody>

    </tbody>
</table> -->