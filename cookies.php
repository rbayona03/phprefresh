<h1>Cookies</h1>
<?php 
//set cookie
setcookie('name', 'rob', time() + 86400); 

//allows access to specific key in cookie
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}
?>