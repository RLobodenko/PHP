<!DOCTYPE html>
<html>
<head>
</head>
<body>

<table>
<?php
    class Moloko{
        public $cena = 120;
        public $shirina = 30;
        public $obem = 1;
        public $dlina = 30;
        public $vysota = 100;
        public function __construct() {
                $this->cena = 100;
                $this->shirina = 50;
                $this->obem = 3;
                $this->dlina = 50;
                $this->vysota = 110;
                
            }
        public function __toString(){
                return "cena=" . $this->cena ." ob'em=". $this->obem;
            }
       
    }
$p2 = new Moloko(130,40,2,40,200);

$p = new Moloko();
echo $p;
?>
</table>
</body>
</html>
