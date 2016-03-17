<!DOCTYPE html>
<html>
    <head>
        <meta name="Content-Type" content="text/html; charset:UTF-8" />
        <meta charset="UTF-8" />
    </head>

    <body>
        <h1>Design Pattern, Part. 1</h1>
        <h2>Creation - Factory</h2>
        <?php
        /**
        *
        *
        * @version 1.0
        * @author Benjamin MARROT <bmarrot@galilee.fr>
        * @copyright © 2014 Galilée (www.galilee.fr)
        */
        require __DIR__ . '/../../app/bootstrap.php';

        use Creation\Factory\Interpreter\InterpreterAbstract;


        $plainData  = 'My data';
        $jsonData   = '{"a":1,"b":2,"c":{"c0":"3.0","c1":"3.1"},"d":4,"e":5}';
        $xmlData    = '<root><node>123</node><foo><bar>456</bar></foo></root>';


        echo 'Let\'s interpret plaintext : ' . $plainData;
        echo '<br /><pre>';
        $plainInterpreter = InterpreterAbstract::make(
            InterpreterAbstract::TYPE_PLAINTEXT
        );
        var_dump($plainInterpreter->interpret($plainData));
        echo '</pre><br />';

        echo '<br />';

        echo 'Let\'s interpret json : ' . $jsonData;
        echo '<br /><pre>';
        $jsonInterpreter = InterpreterAbstract::make(
            InterpreterAbstract::TYPE_JSON
        );
        var_dump($jsonInterpreter->interpret($jsonData));
        echo '</pre><br />';

        echo '<br />';

        echo 'Let\'s interpret xml : ' . htmlentities($xmlData);
        echo '<br /><pre>';
        $xmlInterpreter = InterpreterAbstract::make(
            InterpreterAbstract::TYPE_XML
        );
        var_dump($xmlInterpreter->interpret($xmlData));
        echo '</pre><br />';
        ?>
    </body>
</html>