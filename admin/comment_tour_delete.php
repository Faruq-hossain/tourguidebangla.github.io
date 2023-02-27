<?php require_once('header.php'); ?>
<?php

$q = $pdo->prepare("DELETE FROM reply_tour WHERE comment_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM comment_tour WHERE comment_id=?");
$q->execute([$_REQUEST['id']]);


header('location: all_tour_comments.php');