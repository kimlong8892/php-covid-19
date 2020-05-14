<?php require('api.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê Covid 19</title>
</head>
<body>
    <table border="1px" cellspacing="0px" width="100%">
        <tr>
            <th>Khu vực</th>
            <th>Tổng</th>
            <th>Tử vong</th>
            <th>Đã khỏi</th>
        </tr>
        <?php forEach($rs->data as $key => $item) { ?>
            <tr>
                <td><?= $key;  ?></td>
                <td><?= $item->cases;  ?></td>
                <td><?= $item->deaths;  ?></td>
                <td><?= $item->recovered;  ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>