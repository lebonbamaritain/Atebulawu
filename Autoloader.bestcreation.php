<?php
/**
 * 
 * 
 * 							####################
 * 							#				   #
 * 							#	 Autoloader    #
 * 							#				   #
 * 							####################
 * 
 * 
 * 
 * 
 */ 
class Autoloader extends Usof_Ban_Djamumodien
{	

	public function __construct(string $dirname,int $code,int $nbrc=0,string $ext=null,$parentDirectory=null)
	{
			
		switch($code){
			
			case 111:
				
				$this->dir = (string) $dirname;
				$this->nbrc = (int) $nbrc;
				($this->ext = $this->dfext);
													
				parent::agnessau($this->dir);

				break;

			case 222:
				
				$this->dir = (string) $dirname;
				$this->ext = (string) $ext;
				$this->nbrc = (int) $nbrc;
				$this->parentDirectory = (string) $parentDirectory;	
				
				parent::agnessau($this->dir);			
									
				break;

			case 333:
				
				if(in_array($ext,$this->extensionPermit))
				{

					$this->dir = (string) $dirname;
					$this->ext = (string) $ext;
					
					parent::utebulom_wanimagne($this->dir,$this->ext);

				}

				break;
			
			default: return self::INVALID_CODE;
				break;
			
		}	
		
			
	}

	public function recupFile()
	{

		if( count($this->tabAllFile) > 0 )
		{

			return $this->tabAllFile;

		}return self::NO_FILE;

	}

	public function maaMeungaii()
	{

		if( parent::isString($this->file) )
		{

			return $this->file;	

		}return self::NO_FILE;

	} 
	
	

}// Acc fermante de class Autoloader extends Usof_Ban_Djamumodien{....}