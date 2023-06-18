<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Document</title>
    
    <link rel="stylesheet" href="estilo_search.css">

    <Script>
        function pesquisar(texto){
            $.ajax({
                type: "post",
                url: "pesquisa_by_categoria.act.php?texto="+texto,
                success: function(response){
                    $('#resultado').html(response);
                }
            });
        }
    </Script>
</head>
<body>
    <input type="text" id="txtPesquisa" onkeyup="pesquisar(this.value)">
        <div id="resultado">

        </div>
</body>
</html>