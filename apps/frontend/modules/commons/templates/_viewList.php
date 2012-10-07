<?php use_stylesheet('commons/list.css') ?>
<div id="list">
     <table id="list_table">

        <thead class="head">
            <tr>
                <?php
                foreach ($listHeaders as $headerVal) {
                    echo '<th width=' . $headerVal['width'] . '>' . $headerVal['name'] . '</th>';
                }
                ?>
            </tr>
        </thead>

        <tbody class="body">
            <?php
            foreach ($listContents as $listContentVal) {
                echo '<tr>';
                 $count=0;
                while(isset( $listContentVal[$count] )){
                              echo '<td>' . $listContentVal[$count] . '</td>';
                        $count++;
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

