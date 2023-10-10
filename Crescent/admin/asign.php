<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お知らせの追加 | Crescent Shoes 管理</title>
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
            <h1>会員登録</h1>
            <p class="error">ログインIDを入力してください。</p>
            <p class="error">パスワードは半角英数字各1字以上を含む8〜100字以内で入力してください。</p>
            <p class="error">再入力のパスワードが一致しません。</p>
            <form action="" method="post">
                <table class="loginbox">
                    <tr>
                        <th class="fixed">ログインID</th>
                        <td>
                            <input type="text" name="login_id">
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed">パスワード</th>
                        <td>
                            <input type="password" name="login_pass">
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <th class="fixed">再入力</th>
                        <td>
                            <input type="password" name="retype">
                        </td>
                    </tr>
                </table>
                <p>
                    <input type="submit" name="asign" value="登録">
                    <input type="submit" name="cancel" value="キャンセル">
                </p>
            </form>
            <table>
                <tr>
                    <th>番号</th>
                    <th>ログインID</th>
                    <th>パスワード</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>taro</td>
                    <td>$2y$10$HfxnbyyJJ3EAg6Uohq4IyuXi3t5aY4DH4O67P2FHMzgSSS3uK6bi2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>jiro</td>
                    <td>$2y$10$HfxnbyyJJ3EAg6Uohq4IyuXi3t5aY4DH4O67P2FHMzgSSS3uK6bi2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>saburo</td>
                    <td>$2y$10$HfxnbyyJJ3EAg6Uohq4IyuXi3t5aY4DH4O67P2FHMzgSSS3uK6bi2</td>
                </tr>
            </table>
        </main>
        <footer>
            <p>&copy; Crescent Shoes All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
