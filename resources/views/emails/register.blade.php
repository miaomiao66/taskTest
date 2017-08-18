<!DOCTYPE html>
<html>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                <a href="{{ URL('register?email=' . $encryptEmail . '&code=' . $code) }}" target="_blank">点击激活你的账号</a>
                </div>
            </div>
        </div>
    </body>
</html>
