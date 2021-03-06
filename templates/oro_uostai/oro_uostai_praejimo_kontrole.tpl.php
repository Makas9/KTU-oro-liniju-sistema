<div>
<h3>Praėjimo kontrolė</h3><br>

<h4>Registruoti naują keleivį</h4>
<form method="POST" action="#">
	<div class="input-group mb-3">
		<input type="text" class="form-control" name="keleivis" placeholder="Keleivis" required>
		<select class="form-control" name="oro_uostas" style="max-width: 200px; display: inline">
			<?php
				$airportsList = $airportsObj->getOroUostaiList();
				foreach ($airportsList as $item) {
					echo "<option value=\"{$item['id_oro_uostas']}\">{$item['pavadinimas']}</option>";
				}
			?>
		</select>
		<input type="text" class="form-control" name="vartai" placeholder="Vartai" required>
		<div class="input-group-append">
			<button class="btn btn-outline-primary" type="submit" >Išsaugoti</button>
		</div>
	</div>
</form><br>

<h4>Praėjimo kontrolės įvykių sąrašas</h4>
<form method="GET" action="index.php?module=oro_uostai&action=praejimo_kontrole">
	<input type="text" name="module" value="oro_uostai" hidden>
	<input type="text" name="action" value="praejimo_kontrole" hidden>
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
			<th scope="col">Keleivis</th>
			<th scope="col">Oro uostas</th>
			<th scope="col">Vartai</th>
			<th scope="col">Laikas</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($data as $row) {
				echo "<tr>"
					."<th scope=\"row\">{$row['id']}</th>"
					."<td>{$row['keleivis']}</td>"
					."<td>{$row['oro_uostas']}</td>"
					."<td>{$row['vartai']}</td>"
					."<td>{$row['laikas']}</td>"
					."</tr>";
			}
		?>
	</tbody>
</table>

</div>