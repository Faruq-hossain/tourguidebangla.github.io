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
		$q = $pdo->prepare("SELECT * FROM service_tour WHERE service_id=?");
		$q->execute([$_REQUEST['id']]);
		$total = $q->rowCount();
		if(!$total)
		{
			header('location: index.php');
			exit;
		}
	}
}

$q = $pdo->prepare("DELETE FROM service_tour WHERE service_id=?");
$q->execute([$_REQUEST['id']]);

$_SESSION['d_msg'] = 'Tour Service is deleted successfully!';

header('location: service_tour_view.php');