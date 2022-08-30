<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row" id="rowTable">
        <?php foreach ($data['results'] as $item) { ?>
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-title">
                        <img id="cardImgTitle" src="" alt="">
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-3" for="">Pok&eacute;mon:</label>
                            <label class="col-sm-7" for=""><?php echo $item['name']; ?></label>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php' ?>