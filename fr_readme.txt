
							

							
										##################
 										#				 #
 										#	 Français    #
 										#				 #
 										##################





Nom du composant : ATEBULAWU

Langage de fabrication : PHP

Categorie : Composant d'usage

Date de création : 02 - 2025

Auteur : Mathieu Kabo Junior

Version : 0.0.7

Detail : 

Ceci est un composant d'usage qui vous permettra d'effectuer les opérations suivantes : 

1 - Vous pouvez utiliser ce composant pour charger des classes contenues dans des NAMESPACES de manière dynamique. Il vous suffit juste de fournir 2 paramètres à la classe Autoloader. Le premier paramètre à fournir à la classe Autoloader est le chemin absolu du répertoire hôte de vos NAMESPACES. NB : Si vous utilisez un chemin relatif, le système de chargement automatique de classes ne sera pas en mesure de charger vos classes. Dans le second paramètre, vous devez fournir à la classe Autoloader le code 111. Ce code amorce le système de chargement automatique de vos classes. Si vous désirez tester la première opération prise ne compte par le composant, décommentez l'exemple 1 dans le fichier index.

2 - Le code 111 vous permet aussi d'amorçer un système de chargement de classes sauf que cette fois-ci les classes ne sont pas dans des NAMESPACES. C'est un système que j'utilise moi-même pour mieux organiser mes classes. J'ai jugé utile de partager ce procéder d'organisation avec le reste des développeurs web. COMMENT JE PROCEDE ?
Je commence d'abord par ranger mes classes par catégorie. Je range par exemple toutes mes classes qui contiennent mon système de sécurité dans un dossier que je nomme Class_Security. Puis je fais pareil pour tout le reste du système. 
Ensuite, il ne faudrait pas oublier la partie que je vais mentionner tout à l'heure, elle est essentielle au bon fonctionnement du système de chargement automatique de vos classes. Pour que le système puisse charger efficacement vos classes, vous devez ajouter une deuxième extension aux noms de vos classes. Exemple : [Security.secure.php] A quoi ça sert ? Réponse : la deuxième extension ajoutée aux noms de vos classes permettra au composant [Atebulawu] de charger uniquement les classes dont vous avez besoin sur une partie de vos codes sources. Une autre précision, vous devez vous assurer à ce que le nom de votre deuxième extension ait un nombre de caractères différent des classes des autres parties de votre site. Je prend un exemple : si la deuxième extension de toutes les classes qui contiennent mon système de sécurité est (ctrl) alors je devrais m'assurer que la deuxième extension des classes qui contiennent mon système de newsLetter ait un nombre de caractères supérieur ou inférieur à 4. Pourquoi c'est si important ? Si la deuxième extension est la même sur tous les noms des classes de votre site web, lorsque vous ferez appel au système de chargement automatique de vos classes sur une partie de votre code source, le système chargera toutes vos classes en mémoire y compris les classes dont vous n'avez pas besoin dans une partie spécifique de votre programme. Voilà tout l'intérêt de sélectionner uniquement les classes dont vous avez besoin. Ce composant a été préconfiguré pour effectuer cette tâche. Il prend également en compte les dépendances lors du chargement automatique de plusieurs classes dans la mémoire du système. NB : Lorsqu'une ou plusieurs de vos classes font recours à d'autres classes pour fonctionner correctement, il est recommandé d'organiser vos dossiers afin que le système de chargement automatique de classes puisse charger en premier les dépendances avant de charger toutes les classes qui font recours à des dépendances pour fonctionner correctement ; sinon le système pourra retourner une erreur si les dépendances sont chargées après. J'ai spécifié plusieurs exemples prenant en compte l'héritage en PHP. Faites des tests pour mieux comprendre le fonctionnement du composant. Pour cela décommentez l'exemple 2. 

3 - Le composant vous permet également de récupérer un fichier spécifique dans un répertoire de votre site sans mentionner ni le chemin [ absolu | relatif ] du fichier, ni le nom du fichier lui-même. Cela peut-être utile lorsque vous manipulez des fichiers sensibles voire des fichiers de configuration. Si vous désirez tester le composant, décommentez l'exemple 3.


4 - Enfin, la dernière opération prise en compte par le composant. Le composant vous permet cette fois-ci de récupérer plusieurs fichiers à partir de leurs extensions. J'ai préconfiguré un ensemble d'extension supporté par le système. Vous pouvez modifier le tableau à partir de la classe Usof_Ban_Djamumodien. Pour tester la dernière opération prise en compte par le composant, décommentez l'exemple 4. NB : Lorsque vous souhaitez utiliser ce composant pour récupérer un ou plusieurs fichiers à partir de leurs extensions dans votre(vos) projet(s) ou dans votre site, vous devrez effecter une mise à niveau de la méthode qui effectue l'opération. 1 - rendez-vous au niveau de la classe abstraite Usof_Ban_Djamumodien 2 - cherchez la méthode dénommée utebulom_wanimagne 3 - remplacez basename($file) par $file. 


Vous pouvez l'intégrer dans vos projets en cours ou futurs, dans votre site web et partout où vous aurez besoin de charger automatiquement une ou plusieurs classes ou bien de récupérer un ou plusieurs fichiers. 

Usage : récupérer le dossier System et le dossier README et aussi le fichier Init.php . Pour le reste faîtes comme dans les exemples mentionnés dans le fichier index.php. A vos claviers les geek !

