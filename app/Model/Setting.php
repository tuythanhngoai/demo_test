<?php

/**
 * @author Tuy Nguyen <tuynv@ominext.com>
 * @todo setting for website here
 */
class Setting extends AppModel {

    public function listAll() {
        $list = $this->find('all', array(
            'limit' => 2
        ));
    }

}
