<?php
    session_start();
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $conn = new mysqli($servername, $username, '');
    $sqllogin = "SELECT * from chatapp.user WHERE username = '$uname' AND password = '$password'";
    $result = $conn->query($sqllogin);

    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        $_SESSION['uname'] = $res['username'];
        echo "<h2 style = ' margin:10px;'> Welcome to our chat box. click <a href = 'index.php'>here</a> to open your main chat window.</h2>";
        
    }
    else{
        echo "<h2 style = 'margin:10px;'>No user found.Please <a href = 'index.php'>go back</a> and enter the correct login.</h2><br/>";
        echo "<h2 style = 'margin:10px;'>Click <a href = 'register.php'>here</a> to register for a new account.</h2><br/>";
    }
        
   echo "<body style = ' background-color: #b0c4de;' ></body>"; 

?>