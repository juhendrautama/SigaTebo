<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tempat Kejadian</th>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tempat Kejadian</th>
        </tr>

        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tahun <?= $tahunAwal ?></th>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tahun <?= $tahunAkhir ?></th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle">Penanganan Pengaduan</th>
            <th style="text-align: center; vertical-align: middle">Pelayanan Kesehatan</th>
            <th style="text-align: center; vertical-align: middle">Rehabilitasi Sosial</th>
            <th style="text-align: center; vertical-align: middle">Penegakan Bantuan Hukum</th>
            <th style="text-align: center; vertical-align: middle">Pemulangan & Reintegrasi</th>
            <th style="text-align: center; vertical-align: middle">Konseling CATIN</th>


            <th style="text-align: center; vertical-align: middle">Penanganan Pengaduan</th>
            <th style="text-align: center; vertical-align: middle">Pelayanan Kesehatan</th>
            <th style="text-align: center; vertical-align: middle">Rehabilitasi Sosial</th>
            <th style="text-align: center; vertical-align: middle">Penegakan Bantuan Hukum</th>
            <th style="text-align: center; vertical-align: middle">Pemulangan & Reintegrasi</th>
            <th style="text-align: center; vertical-align: middle">Konseling CATIN</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->namaKec ?></td>

                <td><?= $row->total_nilai_awal_pengaduan; ?></td>
                <td><?= $row->total_nilai_awal_pelayanan; ?></td>
                <td><?= $row->total_nilai_awal_rehabilitasi; ?></td>
                <td><?= $row->total_nilai_awal_penegakan; ?></td>
                <td><?= $row->total_nilai_awal_pemulangan; ?></td>
                <td><?= $row->total_nilai_awal_konseling; ?></td>


                <td><?= $row->total_nilai_akhir_pengaduan; ?></td>
                <td><?= $row->total_nilai_akhir_pelayanan; ?></td>
                <td><?= $row->total_nilai_akhir_rehabilitasi; ?></td>
                <td><?= $row->total_nilai_akhir_penegakan; ?></td>
                <td><?= $row->total_nilai_akhir_pemulangan; ?></td>
                <td><?= $row->total_nilai_akhir_konseling; ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>