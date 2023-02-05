<?php

if (!isset($_POST['submit'])){
    header("location: form.php");
    exit();
}

if (!empty($_POST['fname']&&$_POST['username']&&$_POST['pass'])) {
    if ($_POST['gender'] == 'male') {
        echo "Thanks Mr." . $_POST['fname'] . " " . $_POST['lname'];
        echo "<br>";
    } elseif ($_POST['gender'] == 'female') {
        echo "Thanks Miss." . $_POST['fname'] . " " . $_POST['lname'];
        echo "<br>";
    }
    echo "Please Review Your Information :";
    echo "<br>";
    echo "Name: " . $_POST['fname'] . " " . $_POST['lname'];
    echo "<br>";
    echo "Address: " . $_POST['address'];
    echo "<br>";

    echo "Your Skills: ";
    foreach ($_POST['skills'] as $skill) {
        echo $skill;
    }

}else{
    echo "please input your data....";
}

