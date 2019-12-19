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

    <form style="width: 600px; margin: 0 auto;" action="index.php?module=<?php echo $module; ?>&action=<?php echo $action; ?>" method="POST">
        <legend>Pasirinkite darbuotoja, pagal kurį norite matyti ataskaitą:</legend>
        <?php if(!empty($darbuotojas)){ ?>
            <table class="table" style="width: 600px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Vardas</th>
                    <th scope="col">Pavarde</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($darbuotojas as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["vardas"]; ?></th>
                        <th scope="row"><?php echo $row["pavarde"]; ?></th>
                        <th scope="row"><button type="submit" name="id" value="<?php echo $row["id_darbuotojas"]; ?>" class="btn btn-primary">Peržiūrėti</button></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
                Šiuo metu darbuotoju nerasta
            <?php
        }
        ?>
    </form>
</div>