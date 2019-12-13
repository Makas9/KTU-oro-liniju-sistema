<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Patalpos</li>
</ul> -->
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=new_aircraft'>Pridėti lėktuvą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=aircraft_list'>Peržiurėti lėktuvų sąrašą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=aircraft_report'>Peržiurėti lėktuvų ataskaitą</a>
	<a href='index.php?module=<?php echo $module; ?>&action=assign_route'>Priskirti marsrutą lėktuvui</a>
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
        <legend>Naujas remontas:</legend>
        <div class="form-group">
            <label for="registravimo_data">Registravimo data</label>
            <input type="date" class="form-control" id="registravimo_data" name="registravimo_data">
        </div>
        <div class="form-group">
            <label for="gedimo_aprasas">Gedimo aprasas</label>
            <textarea class="form-control" id="gedimo_aprasas" name="gedimo_aprasas" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="remonto_aprasas">Remonto aprasas</label>
             <textarea class="form-control" id="remonto_aprasas" name="remonto_aprasas" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="remonto_data">Remonto data</label>
            <input type="date" class="form-control" id="remonto_data" name="remonto_data">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Sukurti</button>
       
    </form>
</div>