<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Patalpos</li>
</ul> -->
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=new_aircraft'>Pridėti lėktuvą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=aircraft_list'>Peržiurėti lėktuvų sąrašą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=aircraft_report'>Peržiurėti lėktuvų ataskaitą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=assign_route'>Priskirti lėktuvą maršrutui</a>
	<a href='index.php?module=<?php echo $module; ?>&action=aircraft_view'>Peržiurėti lėktuvo duomenis</a>
	<a href='index.php?module=<?php echo $module; ?>&action=new_malfunction'>Registruoti remonta</a>
</div>
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

    <form style="width: 400px; margin: 0 auto;" action="index.php?module=<?php echo $module; ?>&action=<?php echo $action; ?>" method="POST">
        <legend>Naujas lėktuvas:</legend>
        <div class="form-group">
            <label for="max_kuras">Maksimali kuro talpa (litrais)</label>
            <input type="number" class="form-control" id="max_kuras" name="max_kuras" min="1" max="1000">
        </div>
        <div class="form-group">
            <label for="kuras">Kuro likutis (litrais)</label>
            <input type="number" class="form-control" id="kuras" name="kuras" min="1" max="1000">
        </div>
        <div class="form-group">
            <label for="bagazo_talpa">Maksimali bagazo talpa (litrais)</label>
            <input type="number" class="form-control" id="bagazo_talpa" name="bagazo_talpa" min="1" max="1000">
        </div>
        <div class="form-group">
            <label for="max_keleiviai">Maksimalus keleiviu skaičius</label>
            <input type="number" class="form-control" id="max_keleiviai" name="max_keleiviai" min="1" max="500">
        </div>
		 <div class="form-group">
            <label for="modelis">Modelis</label>
            <textarea class="form-control" id="modelis" name="modelis" rows="3"></textarea>
        </div>
		<div class="form-group">
            <label for="marke">Marke</label>
            <textarea class="form-control" id="marke" name="marke" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="remontas">Remontas</label>
            <select class="form-control" id="remontas" name="remontas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($visiRemontas as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_remontas"]; ?>"><?php echo $row["registravimo_data"]; ?> <?php echo $row["gedimo_aprasas"]; ?> (<?php echo $row["id_remontas"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Sukurti</button>
       
    </form>
</div>