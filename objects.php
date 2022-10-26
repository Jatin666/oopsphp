<html>
    <body>
        <h1>The fruit program</h1>
        <?php
        class Fruit {
//when you define a class the variable is an property and while function is known as methods

            public $name;  
            public $color;
            //using getter and setter to get the properties of name
            function set_name($name){
                $this -> name = $name;
            }
            function get_name(){
                return $this->name;
            }
        }
        //creating an object of a class
        //objects are the instance  of an class
        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('Apple');
        $banana->set_name('Banana');

        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();

         ?>
    </body>
</html>