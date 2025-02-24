



										#################
 										#				#
 										#	 English    #
 										#				#
 										#################




Nom du composant : ATEBULAWU

Langage de fabrication : PHP

Categorie : usage component

Date de création : 02 - 2025

Auteur : Mathieu Kabo Junior

Version : 0.0.7

Detail : 

This is a user component that will allow you to carry out the following operations :

1 - You can use this component to load classes contained in namespaces in a dynamic way. Just provide 2 parameters to the Autoloader class. The first parameter to provide to the Autoloader class is the absolute path of the host repertoire of your namespaces. NB: If you use a relative path, the automatic classroom loading system will not be able to load your classes. In the second parameter, you must provide the Autoloader class the code 111. This code begins the automatic loading system for your classes. If you wish to test the first operation taken does not count by the component, decommement the example 1 in the index.

2 file - Code 111 also allows you to initiate a class loading system except that this time the classes do not are not in namespaces. It is a system that I use myself to better organize my classes. I have considered it useful to share this organization with the rest of the web developers. How do I proceed? I start by putting my classes first by category. For example, I store all my classes which contain my security system in a file that I call Class_Security. Then I do the same for all the rest of the system.
Then, we should not forget the part that I will mention earlier, it is essential to the proper functioning of the automatic loading system for your classes. In order for the system to effectively load your classes, you must add a second extension to the names of your classes. Example: [Security.secure.php] What is it for? Answer: The second extension added to the names of your classes will allow the [Atebulawu] component to only load the classes you need on part of your sources. Another clarification, you must make sure that the name of your second extension has a different number of characters from the other parts of your site. I take an example: if the second extension of all the classes which contain my security system is (CTRL) then I should make sure that the second extension of the classes which contain my newsletter system has a higher number of characters or lower than 4. Why is it so important? If the second extension is the same on all the names of the classes of your website, when you use the automatic loading system of your classes on part of your source code, the system will load all your classes including classes including classes which you do not need in a specific part of your program. This is the whole point of selecting only the classes you need. This component has been preconfigured to perform this task. It also takes into account dependencies when automatically loads several classes in system memory. NB: When one or more of your classes use other classes to function properly, it is recommended to organize your files so that the automatic classroom loading system can load the dependencies first before loading all classes which use dependencies to function properly; Otherwise the system will be able to return an error if the outbuildings are loaded afterwards. I specified several examples taking into account the inheritance in PHP. Do tests to better understand how the component works. To do this, decommement the example 2. 

3 - The component also allows you to recover a specific file in a directory of your site without mentioning or the path [Absolute | Relative] of the file, nor the name of the file itself. This may be useful when handling sensitive files or even configuration files. If you want to test the component, decommement the example 3. 

4 - Finally, the last operation taken into account by the component. The component allows you this time to recover several files from their extensions. I preconfigured a set of extension supported by the system. You can modify the table from the Usof_Ban_Djamumodien class. To test the last operation taken into account by the component, decommement the example 4. NB: when you want to use this component to recover one or more files from their extensions in your project (s) or on your site , you will need to effect an upgrade of the method that performs the operation. 1 - Go to the abstract class Usof_Ban_Djamumodien 2 - Find the method called utebulom_wanimagne 3 - Replace Basename ($file) by $ file. 


You can integrate it into your current or future projects, in your website and wherever you need to automatically load one or more classes or to recover one or more files. Usage: Recover the System folder and the Readme folder and also the INIT.PHP file. For the rest do as in the examples mentioned in the index.php file. To your keyboards the geek!

