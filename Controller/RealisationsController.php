<?php
App::uses('AppController', 'Controller');
/**
 * Realisations Controller
 *
 * @property Realisation $Realisation
 */
class RealisationsController extends AppController {

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
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$energySectors = $this->Realisation->EnergySector->find('list');
		$energypolicylinks = $this->Realisation->Energypolicylink->find('list');
		$municipalities = $this->Realisation->Municipality->find('list');
		$processcomponents = $this->Realisation->Processcomponent->find('list');
		$reviews = $this->Realisation->Review->find('list');
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$this->set(compact('stakeholders', 'energySectors', 'energypolicylinks', 'municipalities', 'processcomponents', 'reviews', 'stakeholders'));
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
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$energySectors = $this->Realisation->EnergySector->find('list');
		$energypolicylinks = $this->Realisation->Energypolicylink->find('list');
		$municipalities = $this->Realisation->Municipality->find('list');
		$processcomponents = $this->Realisation->Processcomponent->find('list');
		$reviews = $this->Realisation->Review->find('list');
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$this->set(compact('stakeholders', 'energySectors', 'energypolicylinks', 'municipalities', 'processcomponents', 'reviews', 'stakeholders'));
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

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Realisation->recursive = 0;
		$this->set('realisations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Realisation->exists($id)) {
			throw new NotFoundException(__('Invalid realisation'));
		}
		$options = array('conditions' => array('Realisation.' . $this->Realisation->primaryKey => $id));
		$this->set('realisation', $this->Realisation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Realisation->create();
			if ($this->Realisation->save($this->request->data)) {
				$this->Session->setFlash(__('The realisation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The realisation could not be saved. Please, try again.'));
			}
		}
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$energySectors = $this->Realisation->EnergySector->find('list');
		$energypolicylinks = $this->Realisation->Energypolicylink->find('list');
		$municipalities = $this->Realisation->Municipality->find('list');
		$processcomponents = $this->Realisation->Processcomponent->find('list');
		$reviews = $this->Realisation->Review->find('list');
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$this->set(compact('stakeholders', 'energySectors', 'energypolicylinks', 'municipalities', 'processcomponents', 'reviews', 'stakeholders'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
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
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$energySectors = $this->Realisation->EnergySector->find('list');
		$energypolicylinks = $this->Realisation->Energypolicylink->find('list');
		$municipalities = $this->Realisation->Municipality->find('list');
		$processcomponents = $this->Realisation->Processcomponent->find('list');
		$reviews = $this->Realisation->Review->find('list');
		$stakeholders = $this->Realisation->Stakeholder->find('list');
		$this->set(compact('stakeholders', 'energySectors', 'energypolicylinks', 'municipalities', 'processcomponents', 'reviews', 'stakeholders'));
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
