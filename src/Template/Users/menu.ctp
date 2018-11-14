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
        <p>login: permet de se connecter pour avoir accès au fonctionalités du site, en tant qu'agencie ou admin</p>
        <p> Agencie: on peut voir ce qui est visible au visiteurs sans se conecter(factures, agencies, images, codes) et ajouter des factures, televerser images, consulter et modifier son information. une agence est liée a un utilisateur, une image, et plusieurs factures</p>
        <p> facture: une facture est liée a une agence, a une code et a une status</p>
       <p> <a title=" lien gitHub " href="https://github.com/laup1/LaurenPerez_TP1">
               lien vers github </a></p>                 
               
             
               
                           
          
               
         
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