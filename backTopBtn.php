<!-- <button 
    id="backToTop" 
    class="fixed bottom-8 right-8 z-50 p-4 rounded-2xl bg-[#1D24CA] text-white shadow-xl opacity-0 translate-y-10 transition-all duration-500 hover:bg-[#ED7464] hover:scale-110 active:scale-95 group"
    aria-label="Retour en haut"
>
    <svg 
        class="w-6 h-6 transition-transform group-hover:-translate-y-1" 
        fill="none" 
        stroke="currentColor" 
        viewBox="0 0 24 24"
    >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>

<script>
    const backToTopButton = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        // Le bouton apparaît après 400px de scroll
        if (window.scrollY > 400) {
            backToTopButton.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
            backToTopButton.classList.add('opacity-100', 'translate-y-0');
        } else {
            backToTopButton.classList.remove('opacity-100', 'translate-y-0');
            backToTopButton.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
        }
    });

    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Scroll fluide
        });
    });
</script> -->

<button id="backToTop" class="fixed bottom-8 right-8 z-50 w-14 h-14 flex items-center justify-center opacity-0 translate-y-10 transition-all duration-500 pointer-events-none group">
    <svg class="absolute inset-0 w-full h-full -rotate-90" viewBox="0 0 36 36">
        <circle class="text-gray-200" stroke="currentColor" stroke-width="3" fill="transparent" r="16" cx="18" cy="18"></circle>
        <circle id="progressPath" class="text-[#1D24CA] transition-all duration-100" stroke="currentColor" stroke-width="3" stroke-dasharray="100" stroke-dashoffset="100" stroke-linecap="round" fill="transparent" r="16" cx="18" cy="18"></circle>
    </svg>
    
    <div class="relative z-10 bg-white rounded-full p-2 shadow-sm text-[#1D24CA] group-hover:text-[#ED7464] transition-colors">
        <svg class="w-5 h-5 transition-transform group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </div>
</button>

<script>
    const bttButton = document.getElementById('backToTop');
    const progressPath = document.getElementById('progressPath');

    window.addEventListener('scroll', () => {
        // Calcul du pourcentage de scroll
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrolled = (window.scrollY / scrollHeight) * 100;

        // Mise à jour de l'offset du cercle (100 = vide, 0 = plein)
        const offset = 100 - scrolled;
        progressPath.style.strokeDashoffset = offset;

        // Apparition/Disparition du bouton
        if (window.scrollY > 300) {
            bttButton.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
            bttButton.classList.add('opacity-100', 'translate-y-0');
        } else {
            bttButton.classList.remove('opacity-100', 'translate-y-0');
            bttButton.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
        }
    });

    // Scroll au clic
    bttButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>