<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="2">Jenis</th>
            <th style="text-align: center; vertical-align: middle" colspan="6">Pendidikan</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle">SD</th>
            <th style="text-align: center; vertical-align: middle">SLTP</th>
            <th style="text-align: center; vertical-align: middle">SLTA</th>
            <th style="text-align: center; vertical-align: middle">Pendidikan</th>
            <th style="text-align: center; vertical-align: middle">Lain - Lain</th>
            <th style="text-align: center; vertical-align: middle">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->jenisData; ?></td>
                <td><?= $row->total_nilai_SD; ?></td>
                <td><?= $row->total_nilai_SLTP; ?></td>
                <td><?= $row->total_nilai_SLTA; ?></td>
                <td><?= $row->total_nilai_PT; ?></td>
                <td><?= $row->total_nilai_Lain_Lain; ?></td>
                <td></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>