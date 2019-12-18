<form method="POST" action="#" style="max-width: 500px; margin: 0px auto">
	<?php if ($_GET['action'] === 'patalpa_nauja')
			echo "<h3>Naujas patalpos kūrimas</h3>";
		else
			echo "<h3>Patalpos redagavimas</h3>";
	?>
	<br>

	<div class="form-group">
		<label for="pavadinimas">Pavadinimas</label>
		<input type="text" class="form-control" name="pavadinimas" required 
			<?php if (isset($data['pavadinimas'])) echo " value=\"{$data['pavadinimas']}\" " ?>
		>
	</div>
	<div class="form-group">
		<label for="plotas">Plotas</label>
		<input type="number" class="form-control" name="plotas" required
			<?php if (isset($data['plotas'])) echo " value=\"{$data['plotas']}\" " ?>
		>
	</div>
	<div class="form-group">
		<label for="kaina">Kaina</label>
		<input type="number" class="form-control" name="kaina" required
			<?php if (isset($data['kaina'])) echo " value=\"{$data['kaina']}\" " ?>
		>
	</div>
	<?php if ($_GET['action'] === 'patalpa_edit') { ?>
	<div class="form-group">
		<label for="nuomotojas">Nuomotojas</label>
		<select class="form-control" name="nuomotojas">
			<?php
				$darbuotojuList = $darbuotojaiObj->getAll();
				array_unshift($darbuotojuList, ['id_darbuotojas'=>-1, 'vardas_pavarde'=>'-']);
				foreach ($darbuotojuList as $item) {
					echo "<option value=\"{$item['id_darbuotojas']}\" ";
					if (isset($data['fk_nuomotojas']) && $data['fk_nuomotojas'] === $item['id_darbuotojas'])
						echo " selected ";
					echo ">{$item['vardas_pavarde']}</option>";
				}
			?>
		</select>
	</div><?php } ?>

	<?php if ($_GET['action'] === 'patalpa_nauja') { ?>
	<div class="form-group">
		<label for="oro_uostas">Oro uostas</label>
		<select class="form-control" name="oro_uostas">
			<?php
				$airportsList = $airportsObj->getOroUostaiList();
				foreach ($airportsList as $item) {
					echo "<option value=\"{$item['id_oro_uostas']}\" ";
					if (isset($data['fk_oro_uostas']) && $data['fk_oro_uostas'] === $item['id_oro_uostas'])
						echo " selected ";
					echo ">{$item['pavadinimas']}</option>";
				}
			?>
		</select>
	</div>
	<?php } ?>
	<button type="submit" class="btn btn-primary mb-2">Išsaugoti</button>

</form>