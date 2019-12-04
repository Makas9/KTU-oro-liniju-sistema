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

    <form style="width: 600px; margin: 0 auto;" action="index.php?module=<?php echo $module; ?>&action=<?php echo $action; ?>" method="POST">
        <legend>Pasirinkite bagažą, pagal kurį norite matyti ataskaitą:</legend>
        <?php if(!empty($bagazas)){ ?>
            <table class="table" style="width: 600px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Bagažo Nr.</th>
                    <th scope="col">Keleivis</th>
                    <th scope="col">Yra Skundas?</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($bagazas as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["id_bagazas"]; ?></th>
                        <th scope="row"><?php echo $row["keleivis_pilnasVardas"]; ?></th>
                        <th scope="row"><?php echo $row["skundas"]; ?></th>
                        <th scope="row"><button type="submit" name="id" value="<?php echo $row["id_bagazas"]; ?>" class="btn btn-primary">Peržiūrėti</button></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
                Šiuo metu bagažų nėra
            <?php
        }
        ?>
    </form>
</div>