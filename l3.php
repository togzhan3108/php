<!DOCTYPE html>
<body>
<!-----------Task 1-------------->
<?php
if(isset($_POST["submit1"])) {
    $name = $_POST['firstname'];
    $surname = $_POST['lastname'];
    $email =  $_POST['email'];
    echo "My name is " . $name . ". My surname is " . $surname . ".<br> Email: " . $email;
}
?>
<form action="" method="POST">
    <p>Firstname: <input type="text" name="firstname"/></p>
    <p>Lastname: <input type="text" name="lastname"/></p>
    <p>Email: <input type="text" name="email"/></p>
    <p><input type="submit" name="submit1" value="Submit"/></p>
</form>


<!-----------Task 2-------------->
<!-----------Search string in the text, find positions of the string -------------->
<?php
if (isset($_POST["submit2"])){
    $text = "My name is Togzhan, your name is Aigerim.";
    $find = $_POST["word"];
    echo "Occurences: <br>". substr_count($text, $find) . "<br>";
    echo "Position: <br>". strpos($text, $find) . "<br>";
}
?>
<form action="" method="POST">
    <p>Search: <input type="text" name="word"/></p>
    <p><input type="submit" name="submit2" value="Find"/></p>
</form>






<!-----------Task 3-------------->

<form action="" method="POST">
    <p>Search in the txt file: <input type="text" name="text"/></p>
    <p><input type="submit" name="submit3" value="Search"/></p>
</form>


<?php
if (isset($_POST["submit3"])){
    $count = 0;
    $find = $_POST["text"];
    $fileList = glob("/Users/togzhan3108/PhpstormProjects/jas/*.txt");

    foreach($fileList as $filename) {
        if(is_file($filename)){
            if(strpos(file_get_contents($filename), $find) !== false){
             echo "<a href='" . substr($filename, 40). "'>" . basename($filename) . "</a><br><br>";
             $count++;
            }
        }
    }
    echo $count . " files was found.";
}
?>

</body>
</html>