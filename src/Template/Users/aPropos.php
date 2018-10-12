<?php
/**
 * @var \App\View\AppView $this
  */
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 <div class="users index large-9 medium-8 columns content">
     
   <p> Lauren Pérez Lopez</br>
	420-4A4 MO Web et Bases de données.</br>
	Hiver 2018, Collège Montmorency</br>
	</p>
        
        
        <p>
            base de données multilingue pour table Invoice et status </br>
             envoi d'email de verification: j'ai fait le controleur email et les routes mais j'ai l'erreur: Could not send email: mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set()
        </p>
        
      <?php echo $this->Html->image('Files/' . 'bd.png', [
                                "alt" => 'bd actuel',  ]);?>
	
	<p> <a title=" diagramme original " href="http://www.databaseanswers.org/data_models/advertising_agencies/index.html">
                Diagramme original </a></p>  
     
     
 </div>
 