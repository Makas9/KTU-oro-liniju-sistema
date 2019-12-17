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
        <legend>Naujas marsrutas:</legend>
        <div class="form-group">
            <label for="isvykimo_vieta">Isvykimo vieta</label>
            <textarea class="form-control" id="isvykimo_vieta" name="isvykimo_vieta" rows="1"></textarea>
        </div>
        <div class="form-group">
            <label for="atvykimo_vieta">Atvykimo vieta</label>
            <textarea class="form-control" id="atvykimo_vieta" name="atvykimo_vieta" rows="1"></textarea>
        </div>
        <div class="form-group">
            <label for="pilotas">Pilotas</label>
            <textarea class="form-control" id="pilotas" name="pilotas" rows="1"></textarea>
        </div>
        <div class="form-group">
            <label for="busena">Busena</label>
            <textarea class="form-control" id="busena" name="busena" rows="1"></textarea>
        </div>
	<div class="form-group">
            <label for="keleiviu_skaicius">Keleiviu skaicius</label>
            <textarea class="form-control" id="keleiviu_skaicius" name="keleiviu_skaicius" rows="3"></textarea>
        </div>
	
        <div class="form-group">
            <label for="fk_lektuvas_id_lektuvas">Lektuvas</label>
            <select class="form-control" id="fk_lektuvas_id_lektuvas" name="fk_lektuvas_id_lektuvas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($visiLektuvai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_lektuvas"]; ?>"><?php echo $row["marke"]; ?> <?php echo $row["modelis"]; ?> (<?php echo $row["id_lektuvas"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="fk_oro_uostas_id_oro_uostas">Isvykimo oro uostas</label>
            <select class="form-control" id="fk_oro_uostas_id_oro_uostas" name="fk_oro_uostas_id_oro_uostas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($visiOroUostai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_oro_uostas"]; ?>"><?php echo $row["salis"]; ?> <?php echo $row["miestas"]; ?> (<?php echo $row["id_oro_uostas"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Sukurti</button>
    </form>
</div>