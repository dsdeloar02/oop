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

          echo  "This fruits is {$this->name} and Color is {$this->color}";
        }

        public static function display(){
          echo "Full Name is: ".Fruit::NAME."<br/>";
          echo "Age is ;".self::$age;
        }

        public function __destruct(){
          unset($this->name);
          unset($this->color);
        }
      }



      $apple = new Fruit("Apple","red");
      echo "<br>";
      Fruit::display();

    ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>