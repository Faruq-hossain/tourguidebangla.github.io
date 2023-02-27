<?php require_once('header.php'); ?>
<?php
$q = $pdo->prepare("DELETE FROM feature_tour WHERE feature_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM feature_tour_language WHERE feature_id=?");
$q->execute([$_REQUEST['id']]);

// $_SESSION['d_msg'] = 'Feature id deleted successfylly!';


header('location: feature_tour_view.php');