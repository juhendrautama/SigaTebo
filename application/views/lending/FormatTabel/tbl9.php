<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">UPT Puskesmas</th>
            <th style="text-align: center; vertical-align: middle;" colspan="8">TAHUN 2022 </th>
            <th style="text-align: center; vertical-align: middle;" colspan="8">TAHUN 2023 </th>

        </tr>
        <tr style="text-align: center; vertical-align: middle; font-size:10px;">
            <th>Jumlah Kelahiran</th>
            <th>Jumlah Persalinan</th>
            <th>Dokter</th>
            <th>%</th>
            <th>Bidan</th>
            <th>%</th>
            <th>Dukun</th>
            <th>%</th>

            <th>Jumlah Kelahiran</th>
            <th>Jumlah Persalinan</th>
            <th>Dokter</th>
            <th>%</th>
            <th>Bidan</th>
            <th>%</th>
            <th>Dukun</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->nama ?></td>

                <th><?= $row->jumlah_kelahiran_2022 ?></th>
                <th><?= $row->jumlah_persalinan_2022 ?></th>
                <th><?= $d = $row->dokter_2022 ?></th>
                <th><?= $hasilD2022 = ($d * 100) / 100; ?> % </th>
                <th><?= $b = $row->bidan_2022 ?></th>
                <th><?= $hasilB2022 = ($b * 100) / 100; ?> %</th>
                <th><?= $dk = $row->dukun_2022 ?></th>
                <th><?= $hasilDK2022 = ($dk * 100) / 100; ?> %</th>

                <th><?= $row->jumlah_kelahiran_2023 ?></th>
                <th><?= $row->jumlah_persalinan_2023 ?></th>
                <th><?= $d = $row->dokter_2023 ?></th>
                <th><?= $hasilD2023 = ($d * 100) / 100; ?> % </th>
                <th><?= $b = $row->bidan_2023 ?></th>
                <th><?= $hasilB2023 = ($b * 100) / 100; ?> %</th>
                <th><?= $dk = $row->dukun_2023 ?></th>
                <th><?= $hasilDK2023 = ($dk * 100) / 100; ?> %</th>

            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>