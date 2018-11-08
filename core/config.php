<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/db.php';

function sitename() {
    global $connection;

    $sql    = "SELECT * FROM sitename";
    $query  = mysqli_query($connection, $sql);
    $result = mysqlI_fetch_assoc($query);
    if ($_SERVER['REQUEST_URI'] == "/backstage/") {
        echo $result['title'] . ' - Админка';
    }
    else {
        echo $result['title'];
    }
    
}

$title  = $_POST['title'];
$update_btn = $_POST['update'];

function sitename_upd() {
    global $connection, $title, $update_btn;

    if(isset($update_btn)) {
        $sql = "UPDATE sitename SET title='$title'";
        $upd = mysqli_query($connection, $sql); ?>
        <p>Вы поменяли название сайта! Для того, чтобы увидеть изменения, <a href="<?php echo $_SERVER['REQUEST_URI']?>">обновите страницу</a></p>
    <?php 
        }
}

$name   = $_POST['name'];
$review = $_POST['review'];
$submit = $_POST['submit'];

function insert_review() {
    global $connection, $name, $review, $submit;

    if(isset($submit)) {
        $sql = "INSERT INTO reviews (name, review)
                VALUES ('$name', '$review')";
        $insert = mysqli_query($connection, $sql); ?>
        <p>Ваш отзыв добавлен! Для того, чтобы его увидеть, <a href="<?php echo $_SERVER['REQUEST_URI']?>">обновите страницу</a></p>
    <?php }   
}

function review_list() {
    global $connection;


    $select  = "SELECT * FROM reviews
                ORDER BY id DESC";
    $query   = mysqli_query($connection, $select);

    while ($result = mysqli_fetch_array($query)) {?>
        <h4><?php echo $result['name'];?></h4>
        <p><?php echo $result['review'];?></p>
        <hr />
    
    <?php }
}
?>