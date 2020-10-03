<?php	if(ISSET($_POST['calculate'])){?>

<table class="table table-bordered">
	<?php
		for($i = 1; $i <= $_POST['digit']; $i++) {
			echo "<tr>";
			
			for($j = 1; $j <= 10; $j++){
	
				echo"<td>".$i * $j."</td>";
			}
			
			echo"</tr>";
		}
	?>
</table>

<?php }?>