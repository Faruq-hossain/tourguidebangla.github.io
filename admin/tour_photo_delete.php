<?php require_once('header.php'); ?>
<?php
$q = $pdo->prepare("SELECT * FROM tour_photo WHERE room_photo_id=?");
$q->execute([$_REQUEST['id']]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$room_photo = $row['room_photo'];
	unlink('../touruploads/' . $room_photo);
}
$q = $pdo->prepare("DELETE FROM tour_photo WHERE room_photo_id=?");
$q->execute([$_REQUEST['id']]);

header('location: tour_photo.php?id=' . $_REQUEST['id1']);
