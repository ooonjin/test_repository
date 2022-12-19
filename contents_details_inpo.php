<?php
    $no = $_GET["no"];  //main_com제품 번호 
    $pn = $_GET["pn"]; //생수 이름
    $cp = $_GET["cp"];  //생수 용량
    $conn = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결  //변수conn에 mysql연결
    
    $sql = "select * from  PRODUCT where PRODUCT_NAME = '".$pn."' and CAPACITY = '".$cp."' and PRODUCT_NAME = '".$no.";";   //변수 sql에 
    echo $sql;
    //$result = mysqli_query($conn,$sql);                             //변수 result에 쿼리문(물어봄) 값을 넣음 mysqli_query(연결객체, 쿼리) -> mysqli에 물어본다.
    //while ($row=mysqli_fetch_assoc($result)){ 
?>

<table border="1" width = "900" height = "300">                     <!-- 테이블 보드값이 1, 넓이 500, 높이 350 -->
    <tr>
        <td rowspan="8" width = "600"> <?php echo '<img id="image_size" src="data:image/jpeg;base64,'.base64_encode( $row['IMAGE'] ).'"/>';?></td>
    </tr>
    <tr>
        <td>제품명</td>
        <td>얍</td>
    </tr>
    <tr>
        <td>업체명</td>
        <td>엽</td> 
    </tr>
    <tr>
        <td>가격</td>
        <td>야</td>
    </tr>
    <tr>
        <td>등급</td>
        <td>경고등급</td>
    </tr>

</table>
<div style="width: "></div>
<table border="1" width = "150" height = "150">
    <tr>
        <td><img src="img/water_D.png" width="15" height="15"></td>
        <td><font size="1">위험</font></td>
        <td><font size="1">경고 3번 이상 받은 상태</font></td>
    </tr>
    <tr>
        <td><img src="img/water_N.png" width="15" height="15"></td>
        <td><font size="1">보통</font></td>
        <td><font size="1">경고 1번 이상 받은 상태</font></td>
    </tr>
    <tr>
        <td><img src="img/water_S.png" width="15" height="15"></td>
        <td><font size="1">안전</font></td>
        <td><font size="1">이상 없는 상태</font></td>
    </tr>
</table>

<?php
    include "./other_product.php";
?>

<?php
    //}
?>