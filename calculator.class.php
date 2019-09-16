	<?php
				$configs = include('config.php');
				$link = mysqli_connect($configs['host'], $configs['username'], "", "multiplicationtable");
				 $Result=$_POST['result'];
				 $Factor1=$_POST['factor1'];
				 $Factor2=$_POST['factor2'];
				// Check connection
				if($link === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				 
				$sql = "INSERT INTO multiplicationtable (result,factor1,factor2,operation) VALUES ($Result,$Factor1,$Factor2,'*')";
				// Attempt insert query execution
				if(mysqli_query($link, $sql)){
					echo "Records inserted successfully.";
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				 
				// Close connection
				mysqli_close($link);
