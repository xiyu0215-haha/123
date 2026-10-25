<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>成績列表</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- 功能一：include 嵌入導覽列 -->
    <?php include __DIR__ . '/navbar.html'; ?>

    <div class="container">
        <h2>成績列表資料</h2>
        
        <?php
        // 接收表單傳遞過來的五科資料
        $id = isset($_POST['id']) ? $_POST['id'] : '1';
        $chinese = isset($_POST['chinese']) ? (int)$_POST['chinese'] : 100;
        $english = isset($_POST['english']) ? (int)$_POST['english'] : 100;
        $math = isset($_POST['math']) ? (int)$_POST['math'] : 100;
        $social = isset($_POST['social']) ? (int)$_POST['social'] : 100;
        $science = isset($_POST['science']) ? (int)$_POST['science'] : 100;

        // 計算五科平均（四捨五入至小數第一位）與等第
        $avg = round(($chinese + $english + $math + $social + $science) / 5, 1);
        if ($avg >= 90) {
            $grade = 'A';
        } else if ($avg >= 80) {
            $grade = 'B';
        } else if ($avg >= 70) {
            $grade = 'C';
        } else {
            $grade = 'F';
        }
        ?>

        <p><a href="form.php">+ 新增</a></p>
        
        <table>
            <tr>
                <th>座號</th>
                <th>國文</th>
                <th>英文</th>
                <th>數學</th>
                <th>社會</th>
                <th>自然</th>
                <th>平均</th>
                <th>等第</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($id); ?></td>
                <td><?php echo htmlspecialchars($chinese); ?></td>
                <td><?php echo htmlspecialchars($english); ?></td>
                <td><?php echo htmlspecialchars($math); ?></td>
                <td><?php echo htmlspecialchars($social); ?></td>
                <td><?php echo htmlspecialchars($science); ?></td>
                <td><?php echo htmlspecialchars($avg); ?></td>
                <td><?php echo htmlspecialchars($grade); ?></td>
            </tr>
        </table>
    </div>

</body>
</html>