<?php
/**
 * @var \App\View\AppView $this
 *  @var \App\Model\Entity\User $user
  */
?>


 <div class="users index large-9 medium-8 columns content">
     
   <p> Lauren Pérez Lopez</br>
	420-4A4 MO Web et Bases de données.</br>
	Hiver 2018, Collège Montmorency</br
	</p>
       
       <p> <a title=" lien gitHub " href="https://github.com/laup1/LaurenPerez_TP1">
               lien vers github </a></p>  
               
               
               <p> .L'intérêt du prototype d'application web :</br>
                   Le but de cette prototype est une application web qui permet de gérer des entreprises de marketing (gerer les factures, les agences, etc)</br>
                   L'objectif est la réalisation d'une application web qui reponds aux  fonctionnements demandeés par le professeur et le but final est un application fonctionnel qui respecté et implementé les fonctionnalités demandés, donc qui permet de gérer les agences. Cella veut dire gérer les factures, les images de la agence, savoir si les clients ont payée, etc. .</br>
  
               </p>
             
               <p> fonctionnement du démarrage de session et du changement de mot de passe</br>                
                   demarrage de session api et captcha et  listes liées et du modèle "CRUD" monopage </br>
                   j'ai tout code mais je n'ai pas reussi â le faire marcher.</br>
                   le demarage session api et le monopage sont dans monopage  dans la barre de menu.</br>
                   vue que je n'ai pas reussi la connection dans le monopage j'ai fait aussi le captcha dans le login normal.
                   </br> les listes dynamiques sont dans la barre de menu mais ils donnent l'erreur: Error: [$controller:ctrlreg] The controller with the name 'CategoriesController' is not registered. mais j'ai tout mit comme dans l'example.</br>
                   Le fonctionnement du cliquer-glisser pour ajouter une image à l'application est dans la barre de menu option Drop files 
                   
               </p>
                           
          
               
         
               <h3> TP2</h3>
               <p> Listes dépendants: lien dans la barre de menu vers l'ajout des agencies. listes disponibles aussi dans la modification d'un agence</br>
                   Autocomplete: lien dans la barre de menu pour chercher des departements</br>
                   monopage: lien dans la barre de menu pour la table status</br>
                   Affichage sous forme pdf pour les agencies(index)<br/>
                   affichage admin pour les status dans la barre de menu</br>
                   menu bootstrap ne marche pas je n'ai pas reussi à les deboguer, je pense c'est un erreur avec le css ou js le code est dans le template view et aussi dans
                   Layout/Default(test pour deboguer)
                   J'ai fait des test unitaires mais j'ai eu des problemes avec phpunit mais j'ai quand meme reussi à faire quelques uns avec la page de coverage qui est dans le webroot. Voici le lien.
                 
                   
               </p>
               
                <p>login: permet de se connecter pour avoir accès au fonctionalités du site, en tant qu'agencie ou admin</p>
        <p> Agencie: on peut voir ce qui est visible au visiteurs sans se conecter(factures, agencies, images, codes) et ajouter des factures, televerser images, consulter et modifier son information. une agence est liée a un utilisateur, une image, et plusieurs factures</p>
        <p> facture: une facture est liée a une agence, a une code et a une status</p>
                       
        
        <p>
            base de données multilingue pour table Invoice et status </br>
             envoi d'email de verification: j'ai fait le controleur email et les routes mais j'ai l'erreur: Could not send email: mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set()
        </p>
        <p>
            menu à gauche change selon le type d'utilisateur.
            </br>
            menu en haut change de login et nouveau utilisateur à logout
            </br>
            validation email, champs vides et elements uniques pour le status
        </p>
        
        
        
        <?php echo $this->Html->image('Files/' . 'bd.png', [
                                "alt" => 'bd actuel',  ]);?>
        
      <?php echo $this->Html->image('Files/' . 'bd.png', [
                                "alt" => 'bd actuel',  ]);?>
        
        
   
	
	<p> <a title=" diagramme original " href="http://www.databaseanswers.org/data_models/advertising_agencies/index.html">
                Diagramme original </a></p>  
     
     
 </div>