<?php
    $conn = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결 
?>

<?php
    $a = $_GET["search_product"];  //받은 생수 이름
    // echo $a;
?>


<!-- select * from PRODUCT where PRODUCT_NAME = $a

LIKE  -->

<?php
    $sql = "SELECT PRODUCT_NAME, FACTORY_NAME,PRODUCT_NUMBER,IMAGE, CAPACITY, PRICE
    FROM PRODUCT
    WHERE PRODUCT_NAME = '$a'
    ORDER BY VIEW_COUNT ASC;"; //sql에 전체 레코드 검색 명령 저장

    $result=mysqli_query($conn, $sql);

    while ($row=mysqli_fetch_assoc($result)){
?>

<table border="1" width = "1000" height = "300" align="center">
            <tr>
                <td rowspan="5" width = "7%">
                    <?php
                        echo "숫자";
                    ?>
                </td>
                <td rowspan="5" width = "35%">
                    <?php 
                        echo "<a href =\"DETAILS.php?no=".$row["PRODUCT_NUMBER"]."\"><img id='image_full' src='data:image/jpeg;base64,".base64_encode($row['IMAGE'])."' /></a>";
                    ?>
                </td>
            </tr>
            <tr>
                <td  width = "10%">이름</td>
                <td colspan="2"><?php echo $row['PRODUCT_NAME']; ?></td>
            </tr>
            <tr>
                <td>업체명</td>
                <td colspan="2"><?php echo $row['FACTORY_NAME']; ?></td>
            </tr>
            <tr>
                <td>가격</td>
                <td colspan="2"><?php echo $row['PRICE']."원"; ?></td>
            </tr>
            <tr>
                <td>등급</td>
                <td  width = "10%">동그라미</td>
                <td>보통</td>
            </tr>
        </table>
        
<?php
    }
    mysqli_close($conn);    //DB연결 끊기
?>
