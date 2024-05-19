<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rounded-5">
        <div class="modal-content ">

            <div class="modal-body  bg-opacity-12">
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                <hr>
                <?php if ($Gerdataid->nilaiJenis == '1') { ?>
                    <?php echo $Gerdataid->Tulisan; ?>
                    <br>
                <?php } else if ($Gerdataid->nilaiJenis == '2') { ?>
                    <img class="img-fluid rounded p-1 " src="img/popup/<?php echo $Gerdataid->img; ?>" alt="" style="width:100%; ">
                <?php } ?>
                <hr>
                <center>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        Tutup
                    </button>
                </center>

                <br>
            </div>

        </div>
    </div>
</div>
<script src="tmpDepan/bootstrap5/js/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $("#exampleModal").modal('show');
    });
</script>