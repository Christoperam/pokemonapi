<?php include 'header.php'; ?>
<?php $data = json_decode(file_get_contents('https://pokeapi.co/api/v2/pokemon/'), true); ?>
<div class="container-fluid">
    <div class="row" id="rowTable">
        <div class="col-sm-12 table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Pok&eacute;mon</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Habilidad</th>
                    </tr>
                </thead>
                <?php foreach ($data as $item) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['url']; ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>