<?php
    if ($_SERVER['HTTP_HOST'] == 'mmi23a08.mmi-troyes.fr') {
        $root = "/portfolio/";
    } else {
        $root = "/portfolio/";
    }

    // On définit la liste des projets dans l'ordre souhaité
    $projets = [
        'mix-mess-inc' => [
            'titre' => 'Mix Mess Inc.',
            'url' => $root . 'mix-mess-inc',
            'img' => $root . 'images/projects/mix-mess-inc/menu.png'
        ],
        'shooter-vr' => [
            'titre' => 'SheepSheep',
            'url' => $root . 'shooter-vr',
            'img' => $root . 'images/projects/shooter-vr/casque_vr_right.png'
        ],
        'synk' => [
            'titre' => 'SYNK',
            'url' => $root . 'synk',
            'img' => $root . 'images/projects/synk/logo.png'
        ],
        'design-bde-2025' => [
            'titre' => 'Design BDE 2025',
            'url' => $root . 'design-bde-2025',
            'img' => $root . 'images/projects/design-bde-2025/logo.png'
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

<header class="fixed top-0 w-full z-50 flex justify-between items-center px-6 lg:px-24 py-3 bg-[#98ABEE]/20 backdrop-blur-md ">
    <a href="<?php echo $root; ?>" class="flex items-center gap-3">
        <img src="<?php echo $root; ?>images/code-xml.svg" alt="logo" class="w-8">
        <span class="font font-semibold tracking-tight">Lucie Freihaut</span>
    </a>

    <nav class="font">
        <ul class="hidden md:flex gap-8 text-[14px] uppercase tracking-wider font-medium">
            <li><a href="pdf/CV_Lucie_Freihaut.pdf" class="relative group py-1">
                CV
                <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#1D24CA] transition-all duration-300 group-hover:w-full"></span>
            </a></li>
            <li><a href="https://linkedin.com/in/lucie-freihaut" class="relative group py-1">
                LINKEDIN
                <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#1D24CA] transition-all duration-300 group-hover:w-full"></span>
            </a></li>
            <li><a href="https://github.com/lfreih" class="relative group py-1">
                GitHub
                <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#1D24CA] transition-all duration-300 group-hover:w-full"></span>
            </a></li>
        </ul>
    </nav>
</header>