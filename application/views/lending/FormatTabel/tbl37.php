<table id="example" class="table table-bordered table-hover" style="font-size: 10px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="4">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="4">Wilayah</th>
            <th style="text-align: center; vertical-align: middle" colspan="12">Jenis Jabatan Hakim</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tahun <?= $tahunAwal ?></th>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tahun <?= $tahunAkhir ?></th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="2">Ketua</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Wakil Ketua</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Anggota</th>

            <th style="text-align: center; vertical-align: middle" colspan="2">Ketua</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Wakil Ketua</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Anggota</th>
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

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>




        </tr>

    </thead>
    <tbody>
        <?php
        $no = 1;

        $jumtotal_nilai_Ketua_awal_L = 0;
        $jumtotal_nilai_Ketua_awal_P = 0;

        $jumtotal_nilai_Wakil_Ketua_awal_L = 0;
        $jumtotal_nilai_Wakil_Ketua_awal_P = 0;

        $jumtotal_nilai_Wakil_Anggota_awal_L = 0;
        $jumtotal_nilai_Wakil_Anggota_awal_P = 0;


        $jumtotal_nilai_Ketua_akhir_L = 0;
        $jumtotal_nilai_Ketua_akhir_P = 0;

        $jumtotal_nilai_Wakil_Ketua_akhir_L = 0;
        $jumtotal_nilai_Wakil_Ketua_akhir_P = 0;

        $jumtotal_nilai_Wakil_Anggota_akhir_L = 0;
        $jumtotal_nilai_Wakil_Anggota_akhir_P = 0;


        foreach ($tampildatasiga->result() as $row) {
            $jumtotal_nilai_Ketua_awal_L +=  $row->total_nilai_awal_Ketua_L;
            $jumtotal_nilai_Ketua_awal_P +=  $row->total_nilai_awal_Ketua_P;

            $jumtotal_nilai_Wakil_Ketua_awal_L += $row->total_nilai_awal_Wakil_Ketua_L;
            $jumtotal_nilai_Wakil_Ketua_awal_P += $row->total_nilai_awal_Wakil_Ketua_P;

            $jumtotal_nilai_Wakil_Anggota_awal_L +=  $row->total_nilai_awal_Anggota_L;
            $jumtotal_nilai_Wakil_Anggota_awal_P +=  $row->total_nilai_awal_Anggota_P;


            $jumtotal_nilai_Ketua_akhir_L +=  $row->total_nilai_akhir_Ketua_L;
            $jumtotal_nilai_Ketua_akhir_P +=  $row->total_nilai_akhir_Ketua_P;

            $jumtotal_nilai_Wakil_Ketua_akhir_L += $row->total_nilai_akhir_Wakil_Ketua_L;
            $jumtotal_nilai_Wakil_Ketua_akhir_P += $row->total_nilai_akhir_Wakil_Ketua_P;

            $jumtotal_nilai_Wakil_Anggota_akhir_L +=  $row->total_nilai_akhir_Anggota_L;
            $jumtotal_nilai_Wakil_Anggota_akhir_P +=  $row->total_nilai_akhir_Anggota_P;




        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->wilayahUnitPengadilan; ?></td>

                <td><?= $row->total_nilai_awal_Ketua_L; ?></td>
                <td><?= $row->total_nilai_awal_Ketua_P; ?></td>

                <td><?= $row->total_nilai_awal_Wakil_Ketua_L; ?></td>
                <td><?= $row->total_nilai_awal_Wakil_Ketua_P; ?></td>

                <td><?= $row->total_nilai_awal_Anggota_L; ?></td>
                <td><?= $row->total_nilai_awal_Anggota_P; ?></td>




                <td><?= $row->total_nilai_akhir_Ketua_L; ?></td>
                <td><?= $row->total_nilai_akhir_Ketua_P; ?></td>

                <td><?= $row->total_nilai_akhir_Wakil_Ketua_L; ?></td>
                <td><?= $row->total_nilai_akhir_Wakil_Ketua_P; ?></td>

                <td><?= $row->total_nilai_akhir_Anggota_L; ?></td>
                <td><?= $row->total_nilai_akhir_Anggota_P; ?></td>
            </tr>

        <?php
            $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">JUMLAH</td>
            <td><?= $jumtotal_nilai_Ketua_awal_L; ?></td>
            <td><?= $jumtotal_nilai_Ketua_awal_P; ?></td>

            <td><?= $jumtotal_nilai_Wakil_Ketua_awal_L; ?></td>
            <td><?= $jumtotal_nilai_Wakil_Ketua_awal_P; ?></td>

            <td><?= $jumtotal_nilai_Wakil_Anggota_awal_L; ?></td>
            <td><?= $jumtotal_nilai_Wakil_Anggota_awal_P; ?></td>


            <td><?= $jumtotal_nilai_Ketua_akhir_L; ?></td>
            <td><?= $jumtotal_nilai_Ketua_akhir_P; ?></td>

            <td><?= $jumtotal_nilai_Wakil_Ketua_akhir_L; ?></td>
            <td><?= $jumtotal_nilai_Wakil_Ketua_akhir_P; ?></td>

            <td><?= $jumtotal_nilai_Wakil_Anggota_akhir_L; ?></td>
            <td><?= $jumtotal_nilai_Wakil_Anggota_akhir_P; ?></td>
        </tr>
    </tfoot>
</table>