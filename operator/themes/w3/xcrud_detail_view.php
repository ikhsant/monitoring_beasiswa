<?php echo $this->render_table_name($mode); ?>
<div class="xcrud-top-actions btn-group">
    <?php 
    echo $this->render_button('save_return','save','list','w3-button w3-green','','create,edit');
    echo $this->render_button('save_new','save','create','w3-button w3-teal','','create,edit');
    echo $this->render_button('save_edit','save','edit','w3-button w3-dark-grey','','create,edit');
    echo $this->render_button('return','list','','w3-button w3-red'); ?>
</div>
<div class="xcrud-view">
<?php echo $mode == 'view' ? $this->render_fields_list($mode,array('tag'=>'table','class'=>'w3-table w3-striped w3-card')) : $this->render_fields_list($mode,'div','div','label','div'); ?>
</div>
<div class="xcrud-nav">
    <?php echo $this->render_benchmark(); ?>
</div>
