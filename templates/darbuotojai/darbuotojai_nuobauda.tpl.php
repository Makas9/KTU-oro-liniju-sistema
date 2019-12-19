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
        <legend>Nauja nuobauda:</legend>
		<div class="form-group">
            <label for="date">Pasirinkite nuobaudos skirimo data</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
		<div class="form-group">
            <label for="nuo_darbuotojas">Pasirinkite darbuotoja</label>
            <select class="form-control" id="nuo_darbuotojas" name="nuo_darbuotojas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($darbuotojai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_darbuotojas"]; ?>"><?php echo $row["vardas"]; ?> <?php echo $row["pavarde"]; ?> (<?php echo $row["id_darbuotojas"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
		<div class="form-group">
            <label for="date">Priežastis</label>
            <textarea class="form-control" id="priezastis" name="priezastis"
			rows="1" placeholder="Nurodykite priežasti"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Pateikti</button>
    </form>
</div>