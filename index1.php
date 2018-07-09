 
<?php

        if(isset($_POST['textarea'])){
            $textarea = $_POST['textarea'];
           
            echo "<br>";
            
            echo "<h2>"."Character Frequency Count"."</h2>";
            
            echo "<hr>";
            $store = count_chars($textarea,1);
            
            echo "<div align='middle'>";
            echo "<table align='middle' >
            <tr>
            <th>Character</th>
            <th>Count</th>
            </tr>";
            
            foreach($store as $k=>$v){
                echo "<tr>";
                echo "<td>".chr($k)."</td>";
                echo "<td>".$v."</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";   
            //character count
            
            
            echo "<br>";
            echo "<hr>";
             echo "<hr>";
            echo "<br>";
            
            
            //word count 
            echo "<h2>"."Word Count"."</h2>";
             echo "<hr>";
            $count = str_word_count($textarea,2)/*."<br>"*/;
            $arr = array_count_values($count);
            //echo print_r($arr);
            
            echo "<div align='middle'>";
            echo "<table align='middle' >
            <tr>
            <th>Word</th>
            <th>Count</th>
            </tr>";
            
            foreach($arr as $k=>$v){
                echo "<tr>";
                echo "<td>".$k."</td>";
                echo "<td>".$v."</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";
            //Word count section END
            
            
            echo "<br>";
            echo "<hr>";
           
        }

?>


<form action="index.php" method="post" align="middle">
    <input type="submit" value="Input Another String">
</form>