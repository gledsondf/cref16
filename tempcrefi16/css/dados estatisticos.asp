﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Transparencia Coffito</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	background: #ccc;
	margin: 0;
	padding: 0;
	color: #00C;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 100%;
	line-height: 1.4;
}

/* ~~ Seletores de elementos/tag ~~ */
ul, ol, dl { /* Devido a variações entre navegadores, é recomendado zerar o padding e a margem nas listas. É possível especificar as quantidades aqui ou nos itens da lista (LI, DT, DD) que eles contêm. Lembre-se: o que você fizer aqui ficará em cascata para a lista de navegação a não ser que você escreva outro seletor mais específico. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* ao remover a margem superior, as margens podem escapar das suas containing div. A margem inferior restante vai mantê-la afastada de qualquer elemento que se segue. */
	padding-right: 15px;
	padding-left: 15px; /* adicionando o padding para os lados dos elementos dentro dos divs, ao invés dos próprios divs o livra de qualquer combinação de modelo de caixa. Um div aninhado com padding lateral também pode ser usado como método alternativo. */
}
a img { /* esse seletor remove a borda azul padrão exibida em alguns navegadores ao redor de uma imagem circundada por um link. */
	border: none;
}

/* ~~ A estilização dos links do seu site deve permanecer nesta ordem – incluindo o grupo de seletores que criam o efeito hover. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* a não ser que você estilize seus links para que pareçam extremamente únicos, é melhor utilizar links sublinhados para uma identificação visual mais rápida. */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* esse grupo de seletores dará ao navegador que estiver usando um teclado a mesma experiência hover do que uma pessoa usando um mouse. */
	text-decoration: none;
}

/* ~~ esse contêiner de largura fixa envolve os outros divs~~ */
.container {
	width: 980px;
	background: #FFF; /* o valor automático nos lados, combinado com a largura, centraliza o layout */
	height: auto;
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}

/* ~~o cabeçalho não tem uma largura definida. Ele pode ocupar toda a largura do layout. Possui um alocador de espaço de imagem que deve ser substituído pelo seu logotipo com link~~ */
.header {
	background-color: #FFF;
}

/* ~~ Essas são as colunas para o layout. ~~ 

1) O padding é posto somente na parte superior e inferior dos divs. Os elementos nesses divs têm padding nos seus lados impedindo o modelo tipo caixa. Lembre-se: ao adicionar qualquer padding lateral ou bordas para o próprio div, ele será adicionado à largura que você define para criar a largura *total*. Também é possível remover o padding no elemento dentro do div e estabelecer um segundo div dentro do primeiro, sem largura, e com o padding necessário para o seu design.

2) Como as colunas são todas flutuantes, não foi dada nenhuma margem. Se for necessário adicionar margem, evite colocá-la no lado flutuante, por exemplo, uma margem direita em um div definido para flutuar à direita. Em vez disso, muitas vezes, o padding é utilizado. Para os divs em que essa regra tem que ser quebrada, é necessário adicionar a declaração "display:inline" que irá solucionar um erro recorrente em algumas versões do Internet Explorer em que a imagem é duplicada.

3) Como as classes podem ser usadas diversas vezes em um documento e um elemento também pode ter várias classes aplicadas, foram atribuídas às colunas nomes de classe ao invés de IDs. Por exemplo, se for necessário, os divs com duas barras laterais podem ser empilhados. Se preferir, é possível alterar facilmente para os IDs desde que esteja usando-os somente uma vez em cada documento.

4) Caso prefira seu navegador à direita ao invés de à esquerda, simplesmente flutue essas colunas para a direção oposta, todas à direita ao invés de à esquerda, e elas irão processar na ordem inversa. Não há necessidade de mover os divs ao redor da fonte HTML.

*/
.sidebar1 {
	float: left;
	background: #fff;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 750px;
	float: right;
}

/* ~~ Este seletor agrupado oferece as listas dentro do espaço da área de conteúdo.~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* esse padding espelha o padding direito nos cabeçalhos e regra de parágrafo acima. O padding foi colocado na parte inferior para obter espaço entre outros elementos das listas e à esquerda para criar o recuo. Estes podem ser ajustados como desejar. */
}

/* ~~ Os estilos de lista de navegação (podem ser removidos se for escolhido o uso de um submenu criado anteriormente, como o Spry) ~~ */
ul.nav {
	list-style: none; /* isso remove o marcador de lista */
	border-top: 1px solid #666; /* isso cria a borda da parte superior para os links – todos os outros são colocados usando uma borda na parte inferior no LI */
	margin-bottom: 15px; /* isso cria o espaço entre a navegação no conteúdo abaixo */
}
ul.nav li {
	border-bottom: 1px solid #666; /* isso cria a separação do botão */
}
ul.nav a, ul.nav a:visited { /* ao agrupar estes seletores, seus links mantêm a aparência de botão mesmo após terem sido visitados. */
	padding: 5px 5px 5px 15px;
	display: block; /* isso fornece as propriedades de bloqueio de links, preenchendo todo o LI. Assim, toda a área responderá ao clique do mouse. */
	width: 180px;  /*essa largura faz com que o botão inteiro possa ser clicado no IE6. Se não for necessário estar compatível com o IE6, ele pode ser removido. Calcule a largura apropriada subtraindo o padding neste link da largura do contêiner da barra lateral. */
	text-decoration: none;
	background: #ccc;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* isso altera o fundo e a cor do texto para navegação com o mouse ou teclado. */
	color: #000;
	background-color: #FFF;
}

/* ~~ O rodapé ~~ */
.footer {
	padding: 10px 0;
	background: 999;
	position: relative;/* isso possibilita que o hasLayout do IE6 faça a limpeza corretamente. */
	clear: both; /* essa propriedade de limpeza força o contêiner a reconhecer o conteúdo das colunas e onde elas terminam. */
}

/* ~~ flutuações diversas/limpeza de classes ~~ */
.fltrt {  /* essa classe pode ser usada para flutuar um elemento à direita da página. O elemento flutuado deve preceder o elemento e ser o próximo da página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* essa classe pode ser usada para flutuar um elemento à esquerda da página. O elemento flutuado deve preceder o elemento e ser o próximo da página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* essa classe pode ser colocada em um <br /> ou em um div vazio como o elemento final que segue o último div flutuado (no #contêiner) caso o rodapé seja removido ou retirado do contêiner. */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.teste {
}
.container .sidebar1 .nav li strong a {
	color: #000;
}
.container .sidebar1 .nav li a strong {
	color: #000;
}
.container .content h3 {
	color: #000;
}
-->
</style></head>

<body>
<div class="container">
  <div class="header"><!-- end .header -->
    <div align="center">
      <p><a href="http://www.coffito.org.br/site/"><img src="images/Portal_Transp_Header.jpg" width="929" height="138" /></a></p>
    </div>
  </div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="atos.asp"><img src="images/botao1.jpg" width="180" height="48" /></a></li>
      <li><a href="concurso.asp"><img src="images/botao2.jpg" width="180" height="48" /></a></li>
      <li><a href="dados estatisticos.asp"><img src="images/botao3.jpg" width="180" height="48" /></a></li>
      <li><a href="demonstracao contabil.asp"><img src="images/botao4.jpg" width="180" height="48" /></a></li>
      <li><a href="diarias.asp"><img src="images/botao11.jpg" width="180" height="48" /></a></li>
      <li><a href="estrutura.asp"><img src="images/botao5.jpg" width="180" height="48" /></a></li>
      <li></li>
      <a href="execucao orcamentaria.asp"><img src="images/botao6.jpg" width="180" height="48" /></a>
      <li></li>
      <li></li>
      <li><strong><a href="quadro pessoal.asp"><img src="images/botao7.jpg" width="180" height="48" /></a><a href="#"></a></strong></li>
      <li><a href="licitacoes.asp"><img src="images/botao8.jpg" width="180" height="48" /></a></li>
      <li><a href="perguntas respostas.asp"><img src="images/botao9.jpg" width="180" height="48" /></a></li>
      <li></li>
      <a href="http://www.coffito.org.br/site/index.php/fale-conosco.html" target="_new"><img src="images/botao10.jpg" width="180" height="48" /></a>
    </ul>
<!-- end .sidebar1 --></div>
  <div class="content">
    <h3 align="center">Dados Estatísticos</h3>
    <ul>
      <li>Número de  fisioterapeutas registrados: 210.828</li>
      <li>Número de  terapeutas ocupacionais registrados: 16.835</li>
      <li>Total de  profissionais registrados: 227,663</li>
    </ul>
<p><em>Números atualizados em 26 de Outubro de 2015.</em></p>
<p>&nbsp;</p>
    <p>&nbsp;</p>
<!-- end .content --></div>
  <div class="footer">
    <h6 align="center">SRTVS quadra 701 conjunto L Edifício Assis Chateaubriand bloco II salas 602/614<br />
      CEP 70.340-906 - Brasília (DF) Telefone: (61) 3035-3800 Fax: (61) 3321-0828</h6>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
