
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>成績上傳表單</title>
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
        <h2>成績資料填寫</h2>
        <form action="table.php" method="POST">
            <div class="form-group">
                <label for="id">座號:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="chinese">國文:</label>
                <input type="text" id="chinese" name="chinese" required>
            </div>
            <div class="form-group">
                <label for="english">英文:</label>
                <input type="text" id="english" name="english" required>
            </div>
            <div class="form-group">
                <label for="math">數學:</label>
                <input type="text" id="math" name="math" required>
            </div>
            <div class="form-group">
                <label for="social">社會:</label>
                <input type="text" id="social" name="social" required>
            </div>
            <div class="form-group">
                <label for="science">自然:</label>
                <input type="text" id="science" name="science" required>
            </div>
            <button type="submit">提交</button>
        </form>
    </div>

</body>
</html>