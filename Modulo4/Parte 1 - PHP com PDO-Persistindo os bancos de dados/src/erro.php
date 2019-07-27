<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Erro</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo $e->getMessage() ?>
    </div>
</div>
<?php require_once 'rodape.php' ?>
