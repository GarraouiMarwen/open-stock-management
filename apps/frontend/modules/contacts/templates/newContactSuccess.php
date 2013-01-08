<?php 
include_component("commons", "leftSidebar",array("menu1"=>"NewContact;contacts/newContact" ,"menu2"=>"AllContacts;contacts/listContact","menu3"=>"Review;contacts/reviewContact"));
?>
<?php use_stylesheet("contacts/newContact.css") ?>

<div id="newcontact_contents">

<?php include_partial('form', array('form' => $form)); ?>
</div>