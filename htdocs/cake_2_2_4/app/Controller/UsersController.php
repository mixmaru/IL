<?php
class UsersController extends AppController{
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add', 'logout');
	}
	
	public function index(){
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	
	public function view($id = null){
		$this->User->id = $id;
		if(!$this->User->exists()){
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
	
	public function add(){
		if($this->request->is('post')){
			$this->User->create();
			if($this->User->save($this->request->data)){
				$this->Session->setFlaxh(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash(__('The user could not be saved. Please, try again'));
			}
		}
	}
	
	public function edit($id = null){
		$this->User->id = $id;
		if(!$this->User->exists()){
			throw new NotFoundException(__('Invalid user'));
		}
		if($this->request->is('post') || $this->request->is('put')){
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}else{
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
	}
	
	public function delete($id = null){
		if(!$this->request->is('post')){
			throw new MothodNotAllowedException();
		}
		$this->User->id = $id;
		if(!$this->User->exists()){
			throw new NotFoundException(__('Invalid user'));
		}
		if($this->User->Delete()){
			
		}
	}
}
?>
