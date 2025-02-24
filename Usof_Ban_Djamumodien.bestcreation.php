<?php
/**
 * 
 * 
 * 
 * 
 * 							############################
 * 							#					  	   #
 * 							#	Usof_Ban_Djamumodien   #
 * 							#					  	   #
 * 							############################
 * 
 * 
 * 
 * 
 * 
 * 
 */ 
abstract class Usof_Ban_Djamumodien
{	

	// ATTRIBUTS
    protected 	$dir,
    			$ext,
    			$nbrc,
    			$file, 
    			$dfext = 'php', 			 			
    			$tabAllDir = [],
    			$tabAllFile = [],
				$tabAllClass = [],	
				$tabAllExtension = [],		
				$extensionPermit = ['jpg','jpeg','png','pdf'],
				$parentDirectory;	

	// CONSTANTES ERROR
	const NO_FILE = 2;
	const INVALID_CODE = 3;
	const INVALID_DIRECTORY = 4;	
	const INVALID_EXTENSION = 5;

	protected function agnessau($dir)
	{		   	
 		
 		if(file_exists($dir) && is_dir($dir))
		{
        	
        	$scanner = scandir($dir);
        	$allDir = array_diff($scanner, array('.','..'));

        	if(count($allDir) > 0)
        	{
        		foreach($allDir as $file)
        		{      			      			     
        			if(is_file("$dir/$file") && pathinfo($file,PATHINFO_EXTENSION) === $this->ext)
                	{              		               		               		
                		               		
                		$c = substr(pathinfo($file,PATHINFO_BASENAME),0,(strlen(pathinfo($file,PATHINFO_BASENAME))-$this->nbrc));

                		$e = substr(pathinfo($file,PATHINFO_BASENAME),(strlen(pathinfo($file,PATHINFO_BASENAME))-$this->nbrc),strlen(pathinfo($file,PATHINFO_BASENAME)));
              		
                		if($this->ext === $this->dfext && $this->nbrc > 0 && strcspn($c,'.') === strlen($c) && (substr_count($e,'.') === 2) && $e[0] === '.')
                		{
              			               			
                			$this->usenom_sielemensu($dir."/".$file,$this->nbrc,$this->ext);                            			       			
            			}else if( $this->ext === $this->dfext && $this->nbrc === 0 )
            			{

            				$this->usenom_sielemensu($dir."/".$file,$this->nbrc,$this->ext);

            			}else($this->ext != $this->dfext && $this->isString($this->parentDirectory) ? $this->utebuloom_uwitawumboom($dir."/".$file,$this->parentDirectory):'');
                	
                	}else if(is_dir("$dir/$file")) $this->agnessau("$dir/$file");        
                						        		
        		}

        	}	

    	}

	}

	private function usenom_sielemensu($elem,$nbrc,$ext){new Umegnen_Etabulai($elem,$nbrc,$ext);}

	protected function isString($value)
	{
		if( !empty($value) && $value!=null && is_string($value) && filter_var($value, FILTER_SANITIZE_STRING) && strlen($value) >= 2 )
		{
			
			return true;

		}else return false;

	} 

	private function isArray($value)
	{
		if( !empty($value) && is_array($value) && count($value) > 0 )
		{
			
			return true;

		}else return false;

	} 

	private function utebuloom_uwitawumboom($elem,$parentDirectory)
	{	
				
		if( !empty($elem) && $elem !== null )
		{			
			if( !in_array($elem, $this->tabAllClass) && pathinfo($elem,PATHINFO_EXTENSION) != $this->dfext )
			{
				if( strlen(pathinfo($elem,PATHINFO_FILENAME)) === $this->nbrc )
				{								
					
					$uri = pathinfo($elem,PATHINFO_DIRNAME).DIRECTORY_SEPARATOR.pathinfo($elem,PATHINFO_BASENAME);
            		$posD = strpos($uri,$parentDirectory);
            		$newURI = substr($uri, $posD, (strlen($uri)-$posD) );
					$this->file = (string) $newURI;					
					
				}
			
			}

		}

	}

	protected function utebulom_wanimagne($dir,$ext)
	{
		if(file_exists($dir) && is_dir($dir))
		{              	        	
        	
        	$allFile = glob($dir."/*".$ext);
        	
        	if(count($allFile) > 0)
        	{        	
            	
            	foreach($allFile as $file)
            	{               	          		
                	if(is_file("$file"))
                	{                  	
                    	
                    	$this->tabAllFile[] = basename($file); // $file                   	
                	
                	}else if(is_dir("$file")) $this->Utebulom_Wanimagne("$file",$ext);
                           
            	}
        
        	}      	
    	
    	}

	}

	protected function register(){spl_autoload_register([__CLASS__,'autoload']);}
	
	private function autoload($class)
	{   			
				
		if( $this->isArray($this->tabAllClass) && in_array($class,$this->tabAllClass) )
		{

			$key = array_search($class,$this->tabAllClass);
			$file = $this->tabAllDir[$key].DIRECTORY_SEPARATOR.$this->tabAllClass[$key].$this->tabAllExtension[$key];
			require_once($file);

		}		
		
	}

	protected function chargeur()
	{

		if( $this->isArray($this->tabAllClass) )
		{
			
			$file = $this->tabAllDir[0].DIRECTORY_SEPARATOR.$this->tabAllClass[0].$this->tabAllExtension[0];
			require_once($file);

		}

	} 


}// Acc fermante de abstract class Usof_Ban_Djamumodien{....}