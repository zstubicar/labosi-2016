<!DOCTYPE html>
<html>
	<head>
		<title>User site</title>
		
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="style2.css" />
		
		<link rel="stylesheet" href="grid.css" />
		<link rel="stylesheet" href="normalize.css" />
		
		<?php
			session_start();
			if(!$_SESSION['loggedin'])
			{
					header ("Location:http://index.php");
					exit;
			}
			$name = $_SESSION['name'];
		?>

		<script>
			// Get the button, and when the user clicks on it, execute myFunction
			document.getElementById("myBtn").onclick = function() {myFunction()};

			/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
			function myFunction() {
			    document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {

			  if (!event.target.matches('.dropbtn')) {

			   	var dropdowns = document.getElementsByClassName("dropdown-content");
			    var i;
			      if (openDropdown.classList.contains('show')) {
			        openDropdown.classList.remove('show');
			      }
			    
			  }
			}
		</script>
	</head>
	
	<body class="body">
		<div class="row">
				<header class="header_user">
					<div class="logo_user column column-4">
						<a href="user.php"><img src="logo.png" alt="logo životinje"/></a>
					</div>
				
					<div id="odjava" >
						<input type="Button" name="odjava" value="Odjava"/>
					</div>
				</header>
				
				<div class="main_user">
					<nav class="nav">
						<ul>
							<li><a href="user.php">Početna</a></li>
							<li><a href="#osobni_podatci">Osobni podatci</a></li>
							<li><a href="#školovanje">Školovanje</a></li>
							<li><a href="#iskustvo">Iskustvo</a></li>
							<li><a href="#znanja">Znanja i vještine</a></li>
							<li><a href="popis_proizvoda.php">Popis proizvoda</a></li>
						</ul>
					</nav>

					<div class="text_user">
						<h3 id="osobni_podatci">Osobni podatci</h3>
						<p>Ime i prezime : <b>Zvonimir Stubičar</b></br>
							Zanimanje : <b>student</b></br>
							Datum rođenja: <b>24.3.1991</b></br>
							Mjesto rođenja: <b>Zagreb</b></br>
							Mjesto boravišta: <b>Zagreb</b></br>
						</p>
						</br>
						<h3 id="školovanje">Školovanje</h3>
						<p>
							Osnovna škola: <b>Grof janko drašković (Zagreb)</b></br>
							Srednja škola: <b>X. Gimnazija  (Zagreb)</b></br>
							Fakultet: <b>TVZ smjer računarstvo</b></br>
						</p>
						</br>
						<h3 id="iskustvo">Iskustvo</h3>
						<p>
							Iskustvo u IT-u: <b>Junior frontend developer u Impelemntacija snova</b></br>
							Iskustvo van IT-a: <b>rad u Tiskari vjesnik,Ledo d.o.o.,organizacija i pormocija (droidcon Zagreb)</b></br>
						</p>
						</br>
						<h3 id="znanja">Znanja i vještine</h3>
						<p>Html</p>
						<p>Css</p>
						<p>Jquerry</p>
						<p>Javascript</p>
					</div>		
				</div>	
				<div class="dropdown">
					<button id="myBtn" class="dropbtn">Reklama</button>
					<div id="myDropdown" class="dropdown-content">
				     	<p>
				     	The BlackBerry Passport design was based on the form of an actual passport, providing a sense of familiarity even in something so new. Its frame was inspired by the steel I-beams used in modernist architecture, and the gentle shape of the back cover feels great in your hand, while accommodating a large battery.

						Durable. Reliable. Beautiful.
						</p>
					</div>
				</div>
				
				<footer class="footer">
					<p> Copyright Fantastic beasts 2016.</p>
				</footer>
		</div>

	</body>
</html>