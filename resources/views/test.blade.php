<!DOCTYPE html>
<html>
    <head>
        <title>首页</title>
    </head>
    <body>
        

        <form action="/check" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            用户名:<input type='file' name='image' id='ufile'/>
            <input type='submit' value="登录" />
        </form>

    </body>
</html>