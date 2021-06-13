<html>
<head><title>Reverse</title></head>
<body style="background-color: black;color: red;margin-top: 20%">
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num" placeholder="Enter a number" /><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $num1 = $num;
        $revnum = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum =$sum + $rem;
            $revnum = ($revnum * 10) + $rem;
            $num = ($num / 10);
        }
        echo "The sum of the digits of $num1 is $sum"; 
        echo "</br>";
        echo "Reverse number of $num1 is $revnum";
        echo "</br>";
        if($num1 == $revnum){  
            echo "The number $num1 is Palindrome";     
        }else{  
            echo "The number $num1 is not a Palindrome";   
        }  
}     
      ?> 
</center>
</body>
</html>


