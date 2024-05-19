<?php foreach ($GetJudulIdkategori->result() as $row) { ?>
<div class="card  a">
    <div class="card-body">
        <a href="adminpanel/DataSigaUser/Data/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>/"
            class="btn btn-primary btn-sm  elevation-1">
            Lihat Data
        </a>
        <?php echo $row->judul; ?>
    </div>
</div>
<?php } ?>