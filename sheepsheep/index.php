<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<?php $title="Lucie Freihaut | SheepSheep - Jeu de shooter 3D"; include '../head.php'; ?>

<body class="">
    <?php include '../header.php'; ?>

    <main class="mt-20">
        <?php include '../backProjectsBtn.php'; ?>

        <!-- Intro -->
        <section class="relative max-w-7xl mx-auto px-6 mt-12 md:mt-20 mb-12">
            <div class="relative z-10">

                <div class="">
                    <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire • En cours</span>
                    <h1 class="font text-4xl md:text-7xl font-black mb-6 tracking-tighter leading-none">SheepSheep</h1>
                </div>

                <div class="flex flex-col md:flex-row md:text-left items-center gap-10">
                    <p class="flex-2 text-md md:text-lg text-gray-700 leading-relaxed mx-auto md:mx-0">
                        Ce projet a pour objectif de nous initier rapidement au développement VR sur casque, en parallèle du projet principal du semestre (Mix Mess Inc.), sans empiéter sur son avancement. Il consiste à concevoir une première expérience VR fonctionnelle, basée sur une boucle de gameplay simple, afin de découvrir concrètement les interactions en réalité virtuelle (mains, saisie d'objets), les contraintes techniques liées au casque, ainsi que la logique de jeu autour des armes, des cibles et du score.
                    </p>
                    
                    <div class="flex-1 w-full h-[160px] flex items-center justify-center border border-2 border-dashed border-gray-200 bg-gray-100 rounded-3xl p-6">
                        <p class="text-gray-500 uppercase text-sm">
                            A venir
                        </p>
                    </div>
                    <!-- <div class="flex-1 w-full md:h-[200px]">
                        <img src="<?php echo $root; ?>images/projects/sheepsheep/bow.png" alt="" class="w-full h-[220px] md:h-full object-contain">
                    </div> -->
                </div>

            </div>
        </section>

        <!-- Numbers -->
        <section class="max-w-4xl mx-auto px-6 pb-12 border-b border-gray-100">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#1D24CA] font">10+</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Moutons</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#1D24CA] font">1</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Arme</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#ED7464] font flex gap-2 justify-center items-center">2
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg> 

                    </p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Équipe</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#ED7464] font">40H</p>
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
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">01. Répartition des tâches & Base</h3>
                            <p class="text-gray-600">
                                Dès le début du projet, nous nous sommes <b>réparties le travail</b> en deux grandes parties : la logique de l'arme et la logique de l'environnement. Je me suis concentrée sur la partie arme, en prenant en charge tout le système lié à son utilisation.
                                <br>
                                J'ai commencé par intégrer les <b>mains</b>, leurs <b>animations</b>, ainsi que le <b>XR Device Simulator</b>, afin de pouvoir tester directement sur PC. Cet outil s'est révélé très utile pour le <b>prototypage</b> rapide, mais il reste limité : il ne permet pas de tester une boucle de gameplay VR complète comme sur un véritable casque.
                                <br>
                                Mon rôle consistait à développer l'ensemble des <b>mécaniques liées à l'arme</b> : la prise en main, le tir de projectiles, la gestion des munitions, le rechargement et le comptage des points.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">02. Développement du concept</h3>
                            <p class="text-gray-600">
                                Après réflexion, j'ai choisi de créer un <b>arc</b>, car il correspondait davantage à l'<b>univers du jeu</b> et offrait un <b>potentiel d'évolution</b> intéressant si le projet avait disposé de plus de temps. Pour l'intégration, je me suis appuyée sur plusieurs tutoriels, parfois anciens ou partiellement adaptés, ainsi que sur des assets qui se sont révélés contraignants.
                            </p>
                            <br>
                            <p class="text-gray-600">
                                Afin d'avancer plus efficacement, j'ai finalement décidé de remplacer l'asset initial par un arc plus simple et plus cohérent avec l'ambiance du projet. J'ai également retravaillé le modèle avec <b>ProBuilder</b>, notamment en supprimant la corde inutile, en corrigeant l'orientation de l'axe Z pour assurer un bon alignement, et en mettant en place la corde via un <b>LineRenderer</b>, avec un axe restreint pour mieux contrôler son <b>comportement visuel</b>.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">03. Suite du Développement</h3>
                            <div class="flex items-center justify-center border border-2 border-dashed border-gray-200 bg-gray-100 rounded-3xl p-6">
                                <p class="text-gray-500 uppercase text-sm">
                                    A venir
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galery -->
                <div class="space-y-8 md:h-[1200px] overflow-y-auto custom-scrollbar">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Inspiration : Jeu Nintendo WII Sport Motion</span>
                        <img src="<?php echo $root; ?>images/projects/sheepsheep/wii-play-motion.jpg" class="w-full" alt="Partie en cours Jeu Nintendo WII Sport Motion">
                    </div>
                    <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100 mb-6 bg-gray-100 h-[360px] flex items-center justify-center border-2 border-dashed border-gray-200">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Asset de l'arc</span>
                        <!-- <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-register.png" class="w-full" alt="Asset de l'arc"> -->
                        <span class="uppercase text-gray-500">A venir</span>
                    </div>
                    <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100 mb-6 bg-gray-100 h-[360px] flex items-center justify-center border-2 border-dashed border-gray-200">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Vidéo d'une partie</span>
                        <!-- <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-register.png" class="w-full" alt="Vidéo d'une partie sur mobile"> -->
                        <span class="uppercase text-gray-500">A venir</span>
                    </div>
                </div>
            </div>

            <!-- Tools and skills -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-8 border-t border-gray-100 pt-10">
                <div>
                    <h3 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Outils</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Unity
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            C#
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            OpenXR
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Oculus Quest 2
                        </span>
                    </div>
                </div>
            
                <div>
                    <h3 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Compétences</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Conception de jeux vidéo en VR
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Physique et mécaniques de tir en VR
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Boucle de gameplay
                        </span>
                    </div>
                </div>
            </div>

            <!-- Links -->
            <!-- <div class="mt-16 flex flex-col md:flex-row gap-10 justify-center">
                <a href="" target="_blank" 
                class="flex items-center gap-3 px-8 py-6 md:py-4 bg-[#1D24CA] text-white rounded-2xl font text-sm font-bold transition-all hover:bg-[#151a96] hover:-translate-y-1 shadow-lg shadow-[#1D24CA]/20 group">
                    <svg class="w-5 h-5 fill-current transition-transform group-hover:scale-110" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Voir une partie en vidéo
                </a>
            </div> -->
        </section>

        <section class="max-w-5xl mx-auto px-6 lg:px-20 py-16 bg-gray-50 rounded-[3rem]">
            <div class="text-center mb-12">
                <span class="font text-[#1D24CA] text-xs font-bold uppercase tracking-[0.3em] mb-4 block">Bilan</span>
                <h2 class="font text-2xl md:text-3xl font-bold text-gray-900">Ce que je retiens de ce projet</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3h4v4"/><path d="M18.575 11.082a13 13 0 0 1 1.048 9.027 1.17 1.17 0 0 1-1.914.597L14 17"/><path d="M7 10 3.29 6.29a1.17 1.17 0 0 1 .6-1.91 13 13 0 0 1 9.03 1.05"/><path d="M7 14a1.7 1.7 0 0 0-1.207.5l-2.646 2.646A.5.5 0 0 0 3.5 18H5a1 1 0 0 1 1 1v1.5a.5.5 0 0 0 .854.354L9.5 18.207A1.7 1.7 0 0 0 10 17v-2a1 1 0 0 0-1-1z"/><path d="M9.707 14.293 21 3"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Avancement & Démarche</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Intégration progressive du système de base de l'arme, avec une avancée étape par étape afin de poser des bases solides avant d'enrichir le gameplay.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#1D24CA] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-4a2 2 0 0 1-1.6-.8l-1.6-2.13a1 1 0 0 0-1.6 0L9.6 17.2A2 2 0 0 1 8 18H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Contraintes & Expérimentation</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Travail réalisé malgré les limites du simulateur et les contraintes liées aux assets, ce qui m'a permis d'expérimenter les spécificités techniques de la VR.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 7.38 16.75"/><path d="m16 12-4-4-4 4"/><path d="M12 16V8"/><path d="M2.5 8.875a10 10 0 0 0-.5 3"/><path d="M2.83 16a10 10 0 0 0 2.43 3.4"/><path d="M4.636 5.235a10 10 0 0 1 .891-.857"/><path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Prochaines Étapes & Objectifs</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        À venir : comptage des points, détection des cibles, intégration complète dans l'environnement et création d'une boucle de gameplay testable et cohérente.
                    </p>
                </div>
            </div>
        </section>

        <?php include '../nextProjectBtn.php'; ?>
    </main>

    <?php include '../footer.php'; ?>
</body>
</html>