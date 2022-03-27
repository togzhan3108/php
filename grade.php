<!DOCTYPE html>
<body>

<!-----------Task 1-------------->
<form action="" method="POST">
    <p>Search in the txt file: <input type="text" name="text"/></p>
    <p><input type="submit" name="grade" value="Search"/></p>
</form>


<?php
if (isset($_POST["grade"])){
    $find = $_POST["text"];
    switch ($find) {
        case $find < 50:
        case "0":
            echo "Fail";
            break;
        case $find >= 90 && $find <= 100:
            echo "Your grade is A.";
            break;
        case $find >= 75 && $find < 90:
            echo "Your grade is B.";
            break;
        case $find >= 50 && $find < 75:
            echo "Your grade is C.";
            break;
        default:
            echo "Please, enter again!";
    }
}
?>
</body>
</html>
