<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ2</title>
    
    <script src="localStorage.js">
    </script>
</head>
<div id="task">
    <p><b>Лаба2_Вариант7</b>

</div>
<form method="get" action="table.php">
League Championship: <select name="league" id="league" onchange="leagueFunction()">
            <?php
                include 'conn.php';
                $table = $game->distinct("league");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button>
</form>

<form method="get" action="list_of_player_by_team.php">
<p>List of players <select name="player" id="player" onchange="playerFunction()">
            <?php
                include 'conn.php';
                $table = $team->distinct("title");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button></p>
</form>
<form method="get" action="list_of_game_by_team.php">
<p>Game list :<select name="team" id="team" onchange="teamFunction()">
            <?php
                include 'conn.php';
                $table = $game->distinct("teams");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button> </p>
</form>
<div id="res"></div>
</body>

</html>