<?php use_stylesheet('stock/leftmenuItem.css') ?>
<div id="item_leftmenu">    
    
    <div id="item_leftmenu_top">

    </div>
    
    <ul>
        <li><a href="<?php echo url_for('stock/addItem'); ?>">New Item</a></li> <!-- onclick loads the addItem inside itemcontent -->
        <li><a href="<?php echo url_for('stock/listItem'); ?>">All Items</a></li>
        <li><a href="<?php echo url_for('stock/listItem'); ?>">Review</a></li> <!-- have to change once adding a page for review -->
    </ul>

</div>
