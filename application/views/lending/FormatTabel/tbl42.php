<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="3">Jenis</th>
            <th style="text-align: center; vertical-align: middle" colspan="8">Kelompok Umur (Tahun)</th>
        </tr>

        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="2">
                < 12 </th>
            <th style="text-align: center; vertical-align: middle" colspan="2">13 - 17</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">18 - 22</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">23 - 27</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->jenisData ?></td>

            <td><?= $row->total_umur_12_L; ?></td>
            <td><?= $row->total_umur_12_P; ?></td>

            <td><?= $row->total_umur_13_17_L; ?></td>
            <td><?= $row->total_umur_13_17_P; ?></td>

            <td><?= $row->total_umur_18_22_L; ?></td>
            <td><?= $row->total_umur_18_22_P; ?></td>

            <td><?= $row->total_umur_23_27_L; ?></td>
            <td><?= $row->total_umur_23_27_P; ?></td>
        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>