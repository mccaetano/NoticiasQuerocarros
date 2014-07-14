<div>
    <h1><?php echo $noticia->st_noticia; ?></h1>
    <div><?php echo $noticia->st_autor; ?>
    <div><?php echo $noticia->dt_noticia; ?></div>
    <div><img src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_1)); ?>"></div>
    <p><?php echo $noticia->st_descricao; ?></p>
    <a href="<?php echo $noticia->st_link; ?>">Fonte</a>
</div>
<div>
    
</div>