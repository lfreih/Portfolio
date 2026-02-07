<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<?php $title="Lucie Freihaut | Amara by Kenzo - Spot Publicitaire 3D"; include '../head.php'; ?>

<body class="">
    <!-- Header -->
    <?php include '../header.php'; ?>

    <main class="mt-20">
        <?php include '../backProjectsBtn.php'; ?>

        <!-- Intro -->
        <section class="relative max-w-7xl mx-auto px-6 mt-20 mb-12">
            <div class="relative z-10">

                <div class="">
                    <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire • Janv 2025</span>
                    <h1 class="font text-5xl md:text-7xl font-black mb-6 tracking-tighter leading-none">Amara by <span class="uppercase">Kenzo</span></h1>
                </div>

                <div class="flex flex-col md:flex-row md:text-left items-center gap-10">
                    <p class="flex-2 text-xl md:text-lg text-gray-700 leading-relaxed mx-auto md:mx-0">
                        Pour le lancement du parfum Amara de Kenzo, nous avons produit un spot publicitaire de 30 secondes conçu pour capturer l'essence de la joie de vivre. Notre défi était double : traduire une émotion printanière douce et lumineuse à travers une narration visuelle courte, tout en intégrant un flacon modélisé en 3D sur Blender. L'objectif final était de créer une immersion sensorielle qui marque l'esprit du spectateur, fidèle à l'univers poétique de la marque.
                    </p>
                    
                    <div class="flex-1 w-full h-[220px] p-4">
                        <img src="<?php echo $root; ?>images/projects/amara-by-kenzo/fragrance.png" alt="" class="w-full h-full object-contain">
                    </div>
                </div>

            </div>
        </section>

        <!-- Numbers -->
        <section class="max-w-4xl mx-auto px-6 pb-12 border-b border-gray-100">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-4xl font-black text-[#1D24CA] font">30s</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Format Court</p>
                </div>
                <div>
                    <p class="text-4xl font-black text-[#1D24CA] font">100+</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Prises de vue</p>
                </div>
                <div>
                    <p class="text-4xl font-black text-[#ED7464] font flex gap-2 justify-center items-center">5
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg> 

                    </p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Équipe</p>
                </div>
                <div>
                    <p class="text-4xl font-black text-[#ED7464] font">10H</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Tournage</p>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section class="max-w-7xl mx-auto px-6 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
                
                <div class="lg:sticky lg:top-32">
                    <h2 class="font text-3xl font-bold mb-8">Coulisses & <span class="text-[#ED7464]">Contraintes</span></h2>
                    
                    <div class="space-y-12">
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">01. Travail en amont</h4>
                            <p class="text-gray-600">
                                Avant le tournage, un important travail de réflexion a été mené autour du <b>découpage technique et de l'animatique</b>, afin d'optimiser l'enchaînement des plans et d'aller à l'essentiel. Chaque plan a été soigneusement choisi pour servir le message et renforcer l'identité du parfum.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">02. Modélisation 3D</h4>
                            <p class="text-gray-600">
                                Le flacon a été conçu en modélisation 3D sur <b>Blender</b>, en appliquant les connaissances acquises en cours sur les formes, les textures et les matières.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">03. Gestion de la lumière</h4>
                            <p class="text-gray-600">
                                Le tournage a présenté plusieurs contraintes techniques, notamment la gestion de la lumière. Afin de <b>recréer l'atmosphère</b> d'un lever et d'un coucher de soleil printaniers, de nombreux tests et réglages ont été nécessaires, malgré un tournage réalisé en hiver dans un appartement peu lumineux.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">04. Scène finale</h4>
                            <p class="text-gray-600">
                                J'ai également participé activement à la réalisation de la scène finale, juste avant l'apparition du flacon. Cette séquence devait être particulièrement marquante : elle a nécessité de nombreuses prises (environ une cinquantaine) afin d'obtenir le <b>rendu émotionnel et visuel recherché</b>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Galery -->
                <div class="space-y-8 h-[1200px] overflow-y-auto pr-4 custom-scrollbar">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg aspect-video bg-gray-200">
                        <span class="absolute top-4 left-4 bg-black/50 text-white/90 px-3 py-1 rounded-full text-xs">Animatique</span>
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/FiHjTaWA2ko?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg">
                        <span class="absolute top-4 left-4 bg-black/50 text-white/90 px-3 py-1 rounded-full text-xs">Modélisation Blender</span>
                        <img src="<?php echo $root; ?>images/projects/amara-by-kenzo/blender-render.png" class="w-full" alt="Modélisation Blender">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg aspect-video bg-gray-200">
                        <span class="absolute top-4 left-4 bg-black/50 text-white/90 px-3 py-1 rounded-full text-xs">Spot final</span>
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/ij9270Ufi7M?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg h-[560px]">
                        <span class="absolute top-4 left-4 bg-black/50 text-white/90 px-3 py-1 rounded-full text-xs">Coulisses</span>
                        <img src="<?php echo $root; ?>images/projects/amara-by-kenzo/backstage1.jpg" class="w-full" alt="Coulisses tournage">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg">
                        <span class="absolute top-4 left-4 bg-black/50 text-white/90 px-3 py-1 rounded-full text-xs">Coulisses</span>
                        <img src="<?php echo $root; ?>images/projects/amara-by-kenzo/backstage3.jpg" class="w-full" alt="Coulisses tournage">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg h-[360px]">
                        <span class="absolute top-4 left-4 bg-black/50 text-white/90 px-3 py-1 rounded-full text-xs">Coulisses</span>
                        <img src="<?php echo $root; ?>images/projects/amara-by-kenzo/backstage2.jpg" class="w-full" alt="Coulisses tournage">
                    </div>
                </div>
            </div>

            <!-- Tools and skills -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-8 border-t border-gray-100 pt-10">
                <div>
                    <h4 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Outils</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Blender
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Premiere Pro
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Découpage technique
                        </span>
                    </div>
                </div>
            
                <div>
                    <h4 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Compétences</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Scénarisation & Storytelling
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Stratégie de communication
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Modélisation 3D
                        </span>
                    </div>
                </div>
            </div>

            <!-- Links -->
            <!-- <div class="mt-16 flex flex-wrap gap-10 justify-center">
                <a href="URL_YOUTUBE_SPOT" target="_blank" 
                class="flex items-center gap-3 px-8 py-4 bg-[#1D24CA] text-white rounded-2xl font text-sm font-bold transition-all hover:bg-[#151a96] hover:-translate-y-1 shadow-lg shadow-[#1D24CA]/20 group">
                    <svg class="w-5 h-5 fill-current transition-transform group-hover:scale-110" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Voir le spot final
                </a>
            
                <a href="URL_YOUTUBE_ANIMATIQUE" target="_blank" 
                class="flex items-center gap-3 px-8 py-4 bg-white text-[#1D24CA] border-2 border-[#1D24CA] rounded-2xl font text-sm font-bold transition-all hover:bg-[#1D24CA]/5 hover:-translate-y-1 group">
                    <svg class="w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    Consulter l'animatique
                </a>
            </div> -->
        </section>


    <!-- <section class="max-w-6xl mx-auto px-6 py-20 border-t border-gray-100">
        <div class="bg-[#1D24CA] rounded-[3rem] p-12 text-white">
            <h2 class="font text-3xl font-bold mb-10 text-center">Bilan du projet</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md">
                    <span class="text-2xl mb-4 block">🎬</span>
                    <p class="text-sm opacity-80 uppercase font-bold mb-2 tracking-widest">Production</p>
                    <p class="text-sm">Approche globale : de l'écriture du scénario à la réalisation finale.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md">
                    <span class="text-2xl mb-4 block">💡</span>
                    <p class="text-sm opacity-80 uppercase font-bold mb-2 tracking-widest">Technique</p>
                    <p class="text-sm">Maîtrise de la mise en scène et de la gestion complexe de la lumière.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md">
                    <span class="text-2xl mb-4 block">📦</span>
                    <p class="text-sm opacity-80 uppercase font-bold mb-2 tracking-widest">3D</p>
                    <p class="text-sm">Perfectionnement sur Blender (matières, textures et intégration vidéo).</p>
                </div>
            </div>
        </div>
    </section> -->

        <section class="max-w-5xl mx-auto px-6 lg:px-20 py-16 bg-gray-50 rounded-[3rem]">
            <div class="text-center mb-12">
                <span class="font text-[#1D24CA] text-xs font-bold uppercase tracking-[0.3em] mb-4 block">Bilan</span>
                <h2 class="font text-3xl font-bold text-gray-900">Ce que je retiens de ce projet</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Vision Globale</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Maîtrise complète de la chaîne de production : de la narration publicitaire aux contraintes techniques du tournage.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#1D24CA] mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Rigueur & Précision</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Apprentissage de la préparation millimétrée en amont, cruciale pour l'efficacité d'un format court de 30s.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.364-6.364l-.707-.707M6.364 18.364l.707-.707M18.364 18.364l-.707-.707M12 18V9"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Technique</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Expertise renforcée en modélisation Blender, mise en scène et gestion complexe de la lumière naturelle.</p>
                </div>
            </div>
        </section>

        <!-- <section class="max-w-5xl mx-auto px-20 py-16 bg-gray-50 rounded-4xl text-center">
                <span class="font text-[#1D24CA] text-lg font-bold uppercase tracking-[0.3em] mb-6 block">Bilan</span>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Ce projet m'a permis de développer une approche globale de la production publicitaire, en combinant création visuelle, narration, contraintes techniques et travail d'équipe. Il m'a également appris l'importance de la préparation en amont et de la précision dans les choix artistiques, notamment dans un format aussi court que le spot publicitaire. Enfin, cette expérience a renforcé mes compétences en modélisation 3D, en mise en scène et en gestion de la lumière.
                </p>
        </section> -->

        <section class="max-w-6xl mx-auto px-6 py-24">
            <div class="border-t border-gray-100 pt-16 flex flex-col items-center">
                <p class="font text-xs uppercase tracking-[0.4em] text-gray-400 mb-8 text-center">Continuer l'exploration</p>
                
                <a href="<?php echo $prochain_projet['url']; ?>" class="group relative block w-full max-w-4xl overflow-hidden rounded-[2.5rem] bg-gray-900 aspect-[21/9] sm:aspect-[3/1]">
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



    </main>


    <?php include '../footer.php'; ?>

</body>
</html>