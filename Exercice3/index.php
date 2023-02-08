<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD-Exo1 | W7_D1</title>
</head>
<body>
    <h1>Exercise 3 : Product Class Set Properties</h1>
    <?php 
        class Product{
            public $name;
            public $description;
            public $price;

            //Le constructeur
            public function __construct($name, $description, $price){
                $this -> name = $name;
                $this -> description = $description;
                $this -> price = $price;
            }

            public function display(){
                    echo 'Le nom du telephone est : ' . $this -> name;
                    echo ' et sa description est : ' . $this -> description;
                    echo ' ainsi que le prix est : ' . $this -> price .' £';
            }
        }
        
        $product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99);
        $product1 -> display();
        
        echo '<br><br>';
        
        $product2 = new Product('iPhone 12 Pro', 'This is a great iPhone', 899.99);
        $product2 -> display();

    ?>
</body>
</html>