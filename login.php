
<?php
    //1.

session_start();
if (isset($_POST['login']) && !empty ($_POST['login'])){
   session_destroy ();
   echo '<a href="index.php">Logout</a>';
}else if (empty ($_POST['login'])){
    echo 'write your info';
}


//2.

// if ($_SERVER['REQUEST_METHOD'] === 'POST'){
//     if (!empty ($_POST['name'])){
//         $name = $_POST['name'];
//         echo 'Name: ' . json_encode ($name) . "<br>";
//     }
//     if (!empty ($_POST['lastname'])){
//         $lastname = $_POST['lastname'];
//         echo 'Last name: ' . json_encode ($lastname) . "<br>";
//     }
//     if (!empty ($_POST['age'])){
//         $age = $_POST['age'];
//         echo 'Age: ' . json_encode ($age) . "<br>";
//     }
//     if (!empty ($_POST['country'])){
//         $country = $_POST['country'];
//         echo 'Country: ' . json_encode ($country) . "<br>";
//     }
// }

?>