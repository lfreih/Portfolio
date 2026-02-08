<?php
// On définit la liste des projets dans l'ordre souhaité
    $projets = [
        'mix-mess-inc' => [
            'titre' => 'Mix Mess Inc.',
            'url' => $root . 'mix-mess-inc',
            'img' => $root . 'images/projects/mix-mess-inc/menu.png'
        ],
        'sheepsheep' => [
            'titre' => 'SheepSheep',
            'url' => $root . 'sheepsheep',
            'img' => $root . 'images/projects/sheepsheep/casque_vr_right.png'
        ],
        'synk' => [
            'titre' => 'SYNK',
            'url' => $root . 'synk',
            'img' => $root . 'images/projects/synk/logo.png'
        ],
        'design-bde-2025' => [
            'titre' => 'Design BDE 2025',
            'url' => $root . 'design-bde-2025',
            'img' => $root . 'images/projects/design-bde-2025/logo.svg'
        ],
        'clairtemps' => [
            'titre' => 'Clairtemps',
            'url' => $root . 'clairtemps',
            'img' => $root . 'images/projects/clairtemps/desktop-favorites.png'
        ],
        'psychimeria' => [
            'titre' => 'Psychiméria',
            'url' => $root . 'psychimeria',
            'img' => $root . 'images/projects/psychimeria/title.png'
        ],
        'amara-by-kenzo' => [
            'titre' => 'Amara by KENZO',
            'url' => $root . 'amara-by-kenzo',
            'img' => $root . 'images/projects/amara-by-kenzo/blender-render.png'
        ],
    ];

    // On récupère le nom du dossier actuel pour savoir sur quel projet on est
    // basename(dirname(...)) récupère "kenzo-amara" si tu es dans /portfolio/kenzo-amara/index.php
    $projet_actuel = basename(dirname($_SERVER['PHP_SELF']));

    // On cherche l'index du projet suivant
    $cles = array_keys($projets);
    $index_actuel = array_search($projet_actuel, $cles);
    $index_suivant = ($index_actuel + 1) % count($cles); // Le % permet de revenir au premier projet à la fin

    $prochain_projet = $projets[$cles[$index_suivant]];
?>

<section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
    <div class="border-t border-gray-100 pt-16 flex flex-col items-center">
        <p class="font text-xs uppercase tracking-[0.4em] text-gray-400 mb-8 text-center">Continuer l'exploration</p>
        
        <a href="<?php echo $prochain_projet['url']; ?>" class="group relative block w-full max-w-4xl overflow-hidden rounded-[2.5rem] bg-gray-900 aspect-[9/9] md:aspect-[21/9] sm:aspect-[3/1]">
            <img src="<?php echo $prochain_projet['img']; ?>" 
                alt="Vers <?php echo $prochain_projet['titre']; ?>" 
                class="absolute inset-0 w-full h-full object-cover opacity-40 grayscale transition-all duration-700 group-hover:scale-110 group-hover:opacity-60 group-hover:grayscale-0">
            
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-8">
                <span class="font text-[10px] font-bold uppercase tracking-widest opacity-60 mb-2">Projet Suivant</span>
                <h3 class="font text-3xl md:text-5xl font-black uppercase tracking-tighter transition-transform duration-500 group-hover:translate-y-[-5px]">
                    <?php echo $prochain_projet['titre']; ?>
                </h3>
                
                <div class="mt-6 flex items-center gap-2 opacity-0 translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                    <span class="font text-[10px] font-bold uppercase tracking-widest">Découvrir le projet</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </div>
            </div>
        </a>
    </div>
</section>