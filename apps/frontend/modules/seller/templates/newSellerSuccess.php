<?php 
include_component("commons", "leftSidebar",array("menu1"=>"NewSupplier;seller/newSeller" ,"menu2"=>"AllSuppliers;seller/listSeller","menu3"=>"Review;seller/reviewSeller"));

?>
<?php use_stylesheet("seller/newSeller.css") ?>

<div id="newseller_contents">
<div id="options"></div>
<?php include_partial('form', array('form' => $form)); ?>
</div>