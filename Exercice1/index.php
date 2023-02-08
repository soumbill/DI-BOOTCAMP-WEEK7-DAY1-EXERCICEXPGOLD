<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD-Exo1 | W7_D1</title>
</head>
<body> 
    <h1>Exercise 1 : Calculator Class</h1>
    <?php 
        class MyCalculator {
            public $number1;
            public $number2;

            public function __construct($number1, $number2){
                $this -> number1 = $number1;
                $this -> number2 = $number2;
            }

            public function add(){
                $somm = $this -> number1 + $this -> number2;
                return $somm;
            }

            public function multiply(){
                $multiple = $this -> number1 * $this -> number2;
                return $multiple;
            }

        }
        $mycalc = new MyCalculator(12,6);

        echo $mycalc -> add();
        echo '<br>';
        echo $mycalc -> multiply();


    ?>
</body>
</html>