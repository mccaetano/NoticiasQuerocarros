<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>    
<div>
    <div>
        <figure id="slide">
            <img class="ativo" alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[0]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[0]->st_imagem_1)) ?>" width="620" height="310"/>
            <img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[1]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[1]->st_imagem_1)) ?>" width="620" height="310"/>
            <img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[2]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[2]->st_imagem_1)) ?>" width="620" height="310"/>
            <img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[3]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[3]->st_imagem_1)) ?>" width="620" height="310"/>
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
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[4]->st_imagem_1)) ?>" width="420" height="220"/>
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[4]->st_noticia); ?></h2>
            <div><?php echo iconv("utf-8", "iso-8859-1", $noticias[4]->st_fonte); ?></div>
            <p><?php echo substr(mb_convert_encoding((string)$noticias[4]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
        </div>
        <div class="noticia_quadro">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[5]->st_imagem_1)) ?>" width="420" height="220"/>
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[5]->st_noticia); ?></h2>
            <p><?php echo substr(mb_convert_encoding((string) $noticias[5]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
        </div>
        <div class="noticia_quadro">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[6]->st_imagem_1)) ?>" width="420" height="220"/>            
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[6]->st_noticia); ?></h2>
            <p><?php echo substr(mb_convert_encoding((string)$noticias[6]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
        </div>
        <div class="noticia_quadro">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[7]->st_imagem_1)) ?>" width="420" height="220"/>
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[7]->st_noticia); ?></h2>            
            <p><?php echo substr(mb_convert_encoding((string)$noticias[7]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...</p>
        </div>
        <div class="limpa"></div>
    </div>
</div>
<div>
    <a href="<?php echo base_url(); ?>noticias/todas">Todas as  Notícias...</a>
</div>
