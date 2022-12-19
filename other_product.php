<div id='scroll'> <!--test css사용-->

<?php
    //$pn = $_GET["$pn"]; //생수 이름
    // $fn = $_GET["fn"];      //공장이름
    $no = $_GET["aa"];
    $conn2 = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결  //변수conn에 mysql연결
    // $factory = "select * from=".$fn.";";
    $sql2= "SELECT PRODUCT_NAME ,IMAGE, PRICE
    FROM PRODUCT
    WHERE FACTORY_NAME = \"$no\";"
    
    // GROUP BY PRODUCT_NAME";
?>

<?php
    $result2 = mysqli_query($conn2, $sql2);                             //변수 result에 쿼리문(물어봄) 값을 넣음 mysqli_query(연결객체, 쿼리) -> mysqli에 물어본다.

    while ($row=mysqli_fetch_assoc($result2)){
?>
    <!-- <link rel="stylesheet" type="text/css" href="reset.css" /> -->
        <div id='box'><!--  -->
        <br><br><br>
        <table width=110px height=210px border=1px align="left" style="margin: left;">
        <tr height=150px>   <!--다른 생수 이미지-->
            <td>
                <?php echo '<img id="image_size" src="data:image/jpeg;base64,'.base64_encode( $row['IMAGE'] ).'"/>';?>
                <?php //echo "<a href =\"DEAILS.php?no=".$row["PRODUCT_NUMBER"]."\">".$row["IMAGE"]."</a>"; ?>
            </td>
        </tr>
        <tr>                <!--다른 생수 상품명-->
            <td><?php echo $row["PRODUCT_NAME"];?></td>
        </tr>
        <tr>                <!--다른 생수 가격-->
            <td><?php echo $row["PRICE"].'원';?></td>
        </tr>
        </table>
    
        </div>

        
<?php
    }
?>