<?php use_stylesheet('commons/list.css') ?>
<div id="list">
    <?php if ($pager->haveToPaginate()) { ?>
        <div>
            <?php include_partial('commons/pagingLinks', array('simplePager' => $pager)); ?>
            <br />
        </div>
    <?php }; ?>
    <table id="list_table">

        <thead class="head">
            <tr>
                <?php
                echo '<th width=30> No.</th>';
                foreach ($listHeaders as $headerVal) {
                    echo '<th width=' . $headerVal['width'] . '>' . $headerVal['name'] . '</th>';
                }
                ?>
            </tr>
        </thead>

        <tbody class="body">
            <?php
            $count=0;
            foreach ($listContents as $listContentRow) {
                echo '<tr>';
                $count++;
                echo '<td>'.$count.'</td>';
                foreach ($listContentRow as $listContentColumn) {
                    echo '<td>' . $listContentColumn . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

