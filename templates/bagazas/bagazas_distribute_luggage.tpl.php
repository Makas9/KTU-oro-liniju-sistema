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
        <legend>Paskirstyti bagažą lėktuvams:</legend>
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
            <label for="bagazas">Bagažas</label>
            <select class="form-control" id="bagazas" name="bagazas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($nepakrautiLagaminai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_bagazas"]; ?>"><?php echo $row["aukstis"]; ?>cm x <?php echo $row["ilgis"]; ?>cm x <?php echo $row["plotis"]; ?>cm, <?php echo $row["svoris"]; ?> kg (<?php echo $row["id_bagazas"]; ?>)</option>
                    <?php
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Paskirstyti</button>
    </form>
    <?php if(!empty($keleivioBagazas)){ ?>
        <table class="table" style="width: 400px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Bagažo numeris</th>
                <th scope="col">Kuriame lėktuve</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach($keleivioBagazas as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["id_bagazas"]; ?></th>
                        <td><?php echo $row["lektuvo_marke"]; ?> <?php echo $row["lektuvo_modelis"]; ?></td>
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