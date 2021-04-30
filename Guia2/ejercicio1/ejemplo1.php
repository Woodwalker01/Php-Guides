<!Doctype html>
<html lang="es">
<head>
    <title>Scripts con (X)HTML y PHP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,user-scalable=no,initial scale=1.0,maximun-scale=1.0,minimum-scale=1.0"/>
    <link rel="stylesheet" media="screen" href="css/htmlphp.css">
    <script src="js/modernizr.custom.lis.js"></script>
    </head>
    <body>
    <div class="wrap">
    <header>
        <h1>Demostracion de HTML y PHP</h1>
    </header>
    <section class="main">
    <article id="html">
        <div class="text">
        <p>
            &lt;!Doctype html&gt;<br/>
            &lt;html&gt;<br/>
            </p>
            <p> parte de HTML normal.</p>
            <p>
            &lt;/html&gt;
            </p>
            </div>
            <div class="img">
                <img src="img/html5.png" alt="logo de HTML5"/>
                </div>
                </article>
                <?php
                echo "<article id=\"php\">\n";
                echo "<div class=\"text\">";
                echo "<p>&lt;=php<br/>";
                echo "parte con php.</p>";
                echo "<p>?&gt;</p>";
                echo "</div>";
                echo "<img src?\"img/php.png\" alt=\"logo de html5\"/>";
                echo "</div>";
                echo "\n</article>\n";
                ?>
                </section>
                </body>
                </div>
                </html>
                

            