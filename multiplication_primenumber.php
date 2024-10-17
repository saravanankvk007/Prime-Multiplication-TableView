<!-- multiplication_primenumber.php -->
<DOCTYPE html>

<html>

<head>
	<meta charset='UTF-8'>
	<title> Prime Number Multiplication </title>
	<style>
		.prime {
			display:flex;
			justify-content:center;
			align-items:center;
		}
		.alt{
			display:flex;
			justify-content:center;
			align-items:center;
			color: red;
		}
		table{
			border-collapse:collapse;
		}
		th, td{
			border: 1px solid #000;
			padding:8px;
		}
	</style>
</head>

<body>
	<center> 
		<h1> Prime Number Multiplication</h1>
	</center>
	<div class='prime'>
		<form method='POST' action="">
			<label> Enter the Input Value</label>
			<Input type='number' name='numvalue' id='numvalue' value='' required />
			<input type='submit' name='submit' value ='submit' />
		</form>
	</div>
</body>

</html>

<?php

//find the Prime
function isprime($num) {
	//
	if($num <= 1) return false;
	for($i=2; $i <= sqrt($num); $i++) {
		//
		if($num % $i === 0) return false;
	}
	
	return true;
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST['numvalue'];
	if($num >=1){
		$getPrimeCollection = getPrimeCollection($num);
		
		echo "<h2 class='prime'>Multiplication Table of the First	". count($getPrimeCollection)." Prime Numbers</h2></br></br>";
		echo "<div class='prime'>";
			
			echo "<table class='tableview' width='30%'>";
				echo "<tr><th>*</th>";
				foreach($getPrimeCollection as $primeVal) {
					echo "<th> $primeVal</th>";
				}
				echo "</tr>";
				
				foreach($getPrimeCollection as $primeVal) {
					echo "<tr> <th> $primeVal</th>";
					foreach($getPrimeCollection as $primeValMul) {
						echo "<th>". $primeVal * $primeValMul . "</th>";
					}
					echo "</tr>";
				}
				
			echo"</table>";
		echo"</div>";
		
	} else {
		echo "<div class='alt'> Please Enter the whole number atlest one (1)</div> ";
	}
	
	
}

function getPrimeCollection($arg = 0) {
	$prime = [];
	//$num = 2;
	for($i= 0; count($prime) < $arg; $i++)
	{
		if(isprime($i)){
			$prime[]=$i;
		}
	}
	
	return $prime;
}
