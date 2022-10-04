<h1>
    Error Handle
</h1>

<?php 
function inverse($x){
    if(!$x){
        throw new Exception('Divide by zero');
    }

    return 1/$x;
}


try{
    echo inverse(5);
    echo inverse(0);

}catch(Exception $e){
    echo 'Caught Error, ', $e->getMessage(), ' ';
};
?>