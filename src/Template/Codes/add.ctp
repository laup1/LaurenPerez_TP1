<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Code $code
 */
?>

<div class="codes form large-9 medium-8 columns content">
    <?= $this->Form->create($code) ?>
    <fieldset>
        <legend><?= __('Add Code') ?></legend>
        <?php
            echo $this->Form->control('code_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
