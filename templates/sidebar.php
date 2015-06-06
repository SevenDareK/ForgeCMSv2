</div>
<div class="col-xs-6 col-lg-4">
    <?php
    $req = $db->query('SELECT * FROM forgecms_widgets', false);
    foreach($req as $item):
        echo '<div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-minus"> </i> ' . $item->title . '
            </div>
            <div class="panel-body">
                ' . $item->content . '
            </div>
        </div>';
    endforeach;
    ?>
</div>