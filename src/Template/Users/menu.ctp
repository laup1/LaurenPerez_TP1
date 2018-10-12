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
	
	<p> <a title=" diagramme original " href="http://www.databaseanswers.org/data_models/advertising_agencies/index.html">
                Diagramme original </a></p>  
     
     
 </div>