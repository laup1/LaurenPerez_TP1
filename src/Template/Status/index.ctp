<?php
$urlToRestApi = $this->Url->build('/api/status', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Status/index', ['block' => 'scriptBottom']);
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default cocktails-content">
            <div class="panel-heading">Status<a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Status</h2>
                <form class="form" id="cocktailAddForm" enctype='application/json'>
                  
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="statusAction('add')">Add Status</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add Cocktail" -->
                </form>
            </div>
            
            
             <div class="panel panel-default cocktails-content">
           
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Edit Status</h2>
                <form class="form" id="cocktailAddForm" enctype='application/json'>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="statusAction('edit')">Editer Status</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add Cocktail" -->
                </form>
            </div>
            
          
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                      
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="cocktailData">
                    <?php
                    $count = 0;
                    foreach ($status as $statu): $count++;
                        ?>
                        <tr>
                            <td><?php echo '#' . $count; ?></td>
                            <td><?php echo $statu['description_Status']; ?></td>
                           
                            <td>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editCocktail('<?php echo $statu['id']; ?>')"></a>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? statusAction('delete', '<?php echo $statu['id']; ?>') : false;"></a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                    <tr><td colspan="5">No status found......</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

