<?php

require_once "config.php";

$sql = "SELECT id,question,A,B,C,D FROM test_paper order by rand()";

if($result = $mysqli->query($sql)) {
	 
	 if($result->num_rows > 0){
        while($row = $result->fetch_array()){
       
                echo "<b>"."#"."."."</b>". "&nbsp;" . $row['question']. "<br>"."<input type=radio name=1 value=A>". $row['A'] ."<br>"."<input type=radio name=1 value=B>". $row['B'] ."<br>"."<input type=radio name=1 value=C>". $row['C'] ."<br>"."<input type=radio name=1 value=D>". $row['D'] ."<br>";
        }
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>