<html>
<head><title>Arithmetic</title></head>
<body style="background-color: black;color: red;margin-top: 20%">
<center>
    
     
    <form method="post">
    	enter the number:
    	<input type="number" name="number" id="number" placeholder="Enter the number">
    	<input type="submit" name="submit" value="submit"/>
    </form>
    <?php
    if($_POST){
    $fact = 1;
    $n=$_POST['number'];
    function fact($n)
    {
    	if($n<=1)
    	{
    		return 1;

    	}
    	else
    	{
    		return $n*fact($n-1);
    	}
    }
    echo "factorial of number is ".fact($n);

}