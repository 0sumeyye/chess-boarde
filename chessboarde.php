<!DOCTYPE html>
<html>
<head>
  <title>Chess Boarde</title>
</head>
<body>
	<div class="h-screen w-full flex items-center justify-center">
	<div class="flex flex-wrap w-full sm:w-9/12 md:w-6/12 lg:w-4/12">
		<div class="w-1/12">
  <table style="margin: outo;">
    <?php
    echo"<tr>";
       $letter=array("","a","b","c","d","e","f","g","h");

       	for($row=8;$row>=1;$row--)
       {
         for($col=1;$col<=8;$col++){

         	$cell=$row + $col ;

         	if($cell%2==0)
         	{
         		echo"<td height=50px; width =90px; bgcolor=gray>$letter[$col].$row</td>";

         	

         	}

         	else{
         		echo"<td height=90px; width =50px; bgcolor=white>$letter[$col].$row</td>";
         	}

         }

         echo"</tr>";
       }	
       ?>



   </table>
</body>
</html>


      
    ?>

    
  </table>

</body>
</html>
	
	
	