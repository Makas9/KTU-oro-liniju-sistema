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
        <legend>Naujas Darbuotojas:</legend>
        <div class="form-group">
            <label for="vardas">Vardas</label>
            <input type="text" class="form-control" id="vardas" name="vardas" >
        </div>
        <div class="form-group">
            <label for="pavarde">Pavardė</label>
            <input type="text" class="form-control" id="pavarde" name="pavarde">
        </div>
		<div class="form-group">
            <label for="date">Gimimo data</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="asmens_kodas">Asmens kodas</label>
            <input type="text" class="form-control" id="asmens_kodas" name="asmens_kodas">
        </div>
		<div class="form-group">
            <label for="telefonas">Telefonas</label>
            <input type="number" class="form-control" id="telefonas" name="telefonas"min="860000000" max="869999999"placeholder="86xxxxxxx">
        </div>
		<div class="form-group">
            <label for="e_pastas">Elektroninis paštas</label>
            <input type="text" class="form-control" id="e_pastas" name="e_pastas">
        </div>
		<div class="form-group">
            <label for="miestas">Miestas</label>
            <input type="text" class="form-control" id="miestas" name="miestas">
        </div>
		<div class="form-group">
            <label for="bankas">Bankas</label>
            <input type="text" class="form-control" id="bankas" name="bankas">
        </div>
		<div class="form-group">
            <label for="sas_nr">Banko saskaitos numeris</label>
            <input type="text" class="form-control" id="sas_nr" name="sas_nr">
        </div>
		<div class="form-group">
            <label for="kreditai">Kreditai</label>
            <input type="number" class="form-control" id="kreditai" name="kreditai" min="1" max="100">
        </div>
		<div class="form-group">
            <label for="pass">Slaptažodis</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>      
        
        <button type="submit" class="btn btn-primary">Užregistruoti</button>
    </form>
</div>