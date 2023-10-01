<!DOCTYPE html>
<html>

<head>
    <title>Nhập và tính toán trên dãy số</title>
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
    $input="";
    if(isset($_POST["nhap_mang"])){
        $input=filter_input(INPUT_POST, "nhap_mang");
        $a=explode(",", $input);
        $ket_qua=0;
        for($i=0;$i<count($a);$i++){
            if(is_numeric($a[$i])){
                $ket_qua+=$a[$i];
            }else{
                $ket_qua="ERROLL!!";
                break;
            }
        }
    }else{
        $ket_qua="NONE!!";
    }
?>

    <form method="POST" action="bai6_1.php">
        <table>
            <thead>
                <tr>
                    <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập dãy số:</td>
                    <td><input type="text" name="nhap_mang" value="<?php echo $input ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_goi" value="Tổng dãy số"></td>
                </tr>
                <tr>
                    <td>Tổng dãy số:</td>
                    <td><input type="text" name="ket_qua" disabled="disabled" value="<?php echo $ket_qua ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>