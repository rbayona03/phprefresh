<?php 
include 'sessionHeader.php';
?>
<h1>Sessions</h1>

<?php

if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
     //filter input - checks if 'name or variable exist'
     //input post checks the method
     //checks the 'name' variable
     //FILTER_SANITIZE_SPECIAL_CHARS will ignore <>&
    $password = $_POST['password'];

    if($name == 'rob' && $password == 'password'){
        //if true
        $_SESSION['username'] = $name;
        // collect input data and redirect
        header('Location: \extras\dashboard.php');
    }else{
        echo 'incorrect login info';
    }
 }
 ?>
 <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=rob">click</a>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 <div>
     <label> username</label>
     <input type="text" name='username'>
 </div>
 <div>
     <label>password</label>
     <input type="password" name='password'>
 </div>
 <input type="submit" value="submit" name="submit">
 </form>
