<?php
include("cabecalho.inc")
?>        
        <form action="insere.php" method="POST">
        <fieldset>
            <legend>Cadastre os dados do animal</legend>
            <label>Nome:</label>
            <input type="text" name="nome" />
            <br/>

            <label>Tipo:</label>
            <input type="text" name="tipo" />
            <br/>

            <label>Idade:</label>
            <input type="number" name="idade" />
            <br/>
        </fieldset>
        <fieldset>
            <legend>Cadastre os dados do dono</legend>
            <label>Nome:</label>
            <input type="text" name="nome_dono" />
            <br/>

            <label>Telefone:</label>
            <input type="text" name="telefone" />
            <br/>

            <label>Endereco:</label>
            <input type="text" name="endereco" />
            <br/>
        </fieldset>
        
            <input type="submit" value="Salvar"/>

        </form>
<?php
include("rodape.inc");
?>