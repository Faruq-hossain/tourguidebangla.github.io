<?php require_once('header.php'); ?>
<?php
// security issu check start
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
		$q = $pdo->prepare("SELECT * FROM emergency WHERE id=?");
		$q->execute([$_REQUEST['id']]);
		$total = $q->rowCount();
		if(!$total)
		{
			header('location: index.php');
			exit;
		}
	}
}

// security issu check end


$q = $pdo->prepare("SELECT * FROM emergency WHERE id=?");
$q->execute([$_REQUEST['id']]);
$res = $q->fetchAll();


$q = $pdo->prepare("DELETE FROM emergency WHERE id=?");
$q->execute([$_REQUEST['id']]);

header('location: hospital_view.php');