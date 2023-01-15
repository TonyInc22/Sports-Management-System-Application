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
            width:300px; 
            height:30px;
            border-right: 1px solid black;
            border-top: 1px solid white; 
            line-height: 0px;
            display: inline-block;
        }
    </style>
        <meta charset="utf-8">
        <title>Locations</title>
    </head>
    <body>
        <h1>Locations</h1>
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
                $columns = array("City", "State", "Indoors");
                $columnDBNames = array("City", "State", "Indoors");
                $rownum = 0;
                $rows = [["City"=>"New York", "State"=>"NY", "Indoors"=>"F"]];
                // Print column headers
                $line = "";
                for ($column = 0; $column < count($columns); $column++){
                    $line = $line . '<div class="columnBoxDiv", style="line-height:30px"><strong>' . $columns[$column] . '</strong></div>';
                }
                echo '<div class="topLineDiv">' . $line . '</div><bk>';
                //while($row = $result->fetch_assoc()) {
                foreach($rows as &$row){
                    $line = "";
                    for ($column = 0; $column < count($columns); $column++){
                        $line = $line . '<div class="columnBoxDiv"><p>' . $row[$columnDBNames[$column]] . '</p></div>';
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

        <!-- Define menu -->
        <b class="header">MENU</b>
        <div class="myDiv", style="text-align: left">
        <a href="players.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">PLAYERS</p></div></a>
        <a href="teams.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">TEAMS</p></div></a>
        <a href="contracts.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">CONTRACTS</p></div></a>
        <a href="games.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px"><p style="color:black">GAMES</p></div></a>
        <a href="locations.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:90px"><b style="color:black">LOCATIONS</b></div></a>
        <a href="conferences.php"><div class="columnBoxDiv", style="width: 16%; height: 100px; line-height:60px; border-right: 0px none black"><p style="color:black">CONFERENCES</p></div></a>
        </div>
    </body>
</html>