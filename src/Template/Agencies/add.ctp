<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Categories",
    "action" => "getCategories",
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

<div class="agencies form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="CategoriesController">
    <?= $this->Form->create($agency) ?>
    <fieldset>
        <legend><?= __('Add Agency') ?></legend>
         <div>
            Categories: 
            <select name="Category_id"
                    id="category-id" 
                    ng-model="category" 
                    ng-options="category.name for category in categories track by category.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            Subcategories: 
            <select name="subcategory_id"
                    id="subcategory-id" 
                    ng-disabled="!category" 
                    ng-model="subcategory"
                    ng-options="subcategory.name for subcategory in category.subcategories track by subcategory.id"
                    >
                <option value=''>Select</option>
            </select>
         
        </div>
        <?php
        
            echo $this->Form->control('agencie_details');
            echo $this->Form->hidden('user_id', ['value' => $user['id']]);
                 //echo $this->Form->control('Category_id', ['options' => $categories]);
        //echo $this->Form->control('subcategory_id', ['options' => $subcategories]);
            echo $this->Form->control('code_id', ['options' => $codes]);
            echo $this->Form->control('files._ids', ['options' => $files]);
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
