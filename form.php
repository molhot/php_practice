<html>
    <head>
    </head>

    <body>
        <h1>
            PHP
        </h1>
        <?php 
            if (isset($_GET['name'])&&strlen($_GET['name'])>0):
        ?>

        <p>
            <?php
            echo htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
            ?>
            さんこんにちは
        </p>
        <?php
            endif;
        ?>

        <form action = "form.php" method = "get">
            <p>
                名前を入力してください:
                <input type = "text" name = "name">
                <input type = "submit" value = "送信">
            </p>
        </form>
    </body>
</html>