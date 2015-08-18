<?php $this->set('title_for_layout', "{models}"); ?>

<section class="panel span12">

    <header class="panel-heading">
        {models}
    </header>

    <table class="table table-striped m-b-none text-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (${models|l} as $k => ${model|l}): ?>
                <tr>
                    <td><?= ${model|l}['{model}']['id']; ?></td>
                    <td><?= ${model|l}['{model}']['name']; ?></td>
                    <td>
                        <a href="<?= $this->Html->url(array('action' => 'edit', ${model|l}['{model}']['id'])); ?>" class="btn btn-default">
                            <i class="icon-edit"></i>
                        </a>
                        <a href="<?= $this->Html->url(array('action' => 'delete', ${model|l}['{model}']['id'])); ?>" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer ?')">
                            <i class="icon-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <footer class="panel-footer">
        <div class="row">
            <div class="col-sm-4 hidden-xs">&nbsp;</div>
            <div class="col-sm-4 text-center">
                <?= $this->Paginator->counter('{models|l} {:start} à {:end} sur {:count}'); ?>
            </div>
            <div class="col-sm-4 text-right">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                <?php
                    echo $this->Paginator->prev(__('Précédent'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                    echo $this->Paginator->next(__('Suivant'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                ?>
                </ul>
            </div>
        </div>
    </footer>

</section>