<?php

App::uses('AppController', 'Controller');

class WebController extends AppController {

	public $uses = array();

	function beforeFilter() {    
		parent::beforeFilter();     
		$this->Auth->allow('index');
	}

	public function index() {
		$this->layout = 'web';
	}
}
