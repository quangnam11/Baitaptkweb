<?php 
include("inc/connect.inc");
$lop=$_GET['lop'];

$sql ="Select * from sinhvien where lop ='{$lop}'";
$rs=mysqli_query($con,$sql);
$str="<table>
    <th class=hd>
        <td>TT</td>
        <td>Ma so</td>
        <td>Ho ten</td>
        <td>Dia chi</td>
    </th>";
$tt=1;
while($row=mysqli_fetch_array($rs)){
    $str.="<tr>
        <td>{$tt}</td>;    
        <td>{$row['masv']}</td>;   
        <td>{$row['hoten']}</td>;   
        <td>{$row['diachi']}</td>;   
    </tr>";
    $tt++;
}
$str.="</table>";

echo $str;
?>