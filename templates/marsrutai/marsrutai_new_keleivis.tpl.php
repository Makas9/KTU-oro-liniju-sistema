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
        <legend>Naujas keleivis:</legend>
        
		 <div class="form-group">
            <label for="vardas">vardas</label>
            <textarea class="form-control" id="vardas" name="vardas" rows="3"></textarea>
        </div>
		<div class="form-group">
            <label for="pavarde">Pavarde</label>
            <textarea class="form-control" id="pavarde" name="pavarde" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="ivykis">Ivykis</label>
            <textarea class="form-control" id="ivykis" name="ivykis" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Sukurti</button>
        
    </form>
</div>