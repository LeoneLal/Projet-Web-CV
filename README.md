# Projet Web CV
Mon projet portfolio est un site OnePage


# Projet

Mon site est un portfolio en one page avec une page d'administration 

## Présentation du projet
Ce projet consiste à créer un portfolio administré avec une base de donnée hébergé sur un serveur PHP

### Fonctionnement du site

Mon site est un site one page on scroll donc pour se déplacer. Le site est divisé en plusieurs sections qui se suivent 

 - Accueil
 - Mes compétences 
 - Mes expériences
 - Mes diplômes
 - Mes projets 
 - Mon formulaire de contact 

### Fonctionnement de l'administration

La partie administration est divisée en 2 partie. Une pour la lecture des messages du formulaire de contact et une pour la modification du site. La personne doit remplir entièrement les formulaires pour que ceux-ci soit envoyés en base de donnée

### Langages utilisés
HTML/CSS,  PHP, SQL 
### Organisation du dossier
Sur le dossier sont présents le code PHP de chaques pages, le CSS du site ainsi que la base de données en SQL dans un dossier présent dans le git nous avons aussi toutes les images du site.

## Utiliser le GIT
Pour cloner le projet il faut faire :
`git clone https://github.com/LeoneLal/Projet-Web-CV.git`

Ensuite il faut installer un serveur web pour exécuter le PHP. 
Pour cela on peut installer un XAMPP, un WAMP ou un LAMP sur son ordinateur.

Ensuite pour utiliser la base de données il faut installer PostgreSQL à partir de leur site officiel. Ensuite il faudra :
1. Se connecter au serveur PGSQL avec  **pgAdmin** .

2. Créer une base de données vierge (**clic droit**,  **Create**,  **Database**) sauf si elle existe déjà.

3. Faire un  **clic droit**  sur la base de données,  **Restore**.

4. A l’onglet General, dans le champ Filename,  **charger le fichier**  depuis le disque du serveur local ou un partage du réseau.

Si le fichier n’apparait pas dans la liste, modifier le  **Format**  de fichiers recherché en bas à droite.

5. Cliquer sur  **Restore**  pour importer la base. Un message « **Successfully completed** » indique que l’opération s’est bien déroulée.


Ainsi la base de données est mise en place et les fichiers sont utilisables.


