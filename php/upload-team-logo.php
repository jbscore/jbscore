<?php
include 'db.php';
$fileName = $_POST["file_name"];
move_uploaded_file($_FILES["file"]["tmp_name"], "../userdata/team_logos/" . $fileName);
