<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>projeto 05</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
    <div class="container">
    <div class="logo">
    <img src="images/logo.jpg" >
    </div ><!--logo-->

    <nav class="desktop">
    <ul>
        <li><a style="color:#eb2d2d" href="">Home</a></li>
        <li><a href="venda.php">Venda</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="">Contato</a></li>
    </ul>
    </nav><!--desktop-->

    <nav class="mobile">
    <ul>
        <li><a style="color:#eb2d2d" href="">Home</a></li>
        <li><a href="venda.php">Venda</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="">Contato</a></li>
    </ul>

    </nav><!--mobile-->

    <div class="clear"></div>
    </div><!--container-->
    </header>

    <section class="banner">
        <div class="container">
        <div class="text-banner">
            <div class="text-banner-single">Consultoria</div>
            <div class="text-banner-single">Compra</div>
            <div class="text-banner-single">Venda</div>
            <div class="text-banner-single">E-Mail:teste123@teste.com</div>
        </div><!--text-banner-->
        </div><!--container-->
    </section><!--section banner-->

    <section class="veiculos-destaque">
        <div class="line-titulo">
            <div class="ln1"></div>
            <h2>Veículos em destaque</h2>
        </div><!--line-titulo-->

        <div class="container">
  
        <div class="vitrine-destaque">
            <div style="background-image: url('images/carro1.jpg');" class="carro-img"></div><!--carro-img-->
            <div class="info-carro">
                    <h2>volkswagen karmann-ghia</h2>
                    <p>1.6 8v, gasolina, p2, manual1969</p>

                <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
            </div><!--info-carro-->
        </div><!--vitrine-destaque-->


        <div class="vitrine-destaque">
            <div style="background-image: url('images/carro1.jpg');" class="carro-img"></div><!--carro-img-->
            <div class="info-carro">
                    <h2>volkswagen karmann-ghia</h2>
                    <p>1.6 8v, gasolina, p2, manual1969</p>

                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
            </div><!--info-carro-->
        </div><!--vitrine-destaque-->

        
        <div class="vitrine-destaque">
            <div style="background-image: url('images/carro1.jpg');" class="carro-img"></div><!--carro-img-->
            <div class="info-carro">
                    <h2>volkswagen karmann-ghia</h2>
                    <p>1.6 8v, gasolina, p2, manual1969</p>

                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
            </div><!--info-carro-->
        </div><!--vitrine-destaque-->
        <div class="clear"></div>
        </div><!--container-->
    </section><!--veiculos-destaque-->

    <section class="servicos-descricao">
            <div class="half1">
                <div class="half1-wraper">
                <h2>Serviços</h2>
                <ul>
                    <li>Compra</li>
                    <li>Venda</li>
                    <li>Consultoria de veiculos</li>
                    <li>Indicações de Mecanicos e peças</li>
                </ul>
                    <a class="btn1" href="">Saiba Mais</a>

                    </div><!--half1-wwraper-->
            </div><!--half1-->

            <div class="half2">
                <h2>Depoimentos</h2>

                <div class="depoimento-single">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum voluptatibus maiores, minus asperiores sed reprehenderit nostrum recusandae praesentium error enim</p>

                    <div class="navigation">
                        <div class="arrows">
                            <img src="images/arrow-left.png">
                            <img src="images/arrow-right.png">
                        </div><!--arrows-->
                    
                        <div class="nome-depoimento">Joao da Silva</div>


                    </div><!--navigation-->

                </div><!--depoimento-single-->

            </div><!--half2-->

            <div class="clear"></div>
    </section><!--servicos-descricao-->


    <section class="contato">
    <div class="line-titulo">
            <div class="ln1"></div>
            <h2>Contato</h2>
        </div><!--line-titulo-->

        <form>
           <div class="input-wraper w100">
                <input type="text" placeholder="Nome..." required >
           </div><!--input-wraper 100w-->
           <div class="input-wraper w50">
                <input type="text" placeholder="E-mail..." required>
           </div><!--input-wraper 100w-->
           <div class="input-wraper w50">
                <input type="text" placeholder="Telefone..." required >
           </div><!--input-wraper 100w-->
           <div class="input-wraper w100">
                <textarea placeholder="Mensagem..." required ></textarea>
           </div><!--input-wraper 100w-->

           <div class="input-wraper w100">
            <input class="btn1" type="submit" name="acao" value="Enviar" >
           </div><!--input-wraper 100w-->

           <div class="clear"></div>
        </form>

    </section><!--contato-->


    <footer>
        <div class="container">
        <nav >
    <ul>
        <li><a style="color:#eb2d2d" href="">Home</a></li>
        <li><a href="venda.php">Venda</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="">Contato</a></li>
    </ul>

    </nav>
    <p>Todos os Diretos Reservados</p>
    <div class="clear"></div>
        </div><!--container-->
    </footer>


   
</body>
</html>