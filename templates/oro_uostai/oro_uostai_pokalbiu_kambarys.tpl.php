<div>
<h3>Pokalbių kambarys</h3><br>
<form method="POST" action="#">
	<div class="input-group mb-3">
		<input type="text" class="form-control" name="textInput" placeholder="Žinutė">
		<div class="input-group-append">
			<button class="btn btn-outline-primary" type="submit" >Siųsti</button>
		</div>
	</div>
</form><br>

<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Vardas</th>
			<th scope="col">Laikas</th>
			<th scope="col">Žinutė</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($data as $row) {
				echo "<tr>"
					."<th scope=\"row\">{$row['id_pokalbiu_kambarys']}</th>"
					."<td>{$row['vardas']}</td>"
					."<td>{$row['laikas']}</td>"
					."<td>{$row['tekstas']}</td>"
					."</tr>";
			}
		?>
	</tbody>
</table>

</div>