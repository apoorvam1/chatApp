<?php
    session_start();
    if(!isset($_SESSION['uname'])){
    
?>   
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
                    width:250px;
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
                    width:250px;
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
    <body style = ' background-color: #b0c4de;' >
    <form name = 'loginform' role = "form" action = 'login.php' method = 'POST'>
        <div class="form-group">    
                <label for="username">Username: </label>
                <input type="text" class="form-control" name = 'uname' id = 'uname'/>                
        </div>
        <div class="form-group">    
                <label for="Password">Password: </label>
                <input type = 'password' name = 'password' class="form-control"/>                
        <input type="submit" class="btnSubmit" value = 'Login' name="submit" id="submit"/>
        </div> 
        <a href = 'register.php'>Click here to register</a>
    </form>
    </body>    
<?php
    
    exit;        
    }
?>

<html>
<head>
    <title>chat box</title>
    <link rel = "stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <style>
        @media all and (min-width: 200px) and (max-width: 600px) {
            div.chatlogs{
                width:70%;
                height:50%;
                border: 2px solid #a1a1a1;
                margin:7px;
                border-radius: 5px;
                padding-left: 5px;
                padding-top: 2px;
                overflow-y: scroll;
            }
            .jumbotron {
                padding-left: 0px;
                padding-top: 4px;
                padding-bottom: 4px;
                max-height: 60px;
                margin-bottom: 0px;
                background-image: url(abs.jpg);
                background-position: 0% 25%;
                background-size: cover;
                background-repeat: no-repeat;
                color: white;
                text-shadow: black 0.3em 0.3em 0.3em;
            } 
            input,p{
             margin:7px;   
            }
            textarea#msg{
                margin:7px;   
                border-radius: 5px;
                width:70%;
            }
            a{
                border: none;
                border-radius: 5px;
                background-color: #FCA139;
                padding-top: 0.5%;
                padding-bottom: 0.5%;
                padding-left: 1%;
                padding-right: 1%;
                color: white; 
                text-decoration:none;
                margin:7px;   
            }
            #hdr {
                font-size:20px;
            }
        }
        @media all and (min-width: 601px) and (max-width: 1000px) {
              div.chatlogs{
                width:350px;
                height:350px;
                border: 2px solid #a1a1a1;
                margin:7px;
                border-radius: 5px;
                padding-left: 5px;
                padding-top: 2px;
                overflow-y: scroll;
            }
            .jumbotron {
                padding-left: 0px;
                padding-top: 4px;
                padding-bottom: 4px;
                max-height: 60px;
                margin-bottom: 0px;
                background-image: url(abs.jpg);
                background-position: 0% 25%;
                background-size: cover;
                background-repeat: no-repeat;
                color: white;
                text-shadow: black 0.3em 0.3em 0.3em;
            } 
            input,p{
             margin:7px;   
            }
            textarea#msg{
                margin:7px;   
                border-radius: 5px;
                width:350px;
            }
            a{
                border: none;
                border-radius: 5px;
                background-color: #FCA139;
                padding-top: 0.5%;
                padding-bottom: 0.5%;
                padding-left: 1%;
                padding-right: 1%;
                color: white; 
                text-decoration: none;
                margin:7px;   
            }  
        }
        
         @media all and (min-width: 1001px) and (max-width: 2000px) {
             div.chatlogs{
                width:350px;
                height:350px;
                border: 2px solid #a1a1a1;
                margin:7px;
                border-radius: 5px;
                padding-left: 5px;
                padding-top: 2px;
                overflow-y: scroll;
            }
            .jumbotron {
                padding-left: 0px;
                padding-top: 4px;
                padding-bottom: 4px;
                max-height: 60px;
                margin-bottom: 0px;
                background-image: url(abs.jpg);
                background-position: 0% 25%;
                background-size: cover;
                background-repeat: no-repeat;
                color: white;
                text-shadow: black 0.3em 0.3em 0.3em;
            } 
            input,p{
             margin:7px;   
            }
            textarea#msg{
                margin:7px;   
                border-radius: 5px;   
                width:350px;
            }
            a{
                margin:7px;   
                border-radius: 5px;
                border: none;
                border-radius: 5px;
                background-color: #FCA139;
                padding-top: 0.5%;
                padding-bottom: 0.5%;
                padding-left: 1%;
                padding-right: 1%;
                color: white; 
                text-decoration: none;
            }  
         }

    </style>
    <script>
        function sendMsg()
        {
            if(boxform.msg.value == '')
            {
                alert("Type in your message");   
                return; 
            }
            
            
            var msg = boxform.msg.value;
            var xmlhttp = new XMLHttpRequest();
   
            
            xmlhttp.open('GET','http://localhost/chatApp/insert.php?msg='+msg,true);
            
                     
             xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) { 
                    document.getElementById("chatlogs").innerHTML=xmlhttp.responseText;
                }
            }
                          
            xmlhttp.send();
            document.getElementById('msg').value='';
            $(document).ready(function(e){
                $.ajaxSetup({cache:false}); 
                  setInterval(function(){$('#chatlogs').load('logs.php');}, 0);
            });

        }

        
    </script>
    
</head>
<body>
    <a href = "logout.php" style="float:right; margin-top: 5%">logout</a>  
    <form name = 'boxform' id = 'boxform'>
     <div class="jumbotron">
        <h2 id='hdr'>Simple Chat Application </h2>
    </div>    
    <div id = 'chatlogs' class="chatlogs" cols="50">
        Chatlog is loading...
    </div> 
        
    <textarea id = 'msg' name = 'msg' row = '2' placeholder="Enter message..."></textarea><br/>
    <a href = "#"  onclick = "sendMsg()">Send</a><br/><br/>    
    <p> User Name : <?php echo $_SESSION['uname']; ?></p><br/>
          

    <br/> 
        
    
</body>    
</html>