<?php
class Controller_PheryDemo extends Controller {
	
	public function before() 
	{
		parent::before();
		
		// The following quickinit method registers 'ph_' prefixed functions as phery callbacks: 
		Phery_Utils::quickinit($this);		
	}	
	
	public function action_index() 
	{
		$view = View::factory('phery/demo');
		$this->response->body($view);
	}
	
	//-------------------------------------------------------------------------------------------------------------
	
	// This method gets registered as phery callback by Phery_Utils::quickinit method
	public function ph_testmethod($data) 
	{
		// Phery allows jquery methods to be used from php! :-)
		return phery_response::factory('#target')
		->html(print_r($data['hello'], true))
		->css(array('backgroundColor' => 'yellow'))
		->width('400')
		->height('200')
		->alert(print_r($data['more'], true))
		;	
	}	
	
}