
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>hw1</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<nav class="navbar">
    <div class="navbar-brand">I'm navbarbarbarbarbarbar...</div>
    <div class="navbar-links">
        <a href="form.php">成績上傳</a>
        <a href="upload.php">檔案上傳</a>
        <a href="abc.php">結構與設計說明</a>
    </div>
</nav>
</body>

</html>

    <div class="container">
        <h2>檔案上傳</h2>
        <form action="uploaded.php" method="POST" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 20px;">
                <input type="file" name="myfile" required>
            </div>
            <button type="submit">提交</button>
        </form>
    </div>

</body>
</html>