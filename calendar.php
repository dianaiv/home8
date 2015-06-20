<?php
class Calendar extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
	}
	public function show_calendar(){
		$prefs = array (
               'start_day'    => 'monday',
               'month_type'   => 'long',
               'day_type'     => 'short'
             );
		$this->load->library('calendar',$prefs);
		$data = array(
               10  => 'http://school.vratsasoftware.com/wp-content/uploads/2015/05/1.-OOP-Intro.pdf',
               13 => 'http://school.vratsasoftware.com/wp-content/uploads/2015/05/2.-OOP-Inheritance.pdf',
               17 => 'http://school.vratsasoftware.com/wp-content/uploads/2015/05/3.1-OOP-Intefraces.pdf',
               20  => 'http://school.vratsasoftware.com/wp-content/uploads/2015/05/4.-CI-Controllers.pdf',
               24 => 'http://school.vratsasoftware.com/wp-content/uploads/2015/05/5.-CI-Models.pdf',
               27  => 'http://school.vratsasoftware.com/wp-content/uploads/2015/05/6.-CI-Views.pdf',
               30  => 'http://school.vratsasoftware.com/wp-content/uploads/2015/05/7.-CI-Architecture-Profiling.pdf',
               );

		echo $this->calendar->generate(2015,5,$data);
		$this->load->view('show_calendar',$data); 
	}	
}		

?>