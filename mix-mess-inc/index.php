<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<?php $title="Lucie Freihaut | Mix Mess Inc. - Jeu vidéo 2D et site web"; include '../head.php'; ?>

<body class="">
    <?php include '../header.php'; ?>

    <main class="mt-20">
        <?php include '../backProjectsBtn.php'; ?>

        <!-- Intro -->
        <section class="relative max-w-7xl mx-auto px-6 mt-12 md:mt-20 mb-12">
            <div class="relative z-10">

                <div class="">
                    <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire • En cours</span>
                    <!-- <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire • Sept 2025 - mars 2026</span> -->
                    <h1 class="font text-3xl md:text-5xl md:text-7xl font-black mb-6 tracking-tighter leading-none">Mix Mess Inc.</h1>
                </div>

                <div class="flex flex-col md:flex-row md:text-left items-center gap-10">
                    <p class="flex-2 text-md md:text-lg text-gray-700 leading-relaxed mx-auto md:mx-0">
                        Dans le cadre de ce projet, j'ai participé au développement d'un site web sous Symfony connecté à une API Platform, assurant la communication entre le site, l'API et le jeu vidéo. Le site permet de présenter l'univers du jeu, de suivre son avancement via un blog, d'afficher les meilleurs scores et d'offrir aux joueurs la possibilité de créer leurs propres cocktails utilisables directement en jeu. L'objectif principal était de garantir une interaction fiable, sécurisée et cohérente entre les différentes plateformes.
                    </p>
                    
                    <div class="flex-1 w-full md:h-[220px]">
                        <img src="<?php echo $root; ?>images/projects/mix-mess-inc/player.png" alt="" class="w-full h-[220px] md:h-full object-contain">
                    </div>
                </div>

            </div>
        </section>

        <!-- Numbers -->
        <section class="max-w-4xl mx-auto px-6 pb-12 border-b border-gray-100">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#1D24CA] font">2''</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Durée d'une partie</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#1D24CA] font">3</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Bars</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#ED7464] font flex gap-2 justify-center items-center">3
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg> 

                    </p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Équipe</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#ED7464] font">200H</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Développement</p>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 py-16 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
                
                <!-- Process -->
                <div class="lg:sticky lg:top-32">
                    <h2 class="font text-2xl md:text-3xl font-bold mb-8">Démarche & <span class="text-[#ED7464]">Contraintes</span></h2>
                    
                    <div class="space-y-12">
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">01. Consignes site web</h3>
                            <p class="text-gray-600">
                                Certaines pages étaient imposées :
                                <br>
                                • une page de présentation du jeu (accueil),<br>
                                • une page blog,<br>
                                • une page dédiée aux meilleurs scores,<br>
                                • une fonctionnalité de communication directe avec le jeu.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">02. Blog</h3>
                            <p class="text-gray-600">
                                Pour le blog, j'ai développé une solution simple et efficace : une <b>commande Symfony</b> génère un fichier .yaml, ensuite lu dans une vue Twig. Une <b>boucle</b> permet d'afficher automatiquement les différentes avancées (jeu vidéo, site web, graphisme) sans avoir besoin de modifier la vue ou le style. Cela rend la <b>mise à jour plus rapide et plus régulière</b>.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">03. Scores</h3>
                            <p class="text-gray-600">
                                Pour les scores, les 10 meilleurs résultats sont récupérés depuis la <b>base de données</b> et affichés dans des onglets (solo/duo, semaine/global).
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">04. Créateur de cocktails</h3>
                            <p class="text-gray-600">
                                Concernant la <b>communication directe avec le jeu</b>, nous avons choisi de mettre en place un système de création de cocktails personnalisés. J'ai conçu un <b>formulaire avancé</b> basé sur plusieurs carrousels (verre, couches de couleur, topping). De nombreux tests ont été nécessaires pour obtenir un rendu réellement <b>WYSIWYG</b>, permettant au joueur de voir le résultat final en temps réel. 
                                <br>
                                🚧 Cette fonctionnalité sera mise en ligne prochainement.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">05. Style</h3>
                            <p class="text-gray-600">
                                Je voulais assurer une forte <b>cohérence</b> entre l'identité du jeu et celle du site.
                                <br>
                                Après plusieurs tests de mise en page et d'organisation du contenu, j'ai eu l'idée de transformer le site en une véritable borne d'arcade, pour renforcer l'<b>immersion</b>.
                                <br>
                                🚧 Le site étant en cours de développement, les couleurs, images et effets visuels ne sont pas définitifs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Galery -->
                <div class="space-y-8 md:h-[1800px] overflow-y-auto custom-scrollbar">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Inspiration : Purble Place Jeu Windows 7</span>
                        <img src="<?php echo $root; ?>images/projects/mix-mess-inc/purble-place.jpg" class="w-full" alt="Purble Place Jeu Windows 7">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Menu du jeu à date</span>
                        <img src="<?php echo $root; ?>images/projects/mix-mess-inc/menu.png" class="w-full" alt="Menu du jeu à date">
                    </div>
                    <!-- <div class="relative rounded-3xl overflow-hidden shadow-lg aspect-video bg-gray-200">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Spot final</span>
                        <iframe class="w-full h-full" src="" frameborder="0" allowfullscreen></iframe>
                    </div> -->
                    <div class="relative rounded-3xl overflow-hidden shadow-lg">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Blog</span>
                        <img src="<?php echo $root; ?>images/projects/mix-mess-inc/website/blog.png" class="w-full" alt="Blog du site">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Jeu utilisable depuis le site</span>
                        <img src="<?php echo $root; ?>images/projects/mix-mess-inc/website/game.png" class="w-full" alt="Jeu">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Meilleurs scores</span>
                        <img src="<?php echo $root; ?>images/projects/mix-mess-inc/website/scores.png" class="w-full" alt="Meilleurs scores">
                    </div>
                </div>
            </div>

            <!-- Tools and skills -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-8 border-t border-gray-100 pt-10">
                <div>
                    <h3 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Outils</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Symfony
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            API Platform
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Unity
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            C#
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Anatidae
                        </span>
                    </div>
                </div>
            
                <div>
                    <h3 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Compétences</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Communication api sécurisée
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Cohérence visuelle
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Création d'un blog dynamique
                        </span>
                    </div>
                </div>
            </div>

            <!-- Links -->
            <div class="mt-16 flex flex-col md:flex-row gap-10 justify-center">
                <a href="https://mmi23a08.mmi-troyes.fr/sae501" target="_blank" 
                class="flex items-center gap-3 px-8 py-6 md:py-4 bg-[#1D24CA] text-white rounded-2xl font text-sm font-bold transition-all hover:bg-[#151a96] hover:-translate-y-1 shadow-lg shadow-[#1D24CA]/20 group">
                    <svg class="w-5 h-5 fill-current transition-transform group-hover:scale-110" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Acccéder au site
                </a>
            
                <a href="https://github.com/m4rguerite/mix-mess-inc" target="_blank" 
                class="flex items-center gap-3 px-8 py-6 md:py-4 bg-white text-[#1D24CA] border-2 border-[#1D24CA] rounded-2xl font text-sm font-bold transition-all hover:bg-[#1D24CA]/5 hover:-translate-y-1 group">
                    <svg class="w-5 h-5 fill-white stroke-current stroke-2 transition-transform group-hover:scale-110" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Retrouver le projet sur GitHub
                </a>
            </div>
        </section>

        <section class="max-w-5xl mx-auto px-6 lg:px-20 py-16 bg-gray-50 rounded-[3rem]">
            <div class="text-center mb-12">
                <span class="font text-[#1D24CA] text-xs font-bold uppercase tracking-[0.3em] mb-4 block">Bilan</span>
                <h2 class="font text-3xl font-bold text-gray-900">Ce que je retiens de ce projet</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10.5 8 13l2 2.5"/><path d="m14 10.5 2 2.5-2 2.5"/><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H3a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Architecture & Vision Projet</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Projet web et jeu vidéo interconnectés, avec un site Symfony fonctionnel (structure, blog, scores) et une section “cocktails” en cours de finalisation. Ce travail m'a permis de gérer un projet complet, de la conception à l'interaction avec le jeu.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#1D24CA] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Fiabilité & Sécurité API</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Mise en place d'une communication sécurisée via API Platform, avec un service C# centralisant les appels, un système de fallback JSON et une authentification par token pour garantir la stabilité et la sécurité.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 7.38 16.75"/><path d="m16 12-4-4-4 4"/><path d="M12 16V8"/><path d="M2.5 8.875a10 10 0 0 0-.5 3"/><path d="M2.83 16a10 10 0 0 0 2.43 3.4"/><path d="M4.636 5.235a10 10 0 0 1 .891-.857"/><path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Compétences & Évolutions</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Renforcement de mes compétences en développement web, API et intégration jeu.
                        <br>
                        À venir : conception des sons et bruitages afin d'améliorer l'ambiance, le dynamisme et l'expérience arcade.
                    </p>
                </div>
            </div>
        </section>

        <?php include '../nextProjectBtn.php'; ?>

    </main>

    <?php include '../footer.php'; ?>

</body>
</html>