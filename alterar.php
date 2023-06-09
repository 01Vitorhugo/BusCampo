
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar informações</title>
    <link rel="stylesheet" href="css/alterar.css"> 
        <link rel="stylesheet" href="css/query-alterar.css"> 
</head>
<?php
    // @include('menu.php');
    require('connect.php');
    $id_local = $_GET['id_local'];
    $quadras = mysqli_query($con, "select * from `tb_local` where `id_local` = '$id_local'");
    $quadra = mysqli_fetch_array($quadras);
?>
<body>
    <div class="formu-cad">
        <div class="name-formu">
            <h2>Alteração de Quadras</h2>
        </div>


        <div class="formu">
            <form action="alterar.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_local" value="<?php echo $id_local?>">
            <input type="hidden" name="old_img1" value="<?php echo $quadra['img1']?>">
            <input type="hidden" name="old_img2" value="<?php echo $quadra['img2']?>">
            <p>Nome do local:</p>
            <p><input type="text" name="nome_local" value="<?php echo $quadra['nome_local']?>"></p>
            <p>Descrição:</p>
            <p> <input type="text" name="desc" value="<?php echo $quadra['desc_local']?>"></p>
            <p>Telefone do local: </p>
            <p><input type="text" name="tel" value="<?php echo $quadra['telefone']?>"></p>
            <p>Cep: </p>
            <p><input type="text" name="cep" maxlenght="9" onblur="pesquisacep(this.value);" required value="<?php echo $quadra['cep']?>">
            <p>Rua: </p>
            <p><input type="text" name="rua" id="rua" value="<?php echo $quadra['rua']?>">
            <p>Número: </p>
            <p><input type="text" name="numero" value="<?php echo $quadra['numero']?>">
            <p>Bairro: </p>
            <p><input type="text" name="bairro" id="bairro" value="<?php echo $quadra['bairro']?>">
            <p>Cidade: </p>
            <p><input type="text" name="cidade" id="cidade" value="<?php echo $quadra['bairro']?>">
            <p>Estado: </p>
            <p><input type="text" name="estado" id="estado" value="<?php echo $quadra['estado']?>">
            <p>Imagem 1 </p>
            <p><input type="file" name="imagem1"></p>
            <p>Imagem 2 </p>
            <p><input type="file" name="imagem2"></p>
            <p><input type="submit" id="botao" value="Alterar"></p>
            </form>
            <button onclick="confirmar(<?php echo $id_local?>)" >Deletar</button>
        </div>
</body>
<script>
        function confirmar(id_local){
            resposta = confirm("Deseja excluir o resgistro "+id_local+"?");

            if(resposta == true){
                window.location = "excluir_local.act.php?id_local="+id_local;
            }
        }
        
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