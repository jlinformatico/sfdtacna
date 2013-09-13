<?php

App::uses('AppController', 'Controller');

class WebController extends AppController {

	public $uses = array();

	public function index() {
		$this->layout = 'web';
	}
}
