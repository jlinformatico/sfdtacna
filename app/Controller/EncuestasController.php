<?php
App::uses('AppController', 'Controller');

class EncuestasController extends AppController {

	public $uses = array('Encuesta','Pregunta');
	
	public function index() {
		$this->Encuesta->recursive = 0;
		$this->set('encuestas', $this->Encuesta->find('all'));
	}

	public function view($id = null) {
		if (!$this->Encuesta->exists($id)) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		$options = array('conditions' => array('Encuesta.' . $this->Encuesta->primaryKey => $id));
		$this->set('encuesta', $this->Encuesta->find('first', $options));
	}

	public function encuesta_add() {
		if ($this->request->is('post')) {
			$this->request->data['Encuesta']['usuario_id'] = 1;
			$this->request->data['Encuesta']['fecha_creacion'] = $this->fecha_hora();
			$this->Encuesta->create();
			if ($this->Encuesta->save($this->request->data)) {
				return $this->redirect(array('action' => 'preguntas',$this->Encuesta->id));	
			} else {
				$this->Session->setFlash(__('The encuesta could not be saved. Please, try again.'));
			}
		}
	}

	public function preguntas($id = null){
		if (!$this->Encuesta->exists($id)) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		if ($this->request->is('post')) {
			$this->Pregunta->create();
			if ($this->Pregunta->save($this->request->data)) {
				return $this->redirect(array('action' => 'preguntas',$this->Encuesta->id));	
			} else {
				$this->Session->setFlash(__('The preguntas could not be saved. Please, try again.'));
			}	
		}
		else{
			$encuesta = $this->Encuesta->read(null,$id);
			$this->set('encuesta',$encuesta);
			$this->set('preguntas',$this->Pregunta->find('all',array('conditions'=>array(
												'Pregunta.encuesta_id'=>$id
												))));
		}
	}

	public function encuesta_edit($id = null) {
		if (!$this->Encuesta->exists($id)) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Encuesta->save($this->request->data)) {
				$this->Session->setFlash(__('The encuesta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encuesta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Encuesta.' . $this->Encuesta->primaryKey => $id));
			$this->request->data = $this->Encuesta->find('first', $options);
			$this->set('preguntas',$this->Pregunta->find('all',array('conditions'=>array(
												'Pregunta.encuesta_id'=>$id
												))));
		}
	}

	public function delete($id = null) {
		$this->Encuesta->id = $id;
		if (!$this->Encuesta->exists()) {
			throw new NotFoundException(__('Invalid encuesta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Encuesta->delete()) {
			$this->Session->setFlash(__('The encuesta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The encuesta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
