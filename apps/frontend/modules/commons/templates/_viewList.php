<div id="item_list">
    <div id="table_options">
    </div>
    <table id="item_list_table">
        
        <thead>
            <tr>
                <?php
                foreach ($headers as $headerVal) { 
                    echo '<th>' . $headerVal . '</th>';
                }
                ?>
            </tr>
        </thead>
        
        <tbody>
            
            <?php 
            print_r($listContents);
            ?>
        </tbody>
    </table>
</div>

<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo '<pre>';
//print_r($headers);
//echo '<br />';
//print_r($listContents);
?>