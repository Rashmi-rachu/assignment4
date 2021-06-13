<html>
<head><title>Armstrong</title></head>
<body style="background-color: black;color: yellow;">
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num" placeholder="Enter a number" /><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $total=0;  
        $x=$num;  
        while($x!=0)  
        {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
        }  
        
        if($num==$total)  
        {  
        echo " it is an Armstrong number";  
        }  
        else  
        {  
        echo "it is not an armstrong number";  
        }  
    }     
?> 
</center>
</body>
</html>


