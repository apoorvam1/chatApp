<?php
    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $conn = new mysqli($servername, $username, '');   
        
        $uname = $_POST['uname'];
        $password1 = $_POST['password'];
        $password2 = $_POST['passworddup'];
        
        if($password1 != $password2){
            echo "<p style = 'margin:10px;'><b>Passwords do not match.</b></p> <br/>";   
        }
        else{
            $uexist = "SELECT username from chatapp.user WHERE username = '$uname'";
            $result = $conn->query($uexist);
            if($result->num_rows > 0){
                echo "<p style = 'margin:10px;'><b>User name already exists, please choose a different name.</b></p>";   
            }
            else{
                $res = "INSERT INTO chatapp.user (username,password) VALUES ('$uname','$password1')";
                $resl = $conn->query($res);
                echo "<h2 style = 'margin:10px;'>You have successfully registered. Click <a href = 'index.php'>here</a> to login to start your chat.</h2><br/>";
            }
        }
            
    }
?>

<html>
    <head>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <style>
            @media all and (min-width: 300px) and (max-width: 600px) {
            .form-control {
                    margin-left: 1%;
                    width: 200px;
                } 
                label,.btnSubmit,a{
                    margin-top: 1%;
                    margin-left: 1%;
                }
                a{
                    color : #390CED;   
                }
                .btnSubmit{
                    margin-top: 1%;
                    margin-left: 1%;
                    border: none;
                    border-radius: 2px;
                    background-color: #FCA139;
                    width: 80px;
                    height: 30px;
                    color: white;
                }
            }
            @media all and (min-width: 601px) and (max-width: 1000px)  {
                .form-control {
                    margin-left: 1%;
                    width: 250px;
                } 
                label,.btnSubmit,a{
                    margin-top: 1%;
                    margin-left: 1%;
                }
                a{
                    color : #390CED;   
                }
                .btnSubmit{
                    margin-top: 1%;
                    margin-left: 1%;
                    border: none;
                    border-radius: 2px;
                    background-color: #FCA139;
                    width: 80px;
                    height: 30px;
                    color: white;
                } 
            }
            
            @media all and (min-width:1001px) and (max-width: 2000px)  {
                .form-control {
                    margin-left: 1%;
                    width: 250px;
                } 
                label,.btnSubmit,a{
                    margin-top: 1%;
                    margin-left: 1%;
                }
                a{
                    color : #390CED;   
                }
                .btnSubmit{
                    margin-top: 1%;
                    margin-left: 1%;
                    border: none;
                    border-radius: 2px;
                    background-color: #FCA139;
                    width: 80px;
                    height: 30px;
                    color: white;
                } 
                
            }
        </style>    
    </head>
    <body  style = ' background-color: #b0c4de;'>
        <form name = 'regform' role = "form" method = 'post' action = 'register.php'>
            <div class="form-group"> 
                <label for='username'>Choose your name: </label>
                <input type="text" class="form-control" name = 'uname'>
            </div>    
            <div class="form-group"> 
                <label for='password'>Create a password: </label>
                <input type ='password' name = 'password' class="form-control">
            </div> 
            <div class="form-group"> 
                <label for='password'>Repeat your password: </label>
                <input type ='password' name = 'passworddup' class="form-control">
                <input type="submit" class="btnSubmit" value = 'register' name="submit"/>
            </div> 
        </form>    
    </body>

</html>