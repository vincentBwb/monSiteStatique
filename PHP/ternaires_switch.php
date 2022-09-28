<html>
    <head>
        <title>PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Les structures ternaires et switch</h1>
        <nav>
            <ul>
                <li>Découverte, fonctionnement des ternaires
                    <ul>
                        <li>Les tairnaires sont des conditions très condensser et qui se base sur l'opérateur ternaire ?</li>
                        <li>Condenser à l'extrême pour accéler l'execution du script</li>
                        <li>Inconvénient : peu lisible et peu compréhensible</li>
                        <li>syntaxe :
                            <ul>
                                <li>Un test</li>
                                <li>Le ? qui l'opérateur ternaire</li>
                                <li>La valeur à retourner si le test est valide</li>
                                <li>Le : </li>
                                <li>Et la valeur à retourner si le test n'a pas été valide</li>
                            </ul>
                        </li>
                        <li>syntaxe : <br>
                            $x = 4; <br>                               
                            $message = ($x >= 0 ? '$x positive' : '$x négative');
                            <ul>
                                <li>$x >= 0 -> le test</li>
                                <li>? -> opérateur ternaire</li>
                                <li>$x positive -> code retourné si le test est validé</li>
                                <li>$x négative -> code retourné si le test n'est pas valide</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Le switch et cas d'utilisation</li>
            </ul>
        </nav>

        <?php
            $x = 4;
        // si le test est valide -> return $x positive sinon $x négative 
            $message = ($x >= 0 ? '$x positive' : '$x négative');
            echo $message;

        // le switch
            $note = 10;

            // le case -> hypothèse sur la valeur contenue dans $note
            switch($note) {
                case 0 :
                    echo 'vous avez obtenu la note 0';
                    break;
                case 5 :
                    echo 'vous avez obtenu la note de 5';
                    break;
                case 10 :
                    echo 'vous avez obtenu la note de 10';
                    break;
                case 15 :
                    echo 'vous avez obtenu la note de 15';
                    break;
                case 20 :
                    echo 'vous avez obtenu la note de 20';
                    break;
                default :
                echo 'rien à afficher pour cette note';
            }
        ?>
    </body>
</html>