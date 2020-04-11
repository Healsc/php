<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url()?>">
    <style>

    </style>
</head>
<body>
    <?php if(isset($results)){?>
        <table >
            <?php foreach ($results as $index=>$result){?>

                <tr>
                    <th>序号</th>
                    <th>分类名</th>
                    <th>文章</th>
                    <th>操作</th>

                </tr>
                <tr>
                    <td><?php echo $index;?></td>
                    <td><?php echo $result->type_name;?></td>
                    <td><?php echo $result->num?></td>
                    <td>
                        <a href="javascript:;">修改</a>
                        <a href="#">删除</a>
                    </td>
                    <br/>
                </tr>
            <?php }?>
        </table>

    <?php }?>
</body>
</html>
