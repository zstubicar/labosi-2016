<!DOCTYPE html>
<html>
	<head>
		<title>Popis proizvoda</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style2.css" />
		<link rel="stylesheet" href="grid.css" />
		<link rel="stylesheet" href="normalize.css" />

		<script>
				//Postavljanje cookie parametara za funkciju;
				//document.cookie="username=John Smith;; path=/";


				//Pokušaj stvaranja gumba za skrivanje/prikazivanje reklame 
				(function(document) {
				'use strict';

				var LightTableFilter = (function(Arr) {

					var _input;

					function _onInputEvent(e) {
						_input = e.target;
						var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
						Arr.forEach.call(tables, function(table) {
							Arr.forEach.call(table.tBodies, function(tbody) {
								Arr.forEach.call(tbody.rows, _filter);
							});
						});
					}

					function _filter(row) {
						var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
						row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
					}

					return {
						init: function() {
							var inputs = document.getElementsByClassName('light-table-filter');
							Arr.forEach.call(inputs, function(input) {
								input.oninput = _onInputEvent;
							});
						}
					};
				})(Array.prototype);

				document.addEventListener('readystatechange', function() {
					if (document.readyState === 'complete') {
						LightTableFilter.init();
					}
				});
				})(document);

				

				//funkcija koja sprema cookie 
				function setCookie(cname, cvalue, exdays) {
				    var d = new Date();
				    d.setTime(d.getTime() + (exdays*24*60*60*1000));
				    var expires = "expires="+d.toUTCString();
				    document.cookie = cname + "=" + cvalue + "; " + expires;
				}



				/*$(".btnKupi").click(function(){
				    //var name =  $(this).parent().parent().find('td').eq(1).html();
				    console.log($this);
				   // setCookie(cookieKupi,name);
				    //alert (name);
				})*/
				//document.getElementById("btnKupi").onclick = function() {setCookie(cookieKupi,$['td'],3000)};
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
				
				<div class="main_proizvodi">
					<nav class="nav">
						<ul>
							<li><a href="user.php">Početna</a></li>
						</ul>
					</nav>

					<div class="text_proizvodi">
						<div class="filter">
							<input type="search" class="light-table-filter" data-table="table" placeholder="Filtriraj" />
							<br><br>
						</div>


						<table class="table">
							<thead>
								<th>Naziv proizvoda</th>
								<th>Tip životinje</th> 
								<th>Tip proizvoda</th>
								<th>Opis proizvoda</th>
								<th>Cijena</th>
								<th>id</th>
							</thead>

							<?php 
								$con = mysqli_connect("localhost","root","root","fantastic_db") or die ("Niste  povezani s bazom");

								//naredba da prihvaća hrvatska slova iz baze
								mysqli_set_charset($con,"utf8");



								$query = mysqli_query($con,"SELECT * FROM proizvodi2");


								//ispisuje dok ima podataka u bazi
							 	while($rez = mysqli_fetch_array($query)){
							 		echo '<tr>';
									echo '<td>'.$rez['naziv_proizvoda'].'</td>';
									echo '<td>'.$rez['tip_životinje'].'</td>'; 
									echo '<td>'.$rez['tip_proizvoda'].'</td>';
									echo '<td>'.$rez['opis_proizvoda'].'</td>';
									echo '<td>'.$rez['cijena'].'</td>';
									echo '<td>'.'<input type="button" class="btnKupi" value="Gumbić" onclick="setCookie(\'kos\','.$rez['id'] .',1);;">'.'<td>';
									echo '</tr>';
							 	}
								echo '</table>';
						?>
					</div>
				</div>	

				
				<footer class="footer">
					<p> Copyright Fantastic beasts 2016.</p>
				</footer>
		</div>

	</body>
</html>