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

    <form style="width: 600px; margin: 0 auto;" action="index.php?module=<?php echo $module; ?>&action=<?php echo $action; ?>" method="POST">
        <legend>Pasirinkite lėktuvą, kurio informacija norite matyti:</legend>
        <?php if(!empty($visiLektuvas)){ ?>
            <table class="table" style="width: 600px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Lėktuvo Nr.</th>
                    <th scope="col">Marke</th>
                    <th scope="col">Modelis</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($visiLektuvas as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["id_lektuvas"]; ?></th>
                        <th scope="row"><?php echo $row["marke"]; ?></th>
                        <th scope="row"><?php echo $row["modelis"]; ?></th>
                        <th scope="row"><button type="submit" name="id" value="<?php echo $row["id_lektuvas"]; ?>" class="btn btn-primary">Peržiūrėti</button></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
                Šiuo metu Lėktuvų nėra
            <?php
        }
        ?>
    </form>
</div>