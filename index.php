<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifolio</title>
</head>

<body>
    <?php
    /*
        // Variavel
        $saudacao = "Oi";
        echo $saudacao;

        // Concatenação é definida com ' . '
        echo $saudacao . " , Portifolio de Leandro"

        Pode se trocar php echo po ' = ' ficando <?=  ?>

        Boleano padrao true e false, mas tem 0 ou 1 tambem 

        " ! " inverte, tipo true vira false, e virse versa. if ( ! $finalizado)

        " === " triplo ' = ' significa que a igualdade tem que ser seguida a risca (18 === 18 (true) "18" === 18 (false)) um é string 
        outro é inteiro no caso onde deu false, no == (duplo) retornaria verdadeiro nos dois casos


    */
    ?>


    <?php
    $nome = 'Leandro';
    $saudacao = 'Oi';
    $titulo = $saudacao . ' , Portifolio de ' . $nome;
    $subtitulo = 'Seja bem vindo ao meu portifolio';
    $ano = 2026;

    $projeto = 'Meu Portifolio';
    $descricao = 'Meu Primeiro Portifolio. Escrito em PHP e HTML';
    $dataDoProjeto = '14/05/2026';

    $finalizado = true;

    // Array/listas é definido por " [] "

    $projetos = [
        [
            "titulo" => "Meu portifolio",
            "descricao" => "Meu Primeiro Portifolio. Escrito em PHP e HTML",
            "data" => "14/05/2026",
            "finalizado" => true,
            "ano" => 2026,
        ],

        [
            "titulo" => "Minhas Tarefas",
            "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
            "data" => "14/05/2026",
            "finalizado" => false,
            "ano" => 2020,
        ],

        [
            "titulo" => "Controle",
            "descricao" => "Meu Controle de leitura. Escrito em PHP e HTML",
            "data" => "14/05/2026",
            "finalizado" => true,
            "ano" => 2026,
        ],
        
        [
            "titulo" => "Mais um projeto",
            "descricao" => "Projeto ainda nao finalizado. Escrito em PHP e HTML",
            "data" => "14/05/2027",
            "finalizado" => false,
            "ano" => 2020,
        ],

        // $livros = [
        //     ['nome' => 'Harry Potter'],

        //     ['nome' => 'Senhor dos Aneis'],

        //     ['nome' => 'Percy Jackson'],

        // ]



        //"Meu portifoilio",
        //"Lista de tarefas",
        //"Controle de leitura de livros"

        //"tarefas" => "Lista de Tarefas",
        //"controle" => "Controle de leitura de livros",
    ];
        function verificarSeEstaFinalizado($projeto){
        

        if ($projeto['finalizado']){
            //pode se tanto usar o echo para imprimir a função ou usar o retunr para ela retornar direto o que esta dentro da função
            //obviamente quando for chamar, se usar return, tem que dar um echo na função no momento de chama-la
            echo'<span style="color: yellow"> Finalizado </span>';
            //return '<span style="color: yellow"> Finalizado </span>';   

           }else{
            echo '<span style="color: white"> Não finalizado </span>';
            //return '<span style="color: white"> Não finalizado </span>';
           }
        //PODE SE FAZER ASSIM TAMBEM JA QUE NO CONDICIONAL COM RETURN ELE CHECA A CONDIÇÃO E RETORNA O QUE DEVE 

        // echo'<span style="color: yellow"> Finalizado </span>';
        // return '<span style="color: yellow"> Finalizado </span>';   
        // }
        // echo '<span style="color: white"> Não finalizado </span>';
        // return '<span style="color: white"> Não finalizado </span>';
        // }
        }

        //Função que vai receber projetos filtrados pelo seu status de finalizado, onde todos os projetos finalizados vao ser atribuidos
        //a um array chamado filtrado
        // function filtroProjetosFinalizados ($listaDeProjetos){
        //     $filtrados = [];

        //     foreach ($listaDeProjetos as $projeto) {
        //         if($projeto['finalizado']){
        //             $filtrados [] = $projeto;
        //         }
        //     }
        //     return $filtrados;
        // }

        //Função que filtra se tem projetos, se estao finalizados ou nao, usando a logica mais LONGA
        //  function filtrarProjetos ($listaDeProjetos, $finalizado = null){
        //     $filtrados = [];

        //     foreach ($listaDeProjetos as $projeto) {
        //         if(! is_null($finalizado) && $projeto['finalizado'] === $finalizado){
        //             $filtrados [] = $projeto;
        //         }
        //     }
        //     return $filtrados;
        // }


        //Funcão que filtra se tem projetos, se estao finalizados ou nao, usando a logica mais CURTA
        //  function filtrarProjetos ($listaDeProjetos, $finalizado = null){
        //     if(is_null($finalizado)){
        //         return $listaDeProjetos;
        //     }
        //     $filtrados = [];

        //     foreach ($listaDeProjetos as $projeto) {
        //         if($projeto['finalizado'] === $finalizado){
        //             $filtrados [] = $projeto;
        //         }
        //     }
        //     return $filtrados;
        // }

        //Funcão que filtra projetos por data
        //  function filtrarPorData ($listaDeProjetos, $dentroData = null){
        //     if(is_null($dentroData)){
        //         return $listaDeProjetos;
        //     }
        //     $filtrados = [];

        //     foreach ($listaDeProjetos as $projeto) {
        //         if($projeto['data'] === $dentroData){
        //             $filtrados [] = $projeto;
        //         }
        //     }
        //     return $filtrados;
        // }

        // Pode se atribuir uma funcao para uma variavel
        // $filtrarProjetos = function ($listaDeProjetos, $finalizado = null){
        //     if(is_null($finalizado)){
        //         return $listaDeProjetos;
        //     }
        //     $filtrados = [];

        //     foreach ($listaDeProjetos as $projeto) {
        //         if($projeto['finalizado'] === $finalizado){
        //             $filtrados [] = $projeto;
        //         }
        //     }
        //     return $filtrados;
        // };
        // Ao atribuir a função para a variavel voce pode atribuir essa variavel a outra ja com parametros
        // $projetosFiltrados = $filtrarProjetos($projetos, null);

        // function filtro ($listaDeProjetos, $chave, $valor){
            
        //     $filtrados = [];

        //     foreach ($listaDeProjetos as $projeto) {
        //         if($projeto[$chave] === $valor){
        //             $filtrados [] = $projeto;
        //         }
        //     }
        //     return $filtrados;
        // }
        

        //Trocando os nomes da variaveis do filtro para deixar mais generico e podendo ser usado para qualquer coisa
        //alem de so projetos
        //  function filtro ($itens, $chave, $valor){
            
        //     $filtrados = [];

        //     foreach ($itens as $item) {
        //         if($item[$chave] === $valor){
        //             $filtrados [] = $item;
        //         }
        //     }
        //     return $filtrados;
        // }


        //Filtro mais generico ainda porem com uma função anonima comandando e tendo flexibilidade no quesito de nao precisar mais de igualdade, a funcao
        //anonima checa quais sao so projetos antes de 2026 e retorna com os item e joga para dentro de filtrados e depois mostra
        // 
        
        //Array_filter faz exatamente o que os codigos acima fazem, ele puxa um array e usa uma função anonima para filtrar esse array
        $projetosFiltrados =  array_filter($projetos, function($projeto){
        //Gera controle, onde pode se alterar para conficionais diversos, como and, or, igual e outros
            return $projeto['ano'] < 2026;
        });
    ?>

    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $subtitulo; ?></p>
    <hr/>

    <!--FILTRO DE NOME DOS LIVROS, PERCORRE LIVROS EM BUSCA DO NOME ESPECIFICO 
    <ul>
        < ?php //foreach (filtro($livros, 'nome', 'Senhor dos Aneis') as $livro): ?>
            <li>< ?=// $livro['nome'] ?> </li>
            < ?php //endforeach; ?>
    </ul>
    <hr/> -->

    <!-- foreach serve como todo for é para percorrer algo, no caso percorre projeto que esta dentro de projetos 
     ul serve para abrir listas no HTML e li para identar lista como pontos em forma de bolinha
     nome da variavel entre {} isola o nome da variavel para colocar qualquer string ao lado-->
    <ul>
        <!-- Se trocar o $projetos por filtroProjetosFinalizados aparece so os projetos ja finalizados -->
        <!-- Padrao é $projetos as $projeto (qualquer outro que estiver é para aulas) -->
        <!-- No caso do filtrarProjetos() a primeira variavel vai indicar de onde ta tirando as informaçoes e a segunda vai definir como e qual 
             elemento vai vim, exemplo filtrarProjetos($projetos, false), retorna projetos nao finalizados -->
        <!-- Da para atribuir a função inteira para uma variavel, e consequentemente a variavel para outra variavel
             com parametros < ?php foreach ($projetosFiltrados as $projeto): ? >-->
        <?php foreach ($projetosFiltrados as $projeto): ?>
            <!--echo "<li>$projeto</li>";
            echo "<li>$projeto[0]</li>";
            echo "<li>$projeto[1]</li>";
            echo "<li>$projeto[2]</li>";
            echo "<li>{$projeto['titulo']}</li>";
            echo "<li>{$projeto['tarefas']}</li>";
            echo "<li>{$projeto['controle']}</li>";
         -->
            <div
                <?php if ((2026 - $projeto['ano']) > 2): ?>
                style="background-color: red"

                <?php else: ?>
                    style="background-color: green"
                <?php endif; ?>>

                <h2><?= $projeto['titulo'] ?></h2>

                <p><?= $projeto['descricao'] ?></p>

                <div>

                    <div><?= $projeto['data'] ?></div>
                    
                    <div><p><?= $projeto['ano'] ?></p></div>

                    
                   <div>Projeto:
                    <!-- Dando echo dentro da função -->
                    <?php verificarSeEstaFinalizado($projeto); ?>
                    <!-- Dando return dentro da função
                    < ?= verificarSeEstaFinalizado($projeto);  ? > -->
                      
                        <!-- <?php if ($projeto['finalizado']): ?>
                            <span style="color: yellow"> Finalizado </span>

                        <?php else: ?>
                            <span style="color: white"> Não finalizado </span>
                        <?php endif ?> -->
                        

                    </div> 

                </div>

                
                <!--<div>
                <?php

                if ($projeto['finalizado']) {
                    echo 'Finalizado';

                } else {
                    echo 'Nao Finalizado';
                }

                ?>

            </div>
                    -->
            </div>

        <?php endforeach; ?>

    </ul>

    <!--
      <div
        <?php if ((2026 - $ano) > 2): ?>
        style="background-color: red"

        <?php endif; ?>>
        <h2><?= $projeto ?></h2>
        <p><?= $descricao ?></p>

        
    </div>

    <div>
        <div><?= $dataDoProjeto ?></div>
    </div>


    <div>
        <?php

        if ($finalizado) {
            echo 'Finalizado';
        } else {
            echo 'Nao Finalizado';
        }

        ?>
        // Pode ser feito assim tambem é bom para colocar css quando necessario
        <?php if ($finalizado): ?> Finalizado <?php else: ?> Não Finalizado <?php endif; ?>
            
    </div>
        -->
</body>

</html>