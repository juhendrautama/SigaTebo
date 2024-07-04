<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="2">KECAMATAN</th>
            <th style="text-align: center; vertical-align: middle" colspan="3">Jumlah Penduduk</th>
        </tr>
        <tr style="text-align: center; vertical-align: middle">
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-Laki + Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->namaKec ?></td>

                <td><?= $total_nilai_all_L = $row->total_nilai_all_L; ?></td>
                <td><?= $total_nilai_all_P = $row->total_nilai_all_P; ?></td>
                <td><?= $totalAll = $total_nilai_all_L + $total_nilai_all_P; ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>