<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="2">Jenis</th>
            <th style="text-align: center; vertical-align: middle" colspan="8">Kasus</th>
        </tr>

        <tr>
            <th style="text-align: center; vertical-align: middle">Pembunuhan</th>
            <th style="text-align: center; vertical-align: middle">Pencurian</th>

            <th style="text-align: center; vertical-align: middle">Pemerkosaan</th>
            <th style="text-align: center; vertical-align: middle">Asusila</th>

            <th style="text-align: center; vertical-align: middle">NAPZA</th>
            <th style="text-align: center; vertical-align: middle">KDRT</th>

            <th style="text-align: center; vertical-align: middle">Korupsi</th>
            <th style="text-align: center; vertical-align: middle">Lainnya</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->jenisData ?></td>

                <td><?= $row->total_pembunuhan; ?></td>
                <td><?= $row->total_pencurian; ?></td>

                <td><?= $row->total_pemerkosaan; ?></td>
                <td><?= $row->total_asusila; ?></td>

                <td><?= $row->total_napza; ?></td>
                <td><?= $row->total_kdrt; ?></td>

                <td><?= $row->total_korupsi; ?></td>
                <td><?= $row->total_Lainnya; ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>