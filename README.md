
# Accompagnement PHP

Un accompagnement sur les classes en PHP et l'utilisation de plusieurs fichier

## Etape 1:
Créer les fichiers index.php et bateau.php.

## Etape 2:
Dans le fichier boat.php, implémenter la classe Bateau suivante:

```php
Class Bateau 
{
    private $nom = '';
    private $longueur = 0;
    private $hauteur = 0;
    private $largeur = 0;

    public function __construct($nom, $longeur, $largeur, $hauter)
    {
        /*
        *   partie à implémenter
        */
    }

    public function obtenirNom() 
    {
        return $this->nom;
    }

    public function fixerNom($nouveauNom) 
    {
        $this->nom = $nouveauNom;
    }

    //implémenter les autres 'Getter' et 'Setter'
}
```
### Etape 3:
Dans la class Bateau, implémenter la nouvelle méthode 'afficherInfoBateau' qui affiche dans le terminal les informations du bateau.

```php
Class Bateau 
{
    public function afficherInfoBateau() 
    {
        /*
        *   partie à implémenter
        */
    }
}
```
### Etape 4:
Créer dans index.php une instance de la classe Bateau et afficher ses informations.

<div align="center"><img src="Assets/boat.png" alt="" width="400px"></div>

```php
include_once "Bateau.php"
```

### Etape 5:
Créer un fichier Equipage.php et implémenter la classe Equipage suivante:

```php
include_once "Bateau.php"

class Equipage extends Bateau
{
    private $equipage = array();

    public function __construct($nom, $longeur, $largeur, $hauteur,         $equipage)
    {
        parent::__construct($nom, $longeurn $largeur, $hauteur);
        $this->equipage = $equipage;
    }

    public function afficherInfoEquipage()
    {
        /*
        *   à implémenter :
        *   affiche sur le terminal les informations de l'équipage 
        *   ainsi que celle du Bateau
        */
    }

    //implémenter le 'Getter' et le 'Setter' d'Equipage
}
```
### Etape 6:
Dans le fichier index.php, créer une instance de la classe Equipage et afficher ses informations.

```php
include_once "Equipage.php"
```
<div align="center"><img src="Assets/crew.png" alt="" width="400px"></div>
