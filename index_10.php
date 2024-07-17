<!DOCTYPE html>
<html>
<head>
</head>
<body>

<table>
<?php
    class Tehnika{
        public $shirina = 100;
        public $dlina = 200;
    
}

class Point3d extends Tehnika{
    public $holodilnik = 0;
    
    
    public function __construct() {
        $shirina = 110;
       $dlina = 150;
            
        }
    public function __toString(){
            return "shirina=" . $this->shirina ." dlina=". $this->dlina;
        }

    }
    $p2 = new Point3d(90,170);

    $p = new Point3d();
    echo $p;

    
    
  


?>
</table>
</body>
</html>
