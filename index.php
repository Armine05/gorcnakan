<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BAREV!</h1>
    <?php
    $a=5;
    echo "<h3>$a</h3>";
    $A=7;
    echo $A. "<br>";
    function f($x){
        global $A;
        return $A+$x;
    }
    echo f(15). "<br>";;

    function anun($a,$b){
        if($a<$b) {
            return pow($a,2)+pow($b,2);
        }
        else { 
            return $a-$b;
        }
    }
     echo "<h3>tpel funk@</h3>";
    echo anun(3,4). "<br>";
    echo anun(4,3). "<br>";

    function shabat ($tiv){

        switch($tiv) {
            case 1:
            echo"erkushabti";
            break;
            
            case 2:
            echo"ereqshabti";
            break;

            case 3:
            echo"choreqshabti";
            break;

            case 4:
            echo"hingshabti";
            break;

            case 5:
            echo"urbat";
            break;

            case 6:
            echo"shabat";
            break;

            case 7:
            echo"kiraki";
            break;

            default:
            echo "tenc or chka";
        }
    }
    echo shabat(4);

    function stexcel_zangvac($chap){
     if (gettype($chap) != "double" && gettype($chap) != "float" && gettype($chap) != "integer") {
        return "tiv che";
    }
    if(is_int($chap)) {
        if($chap>0) {
             $nor[0]=$chap;$nor[1]=0;
           return $nor;
        } 
         $nor[0]=(-1)*$chap;$nor[1]=0;
        return $nor;
         
    }
    $chap=(string)$chap;
    $parts = explode('.', $chap); 
   // $nor[0]=$parts[0];
   // $nor[1]=$parts[1];
    return [$parts[0],$parts[1]];
    }
   $result=stexcel_zangvac(12.5);
   print_r($result);
    $result=stexcel_zangvac(5);
   print_r($result);


    ?>
</body>
</html>