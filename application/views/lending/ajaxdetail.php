<table id="example" class="table table-bordered table-hover " style="font-size:14px; width: 100%;">
    <thead style="text-align:center; vertical-align: middle;">
        <tr>
            <th width="50px">No</th>
            <th>Elemen Data</th>
            <th class="text-center">Tahun (<?= $tahunstart; ?>)</th>
            <th class="text-center">Tahun (<?= $tahunstart + 1; ?>)</th>
            <th class="text-center">Tahun (<?= $tahunend; ?>)</th>
            <th>Satuan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($getdata as $row) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row->nama . "</td>";
            echo "<td class='text-center'>" . $row->thn_1 . "</td>";
            echo "<td class='text-center'>" . $row->thn_2 . "</td>";
            echo "<td class='text-center'>" . $row->thn_3 . "</td>";
            echo "<td> Angka </td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </tbody>
</table>


<script>
    new DataTable('#example', {
        layout: {
            topStart: {
                buttons: [{
                        extend: 'copy',
                        className: 'btn btn-success glyphicon glyphicon-duplicate'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-success glyphicon glyphicon-save-file'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-success glyphicon glyphicon-list-alt'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-success glyphicon glyphicon-file'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-success glyphicon glyphicon-print'
                    }
                ]
            }
        }
    });
</script>