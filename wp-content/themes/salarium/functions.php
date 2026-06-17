<?php
function brut_net_cadre($montant_brut) {
    return $montant_brut - $montant_brut*25/100;
}
?>

<?php
function brut_net_non_cadre($montant_brut) {
    return $montant_brut - $montant_brut*22/100;
}
?>

<?php
function net_brut_cadre($montant_net) {
    return $montant_net / (1 - 0.25);
}
?>

<?php
function net_brut_non_cadre($montant_net) {
    return $montant_net / (1 - 0.22);
}
?>