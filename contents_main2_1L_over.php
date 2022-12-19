<?php
    include "./header.php";         //contents_main2_1L_low.php가 기본메인, over은 레이아웃 추가고정
    include "./sideL.php";
    //include "./contents_main2.php";
    include "./sideR.php";
?>

<div style="float:left;">
    <form method="POST">
        <!-- 용량 : <input type="radio" name="1L_down" value=' ' onclick="document.location.href='MAIN.php'"/>1L 이하
            <input type="radio" name="1L_up" value=' ' onclick="document.location.href='contents_main2_1L_over.php'"/>1L 이상<br/> -->
            용량 : <input type="radio" name="1L" value="1" onclick="document.location.href='MAIN.php'"/>1L 이하
            <input type="radio" name="1L" value="2" onclick="document.location.href='contents_main2_1L_over.php'" checked/>1L 이상<br/>
    </form>
</div>

<?php
    //$no = $_GET["no"]; //lank.php, list.php에서 선택한 생수
    $conn = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결  //변수conn에 mysql연결
    
    $sql = "SELECT FACTORY_NAME, PRODUCT_NAME, CAPACITY, PRICE ,IMAGE, PRODUCT_NUMBER
            FROM PRODUCT
            WHERE CAPACITY >= 1000 AND
                0 = (SELECT COUNT(*)
                    FROM WARNING
                    WHERE WARNING.FACTORY_NAME = PRODUCT.FACTORY_NAME)
            ORDER BY PRICE ASC";   //변수 sql에 
 
 

    $result = mysqli_query($conn,$sql);                             //변수 result에 쿼리문(물어봄) 값을 넣음 mysqli_query(연결객체, 쿼리) -> mysqli에 물어본다. 
?>

<div id='scroll'> <!--test css사용-->
<?php
    while ($row=mysqli_fetch_assoc($result)){
?>
    <!-- <link rel="stylesheet" type="text/css" href="reset.css" /> -->
        <div id='box'>
    
        <table width=110px height=210px border=1px align="left" style="margin: left;">
        <tr height=150px>   <!--추천생수 이미지-->
            <td>
                <?php
                    echo "<a href =\"DETAILS.php?no=".$row["PRODUCT_NUMBER"]."\"><img id='image_size' src='data:image/jpeg;base64,".base64_encode($row['IMAGE'])."' /></a>";
                ?>
            </td>
        </tr>
        <tr>                <!--추천생수 상품명-->
            <td><?php echo $row["PRODUCT_NAME"];?></td>
        </tr>
        <tr>                <!--추천생수 가격-->
        <td><?php echo $row["PRICE"]."원";?></td>    
        </tr>
        </table>
    
        </div>
        
<?php
    }
?>
</div>
