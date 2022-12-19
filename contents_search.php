<?php
    //$no = $_GET["no"]; //lank.php, list.php에서 선택한 생수
    $conn = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결  //변수conn에 mysql연결
    
    $sql = "SELECT PRODUCT.PRODUCT_NAME, PRODUCT.CAPACITY, PRODUCT.PRICE,
	FACTORY.FACTORY_NAME, FACTORY.LOCATION
    FROM PRODUCT, FACTORY
    WHERE PRODUCT.FACTORY_NAME = FACTORY.FACTORY_NAME AND
	PRODUCT.PRODUCT_NAME = “제품명” AND
	PRODUCT.CAPACITY = “제품용량”;";   //변수 sql에 

    $result = mysqli_query($conn,$sql);                             //변수 result에 쿼리문(물어봄) 값을 넣음 mysqli_query(연결객체, 쿼리) -> mysqli에 물어본다. 

    while ($row=mysqli_fetch_assoc($result)){
?> 

<?php
    $search_product=$_GET['$search_product'];
?>

<table border="1" width = "500" height = "150" align = "center">                     <!-- 테이블 보드값이 1, 넓이 500, 높이 350 -->
	<tr>
        <td rowspan="8"><?php echo $row["search_product.FACTORY_NAME"]?></td>
    </tr>
    <tr>
        <td rowspan="8">사진</td>
    </tr>
    <tr>
        <td><?php echo $_GET['search_product']."<br/>"; ?></td>
    </tr>
    <tr>
        <td><?php echo $_GET['search_product.FACTORY']."<br/>"; ?></td> 
    </tr>
    <tr>
        <td><?php echo $_GET['search_product.PRICE']."<br/>"; ?></td>
    </tr>
    <tr>
        <td>등급</td>
    </tr>

</table>

<?php
    }
?>