<ul class="navbar-nav mr-auto">
<?php
switch($_SESSION['Jabatan']){

case 1 : 
    ?>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="dashboard.php?on=Data Mahasiswa">Data Mahasiswa</a>
        </li>
    <li class="nav-item">
          <a class="nav-link" href="dashboard.php?on=Lokasi">Lokasi Peminjaman</a>
        </li>
    <li class="nav-item">
          <a class="nav-link" href="dashboard.php?on=PJ">Data Penanggung Jawab</a>
        </li>
        
       
<?php
break;

case 2 : 

    ?>


<li class="nav-item">
          <a class="nav-link" href="dashboard.php?on=Data Mahasiswa">Data Mahasiswa</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="dashboard.php?on=Sepeda">Data Sepeda</a>
        </li>

<?php

    break;
}
?>
<li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        </ul>

        