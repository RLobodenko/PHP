<!DOCTYPE html>
<html>

<head>
<style>


</style>
</head>

<body>

<table>
    <?php
    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = 5;
    $j = 6;
    $k = 7;
    $l = 8;
    $m = 9;
    
    {
    ?>
<tr><td ><?php echo $a; ?></td><td><?php echo $b; ?></td><td ><?php echo $c; ?></td><td><?php echo $d; ?></td><td><?php echo $e; ?></td><td ><?php echo $j; ?></td><td><?php echo $k; ?></td><td><?php echo $l; ?></td><td><?php echo $m; ?></td></tr>
<tr><td><?php echo $b; ?></td><td style="background-color:green"><?php echo $b * $b; ?></td><td style="background-color:green"><?php echo $b * $c; ?></td><td style="background-color:green"><?php echo $b * $d; ?></td><td style="background-color:green"><?php echo $b * $e; ?></td><td style="background-color:green"><?php echo $b * $j; ?></td><td style="background-color:green"><?php echo $b * $k; ?></td><td style="background-color:green"><?php echo $b * $l; ?></td><td style="background-color:green"><?php echo $b * $m; ?></td></tr>
<tr><td><?php echo $c; ?></td><td style="background-color:green"><?php echo $c * $b; ?></td><td><?php echo $c * $c; ?></td><td style="background-color:green"><?php echo $c * $d; ?></td><td><?php echo $c * $e; ?></td><td style="background-color:green"><?php echo $c * $j; ?></td><td><?php echo $c * $k; ?></td><td style="background-color:green"><?php echo $c * $l; ?></td><td><?php echo $c * $m; ?></td></tr>
<tr><td><?php echo $d; ?></td><td style="background-color:green"><?php echo $d * $b; ?></td><td style="background-color:green"><?php echo $d * $c; ?></td><td style="background-color:green"><?php echo $d * $d; ?></td><td style="background-color:green"><?php echo $d * $e; ?></td><td style="background-color:green"><?php echo $d * $j; ?></td><td style="background-color:green"><?php echo $d * $k; ?></td><td style="background-color:green"><?php echo $d * $l; ?></td><td style="background-color:green"><?php echo $d * $m; ?></td></tr>
<tr><td><?php echo $e; ?></td><td style="background-color:green"><?php echo $e * $b; ?></td><td><?php echo $e * $c; ?></td><td style="background-color:green"><?php echo $e * $d; ?></td><td><?php echo $e * $e; ?></td><td style="background-color:green"><?php echo $e * $j; ?></td><td><?php echo $e * $k; ?></td><td style="background-color:green"><?php echo $e * $l; ?></td><td><?php echo $e * $m; ?></td></tr>
<tr><td><?php echo $j; ?></td><td style="background-color:green"><?php echo $j * $b; ?></td><td style="background-color:green"><?php echo $j * $c; ?></td><td style="background-color:green"><?php echo $j * $d; ?></td><td style="background-color:green"><?php echo $j * $e; ?></td><td style="background-color:green"><?php echo $j * $j; ?></td><td style="background-color:green"><?php echo $j * $k; ?></td><td style="background-color:green"><?php echo $j * $l; ?></td><td style="background-color:green"><?php echo $j * $m; ?></td></tr>
<tr><td><?php echo $k; ?></td><td style="background-color:green"><?php echo $k * $b; ?></td><td><?php echo $k * $c; ?></td><td style="background-color:green"><?php echo $k * $d; ?></td><td><?php echo $k * $e; ?></td><td style="background-color:green"><?php echo $k * $j; ?></td><td><?php echo $k * $k; ?></td><td style="background-color:green"><?php echo $k * $l; ?></td><td><?php echo $k * $m; ?></td></tr>
<tr><td><?php echo $l; ?></td><td style="background-color:green"><?php echo $l * $b; ?></td><td style="background-color:green"><?php echo $l * $c; ?></td><td style="background-color:green"><?php echo $l * $d; ?></td><td style="background-color:green"><?php echo $l * $e; ?></td><td style="background-color:green"><?php echo $l * $j; ?></td><td style="background-color:green"><?php echo $l * $k; ?></td><td style="background-color:green"><?php echo $l * $l; ?></td><td style="background-color:green"><?php echo $l * $m; ?></td></tr>
<tr><td><?php echo $m; ?></td><td style="background-color:green"><?php echo $m * $b; ?></td><td><?php echo $m * $c; ?></td><td style="background-color:green"><?php echo $m * $d; ?></td><td><?php echo $m * $e; ?></td><td style="background-color:green"><?php echo $m * $j; ?></td><td><?php echo $m * $k; ?></td><td style="background-color:green"><?php echo $m * $l; ?></td><td><?php echo $m * $m; ?></td></tr>
<?php
}
?>
</table>
</body>
</html>
