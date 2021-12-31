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

    <header style="border-bottom: 3px solid #eb2d2d;">
    <div class="container">
    <div class="logo">
    <img src="images/logo.jpg" >
    </div ><!--logo-->

    <nav class="desktop">
    <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a style="color:#eb2d2d" href="venda.php">Venda</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="">Contato</a></li>
    </ul>
    </nav><!--desktop-->

    <nav class="mobile">
    <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a style="color:#eb2d2d" href="venda.php">Venda</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="">Contato</a></li>
    </ul>

    </nav><!--mobile-->

    <div class="clear"></div>
    </div><!--container-->
    </header>


        <section class="venda-single">
        <div class="container">

        <div class="line-titulo">
            <div class="ln1"></div>
            <h2>Veículo para Venda</h2>
        </div><!--line-titulo-->

        <div class="info-veiculo">
            <div style="background-image: url('images/carro1.jpg')" class="foto-destaque"></div>
            <div class="nav-galeria-parent">
                <div class="arrow-left-nav"></div><!--arrow-left-->
                <div class="arrow-right-nav"></div><!--arrow-right-->
            <div class="nav-galeria">
                <div class="nav-galeria-wraper">

                   <div style="background-color:rgb(210,210,210);" class="mini-img-wraper"> <div style="background-image: url('images/carro1.jpg')" class="mini-img"></div>
                   </div><!--mini-img-wraper-->

                   <div class="mini-img-wraper"> <div style="background-image: url('images/carro1.jpg')" class="mini-img"></div>
                   </div><!--mini-img-wraper-->

                   <div class="mini-img-wraper"> <div style="background-image: url('images/carro1.jpg')" class="mini-img"></div>
                   </div><!--mini-img-wraper-->

                   <div class="mini-img-wraper"> <div style="background-image: url('images/carro1.jpg')" class="mini-img"></div>
                   </div><!--mini-img-wraper-->

                   <div class="mini-img-wraper"> <div style="background-image: url('images/carro1.jpg')" class="mini-img"></div>
                   </div><!--mini-img-wraper-->

                   <div class="mini-img-wraper"> <div style="background-image: url('images/carro1.jpg')" class="mini-img"></div>
                   </div><!--mini-img-wraper-->

                </div><!--nav-galeria-wraper-->
            </div><!--nav-galeria-->
            </div><!--nav-galeria-parent-->
        </div><!--info-veiculo-->

        <div class="descricao-veiculo">
            <h2>R$20.000,00</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam libero esse facilis cupiditate recusandae nemo, molestiae  </p>
            <a class="btn1" href="">Entre em contato</a>
        </div><!--descricao-veiculo-->
            <div class="clear"></div><!--clear-->
        </div><!--container-->
        </section><!--venda-single-->











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

                <a class="btn1" href="">Mais Detalhes</a>
            </div><!--info-carro-->
        </div><!--vitrine-destaque-->


        <div class="vitrine-destaque">
            <div style="background-image: url('images/carro1.jpg');" class="carro-img"></div><!--carro-img-->
            <div class="info-carro">
                    <h2>volkswagen karmann-ghia</h2>
                    <p>1.6 8v, gasolina, p2, manual1969</p>

                    <a class="btn1" href="">Mais Detalhes</a>
            </div><!--info-carro-->
        </div><!--vitrine-destaque-->

        
        <div class="vitrine-destaque">
            <div style="background-image: url('images/carro1.jpg');" class="carro-img"></div><!--carro-img-->
            <div class="info-carro">
                    <h2>volkswagen karmann-ghia</h2>
                    <p>1.6 8v, gasolina, p2, manual1969</p>

                    <a class="btn1" href="">Mais Detalhes</a>
            </div><!--info-carro-->
        </div><!--vitrine-destaque-->
        <div class="clear"></div>
        </div><!--container-->
    </section><!--veiculos-destaque-->


    <footer>
        <div class="container">
        <nav >
    <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a style="color:#eb2d2d" href="venda.php">Venda</a></li>
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