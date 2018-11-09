<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Subcategories",
    "action" => "getByCategory",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Agencies/add', ['block' => 'scriptBottom']);
?>



<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>

<div class="agencies form large-9 medium-8 columns content">
    <?= $this->Form->create($agency) ?>
    <fieldset>
        <legend><?= __('Add Agency') ?></legend>
        <?php
            echo $this->Form->control('agencie_details');
            echo $this->Form->hidden('user_id', ['value' => $user['id']]);
                 echo $this->Form->control('Category_id', ['options' => $categories]);
        echo $this->Form->control('subcategory_id', ['options' => $subcategories]);
            echo $this->Form->control('code_id', ['options' => $codes]);
            echo $this->Form->control('files._ids', ['options' => $files]);
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
