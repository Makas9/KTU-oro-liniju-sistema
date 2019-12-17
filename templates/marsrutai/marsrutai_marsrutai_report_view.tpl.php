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

    <form style="width: 600px; margin: 0 auto;">
        <legend>Marsruto Nr. <?php echo $_POST["id"]; ?> Ataskaita:</legend>
        <h5>Duomenys apie marsruta:</h5>
        <table class="table" style="width: 600px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Marsruto Nr.</th>
                <th scope="col">Isvykimo vieta</th>
                <th scope="col">Atvykimo vieta</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($marsrutass as $key => $row) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["id_marsrutas"]; ?></th>
                    <th scope="row"><?php echo $row["isvykimo_vieta"]; ?></th>
                    <th scope="row"><?php echo $row["atvykimo_vieta"]; ?></th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <h5>Duomenys apie marsruta:</h5>
            <table class="table" style="width: 600px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Pilotas</th>
                    <th scope="col">Keleiviu skaicius</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($marsrutass as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["pilotas"]; ?></th>
                        <th scope="row"><?php echo $row["keleiviu_skaicius"]; ?></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        
        
        
    </form>
</div>