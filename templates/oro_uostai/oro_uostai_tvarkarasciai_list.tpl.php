<div>
<h3>Tvarkaraščiai</h3><br>

<h4>Pridėti naują skrydį</h4>
<form method="POST" action="#">
	<div class="input-group mb-3">
		
		<select class="form-control" name="marsrutas" >
			<?php
				$marsrutuList = $marsrutuObj->getMarsrutaiList();
				foreach ($marsrutuList as $item) {
					echo "<option value=\"{$item['id_marsrutas']}\">{$item['pavadinimas']}</option>";
				}
			?>
		</select>
		
		<input type="datetime-local" class="form-control" name="laikas" required>
		<div class="input-group-append">
			<button class="btn btn-outline-primary" type="submit" >Išsaugoti</button>
		</div>
	</div>
</form><br>

<h4>Artimiausi skrydžiai</h4>
<form method="GET" action="index.php?module=oro_uostai&action=tvarkarasciai">
	<input type="text" name="module" value="oro_uostai" hidden>
	<input type="text" name="action" value="tvarkarasciai" hidden>
	<label for="vieta">Rodyti pagal vietą:</label><br>
	<select class="form-control" name="vieta" style="max-width: 200px; display: inline">
		<?php
			$placesList = $marsrutuObj->getPlacesList();
			foreach ($placesList as $item) {
				echo "<option value=\"{$item['vieta']}\"";

				if (isset($_GET['vieta']) && $_GET['vieta'] === $item['vieta'])
					echo " selected ";

				echo ">{$item['vieta']}</option>";
			}
		?>
	</select>
	<button  style="display: inline" type="submit" class="btn btn-primary mb-2">Rodyti</button>
</form>

<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Laikas</th>
			<th scope="col">Išvykimo vieta</th>
			<th scope="col">Atvykimo vieta</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($dataUpcoming as $row) {
				echo "<tr>"
					."<th scope=\"row\">{$row['id_tvarkarascio_irasas']}</th>"
					."<td>{$row['laikas']}</td>"
					."<td>{$row['isvykimo_vieta']}</td>"
					."<td>{$row['atvykimo_vieta']}</td>"
					."</tr>";
			}
		?>
	</tbody>
</table><br>

<h4>Įvykę skrydžiai</h4>
<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Laikas</th>
			<th scope="col">Išvykimo vieta</th>
			<th scope="col">Atvykimo vieta</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($dataPast as $row) {
				echo "<tr>"
					."<th scope=\"row\">{$row['id_tvarkarascio_irasas']}</th>"
					."<td>{$row['laikas']}</td>"
					."<td>{$row['isvykimo_vieta']}</td>"
					."<td>{$row['atvykimo_vieta']}</td>"
					."</tr>";
			}
		?>
	</tbody>
</table>
</div>