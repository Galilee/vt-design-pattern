<!DOCTYPE html>
<html>
    <head>
        <meta name="Content-Type" content="text/html; charset:UTF-8" />
        <meta charset="UTF-8" />
    </head>

    <body>
        <h1>Design Pattern, Part. 1</h1>
        <h2>Behavior - Observer</h2>
        <?php
        /**
         *
         *
         * @version 1.0
         * @author Benjamin MARROT <bmarrot@galilee.fr>
         * @copyright © 2014 Galilée (www.galilee.fr)
         */
        require __DIR__ . '/../../app/bootstrap.php';

        use Behavior\Observer\Client\Builder\Observer as Builder;
        use Creation\Factory\Interpreter\InterpreterAbstract;
        use Structure\Adapter\Client\Adapter\AdapterAbstract;

        $builder    = new Builder();
        $client     = $builder
            ->buildAdapter(
                AdapterAbstract::TYPE_REST
            )
            ->buildInterpreter(
                InterpreterAbstract::TYPE_XML
            )
            ->getClient();

        $client->makeRequest('maFonction', array('param1', 'param2'));
        ?>
    </body>
</html>