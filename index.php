<!-- <?php
        echo "Hello World! <br>";
        echo "From Sabil !!";
        // This is a comment
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>
        Order Pizza
    </button>
</body>
</html> -->

<!-- <?php
        // Variables
        $name = "Sabil";
        $age = 20;
        $gpa = 2.5;

        echo "My name is $name and I am $age years old. <br>";
        echo "My name is " . $name . " and I am " . $age . " years old. <br>";
        echo "My GPA is {$gpa} <br>";
        ?> -->

<!-- 
<?php
$num1 = 5;
$num2 = 10;

$total = $num1 + $num2;

echo "The total is $total <br>";
?> -->



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>
            Username:
        </label><br>
        <input type="text" name="username" id="username" placeholder="Enter your username"><br>
        <label>
            Password:
        </label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>


<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo "Username: $username <br>";
echo "Password: $password <br>";
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>X: </label>
        <input type="number" name="X" id="X" placeholder="Enter a number"><br>
        <label>Y: </label>
        <input type="number" name="Y" id="Y" placeholder="Enter a number"><br>
        <input type="submit" value="Add">
    </form>
</body>

</html>


<?php
$x = $_POST['X'];
$y = $_POST['Y'];

$total = $x + $y;
echo "The total is $total <br>";
?>