<?php
    session_start();
    session_destroy();
    echo "<h2 style = 'margin:10px;'>You have successfully logged out. Click <a href ='index.php'>here</a> to login again</h2><br/>"; 
    echo "<body style = ' background-color: #b0c4de;' ></body>";     
?>