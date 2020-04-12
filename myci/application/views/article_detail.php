
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            echo $article->title;
        ?>

        <?php echo $article->username ?>
        <?php echo $article->post_date ?>
        <?php echo html_entity_decode($article->content, ENT_QUOTES, 'UTF-8') ?>
    </div>
</body>
</html>
