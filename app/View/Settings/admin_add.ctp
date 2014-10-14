<?php

echo $this->Form->create('Setting');
echo $this->Form->input('name', array('type' => 'text'));
echo $this->Form->end('Save');
