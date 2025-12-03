<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Computer{
        public $name;
        public $ram;
        public $memory;
        public $processor;
         public static function Shop() {
              echo "Modern Shop";
            }

        public function setProc($p){
            $this->processor=$p;
        }        

        function compare($a,$b){
        if  ($a->ram > $b->ram){
            echo $a->name . "<br>";

        }
        else {
             echo $b->name . "<br>";

        }
    }
    
        

        function __construct($m,$p,$n,$r){
            $this->memory=$m;
            $this->processor=$p;
            $this->name=$n;
            $this->ram=-$r;
        
        }
        function __destruct(){

        }

    }

    function maxrum($array){
            $max=$array[0];
            foreach ($array as $x) {
                if ($x->ram >$max->ram){
                    $max=$x;
                }
            }
            return $max->ram;
        
    }
 
    class Notebook extends Computer {
        public $touchscreen;
        function __construct($m, $p){

        }
        function __destruct(){

        }

    }
    // $b=new Notebook(36,"o2");
    // $c=new Notebook(25 ,"t4");
    // if ($b===$c) {
    //     echo "havsar en";
    // }
    // else {
    //     echo "havasr chen";
    // }
    $a= new Computer(512,"i7","ASUS",7);
    $b= new Computer(366,"i1","Panasonic",8);
    $c= new Computer(122,"i6","Lenovo",4);

    $compArr=[ new Computer(512,"i7","ASUS",7) , new Computer(366,"i1","Panasonic",8),  new Computer(122,"i6","Lenovo",4) ];
    echo maxrum($compArr);

    ?>
 <?php echo Computer::Shop()?>
    <table>
  <tr>
    <th><?php echo "name"?></th>
    <th><?php echo "ram"?></th>
    <th><?php echo "memory"?></th>
    <th><?php echo "processor"?></th>
  </tr>
  <?php foreach ($compArr as $x) { ?>
  <tr>
    <td><?php echo $x->name ?></td>
    <td><?php echo $x->ram ?></td>
    <td><?php echo $x->memory ?></td>
    <td><?php echo $x->processor ?></td>
  </tr>
  <?php } ?>
</table>
    
</body>
</html>