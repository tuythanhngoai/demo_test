<table>
    <tr>
        <th>Name</th>
        <th>Value</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Status</th>
    </tr>
    <?php
    if ($lists):
        foreach ($lists as $key => $setting):
            ?>
    <tr>
                <td><?php echo $setting['Setting']['name']; ?></td>
            </tr>

                    <?php
                endforeach;

    endif;
    ?>
</table>
<?php echo $this->element('paging'); ?>
