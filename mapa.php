<?php
require 'includes/conexao.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="includes/mapa.css">
    <link rel="stylesheet" href="includes/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php include_once('header.php'); ?>
    <div class="pagina">
      <div class="texto_mapa">
        <h3>Mapa</h3>
        <p><br>Bem vindo ao mapa interativo. <br><br>Para saber mais sobre a região pretendida, selecione um distrito ao clicar no mapa.<br><br>Em cada distrito pode ver a história do mesmo e os diversos pontos turísticos.</p><br><br><br><br>
        
      </div>
      <div class="mapa">
      <img src="includes/images/mapa_portugal.jpg" usemap="#image-map">
      <map name="image-map" class="imagemap">
      <area target="" alt="porto" title="porto" href="distritos/porto.php" coords="274,94,288,96,293,105,297,111,307,109,319,107,333,102,342,112,352,108,362,132,315,143,289,149,280,120" shape="poly">
      <area target="" alt="braga" title="braga" href="distritos/braga.php" coords="275,92,290,96,297,109,336,99,343,109,351,107,351,99,354,91,368,84,365,77,351,76,349,67,340,66,345,48,303,61,300,74,292,71,272,75" shape="poly">
      <area target="" alt="viana_do_castelo" title="viana_do_castelo" href="distritos/viana.php" coords="271,74,291,70,299,72,302,59,334,49,326,39,333,25,339,22,338,16,331,16,331,9,315,18,293,20,279,34,268,49,267,62" shape="poly">
      <area target="" alt="vila_real" title="vila_real" href="distritos/vilareal.php" coords="363,131,379,132,390,129,403,125,406,114,412,109,406,93,413,93,414,87,420,85,416,80,426,56,423,41,403,49,395,43,369,38,356,38,348,44,342,63,351,64,353,73,365,74,370,84,356,93,353,105" shape="poly">
      <area target="" alt="braganca" title="braganca" href="distritos/braganca.php" coords="425,28,480,31,484,65,500,66,515,78,504,100,486,118,476,118,463,140,459,147,441,146,431,132,411,132,404,127,413,111,411,97,423,87,419,79,429,56" shape="poly">
      <area target="" alt="aveiro" title="aveiro" href="distritos/aveiro.php" coords="288,150,307,149,326,144,327,151,337,155,339,169,329,168,319,183,325,200,320,204,326,212,319,214,317,229,307,239,301,237,306,229,302,221,297,224,297,213,290,213,290,224,275,211" shape="poly">
      <area target="" alt="viseu" title="viseu" href="distritos/viseu.php" coords="326,143,401,130,410,134,410,147,403,149,409,154,409,161,402,160,401,172,389,162,384,176,395,193,378,208,365,213,358,216,340,230,323,235,320,227,321,216,330,212,324,204,327,198,321,184,330,170,340,169,340,155" shape="poly">
      <area target="" alt="guarda" title="guarda" href="distritos/guarda.php" coords="413,134,429,134,437,147,448,148,459,168,458,183,458,199,463,231,452,240,438,239,434,232,430,240,418,239,423,222,409,224,402,220,397,226,395,233,387,232,372,245,368,240,375,233,367,217,380,209,399,193,387,177,390,167,403,177,404,163,411,162" shape="poly">
      <area target="" alt="faro" title="faro" href="distritos/faro.php" coords="255,650,283,641,296,636,304,641,336,643,351,654,367,653,396,632,409,629,398,586,378,592,351,604,346,611,339,614,330,613,318,600,307,601,303,607,293,604,277,607,273,599,268,604,261,617" shape="poly">
      <area target="" alt="beja" title="beja" href="distritos/beja.php" coords="265,603,269,549,276,551,280,557,293,559,296,547,311,544,316,548,319,542,321,522,310,521,307,514,318,506,337,500,335,488,354,488,364,495,377,500,389,503,401,501,406,492,417,487,425,495,428,505,446,502,443,523,420,526,419,543,405,557,404,569,397,585,378,589,347,603,344,610,331,611,321,595,305,599,278,605,272,594" shape="poly">
      <area target="" alt="coimbra" title="coimbra" href="distritos/coimbra.php" coords="274,213,292,227,293,215,296,228,301,224,302,229,298,238,306,242,319,231,322,238,341,234,364,217,372,233,366,238,370,248,367,254,374,262,357,277,340,283,335,264,324,268,323,281,313,282,310,273,298,280,297,272,290,276,276,271,265,271,264,255" shape="poly">
      <area target="" alt="castelobranco" title="castelobranco" href="distritos/castelobranco.php" coords="372,249,388,235,397,236,402,223,410,228,420,226,416,240,431,244,434,238,450,244,441,260,449,263,456,273,453,294,445,299,445,317,392,316,386,323,378,321,371,330,354,309,346,308,344,324,326,322,327,307,321,301,336,292,344,284,359,278,377,261" shape="poly">
      <area target="" alt="leiria" title="leiria" href="distritos/leiria.php" coords="261,271,291,280,295,276,296,284,308,278,312,286,325,285,326,272,333,269,339,286,318,299,320,306,309,309,305,296,283,303,290,318,280,321,285,334,278,341,262,341,258,352,252,352,254,364,242,362,238,376,231,363,220,365,217,358,244,329" shape="poly">
      <area target="" alt="lisboa" title="lisboa" href="distritos/lisboa.php" coords="219,367,230,365,236,378,242,377,244,363,253,366,271,376,260,378,273,391,256,422,252,410,240,422,241,435,220,440,204,438,191,431,193,424,205,423" shape="poly">
      <area target="" alt="santarem" title="santarem" href="distritos/santarem.php" coords="255,354,256,365,274,377,266,379,276,391,258,423,261,433,279,434,282,422,298,427,316,416,338,428,325,411,328,404,318,386,354,352,349,342,354,331,365,337,369,330,351,309,345,325,326,324,323,308,308,313,304,301,287,304,292,319,284,322,289,332,281,341,265,343" shape="poly">
      <area target="" alt="portalegre" title="portalegre" href="distritos/portalegre.php" coords="321,386,356,353,353,342,355,333,365,339,379,323,387,324,393,318,393,327,415,342,411,352,418,369,420,376,430,381,430,388,440,388,446,392,438,414,442,419,426,430,428,421,416,421,413,426,407,420,403,403,393,395,386,412,376,408,372,413,361,413,354,408,343,397,329,402" shape="poly">
      <area target="" alt="setubal" title="setubal" href="distritos/setubal.php" coords="226,442,234,440,242,446,250,441,249,434,258,431,261,436,280,437,283,424,298,429,302,441,286,448,287,457,298,462,314,459,318,481,333,485,334,499,320,501,303,513,307,523,319,524,316,543,296,545,292,556,281,555,278,546,270,546,263,530,272,504,261,464,230,475" shape="poly">
      <area target="" alt="evora" title="evora" href="distritos/evora.php" coords="327,409,342,399,360,415,373,416,377,411,387,414,394,398,401,405,405,420,411,428,418,423,426,423,423,432,417,436,420,451,411,472,434,501,429,502,427,493,413,483,404,489,399,499,390,501,373,496,355,485,337,486,332,481,320,479,316,456,298,460,290,456,289,449,305,442,300,429,315,417,343,432" shape="poly">
      <area target="" alt="acores" title="acores" href="distritos/acores.php" coords="36,428,128,473,138,531,124,540,13,495,24,458" shape="poly">
      <area target="" alt="madeira" title="madeira" href="distritos/madeira.php" coords="62,658,132,631,124,691,92,681" shape="poly">
      </map>
      </div>
    </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="includes/jquery.rwdImageMaps.min.js"></script>
  <script type="text/javascript"> $('img[usemap]').rwdImageMaps();</script>
  <?php include_once('footer.php'); ?>
  </body>
</html>
