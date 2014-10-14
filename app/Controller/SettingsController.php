<?php
App::import('Controller', 'AppController');
App::import('Model', 'Setting');

class SettingsController extends AppController {
    public $helpers = array('Form', 'Session', 'Paginator', 'Html');
    public $uses = array('Setting');

    public function admin_index() {
        $this->Paginator->settings = array(
            'conditions' => array(),
            'limit' => 2,
            'order' => 'Setting.created DESC'
        );

        $lists = $this->Paginator->paginate('Setting');
        $this->set(array('lists' => $lists));
    }

    public function admin_add() {
        if ($this->request->is('post')) {
            $db = $this->Setting->getDataSource();
            $db->begin();
            if (!empty($this->request->data)) {
                $data = $this->request->data;
                $data['Setting']['name'] = $this->request->data['Setting']['name'];
                $data['Setting']['created'] = date('Y-m-d H:i:s', time());

                if ($this->Setting->save($data)) {
                    $db->commit();
                    $this->redirect(array('controller' => 'settings', 'action' => 'index'));
                    $this->Session->setFlash('Save succesfull');
                } else {
                    $this->Session->setFlash('Some thing went wrong !');
                    $db->rollback();
                }
            }
        }
    }

    public function admin_edit() {

    }

    public function admin_delete() {

    }

}
