<?php 
include_component("commons", "leftSidebar",array("menu1"=>"NewContact;contacts/newContact" ,"menu2"=>"AllContacts;contacts/listContact","menu3"=>"Review;contacts/reviewContact"));
?>


<?php include_partial('form', array('form' => $form)); ?>
