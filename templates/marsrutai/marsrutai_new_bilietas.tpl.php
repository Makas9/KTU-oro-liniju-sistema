<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Patalpos</li>
</ul> -->
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=new_route'>Registruoti maršrutą </a>
	<a href='index.php?module=<?php echo $module; ?>&action=marsrutai_report'>Peržiūrėti maršrutą </a>
	<a href='index.php?module=<?php echo $module; ?>&action=route_with_transfer'>Surasti maršrutą su persėdimu</a>
	<a href='index.php?module=<?php echo $module; ?>&action=track_marsruta'>Stebėti maršruto eigą </a>
	<a href='index.php?module=<?php echo $module; ?>&action=new_bilietas'>Sudaryti bilieto kainą </a>
	<a href='index.php?module=<?php echo $module; ?>&action=new_keleivis'>Registruoti keleivius </a>
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
        <legend>Naujas bilietas:</legend>
        
		 <div class="form-group">
            <label for="kaina">Kaina</label>
            <textarea class="form-control" id="kaina" name="kaina" rows="3"></textarea>
        </div>
		<div class="form-group">
            <label for="isvykimo_data">Isvykimo data</label>
            <textarea class="form-control" id="isvykimo_data" name="isvykimo_data" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="fk_marsrutas_id_marsrutas">Marsrutas</label>
            <select class="form-control" id="fk_marsrutas_id_marsrutas" name="fk_marsrutas_id_marsrutas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($visiMarsrutai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_marsrutas"]; ?>"><?php echo $row["isvykimo_vieta"]; ?> <?php echo $row["atvykimo_vieta"]; ?> (<?php echo $row["id_marsrutas"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Sukurti</button>
        
    </form>
</div>