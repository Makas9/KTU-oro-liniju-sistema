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
        <legend>Priskirti lėktuvą maršrutui:</legend>
        <div class="form-group">
            <label for="lektuvas">Lėktuvas</label>
            <select class="form-control" id="lektuvas" name="lektuvas">
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
            <label for="marsrutas">Maršrutas</label>
            <select class="form-control" id="marsrutas" name="marsrutas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($laisviMarsrutai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_marsrutas"]; ?>">Iš <?php echo $row["isvykimo_vieta"]; ?>, į <?php echo $row["atvykimo_vieta"]; ?></option>
                    <?php
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Paskirstyti</button>
    </form>
    <?php if(!empty($marsrutoLektuvas)){ ?>
        <table class="table" style="width: 400px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Maršruto numeris</th>
                <th scope="col">Kuriame lėktuve</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach($marsrutoLektuvas as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["id_marsrutas"]; ?></th>
                        <td><?php echo $row["marke"]; ?> <?php echo $row["modelis"]; ?></td>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</div>