<?php  
 $sumber = 'http://papaside.com/data.php';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 
 echo "<h1 align='center'> Kondisi cuaca hari ini di ".count($data)." Kota</h1>";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style>
  table {
   width: 700%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body background="bg.jpg">
 <table border="1" class="table table-dark" align="center">
  <tr>
   <th>No</th>
   <th>Kota</th>
   <th>Siang</th>
   <th>Malam</th>
   <th>Dini Hari</th>
   <th>Suhu</th>
   <th>Kelembapan</th>
  </tr>
  <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    
    print "<td>".$a."</td>";
    
    print "<td>".$data[$a]['Kota']."</td>";
    print "<td>".$data[$a]['siang']."</td>";
    print "<td>".$data[$a]['malam']."</td>";
    print "<td>".$data[$a]['dini_hari']."</td>";
    print "<td>".$data[$a]['suhu']."</td>";
    print "<td>".$data[$a]['Kelembapan']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>