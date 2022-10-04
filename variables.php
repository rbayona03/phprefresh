<?php 
// echo "Variables";

// $name = 'rob';
// $age = 30;
// $hasKids = false;
// $cash = 20.75;

// echo $name . ' is ' . $age;


/////////////
//arrays


// //simple array
$numbers = [1,2,3];
$fruits = array('apple', 'orange', 'banana');

// print_r($numbers);
// var_dump($fruits);

// //associative array
$colors = [
    'r' => 44,
    'g' => 6,
    'b' => 20,
];


/////////////////
 //loops

// <?php 
// for($i = 0; $i <= 10; $i++){
//     echo $i;
// }



// foreach($numbers as $number){
//     echo $number;
// }


 
// foreach($numbers as $index => $number){
//     echo $index . '- ' . $number . '<br>';
// }

// foreach($numbers as $index => $number){
//     echo $index . '- ' . $number . '<br>';
// };

// foreach($colors as $key => $value){
//     echo $key . '=>' . $value . '<br>';
// }


///////////////////
//functions

// function register($email){
//     echo $email . ' registered';
// };

// register('rob');

// function sum($n1 = 4, $n2 = 2){
//     return $n1 + $n2;
// }

// $total = sum();
// echo $total

/////////////////
//Array function

// echo count($fruits);

// $numbersArr = range(1, 10);

// $newNum = array_map(function($item){
// if($item == 7){
//     return "7 ate 9";
// }else{
// return "Number ${item}";
// }
// }, $numbersArr);


// $sevenIso;
// print_r($newNum);


////////////////
//Get & post
//echo $_GET['name'];

//php self will point to own url
// ?name will be added to end of url


if(isset($_POST['submit'])){
    echo $_POST['name'];
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