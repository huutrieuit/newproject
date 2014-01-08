<?php
App::uses('AppController', 'Controller');
/**
 * TblUsers Controller
 *
 * @property TblUser $TblUser
 * @property PaginatorComponent $Paginator
 */
class TblUsersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Html');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TblUser->recursive = 0;
		$this->set('tblUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TblUser->exists($id)) {
			throw new NotFoundException(__('Invalid tbl user'));
		}
		$options = array('conditions' => array('TblUser.' . $this->TblUser->primaryKey => $id));
		$this->set('tblUser', $this->TblUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TblUser->create();
			if ($this->TblUser->save($this->request->data)) {
				$this->Session->setFlash(__('The tbl user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbl user could not be saved. Please, try again.'));
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
		if (!$this->TblUser->exists($id)) {
			throw new NotFoundException(__('Invalid tbl user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TblUser->save($this->request->data)) {
				$this->Session->setFlash(__('The tbl user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbl user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TblUser.' . $this->TblUser->primaryKey => $id));
			$this->request->data = $this->TblUser->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TblUser->id = $id;
		if (!$this->TblUser->exists()) {
			throw new NotFoundException(__('Invalid tbl user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TblUser->delete()) {
			$this->Session->setFlash(__('The tbl user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tbl user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TblUser->recursive = 0;
		$this->set('tblUsers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TblUser->exists($id)) {
			throw new NotFoundException(__('Invalid tbl user'));
		}
		$options = array('conditions' => array('TblUser.' . $this->TblUser->primaryKey => $id));
		$this->set('tblUser', $this->TblUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TblUser->create();
			if ($this->TblUser->save($this->request->data)) {
				$this->Session->setFlash(__('The tbl user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbl user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TblUser->exists($id)) {
			throw new NotFoundException(__('Invalid tbl user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TblUser->save($this->request->data)) {
				$this->Session->setFlash(__('The tbl user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbl user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TblUser.' . $this->TblUser->primaryKey => $id));
			$this->request->data = $this->TblUser->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TblUser->id = $id;
		if (!$this->TblUser->exists()) {
			throw new NotFoundException(__('Invalid tbl user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TblUser->delete()) {
			$this->Session->setFlash(__('The tbl user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tbl user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
