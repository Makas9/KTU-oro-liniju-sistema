<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Patalpos</li>
</ul> -->
<div id="actions">
		<a href='index.php?module=<?php echo $module; ?>&action=pris_atlyginima'>Priskirti atlyginima</a>
	<a href='index.php?module=<?php echo $module; ?>&action=kreditai'>Panaudoti soc. kreditus</a>
	<a href='index.php?module=<?php echo $module; ?>&action=naujas_darbuotojas'>Ivesti darbuotoja į sistema</a>
	<a href='index.php?module=<?php echo $module; ?>&action=nakvyne'>Užregistruoti nakvynę</a>
	<a href='index.php?module=<?php echo $module; ?>&action=ataskaita'>Personalo ataskaita</a>
	<a href='index.php?module=<?php echo $module; ?>&action=nuobauda'>Skirti nuobaudą</a>
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
        <legend>Pasirinkite darbuotojui:</legend>
        <div class="form-group">
            <label for="darbuotojas">Darbuotojas</label>
            <select class="form-control" id="darbuotojas" name="darbuotojas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($visiDarbuotojai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_darbuotojas"]; ?>"><?php echo $row["vardas"]; ?> <?php echo $row["pavarde"]; ?> (<?php echo $row["id_darbuotojas"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="kreditai">Kreditai</label>
            <select class="form-control" id="kreditai" name="kreditai">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($visiKreditai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id"]; ?>"> <?php echo $row["kreditas"]; ?> (kaina:) <?php echo $row["kreditu_kaina"]; ?></option>
                    <?php
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Paskirstyti</button>
    </form>
	
	
    
</div>