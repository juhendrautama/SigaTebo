<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="2">NO</th>
            <th style="text-align: center; vertical-align: middle" rowspan="2">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle" rowspan="2">Dusun</th>
            <th style="text-align: center; vertical-align: middle" colspan="3">Jumlah Anggota BPD Tahun
                <?= $tahunAwal ?>
            </th>
            <th style="text-align: center; vertical-align: middle" colspan="3">Jumlah Anggota BPD Tahun
                <?= $tahunAkhir ?>
            </th>
        </tr>
        <tr>

            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-Laki + Perempuan</th>

            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-Laki + Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $jumtotal_nilai_awal_L = 0;
        $jumtotal_nilai_awal_P = 0;

        $jumtotal_nilai_akhir_L = 0;
        $jumtotal_nilai_akhir_P = 0;

        foreach ($tampildatasiga->result() as $row) {
            $jumtotal_nilai_awal_L +=  $row->total_nilai_awal_L;
            $jumtotal_nilai_awal_P += $row->total_nilai_awal_P;



            $jumtotal_nilai_akhir_L += $row->total_nilai_akhir_L;
            $jumtotal_nilai_akhir_P += $row->total_nilai_akhir_P;

        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->namaKec; ?></td>
                <td><?= $row->jumdesa; ?></td>
                <td><?= $total_nilai_awal_L = $row->total_nilai_awal_L; ?></td>
                <td><?= $total_nilai_awal_P = $row->total_nilai_awal_P; ?></td>
                <td><?= $jumlahAwal = $total_nilai_awal_L + $total_nilai_awal_P;  ?></td>

                <td><?= $total_nilai_akhir_L = $row->total_nilai_akhir_L; ?></td>
                <td><?= $total_nilai_akhir_P = $row->total_nilai_akhir_P; ?></td>
                <td><?= $jumlahAkhir = $total_nilai_akhir_L + $total_nilai_akhir_P;  ?></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="3">Jumlah</th>

            <td><?php echo $jumtotal_nilai_awal_L; ?></td>
            <td><?php echo $jumtotal_nilai_awal_P; ?></td>
            <td><?php echo $TotaljumlahAwal = $jumtotal_nilai_awal_L + $jumtotal_nilai_awal_P; ?></td>

            <td><?php echo $jumtotal_nilai_akhir_L; ?></td>
            <td><?php echo $jumtotal_nilai_akhir_P; ?></td>
            <td><?php echo $TotaljumlahAkhir = $jumtotal_nilai_akhir_L + $jumtotal_nilai_akhir_P; ?></td>
        </tr>
    </tfoot>
</table>