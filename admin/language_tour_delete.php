<?php require_once('header.php'); ?>
<?php
$q = $pdo->prepare("SELECT * FROM language_tour WHERE lang_id=?");
$q->execute([$_REQUEST['id']]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$lang_default = $row['lang_default'];
	$lang_code = $row['lang_code'];
}
if($lang_default == 'default')
{
	$q = $pdo->prepare("UPDATE language_tour SET 
				lang_default=?
				WHERE lang_id=?
			");
	$q->execute([ 
				'default',
				1
			]);
}

$q = $pdo->prepare("DELETE FROM language_tour WHERE lang_id=?");
$q->execute([$_REQUEST['id']]);

$q = $pdo->prepare("DELETE FROM feature_tour_language WHERE lang_code=?");
$q->execute([$lang_code]);

header('location: language_tour_view.php');