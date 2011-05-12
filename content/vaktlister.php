<?PHP

echo "
<div class='post'><h2 class='title'>Vaktlister:</h2></u>
			<div class='entry'>
				<h3>Liste over vaktlister for Slottsfjell 2010</h3>
				<p> 
";
/*
 		$path='files/vakt/';  // change the path here related to $
                $handle=opendir($path);
                while (($file = readdir($handle))!==false) {
                        if(strlen($file)>3){
                                echo "<a href=$path$file>$file</a> <br>";
                        }
                }
                closedir($handle);
*/
				
echo "
			</p>
			</div>
			<p class='meta'> Posted by:  <a href='#'>Kiro</a> &nbsp;|&nbsp; 
			<a href='#'>comments</a>&nbsp;|&nbsp;
			</p>
		</div>
";

if($_SESSION['admin']==1){
	echo "	
	Jeg jobber med filopplasting av vaktlister. Til det er feridig kan vaktlister sendes til:  
	<a href=mailto:magnuskiro@gmail.com>magnuskiro@gmail.com</a> -Kirø
	";
	
}

?>