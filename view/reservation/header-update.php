<?php
$this->getParentBlock($data, $request);
if ($request->ACT == "update") {
    if (Clementine::$config['module_reservation']['lang'] == "fr") {
?>
            <h1 class="titre_page">
                Modification d'une réservation 
            </h1>
<?php
    } else {
?>
            <h1 class="titre_page">
                Changing a reservation
            </h1>
<?php
    }
} else {
    if (Clementine::$config['module_reservation']['lang'] == "fr") {
?>
            <h1 class="titre_page">
                Liste des reservation
            </h1>
<?php
    } else {
?>
            <h1 class="titre_page">
                Management Book        
            </h1>   
<?php
    }
}
