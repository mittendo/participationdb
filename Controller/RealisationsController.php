<?php
App::uses('AppController', 'Controller');
/**
 * Realisations Controller
 *
 * @property Realisation $Realisation
 */
class RealisationsController extends AppController {

    public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index', 'view');
}
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Realisation->recursive = 0;
		$this->set('realisations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Realisation->exists($id)) {
			throw new NotFoundException(__('Invalid realisation'));
		}
		$options = array('conditions' => array('Realisation.' . $this->Realisation->primaryKey => $id));
		$this->set('realisation', $this->Realisation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Realisation->create();
			if ($this->Realisation->save($this->request->data)) {
				$this->Session->setFlash(__('The realisation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The realisation could not be saved. Please, try again.'));
			}
		}
		$municipalities = $this->Realisation->Municipality->find('list');
		$processcomponents = $this->Realisation->Processcomponent->find('list');
		$reviews = $this->Realisation->Review->find('list');
		$this->set(compact('municipalities', 'processcomponents', 'reviews'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Realisation->exists($id)) {
			throw new NotFoundException(__('Invalid realisation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Realisation->save($this->request->data)) {
				$this->Session->setFlash(__('The realisation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The realisation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Realisation.' . $this->Realisation->primaryKey => $id));
			$this->request->data = $this->Realisation->find('first', $options);
		}
		$municipalities = $this->Realisation->Municipality->find('list');
		$processcomponents = $this->Realisation->Processcomponent->find('list');
		$reviews = $this->Realisation->Review->find('list');
		$this->set(compact('municipalities', 'processcomponents', 'reviews'));
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
		$this->Realisation->id = $id;
		if (!$this->Realisation->exists()) {
			throw new NotFoundException(__('Invalid realisation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Realisation->delete()) {
			$this->Session->setFlash(__('Realisation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Realisation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
