<?php
	if(isset($_POST["post"])){
		$title = $_POST["jobtitle"];
		$location = $_POST["location"];
		$jtype = $_POST["salary"];
		$jfield = $_POST["type"];
		$bonuses = $_POST["bonuses"];
		$reps = $_POST["responb"];
		$quals = $_POST["quals"];
		$duration = $_POST["duration"];

		foreach($bonuses as $x){
			echo $x .= ";";
		}
	}
?>