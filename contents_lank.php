<?php
    $conn = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결 
?>

<table border="1" style="count;">
	<tr>
		<td align = "center">순위</td>
        <td align = "center">이미지</td>
        <td align = "center">상품명</td>
        <td align = "center">조회수</td>
    </tr>


<?php

    $sql = "SELECT PRODUCT_NAME, IMAGE, PRODUCT_NUMBER, AVG(VIEW_COUNT) as PRODUCT_VIEW_COUNT
    FROM PRODUCT
    Group by PRODUCT_NAME
    ORDER BY PRODUCT_VIEW_COUNT DESC, PRODUCT_NAME ASC;"; //sql에 전체 레코드 검색 명령 저장

    $result=mysqli_query($conn, $sql);

    while ($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['PRODUCT_NUMBER']."</td>";
        echo "<td>".'<img id="image_bigsize" src="data:image/jpeg;base64,'.base64_encode($row['IMAGE']).'"/>'."<td>";
        echo "<td>".$row['PRODUCT_NAME']."</td>";
        echo "<td>".$row['PRODUCT_VIEW_COUNT']."</td>";
        echo "</tr>";
    }

    mysqli_close($conn);    //DB연결 끊기
?>
</table>
