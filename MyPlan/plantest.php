<?php
$fp = @fopen("D:\\yimutest\\3\\MyPlan\\log.txt", "a+");
fwrite($fp, date("Y-m-d H:i:s")."PHP�����Զ����У�\n");
fclose($fp);
?>