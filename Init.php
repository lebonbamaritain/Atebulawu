<?php
/**
 * 
 * 						
 * 						####################
 * 						#				   #
 * 						#	Initialiseur   #
 * 						#				   #
 * 						####################
 * 
 * 
 * 
 * 
 */ 
class Init 
{
		
	private $_dir = null,
			$_ext = null;

	public function __construct()
	{
		$this->_dir = 'System';
		$this->_ext = 'bestcreation';  
		$this->register();	
	}	
	private function register()
	{
		spl_autoload_register([__CLASS__, 'autoload']);
	}				
	private function autoload($class)
	{
    		 
    	if(file_exists(__DIR__.'/'.$this->_dir.'/'.$class.'.'.$this->_ext.'.php'))
    	{
        	require_once(__DIR__.'/'.$this->_dir.'/'.$class.'.'.$this->_ext.'.php'); 
    	}
			
	}
		
}// Acc fermante de class Init{....}
