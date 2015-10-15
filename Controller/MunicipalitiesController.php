<?php
App::uses('AppController', 'Controller');
/**
 * Municipalities Controller
 *
 * @property Municipality $Municipality
 */
class MunicipalitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Municipality->recursive = 0;
		$this->set('municipalities', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
		$this->set('municipality', $this->Municipality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Municipality->create();
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
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
		if (!$this->Municipality->exists($id)) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Municipality.' . $this->Municipality->primaryKey => $id));
			$this->request->data = $this->Municipality->find('first', $options);
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
		$this->Municipality->id = $id;
		if (!$this->Municipality->exists()) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Municipality->delete()) {
			$this->Session->setFlash(__('Municipality deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Municipality was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
