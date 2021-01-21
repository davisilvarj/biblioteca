<?php
	function delControle ($connect, $id){
		$query = "delete from admincontrol where id = '{$id}'";
		return mysqli_query($connect, $query);
	}