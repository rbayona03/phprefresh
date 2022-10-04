<h1>Sanitize Inputs</h1>

<?php 
if(isset($_POST['submit'])){
   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    //filter input - checks if 'name or variable exist'
    //input post checks the method
    //checks the 'name' variable
    //FILTER_SANITIZE_SPECIAL_CHARS will ignore <>&
   echo $name;
}
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=rob">click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label>name</label>
    <input type="text" name='name'>
</div>
<div>
    <label>age</label>
    <input type="text" name='age'>
</div>
<input type="submit" value="submit" name="submit">
</form>