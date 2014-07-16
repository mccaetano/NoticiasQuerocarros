<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>    
<div>
    <div>
        <div style="float: left; width: 570px; padding: 10px; height: 350px;">
            <figure id="slide">
                <img class="ativo" alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[0]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[0]->st_imagem_1)) ?>" width="620" height="310"/>
                <img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[1]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[1]->st_imagem_1)) ?>" width="550" height="300"/>
                <img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[2]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[2]->st_imagem_1)) ?>" width="550" height="300"/>
                <img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[3]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[3]->st_imagem_1)) ?>" width="550" height="300"/>
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
        <div style="alignment-adjust: middle; width: 80px; padding: 10px; height: 350px;">
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[0]->cd_noticia?>"><img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[0]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[0]->st_imagem_1)) ?>" width="48" height="48"/></a><br/>
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[1]->cd_noticia?>"><img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[1]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[1]->st_imagem_1)) ?>" width="48" height="48"/></a><br/>
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[2]->cd_noticia?>"><img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[2]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[2]->st_imagem_1)) ?>" width="48" height="48"/></a><br/>
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[3]->cd_noticia?>"><img alt="<?php echo iconv("utf-8", "iso-8859-1", $noticias[3]->st_noticia); ?>" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[3]->st_imagem_1)) ?>" width="48" height="48"/></a><br/>
        </div>
    </div>
    <div class="limpa"></div>
    <div>
        <?php for ($i=4; $i<=7;$i++) {?>
        <div class="noticia_quadro">
            <a href="<?php echo base_url(); ?>noticias/detalhe/<?php echo $noticias[$i]->cd_noticia?>">
            <img alt="No Image" src="<?php echo base_url(); ?>imagem/load/<?php echo urlencode(base64_encode($noticias[$i]->st_imagem_1)) ?>" width="420" height="220"/>
            <h2><?php echo iconv("utf-8", "iso-8859-1", $noticias[$i]->st_noticia); ?></h2>
            <div>
                <?php echo iconv('utf-8', 'iso-8859-1', $noticias[$i]->st_subtitulo);?>&nbsp;|&nbsp;
                <?php echo $noticias[$i]->dt_noticia;?>
            </div>
            <div>
                <?php echo substr(mb_convert_encoding((string)$noticias[$i]->st_descricao, "iso-8859-1", "auto"), 0, 512); ?>...
            </div>
            <div>
                <?php echo iconv('utf-8', 'iso-8859-1', $noticias[$i]->st_autor);?> | 
                <a href="<?php echo iconv('utf-8', 'iso-8859-1', $noticias[$i]->st_link);?>"><?php echo iconv("utf-8", "iso-8859-1", $noticias[$i]->st_fonte); ?></a>
            </div>
            </a>
        </div>
        <?php } ?>
        <div class="limpa"></div>
    </div>
</div>
<div>
    <a href="<?php echo base_url(); ?>noticias/todas">Todas as  Notícias...</a>
</div>
