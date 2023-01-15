<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <style>
        h1 {text-align: center;}
        .header{padding-left:20px;}
        div {text-align: center;}
        .myDiv {
        border: 1px outset black;
        background-color: white;
        border-radius: 25px;
        }
        .topLineDiv {
        border: 1px outset black;
        background-color: white;
        text-align: left;
        padding-top: 0px;
        border-top-right-radius: 25px;
        border-top-left-radius: 25px;
        }
        .lineDiv {
        border: 1px outset black;
        text-align: left;
        background-color: white;
        }
        .bottomLineDiv {
        border: 1px outset black;
        background-color: white;
        text-align: left;
        border-bottom-right-radius: 25px;
        border-bottom-left-radius: 25px;
        }
        .columnBoxDiv {
            width:200px; 
            height:30px;
            border-right: 1px solid black;
            border-top: 1px solid white; 
            line-height: 0px;
            display: inline-block;
        }
    </style>
        <meta charset="utf-8">
        <title>Players</title>
    </head>
    <body>
        <h1>Players</h1>
        <b class="header">ROSTER</b>
        <div class="myDiv">
            <?php
                /*
                // Create connection
                $conn = new mysqli("CMPSC431-S1-G-2.vmhost.psu.edu", "tja5357", "champ123", "431WG2");

                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                // Query player table
                $sql = "SELECT FName, LName, Age, Positon FROM Players";
                $result = $conn->query($sql);
                */    
                // Create the table
                $columns = array("First Name", "Last Name", "Age", "Position", "Team");
                $columnDBNames = array("FName", "LName", "Age", "Position", "TName");
                $rownum = 0;
                // In the dummy data "RBI" is a user defined column
                $rows = [["FName"=>"Joe", "LName"=>"Dimagio", "Age"=>"11", "Position"=>"Left", "TName"=>"Yankees", "RBI"=>"24"]]; // Dummy data
                // Print column headers
                $line = "";
                for ($column = 0; $column < count($columns); $column++){
                    $line = $line . '<div class="columnBoxDiv", style="line-height:30px"><strong>' . $columns[$column] . '</strong></div>';
                }
                // User-defined headers (use the first entry to get user-defined column names)
                foreach (array_keys($rows[0]) as $key){
                    if (!in_array($key, $columnDBNames)) {
                        $line = $line . '<div class="columnBoxDiv", style="line-height:30px"><strong>' . $key . '</strong></div>';
                    }
                }
                echo '<div class="topLineDiv">' . $line . '</div><bk>';
                //while($row = $result->fetch_assoc()) {
                foreach($rows as &$row){
                    $line = "";
                    for ($column = 0; $column < count($columns); $column++){
                        $line = $line . '<div class="columnBoxDiv"><p>' . $row[$columnDBNames[$column]] . '</p></div>';
                    }
                    // Add user-defined columns
                    foreach (array_keys($row) as $key){
                        if (!in_array($key, $columnDBNames)) {
                            $line = $line . '<div class="columnBoxDiv"><p>' . $row[$key] . '</p></div>';
                        }
                    }
                    
                    if ($rownum == count($rows) - 1){
                        echo '<div class="bottomLineDiv">' . $line . '</div><bk>';
                    }else{
                        echo '<div class="lineDiv">' . $line . '</div><bk>';
                    }
                    $rownum++;
                }
                //$conn->close();
            ?>
        </div>
        <b class="header">ADD PLAYER</b>
        <div class="myDiv">
            <form>
                <p>First Name: </p>
                <input type="text" id="fname" name="fname">
                <p>Last Name: </p>
                <input type="text" id="lname" name="lname">
            </form>
        </div>
        <!-- Define menu -->
        <b class="header">MENU</b>
        <div class="myDiv", style="text-align: left">
        <a href="players.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:90px"><b style="color:black">PLAYERS</b></div></a>
        <a href="teams.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">TEAMS</p></div></a>
        <a href="contracts.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">CONTRACTS</p></div></a>
        <a href="games.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">GAMES</p></div></a>
        <a href="locations.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">LOCATIONS</p></div></a>
        <a href="conferences.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px; border-right: 0px none black"><p style="color:black">CONFERENCES</p></div></a>
        </div>
    </body>
</html>