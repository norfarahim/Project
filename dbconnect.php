<?php

	 $DBhost = "localhost";
	 $DBuser = "farah";
	 $DBpass = "example";
	 $DBname = "project";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }