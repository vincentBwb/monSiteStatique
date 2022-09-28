<!DOCTYPE html>
<html>
    <head>
        <title>Les fonctions</title>
        <meta charset="utf-8">
    </head>
    <body>
        
    <h1>Les fonctions</h1>
    <nav>
        <ul>
            <li>Fonction prédefinis
                <ul>
                    <li>rand() qui génère un nombre entier aléatoire. <br> 2 arguments facultative, un interval rand(1, 10)</li>
                </ul>
            </li>
            <li>Les constantes magiques de php</li>
            <table>
                <tr>
                    <th>Nom de la constante</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>__FILE__</td>
                    <td>Contient le chemin complet etle nom du fichier</td>
                </tr>
                <tr>
                    <td>__DIR__</td>
                    <td>Contient le nom du dossier dans lequel est le fichier</td>
                </tr>
                <tr>
                    <td>__LINE__</td>
                    <td>Contient le numéro de la ligne actuellement utilisée dans le fichier</td>
                </tr>
                <tr>
                    <td>__FUNCTION__</td>
                    <td>Contient le nom de la fonction actuellement définie</td>
                </tr>
                <tr>
                    <td>__CLASS__</td>
                    <td>Contient le nom de la classe actuellement définie</td>
                </tr>
                <tr>
                    <td>__METHOD__</td>
                    <td>Contient le nom de la méthode actuellement utilisée</td>
                </tr>
                <tr>
                    <td>__NAMESPACE__</td>
                    <td>Contient le nom de l'espace de nom("namespace") courant</td>
                </tr>
                <tr>
                    <td>__TRAIT</td>
                    <td>Contient le nom du trait (incluant le nom de l'espace de noms dans lequel il a étét déclaré</td>
                </tr>
            </table>
        </ul>
    </nav>



    <?php
        $e1 = rand();
        $e2 = rand();
        $e3 = rand(1, 10);

        echo 
            'entier 1 : ' .$e1. '<br>
            entier 2 : ' .$e2. '<br>
            entier 3 : ' .$e3;

    // fonction et paramètre
        // le parmètre est la variable prenom
        function bonjour($prenom) {
            echo 'bonjour ' .$prenom. ' ! <br>';
        }

    // appel de la fonction avec des arguments cette fois qui remplaceront le paramètre prenom dans ma fonction
        bonjour('Vincent');
        bonjour('Maria');

    // fonction à 2 arguments et récupération du résultat
        function multi1($a, $b) {
            echo $a. ' * ' .$b. ' = ' .$a+$b;
        }

        function multi2($x, $y) {
            $z = $x*$y;
            return $z;
        }

    // on peut appeler la fonction multi avec ces 2 arguments , le resultat s'affichera 
        multi1(5, 10);

    // pour la 2eme le return ne suffit pas, on peut appeler la fonction dans une variable qui stockera le resultat 
        $resultat = multi2(2, 10);
        echo '<br>2 * 10 = ' .$resultat;


//Portée des variables et mot clé static
        function compte1() {
            $x = 0;
            echo '$x vaut : ' .$x. '<br>';
            $x++;
        }

        function compte2() {
            static $z = 0;
            echo '$z vaut : ' .$z. '<br>';
            $z++;
        }

    // appel des fonctions 
        // la valeur de x est re
        compte1();
        compte1();
        compte1();

    // cette fois avec le mot clé static la variable z s incrémente à chaque que la fonction est appelée
        compte2();
        compte2();
        compte2();  

// constantes magiques 
        echo __LINE__. '<br>';
        echo __FILE__. '<br>';
        echo __DIR__. '<br>';
        echo __LINE__. '<br>';
        function test() {
            echo __FUNCTION__;
        }

        test();
 

    ?>
    
    </body>
</html>