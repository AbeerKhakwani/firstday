<?php

class parcel{
    private $width;
    private $height;
    private $weight;
    private $depth;


function __construct($height, $width, $weight, $depth){
    $this->width=$width;
    $this->height=$height;
    $this->weight=$weight;
    $this->depth=$depth;

}

function setWidth($new_width){
    $float_width= (float) $new_width;
    if ($float_width !=0 ){
        $formatted_width = number_format($float_width, 2);
        $this->width = $formatted_width;
    }
}


    function getWidth(){
    return $this->width;

}

function setHeight($new_height){
    $float_number=(float)$new_height;
    if($floatnumber !=0){
        $formatted_height = number_format($float_height, 2);
        $this->height=$formated_price;
    }
}

function getHeight(){
    return $this->height;
}

function setWeight($new_weight){
    $float_number=(float)$new_weight;
    if($floatnumber !=0){
        $formatted_weight = number_format($float_weight, 2);
        $this->weight=$formated_price;
    }
}

function getWeight(){
    return $this->weight;
  }

 function setDepth($new_depth){
      $float_number=(float)$new_depth;
      if($floatnumber !=0){
          $formatted_weight = number_format($float_weight, 2);
          $this->depth=$formated_price;
      }
  }

  function getDepth(){
      return $this->depth;
    }


function  volume(){
 return $this->height * $this->weight * $this->depth;

  }


  function costOfShipping(){
      if ($this->volume() > 4){
      echo "<br/>Your shipping cost will be $10";
         }
     }

}


$parcel1= new parcel($_GET['height'],$_GET['width'],$_GET['weight'],$_GET['depth']);



?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cars</title>
</head>

<body>

<?php
if(empty($_GET['height']) && empty($_GET['width']) && empty($_GET['weight']) && empty($_GET['depth']) ){
    echo "Please Fill out all the feilds";


}
elseif(empty($_GET['height']) || empty($_GET['width']) || empty($_GET['weight']) || empty($_GET['depth'])){

    echo "Please Fill out the empty feild";

}
else{
echo "<h1>You entered</h1>";
echo "<h3>height</h3>";
$height=$parcel1->getHeight();
echo $height;
echo "<h3>Width</h3>";
$width=$parcel1->getWidth();
echo $width;
echo "<h3>Depth</h3>";
$depth=$parcel1->getDepth();
echo $depth;
echo "<h3>Weight</h3>";
$weight=$parcel1->getWeight();
echo $weight;
echo "<br/>The Volume of the package is:";
$test= $parcel1->volume();
echo $test;
$costofshipping=$parcel1->costOfShipping();
echo $costofshipping;
}

?>
</body>
</html>
