<?php 
include_component("commons", "leftSidebar",array("menu1"=>"NewCustomer;client/newClient" ,"menu2"=>"AllCustomers;client/listClient","menu3"=>"Review;client/reviewClient"));

?>
<?php use_stylesheet("client/newClient.css") ?>

<div id="newclient_contents">
<div id="options"></div>
<?php include_partial('form', array('form' => $form)); ?>
</div>