<!DOCTYPE html>
<html>
<head>
    <title>Victor Swoboda Neto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="cabecalho">
        <div class="botao-menu-lateral">
            <button class="open-button" onclick="openNav()">☰ Menu</button>
            <h1>Victor Swoboda Neto .dev</h1>
        </div>
    </header>

    <!-- Menu Lateral -->
    <div id="mySidenav" class="menu">
            <a href="contato.html">Contato</a>
            <a href="portfolio.html">Portfolio</a>
            <a href="sobre.html">Sobre</a>
    </div>

    <div id="myOverlay" class="overlay" onclick="closeNav()"></div>

    <!-- Corpo -->
    <div class="secoes" id="corpo">
        <?php
            $secao = $_GET["secao"];
            $titulo = $_GET["titulo"];
        ?>
        <section>
            <h2><?php echo $titulo?></h2>
            <p><?php echo $secao?></p>
        </section>

        <section>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $preco = $_POST["preco"];
                    $percentual_ajuste = $_POST["percentual_ajuste"];

                    $percentual_abs = abs($percentual_ajuste);
                    $valor_ajuste = ($preco * $percentual_abs / 100);
                    
                    $valor_final = 0;

                    if ($percentual_ajuste < 0) {
                        $valor_final = $preco - $valor_ajuste;
                    } else {
                        $valor_final = $preco + $valor_ajuste; 
                    }
                }

                if (empty($preco)) {
                    $preco = 0;
                }

                if (empty($percentual_ajuste)) {
                    $percentual_ajuste = 0.0;
                }
            ?>

            <h2>Cálculo de Preços</h2>
            <form method="post" action="" id="form-preco">
                <label for="preco">Preço:</label>
                <input type="number" name="preco" id="preco" required><br>
                
                <label for="percentual_ajuste">Percentual de Ajuste:</label>
                <input type="number" name="percentual_ajuste" id="percentual_ajuste" step="any" required><br>
                
                <button type="submit">Calcular</button>
            </form>
            <p>Preço Original: <b>R$ <?php echo number_format($preco, 2)?></b></p><br>
            <p>Preço Ajustado Sob o Percentual de <b><?php echo $percentual_ajuste?>%</b> Ficou em <b>R$ <?php echo (isset($valor_final) ? $valor_final : 0)?></b></p><br>
            <button>Zerar Campos</button>
            <button onclick="">Salvar Dados Para Mais Tarde</button>
        </section>

        <section>
            <h2>Seção 3</h2>
            <p>Conteúdo da seção 3.</p>
        </section>

        <section>
            <h2>Seção 4</h2>
            <p>Conteúdo da seção 4.</p>
        </section>

        <section>
            <h2>Seção 5</h2>
            <p>Conteúdo da seção 5.</p>
        </section>

        <!-- Botões Sociais -->
        <div class="social-buttons">
            <a href="https://github.com/victorsn99" target="_blank" class="icon-link"><img src="icons8-github-48.png" alt="Ícone">GitHub</a>
            <a href="https://linkedin.com/in/victor-sn99" target="_blank" class="icon-link"><img src="icons8-linkedin-48.png" alt="Ícone">LinkedIn</a>
            <a href="https://whatsapp.com" target="_blank" class="icon-link"><img src="icons8-whatsapp-48.png" alt="Ícone">WhatsApp</a>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Minha Página PHP. Todos os direitos reservados.</p>
    </footer>

    <script>
        function openNav() {
            if (document.getElementById("mySidenav").style.width == "250px") {
                closeNav();
            } else {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("myOverlay").style.display = "block";
            }
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>
    </body>
</html>