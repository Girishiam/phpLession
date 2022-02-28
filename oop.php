<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>


<section class="php-oop">
    <div class="container">
        <div class="row">


        <?php
            class Person{

                public $name;
                public $age;


                public function __construct($name , $age){
                    $this->name = $name;
                    $this->age = $age;

                }

                public function persondetails(){
                    echo "Person name is {$this->name} and age is {$this->age} <br>";
                }

            }
            $personOne = new Person("Girish" , 22);
            $personOne->persondetails();
            



            
                
        
        
        ?>
        <br>



        <h1>Calculation with OOP</h1>
        <form method="post">
            <label for="numberOne">Number 1</label>
            <input type="number" id="numberOne"placeholder="Enter number one" name="numberOne"><br><br>
            <label for="numberTwo">Number 2</label>
            <input type="number" id="numberTwo"placeholder="Enter number two" name="numberTwo"><br><br>
            <input type="submit" name='calculation' value="Calculate"><br><br><br><br><br>

        </form>
        <?php
        if(isset($_POST['calculation'])){
            $name1 = $_POST['numberOne'];
            $name2 = $_POST['numberTwo'];

            if (empty($name1) or empty($name2)){
                echo "<span style='color:red';>Field must not be empty!</span><br>";

            }
            else{
                echo "Number one is : " . $name1."<br>";
                echo "Number two is : " . $name2."<br>";
            }


            class Calculate{
                function add($a, $b){
                    echo "sum is : ".($a+$b)."<br>";
                }
                function sub($a, $b){
                    echo "sub is : ".abs($a-$b)."<br>";
                }
                function mul($a, $b){
                    echo "mul is : ".($a*$b)."<br>";
                }
                function div($a, $b){
                    echo "div is : ".($a/$b)."<br>";
                }




            }
            $calc = new Calculate();
            $calc->add($name1,$name2);
            $calc->sub($name1,$name2);
            $calc->mul($name1,$name2);
            $calc->div($name1,$name2);
        }
        
        
        
        ?>





        </div>
    </div>
</section>
    
</body>
</html>