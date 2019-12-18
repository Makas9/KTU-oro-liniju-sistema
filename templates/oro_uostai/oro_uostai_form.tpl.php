<form method="POST" action="#" style="max-width: 500px; margin: 0px auto">
	<?php if ($_GET['action'] === 'naujas')
			echo "<h3>Naujo oro uosto kūrimas</h3>";
		else
			echo "<h3>Oro uosto redagavimas</h3>";
	?>
	<br>

	<div class="form-group">
		<label for="pavadinimas">Pavadinimas</label>
		<input type="text" class="form-control" name="pavadinimas" required 
			<?php if (isset($data['pavadinimas'])) echo " value=\"{$data['pavadinimas']}\" " ?>
		>
	</div>
	<div class="form-group">
		<label for="salis">Šalis</label>
		<input type="text" class="form-control" name="salis" required
			<?php if (isset($data['salis'])) echo " value=\"{$data['salis']}\" " ?>
		>
	</div>
	<div class="form-group">
		<label for="miestas">Miestas</label>
		<input type="text" class="form-control" name="miestas" required
			<?php if (isset($data['miestas'])) echo " value=\"{$data['miestas']}\" " ?>
		>
	</div>
	<div class="form-group">
		<label for="koordinates">Koordinatės</label>
		<input type="text" class="form-control" name="koordinates" required
			<?php if (isset($data['koordinates'])) echo " value=\"{$data['koordinates']}\" " ?>
		>
	</div>
	<button type="submit" class="btn btn-primary mb-2">Išsaugoti</button>

</form>