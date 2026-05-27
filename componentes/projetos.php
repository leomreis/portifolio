<?php 
$projetos = [
        [
            "titulo" => "Meu portifolio",
            "descricao" => "Meu Primeiro Portifolio. Escrito em PHP e HTML",
            "data" => "14/05/2026",
            "finalizado" => true,
            "ano" => 2026,
            "stack" => ["PHP", "JavaScript", "HTML", "CSS"],
            "img" => "/logos/projeto.png"
        ],

        [
            "titulo" => "Minhas Tarefas",
            "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
            "data" => "14/05/2026",
            "finalizado" => false,
            "ano" => 2020,
            "stack" => ["PHP", "JavaScript", "HTML", "CSS"],
            "img" => "/logos/projeto.png"
        ],

        [
            "titulo" => "Controle",
            "descricao" => "Meu Controle de leitura. Escrito em PHP e HTML",
            "data" => "14/05/2026",
            "finalizado" => true,
            "ano" => 2026,
            "stack" => ["PHP", "JavaScript", "HTML", "CSS"],
            "img" => "/logos/projeto.png"
        ],
        
        [
            "titulo" => "Mais um projeto",
            "descricao" => "Projeto ainda nao finalizado. Escrito em PHP e HTML",
            "data" => "14/05/2027",
            "finalizado" => false,
            "ano" => 2020,
            "stack" => ["PHP", "JavaScript", "HTML", "CSS"],
            "img" => "/logos/projeto.png"
        ],
]
?>

<?php foreach($projetos as $projeto): ?>
<div class="bg-slate-800 rounded-lg p-3 flex items-center">
    <div class="w-1/6 flex items-center justify-center"><img class="h-24" src="<?= $projeto['img'] ?>" alt="Projeto"></div>
    <div class="w-5/6 space-y-3">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">

                <?php if($projeto['finalizado']): ?>✅<?php endif; ?>
                    
                <?= $projeto['titulo'] ?>

                <?php if($projeto['finalizado']):  ?> <span class="text-xs text-gray-400 opacity-50 italic">(entregue em <?= $projeto['data'] ?>)</span> 
                <?php else: ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">(em andamento...)</span>
                <?php endif; ?>
            </h3>
            <div class="italic space-x-1">
                <?php 
                $colors = ['fuchsia', 'lime', 'sky', 'rose', 'red', 'green', 'blue', 'yellow'];
                foreach($projeto['stack'] as $position =>$language): 
                ?>
                <span
                    class="bg-<?= $colors[$position] ?>-400 text-fuchsia-900 rounded-md px-2 py-1 font-semibold text-xs"><?=$language ?>
                </span>
                <?php endforeach; ?>
                    <!-- <span
                    class="bg-lime-400 text-lime-900 rounded-md px-2 py-1 font-semibold text-xs">JavaScript</span>
                <span
                    class="bg-sky-300 text-sky-900 rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                <span
                    class="bg-rose-300 text-rose-900 rounded-md px-2 py-1 font-semibold text-xs">CSS</span> -->
            </div>
        </div>
        <p class="leading-6">
            <?= $projeto['descricao'] ?>
        </p>
    </div>
</div>
<?php endforeach; ?>