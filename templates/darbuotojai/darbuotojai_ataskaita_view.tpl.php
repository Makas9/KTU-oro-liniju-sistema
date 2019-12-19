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

    <form style="width: 600px; margin: 0 auto;">
        <legend>Darbuotojo: <?php echo $zmogus[0]['vardas']; ?> Ataskaita:</legend>
        <h5>Duomenys apie darbuotoja:</h5>
        <table class="table" style="width: 600px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Gimimo data</th>
                <th scope="col">Asmens kodas</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($zmogus as $key => $row) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["vardas"]; ?></th>
                    <th scope="row"><?php echo $row["pavarde"]; ?></th>
                    <th scope="row"><?php echo $row["gimimo_data"]; ?></th>
                    <th scope="row"><?php echo $row["asmens_kodas"]; ?></th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <h5>Kontaktai:</h5>
            <table class="table" style="width: 600px; margin: 10px auto;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Telefonas</th>
                    <th scope="col">Elektorinis pastas</th>
                    <th scope="col">Miestas</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($zmogus as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["telefonas"]; ?></th>
                        <th scope="row"><?php echo $row["e_pastas"]; ?></th>
                        <th scope="row"><?php echo $row["miestas"]; ?></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        <h5>Banko duomenys:</h5>
        <table class="table" style="width: 600px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Bankas</th>
                <th scope="col">Saskaitos Nr.</th>
                <th scope="col">Atlyginimas</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($zmogus as $key => $row) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["bankas"]; ?></th>
                    <th scope="row"><?php echo $row["saskaita"]; ?></th>
                    <th scope="row"><?php echo $row["atlyginimas"]; ?>EUR</th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </form>
</div>