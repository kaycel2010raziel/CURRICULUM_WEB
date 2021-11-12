<? 
	$usuario = $_POST['usuario'];
   	$contra = $_POST['contra'];
   	/*
	if($usuario =='reclutamiento@sie.gob.gt' &&  $contra == '1234' {
		$INDICADOR =1;
	}else{

		$INDICADOR = 2;
	}
	*/
	$INDICADOR =1;
	switch ($INDICADOR) {
		case 1:
				header("Location: cvmax.html");
				exit();
				break;
		case 2:
				header("Location: index.html");
				exit();
			break;
	}

?> 