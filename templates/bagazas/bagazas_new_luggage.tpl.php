<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Patalpos</li>
</ul> -->
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=new_luggage'>Registruoti naują bagažą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=track_luggage'>Stebėti bagažą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=luggage_report'>Peržiūrėti bagažo ataskaitą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=distribute_luggage'>Paskirstyti bagažą lėktuvams</a>
	<a href='index.php?module=<?php echo $module; ?>&action=update_prices'>Sudaryti bagažų kainą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=new_complaint'>Registruoti skundą</a>
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
        <legend>Naujas bagažas:</legend>
        <div class="form-group">
            <label for="aukstis">Aukštis (cm)</label>
            <input type="number" class="form-control" id="aukstis" name="aukstis" min="1" max="999">
        </div>
        <div class="form-group">
            <label for="ilgis">Ilgis (cm)</label>
            <input type="number" class="form-control" id="ilgis" name="ilgis" min="1" max="999">
        </div>
        <div class="form-group">
            <label for="plotis">Plotis (cm)</label>
            <input type="number" class="form-control" id="plotis" name="plotis" min="1" max="999">
        </div>
        <div class="form-group">
            <label for="svoris">Svoris (kg)</label>
            <input type="number" class="form-control" id="svoris" name="svoris" min="1" max="100">
        </div>
        <div class="form-group">
            <label for="ypatybe">Ypatybė</label>
            <select class="form-control" id="ypatybe" name="ypatybe">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($ypatybe as $key => $row) {
                    if($row["ypatybe"] == "sumaPerKg" || $row["ypatybe"] == "sumaPerCm") continue;
                    ?>
                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["ypatybe"]; ?> (<?php echo number_format($row["koeficientas"], 2); ?>x)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="ypatybe">Keleivis</label>
            <select class="form-control" id="keleivis" name="keleivis">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($keleivis as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_keleivis"]; ?>"><?php echo $row["vardas"]; ?> <?php echo $row["pavarde"]; ?> (<?php echo $row["id_keleivis"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Sukurti</button>
        <div>Pridedama kaina per kilogramą: <?php echo $sumaPerKg; ?> EUR</div>
        <div>Pridedama kaina per kubinį centimetrą: <?php echo $sumaPerCm; ?> EUR</div>
    </form>
</div>