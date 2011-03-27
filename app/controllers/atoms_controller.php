<?php
/**
 * Atoms Controller
 *
 */
class AtomsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Atom->recursive = 0;
		$this->set('atoms', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
      $this->Atom->create();
      $this->Atom->set('ip',$this->request->clientIp());
      $this->Atom->set($this->request->data);
        if ($this->Atom->save()) {
				  $this->Session->setFlash(__('The atom has been saved'));
				  $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atom could not be saved. Please, try again.'));
			}
		}
	}
}
