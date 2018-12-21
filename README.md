# ArchitectureN-tiers_Project
Description

----------------

eventDBsql
		|Script de la base de donnees 
utilisee

login.html
	| il s'agit de la page d'authentification pour admin en utilisant 
LDAP
index.php
		| Page administrateur pour la gestion des evenements

dashboard.php
		| Page client pour afficher les evenements et s'inscrire dans un parmi la liste affiche
	

Contraints : 	l'inscription avec un e-mail unique dans un evenement donne 
ListEvent.php
	
		Afficher pour chaque client (E-mail) tous les evenements dont il est inscrit.

		Generer un JSON 



Repertoires

Action
			
		Permet de gerer les actions utilisateur (insertion, modification,suppression) ainsi la verfication des connexion
				
			
		/admin
			
		/client

Repertoire
Assets
		
		/CSS
			
		/JS
				
			/scripts.js
					
				script pour charger les donnees
					
				controler les actions
				
			/cliScirpts.js
					
				gestion de la carte (Map) : afficher l 'addresse de l'avenement sur la carte
	
			/cliScriptData.js
					
				charger les donnes pour un client
					
				controller les actions
