<div>
<h3>Inventorizacija</h3><br>

<h4>Registruoti naują daiktą</h4>
<form method="POST" action="#">
	<div class="input-group mb-3">
		<input type="text" class="form-control" name="pavadinimas" placeholder="Pavadinimas" required>
		<input type="number" class="form-control" name="kiekis" placeholder="0" required
			data-toggle="tooltip" data-placement="bottom" title="Kiekis">
		<input type="number" class="form-control" name="kaina" placeholder="0.0" required
			data-toggle="tooltip" data-placement="bottom" title="Kaina">
		<select class="form-control" name="oro_uostas" style="max-width: 200px; display: inline">
			<?php
				$airportsList = $airportsObj->getOroUostaiList();
				foreach ($airportsList as $item) {
					echo "<option value=\"{$item['id_oro_uostas']}\">{$item['pavadinimas']}</option>";
				}
			?>
		</select>
		<div class="input-group-append">
			<button class="btn btn-outline-primary" type="submit" >Išsaugoti</button>
		</div>
	</div>
</form><br>

<h4>Daiktų sąrašas</h4>
<form method="GET" action="index.php?module=oro_uostai&action=inventorizacija">
	<input type="text" name="module" value="oro_uostai" hidden>
	<input type="text" name="action" value="inventorizacija" hidden>
	<label for="koordinates">Rodyti pagal oro uostą:</label><br>
	<select class="form-control" name="airport" style="max-width: 200px; display: inline">
		<?php
			foreach ($airportsList as $item) {
				echo "<option value=\"{$item['id_oro_uostas']}\"";

				if (isset($_GET['airport']) && $_GET['airport'] === $item['id_oro_uostas'])
					echo " selected ";

				echo ">{$item['pavadinimas']}</option>";
			}
		?>
	</select>
	<button  style="display: inline" type="submit" class="btn btn-primary mb-2">Rodyti</button>

</form>

<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Pavadinimas</th>
			<th scope="col">Oro uostas</th>
			<th scope="col">Kiekis</th>
			<th scope="col">Kaina</th>
			<th scope="col">Suma</th>
			<th scope="col">Ištrinti</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($data as $row) {
				echo "<tr>"
					."<th scope=\"row\">{$row['id_daiktas']}</th>"
					."<td>{$row['pavadinimas']}</td>"
					."<td>{$row['oro_uostas']}</td>"
					."<td>{$row['kiekis']}</td>"
					."<td>{$row['kaina']}</td>"
					."<td>{$row['suma']}</td>"
					."<td><a href=\"index.php?module=oro_uostai&action=inventorizacija_delete&id={$row['id_daiktas']}\">Ištrinti</a></td>"
					."</tr>";
			}
		?>
	</tbody>
</table>

</div>