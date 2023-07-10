<?php
//1.

session_start();
if (isset($_SESSION['login'])) {
    // echo '<a href="index.php">Logout</a>';
} else { ?>
<form method="post" action="login.php">
Login
<input type="text" name="login"> <br/>
<input type="submit">
</form>
<?php } ?> 


<!-- 2. -->

<!-- <form action = "login.php" method = "post">
    <input type = "text" name = "name" /><br><br>
    <input type = "text" name = "lastname" /><br><br>
    <input type = "text" name = "age" /><br><br>
    <input type = "text" name = "country" /><br><br>
    <input type = "submit" />
</form> -->


<?php //3.

// $jsonData = '[ { "name" : "John Garg", "age" : "15", "school" : 
//     "Ahlcon Public school" }, { "name" : "Smith Soy", 
//     "age" : "16", "school" : "St. Marie school" }, { 
//     "name" : "Charle Rena", "age" : "16", "school" : 
//     "St. Columba school" } ]';
//     $newData = json_decode ($jsonData, true);
//     foreach ($newData as $object){
//         foreach ($object as $key => $value){
//             echo $key . ' => ' . $value . "<br>";
//         }
//     }
?>

