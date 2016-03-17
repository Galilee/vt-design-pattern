<?php
/**
 *
 *
 * @version 1.0
 * @author Benjamin MARROT <bmarrot@galilee.fr>
 * @copyright © 2014 Galilée (www.galilee.fr)
 */
require __DIR__ . '/../../app/bootstrap.php';

use Behavior\State\Bat;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="Content-Type" content="text/html; charset:UTF-8" />
        <meta charset="UTF-8" />
    </head>

    <body>
        <h1>Design Pattern, Part. 1</h1>
        <h2>Behavior - State</h2>

        <table style="width: 100%">
            <tr>
                <td style="width: 50%"><h3>Easy Validation</h3></td>
                <td style="width: 50%"><h3>Annotated validation after unvalidate</h3></td>
            </tr>
            <tr style="vertical-align: top">
                <td>
                    <?php
                    $easyBat = new Bat();
                    echo 'New bat<br />';
                    echo '<pre>';
                    var_dump($easyBat);
                    echo '</pre>';

                    echo '<br />';

                    $imgPath = 'path/to/image/visual.jpg';
                    $easyBat->setAvailable($imgPath);
                    echo 'Set available with <b>"' . $imgPath . '"</b><br />';
                    echo '<pre>';
                    var_dump($easyBat);
                    echo '</pre>';

                    echo '<br />';

                    $easyBat->validate();
                    echo 'Validate bat<br />';
                    echo '<pre>';
                    var_dump($easyBat);
                    echo '</pre>';

                    echo '<br />';

                    echo 'Try unvalidate bat<br />';
                    try {
                        $easyBat->unvalidate();
                    } catch (Exception $e) {
                        echo $e->getMessage() . '<br />';
                        echo '<pre>';
                        var_dump($easyBat);
                        echo '</pre>';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $complexBat = new Bat();
                    echo 'New bat<br />';
                    echo '<pre>';
                    var_dump($complexBat);
                    echo '</pre>';

                    echo '<br />';

                    $imgPath = 'path/to/image/visual.jpg';
                    $complexBat->setAvailable($imgPath);
                    echo 'Set available with <b>"' . $imgPath . '"</b><br />';
                    echo '<pre>';
                    var_dump($complexBat);
                    echo '</pre>';

                    echo '<br />';

                    $complexBat->unvalidate();
                    echo 'Unvalidate bat<br />';
                    echo '<pre>';
                    var_dump($complexBat);
                    echo '</pre>';

                    echo '<br />';

                    echo 'Try validate bat<br />';
                    try {
                        $complexBat->validate();
                    } catch (Exception $e) {
                        echo $e->getMessage() . '<br />';
                        echo '<pre>';
                        var_dump($complexBat);
                        echo '</pre>';
                    }

                    echo '<br />';

                    $imgPath = 'another/path/to/image/visual.jpg';
                    $complexBat->setAvailable($imgPath);
                    echo 'Re-set available with <b>"' . $imgPath . '"</b><br />';
                    echo '<pre>';
                    var_dump($complexBat);
                    echo '</pre>';

                    echo '<br />';

                    $comments = array('First comment', 'Second comment', '...');
                    $complexBat->setComments($comments);
                    echo 'Comment bat with <b>"' . print_r($comments, true) . '"</b><br />';
                    echo '<pre>';
                    var_dump($complexBat);
                    echo '</pre>';

                    echo '<br />';

                    $complexBat->validate();
                    echo 'Validate bat<br />';
                    echo '<pre>';
                    var_dump($complexBat);
                    echo '</pre>';
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>