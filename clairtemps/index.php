<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<?php $title="Lucie Freihaut | Clairtemps - Site des prévisions météo personnalisées"; include '../head.php'; ?>

<body class="">
    <!-- Header -->
    <?php include '../header.php'; ?>

    <main class="mt-20">
        <?php include '../backProjectsBtn.php'; ?>

        <!-- Intro -->
        <section class="relative max-w-7xl mx-auto px-6 mt-20 mb-12">
            <div class="relative z-10">

                <div class="">
                    <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire • Juin 2025</span>
                    <h1 class="font text-5xl md:text-7xl font-black mb-6 tracking-tighter leading-none">Clairtemps</h1>
                </div>

                <div class="flex flex-col md:flex-row md:text-left items-center gap-10">
                    <p class="flex-2 text-xl md:text-lg text-gray-700 leading-relaxed mx-auto md:mx-0">
                        Dans le cadre de ce projet universitaire, nous avons développé une application web de prévisions météorologiques affichant des données en temps réel, par heure et sur 15 jours, à partir de l'API OpenWeatherMap. L'application repose sur une architecture backend en Symfony et un frontend en Vue.js, avec une attention particulière portée à l'UI, à l'UX et à l'optimisation des performances. L'objectif était de concevoir une interface claire, moderne et agréable à utiliser, dans des conditions proches d'un projet professionnel.
                    </p>
                    
                    <div class="flex-1 w-full h-[60px]">
                        <img src="<?php echo $root; ?>images/projects/clairtemps/logo.png" alt="" class="w-full h-full object-contain">
                    </div>
                </div>

            </div>
        </section>

        <!-- Numbers -->
        <section class="max-w-4xl mx-auto px-6 pb-12 border-b border-gray-100">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-4xl font-black text-[#1D24CA] font">15J</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Prévisions</p>
                </div>
                <div>
                    <p class="text-4xl font-black text-[#1D24CA] font">1</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">API externe</p>
                </div>
                <div>
                    <p class="text-4xl font-black text-[#ED7464] font flex gap-2 justify-center items-center">3
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg> 

                    </p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Équipe</p>
                </div>
                <div>
                    <p class="text-4xl font-black text-[#ED7464] font">30H</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mt-2">Développement</p>
                </div>
            </div>
        </section>


        <section class="max-w-7xl mx-auto px-6 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
                
                <!-- Process -->
                <div class="lg:sticky lg:top-32">
                    <h2 class="font text-3xl font-bold mb-8">Démarche & <span class="text-[#ED7464]">Contraintes</span></h2>
                    
                    <div class="space-y-12">
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">01. Réflexion sur le front</h4>
                            <p class="text-gray-600">
                                Après plusieurs jours de travail sur le backend, nous avons envisagé d'abandonner Vue.js au profit de Twig, jugé plus simple. Cependant, l'accent du projet étant mis sur <b>l'UI et l'UX</b>, l'utilisation d'un framework <b>réactif</b> s'est imposée comme indispensable. Nous avons donc maintenu Vue.js malgré la complexité supplémentaire.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">02. API externe</h4>
                            <p class="text-gray-600">
                                Pour l'accès aux données météo, j'ai créé un compte étudiant sur <b>OpenWeatherMap</b>, permettant pendant six mois l'accès à davantage de données qu'un compte gratuit. Malgré cela, certaines limitations de l'API (absence d'alertes météo et de détails avancés des prévisions) ont directement influencé nos <b>choix d'interface</b> et de fonctionnalités.
                            </p>
                            <br>
                            <p class="text-gray-600">
                                J'ai pris en charge la mise en place d'un <b>service côté backend Symfony</b>, permettant d'appeler les routes de l'API OpenWeatherMap et d'exposer nos propres routes au frontend. Côté frontend, j'ai intégré les <b>requêtes API</b> afin de récupérer et afficher les données météo.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">03. Développement Frontend</h4>
                            <p class="text-gray-600">
                                Grâce à Vue.js, j'ai pu concevoir des composants réutilisables et mettre en place un <b>store Pinia</b> pour centraliser et partager les données météo entre les composants. Cette étape s'est révélée particulièrement exigeante, Pinia étant une technologie que j'utilisais pour la première fois dans un contexte réel, avec une volonté de rendre les <b>méthodes génériques et réutilisables</b>.
                            </p>
                            <br>
                            <p class="text-gray-600">
                                Par la suite, je me suis concentrée sur le frontend, afin d'éviter les conflits liés au travail simultané sur le backend. J'ai ainsi développé plusieurs composants permettant :
                                <br>
                                • l'affichage de la météo <b>en direct</b> pour une ville,<br>
                                • la consultation des <b>prévisions horaires</b>,<br>
                                • l'affichage des <b>prévisions sur 15 jours</b> via une interaction utilisateur.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2 uppercase tracking-wide">04. Optimisation</h4>
                            <p class="text-gray-600">
                                Enfin, afin de limiter le nombre de requêtes vers l'API externe (un enjeu important dans ce type de projet), j'ai implémenté un système de <b>mise en cache</b>, permettant d'optimiser les appels externes et de réduire la charge sur l'API ainsi que sur le serveur backend.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Galery -->
                <div class="space-y-8 h-[1600px] overflow-y-auto pr-4 custom-scrollbar">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page d'accueil</span>
                        <img src="<?php echo $root; ?>images/projects/clairtemps/desktop-home.png" class="w-full" alt="Page d'accueil sur Desktop">
                    </div>
                    <div class="columns-2 items-start gap-6">
                        <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100 mb-6">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page d'inscription</span>
                            <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-register.png" class="w-full" alt="Page d'inscription sur mobile">
                        </div>
                        
                        
                        <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page de favoris</span>
                            <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-favorites.png" class="w-full" alt="Page de favoris sur mobile">
                        </div>
                        
                        <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100 mb-6">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page de prévisions Non connecté</span>
                            <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-disconnected-forcast.png" class="w-full" alt="Page de prévisions Non connecté sur mobile">
                        </div>
                        
                        <div class="relative overflow-hidden rounded-3xl shadow-lg border border-gray-100">
                            <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Page de résultat de recherche</span>
                            <img src="<?php echo $root; ?>images/projects/clairtemps/mobile-result.png" class="w-full" alt="Page de résultat de recherche sur mobile">
                        </div>
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100">
                        <span class="absolute top-4 left-4 bg-black/80 text-white/90 px-3 py-1 rounded-full text-xs">Desktop - Page de favoris</span>
                        <img src="<?php echo $root; ?>images/projects/clairtemps/desktop-favorites.png" class="w-full" alt="Page de favoris sur desktop">
                    </div>
                </div>
            </div>

            <!-- Tools and skills -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-8 border-t border-gray-100 pt-10">
                <div>
                    <h4 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Outils</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Symfony
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Vue.js
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            Pinia
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#1D24CA]/5 text-[#1D24CA] text-xs font-bold border border-[#1D24CA]/10">
                            API externe
                        </span>
                    </div>
                </div>
            
                <div>
                    <h4 class="font text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-4">Compétences</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Architecture modulaire
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Responsive design
                        </span>
                        <span class="px-4 py-2 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold border border-[#ED7464]/10">
                            Optimisation
                        </span>
                    </div>
                </div>
            </div>

            <!-- Links -->
            <div class="mt-16 flex flex-wrap gap-10 justify-center">
                <a href="https://mmi23a08.sae401.ovh" target="_blank" 
                class="flex items-center gap-3 px-8 py-4 bg-[#1D24CA] text-white rounded-2xl font text-sm font-bold transition-all hover:bg-[#151a96] hover:-translate-y-1 shadow-lg shadow-[#1D24CA]/20 group">
                    <svg class="w-5 h-5 fill-current transition-transform group-hover:scale-110" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Acccéder au site
                </a>
            
                <a href="https://github.com/m4rguerite/sae401" target="_blank" 
                class="flex items-center gap-3 px-8 py-4 bg-white text-[#1D24CA] border-2 border-[#1D24CA] rounded-2xl font text-sm font-bold transition-all hover:bg-[#1D24CA]/5 hover:-translate-y-1 group">
                    <!-- <svg class="w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg> -->
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
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10.5 8 13l2 2.5"/><path d="m14 10.5 2 2.5-2 2.5"/><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Architecture & Environnement</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Développement d'une application météo en Vue.js avec Pinia et backend Symfony, connectée à une API externe. Travail réalisé dans des conditions proches d'un projet réel, favorisant l'autonomie et la rigueur.
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#1D24CA] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><line x1="12" x2="12" y1="8" y2="16"/><line x1="8" x2="16" y1="12" y2="12"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Performance & Expérience Utilisateur</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Conception d'une interface minimaliste et modulaire, prise en compte des limites de Bootstrap, et mise en place d'un système de cache pour améliorer les performances et la scalabilité.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 transition-transform hover:-translate-y-1">
                    <div class="text-[#ED7464] mb-4">
                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 7.38 16.75"/><path d="m16 12-4-4-4 4"/><path d="M12 16V8"/><path d="M2.5 8.875a10 10 0 0 0-.5 3"/><path d="M2.83 16a10 10 0 0 0 2.43 3.4"/><path d="M4.636 5.235a10 10 0 0 1 .891-.857"/><path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Améliorations & Perspectives</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Évolutions envisagées : back-office utilisateur, géolocalisation, refactorisation du code, intégration d'alertes météo, gestion du mot de passe oublié et renforcement des tests.
                    </p>
                </div>
            </div>
        </section>

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