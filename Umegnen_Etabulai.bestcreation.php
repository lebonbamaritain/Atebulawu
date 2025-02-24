<?php
/**
 * 
 * 				
 * 				
 * 								
 * 							    ##########################
 * 								#				   		 #
 * 								#	 Umegnen_Etabulai    #
 * 								#				   		 #
 * 								##########################
 * 
 * 
 * 	
 * 
 * 
 */
class Umegnen_Etabulai extends Usof_Ban_Djamumodien
{

	public function __construct($elem,$nbrc,$ext)
	{
	
		$this->usenom_sielemensu($elem,$nbrc,$ext);
		parent::register();
		parent::chargeur();

	}

	private function usenom_sielemensu($elem,$nbrc,$ext)
	{

		($ext===$this->dfext && $nbrc > 0 ? $this->utebuloom_sicalasasumboom($elem,$nbrc):''); 
		($ext===$this->dfext && $nbrc===0 ? $this->utebuloom_sicalasasumboom_nsp($elem):'');

	}

	private function utebuloom_sicalasasumboom($elem,$nbrc)
	{

		if( parent::isString($elem) )
		{		

			if( !in_array($elem, $this->tabAllClass) && pathinfo($elem,PATHINFO_EXTENSION) === $this->dfext )
			{
				
				$this->tabAllDir[] = dirname($elem);
				$countClass = strlen(basename($elem));
				$this->tabAllClass[] = substr(basename($elem),0,($countClass-$nbrc));
				$this->tabAllExtension[] = substr(basename($elem),($countClass-$nbrc),$countClass);									
			} 

		}

	}

	private function utebuloom_sicalasasumboom_nsp($elem)
	{

		if( parent::isString($elem) )
		{			
			
			if( !in_array($elem, $this->tabAllClass) && pathinfo($elem,PATHINFO_EXTENSION) === $this->dfext )
			{

				$this->tabAllDir[] = dirname($elem);
				$countClass = strlen(basename($elem));
				$this->tabAllClass[] = substr(basename($elem),0,($countClass-self::INVALID_DIRECTORY));
				$this->tabAllExtension[] = substr(basename($elem),($countClass-self::INVALID_DIRECTORY),$countClass);

			}			
			
		}		
		
	}



}// Acc fermante de class Umegnen_Etabulai extends Usof_Ban_Djamumodien{....}


