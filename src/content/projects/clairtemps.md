---
titre: Clairtemps
slug: clairtemps
date: Juin 2025
type: Projet universitaire
stack: [Symfony, Vue.js, Pinia]
tag: [Web, API, UI]
une: true
# lienSite: https://clairtemps.lucie-freihaut.fr
lienGithub: https://github.com/m4rguerite/sae401
image: /images/clairtemps/cover.jpg
desc: App météo temps réel — prévisions horaires et 15 jours via API externe.
metriques:
  - valeur: "15j"
    label: Prévisions affichées
  - valeur: "30h"
    label: De développement
  - valeur: "3"
    label: Dans l'équipe
  - valeur: "1"
    label: API externe intégrée
demarche:
  - num: "1"
    title: Choix de Vue.js
    body: On a failli basculer sur Twig — mais l'accent UX du projet rendait un framework réactif indispensable.
  - num: "2"
    title: API & backend Symfony
    body: Service exposant nos propres routes au front. Store Pinia pour centraliser les données entre composants.
  - num: "3"
    title: Cache & optimisation
    body: Système de cache pour limiter les appels API et réduire la charge serveur.
retenue: "Utiliser Pinia pour la première fois en contexte réel m'a appris à rendre mes méthodes génériques — un réflexe que j'applique depuis sur chaque projet."
---

## Contexte
App météo temps réel conçue pour offrir une consultation rapide des conditions météorologiques locales...