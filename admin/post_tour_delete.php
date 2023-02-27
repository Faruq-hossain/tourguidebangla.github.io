<?php require_once('header.php'); ?>
<?php
if(!isset($_REQUEST['id']))
{
	header('location: index.php');
	exit;
}
else
{
	if(!is_numeric($_REQUEST['id']))
	{
		header('location: index.php');
		exit;
	}
	else
	{
		$q = $pdo->prepare("SELECT * FROM post_tour WHERE post_id=?");
		$q->execute([$_REQUEST['id']]);
		$total = $q->rowCount();
		if(!$total)
		{
			header('location: index.php');
			exit;
		}
	}
}


$q = $pdo->prepare("SELECT * FROM post_tour WHERE post_id=?");
$q->execute([$_REQUEST['id']]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$post_photo = $row['post_photo'];
}
unlink('../touruploads/'.$post_photo);

$q = $pdo->prepare("DELETE FROM post_tour WHERE post_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM post_tour_category WHERE post_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM post_tour_tag WHERE post_id=?");
$q->execute([$_REQUEST['id']]);

header('location: post_tour_view.php');