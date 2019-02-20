<?php
	
	$nome = "Diego";

	function test(){

		global $nome;
		echo $nome;

		$nome = 123;
	}

	function test2(){
		global $nome ;
		
		echo $nome;
	}

	test();
	test2();
?>