<html>
<head><title>sqroot</title></head>
<body style="background-color: black;color: red;">
<h2>Number generated randomly is  <?php
    $num = rand(1, 100);
    echo $num;
?>.<br>And its square root is <?php
    echo round(sqrt($num),2);
?>.</h2>
</body>
</html>