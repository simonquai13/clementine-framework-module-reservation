<?php
$this->getParentBlock($data, $request);
if ($request->ACT == "update") {
    if (Clementine::$config['module_reservation']['lang'] == "fr") {
?>
            <h1 class="titre_page">
                Modification d'une horaire
            </h1>
<?php
    } else {
?>
            <h1 class="titre_page">
                Changing a schedule
            </h1>
<?php
    }
} else {
    if (Clementine::$config['module_reservation']['lang'] == "fr") {
?>
            <h1 class="titre_page">
                Gestion des horaires
            </h1>
<?php
    } else {
?>
            <h1 class="titre_page">
                Schedule management
            </h1>   
<?php
    }
}
