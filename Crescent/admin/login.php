<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン | Crescent Shoes 管理</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <header>
        <div class="inner">
            <span><a href="index.php">Crescent Shoes 管理</a></span>
        </div>
    </header>
    <div class="container">
        <main>
            <h1>ログイン</h1>
            <p class="error">ログインIDを入力してください。</p>
            <p class="error">パスワードを入力してください。</p>
            <p class="error">ログインIDまたはパスワードに誤りがあります。</p>
            <form action="" method="post">
                <table class="loginbox">
                    <tr>
                        <th>ログインID</th>
                        <td><input type="text" name="login_id"></td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td><input type="password" name="login_pass"></td>
                    </tr>
                </table>
                <p>
                    <input type="submit" value="ログイン">
                    ※ログインID・パスワードの登録は<a href="asign.php">こちら</a>
                </p>
            </form>
        </main>
        <footer>
            <p>&copy; Crescent Shoes All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
