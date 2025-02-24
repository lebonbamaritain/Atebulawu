<?php
/**
 * 
 * 
 *  EXAMPLE 1 :
 * 
 * 
 *
require($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/Init.php');
new Init();

new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/Project',111);


$inst_1 = new Project\Class\Class_1("1er Fichier","TEST_1");
$inst_1->test_Interface_1();


$inst_2 = new Project\Class\Class_2("2ème Fichier","TEST_2");
$inst_2->test_Interface_2();


$inst_3 = new Project\Class\Class_3("3ème Fichier","TEST_3");
$inst_3->test_Interface_3();


$inst_4 = new Project\Class\Class_4("4ème Fichier","TEST_4");
$inst_4->test_Interface_4();


$inst_5 = new Project\Class\Class_5("5ème Fichier","TEST_5");
$inst_5->test_Interface_5();








/**
 * 
 * 
 *  EXAMPLE 2 :
 * 
 * 
 *
require($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/Init.php');
new Init();

/**
 * 
 *  Class_Admin
 * 
 * 	Class_Name : Admin_5.admin.php
 * 
 *  extension : [ .admin.php ] = 10 character
 * 
 *  new Autoloader( dirname, codeOperation , extension );
 * 	
 *  new Autoloader( $_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 10 );
 * 
 *
new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 10);
new Admin_5;


/**
 * 
 *  Class_Controller
 * 
 * 	Class_Name : Controller_5.ctrl.php
 * 
 *  extension : [ .ctrl.php ] = 9 character
 * 
 *  new Autoloader( dirname, codeOperation , extension );
 * 	
 *  new Autoloader( $_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 9 );
 * 
 *
new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 9);
new Controller_5;


/**
 * 
 *  Class_Exception
 * 
 * 	Class_Name : Exception_3.exception.php
 * 
 *  extension : [ .exception.php ] = 14 character
 * 
 *  new Autoloader( dirname, codeOperation , extension );
 * 	
 *  new Autoloader( $_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 14 );
 * 
 * 
new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 14);
new MyException_3;


/**
 * 
 *  Class_Forum
 * 
 * 	Class_Name : Forum_5.myforum.php
 * 
 *  extension : [ .myforum.php ] = 12 character
 * 
 *  new Autoloader( dirname, codeOperation , extension );
 * 	
 *  new Autoloader( $_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 12 );
 * 
 * 
new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 12);
new Forum_5;


/**
 * 
 *  Class_Model
 * 
 * 	Class_Name : Model_5.db.php
 * 
 *  extension : [ .db.php ] = 7 character
 * 
 *  new Autoloader( dirname, codeOperation , extension );
 * 	
 *  new Autoloader( $_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 7 );
 * 
 * 
new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 7);
new Model_5;


/**
 * 
 *  Class_NewsLetter
 * 
 * 	Class_Name : NewsLetter_5.newsletter.php
 * 
 *  extension : [ .newsletter.php ] = 15 character
 * 
 *  new Autoloader( dirname, codeOperation , extension );
 * 	
 *  new Autoloader( $_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 15 );
 * 
 *
new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 15);
new NewsLetter_5;


/**
 * 
 *  Class_Securtity
 * 
 * 	Class_Name : Security_5.secure.php
 * 
 *  extension : [ .secure.php ] = 11 character
 * 
 *  new Autoloader( dirname, codeOperation , extension );
 * 	
 *  new Autoloader( $_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 11 );
 * 
 *
new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/AllClass' , 111 , 11);
new Security_5;








/**
 * 
 * 
 *  EXAMPLE 3 :
 * 
 * 
 *
require($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/Init.php');
new Init();

/**
 * 
 * 	Recup and View file
 * 
 *  filename : mySecretFile.fcs
 * 
 *  extension : [ mySecretFile ] = 11 character
 * 
 *  new Autoloader( dirname , codeOperation , fileName_ExceptExtension, extension , Racine_Of_Site_Web );
 * 
 *
$autoload = new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu', 222 , 12 ,'fcs','Atebulawu');

echo "File : ". $autoload->maaMeungaii() ."<BR><BR>";


/**
 * 
 * 	Parse file and extract content of file
 * 
 *
$file = $autoload->maaMeungaii();

$configFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.$file);

$config = json_decode($configFile);

foreach($config->Racine as $racine)
{
	echo $racine."<br>";   	
}









/**
 * 
 * 
 *  EXAMPLE 4 :
 * 
 * 
 *
require($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/Init.php');
new Init();


/**
 * 
 * 	Recup table all file
 * 
 *  extension : ['jpg','jpeg','png','pdf','...']
 * 
 *  new Autoloader( dirname , codeOperation , 0 , extension );
 * 
 *
$autoload = new Autoloader($_SERVER['DOCUMENT_ROOT'].'/Atebulawu/TEST/My_SITE_WEB/Images', 333 , 0 ,'png');

$tabFileImg = $autoload->recupFile();

echo json_encode( $tabFileImg );
*/



?>