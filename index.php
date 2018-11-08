<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';?>
        <h1><?php sitename();?></h1>
        <div class="row">
            <div class="col-md-4 p-2">
            <p>Добавьте свой отзыв</p>

            <?php insert_review();?>
                <form class="form-group" action="/" method="POST">
                    <input class="mt-2 form-control" type="text" name="name" placeholder="Ваше имя" />
                    <textarea class="mt-2 form-control" type="textarea" name="review" placeholder="Ваш отзыв" ></textarea>
                    <button name="submit" type="submit" class="btn btn-lg btn-info mt-2">Отправить</button>
                </form>
            <p><a href="/backstage/">Изменить название сайта</a></p>
            </div>
            <div class="col-md-8 p-2">
                <?php review_list();?>
            </div>
        </div>
        
        
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/template/footer.php';?>