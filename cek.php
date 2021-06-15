 <?php 
include_once "apps/config.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = anti_injection($_POST['username']);
$password     = anti_injection(sha1($_POST['password']));

$login = mysql_query("select * from pj where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$pool = mysql_fetch_assoc(mysql_query("select * from pj where username='$username' and password='$password'"));
	$lock = mysql_fetch_assoc(mysql_query("select * from lokasi where id_pj = '$pool[id_pj]'"));
	$_SESSION['Username'] 	= $pool['username'];
	$_SESSION['Nama'] 	= $pool['nama_pj'];
	$_SESSION['ID_Lokasi'] 	= $lock['id_lokasi'];
	$_SESSION['Lokasi'] 	= $lock['nama_lokasi'];
	$_SESSION['Jabatan'] 	= $pool['jabatan'];
	$_SESSION['status'] = "login";

	header("location:dashboard.php");
}else{
	header("location:index.php?pesan=gagal");	
}

?>