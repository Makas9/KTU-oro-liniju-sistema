Nuomoti patalpas<br>
Sudaryti tvarkarasti<br>
Inventorizuoti daiktus<br>
<h3>Oro uostų sąrašas</h3>
<a href="index.php?module=oro_uostai&action=naujas">Sukurti naują oro uostą</a>
<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Pavadinimas</th>
			<th scope="col">Šalis</th>
			<th scope="col">Miestas</th>
			<th scope="col">Koordinatės</th>
			<th scope="col">Redaguoti</th>
			<th scope="col">Ištrinti</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($data as $row) {
				echo "<tr>"
					."<th scope=\"row\">{$row['id_oro_uostas']}</th>"
					."<td>{$row['pavadinimas']}</td>"
					."<td>{$row['salis']}</td>"
					."<td>{$row['miestas']}</td>"
					."<td>{$row['koordinates']}</td>"
					."<td><a href=\"index.php?module=oro_uostai&action=edit&id={$row['id_oro_uostas']}\">Redaguoti</a></td>"
					."<td><a href=\"index.php?module=oro_uostai&action=delete&id={$row['id_oro_uostas']}\">Ištrinti</a></td>"
					."</tr>";
			}
		?>
	</tbody>
</table>