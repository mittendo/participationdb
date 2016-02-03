<?php
App::uses('AppController', 'Controller');
/**
 * ProcesscomponentsRealisations Controller
 *
 * @property ProcesscomponentsRealisation $ProcesscomponentsRealisation
 */
class ProcesscomponentsRealisationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProcesscomponentsRealisation->recursive = 0;
		$this->set('processcomponentsRealisations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProcesscomponentsRealisation->exists($id)) {
			throw new NotFoundException(__('Invalid processcomponents realisation'));
		}
		$options = array('conditions' => array('ProcesscomponentsRealisation.' . $this->ProcesscomponentsRealisation->primaryKey => $id));
		$this->set('processcomponentsRealisation', $this->ProcesscomponentsRealisation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProcesscomponentsRealisation->create();
			if ($this->ProcesscomponentsRealisation->save($this->request->data)) {
				$this->Session->setFlash(__('The processcomponents realisation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processcomponents realisation could not be saved. Please, try again.'));
			}
		}
		$realisations = $this->ProcesscomponentsRealisation->Realisation->find('list');
		$processcomponents = $this->ProcesscomponentsRealisation->Processcomponent->find('list');
		$this->set(compact('realisations', 'processcomponents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProcesscomponentsRealisation->exists($id)) {
			throw new NotFoundException(__('Invalid processcomponents realisation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProcesscomponentsRealisation->save($this->request->data)) {
				$this->Session->setFlash(__('The processcomponents realisation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processcomponents realisation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProcesscomponentsRealisation.' . $this->ProcesscomponentsRealisation->primaryKey => $id));
			$this->request->data = $this->ProcesscomponentsRealisation->find('first', $options);
		}
		$realisations = $this->ProcesscomponentsRealisation->Realisation->find('list');
		$processcomponents = $this->ProcesscomponentsRealisation->Processcomponent->find('list');
		$this->set(compact('realisations', 'processcomponents'));
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
		$this->ProcesscomponentsRealisation->id = $id;
		if (!$this->ProcesscomponentsRealisation->exists()) {
			throw new NotFoundException(__('Invalid processcomponents realisation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProcesscomponentsRealisation->delete()) {
			$this->Session->setFlash(__('Processcomponents realisation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Processcomponents realisation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
