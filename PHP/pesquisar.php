<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf8">
    <title>Tem Vaga Aí?</title>
    <link rel="icon" href="Imagens/Logos/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Stylesheet/style.css" id="pagestyle" id="pagestyle">
</head>

<style>
table {
    width: 40%;
    margin: auto;
    text-align: center;
}

td {
    max-width: 500px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>

<body>

    <!--Criação dos avisos no topo da página (animação css com timer e mouse over com cor)-->
    <div class="pagina">
        <div class="avisos">
            <ul>
                <li align="center"><a id="textopadrao" href="https://covid.saude.gov.br/" target="_blank">Confira as
                        últimas informações sobre COVID-19</a></li>
                <li align="center"><a id="textopadrao" href="../Paginas/Contato.html">Clique aqui para ver os criadores do
                        Tem Vaga Aí</a></li>
                <li align="center"><a id="textopadrao" href="https://covid.saude.gov.br/" target="_blank">Confira as
                        últimas informações sobre COVID-19</a></li>
                <li align="center"><a id="textopadrao" href="../Paginas/Contato.html">Clique aqui para ver os criadores do
                        Tem Vaga Aí</a></li>
            </ul>
        </div>

        <!--Criação do menu da página (animação css com timer no gif, elements dropdown e mouse over com cor)-->
        <div class="menu">

            <ul>
                <li><a class="logo"><img src="../Imagens/Logos/logogif2.gif" width="120px" height="65px" id="myfoto"></a>
                <li><a class="active" href="../Home.html"><b>HOME</b></a>
                
                <!--Tela de resultado de pesquisa com vários resultados por tela (dropdown)--> 
                <li class="dropdown"><a class="dropbtn"><b>Hospedagem</b></a>
                    <div class="dropdown-content">
                        <a href="../Paginas/Hospedagem_casal.html"><b>Camas de casal</b></a>
                        <a href="../Paginas/Hospedagem_solteiro.html"><b>Camas de solteiro</b></a>
                        <a href="../Paginas/Hospedagem_sofa_cama.html"><b>Sofás-cama</b></a>
                        <a href="../Paginas/Hospedagem_redes.html"><b>Redes</b></a>
                    </div>

                <li><a href="../Paginas/Contato.html"><b>Contato</b></a>


                <!--Página com elementos de entrada de dados Dropbox, radio button, texto, check box-->
                <li id="direita"><a href="cadastro.php">Cadastro/Login</a></li>

                <li id="direita"><a href="../Stylesheet/style2.css" onclick="changeStyle('../Stylesheet/style2.css');return false;">Trocar tema</a></li>
            </ul>

        </div>

        <div class="pesquisar">
            <div style="text-align: center; padding-top: 50px; padding-bottom: 100px;">
                <h1>Pesquisar</h1>
                <form class="formpesquisa" action="" method="POST">
                    <input style="height: 40px; width: 350px; margin: auto;" type="text" id="pesquisa" name="pesquisa" placeholder="Pesquise aqui(ex: cama, rede, sofá)">
                    <input style="height: 40px; width: 100px; background: #FF8C00; color: #fff; border: 1px solid #fff;text-shadow: 0 1px 1px #333; font-weight: bold;" name="search" type="submit" value="Pesquisar">
                </form>
            </div>
        </div>

        <div style="text-align: center; padding-bottom:50px;">
            <?php
            //###############################
            //# Pesquisar
            //###############################

            include('connection.php');


            $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);

            if($search){
                $pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
                $resultado = "SELECT * FROM tipo_hospedagem WHERE titulo LIKE '%$pesquisa%'";
                $resultado_final = mysqli_query($conn, $resultado);
                echo "<h1>Resultados encontrados:</h1><br>";
                
                while(true){
                    if($pesquisa == " " || $pesquisa == NULL || $pesquisa == ""){
                        echo "Busca inválida";
                        break;
                    }else{
                        if($row_hosp = mysqli_fetch_assoc($resultado_final)){
                            $id = $row_hosp['ID'];
                            $hostID = $row_hosp['hostID'];
                            $titulo = $row_hosp['titulo'];
                            $descricao = $row_hosp['descricao'];
                            echo "<table border='3px solid white'>";
                            echo "<tr><td><b>ID do Host</b></td><td><b>Titulo</b></td><td><b>Descrição</b></td><td>Link</td></tr>";
                            if($id == 1){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_love_relaxante.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 2){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_simples.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 3){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_king_size.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 4){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_pequena.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 5){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_solteiro_simples.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 6){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_estudante.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 7){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_solteiro_dupla.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 8){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/sofa_estiloso.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 9){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/sofa_com_cama.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 10){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/sofa_vira_cama.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 11){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/rede_ar_livre.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 12){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/rede_simples.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 13){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/rede_chique.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else{
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a>Offline</a></td></tr>";
                            }
                        }else{
                            echo "Nenhum resultado encontrado.";
                        }
                        
                        while($row_hosp = mysqli_fetch_assoc($resultado_final)){
                            $id = $row_hosp['ID'];
                            $hostID = $row_hosp['hostID'];
                            $titulo = $row_hosp['titulo'];
                            $descricao = $row_hosp['descricao'];

                            if($id == 1){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_love_relaxante.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 2){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_simples.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 3){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_king_size.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 4){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_pequena.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 5){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_solteiro_simples.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 6){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_estudante.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 7){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/cama_solteiro_dupla.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 8){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/sofa_estiloso.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 9){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/sofa_com_cama.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 10){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/sofa_vira_cama.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 11){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/rede_ar_livre.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 12){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/rede_simples.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else if($id == 13){
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a href='../Paginas/rede_chique.html'><img style='width:20px; heigth:20px;' src='../Imagens/icones/seta.png'></a></td></tr>";
                            }else{
                                echo "<tr><td>$hostID</td><td>$titulo</td><td>$descricao</td><td><a>Offline</a></td></tr>";
                            }
    
                            
                        }
                        echo "</table>";
                        break;
                    }
                }
                    
                
            }

            $conn->close();

            ?>
        </div>
       


        <!--Rodapé da página (mouse over de cor)-->
        <div class="rodape">
            <p style="font-size: 25px;"><b>Sobre</b></p>
            <p><a href="Paginas/Contato.html">Desenvolvedores</a></p>
            <hr width="95%" font color="gray" noshade>
        </div>

        <div class="hej">
            <a><b>© 2020 H & J, All rights reserved</b></a>
        </div>

    </div>

</body>

<script type="text/javascript">
    function changeStyle(url) {
        document.getElementById('pagestyle').href = url;
    }
</script>

</html>
