<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Public+Sans:wght@300;500;800&display=swap">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .main-header {
            background-color: #34495e;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo-cvbc img {
            max-height: 80px;
            filter: brightness(1.5); /* Ajusta o brilho da imagem */
        }

        .main-title {
            font-size: 24px;
        }

        #cadastroForm {
            max-width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }


        .form-group {
            width: 48%; /* Ajuste a largura conforme necessário */
            margin: 1%;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            background-color: #ecf0f1;
        }
        #numero_residencia {
            width: 100%; /* Define a largura do input */
            padding: 8px; /* Adapte conforme necessário */
            box-sizing: border-box; /* Garante que o padding não aumenta a largura total */
            border: 1px solid #ccc; /* Adapte conforme necessário */
            border-radius: 4px; /* Adapte conforme necessário */
        }

        input[type="text"],
        input[type="date"],
        input[type="password"],
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            background-color: #ecf0f1;
            box-sizing: border-box; /* Garante que padding não aumenta a largura total */
        }

        input[type="button"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            background-color: #ecf0f1;
            /* Adicione estilos específicos para input do tipo number */
        }
        


        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }
        
        
    </style>

</head>

<body>
    <header class="main-header">
        <div class="logo-cvbc">
            <img src="cadastroheader1.png" alt="logo-cvbc">
        </div>
        <h1 class="main-title">Teste Cadastro Admissão</h1>
    </header>
    <form id="cadastroForm">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" required>
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select id="sexo" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        </div>

        <div class="form-group">
            <label for="estado_civil">Estado Civil:</label>
            <select id="estado_civil" required>
                <option value="1">Solteiro</option>
                <option value="2">Casado</option>
                <option value="3">Divorciado</option>
                <option value="4">Viúvo</option>
                <option value="5">Concubinato</option>
                <option value="6">Separado</option>
                <option value="7">União Estável</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" maxlength="14" minlength="14" required>
        </div>

        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" required>
        </div>
        <div class="form-group">
            <label for="estado_nascimento">estado de nascimento:</label>
            <input type="text" id="estado_nascimento" name="estado_nascimento" required>
        </div>


        
            <input hidden value="10" type="text" id="nacionalidade" required>



        <div class="form-group">
            <label for="grau_instrucao">Grau de Instrução:</label>
            <select id="grau_instrucao" required>
                <option value="01">Analfabeto</option>
                <option value="02">4ª Série Incompleta</option>
                <option value="03">4ª Série Completa</option>
                <option value="04">5ª a 8ª Série Incompleta</option>
                <option value="05">1º Grau Completo</option>
                <option value="06">2º Grau Incompleto</option>
                <option value="07">2º Grau Completo</option>
                <option value="08">Superior Incompleto</option>
                <option value="09">Superior Completo</option>
                <option value="10">Pós-Graduação</option>
                <option value="11">Mestrado</option>
                <option value="12">Doutorado</option>
                <option value="13">Ph.D.</option>
                
            </select>
        </div>
        <div class="form-group">
            <label for="raca_cor">Raça/Cor</label>
            <select id="raca_cor" required>
                <option value="1">Branca</option>
                <option value="2">Preta/Negra</option>
                <option value="3">Amarela</option>
                <option value="4">Parda</option>
                <option value="5">Indígena</option>
                <option value="6">Mameluco</option>
                <option value="7">Mulato</option>

            </select>
        </div>
        <div class="form-group">
            <label for="nome_pai">Nome Pai:</label>
            <input type="text" id="nome_pai" required>
        </div>

        <div class="form-group">
            <label for="nome_mae">Nome Mãe:</label>
            <input type="text" id="nome_mae" required>
        </div>


        <div class="form-group">
            <label for="cep">CEP:</label>
            <input type="text" id="cep" required>
        </div>

        <div class="form-group">
            <label for="cidade_residencia">Cidade residencia:</label>
            <input type="text" id="cidade_residencia" required>
        </div>

        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" required>
        </div>
        <div class="form-group">
            <label for="tipo_logradouro">Tipo de Logradouro:</label>
            <input type="text" id="tipo_logradouro" required>
        </div>
        <div class="form-group">
            <label for="logradouro_residencia">Logradouro residencia:</label>
            <input type="text" id="logradouro_residencia" required>
        </div>
        <div class="form-group">
            <label for="numero_residencia">Numero da residencia:</label>
            <input type="number" id="numero_residencia" required>
        </div>
        <div class="form-group">
            <label for="complemento_residencia">Complemento:</label>
            <input type="text" id="complemento_residencia" required>
        </div>
        <div class="form-group">
            <label for="numero_pis">Numero PIS:</label>
            <input type="text" id="numero_pis" required>
        </div>
        <div class="form-group">
            <label for="numero_rg">RG:</label>
            <input type="text" id="numero_rg" required>
        </div>
        <div class="form-group">
            <label for="expedidor_rg">expedidor rg:</label>
            <input type="text" id="expedidor_rg" required>
        </div>
        <div class="form-group">
            <label for="data_expedicao_rg">data expedicao rg rg:</label>
            <input type="text" id="data_expedicao_rg" required>
        </div>
        <div class="form-group">
            <label for="uf_expedicao_rg">uf_expedicao_rg:</label>
            <input type="text" id="uf_expedicao_rg" required>
        </div>
        <div class="form-group">
            <label for="titulo_eleitor">titulo eleitor:</label>
            <input type="text" id="titulo_eleitor" required>
        </div>
        <div class="form-group">
            <label for="titulo_eleitor_zona">titulo eleitor zona :</label>
            <input type="text" id="titulo_eleitor_zona" required>
        </div>
        <div class="form-group">
            <label for="titulo_eleitor_secao">titulo_eleitor_secao:</label>
            <input type="text" id="titulo_eleitor_secao" required>
        </div>
        <div class="form-group">
            <label for="reservista">Reservista:</label>
            <input type="text" id="reservista" required>
        </div>

        <div class="form-group">
            <label for="ddd_telefone_1">DDD Telefone 1:</label>
            <input type="text" id="ddd_telefone_1" required>
        </div>

        <div class="form-group">
            <label for="telefone_1">Telefone 1:</label>
            <input type="text" id="telefone_1" required>
        </div>

        <div class="form-group">
            <label for="ddd_telefone_2">DDD Telefone 2:</label>
            <input type="text" id="ddd_telefone_2">
        </div>

        <div class="form-group">
            <label for="telefone_2">Telefone 2:</label>
            <input type="text" id="telefone_2">
        </div>

        <div class="form-group">
            <label for="email_1">Email 1:</label>
            <input type="text" id="email_1" required>
        </div>

        <div class="form-group">
            <label for="email_2">Email 2:</label>
            <input type="text" id="email_2">
        </div>

        <input type="button" id="cadastrarBtn" value="Cadastrar">
        
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script>
            document.getElementById("cadastrarBtn").addEventListener("click", function (event) {
            event.preventDefault()
            
            // Obtenha todos os campos dentro do formulário
            const formElements = document.getElementById("cadastroForm").elements;

            // Crie um objeto para armazenar os dados
            const formData = {};

    // Itere sobre os elementos e adicione ao objeto formData
    for (let i = 0; i < formElements.length; i++) {
        const element = formElements[i];
        // Verifique se o elemento tem um ID antes de tentar acessar seu valor
        if (element.id) {
            if (element.type === "date") {
                // Para o campo de data, obtenha o valor e formate para DDMMYYYY
                const dateParts = element.value.split("-");
                formData[element.id] = dateParts[2] + dateParts[1] + dateParts[0];
            } else {
                formData[element.id] = element.value;
            }
        }
    }

            // Verifique se todos os campos estão preenchidos
            const allFieldsFilled = Object.values(formData).every(value => value);

            if (allFieldsFilled) {
                // Enviar os dados para o arquivo dados.php
                $.ajax({
                    type: "POST",
                    url: "dados.php",
                    data: formData,
                    success: function (response) {
                        alert("Cadastro bem-sucedido.");
                        // Limpar os campos após o cadastro
                        for (let i = 0; i < formElements.length; i++) {
                            formElements[i].value = "";
                        }
                    },
                    error: function () {
                        alert("Erro no cadastro.");
                    }
                });
            } else {
                alert("Por favor, preencha todos os campos.");
            }
        });

        var cpf = document.querySelector("#cpf");

        cpf.addEventListener("input", function () {
            // Remova todos os caracteres não numéricos
            var numericCpf = cpf.value.replace(/\D/g, "");

            // Formate o CPF
            var formattedCpf = numericCpf.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/, "-");

            cpf.value = formattedCpf;
        });
    </script>
    <script>
        // Função para carregar os dados da planilha CSV
        
        function carregarDadosCidades() {
    var dadosCidades = [];

    $.ajax({
        type: "GET",
        url: "/Teste/PlanilhaCidades.csv",
        dataType: "text",
        success: function (data) {
            var linhas = data.split("\n");

            for (var i = 1; i < linhas.length; i++) {
                var colunas = linhas[i].split(",");
                var cidade_residencia = colunas[0];
                var nome = colunas[1];
                var estado_nascimento = colunas[2];

                dadosCidades.push({ label: `${nome} (${cidade_residencia})`, value: cidade_residencia, estado_nascimento: estado_nascimento });
            }

            configurarAutocomplete(dadosCidades);
        }
    });
}

        $(document).ready(function () {
    carregarDadosCidades();
});

    </script>
    <script>
        // Função para configurar o autocomplete
        function configurarAutocomplete(dadosCidades) {
    $("#cidade_residencia").autocomplete({
        source: dadosCidades,
        select: function (event, ui) {
            // Ao selecionar uma cidade, preencha automaticamente o campo
            var nomeCidade = ui.item.label.split(" ")[0]; // Obtém o nome da cidade
            $("#cidade_residencia").val(nomeCidade);
            $("#estado_nascimento").val(ui.item.estado_nascimento);
            return false;
        }
    });
}

    </script>
    <script>
        $(document).ready(function () {
            carregarDadosCidades();
        });
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>
