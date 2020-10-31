<!DOCTYPE html>
<html>
<head>
	<title>Contoh Looping</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
<div class="container-fluid">
	<div class="col-md-12 input-group" >
		<div class="col-sm-3">
			<i>A. rata atas kiri</i>
			<br>
			<?php
			// rata atas kiri

			for($i=1; $i<=5; $i++){
			for($x=1; $x<=$i; $x++){
			echo $x;
			}
			echo "<br />";
			}
			?>
		</div>
		<div class="col-sm-3">
			<i>B. rata atas kiri kebalik</i>
			<br>
			<?php 
			$star1=5;
			for ($a=1; $a <= $star1 ; $a++) { 

				for ($b=$star1; $b >= $a ; $b-=1) { 
					echo "$b";
				}
				echo "<br>";
			}

			?>
		</div>
		<div class="col-sm-3" >
		<i>C. rata atas kanan</i>
		<br>
		<?php 
		// rata atas kanan
		echo '<p style="float: left; text-align: right;">';
		for($i=1; $i<=5; $i++){
		for($x=$i; $x>=1; $x--){
		echo $x;
		}
		echo "<br />";
		}
		echo '</p>';
		echo "<br>";
		?>
		</div>
		<div class="col-sm-3">
			<i>D. rata bawah kiri</i>
			<?php
			// rata bawah kiri
			echo "<br />";
			for($i=5; $i>=1; $i--){
			for($x=1; $x<=$i; $x++){
			echo $x;
			}
			echo "<br />";
			}
			?>
		</div>
	</div>
	<div class="col-md-12 input-group">
		<div class="col-sm-3">
			<label>E.</label>
			<br>
			<?php
			// rata bawah kanan

			echo '<p style="float: left; text-align: right;">';
			for($i=5; $i>=1; $i--){
			for($x=$i; $x>=1; $x--){
			echo $x;
			}
			echo "<br />";
			}
			echo '</p>';
			?>
		</div>
		<div class="col-sm-3">
			<label>F.</label>
			<br>
			<?php
			// rata bawah kanan

			for($i=5; $i>=1; $i--){
			for($x=$i; $x>=1; $x--){
			echo $x;
			}
			echo "<br />";
			}
			echo '</p>';
			?>
		</div>

		<div class="col-sm-3">
			<label>G.</label>
			<br>
			<?php
			// rata bawah kanan

			// echo '<p style="float: left; text-align: right;">';
		for($i=1; $i<=5; $i++){
		for($x=$i; $x>=1; $x--){
		echo $x;
		}
		echo "<br />";
		}
		echo '</p>';
		echo "<br>";
			?>
		</div>
	</div>
	<div class="input-group">
		<div class="col-sm-3">
			<label>H</label>
			<br>
			<?php
			echo '<p style="float: center; text-align: center;">';
			
				for($x=1; $x <=5 ; $x++){
					
					for ($i=$x; $i <= 4 ; $i++) { 
						echo "$i";
					}
					for ($b=5; $b >= $x ; $b--) { 
						echo "$b";
					}
					echo "<br/>";
				}
				for($x=4; $x >= 1 ; $x--){
					
					for ($i=$x; $i <= 4 ; $i++) { 
						echo "$i";
					}
					for ($b=5; $b >= $x ; $b--) { 
						echo "$b";
					}
					echo "<br/>";
				}
			echo "</p>";
			?>
		</div>
		<div class="col-sm-3">
			<label>I</label>
			<br>
			<?php
			echo '<p style="float: center; text-align: center;">';
			for( $a=4; $a>0; $a--){
			    for($i=1; $i<=$a; $i++){
			        echo "  ";
			    }for($a1=5; $a1>$a; $a1--){
			        echo"$a1";
			    }for($a2=4; $a2>$a; $a2--){
			        echo"$a2";
			    }echo"<br>";
			}for($b=0; $b<=4; $b++){
			    for($j=1; $j<=$b; $j++){
			        echo"  ";
			    }for($b1=5; $b1>$b; $b1--){
			        echo"$b1";
			    }for($b2=4; $b2>$b; $b2--){
			        echo"$b2";
			    }echo"<br>";
			}
			echo "</p>"
			?>
		</div>

		<div class="col-sm-3">
			<label>J</label>
			<br>
			<?php
			echo '<p style="float: center; text-align: center;">';
				for ($i=1; $i <= 5 ; $i++) { 
					for ($b=1; $b <= $i ; $b++) { 
						echo "$b";
					}
					for ($a=$i-1; $a >= 1 ; $a--) { 
						echo "$a";
					}
					
					echo "<br/>";
				}
				for ($x=4; $x >= 1 ; $x--) { 
					for ($b=1; $b <= $x ; $b++) { 
						echo "$b";
					}
					for ($a=$x-1; $a >= 1 ; $a--) { 
						echo "$a";
					}
					echo "<br/>";
				}
			echo "</p>";
			?>
		</div>
	</div>


</div>
</body>
</html>