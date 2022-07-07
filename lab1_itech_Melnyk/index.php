<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ1</title>
   
</head>
<div id="task">
   

    <figure class="pic_w_caption">
        <img src="https://github.com/melnyk-m/IntT/blob/main/meme2.png?raw=true">
        <figcaption>Рисунок 5.7 – эволюция</figcaption>
    </figure>
</div>

<form method="GET" action="table.php">
Championship table: <select name="league" id="league">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT league FROM $db.team";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <button> submit </button>
</form>


<form method="GET" action="list_of_game_by_date.php">
Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="date" id="date">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT date FROM $db.game";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <button> submit </button>
</form>


<form method="GET" action="list_of_game_by_player.php">
  Player's name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="player" id="player">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT * FROM $db.player";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[1]);
            echo "</option>";
        }
        ?>
    </select>
    <button> submit </button>
</form>
</body>

</html>