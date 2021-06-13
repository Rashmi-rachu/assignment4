<html>
<head><title>string</title></head>
<body style="background-color: black;color: red;">
<center>
     <h2>
        String Operations
    </h2>
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br><br>
        <select name="string" >
               
                <option value="reverse" required>Reverse</option>
                <option  value="length">Length Of The String</option>
                <option  value="substring">Substring</option>
                <option  value="upper">Upper Case</option>
                <option   value="lower">Lower Case</option>
                <option  value="words">No Of Words</option>
                
           
            </select>
       
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

 
<?php   
    if($_POST)  
    {   
        $string =$_POST['string'];
        $txt = $_POST['txt'];

        switch($string){
            case 'reverse': $rev = strrev($txt);
                            echo 'The reversed string  is: '. $rev;
                            break;
            case 'length':  
                            $len = strlen($txt);
                            echo "The length of the string  is: ". $len;
                            break;
            case 'substring':$sub = substr($txt, 3, 10);
                            echo "The substring of the string is: ". $sub;
                            break;
            case 'upper': $up = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $up;
                            break;
            case 'lower':$low = strtolower($txt);
                            echo "The string ".$txt. " in lowercase is: ". $low;
                            break;
            case 'words':$word = str_word_count($txt);
                            echo "The number of words in the string  is: ". $word;
                            break;

        }
       
    }     
?> 
</center>
</body>
</html>


