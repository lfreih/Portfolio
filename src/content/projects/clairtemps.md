---
title: Clairtemps
italicTitle: temps
date: Juin 2025
type: Projet universitaire
stack: [Symfony, Vue.js, Pinia]
tag: [Web, API, UI]
une: true
# websiteLink: https://clairtemps.lucie-freihaut.fr
githubLink: https://github.com/m4rguerite/sae401
cover: /images/clairtemps/cover.jpg
images:
  - src: /images/clairtemps/accueil-desktop.jpg
    alt: Page d'accueil · desktop
  - src: /images/clairtemps/vue-mobile.jpg
    alt: Vue mobile
  - src: /images/clairtemps/favoris.jpg
    alt: Page favoris
desc: App météo temps réel - prévisions horaires et 15 jours via API externe
metrics:
  - value: "15j"
    label: Prévisions affichées
  - value: "30h"
    label: De développement
  - value: "3"
    label: Dans l'équipe
  - value: "1"
    label: API externe intégrée
approach:
  - num: "1"
    title: Choix de Vue.js
    body: On a failli basculer sur Twig — mais l'accent UX du projet rendait un framework réactif indispensable.
  - num: "2"
    title: API & backend Symfony
    body: Service exposant nos propres routes au front. Store Pinia pour centraliser les données entre composants.
  - num: "3"
    title: Cache & optimisation
    body: Système de cache pour limiter les appels API et réduire la charge serveur.
learned: "Utiliser Pinia pour la première fois en contexte réel m'a appris à rendre mes méthodes génériques — un réflexe que j'applique depuis sur chaque projet."
---
