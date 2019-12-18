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

    <form style="width: 600px; margin: 0 auto;">
        <legend>Lektuvo nr. <?php echo $_POST["id"]; ?> Informacija:</legend>
        <h5>Duomenys apie lektuva:</h5>
        
             <?php

            if(!empty($lektuvas) && !empty($remontas)){
                ?>
                <table class="table" style="width: 600px; margin: 10px auto;">
                    <thead class="thead-light">
                    <tr>
                         <th scope="col">Lektuvo nr</th>
                <th scope="col">Marke</th>
                <th scope="col">Modelis</th>
				<th scope="col">Maximali kuro talpa</th>
				<th scope="col">Maximali zmoniu talpa</th>
				<th scope="col">Kuro likutis</th>
				<th scope="col">Atlikto remonto aprasas:</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $lektuvas["id_lektuvas"]; ?></th>
                        <th scope="row"><?php echo $lektuvas["marke"]; ?></th>
                        <th scope="row"><?php echo $lektuvas["modelis"]; ?></th>
						  <th scope="row"><?php echo $lektuvas["max_kuras"]; ?></th>
						    <th scope="row"><?php echo $lektuvas["max_keleiviai"]; ?></th>
							  <th scope="row"><?php echo $lektuvas["kuras"]; ?></th>
							   <th scope="row"><?php echo $remontas[0]["remonto_aprasas"]; ?></th>
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
            </tbody>
        </table>
       
    </form>
</div>