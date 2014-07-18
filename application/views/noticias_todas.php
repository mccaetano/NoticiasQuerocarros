<div style="height: 10px"></div>        
<div class="noticia_map"><a href="http://www.querocarros.com">home</a>/<a href="<?php echo base_url();?>noticias">noticias</a>/Todas as notícias</div>
<div style="height: 10px"></div>
<h1><img align="left" alt="News" src="<?php echo base_url();?>assets/image/News.png">Notícias</h1>
<div id="page1">
 <?php
$iteration = 1;
for ($i=0; $i<count($noticias); $i++) {
?>

    <div style="border: 1px solid #dcdcdc;height: 130px; width: 100%; margin: 2px;">
        <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[$i]->cd_noticia ?>">
        <div style="padding: 5px; float: left; width: 120px; height: 120px">
            <img src="<?php echo base_url()."imagem/load/".  urlencode(base64_encode($noticias[$i]->st_imagem_1));?>" width="120" height="120"/>
        </div>
        <div style="padding: 5px; float: left; width: 720px; height: 120px">
            <h3><?php echo mb_convert_encoding($noticias[$i]->st_noticia, "ISO-8859-1", "auto"); ?></h3>
            <div><?php echo $noticias[$i]->dt_noticia?>&nbsp;
                <?php echo $noticias[$i]->st_autor ?>
            </div>
            <div>
                <?php echo substr(mb_convert_encoding((string)$noticias[$i]->st_descricao, "iso-8859-1", "auto"), 0, 256); ?>...
            </div>
        </div>
        </a>
        <div style="text-align: right; color: #dcdcdc; font-size: small"><a href="<?php echo base_url()."link/redirect/".urlencode(base64_encode($noticias[$i]->st_link)); ?>"><?php echo $noticias[$i]->st_fonte == null ? "Fonte" : iconv("utf-8", "iso-8859-1", $noticias[$i]->st_fonte); ?></a>
        </div>
    </div>
    <div style="clear: both"></div>

<?php
    if ($i > 20) {
        $iteration++;
    }
}
?>
</div>