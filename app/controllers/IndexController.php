<?php

class IndexController extends \Phalcon\Mvc\Controller
{
    


    public function indexAction()
    {
	    
               
    }

	public function showAction($contactId){
		
		
		$contact = Contact::findFirst($contactId);
			
		
		?>
		
	<h1 id="contact_information">Contact information</h1>
	<h2>Everything you want to know about your contact</h2>
		
	 <div class='contacts'>
		 <ul id="contactlist">
		<li> 
			<?php echo "Firstname : ", $contact->firstname; ?>
		</li>
		<li> 
			<?php echo "Lastname : ", $contact->lastname; ?>
		</li>
		<li id="email"> 
			<?php echo "Email : ", $contact->email; ?>
		</li>		
		<li> 
			<?php echo "Creation date : ", $contact->creationdate; ?>
		</li>
		
	</ul>		
	 </div> 
	 <?php 

	}
	
	public function contactmeAction(){
		
		echo "
   	 <div>
   		 <ul>
   		<li> 
   			Alexis Challier
   		</li>
   		<li id='email'> 
   			Email : alex36.challier@gmail.com
   		</li>
   		<li> 
   			Tel : +56951188718
   		</li>		
   	</ul>		
   	 </div> ";
	
	}

}
?>
