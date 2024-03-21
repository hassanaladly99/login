<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHNABO Restaurant </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

      


      body {
  font-family: 'Times New Roman', Times, serif;
  font-weight: bold;
  background-color: white;
  align-items: center;
  justify-content: center;
  text-align: center;
            
            height: 100vh;
            text-shadow: 0 0 2px;
            
}
       

div{
    width: 300;
    margin: auto;
    
}

h1{
    color: black;
font-size: 150%;
font-family: Arial, Helvetica, sans-serif;
text-align: center;
text-shadow: 0 0 2px;

}
.login-container{
width: 250px;
background-color:lightblue;
padding: 10px;
border-radius: 50px ;
box-shadow: 0 0 10px;

}


.login {
            font-weight: bold;
            background-color:#007bff ;
            color: #fff;
        border-radius: 20px;
        margin: auto;
        display: flex;
        
        justify-content: center;
        }
.signup{
    width: auto;
    
}

        </style>
</head>
<body>
<img class="logo" src="kk.png" width="300" height="200" >

    
       
    <h1> Welcome to Shnabo Restaurant Website </h1><br><br>
    <div class="login-container">
    
    <h2>login</h2>
        <?php 
       
        ?>
        
        <form> 
        
            <label for="username">Username:  </label><br>
            <input type="text" id="username" name="username" placeholder="Username"  ><br><br>
            <label  for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="***********"><br><br>
            <div  class="forgot-password" ><a href="#">Forgot Password?</a></div><br>
         
            
            
    <a class="login" href="userhome.php">login</a>
    <a class="signup" href="signup.php">sign up</a>
 
        
  
            
        </form>
        </div>
        </div>
</body>
</html>
