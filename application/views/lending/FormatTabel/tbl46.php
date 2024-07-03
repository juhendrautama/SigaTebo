<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle" colspan="5">Tempat Kejadian</th>
            <th style="text-align: center; vertical-align: middle" colspan="5">Tempat Kejadian</th>
        </tr>

        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="5">Tahun <?= $tahunAwal ?></th>
            <th style="text-align: center; vertical-align: middle" colspan="5">Tahun <?= $tahunAkhir ?></th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle">Rumah Tangga</th>
            <th style="text-align: center; vertical-align: middle">Tempat Kerja</th>
            <th style="text-align: center; vertical-align: middle">Sekolah</th>
            <th style="text-align: center; vertical-align: middle">Tempat Umum</th>
            <th style="text-align: center; vertical-align: middle">Lainnya</th>


            <th style="text-align: center; vertical-align: middle">Rumah Tangga</th>
            <th style="text-align: center; vertical-align: middle">Tempat Kerja</th>
            <th style="text-align: center; vertical-align: middle">Sekolah</th>
            <th style="text-align: center; vertical-align: middle">Tempat Umum</th>
            <th style="text-align: center; vertical-align: middle">Lainnya</th>

        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->namaKec ?></td>

            <td><?= $row->total_nilai_awal_Rumah_Tangga; ?></td>
            <td><?= $row->total_nilai_awal_Tempat_Kerja; ?></td>
            <td><?= $row->total_nilai_awal_Sekolah; ?></td>
            <td><?= $row->total_nilai_awal_Tempat_Umum; ?></td>
            <td><?= $row->total_nilai_awal_Lainnya; ?></td>

            <td><?= $row->total_nilai_akhir_Rumah_Tangga; ?></td>
            <td><?= $row->total_nilai_akhir_Tempat_Kerja; ?></td>
            <td><?= $row->total_nilai_akhir_Sekolah; ?></td>
            <td><?= $row->total_nilai_akhir_Tempat_Umum; ?></td>
            <td><?= $row->total_nilai_akhir_Lainnya; ?></td>
        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>