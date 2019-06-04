<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            color: orange;
        }
        td{
            color: royalblue;
        }

        h1 {
            color: blue;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        array("name" => "Mai Văn Hoàn",
            "date" => "1983-08-20",
            "address" => "Hà Nội",
            "image" => "images/1.jpg"),
        array("name" => "Nguyễn Văn Nam",
            "date" => "1983-08-20",
            "address" => "Bắc Giang",
            "image" => "images/2.jpg"),
        array("name" => "Nguyễn Thái Hòa",
            "date" => "1983-08-21",
            "address" => "Nam Định",
            "image" => "images/3.jpg"),
        array("name" => "Trần Đăng Khoa",
            "date" => "1983-08-22",
            "address" => "Hà Tây",
            "image" => "images/4.jpg"),
        array("name" => "Nguyễn Đình Thi",
            "date" => "1983-08-17",
            "address" => "Hà Nội",
            "image" => "images/5.jpg")
    );
    ?>
    <?php
    foreach ($customerlist as $key => $values):
        ?>
        <tr><td><?php echo ++$key?></td>
            <td><?php echo $values['name']?></td>
            <td><?php echo $values['date']?></td>
            <td><?php echo $values['address']?></td>
            <td><img src="<?php echo $values['image']?>" alt="" width="200px" ></td>
        </tr>
        <?php
    endforeach;
    ?>
</table>
</body>
</html>


