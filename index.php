
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>
    <link rel="stylesheet" href="css/portifolio.css">
</head>

<body>
    
    <!-- MENU -->
    <header>
       
        <div class="logo">
   
        <h3>Daniel <span>Gava Dias</span></h3>
        </div>

        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#sobre">Sobre</a>
            <a href="#projetos">Projetos</a>
            <a href="#contato">Contato</a>
        </nav>
    
    </header>

    <!-- CONTEÚDO PRINCIPAL -->

    <main>
        <!-- SEÇÃO DE INICIO -->
         <section id="inicio" class="inicio">
            <div class="inicio-conteudo">
                
                <p class="apresentacao"> Olá eu sou </p>
                <h1> Daniel Gava</h1>
                <h2> desenvolvedor de Software</h2>
                <p class="descricao">
                    descrição     
                </p>
                
                <div class="botoes">
                    <a href="#projetos" class="botao"> Ver projetos </a>
                    <a href="#contato" class="botao botao-secundario"> Entrar contato </a>
                </div>    
            </div>
         </section>

         <section id="sobre" class="sobre">
            <div class="titulo-secao">
                <p>Conheça um pouco sobre mim</p>
                <h2>sobre mim</h2>
            </div>
            
            <div class="sobre-conteudo">
                <div class="sobre-texto">
                    <p>tenho sono</p>
                    <p>muito sono</p>
                </div>
                
                <div class="habilidades">
                    
                    <div class="habilidade">
                        <h3>HTML</h3>
                        <p>Estruturações de páginas web</p>
                    </div>

                    <div class="habilidade">
                        <h3>CSS</h3>
                        <p>Estilizações e criações de interface</p>
                    </div>

                    <div class="habilidade">
                        <h3>PHP</h3>
                        <p>pe aga pe</p>
                    </div>
                
                </div>
            </div>
         </section>
         
         <section id="inicio" class="projetos-secao">
            <div class="titulo-secao">
                <p>Alguns trabalhos</p>
                <h2>Meus projetos</h2>
            </div>
           <div class="projetos">
<!--====================================================================================================================================-->
            <!--PROJETO 1-->
            <div class="card">
                    
                    <div class="numero-projeto">
                        01
                    </div>
                   
                    <h3>Sistema de cadastros</h3>
                    <p>Desrição do sistema de cadastros</p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <!-- <span>PHP</span> -->
                    </div>
                    <a href="cadastro.html">Ver projetos</a>
                </div>
           </div>
         </section>
<!-- ====================================================================================================================================-->
        <!-- PROJETO 2-->
            <div class="card">
                    
                    <div class="numero-projeto">
                        02
                    </div>
                   
                    <h3>Sistema de verificação de idade</h3>
                    <p>Desrição do sistema de verificação de idade</p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="idade.php">Ver projetos</a>
                </div>
           </div>
        </section>
<!--====================================================================================================================================-->
        <!-- PROJETO 3-->
            <div class="card">
                    
                    <div class="numero-projeto">
                        03
                    </div>
                   
                    <h3>Persistencia de Dados</h3>
                    <p>AULA DE JSON</p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="dados-json.php">Ver projetos</a>
                </div>
           </div>
        </section>
<!--====================================================================================================================================-->
        <!-- PROJETO 4-->
        <div class="card">
                    
                    <div class="numero-projeto">
                        04
                    </div>
                   
                    <h3>CADASTRO DE PRODUTOS</h3>
                    <p>PRATICA DE JSON</p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="cadastroProdutos.php">Ver projetos</a>
                </div>
           </div>
        </section>
<!--==================================================================================================================================== -->
        <!-- PROJETO 5-->
        <div class="card">
                    
                    <div class="numero-projeto">
                        05
                    </div>
                   
                    <h3>HELP DESK</h3>
                    <p>(PHP + HTML + JSON)</p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="atividades/helpdesk.php">Ver projetos</a>
                </div>
           </div>
        </section>
<section id="contato" class="contato">
            <div class="titulo-secao">
                <p>Vamos conversar!</p>
                <h2>Contato</h2>
            </div>
            <div class="contato-links">
<!--==================================================================================================================================== -->
                <!-- PROJETO 6-->
        <div class="card">
                    
                    <div class="numero-projeto">
                        06
                    </div>
                   
                    <h3>LOJA INFORMATICA</h3>
                    <p>(PHP + HTML + SGBD/SQL)</p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>SQL</span>
                        <span>PHP</span>
                    </div>
                    <a href="atividades/loja_info/loja_informatica.php">Ver projetos</a>
                </div>
           </div>
        </section>
<section id="contato" class="contato">
            <div class="titulo-secao">
                <p>Vamos conversar!</p>
                <h2>Contato</h2>
            </div>
            <div class="contato-links">
<!--==================================================================================================================================== -->
                <a href="mailto:daniel.gava0903@gmail.com">Email</a>
                <a href="https://github.com/danielgavadias"> Github</a>

            </div>
        </section>
    </main>
    
    <footer>
        <p>
            Desenvolvido por Daniel Gava Dias
        </p>
        <p>
            HTML + CSS
        </p>
    </footer>
</body>

</html>