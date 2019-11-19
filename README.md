# Création du projet

Ininitalisation du dépôt git 
```git init```

Initialiser npm 
```npm init --y```

Installation des dépendances
```npm i <dependency> --save ou --save-dev```

Un exemple avec la dépendance lite-server
```npm i lite-server --save-dev```

Configuration des scripts (des commandes) dans le package.json
Par exemple, configurer la commande serve pour lancer l'application via lite-server
```
...
"scripts": {
    "test": "echo \"Error: no test specified\" && exit 1",
    "serve": "lite-server"
},
...
```

Lancer lite server avec notre commande serve
```npm run serve```


Création du README.md

Création du .gitgnore

