<?php require('sec.php'); @session_start();?>
<?php
@include('menu.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad-local.css">
    <title>Cadastro de Quadras</title>
</head>
<body>
   
    <div class="formu-cad">
    <div class="name-formu">
            <h2>Cadastro de Quadras</h2>
        </div>
        <div class="formu">
            <form action="cad_local.act.php" method="post" enctype="multipart/form-data">
            <p>NOME DO LOCAL <input type="text" name="nome_local" required></p>
            <p>CATEGORIA <select name="id_categoria" id="select">
            <option>Escolher</option>
                <option value="1">Futebol</option>
                <option value="2">Futsal</option>
                <option value="4">Vôlei</option>
                <option value="3">Basquete</option>
                <option value="5">Poliesportiva</option>
                <option value="6">Areia</option>
            </select></p>
            <p>DESCRIÇÃO <input type="text" name="desc" required></p>
            <p>TELEFONE <input type="text" name="tel" required></p>
            <p>CEP <input type="text" name="cep" maxlenght="9" onblur="pesquisacep(this.value);" required></p>
            <p>RUA <input type="text" name="rua" id="rua"></p>
            <p>NÚMERO <input type="number" name="numero"></p>
            <p>BAIRRO <input type="text" name="bairro" id="bairro"></p>
            <p>CIDADE <input type="text" name="cidade" id="cidade"></p>
            <p>ESTADO <input type="text" name="estado" id="estado"></p>
            <p>Imagem 1 <input type="file" name="imagem1" required></p>
            <p>Imagem 2 <input type="file" name="imagem2" required></p>
            <p><input type="submit" id="botao" value="Cadastrar-Se" required></p>
            </form>
        </div>
        <div class="msg">
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
        </div>        




    </div>
</body>
<script>
function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }
function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('estado').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};
</script>
</html>