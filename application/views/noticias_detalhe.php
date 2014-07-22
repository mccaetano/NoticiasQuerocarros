
<div style="border: 1px solid #E2E4E6">
    <div style="height: 10px"></div>        
    <div class="noticia_map"><a href="http://www.querocarros.com">home</a>/<a href="<?php echo base_url();?>noticias">noticias</a>/<?php echo iconv("utf-8", "iso-8859-1", $noticia->st_noticia); ?></div>
    <div style="height: 10px"></div>
    <h1><?php echo iconv("utf-8", "iso-8859-1", $noticia->st_noticia); ?></h1>
    <div><?php echo iconv("utf-8", "iso-8859-1", $noticia->st_autor); ?>
        <div><?php echo $noticia->dt_noticia; ?>|<a href="<?php echo base_url()."link/redirect/".urlencode(base64_encode($noticia->st_link)); ?>"><?php echo $noticia->st_fonte == null ? "Fonte" : iconv("utf-8", "iso-8859-1", $noticia->st_fonte); ?></a>
    </div>
        <div>
        <div class="limpa"></div>
        <div style="margin: 0 auto; width: 690px">
            <div style="float: left; width: 570px; padding: 10px; height: 350px;">
                <figure id="slide">
                    <?php if ($noticia->st_imagem_1 != null) { ?>
                    <img class="ativo" alt="Imagem 1" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_1)) ?>" width="620" height="310"/>
                    <?php } ?>
                    <?php if ($noticia->st_imagem_2 != null) { ?>
                    <img alt="Imagem 2" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_2)) ?>" width="550" height="300"/>
                    <?php } ?>
                    <?php if ($noticia->st_imagem_3 != null) { ?>                    
                    <img alt="Imagem 3" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_3)) ?>" width="550" height="300"/>
                    <?php } ?>
                    <?php if ($noticia->st_imagem_4 != null) { ?>
                    <img alt="Imagem 4" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_4)) ?>" width="550" height="300"/>
                    <?php } ?>                    
                </figure>
                <script lang="text/javascript">
                    $(document).ready(function(){
                        $("#slide img:eq(0)").addClass("ativo").show();
                    });
                    var texto = $(".ativo").attr("alt");
                    $("#slide").prepend("<p>"+texto+"</p>");
                    setInterval(slide,3000);
                    function slide(){ 
                        if($(".ativo").next().size()){							
                            $(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
                        }else{
                            $(".ativo").fadeOut().removeClass("ativo");
                            $("#slide img:eq(0)").fadeIn().addClass("ativo");
                        }
                        var texto = $(".ativo").attr("alt");
                        $("#slide p").hide().html(texto).delay(500).fadeIn();
                    }
                </script>
            </div>
            <div style="float: left; width: 80px; padding: 10px; height: 350px;">
                <?php if ($noticia->st_imagem_1 != null) { ?>
                <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticia->cd_noticia;?>"><img title="<?php echo iconv("utf-8", "iso-8859-1", $noticia->st_noticia); ?>" alt="Imagem 1" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_1)) ?>" width="48" height="48"/></a><br/>
                <?php } ?>
                <?php if ($noticia->st_imagem_2 != null) { ?>
                <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticia->cd_noticia;?>"><img title="<?php echo iconv("utf-8", "iso-8859-1", $noticia->st_noticia); ?>" alt="Imagem 2" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_2)) ?>" width="48" height="48"/></a><br/>
                <?php } ?>
                <?php if ($noticia->st_imagem_3 != null) { ?>
                <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticia->cd_noticia;?>"><img title="<?php echo iconv("utf-8", "iso-8859-1", $noticia->st_noticia); ?>" alt="Imagem 3" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_3)) ?>" width="48" height="48"/></a><br/>
                <?php } ?>
                <?php if ($noticia->st_imagem_4 != null) { ?>
                <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticia->cd_noticia;?>"><img title="<?php echo iconv("utf-8", "iso-8859-1", $noticia->st_noticia); ?>" alt="Imagem 4" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticia->st_imagem_4)) ?>" width="48" height="48"/></a><br/>
                <?php } ?>
            </div>
        </div>        
        <div class="limpa"></div>
    </div>
    <p class="fonte_media"><?php echo mb_convert_encoding((string)$noticia->st_descricao, "iso-8859-1", "auto"); ?></p>    
</div>
<div>
    
</div>