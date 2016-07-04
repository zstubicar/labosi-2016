
					
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
								$con = mysqli_connect("localhost","root","root","proizvodi") or die ("Niste  povezani s bazom");

								//naredba da prihvaća hrvatska slova iz baze
								mysqli_set_charset($con,"utf8");

								$search = $_GET['upit'];

								$query = mysqli_query($con,"SELECT * FROM proizvodi2 where opis_proizvoda like '%$search%' or naziv_proizvoda like '%$search%'");





								//ispisuje dok ima podataka u bazi
							 	while($rez = mysqli_fetch_array($query)){
							 		echo '<tr>';
									echo '<td>'.$rez['naziv_proizvoda'].'</td></br>';
									echo '<td>'.$rez['tip_životinje'].'</td></br>'; 
									echo '<td>'.$rez['tip_proizvoda'].'</td></br>';
									echo '<td>'.$rez['opis_proizvoda'].'</td></br>';
									echo '<td>'.$rez['cijena'].'</td></br>';
									echo '<td>'.'<input type="button" class="btnKupi" value="Gumbić" onclick="setCookie(\'kos\','.$rez['id'] .',1);;">'.'<td>';
									echo '</tr></br>';
							 	}
								echo '</table>';
?>
