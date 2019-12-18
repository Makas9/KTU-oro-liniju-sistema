<h3>Nuomojamų patalpų sąrašas</h3>
<a href="index.php?module=oro_uostai&action=patalpa_nauja">Sukurti naują patalpą</a>
<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Pavadinimas</th>
			<th scope="col">Oro uostas</th>
			<th scope="col">Plotas</th>
			<th scope="col">Kaina</th>
			<th scope="col">Nuomotojas</th>
			<th scope="col">Redaguoti</th>
			<th scope="col">Ištrinti</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($data as $row) {
				echo "<tr>"
					."<th scope=\"row\">{$row['id_patalpa']}</th>"
					."<td>{$row['pavadinimas']}</td>"
					."<td>{$row['oro_uostas']}</td>"
					."<td>{$row['plotas']}</td>"
					."<td>{$row['kaina']}</td>"
					."<td>{$row['nuomotojas']}</td>"
					."<td><a href=\"index.php?module=oro_uostai&action=patalpa_edit&id={$row['id_patalpa']}\">Redaguoti</a></td>"
					."<td><a href=\"index.php?module=oro_uostai&action=patalpa_delete&id={$row['id_patalpa']}\">Ištrinti</a></td>"
					."</tr>";
			}
		?>
	</tbody>
</table>