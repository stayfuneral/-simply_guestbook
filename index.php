<?php

require $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title><?php sitename();?></title>
</head>
<body>
        <div class="container">
        <h1><?php sitename();?></h1>
        <div class="row">
            <div class="col-md-4 p-2">
            <p>Добавьте свой отзыв</p>
            <?php insert_review();?>
                <form class="form-group" action="/index.php" method="POST">
                    <input class="mt-2 form-control" type="text" name="name" placeholder="Ваше имя" />
                    <textarea class="mt-2 form-control" type="textarea" name="review" placeholder="Ваш отзыв" ></textarea>
                    <button name="submit" type="submit" class="btn btn-lg btn-info mt-2">Отправить</button>
                </form>
            </div>
            <div class="col-md-8 p-2">
                <?php review_list();?>
            </div>
        </div>
        
        
        </div>
    

<?php mysqli_close($connection);?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>