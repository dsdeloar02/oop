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

      for($i=0; $i<10; $i++){}

      $arr = array("HTML","CSS","JAVA","PHP");
      $coding = new ArrayObject($arr);

      $iterator = $coding->getIterator();
      while ($iterator->valid()) {
        echo $iterator->current()."<br/>";
        $iterator->next();
      }

?>
    


   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>