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
		$q = $pdo->prepare("SELECT * FROM photo_tour_category WHERE photo_category_id=?");
		$q->execute([$_REQUEST['id']]);
		$total = $q->rowCount();
		if(!$total)
		{
			header('location: index.php');
			exit;
		}
	}
}

// Delete all photos under this category
$q = $pdo->prepare("
			SELECT * 
			FROM photo_tour 
			WHERE photo_category_id=?
		");
$q->execute([ 
			$_REQUEST['id'] 
		]);
$res = $q->fetchAll();
foreach ($res as $row) {
	unlink('../touruploads/'.$row['photo_name']);
}

$q = $pdo->prepare("DELETE FROM photo_tour WHERE photo_category_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM photo_tour_category WHERE photo_category_id=?");
$q->execute([$_REQUEST['id']]);


header('location: photo_tour_category_view.php');