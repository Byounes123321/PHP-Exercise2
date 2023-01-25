<!DOCTYPE html>
<html>
    <head>
        <title>PHP Exercise 2: Links and If Statements</title>
        </head>
        <body>
            <h1>PHP Exercise 2: Links and If Statements</h1>
            <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>
            <?php
            $randomNumber =ceil( rand( 1,3 ) );

            echo '<p>The random number is '.$randomNumber.'.</p>';

            if( $randomNumber == 1 )
                {
                    $linkName = 'Codecademy';
                    $linkURL = 'https://www.codecademy.com/';
                    $linkImage ='./img/codeCademy.webp';
                    $linkDescription = 'Learn to code interactively, for free.';
                }
                elseif( $randomNumber == 2 )
                {
                    $linkName = 'W3Schools';
                    $linkURL = 'https://www.w3schools.com/';
                    $linkImage = './img/w3schools.jpg';
                    $linkDescription = 'W3Schools is optimized for learning,testing, and training.';
                }
                else
                {
                    $linkName = 'Mozilla Developer Network';
                    $linkURL = 'https://developer.mozilla.org/en-US/';
                    $linkImage = '.\img\mozilladevelopernetwork.png';
                    $linkDescription = 'The Mozilla Developer Network (MDN)provides information about Open Web technologies.';
                }

                echo '<h1>'.$linkName.'</h1>
                <p>'.$linkDescription.'<p>
                <img src='.$linkImage.' height=200px></img>
                <p><a href='. $linkURL.'>Visit '.$linkName.' </p>' ;

                ?>
                </body>
                </html>