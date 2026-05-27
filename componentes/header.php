 <?php 
    $itens = [
        ['href' => '', 'texto' => 'Projetos'],
        ['href' => '', 'texto' => 'Github'],
        ['href' => '', 'texto' => 'LinkedIn'],
        ['href' => '', 'texto' => 'Twitter']
    ]

 ?>

 <header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
     <!-- Logo -->
     <!-- xl significa extra largo -->
     <div class="font-bold text-xl text-cyan-600 ">
         Meu Portfolio ...
     </div>

     <!-- links -->
     <div class="">
         <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php foreach($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" class="hover:underline"><?= $item['texto'] ?></a></li> 
            <?php endforeach; ?>
             <!-- <li><a href="" class="hover:underline">Projetos</a></li>
             <li><a href="" class="hover:underline">Github</a></li>
             <li><a href="" class="hover:underline">LinkedIn</a></li>
             <li><a href="" class="hover:underline">Twitter</a></li> -->
         </ul>
     </div>
 </header>