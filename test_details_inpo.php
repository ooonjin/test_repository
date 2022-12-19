<?php
    include "./sideR.php";
?>

<?php
    $no = $_GET["no"];  //main_com제품 번호 
    //$pn = $_GET["pn"]; //생수 이름
    //$cp = $_GET["cp"];  //생수 용량
    //$im = $_GET["im"];  //생수 이미지
    //$pr = $_GET["pr"];  //생수 가격
   

    $conn = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결  //변수conn에 mysql연결
    
    $sql = "select * from  PRODUCT where PRODUCT_NUMBER = ".$no.";";   //변수 sql에 $no는 PRODUCT_NUMBER
   

    //$sql = "select num, title, content from notice1 where num=".$no;
    //echo $sql;
    $result = mysqli_query($conn,$sql);                             //변수 result에 쿼리문(물어봄) 값을 넣음 mysqli_query(연결객체, 쿼리) -> mysqli에 물어본다.
    while ($row=mysqli_fetch_assoc($result)){ 
?>


<!-- <div style="width:"></div> -->

<!-- 이미지 -->
<table border="1" width = "25%" height = "700" align="left">                    
<!-- <div id="image_full"></div> 상세정보 생수 크기 조정 -> 안됌 -->
    <tr>
        <!-- <td rowspan="8" width = "600"><?php// echo '<img id="image_size" src="data:image/jpeg;base64,'.base64_encode($im).'"/>';?></td>PRICE -->
        <td colspan = "8" width = "500">
            <?php echo '<img id="image_full" src="data:image/jpeg;base64,'.base64_encode( $row['IMAGE'] ).'"/>';?>
        </td>
    </tr>
    <!-- 위험등급표 -->
    <tr>
        <td><img src="img/water_D.png" width="30" height="30"></td>
        <td><font size="3">위험</font></td>
        <td><font size="3">경고 3번 이상 받은 상태</font></td>
    </tr>
    <tr>
        <td><img src="img/water_N.png" width="30" height="30"></td>
        <td><font size="3">보통</font></td>
        <td><font size="3">경고 1번 이상 받은 상태</font></td>
    </tr>
    <tr>
        <td><img src="img/water_S.png" width="30" height="30"></td>
        <td><font size="3">안전</font></td>
        <td><font size="3">이상 없는 상태</font></td>
    </tr>
</tbale>

<!-- 생수 정보 -->
<table border="1" width = "40%" height = "500" align="right">
    <tr>
        <td><font size="5">제품명</font></td>
        <td><font size="5"><?php echo $row["PRODUCT_NAME"]?></font></td>   <!-- 생수 이름 -->
    </tr>
    <tr>
        <td><font size="5">업체명</font></td>
        <td><font size="5"><?php echo $row["FACTORY_NAME"];?></font></td>
    </tr>
    <tr>
        <td><font size="5">가격</font></td>
        <td><font size="5"><?php echo $row["PRICE"]?></font></td>          <!-- 생수 가격 -->
    </tr>
    <tr>
        <td><font size="5">등급</font></td>
        <td><font size="5">경고등급</font></td>
    </tr>
    <tr>
        <div>
 
        </div>
    </tr>

</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
    //$no = $_GET["$no"]; //생수 이름
    $conn2 = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결  //변수conn에 mysql연결
    $sql2= "SELECT PRODUCT_NAME 
    FROM PRODUCT
    WHERE FACTORY_NAME = $no
    GROUP BY PRODUCT_NAME";
?>
<?php
    $bb= $row["FACTORY_NAME"]."의 다른 제품 보기";
    echo "<font size=5>".$bb;
?>
<?php
    $_GET["aa"]= $row["FACTORY_NAME"];
    include "./other_product.php"
?>

<?php
    }
?>


