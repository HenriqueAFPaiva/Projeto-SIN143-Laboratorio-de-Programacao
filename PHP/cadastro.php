<!DOCTYPE html>
<html>

<head>
    <title>Tem Vaga Aí?</title>
    <link rel="icon" href="../Imagens/Logos/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Stylesheet/style.css" id="pagestyle">
</head>

<script type="text/javascript">
    function changeStyle(url) {
        document.getElementById('pagestyle').href = url;
    }
</script>

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
    <div class="pagina">
        <div class="avisos">
            <ul>
                <li align="center"><a href="https://covid.saude.gov.br/" target="_blank">Confira as últimas informações
                        sobre COVID-19</a></li>
                <li align="center"><a href="Contato.html">Clique aqui para ver os criadores do Tem Vaga Aí</a>
                </li>
                <li align="center"><a href="https://covid.saude.gov.br/" target="_blank">Confira as últimas informações
                        sobre COVID-19</a></li>
                <li align="center"><a href="Contato.html">Clique aqui para ver os criadores do Tem Vaga Aí</a>
                </li>
            </ul>
        </div>

        <div class="menu">

            <ul>
                <li><a class="logo"><img src="../Imagens/Logos/logogif2.gif" width="120px" height="65px"
                            id="myfoto"></a>
                <li><a href="../Home.html"><b>HOME</b></a>

                <li class="dropdown"><a class="dropbtn"><b>Hospedagem</b></a>
                    <div class="dropdown-content">
                        <a href="../Paginas/Hospedagem_casal.html"><b>Camas de casal</b></a>
                        <a href="../Paginas/Hospedagem_solteiro.html"><b>Camas de solteiro</b></a>
                        <a href="../Paginas/Hospedagem_sofa_cama.html"><b>Sofás-cama</b></a>
                        <a href="../Paginas/Hospedagem_redes.html"><b>Redes</b></a>
                    </div>

                <li><a href="Contato.html"><b>Contato</b></a>
                <li id="direita"><a class="active" href="Cadastro_login.html">Cadastro/Login</a></li>

                <li id="direita"><a href="../Stylesheet/style2.css" onclick="changeStyle('../Stylesheet/style2.css');return false;">Trocar tema</a></li>
            </ul>

        </div>

        <div class="cad">

            <a class="links" id="paracadastro"></a>
            <a class="links" id="paraalterar"></a>

            <div class="content">
                <!--FORMULÁRIO DE CADASTRO-->
                <div id="cadastro">
                    <form action="inserir.php" method="post">
                        <h1>Cadastro</h1>

                        <p>
                            <label for="id">ID do host</label>
                            <input id="id" name="id" required="required" type="text" placeholder="1, 3 ou 4" />
                        </p>

                        <p>
                            <label for="desc">Descrição da hospedagem</label>
                            <input id="desc" name="desc" required="required" type="text" placeholder="descrição" />
                        </p>

                        <p>
                            <label for="titulo">Título da hospedagem</label>
                            <input id="titulo" name="titulo" required="required" type="text" placeholder="titulo" />
                        </p>

                        <p>
                            <input type="submit" value="Cadastrar"/>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div style="padding-bottom: 150px">
            <?php

            //#######################################
            //# Listar todos os registros em tabela
            //#######################################

            include('../PHP/connection.php');

            $sql = "SELECT * FROM tipo_hospedagem";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // Imprime os dados de cada registro

            echo "<table border='3px solid white'>";
            echo "<tr><td><b>ID</b></td><td><b>hostID</b></td><td><b>Titulo</b></td><td><b>Descrição</b></td><td><b>Excluir</b></td><td><b>Alterar</b></td></tr>";

            while($row = $result->fetch_assoc()) {
                $id     = $row['ID'];
                $hostid    = $row['hostID'];
                $titulo  = $row['titulo'];
                $descricao = $row['descricao'];

                echo "<tr><td>$id</td><td>$hostid</td><td>$titulo</td><td>$descricao</td><td><a href='remover.php?ID=$id'><img style='width:20px; heigth:20px;' src='../Imagens/Tabela/excluir.png'></a><td><a href='atualizar.php?ID=$id'><img style='width:20px; heigth:20px;' src='../Imagens/Tabela/editar.png'></a></td></td></tr>";
            }

            echo "</table>";
            
            } else {
            echo "0 registros retornados";
            }
            $conn->close();
            ?>
        </div>

        <div class="rodape">
            <p style="font-size: 25px;"><b>Sobre</b></p>
            <p><a href="Contato.html">Desenvolvedores</a></p>
            <hr width="95%" font color="gray" noshade>
        </div>

        <div class="hej">
            <a><b>© 2020 H & J, All rights reserved</b></a>
        </div>

    </div>
</body>


</html>