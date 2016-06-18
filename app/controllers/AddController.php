<?php

class AddController extends \Phalcon\Mvc\Controller
{
    


    public function indexAction()
    {
	    
               
    }
	
    public function registerAction()
    {
	    $contact = new Contact();
			
			$success = $contact->save($this->request->getPost(),array('firstname', 'lastname', 'email'));
		if($success){
			echo "<h1>New contact added</h1>";
		}
               
    }
	
	
}