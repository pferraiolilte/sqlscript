<?php
#Completar com os dados do banco e autenticacao
#rodar com php -f nomedoarquivo no SSH

$dbname = 'name';
$dbuser = 'user';
$dbpass = 'pass';
$dbhost = 'host';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "Nao funcionou a conexao com o banco de dados";
} else {
  echo "Funcionou a conexao com o banco de dados";
}
