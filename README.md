# TP 02 PHP — Programmation Web 2 — 2026/2027

**Nom :** Ettousy  
**Prénom :** Saad  
**Groupe :** 04  
**Formation :** Informatique appliquée  
**Module :** Programmation Web 2

## Exécution

Depuis la racine de ce dossier, démarrer le serveur PHP intégré :

```sh
php -S localhost:8000
```

Avec XAMPP sous Windows si `php` n'est pas dans le `PATH` :

```powershell
& "C:\xampp\php\php.exe" -S localhost:8000
```

Ouvrir ensuite [http://localhost:8000/index.php](http://localhost:8000/index.php). Arrêter le serveur avec `Ctrl+C`.

## Exercices

- [Exercice 1 — affichage et syntaxe PHP](ex01.php)
- [Exercice 2 — variables et concaténation](ex02.php)
- [Exercice 3 — constantes et calculs](ex03.php)
- [Exercice 4 — types et conversions](ex04.php)
- [Exercice 5 — conditions et mentions](ex05.php)
- [Exercice 6 — mois avec `switch`](ex06.php)
- [Exercice 7 — boucles `for`](ex07.php)
- [Exercice 8 — `while`, `do-while`, `continue` et `break`](ex08.php)
- [Exercice 9 — tableau associatif et statistiques](ex09.php)
- [Exercice 10 — formulaires GET et POST](ex10_get.html) ([POST](ex10_post.html))

## Réponses et tests

### Exercice 2 — noms de variables

PHP distingue les majuscules et les minuscules dans les noms de variables : `$note` et `$Note` sont donc deux variables distinctes. Parmi les noms proposés, `$a`, `$_a`, `$a_a`, `$AAA` et `$a1` sont valides. `$a!` contient un caractère interdit et `$1a` commence par un chiffre.

### Exercice 4 — affichage de `false`

`echo false` n'affiche aucun caractère, car la conversion d'un booléen faux en chaîne donne une chaîne vide. `var_dump(false)` affiche explicitement `bool(false)`, ce qui permet d'identifier le type et la valeur.

### Exercice 5 — tests des moyennes

| Moyenne | Résultat |
|---:|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 6 — tests des mois

| Numéro | Résultat |
|---:|---|
| 1 | Janvier |
| 3 | Mars |
| 12 | Décembre |
| 15 | Numéro de mois invalide |

Le script affiche aussi le mois courant du serveur à partir de `date("m")`.

### Exercice 9 — résultats

La somme des notes est de 60, la moyenne est de 12 et 4 étudiants ont validé. Sara a la meilleure note avec 16.

### Exercice 10 — GET et POST

Avec GET, les valeurs soumises apparaissent dans la barre d'adresse, après le `?`, sous forme de paramètres comme `nom=...&prenom=...&groupe=...`. Avec POST, elles sont envoyées dans le corps de la requête et ne figurent pas dans l'URL. Les deux traitements vérifient que les champs sont présents et non vides, puis échappent les valeurs avec `htmlspecialchars()` avant affichage. Ils affichent un message explicatif si la page est ouverte sans soumission.
