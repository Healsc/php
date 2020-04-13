<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        li{
            list-style: none;
        }
    </style>
    <base href="<?php echo site_url();?>">
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    <div>
        <div>
            <a href="javascript:";></a>
            <button id="all" type="button">全选</button>
            <button id="no" type="button">取消</button>
            <button id="reverse" type="button">反选</button>
            <button id="del">删除选中</button>
        </div>
        <div>
            <?php
            foreach ($articles as $article){
                ?>
                <li>

                    <div>
                        <input type="checkbox" name="article" value="<?php echo $article->article_id;?>">
                        <span>
                            <a href="admin/get_article_by_id?id=<?php echo $article->article_id;?>" target="_blank">
                                  <?php echo $article->title;?>
                            </a>
                        </span>
                        <sapn>
                            <?php echo $article->post_date;?>
                        </sapn>
                    </div>

                </li>
            <?php }?>
        </div>
    </div>
    <script>
        $(function(){
            $('#del').on('click',function(){
              if(confirm('是否删除？')){
                  let str = '';
                  $(':checked').each(function(){
                      str = str + this.value + ",";
                      //console.log(this.value)
                  });
                  str = str.slice(0,-1);
                  console.log(str);
                  $.get("admin/delete_articles",{
                      'ids':str
                  },function (data) {
                      console.log(data)
                      if(data == 'success'){
                          $(':checked').parent().remove();
                          console.log('删除成功');
                      }else{
                          console.log('删除失败');
                      }
                  },'text');
              }
            });
            $('#all').click(function(){
                $("[name = article]:checkbox").prop("checked",true);
            })
            $('#no').click(function(){
                $("[name = article]:checkbox").prop('checked',false);
            })
            $('#reverse').click(function(){
                var $checked = $('[name = article]:checkbox:checked');
                var $unChcked = $('[name = article]:checkbox:not(:checked)');
                $checked.prop('checked',false);
                $unChcked.prop('checked',true)
            })
        });

    </script>
</body>
</html>

