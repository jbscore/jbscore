<?php
include 'db.php';
$results = $c->query("SELECT * FROM schedules");
$schedules = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($schedules, $row);
	}
}
echo json_encode($schedules);
