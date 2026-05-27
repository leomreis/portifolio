 <?php 
 $itens = [
     ['href' => 'https://twitter.com', 'src' => '/logos/twitter.png', 'alt' => 'twitter', 'target' => '_blank'],
     ['href' => '', 'src' => '/logos/facebook.png', 'alt' => 'Facebook', 'target' => ''],
     ['href' => '', 'src' => '/logos/linkedin.png', 'alt' => 'LinkedIn', 'target' => ''],
     ['href' => '', 'src' => '/logos/youtube.png', 'alt' => 'youtube', 'target' => '']
 ]
 ?>
 <section class="flex gap-x-3">
     <!-- titulo/descrição -->
     <div class="w-2/3">
         <h1 class="text-3xl font-bold">Oi meu nome é Leandro</h1>
         <p class="text-xl leading-6 mt-6">
             Falando um pouco sobre mim, sou um desenvolder sla sla Falando um pouco sobre mim, sou um
             desenvolder sla sla
             Falando um pouco sobre mim, sou um desenvolder sla slaFalando um pouco sobre mim, sou um
             desenvolder sla sla
             Falando um pouco sobre mim, sou um desenvolder sla slaFalando um pouco sobre mim, sou um
             desenvolder sla sla

         </p>
         <ul class="flex gap-x-3 mt-3">
            <?php foreach($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" target="<?= $item['target'] ?>"><img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"></a></li>
            <?php endforeach; ?>
             <!-- <li><a href=""><img class="h-8 hover:animate-bounce" src="/logos/linkedin.png" alt="linkedin"></a></li>
             <li><a href=""><img class="h-8 hover:animate-bounce" src="/logos/facebook.png" alt="facebook"></a></li>
             <li><a href="https://twitter.com"><img class="h-8 hover:animate-bounce" src="/logos/twitter.png" alt="twitter"></a></li>
             <li><a href=""><img class="h-8 hover:animate-bounce" src="/logos/youtube.png" alt="youtube"></a></li> -->
         </ul>

     </div>
     <!-- Imagem -->
     <div class="w-1/3 flex items-center justify-center">
         <div><img class="h-60 -mt-4 hover:animate-pulse" src="/logos/avatar.png" alt="avatar"></div>
     </div>
 </section>