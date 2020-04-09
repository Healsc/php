<?php
echo 'new_blog';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Default Examples</title>
    <style>
        form {
            margin: 0;
        }
        textarea {
            display: block;
        }
    </style>
    <base href="<?php echo site_url()?>">
    <link rel="stylesheet" href="assets/kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="assets/kindeditor/kindeditor-all-min.js"></script>
    <script charset="utf-8" src="assets/kindeditor/lang/zh-CN.js"></script>

</head>
<body>

    <form action="admin/post_article" method="post">
        <p>
           <span>标题</span>
            <input name="title" type="text">
        </p>
        <p>
            <select name="type_id" id="">
                <?php
                    foreach ($types as $type){
                ?>
                        <option value="<?php echo$type->type_id;?>">
                            <?php echo $type->type_name;?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </p>


        <textarea name="content" style="width:800px;height:400px;visibility:hidden;">KindEditor</textarea>

        <input type="submit" value="发布" style="margin-top: 10px">
    </form>

    <script>

        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="content"]', {
                resizeType : 1,
                allowPreviewEmoticons : false,
                allowImageUpload : false,
            });
        });
    </script>

</body>
</html>

