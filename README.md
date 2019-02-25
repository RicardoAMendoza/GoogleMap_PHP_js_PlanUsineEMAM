# Approvisionnement et plan de l’usine (style Google map)

## APPLICATION WEB STYLE GOOGLE MAP

## Nom du projet : prjPlanUsineEMAM_Rm

Été-2018


## Description

Cartographie de l'atelier, permettre la commande de matériel, compléter le suivi dèune requête au requérant avec une description dans le curriel, permettre la modification dèune requête, permettre lèajout de photo ou pièce jointe.


### Ce projet développe un système de style Google maps pour l’atelier EMAM.


### Préalables

 * Frame : Embarcadero® RadPHP™ XE2 Version  4.0.0.1547 Copyright © Embarcadero Technologies, Inc. All Rights Reserved.
 * Langage de programmation : JQuery, Javascript & PHP.
 * MySQL Workbench 6.3 - base de données
 * Programming language : MySQL.
 * MVC Concepts.
 * MapZoom.js.

 
## Installation

### Télécharger et installer. 

 * Frame : Embarcadero® RadPHP™ XE2 Version  4.0.0.1547 Copyright © Embarcadero Technologies, Inc. All Rights Reserved.
 * [Installer MySQL Workbench](https://www.mysql.com/fr/products/workbench/)
 * [Télécharger MapZoom.js, (c) by Christian Effenberger. All Rights Reserved.](http://www.netzgesta.de/mapzoom/)
 
 
 ### GIF
 
 * [Capture d'écran animée](https://www.cockos.com/licecap/)

 
### Créer la base de données avec MySQL Workbench.

 * La base de données appartient à L'EMAM.
	 
	 
### Diagramme de base de données.

 * La base de données appartient à L'EMAM.
 
 
## Auteurs

* **[Andy Del Risco Manzanares](https://www.linkedin.com/in/andydelriscomanzanares/)** - *Analyste programmeur senior* 
* **[Ricardo Mendoza](https://www.linkedin.com/in/ricardo-mendoza-b8769849/)** - *Analyste Programmeur Jr* 


## Exécuter le test


### Principales barrières.


#### Dans Plan.PHP

#### Mapzoom.js : Telecharger l'img dans Mapzoom.

Upload tHe map in to Mapzoom
<img onLoad="mapzoom.add(this)/>


#### Map Tab
The <map> tag is used to define a client-side image-map. An image-map is an image with clickable areas
<map name="usine_map"></map>


#### Visualiser

href="javascript:visualiser('<?php echo $DataInv->Qry->noserie ?>')"
The href attribute specifies the link's destination, link Javascript to a function visualiser() dans javascripts/infoScript.js
* **[visualiser()](https://github.com/RicardoAMendoza/GoogleMap_PHP_js_PlanUsineEMAM/blob/master/javascripts/infoScript.js)**


### Utilization de l'application.

L'application localise l'équipement comme une carte google.

![Zoom sur la cartographie](/img/utilizationGIF.gif "View")


### Cartographie de l'atelier

Nous pouvons visualiser tout l'usine de l'EMAM.

![Cartographie de l'atelier](/img/planwebemam.jpg "View")


### Zoom de l'atelier

Avec le zoom on peut identifier chaque équipe et marcher dans l'atelier.

![Zoom sur la cartographie](/img/planzoomemam.jpg "View")


### Click sur une machine.

On click sur une machine pour appeler un modal avec tous ses informations.

![Modal avec les informations](/img/planmodalemam.jpg "View")


## Technologies utilisées :

 * Frame : Embarcadero® RadPHP™ XE2 Version  4.0.0.1547 Copyright © Embarcadero Technologies, Inc. All Rights Reserved.
 * MySQL Workbench 6.3 - base de données.
 
Front-end:
 * Bootstrap 3.3.7
 * CSS
 * HTML5
 * Javascript
 * Jquery
 * PHP
 * MySQL
 * mapzoom.js 1.4 (27-Sep-2012) (c) by Christian Effenberger. All Rights Reserved.

Back-end:
 * Javascript
 * jquery
 * PHP
 * MySQL Workbench 6.3


## Versions et gestionnaire de source 

Ce projet utilise Gitlab.com comme gestionnaire de source dans le dépôt suivant :
https://gitlab.com/AndyDelRisco/PlanUsineEMAM.git

et

https://github.com/RicardoAMendoza/GoogleMap_PHP_js_PlanUsineEMAM

Historique de versions : 
https://gitlab.com/AndyDelRisco/PlanUsineEMAM/commits/master


## Licence

Ce projet utilise les licences suivantes:
- Copyright Andy Del Risco & Ricardo Mendoza:  Licensed under the Apache License, Version 2.0 http://www.apache.org/licenses/LICENSE-2.0
- Booststrap & DataTables, the MIT License (MIT)


## Remerciements.

* [Andy Del Risco](https://www.linkedin.com/in/andydelriscomanzanares/) - MENTOR, *Technicien Informatique Cl. Principale* [École des métiers de l’aérospatiale de Montréal](http://ecole-metiers-aerospatiale.csdm.ca/)
* [Fernand Tonye](https://www.linkedin.com/in/fernand-tonye-6a46532b/) - MENTOR, *Chief d'Equipe Informatique pour les enseignants* [Institut Teccart](http://www.teccart.qc.ca/)
* [Charles Vilaisak](https://www.linkedin.com/in/cvilaisak/) - MENTOR, *Registraire à l'École nationale de cirque* [École nationale de cirque](https://www.linkedin.com/school/-cole-nationale-de-cirque/)
* [Christian Effenberger](http://www.netzgesta.de/mapzoom/)
* [École des métiers de l'aérospatiale de Montréal](http://ecole-metiers-aerospatiale.csdm.ca/)
* [Institut Teccart](http://www.teccart.qc.ca/)