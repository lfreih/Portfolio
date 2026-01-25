<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<?php $title="Mix Mess Inc - Portfolio Lucie Freihaut"; include '../head.php'; ?>

<body class="">
    <!-- Header -->
    <?php include '../header.php'; ?>

    <main class="mt-20">
        <?php include '../backProjectsBtn.php'; ?>

        <!-- Intro -->
        <section class="relative max-w-6xl mx-auto px-6 mt-20 mb-20">
            <div class="relative z-10">

                <div class="">
                    <span class="font text-[#ED7464] font-bold text-xs uppercase tracking-[0.3em] mb-4 block">Projet Universitaire</span>
                    <h1 class="font text-5xl md:text-7xl font-black mb-6 tracking-tighter leading-none">Mix Mess Inc.</h1>
                </div>

                <div class="flex text-center md:text-left gap-12">
                    <p class="flex-2 text-xl md:text-xl text-gray-700 leading-relaxed mx-auto md:mx-0">
                        Développer un jeu de type arcade sur la borne MMI avec des parties courtes, ainsi qu'un site web avec une présentation du jeu, les meilleurs scores et une fonctionnalité qui permet d'intéragir avec le jeu
                    </p>

                    <div class="flex-1 grid grid-cols-2 gap-8 md:border-l border-gray-200 pl-0 md:pl-8 w-full md:w-auto">
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Rôle</p>
                            <p class="font-medium">Développeuse back <br> (Unity et web)</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Durée</p>
                            <p class="font-medium">Sept 2025 - mars 2026 <br> (Équipe de 3)</p>
                        </div>
                        <div class="md:col-span-2">
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Stack</p>
                            <p class="font-medium text-[#1D24CA]">Symfony, API Platform - Unity, C#, OpenXR</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <div class="rounded-[2.5rem] overflow-hidden shadow-2xl bg-gray-100 aspect-video">
                <img src="../images/projets/mix_mess_inc/menu.png" class="grayscale-100 w-full h-full object-cover hover:grayscale-0">
            </div> -->
        </section>

        <!-- Links -->
        <section class="mb-20">
            <div class="max-w-6xl mx-auto px-6 flex justify-center gap-12">

                <div class="font flex flex-col sm:flex-row items-center justify-center gap-8">
                    <a href="#realisation" class="flex items-center px-8 py-3 bg-[#1D24CA] text-white rounded-full h-full">
                        Découvrir plus en détails
                    </a>

                    <a href="https://mmi23a08.mmi-troyes.fr/sae501" target="_blank" title="Site web du jeu" class="flex items-center px-8 py-3 border-3 border-[#1D24CA] text-[#1D24CA] rounded-full">
                        Visiter le site web
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1D24CA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                </div>

            </div>
        </section>

        <section id="realisation" class="max-w-6xl mx-auto px-6 py-20 border-t border-gray-100">
            
            <h2 class="font text-4xl font-bold mb-12 flex items-center gap-4">
                <span class="text-[#1D24CA]">01.</span> Réalisation
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 auto-rows-[280px]">
                
                <div class="bg-white border border-gray-100 rounded-3xl p-8 flex flex-col justify-between shadow-sm">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">Concept</span>
                    <p class="text-lg font-medium leading-relaxed mb-4">
                        Wireframing 3D pour les interactions utilisateur et le placement des éléments dans l'environnement VR.
                    </p>
                    <div class="flex items-center gap-3 text-sm text-gray-500">
                        <svg class="w-5 h-5 text-[#ED7464]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-1.25-3M15 10V5.375a2.25 2.25 0 00-4.5 0V10M12 21V3"/></svg>
                        Design d'interaction
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden shadow-sm">
                    <img src="../images/projets/mix_mess_inc/purble-place.jpg" alt="Jeu Windows 7 Purble Place" class="grayscale-50 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                        <p class="text-white text-sm">Inspiration : Jeu Windows 7 Purble Place</p>
                    </div>
                </div>
                
                <!-- <div class="relative rounded-3xl overflow-hidden shadow-sm">
                    <img src="../images/projets/mix_mess_inc/inspiration.jpg" alt="Jeu Nintendo WII Sport Motion" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                        <p class="text-white text-xs opacity-80">Inspiration : Jeu Nintendo WII Sport Motion</p>
                    </div>
                </div> -->

                <div class="md:col-span-2 relative bg-[#1D24CA] rounded-3xl p-8 text-white overflow-hidden shadow-lg">
                    <span class="absolute right-0 bottom-0 text-9xl opacity-10 leading-none select-none font">C#</span>
                    <span class="text-[10px] font-bold uppercase tracking-widest opacity-60 mb-4 block">2. Développement Core C#</span>
                    <h3 class="font text-2xl font-bold mb-4">Physique des projectiles & Rechargement</h3>
                    <p class="text-sm opacity-80 max-w-2xl">
                        Implémentation d'un système de balistique complexe pour les tirs, avec prise en compte de la gravité et de la vélocité. 
                        Développement d'un mécanisme de rechargement interactif et réaliste basé sur des triggers physiques.
                    </p>
                </div>

                <div class="bg-white border border-gray-100 rounded-3xl p-8 flex flex-col justify-between shadow-sm">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">3. Optimisation & Performance</span>
                    <p class="text-lg font-medium leading-relaxed mb-4">
                        Réduction du Draw Call, gestion du LOD (Level of Detail) pour maintenir un framerate élevé et constant.
                    </p>
                    <div class="flex items-center gap-3 text-sm text-gray-500">
                        <svg class="w-5 h-5 text-[#1D24CA]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        Smooth Framerate
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden shadow-sm">
                    <img src="images/projets/shooter-vr-optimisation.jpg" alt="Unity Profiler" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                        <p class="text-white text-xs opacity-80">Analyse des performances avec le profiler Unity.</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="realisation" class="max-w-6xl mx-auto px-6 py-20 border-t border-gray-100">

            <h2 class="font text-4xl font-bold mb-12 flex items-center gap-4 text-black">
                <span class="text-[#ED7464]">02.</span> Rétrospective
            </h2>

            <div class="bg-gray-50 border-2 border-dashed border-gray-300 flex justify-center items-center rounded-3xl h-50">
                <p class="text-gray-400 uppercase text-lg">A venir</p>
            </div>

            <!-- <div class="overflow-hidden">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pt-4 lg:pr-8">
                        <div class="lg:max-w-lg">
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                                
                                <h2 class="font text-4xl font-bold mb-12 flex items-center gap-4 text-black">
                                    <span class="text-[#ED7464]">02.</span> Rétrospective
                                </h2>

                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-1 size-5 text-indigo-600">
                                        <path d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                        Push to deploy.
                                    </dt>
                                    <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-1 size-5 text-indigo-600">
                                        <path d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                        SSL certificates.
                                    </dt>
                                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-1 size-5 text-indigo-600">
                                        <path d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                        <path d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z" clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                        Database backups.
                                    </dt>
                                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img width="2432" height="1442" 
                        src="../images/projets//mix_mess_inc/menu.png" alt="Mix Mess Inc. menu" 
                        class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-228 md:-ml-4 lg:-ml-0 grayscale-50" />
                </div>
            </div> -->

        </section>


        <!-- Gallerie d'images -->
        <!-- <section class="max-w-6xl mx-auto px-6 pt-20 w-full mb-10">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 auto-rows-[250px] mb-10">
        
                <div class="relative flex flex-col justify-between group overflow-hidden rounded-3xl bg-gray-100 transition-transform duration-500 hover:scale-105">
                    <img src="" alt="image 1">
                </div>
                <div class="relative flex flex-col justify-between group overflow-hidden rounded-3xl bg-gray-100 transition-transform duration-500 hover:scale-105">
                    <img src="" alt="image 2">
                </div>

                <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-3xl bg-gray-100 transition-transform duration-500 hover:scale-105">
                    <img src="" alt="image 3">
                </div>
                
                <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-3xl bg-gray-100 transition-transform duration-500 hover:scale-105">
                    <video src="" alt="video 1">
                </div>
            </div>

        </section> -->

    </main>


    <?php include '../footer.php'; ?>

</body>
</html>