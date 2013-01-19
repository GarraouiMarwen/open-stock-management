<?php
include_component("commons", "leftSidebar", array("menu1" => "NewSupplier;seller/newSeller", "menu2" => "AllSuppliers;seller/listSeller", "menu3" => "Review;seller/reviewSeller"));
use_stylesheet('seller/editSeller.css')
?>

<div id="editseller_contents">
    <div id="options"></div>

<?php include_partial('form', array('form' => $form, 'seller' => $seller)); ?>


</div>