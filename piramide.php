<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table style="border-collapse:collapse;">
<?php
$i2 = "";
for($i=1;$i<=10;$i++){
    ?>
    <tr>
    <?php
    for($x=1;$x<=$i;$x++){
            ?>
            <td style="background-color:black; padding:0; margin:0;" height="30px" width="30px"></td>
            <?php
    }
    ?>
    </tr>
    <?php
}
?>
</table>
</body>
</html>