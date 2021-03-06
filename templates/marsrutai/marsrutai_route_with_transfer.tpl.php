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

    <form style="width: 400px; margin: 0 auto;" action="index.php?module=<?php echo $module; ?>&action=<?php echo $action; ?>" method="POST">
        <legend>Iveskite isvykimo bei atvykimo datas:</legend>
        <div class="form-group">
            <label for="isvykimo_vieta">Isvykimo vieta</label>
            <textarea class="form-control" id="isvykimo_vieta" name="isvykimo_vieta" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="atvykimo_vieta">Atvykimo vieta</label>
            <textarea class="form-control" id="atvykimo_vieta" name="atvykimo_vieta" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ieškoti</button>
    </form>
    <?php if(!empty($isvykimas)){ ?> 
        <h5>Duomenys apie marsruta su persedimu:</h5>
        <table class="table" style="width: 600px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Isvykimo vieta</th>
                <th scope="col">Atvykimo vieta</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($isvykimas as $key => $row) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["isvykimo_vieta"]; ?></th>
                    <th scope="row"><?php echo $row["atvykimo_vieta"]; ?></th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <table class="table" style="width: 600px; margin: 10px auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col">Isvykimo vieta</th>
                <th scope="col">Atvykimo vieta</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($atvykimas as $key => $row) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["isvykimo_vieta"]; ?></th>
                    <th scope="row"><?php echo $row["atvykimo_vieta"]; ?></th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </table>
    <?php
    }
    ?>
</div>