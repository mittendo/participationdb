<?php
App::uses('AppController', 'Controller');
/**
 * Conflicttypes Controller
 *
 * @property Conflicttype $Conflicttype
 */
class ConflicttypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Conflicttype->recursive = 0;
		$this->set('conflicttypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Conflicttype->exists($id)) {
			throw new NotFoundException(__('Invalid conflicttype'));
		}
		$options = array('conditions' => array('Conflicttype.' . $this->Conflicttype->primaryKey => $id));
		$this->set('conflicttype', $this->Conflicttype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conflicttype->create();
			if ($this->Conflicttype->save($this->request->data)) {
				$this->Session->setFlash(__('The conflicttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conflicttype could not be saved. Please, try again.'));
			}
		}
		$realisations = $this->Conflicttype->Realisation->find('list');
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
		if (!$this->Conflicttype->exists($id)) {
			throw new NotFoundException(__('Invalid conflicttype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Conflicttype->save($this->request->data)) {
				$this->Session->setFlash(__('The conflicttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conflicttype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Conflicttype.' . $this->Conflicttype->primaryKey => $id));
			$this->request->data = $this->Conflicttype->find('first', $options);
		}
		$realisations = $this->Conflicttype->Realisation->find('list');
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
		$this->Conflicttype->id = $id;
		if (!$this->Conflicttype->exists()) {
			throw new NotFoundException(__('Invalid conflicttype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Conflicttype->delete()) {
			$this->Session->setFlash(__('Conflicttype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Conflicttype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
