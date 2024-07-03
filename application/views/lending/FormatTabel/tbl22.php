<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2022 </th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2023 </th>

        </tr>

        <tr style="text-align: center; vertical-align: middle; font-size:10px;">
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-Laki+Perempuan</th>

            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-Laki+Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->namaKec ?></td>

                <td><?= $row->total_nilai_2022_L ?></td>
                <td><?= $row->total_nilai_2022_P ?></td>
                <td><?= $total2022 = $row->total_nilai_2022_L  + $row->total_nilai_2022_P ?></td>

                <td><?= $row->total_nilai_2023_L ?></td>
                <td><?= $row->total_nilai_2023_P ?></td>
                <td><?= $total2023 = $row->total_nilai_2023_L  + $row->total_nilai_2023_P ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>