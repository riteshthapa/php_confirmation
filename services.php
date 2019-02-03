<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fish Creek Animal Clinic Services</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="fishcreek.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>Fish Creek Animal Clinic</h1>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="askvet.html">Ask the Vet</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<main>
			<h2>Basic Services</h2>
			
			<?php
			$filename = "services.txt";
			$services = fopen($filename, "r");

			if (!$services) {
				die("Unable to open $filename.");
			}

			while (!feof($services)) {

				$line = fgets($services);
				$parts = explode(".//", $line);
				echo "<p><b>$parts[0]</b> <br>$parts[1] ";
				
				for ($i = 2; $i < count($parts); $i++) {
					echo " &nbsp; $parts[$i]";
				}
				echo "</p>";
			}
			fclose($services);
			?>

			<!-- <h2>Basic Services</h2>
			<ol>
				<li><h3>Medical Services</h3>
					We offer state-of-the-art equipment and technology.</li>
				<li><h3>Surgical Services</h3>
					Full range of surgical procedures including orthopedics and emergency surgeries.</li>
				<li><h3>Dental Care</h3>
					A dental exam can determine whether your pet needs preventive dental care such as scaling and polishing.</li>
				<li><h3>House Calls</h3>
					The elderly, physically challenged, and multiple pet households often find our in-home veterinary service helpful and convenient.</li>
				<li><h3>Emergencies</h3>
					At least one of our doctors is on call every day and night.</li>
			</ol> -->
		</main>
		<footer>
			Copyright &copy; 2018 Fish Creek Animal Clinic<br>
			<a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
		</footer>
	</div>
</body>
</html>
