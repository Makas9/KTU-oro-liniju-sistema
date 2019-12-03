<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li><a href="index.php?module=<?php echo $module; ?>&action=list">Countries</a></li>
	<li><?php if(!empty($id)) echo "Country edit"; else echo "New country"; ?></li>
</ul> -->
<div class="float-clear"></div>
<div id="formContainer">
	<?php if(isset($formErrors) && $formErrors != null) { ?>
		<div class="errorBox">
			Neįvesti arba neteisingai įvesti šie laukai:
			<?php 
				echo $formErrors;
			?>
		</div>
	<?php } ?>
	<form action="" method="post">
		<fieldset>
			<legend>Patalpos info:</legend>
            <?php if(isset($data['id_patalpa'])) { ?>
                <p>
                    <label class="field" for="id_patalpa">ID</label>
                    <input readonly type="text" id="id_patalpa" name="id_patalpa" class="textbox textbox-150" value="<?php echo $data['id_patalpa']; ?>" />
                </p>
		    <?php } ?>
			<p>
				<label class="field" for="plotas">Plotas</label>
				<input type="text" id="plotas" name="plotas" class="textbox textbox-150" value="<?php echo isset($data['plotas']) ? $data['plotas'] : ''; ?>">
                <?php //if(key_exists('name', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['name']} simb.)</span>"; 
                ?>
			</p>
			<p>
				<label class="field" for="kaina">Kaina</label>
				<input type="text" id="kaina" name="kaina" class="textbox textbox-150" value="<?php echo isset($data['kaina']) ? $data['kaina'] : ''; ?>">
                <?php //if(key_exists('name', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['name']} simb.)</span>"; 
                ?>
			</p>
            
		</fieldset>
		<!-- <p class="required-note">* pažymėtus laukus užpildyti privaloma</p> -->
		<p>
			<input type="submit" class="submit button" name="submit" value="Išsaugoti">
		</p>
		
	</form>
</div>