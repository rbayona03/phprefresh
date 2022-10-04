<h1>Object Oriented Programming</h1>
<?php
class User{
    //props are attributes belonging to a class
    //public accessed from anywhere
    //private access only from class
    //protected access from only classes and inherited classes
     
    public $name;
    public $email;
    public $password;

    //constructor
    public function __construct($name, $email, $password){
        //echo 'Constructor ';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        
    }

    //methods are functions that belong to classes
    //sets property = setter
    function set_name($name){
        $this->name = $name;
    }

    //get property = getter
    function get_name(){
        return $this->name;
    }
}

//$user1 = new User('brad', 'email@email', '122333');
//$user1->set_name('rob');

//var_dump($user1);
//echo $user1->get_name();

//Inheritance
class employee extends User{
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
  
    public function get_title(){
        return $this->title;
    }
}

$employee1 = new employee('rob', 'rob@rob.com', 1234, 'ceo');
var_dump($employee1);
?>