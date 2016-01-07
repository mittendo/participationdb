<?php
App::uses('AppController', 'Controller');
/**
 * EnergySectors Controller
 *
 * @property EnergySector $EnergySector
 */
class EnergySectorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EnergySector->recursive = 0;
		$this->set('energySectors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EnergySector->exists($id)) {
			throw new NotFoundException(__('Invalid energy sector'));
		}
		$options = array('conditions' => array('EnergySector.' . $this->EnergySector->primaryKey => $id));
		$this->set('energySector', $this->EnergySector->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EnergySector->create();
			if ($this->EnergySector->save($this->request->data)) {
				$this->Session->setFlash(__('The energy sector has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The energy sector could not be saved. Please, try again.'));
			}
		}
		$realisations = $this->EnergySector->Realisation->find('list');
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
		if (!$this->EnergySector->exists($id)) {
			throw new NotFoundException(__('Invalid energy sector'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EnergySector->save($this->request->data)) {
				$this->Session->setFlash(__('The energy sector has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The energy sector could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EnergySector.' . $this->EnergySector->primaryKey => $id));
			$this->request->data = $this->EnergySector->find('first', $options);
		}
		$realisations = $this->EnergySector->Realisation->find('list');
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
		$this->EnergySector->id = $id;
		if (!$this->EnergySector->exists()) {
			throw new NotFoundException(__('Invalid energy sector'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EnergySector->delete()) {
			$this->Session->setFlash(__('Energy sector deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Energy sector was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
