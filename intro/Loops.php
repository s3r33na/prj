<?php
$counter=1;
while ($counter<=5){
    echo($counter);
    echo("</br>");
    $counter=$counter+1;

}
$row=1;

echo("<table border=1>");
while($row<=7){
    echo("<tr>");  
    $col=1;
    while($col<=10){
        echo ("<td>". $row*$col ."  </td>");  
        $col++;
    }
   
    echo ("</tr>"); 
    $row++;

}
echo("</table>");
echo "<table border = '1' >";
for ($row=1; $row<+5;$row++){
    echo "<tr>";
    for($col=1; $col<=5; $col++){

        echo "<td>".$col * $row."</td>";
    
    }
    echo "</tr>";
    
}
echo "</table>";
?>