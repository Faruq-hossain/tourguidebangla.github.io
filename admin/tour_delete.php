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
		$q = $pdo->prepare("SELECT * FROM tour WHERE room_id=?");
		$q->execute([$_REQUEST['id']]);
		$total = $q->rowCount();
		if(!$total)
		{
			header('location: index.php');
			exit;
		}
	}
}


$q = $pdo->prepare("SELECT * FROM tour WHERE room_id=?");
$q->execute([$_REQUEST['id']]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$room_featured_photo = $row['room_featured_photo'];
	unlink('../touruploads/'.$room_featured_photo);
}

$q = $pdo->prepare("SELECT * FROM tour_photo WHERE room_id=?");
$q->execute([$_REQUEST['id']]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$room_photo = $row['room_photo'];
	unlink('../touruploads/'.$room_photo);
}

$q = $pdo->prepare("DELETE FROM tour WHERE room_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM tour_tour_feature WHERE room_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM tour_photo WHERE room_id=?");
$q->execute([$_REQUEST['id']]);

header('location: tour_view.php');