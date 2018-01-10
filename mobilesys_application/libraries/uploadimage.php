<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Uploadimage
{
	public $namefile;
	public $new_fileImg;
	public $type_fichier;
	public $src_imgP;
	public $src_imgminP;
	
	public $uploaddir_P;
	public $uploaddir_min;
	
	public $tableau=array();
	 function __construct($config=array())
	 {
	 		/* $this->Setnamefile($config["namefile"]);
			 $this->new_fileImg=$config["name_newfile"].".".$this->type_fichier;
			$this->src_imgP=$config["src_imgP"];
			$this->src_imgminP=$config["src_imgminP"];
			*/
			
	 }
	 
	 
	 public function Count_fileUpload($filename)
	 {
		 
		
		return (count($_FILES[$filename]["name"]));
	 }
	 
	 public function UpluadFile_exist($filename_)
	 {
		// print (count($_FILES[$filename_]['name']));
		$file=array();
		$file=$_FILES[$filename_];
		$nbrfile=count($file);
		 if($nbrfile>0) 
		 return true;
		 else
		 return false;
		 
	 }
	 public function recup_extimage($filename_,$index)
	 {
	 			$namefile_=$_FILES[$filename_]["name"][$index];
		 		$typetabfich=@split('[.]',$namefile_);
				$nbr=count($typetabfich);
				$type_fichier=$typetabfich[$nbr-1];
		
				 return $type_fichier;
	 }
	 public function Setnewnamefile($id,$namefile_)
	 {
		 
		 		$typetabfich=@split('[.]',$namefile_);
				$nbr=count($typetabfich);
				$type_fichier=$typetabfich[$nbr-1];
		
		 
				 return $this->new_fileImg.$id.".".$type_fichier;
				 
				 //return "cc";
	 }
	 
	 public function Setnewnamefile_($id,$namefile_,$newfileimg)
	 {
		 		$typetabfich=@split('[.]',$namefile_);
				$nbr=count($typetabfich);
				$type_fichier=$typetabfich[$nbr-1];
		
		 
				 return $newfileimg.$id.".".$type_fichier;
	 }
	 
	public function  Upload_imageP($filename,$new_fileImg,$idname_file,$src_imgP,$src_imgminP)
	{
			
			
			$this->new_fileImg=$new_fileImg;
			$file=array();
			$file=$_FILES[$filename];
			$nbrfile=count($file);
			if($nbrfile==0)
			{
				return false;
			}else
			{
			
						$i=0;
						foreach ($_FILES[$filename]["name"] as $namefile_old)
						{
							//global $i;
							 
							
							
							$this->uploaddir_min =_pathroot().$src_imgminP;
							$this->uploaddir_P=_pathroot().$src_imgP;

							
							//print ("UPload OK.".$_FILES[$filename]['name'][$i]);
							if (is_uploaded_file($_FILES[$filename]['tmp_name'][$i]))
							{ 
							
							//print ("UPload OK.".$this->uploaddir_P);

										$this->tableau=@getimagesize($_FILES[$filename]['tmp_name'][$i]);
										//code Extension fichier
										//$typetabfich=@split('[.]',$filename);
										//$nbr=count($typetabfich);
										//$typefiche=$typetabfich[$nbr-1];
										//print ($filename);
										$name_P=$this->Setnewnamefile($idname_file,$namefile_old);//name file modifier
										
										$this->uploaddir_P=$this->uploaddir_P.$name_P;
										$this->uploaddir_min=$this->uploaddir_min.$name_P;


										
										//print ("index".$i);
										
										$resultP = move_uploaded_file($_FILES[$filename]['tmp_name'][$i],$this->uploaddir_P);
										
										if ($resultP != 1)
										{ 
										
												die("Error uploading file.  Please contact an administrator");
										}
			
										$this->Upload_imageMin();
										
							
						}//fin if
							$idname_file++;
							$i++;
							
						}//fin foreach
			
			
			return true;			
			}
			
			
			
			
	}//fin Upload_imageP
	
	public  function  Upload_imageMin()
	{
				//print ("UPLOAD IMAGE MIN <br><br>".$this->uploaddir_P);
				// si notre image est de type jpeg
				$ratio=180;
				if ($this->tableau[2] == 2) {
					
					// on crée une image à partir de notre grande image à l'aide de la librairie GD
					$src = imagecreatefromjpeg($this->uploaddir_P);
					// on teste si notre image est de type paysage ou portrait
					if ($this->tableau[0] > $this->tableau[1]) {
						$im = imagecreatetruecolor(round(($ratio/$this->tableau[1])*$this->tableau[0]), $ratio);
						imagecopyresampled($im, $src, 0, 0, 0, 0, round(($ratio/$this->tableau[1])*$this->tableau[0]), $ratio, $this->tableau[0], $this->tableau[1]);
					}
					else {
						$im = imagecreatetruecolor($ratio, round(($ratio/$this->tableau[0])*$this->tableau[1]));
						imagecopyresampled($im, $src, 0, 0, 0, 0, $ratio, round($this->tableau[1]*($ratio/$this->tableau[0])), $this->tableau[0], $this->tableau[1]);
					}
					// on copie notre fichier généré dans le répertoire des miniatures
					imagejpeg ($im,$this->uploaddir_min);
					
					//print ("UPLOAD IMAGE MIN JPG");
				}
				//si png
				elseif ($this->tableau[2] == 3) {
					
					$src = imagecreatefrompng($this->uploaddir_P);
					if ($this->tableau[0] > $this->tableau[1]) {
						$im = imagecreatetruecolor(round(($ratio/$this->tableau[1])*$this->tableau[0]), $ratio);
						imagecopyresampled($im, $src, 0, 0, 0, 0, round(($ratio/$this->tableau[1])*$this->tableau[0]), $ratio, $this->tableau[0], $this->tableau[1]);
					}
					else {
						$im = imagecreatetruecolor($ratio, round(($ratio/$this->tableau[0])*$this->tableau[1]));
						imagecopyresampled($im, $src, 0, 0, 0, 0, $ratio, round($this->tableau[1]*($ratio/$this->tableau[0])), $this->tableau[0], $this->tableau[1]);
					}
					imagepng ($im,$this->uploaddir_min);
					//print ("UPLOAD IMAGE MIN PNG");
				}

	}//fin function Upload_imageMin
	
	public function fileimage_1existe($namefile)
	{
			if(@$_FILES[$namefile]["name"]!="")
			{
				return true;
			}else
			{
				
				
				return false;//Pas image uploader
			}
			
	}
}