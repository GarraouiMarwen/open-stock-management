<?php
include_component("commons", "leftSidebar", array("menu1" => "NewCustomer;client/newClient", "menu2" => "AllCustomers;client/listClient", "menu3" => "Review;client/reviewClient"));
use_stylesheet('client/editClient.css')
?>

<div id="editclient_contents">
    <div id="options"></div>

<?php include_partial('form', array('form' => $form, 'client' => $client)); ?>


</div>