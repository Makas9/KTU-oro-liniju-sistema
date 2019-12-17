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

    <form style="width: 600px; margin: 0 auto;" action="index.php?module=<?php echo $module; ?>&action=<?php echo $action; ?>" method="POST">
        <legend>Pasirinkite marsruta, pagal kurį norite matyti ataskaitą:</legend>
        <?php if(!empty($marsrutaiObj)){ ?>
            <table class="table" style="width: 600px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Marsruto Nr Nr.</th>
                    <th scope="col">Isvykimo vieta</th>
                    <th scope="col">Atvykimo vieta</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($marsrutaiObj as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["id_marsrutas"]; ?></th>
                        <th scope="row"><?php echo $row["isvykimo_vieta"]; ?></th>
                        <th scope="row"><?php echo $row["atvykimo_vieta"]; ?></th>
                        <th scope="row"><button type="submit" name="id" value="<?php echo $row["id_marsrutas"]; ?>" class="btn btn-primary">Peržiūrėti</button></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
                Šiuo metu marsrutu nera nėra
            <?php
        }
        ?>
    </form>
</div>