<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">KABUPATEN</th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2022 </th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2023 </th>

        </tr>
        <tr style="text-align: center; vertical-align: middle;">
            <th>IPM</th>
            <th>IPG</th>
            <th>IDG</th>

            <th>IPM</th>
            <th>IPG</th>
            <th>IDG</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->kabupaten ?></td>

                <td><?= $total_ipm_2022 = $row->total_ipm_2022; ?></td>
                <td><?= $total_ipg_2022 = $row->total_ipg_2022; ?></td>
                <td><?= $total_idg_2022 = $row->total_idg_2022; ?></td>

                <td><?= $total_ipm_2023 = $row->total_ipm_2023; ?></td>
                <td><?= $total_ipg_2023 = $row->total_ipg_2023; ?></td>
                <td><?= $total_idg_2023 = $row->total_idg_2023; ?></td>

            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>