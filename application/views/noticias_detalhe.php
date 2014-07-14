<div>
    <h1><?php echo $noticia->st_noticia; ?></h1>
    <div><?php echo $noticia->st_autor; ?>
    <div><?php echo date_format($noticia->dt_noticia, "d/m/Y"); ?></div>
    <div><img src="<?php echo base_url(); ?>imagem/load/<?php base64_encode(urlencode($noticia->st_1magem1)) ?> "></div>
    <p><?php echo $noticia->st_descricao; ?></p>
    <a href="<?php echo $noticia->st_link; ?>">Fonte</a>
</div>
<div>
    
</div>