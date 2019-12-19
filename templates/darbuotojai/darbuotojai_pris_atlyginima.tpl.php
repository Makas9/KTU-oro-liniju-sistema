<!-- <ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Patalpos</li>
</ul> -->
<div id="actions">
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
        <legend>Paskirstyti atlyginima darbuotojui:</legend>
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
            <label for="atlyginimas">Atlyginimas</label>
            <select class="form-control" id="atlyginimas" name="atlyginimas">
                <option selected="true" disabled>Pasirinkite...</option>
                <?php

                foreach($visiAtlyginimai as $key => $row) {
                    ?>
                    <option value="<?php echo $row["id_atlyginimas"]; ?>"><?php echo $row["suma"]; ?> id: <?php echo $row["id_atlyginimas"]; ?></option>
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