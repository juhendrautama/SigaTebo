<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="3">Jenis Kekerasan</th>
            <th style="text-align: center; vertical-align: middle" colspan="4">Tahun <?= $tahunAwal ?></th>
            <th style="text-align: center; vertical-align: middle" colspan="4">Tahun <?= $tahunAkhir ?></th>
        </tr>

        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="2">Jenis Kelamin</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Anak</th>

            <th style="text-align: center; vertical-align: middle" colspan="2">Jenis Kelamin</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Anak</th>
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
                <td><?= $row->jenisKekerasan ?></td>

                <td><?= $row->total_nilai_awal_Orang_Tua_L; ?></td>
                <td><?= $row->total_nilai_awal_Orang_Tua_P; ?></td>

                <td><?= $row->total_nilai_awal_Anak_L; ?></td>
                <td><?= $row->total_nilai_awal_Anak_P; ?></td>

                <td><?= $row->total_nilai_akhir_Orang_Tua_L; ?></td>
                <td><?= $row->total_nilai_akhir_Orang_Tua_P; ?></td>

                <td><?= $row->total_nilai_akhir_Anak_L; ?></td>
                <td><?= $row->total_nilai_akhir_Anak_P; ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>