<!doctype html>
<html>
<head>
 <title>PHP Code Practice</title>
 <style>
  body{font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "PHP Code Practice"; ?></h2>
 </section> 
<section class="maincontent">
 
 
  
    <?php
      class Fruit {
        public $name;
        public $color;
        const NAME = "Deluar Hossain Khan";
        public static $age = "30" ;

        public function __construct($name, $color) {
          $this->name = $name;
          $this->color = $color;

          
        }

        public function display(){

          echo  "This fruits is {$this->name} and Color is {$this->color}";
        }

      }

      class Admin extends Fruit{
          public $level;
          public function display(){
            echo  "This fruits is {$this->name} and Color is {$this->color} and level is {$this->level}";
          }

      }



      $apple = new Fruit("Apple","red");
      echo "<br>";
      $apple->display();
      echo "<br>";
      // $fruits = "Orange";
      // $colors = "Yellow";
      $admin = new Admin("Orange", "Yellow");
      $admin->level = "Administrator";
      $admin->display();

    ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>