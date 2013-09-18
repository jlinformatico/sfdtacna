<?php 
App::uses('AppController', 'Controller');

class InscriptosController extends AppController{

	function beforeFilter() {    
		parent::beforeFilter();     
		$this->Auth->allow('index');
	}

	public function index(){
		$inscriptos = $this->Inscripto->find('all', array(
			'conditions'=>array('Inscripto.flag'=>0),
			'order'=>'fecha_registro DESC'));
		$this->set('inscriptos', $inscriptos);	
	}

	public function ajax_registrar(){
		$this->layout = 'ajax';
		$this->request->data['Inscripto']['fecha_registro'] = $this->fecha_hora(); 
		$email = $this->request->data['Inscripto']['email'];
		$dni = $this->request->data['Inscripto']['dni'];

		$inscriptos = $this->Inscripto->find('first', array('conditions'=>array(
			'Inscripto.email'=>$email, 
			'Inscripto.dni'=>$dni)));

		if(empty($inscriptos)){
			$this->Inscripto->create();

			if($this->Inscripto->save($this->request->data))
				$save = 1;
			else
				$save = 0;
		}else{
			$save = 2;
		}
		$this->set('save',$save);	
		
	}


	public function registrar(){
		if($this->request->is('post')){
			$this->Inscripto->create();
			

		}
	}



}

?>