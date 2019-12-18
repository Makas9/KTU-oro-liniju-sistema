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

    <form style="width: 600px; margin: 0 auto;">
        <legend>Bagažo Nr. <?php echo $_POST["id"]; ?> Ataskaita:</legend>
        <h5>Duomenys apie keleivį:</h5>
        <table class="table" style="width: 600px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Registracijos data</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($keleivis as $key => $row) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["vardas"]; ?></th>
                    <th scope="row"><?php echo $row["pavarde"]; ?></th>
                    <th scope="row"><?php echo $row["laikas"]; ?></th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <h5>Duomenys apie bagažą:</h5>
            <table class="table" style="width: 600px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Auštis (cm)</th>
                    <th scope="col">Ilgis (cm)</th>
                    <th scope="col">Plotis (cm)</th>
                    <th scope="col">Svoris (kg)</th>
                    <th scope="col">Tūris (cm^3)</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($bagazas as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["aukstis"]; ?></th>
                        <th scope="row"><?php echo $row["ilgis"]; ?></th>
                        <th scope="row"><?php echo $row["plotis"]; ?></th>
                        <th scope="row"><?php echo $row["svoris"]; ?></th>
                        <th scope="row"><?php echo $row["aukstis"]*$row["ilgis"]*$row["plotis"]; ?></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        <h5>Čekio duomenys:</h5>
        <table class="table" style="width: 600px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Čekio Nr.</th>
                <th scope="col">Apskaičiuota bagažo kaina</th>
                <th scope="col">Čekio data</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($cekis as $key => $row) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["id_cekis"]; ?></th>
                    <th scope="row"><?php echo $row["kaina"]; ?> EUR</th>
                    <th scope="row"><?php echo $row["laikas"]; ?></th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <h5>Lėktuvo duomenys:</h5>
        <?php
            if(!empty($lektuvas)){
                ?>
                <table class="table" style="width: 600px; margin: 10px auto;">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Lėktuvo Nr.</th>
                        <th scope="col">Markė</th>
                        <th scope="col">Modelis</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $lektuvas["id_lektuvas"]; ?></th>
                        <th scope="row"><?php echo $lektuvas["marke"]; ?></th>
                        <th scope="row"><?php echo $lektuvas["modelis"]; ?></th>
                    </tr>
                    </tbody>
                </table>
                <?php
            } else {
                ?>
                    Bagažas dar nepakrautas į lėktuvą
                <?php
            }
        ?>
        <h5>Bagažo kelio duomenys:</h5>
        <?php
        if(!empty($lektuvas)){
        ?>
        <?php
            foreach($bagazoKelias as $key => $row) {
                echo $row["isvykimo_vieta"]." -> ".$row["atvykimo_vieta"]." (pilotas: ".$row["pilotas"]."; skrydžio būsena: ".$row["busena"].")";
            }
        } else {
            ?>
                Bagažo kelio nėra galimybės nurodyti
            <?php
        }
        ?>
    </form>
</div>