<body><center>

<?php 

$number = $_POST['number'];

echo "<form method=POST action=''> 
      <input type=text name=number value='$number'> 
      <input type=Submit value='Submit'>
";
$factorial = 1;

for($i=1; $i<=$number; $i++){
    $factorial = $factorial * $i;
}

echo "<br><br>Factorial of $number is: ". $factorial;

?>

</center>

</body>


