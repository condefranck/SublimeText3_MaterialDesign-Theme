<?php $this->set('title_for_layout', "Editer {genre|l} {name}"); ?>
<?php $this->set('add', array('action' => 'edit')); ?>

<section class="panel span12">

    <header class="panel-heading">
        Editer
    </header>
    <div class="panel-body">
        <?= $this->Form->create('{model}', array('type' => 'file')); ?>
            <?= $this->Form->input('id'); ?>
            <?= $this->Form->input('name', array('label' => "Titre")); ?>
        <?= $this->Form->end('Sauvegarder'); ?>
    </div>
</section>