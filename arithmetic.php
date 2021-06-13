<html>
<head><title>Arithmetic</title></head>
<body style="background-color: black;color: red;">
<center>
    
     
    <form method="post">
        <table border="1">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter 1st value"/>
                </td>
            </tr>
            <tr>
            <td> <input type="text" name="num2"  placeholder="Enter 2nd value"/>
                </td>
            </tr>
            <tr>
                <td> <input type="text" name="option" placeholder=" + , - , * , / "/>
                </td>
            </tr>
            <tr>
                <td> <center><input type="submit" name="submit" value="Submit"/></center>
                </td>
            </tr>
        </table>
    </form>
 
<?php
 
if(isset($_POST['submit'])) {
 
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['option'];
 
    echo "The first number is $a"; 
    echo "</br>";
    echo "The second number is $b"; 
    echo "</br>";
    echo "+:Addition<br>";
    echo "-:Subtraction<br>";
    echo "*:Multiplication<br>";
    echo "/:Division<br>";

    switch($op) {
        case '+':
            $r = $a + $b;
            echo " Addition of two numbers = " . $r ;
            break;
 
        case '-':
            $r = $a - $b;
            echo " Subtraction  of two numbers= " . $r ;
            break;
 
        case '*':
            $r = $a * $b;
            echo " Multiplication of two numbers = " . $r ;
            break;
 
        case '/':
            $r = $a / $b;
            echo " Division of two numbers = " . $r ;
            break;
 
        default:
            echo ("invalid option\n");
    }
}
?>

</center>
</body>
</html>