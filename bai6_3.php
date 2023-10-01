<!DOCTYPE html>
<html>

<head>
    <title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
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

        input {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php

        $input="Nhập mảng";
        $chuoi="";
        $MANG="";
        if(isset($_POST["nhap_mang"])){
            $input=$_POST["nhap_mang"];
            $MANG=explode(",", $input);
            $A=$B=[];
            for($i=0;$i<count($MANG);$i++){
                $B[$i]=1;
                $c=1;
                for($j=0;$j<count($A);$j++){
                    if($MANG[$i]==$A[$j]){
                        ++$B[$j];
                        $c=0;
                        break;
                    }
                }
                if($c==1){
                    $A[]=$MANG[$i];
                }
            }
            for($i=0;$i<count($A);$i++){
                $chuoi.=$A[$i].":".$B[$i]." ";
            }
            function mang_duy_nhat($MANG){
                global $A;
                for($i=0;$i<count($A);$i++){
                    echo $A[$i]." ";
                    
                }
            }
        }else{
            function mang_duy_nhat($chuoi){
                echo "NHẬP CHUỖI";
            }
        }
        

    ?>
    <form action="bai6_3.php" method="POST">
        <table border="0">
            <thead>
                <tr>
                    <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG
                        DUY NHẤT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mảng:</td>
                    <td><input type="text" name="nhap_mang" value="<?php echo $input; ?>"></td>
                </tr>
                <tr>
                    <td>Số lần xuất hiện:</td>
                    <td><input type="text" name="so_lan_xuat_hien" value="<?php echo $chuoi; ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td>Mảng duy nhất:</td>
                    <td><input type="text" name="mang_duy_nhat" value="<?php mang_duy_nhat($MANG); ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Thực hiện"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>