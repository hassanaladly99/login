<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>

<style>
body{
    background-color: white;
}
input[type=text],select{
    width: auto;
    padding: 12 20px;
    margin: auto;
    display: inline;
    border: 10px;
    border-radius: 15px;
    background-color: white;
    display: flex;
    

}
input[type=password]{
    width: auto;
    padding: 12 20px;
    margin: auto;
    display: inline;
    border: 10px;
    border-radius: 15px;
    background-color: white;
    display: flex;
}
li{
    width: 5%;
    background-color: lightblue;
    color: lightblue;
    padding: 10 20px;
    margin: auto;
    border: 20px;
    border-radius: 20px;
align-items: center;
text-align: center;

}
li:hover{
    background-color: lightblue;
}
li a:hover{
    background-color: lightblue;
}
form{
    
   

margin: auto;
width: 50px;
text-align: center;


justify-content: center;
width: auto;
background-color:lightblue;
padding: 10px;
border-radius: 50px ;
box-shadow: 0 0 10px;
align-items: center;
}

.logo{
    border-radius: 900px;
  padding: auto;
    margin: auto;
    height: 100px;
    width: 100px;
align-items: center;
justify-content: center;
text-align: center;
display: flex;
}





</style>



</head>

<body>
    <img class="logo" src="kk.png">
<form action="/signup.php">
<label for="fname">name</label>
<input type="text" id = "name" name="fullname" placeholder="Full Name">
<label for="email">Email</label>
<input type="text" id = "email" name="email" placeholder="email">
<label for="password">password</label>
<input type="password" id = "password" name="password" placeholder=" enter password">
<label for="password">password</label>
<input type="password" id = "password" name="password" placeholder="re-enter password">


</br>
</select>
<ul>
    <li><a href="login.php">signup</a></li>
    <li><a href="AddProduct.php">clear</a></li>
 

</form>



</body>
</html>