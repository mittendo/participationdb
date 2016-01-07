<?php
App::uses('AppController', 'Controller');
/**
 * Energypolicylinks Controller
 *
 * @property Energypolicylink $Energypolicylink
 */
class EnergypolicylinksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Energypolicylink->recursive = 0;
		$this->set('energypolicylinks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Energypolicylink->exists($id)) {
			throw new NotFoundException(__('Invalid energypolicylink'));
		}
		$options = array('conditions' => array('Energypolicylink.' . $this->Energypolicylink->primaryKey => $id));
		$this->set('energypolicylink', $this->Energypolicylink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Energypolicylink->create();
			if ($this->Energypolicylink->save($this->request->data)) {
				$this->Session->setFlash(__('The energypolicylink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The energypolicylink could not be saved. Please, try again.'));
			}
		}
		$realisations = $this->Energypolicylink->Realisation->find('list');
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
		if (!$this->Energypolicylink->exists($id)) {
			throw new NotFoundException(__('Invalid energypolicylink'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Energypolicylink->save($this->request->data)) {
				$this->Session->setFlash(__('The energypolicylink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The energypolicylink could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Energypolicylink.' . $this->Energypolicylink->primaryKey => $id));
			$this->request->data = $this->Energypolicylink->find('first', $options);
		}
		$realisations = $this->Energypolicylink->Realisation->find('list');
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
		$this->Energypolicylink->id = $id;
		if (!$this->Energypolicylink->exists()) {
			throw new NotFoundException(__('Invalid energypolicylink'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Energypolicylink->delete()) {
			$this->Session->setFlash(__('Energypolicylink deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Energypolicylink was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Energypolicylink->recursive = 0;
		$this->set('energypolicylinks', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Energypolicylink->exists($id)) {
			throw new NotFoundException(__('Invalid energypolicylink'));
		}
		$options = array('conditions' => array('Energypolicylink.' . $this->Energypolicylink->primaryKey => $id));
		$this->set('energypolicylink', $this->Energypolicylink->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Energypolicylink->create();
			if ($this->Energypolicylink->save($this->request->data)) {
				$this->Session->setFlash(__('The energypolicylink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The energypolicylink could not be saved. Please, try again.'));
			}
		}
		$realisations = $this->Energypolicylink->Realisation->find('list');
		$this->set(compact('realisations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Energypolicylink->exists($id)) {
			throw new NotFoundException(__('Invalid energypolicylink'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Energypolicylink->save($this->request->data)) {
				$this->Session->setFlash(__('The energypolicylink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The energypolicylink could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Energypolicylink.' . $this->Energypolicylink->primaryKey => $id));
			$this->request->data = $this->Energypolicylink->find('first', $options);
		}
		$realisations = $this->Energypolicylink->Realisation->find('list');
		$this->set(compact('realisations'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Energypolicylink->id = $id;
		if (!$this->Energypolicylink->exists()) {
			throw new NotFoundException(__('Invalid energypolicylink'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Energypolicylink->delete()) {
			$this->Session->setFlash(__('Energypolicylink deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Energypolicylink was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
