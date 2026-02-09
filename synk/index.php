<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<?php $title="Lucie Freihaut | SYNK - Interface moderne pour réseau social avec API Platform"; include '../head.php'; ?>

<body class="">
    <?php include '../header.php'; ?>

    <main class="mt-20">
        <?php include '../backProjectsBtn.php'; ?>

        <!-- Intro -->
        <section class="relative max-w-7xl mx-auto px-6 mt-12 md:mt-20 mb-12">
            <div class="relative z-10">

                <div class="">
                    <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire • En cours</span>
                    <!-- <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire • Oct 2025 - Mars 2026</span> -->
                    <h1 class="font text-4xl md:text-7xl font-black mb-6 tracking-tighter leading-none">SYNK</h1>
                </div>

                <div class="flex flex-col md:flex-row md:text-left items-center gap-10">
                    <p class="flex-2 text-md md:text-lg text-gray-700 leading-relaxed mx-auto md:mx-0">
                        Ce projet consiste à développer une interface moderne, ergonomique et accessible pour un réseau social, connectée à une base de données existante via une API (API Platform). J'ai choisi Nuxt pour découvrir le framework et renforcer mes compétences front, ainsi que Tailwind CSS pour sa modularité et sa rapidité de mise en forme.
                    </p>
                    
                    <div class="flex-1 w-full h-[160px] flex items-center justify-center border border-2 border-dashed border-gray-200 bg-gray-100 rounded-3xl p-6">
                        <p class="text-gray-500 uppercase text-sm">
                            A venir
                        </p>
                    </div>
                    <!-- <div class="flex-1 w-full md:h-[200px]">
                        <img src="<?php echo $root; ?>images/projects/synk/logo.png" alt="Logo de SYNK" class="w-full h-[220px] md:h-full object-cover object-top">
                    </div> -->
                </div>

            </div>
        </section>

        <!-- Numbers -->
        <section class="max-w-4xl mx-auto px-6 pb-12 border-b border-gray-100">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#1D24CA] font">A à Z</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Interface</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#1D24CA] font">1</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">BDD Fournie</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#ED7464] font">SOLO
                    </p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Équipe</p>
                </div>
                <div>
                    <p class="text-3xl md:text-4xl font-black text-[#ED7464] font">40H+</p>
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
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">01. Consignes & Intention</h3>
                            <p class="text-gray-600">
                                L'objectif est de créer une <b>application web complète</b> permettant aux utilisateurs de :
                                <br>
                                • s'inscrire et se connecter via une authentification par token,<br>
                                • accéder à un profil utilisateur simple et clair,<br>
                                • naviguer facilement dans l'application,<br>
                                • consulter et gérer des discussions et des publications.
                                <br>
                                Le projet vise autant l'<b>aspect fonctionnel</b> (routes, appels API, gestion des données) que l'<b>expérience utilisateur</b> (interface fluide, responsive, accessible).
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">02. Méthodologie</h3>
                            <p class="text-gray-600">
                                La base de données étant fournie, l'application repose sur les <b>routes exposées par API Platform</b>. J'ai commencé par me familiariser avec les appels API liés aux discussions afin de comprendre comment récupérer et afficher des données en Nuxt.
                            </p>
                            <br>
                            <p class="text-gray-600">
                                Une fois cette étape validée, j'ai repris le projet dans l'<b>ordre logique</b> :
                                <br>
                                • mise en place de l'authentification par token,<br>
                                • tests des routes d'inscription et de connexion,<br>
                                • intégration de la navigation et du profil utilisateur.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">03. Détection de bugs</h3>
                            <p class="text-gray-600">
                                Durant le développement, j'ai identifié plusieurs incohérences et problèmes côté back :
                                <br>
                                • les consignes données pour la route `/register` ne correspondaient pas au fonctionnement réel,<br>
                                • une boucle infinie apparaissait lors de la modification des informations utilisateur.
                                <br>
                                Après vérifications et tests répétés, j'ai fait <b>remonter ces problèmes</b> au professeur afin de permettre leur correction.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2 uppercase tracking-wide">04. Suite du Développement</h3>
                            <div class="flex items-center justify-center border border-2 border-dashed border-gray-200 bg-gray-100 rounded-3xl p-6">
                                <p class="text-gray-500 uppercase text-sm">
                                    A venir
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galery -->
                <div class="space-y-8 md:h-[1000px] overflow-y-auto custom-scrollbar">
                    <!-- <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Logo</span>
                        <img src="<?php echo $root; ?>images/projects/psychimeria/title.png" class="w-full" alt="Logo">
                    </div> -->
                    <div class="md:columns-2 items-start gap-6">
                        <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100 mb-6 bg-gray-100 h-[600px] flex items-center justify-center border-2 border-dashed border-gray-200">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page de connexion</span>
                            <!-- <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-register.png" class="w-full" alt="Page de connexion sur mobile"> -->
                            <span class="uppercase text-gray-500">A venir</span>
                        </div>
                        <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100 mb-6 bg-gray-100 h-[600px] flex items-center justify-center border-2 border-dashed border-gray-200">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Profile utilisateur</span>
                            <!-- <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-register.png" class="w-full" alt="Profile utilisateur sur mobile"> -->
                            <span class="uppercase text-gray-500">A venir</span>
                        </div>
                        
                        <!-- <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page de favoris</span>
                            <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-favorites.png" class="w-full" alt="Page de favoris sur mobile">
                        </div>
                        <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page de favoris</span>
                            <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-favorites.png" class="w-full" alt="Page de favoris sur mobile">
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Tools and skills -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-8 border-t border-gray-100 pt-10">
                <div>
                    <h3 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Outils</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Nuxt
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Tailwind CSS
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            API Platform
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Postman
                        </span>
                    </div>
                </div>
            
                <div>
                    <h3 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Compétences</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            UX Design
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Développement Front-end
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Intégration API
                        </span>
                    </div>
                </div>
            </div>

            <!-- Links -->
            <div class="mt-16 flex flex-col md:flex-row gap-10 justify-center">
                <!-- <a href="" target="_blank" 
                class="flex items-center gap-3 px-8 py-6 md:py-4 bg-[#1D24CA] text-white rounded-2xl font text-sm font-bold transition-all hover:bg-[#151a96] hover:-translate-y-1 shadow-lg shadow-[#1D24CA]/20 group">
                    <svg class="w-5 h-5 fill-current transition-transform group-hover:scale-110" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Acccéder à la BD en ligne
                </a> -->
                <a href="https://github.com/lfreih/wr505-reseau-social" target="_blank" 
                class="flex items-center gap-3 px-8 py-4 bg-white text-[#1D24CA] border-2 border-[#1D24CA] rounded-2xl font text-sm font-bold transition-all hover:bg-[#1D24CA]/5 hover:-translate-y-1 group">
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
                <h2 class="font text-2xl md:text-3xl font-bold text-gray-900">Ce que je retiens de ce projet</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10.656V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12.344"/><path d="m9 11 3 3L22 4"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Progression & Accomplissements</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Fonctions essentielles terminées : inscription, connexion, navigation et gestion du profil utilisateur. Ces bases assurent la stabilité et la cohérence de l'application.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#1D24CA] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19h8"/><path d="m4 17 6-6-6-6"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Développement & Interaction</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        En cours : discussions et messages avec affichage, création, modification, liste des membres et recherche de messages. Ces fonctionnalités visent à favoriser l'échange et l'engagement des utilisateurs.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 7.38 16.75"/><path d="m16 12-4-4-4 4"/><path d="M12 16V8"/><path d="M2.5 8.875a10 10 0 0 0-.5 3"/><path d="M2.83 16a10 10 0 0 0 2.43 3.4"/><path d="M4.636 5.235a10 10 0 0 1 .891-.857"/><path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Perspectives & Évolution</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        À finaliser : publications, réactions et upload d'images pour plus de personnalisation. L'interface sera entièrement responsive, avec optimisation pour tablette et desktop.
                    </p>
                </div>
            </div>
        </section>

        <?php include '../nextProjectBtn.php'; ?>
    </main>

    <?php include '../footer.php'; ?>
</body>
</html>