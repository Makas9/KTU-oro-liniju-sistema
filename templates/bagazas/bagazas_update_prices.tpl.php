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
        <legend>Bagažo kainų sudarymas:</legend>
        <div class="form-group">
            <label for="sumaPerKg">Pridedama suma per 1 kilogramą</label>
            <input type="number" class="form-control" id="sumaPerKg" name="sumaPerKg" value="<?php echo $sumaPerKg; ?>" min="0.1" max="100" step="0.01">
        </div>
        <div class="form-group">
            <label for="sumaPerCm">Pridedama suma per 1 kubinį centimetrą</label>
            <input type="number" class="form-control" id="sumaPerCm" name="sumaPerCm" value="<?php echo $sumaPerCm; ?>" min="0.001" max="0.01" step="0.001">
        </div>
        <?php if(!empty($ypatybes)){ ?>
            <table class="table" style="width: 400px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Ypatybė</th>
                    <th scope="col">Koeficientas</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($ypatybes as $key => $row) {
                    if($row["ypatybe"] == "sumaPerKg" || $row["ypatybe"] == "sumaPerCm") continue;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["ypatybe"]; ?></th>
                        <td><input type="number" class="form-control" name="<?php echo $row["ypatybe"]; ?>" value="<?php echo $row["koeficientas"]; ?>" min="1" max="10" step="0.01"></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        }
        ?>
        <button type="submit" class="btn btn-primary">Išsaugoti</button>
    </form>
</div>