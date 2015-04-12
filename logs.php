<?php
    function Smilify(&$name,&$subject)
    {
         $smilies = array(
           ':)' => 'happy',
           ':D' => 'laugh'     
         );
        $replace = array();
        foreach($smilies as $smiley=>$imgName){
            
            array_push($replace, '<img src= "'.$imgName.'.png" height = "18" width = "18"/>');
        }
        $subject = str_replace(array_keys($smilies), $replace, $subject);
        echo $name."- ".$subject."<br/>";
    }
    $servername = "localhost";
    $username = "root";
    $conn = new mysqli($servername, $username, '');
    $sqlsel = "SELECT username,message FROM chatapp.logs";
    $result = $conn->query($sqlsel);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            Smilify($row["username"],$row["message"]);
            //echo $row["username"]."- ".$row["message"]."<br/>";
        }
    } 
?>