<?php
include 'db.php';
$team1Name = $_POST["team_1_name"];
$team2Name = $_POST["team_2_name"];
$team1Logo = $_POST["team_1_logo"];
$team2Logo = $_POST["team_2_logo"];
$leagueID = intval($_POST["league_id"]);
$leagueName = $_POST["league_name"];
$leagueLogo = $_POST["league_logo"];
$channelName = $_POST["channel_name"];
$date = $_POST["date"];
$c->query("INSERT INTO schedules (team_1_name, team_2_name, team_1_logo, team_2_logo, league_id, league_name, league_logo, channel_name, date) VALUES ('" . $team1Name . "', '" . $team2Name . "', '" . $team1Logo . "', '" . $team2Logo . "', " . $leagueID . ", '" . $leagueName . "', '" . $leagueLogo . "', '" . $channelName . "', '" . $date . "')");
