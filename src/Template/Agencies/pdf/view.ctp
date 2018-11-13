<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($agency->agencie_details) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($agency->agencie_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($agency->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($agency->modified) ?></td>
        </tr>
    </table>
   
    <div class="related">
        <h4><?= __('Related files') ?></h4>
        <?php if (!empty($agency->files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('name') ?></th>
                <th scope="col"><?= __('path') ?></th>
                <th scope="col"><?= __('status') ?></th>
                
            </tr>
            <?php foreach ($agency->files as $files): ?>
            <tr>
                  <td><?= h($files->name) ?></td>
                <td><?= h($files->path) ?></td>
                <td><?= h($files->status) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
