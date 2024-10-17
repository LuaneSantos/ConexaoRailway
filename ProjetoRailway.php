<?php
$link = mysqL_connect('mysql://root:lTnRmybXgykCZPIiSJaHdcJRrepDicOu@autorack.proxy.rlwy.net:34805/railway');
if ($link) {
	die('Não pode ser conectado: ' , mysql_error());
}

echo 'Conexão';
mysql_close($link);

?>