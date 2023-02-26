<?php

require ('Human.php');
require ('Siak.php');
require ('Mahasiswa.php');

$data = new Mahasiswa();
$data->setNik("12345678910");
$data->setNim("2105885");
$data->setNama("Ainii");
$data->setEmailEdu("qrtainii@upi.edu");
$data->setJenisKelamin("Perempuan");
$data->setProdi("Ilkomp");
$data->setFakultas("FPMIPA");
$data->setAsalUniv("UPI");

$data1 = new Mahasiswa();
$data1->setNik("789066727363");
$data1->setNim("2100115");
$data1->setNama("Shawn");
$data1->setEmailEdu("mendesshawn@itb.edu");
$data1->setJenisKelamin("Pria");
$data1->setProdi("Kimia");
$data1->setFakultas("FMIPA");
$data1->setAsalUniv("ITB");

echo "DATA KELOMPOK CERIA";

echo "<table width = 500 border=1> ";
echo "<tr>
        <th>NIK</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Jenis Kelamin</th>
        <th>Program Studi</th>
        <th>Fakultas</th>
        <th>Universitas</th>
        <th> Foto </th>
       </tr> <tr> <td>"; echo $data->getNik();
echo "</td> <td>"; echo $data->getNim();
echo "</td> <td>"; echo $data->getNama();
echo "</td> <td>"; echo $data->getEmailEdu();
echo "</td> <td>"; echo $data->getJenisKelamin();
echo "</td> <td>"; echo $data->getProdi();
echo "</td> <td>"; echo $data->getFakultas();
echo "</td> <td>"; echo $data->getAsalUniv();
echo "</td> <td>"; echo "<img src='foto/camila-cabello.jpg' width='100' heigt='200'/>";
echo "</td> </tr> <tr> <td>"; echo $data1->getNim();
echo "</td> <td>"; echo $data1->getNim();
echo "</td> <td>"; echo $data1->getNama();
echo "</td> <td>"; echo $data1->getEmailEdu();
echo "</td> <td>"; echo $data1->getJenisKelamin();
echo "</td> <td>"; echo $data1->getProdi();
echo "</td> <td>"; echo $data1->getFakultas();
echo "</td> <td>"; echo $data1->getAsalUniv();
echo "</td> <td>"; echo "<img src='foto/shawn-mendes.jpg' width='100' heigt='200'/>";
echo "</td> </tr>
    </table>";

?>