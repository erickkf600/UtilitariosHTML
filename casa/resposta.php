<?php
	date_default_timezone_set('America/Sao_Paulo');
	
	$vezes = $_product->getData('parcelas');
	$calc = $_coreHelper->currency($_product->getFinalPrice()/$vezes, true, false);
	echo "<p><small><b>Parcele em até '".$vezes."' X sem juros de '".$calc."'</b></small><br />";
    for ( $i=1; $i <= $vezes; $i++ ) {
        echo '<small>'.$i.'x de '.$_coreHelper->currency($_product->getFinalPrice()/$i, true, false).'</small><br />';
    
echo '</p>';
?>