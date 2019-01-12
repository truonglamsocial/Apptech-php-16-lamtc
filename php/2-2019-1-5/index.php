<!-- <?php 
	$a = 5;
	$b = 7;
	$c = $a + $b;

	echo "Ket qua cua a + b la: $c";
?> -->

<!--  <h1>
 	<?php 
		$a = 5;
		$b = 7;
		$c = $a + $b;

		echo "Ket qua cua a + b la: $c";
 	?>
 </h1> -->

<!-- <?php  
 
 echo strlen('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eaque neque, dolorum ipsa velit hic dicta ullam eligendi. Provident nihil exercitationem itaque ad distinctio, natus, harum nemo aut porro omnis.');

?> -->

<!-- 
<h1>
<?php 
	$status = 'off';
	if ($status == 'on') {
		echo "</br> Den dang sang";
	} else {
		echo "</br> Den dang tat";
	}
	
 ?>
</h1>
 -->

<!-- Vong lap for loop -->
<!-- <h1>
<?php 
	for ($x = 0; $x <= 20; $x++) {
		echo "The number is: $x  </br>";
	}
	
 ?>
</h1> -->

<!-- Array -->
<!-- <h1>
<?php 
	$mangDemo = ['Xuan','Ha','Thu', 'Dong'];

	// echo $mangDemo[1] . '</br>';
	
	for ($i = 0; $i < count($mangDemo); $i++) { 
		echo $mangDemo[$i] . '<br>';	
	}
 ?>
</h1> -->

<?php  
	$product = [
		'iphone X' =>
			['price' => 18000, 'color' => 'rose'],
		'ipad' =>
			['price' => 9000, 'color' => 'gray'],
	];
	echo "<table>";
	foreach($product as $key => $row) {
	    echo "<tr>";
	    foreach($row as $key2 => $row2){
	        echo "<td>" . $row2 . "</td>";
	    }
	    echo "</tr>";
	}
	echo "</table>";

?>