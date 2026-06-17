# Salarium — Test technique WordPress

Calculateur de conversion salaire brut/net, développé sous forme de thème WordPress custom.

## 📋 Présentation du projet

Test pour implémenter une page web avec calculateur de salaire brut en net et inversement en fonction du type de statut, mensuel ou annuel.

## 🛠️ Stack technique

- **CMS** : WordPress (dernière version)
- **Langage** : PHP
- **CSS** : Tailwind CSS (via CDN)
- **Conteneurisation** : Docker / Docker Compose
- **Base de données** : MariaDB

## 📦 Prérequis

- Docker et Docker Compose installés

## 🚀 Installation et lancement

1. Cloner le dépôt :
   ```bash
   git clone <url-du-repo>
   cd <nom-du-dossier>
   ```

2. Lancer les conteneurs Docker :
   ```bash
   docker compose up -d
   ```

3. Accéder au site :
   - Front-end : [http://localhost](http://localhost)
   - Back-office WordPress : [http://localhost/wp-admin](http://localhost/wp-admin)

4. Lors du premier accès à `/wp-admin`, suivre l'assistant d'installation WordPress pour créer le compte administrateur.

## 📁 Structure du projet

```
my_wordpress/
├── docker-compose.yml
└── wp-content/
    └── themes/
        └── salarium/
            ├── style.css
            ├── index.php / front-page.php
            ├── header.php
            ├── footer.php
            └── functions.php
```

## 🎨 Choix techniques

J'ai utilisé tailwind pour la partie mise en page CSS car je préfère au CSS, je maîtrise mieux et trouve ça plus intuitif. Et j'ai également utilisé excalidraw pour le découpage de la page figma afin de pré-établir visuellement un champ d'action: définir les étapes de codage avec les choix tailwind.

## ✅ Fonctionnalités réalisées

- [x] Thème WordPress custom (header, footer, page principale)
- [x] Intégration Tailwind CSS
- [x] Page calculateur brut/net (mise en page responsive)
- [ ] Fonctions de calcul brut-net et inversement en fonction de cadre ou non-cadre
- [ ] Bouton responsives et s'adaptant au choix de l'utilisateur

## ⚠️ Limitations / Non réalisé

Je n'ai pas eu le temps de mettre en place les fonctions via le front afin d'effectuer les différents calculs à travers les inputs. J'ai travaillé (avec la redaction du README) 4h30. La prise en main de PHP/WordPress a pris plus de temps que prévu, ce qui explique le délai. J'ai créé des fonctions mais sans avoir eu le temps de faire quoi que ce soit avec ça et le front. Je n'ai également pas eu le temps de me plonger sur le plugin à mettre en place.

## 🔄 Pistes d'amélioration

Installer de quoi permettre le rafraichissement automatique de la page à chaque sauvegarde, installer tailwind en local, revoir la logique de calcul pour utiliser les fonctions créés, revoir l'accessibilité ou encore mettre en place des tests.


## 👤 Auteur

Reveau Morgane