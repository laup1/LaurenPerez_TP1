<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css(captcha_layout_stylesheet_url(), ['inline' => false]) ?>

<script src="node_modules/angularjs-captcha/dist/angularjs-captcha.min.js"></script>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
  
      
        ?>
        
          <!-- show captcha image html -->
        <?= captcha_image_html() ?>

        <!-- Captcha code user input textbox -->
        <?= $this->Form->input('CaptchaCode', [
            'label' => 'Retype the characters from the picture:',
            'maxlength' => '10',
            'id' => 'CaptchaCode'
        ]) ?>
             

    </fieldset>
    
    <?= $this->Form->button(__('Login'), ['style' => 'float: left; margin-left: 20px;']) ?>
<?= $this->Form->end() ?>
</div>
  
</div>


