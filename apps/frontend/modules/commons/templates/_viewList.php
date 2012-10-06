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
            <tr>
            <?php 
            
            foreach ($listContents as $listContentVal) { 
                    echo '<td>' . $listContentVal['name'] . '</td>';
            }
             ?>
            </tr>
        </tbody>
    </table>
</div>

