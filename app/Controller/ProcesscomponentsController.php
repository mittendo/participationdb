<?php
App::uses('AppController', 'Controller');
/**
 * Processcomponents Controller
 *
 * @property Processcomponent $Processcomponent
 */
class ProcesscomponentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Processcomponent->recursive = 0;
		$this->set('processcomponents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Processcomponent->exists($id)) {
			throw new NotFoundException(__('Invalid processcomponent'));
		}
		$options = array('conditions' => array('Processcomponent.' . $this->Processcomponent->primaryKey => $id));
		$this->set('processcomponent', $this->Processcomponent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Processcomponent->create();
			if ($this->Processcomponent->save($this->request->data)) {
				$this->Session->setFlash(__('The processcomponent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processcomponent could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Processcomponent->exists($id)) {
			throw new NotFoundException(__('Invalid processcomponent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Processcomponent->save($this->request->data)) {
				$this->Session->setFlash(__('The processcomponent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processcomponent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Processcomponent.' . $this->Processcomponent->primaryKey => $id));
			$this->request->data = $this->Processcomponent->find('first', $options);
		}
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
		$this->Processcomponent->id = $id;
		if (!$this->Processcomponent->exists()) {
			throw new NotFoundException(__('Invalid processcomponent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Processcomponent->delete()) {
			$this->Session->setFlash(__('Processcomponent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Processcomponent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
