<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Site</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
        <script type="text/javascript" src="javascript/globaljs.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/slidercss.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/reset.css" type="text/css"   charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
        <link rel="stylesheet" href="css/fractionslider.css"/>
        <script src="javascript/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="javascript/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
        <script src="javascript/main.js" type="text/javascript" charset="utf-8"></script>
    </head>

    <body>
        <?php
        $html = file_get_contents('https://economia.uol.com.br/cotacoes/');
        $dolar = NULL;
        $euro = NULL;
        $peso = NULL;
        $moedas = array(NULL,NULL,NULL);
        #Ibovespa,Nasdaq,Shangai,Nikkei,Eurotozz, FTSE-100
        $marketPercentage = array(NULL,NULL,NULL,NULL,NULL,NULL);
        $marketPoints = array(NULL,NULL,NULL,NULL,NULL,NULL);

        function getMoedas($conteudo)
        {
            $needle = "</span> R$ ";
            $lastPos = 0;
            $positions = array();

            while (($lastPos = strpos($conteudo, $needle, $lastPos)) !== false)
            {
                $positions[] = $lastPos;
                $lastPos = $lastPos + strlen($needle);
            }
            $cont = 0;
            global $moedas;
            foreach ($positions as $value)
            {
                $teste = substr($conteudo, ($value + strlen($needle)), 5);
                $moedas[$cont] = $teste;
                //echo "==> $moedas[$cont]";
                $cont++;
            }
            return 0;
        }
        getMoedas($html);
        $dolar = $moedas[0];
        $euro = $moedas[1];
        $peso = $moedas[2];
        echo "Dólar R$ $dolar || Euro R$ $euro ||Peso R$ $peso";
        
        function insertValues($positions,$positions2,$conteudo,$needle,$rangeBack,$rangeWord)
        {
            $cont = 0;
            $teste;
            global $marketPercentage;
            foreach ($positions as $value)
            {
                $rangeTarget = $positions2[$cont] - ($value+ strlen($needle));
                $teste = substr($conteudo, ($value + strlen($needle)), $rangeTarget);
                $marketPercentage[$cont] = $teste;
                if ((substr($conteudo, ($value + strlen($needle)+$rangeBack), $rangeWord))== "negativo")
                {
                    $marketPercentage[$cont] = "-".$marketPercentage[$cont];
                }
                echo "<br>==> $marketPercentage[$cont]";
                $cont++;
            }
        }

        $html = file_get_contents('http://www.infomoney.com.br/');
        function getTextInside($start,$final,$conteudo,$range,$rangeBack,$rangeWord)
        {
            $lastPos = 0;
            $positions = array();
            
            $positions2 = array();
            
            $cont2 = 0;
            while ((($lastPos = strpos($conteudo, $start, $lastPos)) !== false)and $cont2 <$range)
            {
                $cont2++;
                $positions[] = $lastPos;
                $lastPos = $lastPos + strlen($start);
                $look = True;
                while ((($lastPos = strpos($conteudo, $final, $lastPos)) !== false)and $look)
                {
                    $positions2[] = $lastPos;
                    $lastPos = $lastPos + strlen($start);
                    $look = False;
                }
            }
            insertValues($positions,$positions2, $conteudo,$start,$rangeBack,$rangeWord);
            return 0;
        }
        $range = 2;
        $start = '><span>-</span>';
        $rangeBack = -24;
        $rangeWord = 8;
        $final = "<span>%";
        getTextInside($start,$final,$html,$range,$rangeBack,$rangeWord);
        
        $final = " <small>pts";
        $range = 2;
        $start = '<span class="ticker-box-value"><span class="value">';
        $rangeBack = 0;
        $rangeWord = 0;
        getTextInside($start,$final,$html,$range,$rangeBack,$rangeWord);
        ?><div style="display: flex; align-content: center; justify-content: center;">
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BV4ifuAlpKU/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Corte por Eugênio Machado ✂️ Av. Itororó 371 - Cidade Nova  Indaiatuba/SP  19 38355411  19 97119 9833  wtzp  www.beautydate.com.br/b4alpaha . . . . #cerveja #cervejaespecial #cervejacaseira #cervejagourmet #moto #motoclube #harleydavidson #custon #estradeira #motoestradeira #chopp #mondialdelabiererio #gastronomia #choppgelado #chopp #rock #barba #barbearia #barbeariaclassica #beer #craftbeer #cerveza #craftbeerporn #rocknroll #barbafeita #festivaldecerveja #barbao #b4alpha</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Be for ALPHA (@b4alpha) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-06-28T12:34:25+00:00">Jun 28, 2017 at 5:34am PDT</time></p></div></blockquote>
        <script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div>
    </body>
</html>