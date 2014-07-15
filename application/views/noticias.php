<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>    
<div>
    <div>
        <figure id="slide">
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[0]->cd_noticia?>"><img class="ativo" alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[0]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[0]->st_imagem_1)) ?>" width="620" height="310"/></a>
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[1]->cd_noticia?>"><img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[1]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[1]->st_imagem_1)) ?>" width="620" height="310"/></a>
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[2]->cd_noticia?>"><img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[2]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[2]->st_imagem_1)) ?>" width="620" height="310"/></a>
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[3]->cd_noticia?>"><img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[3]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[3]->st_imagem_1)) ?>" width="620" height="310"/></a>
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
    <div>
        <div class="noticia_quadro">
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[4]->cd_noticia?>">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[4]->st_imagem_1)) ?>" width="420" height="220"/>
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[4]->st_noticia); ?></h2>
            <p>
                <?php echo iconv('utf-8', 'iso-8859-1', $noticias[4]->st_subtitulo);?>&nbsp;|&nbsp;
                <?php echo $noticias[4]->dt_noticia;?>
            </p>
            <p><?php echo substr(mb_convert_encoding((string)$noticias[4]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
            <div>
                <?php echo iconv('utf-8', 'iso-8859-1', $noticias[4]->st_autor);?> | 
                <a href="<?php echo iconv('utf-8', 'iso-8859-1', $noticias[4]->st_link);?>"><?php echo iconv("utf-8", "iso-8859-1", $noticias[4]->st_fonte); ?></a>
            </div>
            </a>
        </div>
        <div class="noticia_quadro">
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[5]->cd_noticia?>">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[5]->st_imagem_1)) ?>" width="420" height="220"/>
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[5]->st_noticia); ?></h2>
            <p><?php echo substr(mb_convert_encoding((string) $noticias[5]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
            </a>
        </div>
        <div class="noticia_quadro">
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[6]->cd_noticia?>">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[6]->st_imagem_1)) ?>" width="420" height="220"/>            
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[6]->st_noticia); ?></h2>
            <p><?php echo substr(mb_convert_encoding((string)$noticias[6]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
            </a>
        </div>
        <div class="noticia_quadro">
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[7]->cd_noticia?>">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[7]->st_imagem_1)) ?>" width="420" height="220"/>
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[7]->st_noticia); ?></h2>            
            <p><?php echo substr(mb_convert_encoding((string)$noticias[7]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
            </a>
        </div>
        <div class="limpa"></div>
    </div>
</div>
<div>
    <a href="<?php echo base_url(); ?>noticias/todas">Todas as  Notícias...</a>
</div>
