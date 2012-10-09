<?php use_stylesheet('commons/list.css') ?>
<div id="list">
    <?php if ($pager->haveToPaginate()) { ?>
        <div>
            <?php include_partial('commons/pagingLinks', array('simplePager' => $pager)); ?>
            <br />
        </div>
    <?php } ?>
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
            foreach ($listContents as $listContentRow) {
                echo '<tr>';
                foreach ($listContentRow as $listContentColumn) {
                    echo '<td>' . $listContentColumn . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

