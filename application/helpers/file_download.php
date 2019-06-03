<?php

 function download(){

	$file_name = $this->input->get('file_name');
	$data = file_get_contents($file_name);
	$name = 'my_results.php';
	//force_download($name,$data);
	force_download('./assets/file/results',NULL);

}




?>