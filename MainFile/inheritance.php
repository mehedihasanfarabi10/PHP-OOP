
<?php

    class employee{
        public $name;
        public $age;
        public $salary;

        public function __construct($n,$a,$s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;



        }

        public function employeInfo(){
            echo "<h2>Employe info </h2> <br>";
            echo "Employe Name : {$this->name}<br>";
            echo "Employe Age : {$this->age}<br>";
            echo "Employe Salary : {$this->salary}<br>";
        }
    }


    class manager extends employee{
        public $bonus = 300;
        public $totalSalary;

        

        public function managerInfo(){

            $this->totalSalary = $this->salary + $this->bonus;

            echo "<h2>Employe info </h2> <br>";
            echo "Manager Name : {$this->name}<br>";
            echo "Manager Age : {$this->age}<br>";
            echo "Manager Salary : {$this->salary}<br>";
            
            echo "Manager Total Salary : {$this->totalSalary}<br>";
        }
    }



    $employ = new employee("Mehedi Hassan",23,2000);
    $managers = new manager("Farabi Hassan",33,5000);

    $employ->employeInfo();
    $managers->managerInfo();
?>