<?php
App::uses('AppController', 'Controller');
/**
 * Stakeholders Controller
 *
 * @property Stakeholder $Stakeholder
 */
class StakeholdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Stakeholder->recursive = 0;
		$this->set('stakeholders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Stakeholder->exists($id)) {
			throw new NotFoundException(__('Invalid stakeholder'));
		}
		$options = array('conditions' => array('Stakeholder.' . $this->Stakeholder->primaryKey => $id));
		$this->set('stakeholder', $this->Stakeholder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Stakeholder->create();
			if ($this->Stakeholder->save($this->request->data)) {
				$this->Session->setFlash(__('The stakeholder has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stakeholder could not be saved. Please, try again.'));
			}
		}
		$realisations = $this->Stakeholder->Realisation->find('list');
		$this->set(compact('realisations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Stakeholder->exists($id)) {
			throw new NotFoundException(__('Invalid stakeholder'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Stakeholder->save($this->request->data)) {
				$this->Session->setFlash(__('The stakeholder has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stakeholder could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Stakeholder.' . $this->Stakeholder->primaryKey => $id));
			$this->request->data = $this->Stakeholder->find('first', $options);
		}
		$realisations = $this->Stakeholder->Realisation->find('list');
		$this->set(compact('realisations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Stakeholder->id = $id;
		if (!$this->Stakeholder->exists()) {
			throw new NotFoundException(__('Invalid stakeholder'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Stakeholder->delete()) {
			$this->Session->setFlash(__('Stakeholder deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Stakeholder was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
