<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css"/>
    <title>chess</title>
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <input type="text" name="chess">
            <input type ="submit" name="submit" value="set the num"/>
</form>


</div>
<table>
    <?php
if(isset($_POST["submit"])){
$chess =$_POST["chess"];

for($row = 1;$row <= $chess;$row++){
      echo "<tr>";
for($col=1;$col<= $chess;$col++){
if(($row + $col) % 2 == 0){
    echo "<td class='bgcolor'>   </td>";
}else{
    echo"<td>  </td>";
}
}
    echo"</tr>";
}

}
    ?>
</table>
</body>
</html>