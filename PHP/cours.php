<html>
    <head>
        <title>PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Le langage PHP</h1>
        <p>Un paragraphe écrit en html</p>
        <nav>
            <ul>
                <li>Opération sur les variables</li>
                <li>introduction aux conditions
                    <ul>
                        <li>Présentation</li>                            
                        <li>utiliser avec des vairables</li>
                        <li>rendent un site dynamique, execute différent code
                            <ul>
                                <li>if</li>
                                <li>if else</li>
                                <li>if, elseif, else</li>
                            </ul>
                        </li>                   
                    </ul>
                </li>
                <li>Opérateurs de comparaison et utilisation <br>
                    <table>
                        <tr>
                            <th>Opérateurs</th>
                            <th>Signification</th>
                        </tr>
                        <tr>
                            <td>==</td>
                            <td>Est égal ( en valeur ) à</td>
                        </tr>
                        <tr>
                            <td>===</td>
                            <td>Est égal en type et en valeur</td>
                        </tr>
                        <tr>
                            <td>!=</td>
                            <td>Est différent (en valeur) de</td>
                        </tr>
                        <tr>
                            <td>!==</td>
                            <td>Est différent en valeur et en type de</td>
                        </tr>
                        <tr>
                            <td>></td>
                            <td>Est strictement supérieur à</td>
                        </tr>
                        <tr>
                            <td><</td>
                            <td>Est strictement inférieur à</td>
                        </tr>
                        <tr>
                            <td>>=</td>
                            <td>Est supérieur ou égal</td>
                        </tr>
                        <tr>
                            <td><=</td>
                            <td>Est inférieur ou égal</td>
                        </tr>
                    </table>                                    
                </li>
                <li>Les opérateurs logiques</li>
                <li>Imbriquer des conditions en PHP</li>
            </ul>        
        </nav>

        <?php
// opération sur les variables 
            $x = 4;
            echo 'Valeur initiale ocntenue dans $x : ' .$x. '<br>';

            echo 'Valeur de $x après incrémentation n°1 : ' .++$x. '<br>';
            echo '$x contient : ' .$x. '<br><br>';

            echo 'Valeur de $x avant incrémentation n°2 : ' .$x++. '<br>';
            echo '$x contient : ' .$x. '<br><br>';

            echo 'Valeur de $x après décrémentation n°1 : ' .--$x. '<br>';
            echo '$x contient : ' .$x. '<br><br>';

            echo 'Valeur de $x avant décrémentation n°2 : ' .$x--. '<br>';
            echo '$x contient : ' .$x. '<br><br>';

// les opérateurs de comparaison 
            $y = 4;

            var_dump($y ==4);
            // echo '<br>';
            var_dump($y > 7);
            // echo '<br>';
            var_dump($y == "4");
            echo '<br>';
            var_dump($y === "4");
            echo '<br>';
            var_dump($y != "4");
            echo '<br>';
            var_dump($y !== "4");
            echo '<br>';

// conditions
        // if
            $z = -4;
            if($z >= 0) {
                echo '$z contient une valeur positive'; 
            }
            
        // if else 
            if($z >= 0) {
                echo '$z contient une valeur positive';
            }
            else {
                echo '$z contient une valeur strictement négative' .'<br>';
            };

        // if elseif else
            $a = 10;

            if($a <10) {
                echo '$a contient une valeulr strictement négative';
            }
            elseif($a === 0) {
                echo '$a contient le chiffre 0';
            }
            elseif($a > 0) {
                echo '$a contient une valeur strictement positive';
            }
            else {
                echo '$a contient autre chose qu\'un nombre';
            }

// opérateurs logiques 
            $q = 4;
            $s = 8;
            $d = -2;

            echo '$q = ' .$q. ', $s = ' .$s. ', $d = ' .$d. '<br><br>';

            
            if($q >= 0 AND $q <=10) {
                echo 'La valeur de $q est comprise entre 0 et 10<br>';
            }
            else {
                echo 'La valeur de $q n\' est pas comprise entre 0 et 10';
            }

            if($q > 0 OR $d >= 0) {
                echo '$q ou $d ( ou les 2) posssèdent une valeur positive';
            }
            else {
                echo '$q et $d possèdent des valeurs strcitement négative';
            }

            if($q >=0 XOR $d >= 0) {
                echo 'seul $q ou $d possèdent une valeur positive';
            }
            else {
                echo 'Les valeurs de $q et $d sont de même signe';
            }
           

            if (($d <0 or $s <0) AND $d > $s ) {
                echo '$d ou $s possède une valeur strictement négative (ou les deux) et $z possèdent une valeur strictement supérieur à $s';
            }

            if ($d <0 or ($s <0 AND $d > $s)) {
                echo '$d est négatif OU $s est négatif et $d est supérieur à $y';
            }

// conditions imbriquées
            $inscrit = true;
            $age = 25;

            if($inscrit) {
                if($age >= 18) {
                    echo 'Vous êtes inscrit et majeur, bienvenue !';
                }
                else {
                    echo 'Vous êtes isncrit mais mineur, vous avez un acces limité';
                }
            }
            else {
                echo 'pas encre inscrit ? Qu\'attendez vous ?';
            }
            

        ?>

    </body>
</html>