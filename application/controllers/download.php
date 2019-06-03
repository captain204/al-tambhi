<?php
class Download extends CI_controller{



 public function result($fileName){

 		if(!empty($_GET['file'])){
    	$fileName = basename($_GET['file']);
    	$filePath = './assets/file/results/'.$fileName;
   		 if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The file does not exist.';
    }
}











 	
 	//$file_name = $this->input->get('file_name');
	//$data = file_get_contents($file_name);
	//$name = 'my_results.php';
	//force_download($name,$data);
	//force_download($name,$data);



}


}


?>