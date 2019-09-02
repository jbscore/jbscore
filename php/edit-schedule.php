<?php
include 'db.php';
$id = intval($_POST["id"]);
$team1Name = $_POST["team_1_name"];
$team2Name = $_POST["team_2_name"];
$team1Logo = $_POST["team_1_logo"];
$team2Logo = $_POST["team_2_logo"];
$leagueName = $_POST["league_name"];
$leagueLogo = $_POST["league_logo"];
$channelName = $_POST["channel_name"];
$date = $_POST["date"];
$c->query("UPDATE schedules SET team_1_name='" . $team1Name . "', team_2_name='" . $team2Name . "', team_1_logo='" . $team1Logo . "', team_2_logo='" . $team2Logo . "', league_name='" . $leagueName . "', league_logo='" . $leagueLogo . "', channel_name='" . $channelName . "', date='" . $date . "' WHERE id=" . $id);
