<?php
    //$no = $_GET["no"]; //lank.php, list.php에서 선택한 생수
    $conn = mysqli_connect('192.168.0.11','water','HeK28FZG','waterdemo');   //mysql에 연결  //변수conn에 mysql연결
    
    $sql = "select * from FACTORY";   //변수 sql에 
    $result = mysqli_query($conn,$sql);                             //변수 result에 쿼리문(물어봄) 값을 넣음 mysqli_query(연결객체, 쿼리) -> mysqli에 물어본다.
    while ($row=mysqli_fetch_assoc($result)){ 
?>


<table border="1" width = "500" height = "350">                     <!-- 테이블 보드값이 1, 넓이 500, 높이 350 -->
	<tr>
		<td align = "center" width="50" height="10">번호</td>       <!-- <tr> : 테이블의 행 // <td> : 테이블의 열 -->
		<td width="490" height="10"><?php echo '1'?></td></p>   <!-- width="490" height="10" 칸을 만들어 php출력, 변수 row의 num값을 -->
	</tr>
    <tr>
		<td align = "center" width="50" height="10">제목</td>   
		<td width="490" height="10"><?php echo $row["FACTORY_NAME"]?></td></p>    <!-- width="490" height="10" 칸을 만들어 php출력, 변수 row의 tittle값을 -->
	</tr>
    <tr>
        <td align = "center" colspan = "2"><?php echo $row["LOCATION"]?></td>   <!-- 가로 2개의 열 합병하여 php 출력, 변수 row의 content값을 넣어서-->
    </tr>
</table>

<?php
    }
?>