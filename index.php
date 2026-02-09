<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<?php $title="Lucie Freihaut | Développeuse web"; include 'head.php'; ?>

<body class="">
    <?php $base_path = ""; include 'header.php'; ?>

    <main>
        <!-- Hero -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden px-6 mt-6">
            <div class="absolute top-1/4 -left-20 w-48 h-48 md:w-72 md:h-72 bg-[#1D24CA]/10 rounded-full blur-[60px] md:blur-[100px] animate-pulse"></div>
            <div class="absolute bottom-1/4 -right-20 w-64 h-64 md:w-96 md:h-96 bg-[#ED7464]/5 rounded-full blur-[80px] md:blur-[120px] animate-pulse" style="animation-delay: 2s;"></div>

            <div class="relative z-10 max-w-5xl w-full flex flex-col items-center">
                
                <span class="font flex justify-center text-[10px] md:text-xs uppercase tracking-[0.4em] text-gray-400 mb-8">
                    Front <span class="mx-2 text-[#1D24CA]">•</span> Back <span class="mx-2 text-[#1D24CA]">•</span> Design
                </span>
                
                <div class="inline-block text-left">
                    <h1 class="font text-5xl md:text-8xl font-bold leading-[1.1] mb-4 tracking-tighter text-gray-900">
                        Lucie <br> Freihaut
                    </h1>
                    <h2 class="font leading-[1.1] mb-10 tracking-tighter text-[#1D24CA] text-3xl sm:text-4xl md:text-6xl font-black uppercase">
                        Développeuse WEB
                    </h2>
                </div>

                <p class="text-base md:text-xl text-gray-800 max-w-2xl mx-auto mb-8 text-center leading-relaxed">
                    <span class="relative text-black font-bold">L'expérience utilisateur</span>, au centre des réflexions que je mène pour 
                    <span class="font-medium text-black underline underline-offset-4 decoration-[#ED7464]/80 decoration-2">concevoir</span> 
                    et <span class="font-medium text-black underline underline-offset-4 decoration-[#ED7464]/80 decoration-2">créer</span> 
                    des solutions.
                </p>

                <div class="font flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6 w-full sm:w-auto">
                    <a href="#projets" class="group w-full sm:w-auto px-10 py-5 bg-[#1D24CA] text-white rounded-full font-medium text-center transition-all hover:scale-102">
                        <span class="group-hover:text-[#ED7464] transition-all">02.</span> Découvrir mes projets
                    </a>
                    <a href="pdf/CV_Lucie_Freihaut.pdf" class="w-full sm:w-auto px-10 py-5 border-2 md:border-3 border-[#1D24CA] text-[#1D24CA] rounded-full font-medium text-center transition-all hover:bg-[#1D24CA]/5">
                        Lire mon CV
                    </a>
                </div>
            </div>
        </section>

        <!-- About me -->
        <section id="propos" class="max-w-6xl mx-auto px-6 md:px-16 py-18 md:py-24 border-t border-gray-100">
            <h2 class="font text-2xl md:text-3xl font-bold mb-8 md:mb-12 flex items-center gap-4">
                <span class="text-[#1D24CA]">01.</span> Mon profil
            </h2>

            <div class="flex flex-col xl:flex-row items-center gap-10 md:gap-24">
                <!-- Image + RS -->
                <div class="shrink-0">
                    <div class="relative mb-8 mt-6 md:mt-10">
                        <div class="absolute -top-3 -left-4 md:-top-5 md:-left-6 w-full h-full bg-[#ED7464]/60 rounded-2xl z-10"></div>
                        <div class="absolute -top-4 -right-4 md:-top-9 md:-right-9 w-full h-full border-2 border-[#98ABEE] rounded-2xl -z-10"></div>

                        <img src="images/photo_lucie.jpg" alt="Lucie Freihaut" 
                            class="relative w-64 h-64 md:w-80 md:h-80 object-cover object-[50%_20%] rounded-2xl shadow-xl z-20">
                    </div>

                    <div class="flex justify-center items-center gap-6 md:gap-10">
                        <a href="pdf/CV_Lucie_Freihaut.pdf" title="Mon CV en pdf"
                            class="p-3 bg-[#1D24CA]/90 text-white rounded-full hover:scale-110 transition-all duration-200">
                            <p class="font"> CV</p>
                        </a>

                        <a href="https://linkedin.com/in/lucie-freihaut" title="Mon compte Linkedin"
                            class="p-3 bg-[#1D24CA]/90 text-white rounded-full hover:scale-110 transition-all duration-200">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>

                        <a href="https://github.com/lfreih" title="Mon compte GitHub"
                            class="p-3 bg-[#1D24CA]/90 text-white rounded-full hover:scale-110 transition-all duration-200">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-6">
                    <!-- Study -->
                    <div class="p-4 flex gap-4">
                        <div>
                            <div class="flex justify-center items-center text-[#1D24CA] rounded-xl p-2">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
                            </div>
                        </div>
                        <div>
                            <p>Étudiante en 3e année de 
                                <a href="https://www.univ-reims.fr/iut-troyes/formations/b.u.t./metiers-du-multimedia-et-de-l-internet/b.u.t.-mmi,27547,45068.html" class="relative group font-bold uppercase hover:text-[#1D24CA] transition-all duration-200" title="Site internet de la formation" target="_blank">
                                    BUT MMI
                                </a>
                                à l'IUT de Troyes (Aube)
                            </p>
                        </div>
                    </div>

                    <!-- Work -->
                    <div class="p-4 flex gap-4">
                        <div>
                            <div class=" flex justify-center items-center rounded-xl p-2">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1D24CA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            </div>
                        </div>
                        <p>Apprentie développeuse web chez 
                            <a href="https://www.piscines-magiline.fr/" class="font-bold hover:text-[#1D24CA] transition-all duration-200" title="Site internet" target="_blank">
                                Piscines Magiline
                            </a>
                            , à Troyes
                        </p>
                    </div>

                    <!-- Asso -->
                    <div class="px-6 py-4 flex gap-4">
                        <div class="space-y-2">

                            <p class="font-medium">Engagée dans des projets associatifs : </p>
                            <ul class="list-none space-y-3">
                                <li class="relative group leading-5 pl-5 before:absolute before:left-0.5 before:top-2.5 before:h-2 before:w-2 before:rounded-full before:bg-[#1D24CA]/90">
                                    <a href="https://www.instagram.com/bde.mmi.troyes" title="Compte instagram du BDE" target="_blank">
                                        <p><span class="font-bold group-hover:text-[#1D24CA] transition-all duration-200">BDE MMI</span> en 2025</p>
                                        <small class="text-gray-600">Responsable prévention</small>
                                    </a>
                                </li>
                                <li class="relative group leading-5 pl-5 before:absolute before:left-0.5 before:top-2.5 before:h-2 before:w-2 before:rounded-full before:bg-[#1D24CA]/90">
                                    <a href="https://nc3.campus3.fr/" title="Site web de Nuit Campus 3" target="_blank">
                                        <p><span class="font-bold group-hover:text-[#1D24CA] transition-all duration-200">Nuit Campus 3</span>, édition 2024 et 2025</p>
                                        <small class="text-gray-600 leading-4">Responsable stands asso, VIP et décoration</small>
                                    </a>
                                </li>
                                <li class="relative leading-5 pl-5 before:absolute before:left-0.5 before:top-2.5 before:h-2 before:w-2 before:rounded-full before:bg-[#1D24CA]/90">
                                    <p><span class="font-bold ">Festival MMI 2026</span></p>
                                    <small class="text-gray-600">Pôle web et graphisme</small>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-[#1D24CA]/5 p-6 m-4 flex text-center items-center gap-4 rounded-3xl">
                        <p>Curieuse et dynamique, j'aime 
                            <span class="font-medium text-black font">explorer</span>, 
                            <span class="font-medium text-black font">apprendre</span> et  
                            <span class="font-medium text-black font">tester</span>
                            afin de créer des solutions 
                            <span class="font-medium text-black underline underline-offset-4 decoration-[#ED7464]/80 decoration-2">utiles et bien pensées</span>.
                        </p>
                    </div>

                    <!-- Stack -->
                    <div class="md:col-span-2 mt-6">
                        <div class="flex flex-wrap justify-center gap-4 uppercase mb-4">
                            <span class="px-3 py-1 bg-[#98ABEE]/20 border border-gray-100 rounded-lg text-xs font-bold font text-[#1D24CA]">Laravel</span>
                            <span class="px-3 py-1 bg-[#ED7464]/10 border border-gray-100 rounded-lg text-xs font-bold font text-[#ED7464]">Nuxt</span>
                            <span class="px-3 py-1 bg-[#ED7464]/10 border border-gray-100 rounded-lg text-xs font-bold font text-[#ED7464]">Tailwind</span>
                            <span class="px-3 py-1 bg-gray-100 border border-gray-100 rounded-lg text-xs font-bold font text-gray-900">Symfony</span>
                            <span class="px-3 py-1 bg-gray-100 border border-gray-100 rounded-lg text-xs font-bold font text-gray-900">Vue.js</span>
                            <span class="px-3 py-1 bg-gray-100 border border-gray-100 rounded-lg text-xs font-bold font text-gray-900">Unity</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section id="projets" class="max-w-6xl mx-auto px-6 md:px-16 py-18 md:py-24 border-t border-gray-100">
            <h2 class="font text-2xl md:text-3xl font-bold mb-8 md:mb-12 flex items-center gap-4 text-right justify-end">
                Mes projets <span class="text-[#ED7464]">.02</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-[250px]">
                <a href="mix-mess-inc" 
                    class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-3xl bg-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">
                    
                    <!-- <span class="absolute top-4 left-4 z-20 
                        opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out inline-flex items-center rounded-full bg-[#ED7464] px-3 py-1 text-xs font-medium text-white shadow-lg tracking-wider">
                        Projet universitaire
                    </span> -->

                    <div class="w-full h-full">
                        <img src="images/projects/mix-mess-inc/menu.png" 
                            class="grayscale-50 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 group-hover:grayscale-25" alt="Projet Mix Mess Inc.">
                    </div>
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-8 text-white">

                        <div class="flex gap-6 text-xs text-gray opacity-60 mb-2 uppercase tracking-wider">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                en cours
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg> 
                                3
                            </span>
                        </div>
                        
                        <h3 class="text-2xl md:text-4xl font-bold font">Mix Mess Inc.</h3>
                        <p class="hidden md:inline text-sm opacity-80">
                            Conception et création d'un jeu d'arcade et d'un site web associé
                        </p>
                        <span class="mt-4 hidden md:inline-block bg-white text-black px-6 py-2 rounded-full w-fit font-medium hover:text-[#1D24CA] hover:scale-105 transition-all">
                            Découvrir le projet
                        </span>
                    </div>
                </a>

                <a href="sheepsheep" 
                    class="md:row-span-2 relative group overflow-hidden rounded-3xl bg-[#1D24CA] p-8 text-white flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex justify-between">
                            <span class="text-xs uppercase tracking-widest opacity-60 font">En cours</span>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold mt-2 md:mb-4 font italic">SheepSheep</h3>

                        <p class="hidden md:inline-block mt-4 opacity-80 max-w-sm">Création d'un jeu de tir en réalité virtuelle sous Unity pour Oculus Quest 2.</p>
                    </div>

                    <div>
                        <img src="images/projects/sheepsheep/casque_vr_right.png" alt="Casque Oculus"
                            class="group-hover:scale-105 transition-all duration-300">
                    </div>

                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20">
                        <p class="text-xs font-mono">Status: Coding weapon...</p>
                    </div>
                </a>

                <a href="synk" 
                    class="relative group overflow-hidden rounded-3xl p-6 flex flex-col justify-between bg-white border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex justify-between mb-2">
                            <h3 class="text-2xl font-bold font text-[#1D24CA]">SYNK</span></h3>
                            <svg class="w-6 h-6 opacity-0 group-hover:opacity-100 -translate-x-4 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
    
                        <p class="text-gray-600 mt-1">
                            Création d'une <span class="font-medium text-black">interface moderne</span> pour un réseau social
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-4 uppercase">
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-[#1D24CA] text-xs font-bold">
                            Tailwind CSS
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            API
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            Nuxt
                        </span>
                    </div>
                </a>

                <!-- Portfolio 2026 -->
                <div class="relative group overflow-hidden rounded-3xl bg-[#1D24CA] p-6 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="flex flex-col justify-center items-center h-full gap-4 text-center">
                        
                        <h3 class="text-2xl md:text-3xl font-bold font text-white">Portfolio 2026</h3>

                        <div class="flex flex-wrap gap-2 group-hover:scale-105 transition-all duration-300">
                            <span class="bg-white/20 px-3 py-1 rounded-full text-xs font-semibold text-white uppercase">PHP</span>
                            <span class="bg-white/20 px-3 py-1 rounded-full text-xs font-semibold text-white uppercase">Tailwind css</span>
                            <span class="bg-white/20 px-3 py-1 rounded-full text-xs font-semibold text-white uppercase">UI/UX</span>
                        </div>
        
                    </div>
                </div>
                
                <a href="clairtemps" 
                    class="relative group overflow-hidden rounded-3xl p-6 flex flex-col justify-between bg-white border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex justify-between mb-2">
                            <h3 class="text-2xl font-bold font text-[#1D24CA]">Clairtemps</span></h3>
                            <svg class="w-6 h-6 opacity-0 group-hover:opacity-100 -translate-x-4 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
    
                        <p class="text-gray-600 mt-1">
                            Création d'un <span class="font-medium text-black">site de prévisions météo personnalisées</span>
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-4 uppercase">
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-[#1D24CA] text-xs font-bold">
                            OpenWeatherMap
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            Vue.js
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            Symfony
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            API Platform
                        </span>
                    </div>
                </a>

                <a href="psychimeria" 
                    class="relative group overflow-hidden rounded-3xl p-6 flex flex-col justify-between bg-white border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300">

                    <div>
                        <div class="flex justify-between mb-2">
                            <h3 class="text-2xl font-bold font text-[#1D24CA]">Psychiméria</span></h3>
                            <svg class="w-6 h-6 opacity-0 group-hover:opacity-100 -translate-x-4 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
    
                        <p class="text-gray-600 mt-1">
                            Conception et création d'une <span class="font-medium text-black">bande dessinée numérique interactive</span>
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-4 uppercase">
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-[#1D24CA] text-xs font-bold">
                            Illustrator
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            After Effects
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            Scénarisation
                        </span>
                        <!-- <span class="px-4 py-1 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold">
                            Stratégie de communication
                        </span> -->
                    </div>
                </a>

                <a href="design-bde-2025" 
                    class="md:col-span-2 relative group overflow-hidden rounded-3xl flex flex-col md:flex-row bg-white border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="hidden md:block relative w-full md:w-72 h-48 md:h-full overflow-hidden bg-black">

                        <img src="images/projects/design-bde-2025/logo.svg" alt="Design pour le concours du BDE" 
                            class="w-full h-full object-cover transition-transform duration-300 grayscale-50 group-hover:scale-110 group-hover:grayscale-25">
                    </div>   
                    
                    <div class="flex flex-col justify-between p-8 flex-1">
                        <div>
                            <div class="hidden md:flex gap-6 text-xs text-gray opacity-60 mb-4 uppercase tracking-wider font-medium">
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    Dec 2025
                                </span>
                            </div>

                            <h3 class="font text-2xl md:text-3xl font-bold text-gray-900 group-hover:text-[#1D24CA] transition-colors">MMI3</h3>
                            <p class="text-gray-600 mt-1 leading-relaxed">Illustration pour le concours de <span class="font-medium text-black">design des goodies</span> du BDE MMI 2025-2026</p>
                        </div>
                        
                        <div class="flex flex-wrap gap-2 mt-4 uppercase items-center">
                            <span class="rounded-full bg-[#98ABEE]/20 px-3 py-1 text-xs font-bold text-[#1D24CA]">Illustator</span>

                            <div class="text-xs font-bold text-[#1D24CA]">
                                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </div>

                            <span class="rounded-full bg-[#98ABEE]/20 px-3 py-1 text-xs font-bold text-[#1D24CA]">Inkscape</span>
                        </div>
                    </div>
                </a>
                
                <a href="amara-by-kenzo" 
                    class="relative group overflow-hidden rounded-3xl p-6 flex flex-col justify-between bg-white border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300">

                    <div>
                        <div class="flex justify-between mb-2">
                            <h3 class="text-2xl font-bold font text-[#1D24CA]">Amara <span class="text-sm md:text-md">by <span class="uppercase">Kenzo</span></span></h3>
                            <svg class="w-6 h-6 opacity-0 group-hover:opacity-100 -translate-x-4 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
    
                        <p class="text-gray-600 mt-1">Réalisation d'un <span class="font-medium text-black">spot publicitaire</span> en liant avec une stratégie de communication</p>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-4 uppercase">
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-[#1D24CA] text-xs font-bold">
                            Blender
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            Scénarisation
                        </span>
                        <span class="inline-block rounded-full bg-[#1D24CA]/5 px-3 py-1 text-xs font-bold text-gray-700">
                            Stratégie de communication
                        </span>
                        <!-- <span class="px-4 py-1 rounded-full bg-[#ED7464]/5 text-[#ED7464] text-xs font-bold">
                            Stratégie de communication
                        </span> -->
                    </div>
                </a>

                <a href="https://github.com/lfreih" target="_blank" title="Mon compte GitHub" 
                    class="relative group overflow-hidden rounded-3xl bg-gray-900 p-6 flex items-center justify-center shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="text-white text-center group">
                        <p class="text-sm opacity-70 uppercase tracking-tighter">Projets sur</p>

                        <p class="relative text-2xl font-bold font ">
                            GITHUB ↗
                            <span class="absolute left-0 -bottom-1 w-0 h-1 bg-[#ED7464] transition-all duration-300 group-hover:w-full"></span>
                        </p>
                    </div>
                </a>
            
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>