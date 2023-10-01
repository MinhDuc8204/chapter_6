<!DOCTYPE html>
<html>

<head>
    <title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
    <meta charset="utf-8">
    <style>
        * {
            font-family: Tahoma;
        }

        table {
            width: 400px;
            margin: 100px auto;
        }

        table th {
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <?php
    $mang_so = "Nhập số";

    if (isset($_POST["so_phan_tu"]) && is_numeric($_POST["so_phan_tu"])) {
        $mang_so = $_POST["so_phan_tu"];
        $CHUOI = "";
        $MANG = "";
        $TONG = 0;
        for ($i = 0; $i < $mang_so; $i++) {
            $CHUOI .= mt_rand(0, 20) . " ";
        }
        $MANG = explode(" ", $CHUOI);
        $MAX = $MANG[0];
        $MIN = $MANG[0];
        for ($i = 0; $i < count($MANG) - 1; $i++) {
            $TONG += $MANG[$i];
            if ($MAX < $MANG[$i]) {
                $MAX = $MANG[$i];
            }
            if ($MIN > $MANG[$i]) {
                $MIN = $MANG[$i];
            }
        }
        function xuat_mang($mang_so)
        {
            global $CHUOI;
            echo $CHUOI;
        }
        function tim_max($mang_so)
        {
            global $MAX;
            echo $MAX;
        }
        function tim_min($mang_so)
        {
            global $MIN;
            echo $MIN;
        }
        function tinh_tong($mang_so)
        {
            global $TONG;
            echo $TONG;
        }
    } else {
        function xuat_mang($n)
        {
            echo "ERROL";
        }
        function tim_max($n)
        {
            echo "ERROL";
        }
        function tim_min($n)
        {
            echo "ERROL";
        }
        function tinh_tong($n)
        {
            echo "ERROL";
        }
    }

    ?>

    <form action="bai6_2.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập số phần tử:</td>
                    <td><input type="text" name="so_phan_tu" width="100%" value="<?php echo $mang_so; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Phát sinh và tính toán"></td>
                </tr>
                <tr>
                    <td>Mảng: </td>
                    <td><input type="text" name="mang_so" disabled="disabled" value="<?php xuat_mang($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTLN ( MAX ) trong mảng: </td>
                    <td><input type="text" name="gtln" disabled="disabled" value="<?php tim_max($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTNN ( MIN ) trong mảng: </td>
                    <td><input type="text" name="ttnn" disabled="disabled" value="<?php tim_min($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>Tổng mảng: </td>
                    <td><input type="text" name="tong" disabled="disabled" value="<?php tinh_tong($mang_so) ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>