<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pecht Contábil</title>
<link rel="shortcut icon" href="images/favicon-16x16.png" type="images/x-icon" />
<link rel="icon" href="images/favicon-16x16.png" type="images/x-icon" />

<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
<link rel="stylesheet" href="css/bootstrap3.3.7Min.css"/>
<link rel="stylesheet" href="css/reset.css" type="text/css"   charset="utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/fractionslider.css"/>
<link rel="stylesheet" href="css/globalstyle.css" />
<link rel="stylesheet" href="css/index.css" />
<link rel="stylesheet" href="css/slidercss.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/globaljs.js"></script>
<script src="javascript/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script> $190 = jQuery.noConflict(true);</script>
<script src="javascript/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script src="javascript/main.js" type="text/javascript" charset="utf-8"></script>



</head>

<body>
    <div id="container">
        <!--Header-->
        <div id="header">
            <div id="divlogo">
                <?php include 'logosvg.php'; ?>
            </div>
            <div class="fill"></div>
            <div id="divNav">
                <nav id="navbar">
                    <a href="index.php" class="hovertop">Home</a><!--
                 --><a href="#sobreempresa" class="hovertop">Sobre Nós</a><!--
                 --><a href="#conteudoextra" class="hovertop">Utilidades</a><!--
                 --><a href="#servicos" class="hovertop">Serviços</a><!--
                 --><a href="#contato" class="hovertop">Contato</a><!--
                 --><a href="#" id="linkareacliente" class="hovertop">Área do Cliente</a>
                </nav>
            </div>
        </div>
        <!--Slider-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slider1.jpg" alt="Los Angeles"></img>
                </div>

                <div class="item">
                    <img src="images/slider2.jpg" alt="Chicago"></img>
                </div>

                <div class="item">
                    <img src="images/slider3.jpg" alt="New york"></img>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--Apresentação-->
        <div id="apresentacao" class="internalcontainer">
            <div id="solucoes" class="apreInBox">
                <img src="images/market.jpg" alt=""></img>
                <h2>Soluções Para o Seu Negócio!</h2>
                <p>
                    No mundo ágil dos negócios de hoje, dividir seu tempo entre
                    as atividades principais da empresa e outras atividades
                    como contas, recibos, impostos e outros é difícil, é por
                    isso que nós da Pecht acreditamos que oferecer serviços
                    contábeis e fiscais de Qualidade, Confiabilidade e 
                    Segurança de diversas formas é essencial para que você
                    possa focar com tranquilidade no seu negócio e obter
                    grandes sucessos.
                </p>
                <div class="vejaMais">
                    <a href="#servicos" class="hvr-shutter-out-horizontal">Veja Mais!</a>
                </div>
            </div>
            <div id="conhecer" class="apreInBox">
                <img src="images/market.jpg" alt=""></img>
                <h2>Conheça Mais Sobre Nós!</h2>
                <p>
                    Criada por profissionais experientes do mundo da conta-
                    bilidade, a Pecht vem buscando através dos anos ofere-
                    cer tranquilidade e satisfação cada vez maiores para
                    nossos cliente, pois entendemos que para o Cliente possa
                    seguir com sua jornada de sucesso é preciso que ele 
                    tenha tranquilidade e informações de confiança para
                    tomar suas decisões, por isso nos dedicamos em oferecer
                    assessorias, confianças e serviços de qualidade.
                </p>
                <div class="vejaMais">
                    <a href="#sobreempresa" class="hvr-shutter-out-horizontal">Veja Mais!</a>
                </div>
            </div>
        </div>
        <!--Conteúdo extra-->
        <div id="conteudoextra" class="internalcontainer">
            <div id="titulouteis" class="titulos">
                <h2>Utilidades</h2>
            </div>
            <div id="uteisbox">
                <p>
                    Está procurando o link rápido para um serviço? ou Quer saber como as cotações do mercado estão?
                    Não se preocupe, pensando em você nós disponibilizamos abaixo alguns links utilitários e as cotações atuais da bolsa de valores.
                </p>
                <div id="divlinksuteis" class="efeitosextras">
                    <h2 class="h2extras">Links Úteis</h2>
                    <a id="util01" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util02" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util03" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util04" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util05" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util06" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util07" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util08" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a><!--
                    --><a id="util09" target="_blank"  href="" class="imguteis"><img src="images/receitafederal.png"></img></a>
                </div>
                <div id="divcotacoes" class="efeitosextras">
                    <h2 class="h2extras">Cotações</h2>
                    <div id="moedasbox">
                        <?php
                            include 'moedas.php';
                        ?>
                    </div>
                    <div id="bolsasbox">
                        <div id="ibovespa" class="bolsas"><img src="images/american-flag.svg" class="bandeiras"></img><span>Ibovespa +1,24% 82.2416,25 Pontos</span></div><!--
                        --><div id="Nasdaq" class="bolsas"><img src="images/american-flag.svg" class="bandeiras"></img><span>Nasdaq +1,24% 82.2416,25 Pontos</span></div><!--
                        --><div id="downjones" class="bolsas"><img src="images/american-flag.svg" class="bandeiras"></img><span>Down Jones +1,24% 82.2416,25 Pontos</span></div><!--
                        --><div id="nikkei" class="bolsas"><img src="images/american-flag.svg" class="bandeiras"></img><span>Nikkei +1,24% 82.2416,25 Pontos</span></div><!--
                        --><div id="Eurotoxx" class="bolsas"><img src="images/american-flag.svg" class="bandeiras"></img><span>Eurotoxx +1,24% 82.2416,25 Pontos</span></div><!--
                        --><div id="FTSE100" class="bolsas"><img src="images/american-flag.svg" class="bandeiras"></img><span>FTSE-100 +1,24% 82.2416,25 Pontos</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Sobre a Empresa-->
        <div id="sobreempresa" class="internalcontainer">
            <div id="tituloempresa" class="titulos">
                <h2>A Empresa</h2>
            </div>
            <div id="historia">
                <p class="pEmpresa">Atuamos no mercado auxiliando as empresas, quanto a sua constituição, 
                administração, consultorias e quando necessário, no encerramento das 
                mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas 
                contábil, fiscal, trabalhista e de assessoria.</p>

                <p class="pEmpresa">As consultorias abrangem todas as áreas acima citadas. O planejamento 
                tributário também faz parte de nosso currículo empresarial, analisamos a 
                tributação que mais se adequa a sua empresa. Trabalhamos para poder 
                servi-lo sempre com qualidade.</p>

                <p class="pEmpresa">O mundo econômico atual, tão complexo e instável em que temos de atuar e 
                a rapidez das informações exigem de nós administradores um esforço para 
                adaptarmos a esse ritmo, e principalmente para obtermos nosso objetivo 
                maior, o sucesso. Para isso a capacidade de uma organização é o que 
                determinará uma trajetória de vitórias ou de fracasso.</p>


                <p class="pEmpresa">Neste contexto, contando com uma equipe extremamente capacitada e 
                preocupada em buscar constantemente o que há de mais novo no mercado e 
                nos preocupamos em trazer um trabalho sério e competente com o intuito 
                de agregar valores e aumentar o capital intelectual de seus parceiros 
                (clientes), fazendo com que estas organizações se tornem bem sucedidas e 
                preparadas para prosseguir neste caminho de conquistas e vitórias. Nosso 
                intuito é estabelecer estratégias e operacionalizar o conjunto de ações 
                para os nossos clientes, capaz de fazê-los sobreviver, crescer e se 
                perpetuar no mercado.</p>
            </div>
            <div class="divspacer"></div>
        </div>
        <!--Serviços-->
        <div id="servicos" class="internalcontainer">
            <div id="tituloservicos" class="titulos">
                <h2>Serviços</h2>
            </div>
            <div id="servicosbox">
                <div id="servico01" class="servboxextras">
                    <a href="" class="hvr-float-shadow"><img src="images/servicos.png"></img>
                    <h3>Assessoria Fiscal</h3>
                    <div class="underlineH3"></div>
                    <p>Serviços de Assessoria Fiscal completa para sua empresa. Garantia de mitigação de riscos fiscais.</p></a>
                </div>
                <div id="servico02" class="servboxextras">
                    <a href="" class="hvr-float-shadow"><img src="images/servicos.png"></img>
                    <h3>Assessoria Contábil</h3>
                    <div class="underlineH3"></div>
                    <p>Escrituração contábil, atendimento à legislação do seu segmento e porte empresarial.</p></a>
                </div>
                <div id="servico03" class="servboxextras">
                    <a href="" class="hvr-float-shadow"><img src="images/servicos.png"></img>
                    <h3>Assessoria Fiscal</h3>
                    <div class="underlineH3"></div>
                    <p>Serviços de Assessoria Fiscal completa para sua empresa. Garantia de mitigação de riscos fiscais.</p></a>
                </div>
                <div id="servico04" class="servboxextras">
                    <a href="" class="hvr-float-shadow"><img src="images/servicos.png"></img>
                    <h3>Assessoria Contábil</h3>
                    <div class="underlineH3"></div>
                    <p>Escrituração contábil, atendimento à legislação do seu segmento e porte empresarial.</p></a>
                </div>
                <div id="servico05" class="servboxextras">
                    <a href="" class="hvr-float-shadow"><img src="images/servicos.png"></img>
                    <h3>Assessoria Fiscal</h3>
                    <div class="underlineH3"></div>
                    <p>Serviços de Assessoria Fiscal completa para sua empresa. Garantia de mitigação de riscos fiscais.</p></a>
                </div>
                <div id="servico06" class="servboxextras">
                    <a href="" class="hvr-float-shadow"><img src="images/servicos.png"></img>
                    <h3>Assessoria Contábil</h3>
                    <div class="underlineH3"></div>
                    <p>Escrituração contábil, atendimento à legislação do seu segmento e porte empresarial.</p></a>
                </div>
            </div>
            <div id="chegaMais">
                <div class="fullWidthFlex"><h2>Não encontrou o serviço que desejava ou ficou com dúvidas?</h2></div>
                <div class="fullWidthFlex"><p>Entre em contato conosco ou agende uma consulta e ficaremos felizes em atende-lo da melhor forma possível!</p></div>
                <div class="fullWidthFlex" id="entraContato">
                    <a href="#" class="hvr-shutter-out-horizontal">Entrar em Contato!</a>
                </div>
            </div>
        </div>
        <!--Slider2-->
        <div id="sliderWrapper" class="slider-wrapper">
            <div id="sliderResponsive" >
                <div id="sliderContainer" class="slider">
                    <div class="fs_loader"></div>
                    <div id="slide01" class="slide">
                        <img    src="images/leftside.png" 
                                    height="460"		
                                data-position="0,-200" data-in="bottomRight" data-delay="200"></img>
                        <p		class="claim light-green"			
                             data-position="20,30" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">Pecht Contábil</p>

                        <p 		class="teaser orange" 	
                             data-position="90,30" data-in="left" data-step="2" data-delay="500">QUALIDADE ➪ Oferecemos Serviços Especializados</p>		
                        <p 		class="teaser turky" 	
                             data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="4000">VELOCIDADE ➪ Sempre Atentos ao Mercado</p>		
                        <p 		class="teaser orange"		
                             data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="7500">DEDICAÇÃO ➪ Foco na Tranquilidade para o Cliente</p>     
                        <p 		class="teaser turky"		
                             data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="11500" data-out="none">CONFIABILIDADE ➪ Profissionais Experientes</p> 
                    </div>
                    <div id="slide02" class="slide">
                        <p 		class="claim light-green" 			
                             data-position="20,30" data-in="top" data-step="1" data-out="top">Serviços e Tecnologias</p>

                        <p 		class="teaser turky small" 	
                             data-position="90,30" data-in="bottom" data-step="2" data-delay="500">Assessoria Fiscal</p>		
                        <p 		class="teaser turky" 	
                             data-position="130,30" data-in="bottom" data-step="2" data-delay="1500">Sistema de Compatilhamento de Documentos</p>
                        <p 		class="teaser turky small" 	
                             data-position="170,30" data-in="bottom" data-step="2" data-delay="2500">Assessoria Contábil</p>	
                        <p 		class="teaser turky small" 	
                             data-position="210,30" data-in="bottom" data-step="2" data-delay="3500">Abertura de Empresas</p>
                        <p 		class="teaser orangelight small" 	
                             data-position="250,30" data-in="bottom" data-step="2" data-delay="4500">E Muito Mais!</p>
                        <img 	src="images/center2.png" 
                              data-position="10,450" data-in="fade" data-delay="500" data-out="bottomRight"></img>
                    </div>
                </div>
            </div>
        </div>
        <!--Contato-->
        <div id="contato" class="internalcontainer">
            <div id="titulocontato" class="titulos">
                <h2>Contato</h2>
            </div>
            <div id="contatobox">
                <div id="conthorario">
                    <span>Atendimento: Segunda a Sexta das 08:00 às 17:00 | Sábado das 08:00 às 12:00</span>
                </div>
                <div id="telbox01">
                    <span>Telefone: +55 19 3214-1234</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>Telefone 2: +55 19 3214-1234</span>
                </div>
                <div id="telbox02">
                    <span>Celular: +55 19 99214-1234</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>Celular 2: +55 19 99214-1234</span>   
                </div>
                <div id="boxmail">
                    <span>Email: emaildeexemplo@exemplo.com</span>
                </div>                    
            </div>
            <div id="redesbox">
                <div id="redessociais">
                    <a id="facebook" target="_blank" href="https://www.facebook.com/pages/Escrit%C3%B3rio-Contabil-Pecht-Piovesan-Sociedade-Simples-Ltda/1065198163537574?ref=br_rs"><img src="images/facebook.png"></img></a>
                    <a id="twitter" target="_blank"  href="https://www.facebook.com/pages/Escrit%C3%B3rio-Contabil-Pecht-Piovesan-Sociedade-Simples-Ltda/1065198163537574?ref=br_rs"><img src="images/twitter.png"></img></a>
                    <a id="googleplus" target="_blank"  href="https://www.facebook.com/pages/Escrit%C3%B3rio-Contabil-Pecht-Piovesan-Sociedade-Simples-Ltda/1065198163537574?ref=br_rs"><img src="images/googleplus.png"></img></a>
                </div>
            </div>
            <div id="googlemap">
                <div class="overlay" onClick="style.pointerEvents='none'"></div>
                <iframe id="mapaframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.3195460275597!2d-47.220491285452795!3d-23.085395484921296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8b359eb214b83%3A0xdbe4e27ff4c31dd!2sPecht+e+Piovesan+Escrit%C3%B3rio+Cont%C3%A1bil!5e0!3m2!1sen!2sbr!4v1496180146492" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!--Rodapé-->
        <div id="rodape">
            <div id="mapasite">
                <h3 class="titulosRodape">Conteúdo</h3>
                <ul id="ulmapasite">
                    <li><a href="#header" class="rodapeLink">Home</a></li>
                    <li><a href="#conteudoextra" class="rodapeLink">Utilidades</a></li>
                    <li><a href="#servicos" class="rodapeLink">Serviços</a></li>
                    <li><a href="#sobreempresa" class="rodapeLink">Sobre Nós</a></li>
                    <li><a href="#contato" class="rodapeLink">Contato</a></li>
                    <li><a href="clienteLogin.php" class="rodapeLink">Área do Cliente</a></li>
                </ul>
            </div>
            <div class="separador"></div>
            <div id="clientes">
                <h3 class="titulosRodape">Clientes</h3>
                <div id="clientesbox">
                    <a id="cliente01"><img src="images/iconamazon.png"></img></a>
                    <a id="cliente02"><img src="images/iconamazon.png"></img></a>
                    <a id="cliente03"><img src="images/iconamazon.png"></img></a>
                    <a id="cliente04"><img src="images/iconamazon.png"></img></a>
                    <a id="cliente05"><img src="images/iconamazon.png"></img></a>
                    <a id="cliente06"><img src="images/iconamazon.png"></img></a>
                </div>
            </div>
            <div class="separador"></div>
            <div id="sitepromo">
                <h3 class="titulosRodape">Site</h3>
                <div id="sitebox">
                    <a id="box01"><img src="images/siteachieves.png"></img></a>
                    <a id="box02"><img src="images/siteachieves.png"></img></a>
                    <a id="box03"><img src="images/siteachieves.png"></img></a>
                </div>
                <span>@2017 Todos os direitos Reservados a Pecht Contábil</span> 
            </div>
        </div>
        <!--Logo Myth-->
        <div id="myth">
            <a id="logomyth"><img id="logomythimg" src=""></img></a>
            <span>Desenvolvido por Mythical SoftWorks</span>
        </div>
    </div>
</body>