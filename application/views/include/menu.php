<script type="text/javascript" src="http://www.querocarros.com/js/jquery-latest.pack.js"></script>


<script type="text/javascript">

//jkmegamenu.definemenu("anchorid", "menuid", "mouseover|click")
jkmegamenu.definemenu("megaanchor", "megamenu1", "mouseover");

</script>

<script>

$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			

	$(window).resize(function () {
	 
 		var box = $('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	 
	});
	
});

</script>

<script type="text/javascript">
<!--
$(document).ready(function($){
	$('#mega-menu-tut').dcMegaMenu({
		rowItems: '6',
		speed: 'fast'
	});
});

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p===n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x===MM_findObj(a[i]))!==null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

    <div class="dcjq-mega-menu">
        <ul id="mega-menu-tut" class="menu">
            <li><a href="http://www.querocarros.com/default.asp" >Home</a></li>
            <li><a href="http://www.querocarros.com/ache/veiculos-novos-usados/" >Comprar</a>
            <li><a href="http://www.querocarros.com/veiculos-vender-carros-motos/" >Venda seu veículo</a>
            <li><a href="http://www.querocarros.com/revendas/lista-revendas-veiculos-novos-usados/" >Revendas</a>
                <ul class="sub-menu" style="width:320px; ">
                    <li style="width:320px; "><a href="http://www.querocarros.com/cadastra_revenda/revendas-cadastre-sua-revenda-veiculos">Cadastre sua revenda de veículos grátis</a>
                </ul>
            <li><a href="http://www.querocarros.com/servicos.asp"  style="background-position: 100% -40px; font-weight: bold;color: #000; text-shadow: none;" >Serviços</a>
                <ul class="sub-menu" style="width:350px; ">
                    <li style="width:350px; "><a href="http://alertas.querocarros.com/usuario/novo/" title="Crie um alerta e receba o carro que está procurando em seu e-mail">Receba ofertas de carros em seu e-mail, grátis!</a>
                    <li style="width:320px; "><a href="http://www.querocarros.com/veiculos-vender-carros-motos/" title="Anuncie seu veículo grátis">Anuncie seu veículo grátis</a>
                    <li style="width:320px; "><a href="http://www.querocarros.com/alterar.asp">Alterar ou remover um anúncio</a>
                    <li style="width:320px; "><a href="http://www.querocarros.com/fipe/avalie-tabela-fipe/" title="tabela FIPE">Tabela FIPE</a>
                    <li style="width:320px; "><a href="http://www.querocarros.com/cadastra_revenda/revendas-cadastre-sua-revenda-veiculos" title="Cadastre sua revenda de veículos grátis">Cadastre sua revenda de veículos grátis</a>
                    <li style="width:320px; "><a href="http://www.querocarros.com/seguradoras.asp">Seguradoras</a>
                    <li><a href="http://www.querocarros.com/detrans.asp">Detrans do Brasil</a>
                    <li><a href="http://www.querocarros.com/rodovias.asp">Sites de rodovias</a>
                    <li><a href="http://www.querocarros.com/links.asp">Links utéis</a>
                    <li><a href="http://www.querocarros.com/contato.asp">Fale conosco</a>
                    <li style="width:320px; "><a href="http://www.querocarros.com/pedido.asp">Pedido especial</a>
                    <li style="width:320px; "><a href="http://www.querocarros.com/social.asp">Espalhe o QueroCarros.com nas redes socias</a>
                </ul>
            <li><a href="http://www.twitter.com/querocarros/" target="_blank">Twitter</a></li>
            <li><a href="http://www.querocarros.com/parceiros.asp" >Parceiros</a></li>

            </li>
        </ul>
    </div>
