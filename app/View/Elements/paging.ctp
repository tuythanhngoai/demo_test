<!-- Start pagination -->
<?php if($this->Paginator->hasPage(null, 2)) { ?>
    <ul class="pagination">
        <?php
            echo $this->Paginator->first('«', array('tag' => 'li', 'disabledTag' => 'a'));

            if ($this->Paginator->hasPrev()) {
                echo $this->Paginator->prev('‹', array('tag' => 'li', 'disabledTag' => 'a'));
            }

            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active', 'modulus' => 7, 'ellipsis' => false));

            if ($this->Paginator->hasNext()) {
                echo $this->Paginator->next('›', array('tag' => 'li', 'disabledTag' => 'a'));
            }

            echo $this->Paginator->last('»', array('tag' => 'li', 'disabledTag' => 'a'));
        ?>
    </ul>
<?php }?>
<!-- /End of pagination -->
