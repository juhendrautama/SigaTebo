<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">KECAMATAN</th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2022 </th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2023 </th>

        </tr>
        <tr style="text-align: center; vertical-align: middle;">
            <th>
                < 20 </th>
            <th>20 - 35</th>
            <th> > 35</th>

            <th>
                < 20 </th>
            <th>20 - 35</th>
            <th> > 35</th>
        </tr>

    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>

                <td><?= $row->namaKec ?></td>

                <td><?= $row->total_nilai_usia_lt_20_2022 ?></td>
                <td><?= $row->total_nilai_usia_20_35_2022 ?></td>
                <td><?= $row->total_nilai_usia_gt_35_2022 ?></td>

                <td><?= $row->total_nilai_usia_lt_20_2023 ?></td>
                <td><?= $row->total_nilai_usia_20_35_2023 ?></td>
                <td><?= $row->total_nilai_usia_gt_35_2023 ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>