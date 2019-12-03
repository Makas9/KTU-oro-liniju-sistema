<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Patalpos</li>
</ul> -->
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=create'>Sukurti naujas patalpas</a>
</div>

<!-- <?php if(isset($_GET['remove_error'])) { ?>
	<div class="errorBox">
		Markė nebuvo pašalinta. Pirmiausia pašalinkite markės modelius.
	</div>
<?php } ?> -->

<table class="listTable">
	<tr>
		<th>ID</th>
		<th>Plotas</th>
		<th>Kaina</th>
		<th>Redaguoti</th>
		<th>Ištrinti</th>
	</tr>
	<?php
		foreach($data as $key => $row) {
			echo
				"<tr>"
					. "<td>{$row['id_patalpa']}</td>"
                    . "<td>{$row['plotas']}</td>"
                    . "<td>{$row['kaina']}</td>"
                    . "<td><a href='".makeLink::ml($module, 'edit', $row['id_patalpa'])."'>Redaguoti</a></td>"
                    . "<td><a href='".makeLink::ml($module, 'delete', $row['id_patalpa'])."'>Ištrinti</a></td>"
				. "</tr>";
		}
	?>
</table>