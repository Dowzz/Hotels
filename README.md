# Hotels Hypnos

Voici mon projet de site de booking pour le compte du groupe Hypnos. 
Le site est fonctionnel et adapté a tout type d'écran. 

### afin de tester cette application web, rendez vous sur le lien suivant : 
https://hotelshypnos.herokuapp.com/index.php

### un compte administrateur pour le back-office est crée dans la prégénération.

## déploiement en local
### -- un script sql (hotelhypnos.sql) est disponible dans le dossier Db permettant de créer la base de données complete ainsi que quelques données test.

### -- il est également possible de la vider completement à l'aide du script sql "nettoyage_bdd.sql.

note : vous pouvez utiliser un SGBD (exemple phpmyadmin, mysqlworkbench)

## Creation admin
### pour crée un admin, il suffit d'utiliser le script Admincreate en précisant l'adresse mail 
Example : `UPDATE user set role= 'admin' where userid = 'Monadresse@mail'`

