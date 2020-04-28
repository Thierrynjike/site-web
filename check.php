<?php    
session_start();
    $taille=$_POST['height'];
    $poids=$_POST['weight'];
    $sexe =$_POST['sex'];
	$vetSize="";
	
	//Catalog hommes
	
	$tabHXXS= array(0 => 162, 1 => 165, 2 => 49, 3 => 68, 4 => 'XXS');
	$tabHXS= array(0 => 166, 1 => 170, 2 => 50, 3 => 72, 4 => 'XS');
	$tabHS= array(0 => 171, 1 => 175, 2 => 54, 3 => 76, 4 => 'S');
	$tabHM= array(0 => 175, 1 => 180, 2 => 57, 3 => 80, 4 => 'M');
	$tabHL= array(0 => 181, 1 => 186, 2 => 61, 3 => 86, 4 => 'L');
	$tabHXL= array(0 => 186, 1 => 191, 2 => 65, 3 => 91, 4 => 'XL');
	$tabHXXL= array(0 => 189, 1 => 194, 2 => 67, 3 => 94, 4 => 'XXL');
	
	
	//Catalog femmes
	
	
	$tabFXXS= array(0 => 155, 1 => 160, 2 => 45, 3 => 63, 4 => 'XXS');
	$tabFXS= array(0 => 160, 1 => 163, 2 => 48, 3 => 68, 4 => 'XS');
	$tabFS= array(0 => 164, 1 => 168, 2 => 49, 3 => 70, 4 => 'S');
	$tabFM= array(0 => 169, 1 => 170, 2 => 51, 3 => 72, 4 => 'M');
	$tabFL= array(0 => 171, 1 => 173, 2 => 53, 3 => 74, 4 => 'L');
	$tabFXL= array(0 => 174, 1 => 175, 2 => 57, 3 => 76, 4 => 'XL');
	$tabFXXL= array(0 => 176, 1 => 180, 2 => 55, 3 => 80, 4 => 'XXL');
	
	
// taille          	poids 
	
//155<t<160 :        45<p<63           XXS
//160<t<163 :        48<p<68           XS
//164<t<168 :        49<p<70           S
//169<t<170 :        51<p<72           M
//171<t<173 :        53<p<74           L
//174<t<175 :        57<p<76           XL
//176<t<180 :        55<p<80           XXL

	
	
	
	// Pour les hommes
	
    if($sexe=="Male"){
        $sexe="H";
		
		// pour XXS

		if (($taille >= $tabHXXS[0]) and ($taille <= $tabHXXS[1])) {
			$vetSize=$tabHXXS[4];
			if (abs($taille - $tabHXXS[0]) < abs($taille - $tabHXXS[1])) {
				$taille = $tabHXXS[0];
			}
			else {
				$taille = $tabHXXS[1];
			}
			
			if (abs($poids - $tabHXXS[2]) < abs($poids - $tabHXXS[3])) {
				$poids = $tabHXXS[2];
			}
			else {
				$poids = $tabHXXS[3];
			}
		}
		
		// pour XS
		
		if (($taille >= $tabHXS[0]) and ($taille <= $tabHXS[1])) {
			$vetSize=$tabHXS[4];
			if (abs($taille - $tabHXS[0]) < abs($taille - $tabHXS[1])) {
				$taille = $tabHXS[0];
			}
			else {
				$taille = $tabHXS[1];
			}
			
			if (abs($poids - $tabHXS[2]) < abs($poids - $tabHXS[3])) {
				$poids = $tabHXS[2];
			}
			else {
				$poids = $tabHXS[3];
			}
		}
		
		// pour S
		
		if (($taille >= $tabHS[0]) and ($taille <= $tabHS[1])) {
			$vetSize=$tabHS[4];
			if (abs($taille - $tabHS[0]) < abs($taille - $tabHS[1])) {
				$taille = $tabHS[0];
			}
			else {
				$taille = $tabHS[1];
			}
			
			if (abs($poids - $tabHS[2]) < abs($poids - $tabHS[3])) {
				$poids = $tabHS[2];
			}
			else {
				$poids = $tabHS[3];
			}
		}
		
		// pour M
		
		if (($taille >= $tabHM[0]) and ($taille <= $tabHM[1])) {
			$vetSize=$tabHM[4];
			if (abs($taille - $tabHM[0]) < abs($taille - $tabHM[1])) {
				$taille = $tabHM[0];
			}
			else {
				$taille = $tabHM[1];
			}
			
			if (abs($poids - $tabHM[2]) < abs($poids - $tabHM[3])) {
				$poids = $tabHM[2];
			}
			else {
				$poids = $tabHM[3];
			}
		}
		
		// pour L
		
		if (($taille >= $tabHL[0]) and ($taille <= $tabHL[1])) {
			$vetSize=$tabHL[4];
			if (abs($taille - $tabHL[0]) < abs($taille - $tabHL[1])) {
				$taille = $tabHL[0];
			}
			else {
				$taille = $tabHL[1];
			}
			
			if (abs($poids - $tabHL[2]) < abs($poids - $tabHL[3])) {
				$poids = $tabHL[2];
			}
			else {
				$poids = $tabHL[3];
			}
		}
		
		// pour XL
		
		if (($taille >= $tabHXL[0]) and ($taille <= $tabHXL[1])) {
			$vetSize=$tabHXL[4];
			if (abs($taille - $tabHXL[0]) < abs($taille - $tabHXL[1])) {
				$taille = $tabHXL[0];
			}
			else {
				$taille = $tabHXL[1];
			}
			
			if (abs($poids - $tabHXL[2]) < abs($poids - $tabHXL[3])) {
				$poids = $tabHXL[2];
			}
			else {
				$poids = $tabHXL[3];
			}
		}
		
		// pour XXL
		
		if (($taille >= $tabHXXL[0]) and ($taille <= $tabHXXL[1])) {
			$vetSize=$tabHXXL[4];
			if (abs($taille - $tabHXXL[0]) < abs($taille - $tabHXXL[1])) {
				$taille = $tabHXXL[0];
			}
			else {
				$taille = $tabHXXL[1];
			}
			
			if (abs($poids - $tabHXXL[2]) < abs($poids - $tabHXXL[3])) {
				$poids = $tabHXXL[2];
			}
			else {
				$poids = $tabHXXL[3];
			}
		}
    }
	
	// Pour les femmes
	
    else{
        $sexe="F";
		
		if (($taille >= $tabFXXS[0]) and ($taille <= $tabFXXS[1])) {
			$vetSize=$tabFXXS[4];
			if (abs($taille - $tabFXXS[0]) < abs($taille - $tabFXXS[1])) {
				$taille = $tabFXXS[0];
			}
			else {
				$taille = $tabFXXS[1];
			}
			
			if (abs($poids - $tabFXXS[2]) < abs($poids - $tabFXXS[3])) {
				$poids = $tabFXXS[2];
			}
			else {
				$poids = $tabFXXS[3];
			}
		}
		
		// pour XS
		
		if (($taille >= $tabFXS[0]) and ($taille <= $tabFXS[1])) {
			$vetSize=$tabFXS[4];
			if (abs($taille - $tabFXS[0]) < abs($taille - $tabFXS[1])) {
				$taille = $tabFXS[0];
			}
			else {
				$taille = $tabFXS[1];
			}
			
			if (abs($poids - $tabFXS[2]) < abs($poids - $tabFXS[3])) {
				$poids = $tabFXS[2];
			}
			else {
				$poids = $tabFXS[3];
			}
		}
		
		// pour S
		
		if (($taille >= $tabFS[0]) and ($taille <= $tabFS[1])) {
			$vetSize=$tabFS[4];
			if (abs($taille - $tabFS[0]) < abs($taille - $tabFS[1])) {
				$taille = $tabFS[0];
			}
			else {
				$taille = $tabFS[1];
			}
			
			if (abs($poids - $tabFS[2]) < abs($poids - $tabFS[3])) {
				$poids = $tabFS[2];
			}
			else {
				$poids = $tabFS[3];
			}
		}
		
		// pour M
		
		if (($taille >= $tabFM[0]) and ($taille <= $tabFM[1])) {
			$vetSize=$tabFM[4];
			if (abs($taille - $tabFM[0]) < abs($taille - $tabFM[1])) {
				$taille = $tabFM[0];
			}
			else {
				$taille = $tabFM[1];
			}
			
			if (abs($poids - $tabFM[2]) < abs($poids - $tabFM[3])) {
				$poids = $tabFM[2];
			}
			else {
				$poids = $tabFM[3];
			}
		}
		
		// pour L
		
		if (($taille >= $tabFL[0]) and ($taille <= $tabFL[1])) {
			$vetSize=$tabFL[4];
			if (abs($taille - $tabFL[0]) < abs($taille - $tabFL[1])) {
				$taille = $tabFL[0];
			}
			else {
				$taille = $tabFL[1];
			}
			
			if (abs($poids - $tabFL[2]) < abs($poids - $tabFL[3])) {
				$poids = $tabFL[2];
			}
			else {
				$poids = $tabFL[3];
			}
		}
		
		// pour XL
		
		if (($taille >= $tabFXL[0]) and ($taille <= $tabFXL[1])) {
			$vetSize=$tabFXL[4];
			if (abs($taille - $tabFXL[0]) < abs($taille - $tabFXL[1])) {
				$taille = $tabFXL[0];
			}
			else {
				$taille = $tabFXL[1];
			}
			
			if (abs($poids - $tabFXL[2]) < abs($poids - $tabFXL[3])) {
				$poids = $tabFXL[2];
			}
			else {
				$poids = $tabFXL[3];
			}
		}
		
		// pour XXL
		
		if (($taille >= $tabFXXL[0]) and ($taille <= $tabFXXL[1])) {
			$vetSize=$tabFXXL[4];
			if (abs($taille - $tabFXXL[0]) < abs($taille - $tabFXXL[1])) {
				$taille = $tabFXXL[0];
			}
			else {
				$taille = $tabFXXL[1];
			}
			
			if (abs($poids - $tabFXXL[2]) < abs($poids - $tabFXXL[3])) {
				$poids = $tabFXXL[2];
			}
			else {
				$poids = $tabFXXL[3];
			}
		}

		
    }
	
	
	
	
    
    // taille          	poids 

// 162<t<165 :        49<p<68           XXS
// 166<t<170 :        50<p<72           XS
// 171<t<175 :        54<p<76           S
// 175<t<180 :        57<p<80	   	     M
// 181<t<186 :        61<p<86           L
// 186<t<191 :        65<p<91           XL
// 189<t<194 :        67<p<94           XXL

// si le user entre 160 comme taiile et 75 comme poids

// 150 et 80

// Tailles de vêtements:   s, M, L, XL

// tab1S = [100, 120, p1, p2]
// tab2M = [120, 140]
// tab3L = [140, 160]
// tab4XL = [160, 180]

// si taille >=tab1s[0] and taille<tab1s[1]
	// taillevet='s'
	// (abs(taille-tab1s[0])<abs(taille-tab1s[1])) ? taille=tab1s[0] : taille = tab1s[1] ;
// sinon si on teste pour M
	
// sinon si on teste pour L

// sinon on teste XL

    
	
	
	

header('Location:Catalog.php?taille='.$taille.'&poids='.$poids.'&sex='.$sexe);
?>




 
