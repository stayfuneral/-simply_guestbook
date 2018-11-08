<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';?>
<h1><?php sitename();?></h1>
<p><a href="/">Вернуться на главную</a></p>
<div class="row mt-3">
    <h5>Новое название сайта:</h5>
</div>
<?php sitename_upd();?>
<div class="row mt-3">

    <div class="form-group mb-2">
        <form class="form-inline" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                <input class="form-control mr-2" type="text" name="title" placeholder="Новое название сайта">
                <button name="update" type="submit" class="btn btn-dark">Изменить</button>
        </form>
    </div>
</div>



<?php include $_SERVER['DOCUMENT_ROOT'] .  '/template/footer.php';?>