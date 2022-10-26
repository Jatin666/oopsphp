<html>
    <body>
        <?php
        
        class Fruit {
            public $name;
            public $color;
            
            function __construct($name,$color) {
                $this-> name = $name;
                $this->color= $color;

            }
          //inside fruit class
        public function intro(){
            echo " A ($this->name) is a fruit and the color of the fruit is ($this->color).";
        
        }

        }

        class Cherry extends Fruit{
           public $weight;
           public function __construct($name, $color, $weight){

            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
           }

           public function intro(){
            echo "this fruit is {$this-> name}, the color of {$this-> name} is {$this->color}, and the weight is{$this-> weight}"; 
        }
            }
         

            //creating an object
            $cherry = new Cherry("Cheery", "pink", 20);
            $cherry -> intro();

        
        ?>
    </body>
</html>