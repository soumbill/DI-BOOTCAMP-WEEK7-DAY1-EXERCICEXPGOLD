<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD-Exo1 | W7_D1</title>
</head>
<body>
    <h1>Exercise 2 : Product Class</h1>
    <?php 
        class Product{
            public $name;
            public $description;
            public $price;

            public function display(){
                return $this -> name;
            }
            
        }
        $product1 = new Product();
        echo 'La valeur de la propriété de la premiere instance est : ' . $product1 -> name = 'iPhone 14';
        // echo $product1 -> display();

        echo '<br><br>';
         
        $product2 = new Product();
        echo 'La valeur de la propriété de la deuxieme instance est : ' . $product2 -> name = 'iPhone 14 Pro';
        // echo $product2 -> display();
    ?>
</body>
</html>