<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="Flowers Janeth's";
	$Domain='www.flowersjaneths.com';//No dejar pleca al final del dominio
	$Address='11100 Renel Dr A Austin TX 78758';

	$PhoneName="Telefono";
	$Phone='512-736-1440';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='janethsflowers@gmail.com';$MailRef="mailto:".$Mail;
	$Services="";
	$Estimates="Cotizaciones o Adquisiciones al Por Mayor";
	$Payment="Efectivo, Cheques, Tarjetas de Credito o Debito y Transferencias";
	$Experience="";
	$Schedule="monday - sunday: 8:00am - 5:00pm";	
	$Cover="";
	
	$Facebook="https://www.facebook.com/CafeLaspraderas";
	$GoogleMap='<iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.97757028144!2d-86.25741189617352!3d12.113687148497766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fe200da0f8fb%3A0x18379fa307c5ebe8!2sCentroamerica%20Nte.%2C%20Managua!5e0!3m2!1ses!2sni!4v1665121161072!5m2!1ses!2sni" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
	
//Phrases
	$Description="";	
 	$Phrase = array(
		"",
	);
	



	//Home  etc.
	$Home = array(		 
		"",
	);



	$About = array(
		"Flowers Janeth's - Flower Arrangements and Decorations",
		"Give a warm and cozy atmosphere to your home with this beautiful arrangement of flowers. The flowers are arranged in a beautiful vase and will definitely bring a smile to your face. Flowers are for celebrating and making your space look beautiful. This bouquet of flowers is a great gift for any occasion.",
	);

	$testimonial = array(
		"Never in my life have I seen such fast, efficient and friendly service. I placed an order at midnight and it was delivered at 8 am. m. the next day.",
		"This company is amazing! I asked them for flowers for the first time and they delivered them on time and the arrangement was very beautiful. It made my mom very happy!",
		"janeth's flowers is the best place to buy flowers online. Florist has a large selection of flowers, plants and gifts. My favorite is her 'hand tied' bouquet. It is perfect for any occasion.",
		"The flowers were absolutely beautiful and I received many compliments from my guests. They were also delivered on time, which was very important to me.",
	);

	$footer = array (
		"We've got a wide selection of flowers and arrangements perfect for any occasion. Whether you are looking for an arrangement to grace your dinner table or to surprise someone special, we have something that will fit the bill.",
	);

//Services
	$SN[1]="Granos de cafe";
	$SD[1]="El cultivo de nuestros granos de cafe de alta calidad siempre nos brindan una experiencia unica.";
	$SN[2]="Cafe Molido";
	$SD[2]="Nos hemos adentrado en las diferentes opciones para satisfacer a nuestros clientes, de esta forma brindadoles opciones para todos los gustos.";
	$SN[3]="Servicio de Delivery ";
	$SD[3]="Con servicio de envio hasta la puerta de su hogar en compras de cafe en linea, nos satisface saber que siempre nos elige al momento de realizar sus compras de su dosis diaria de energia.";
	$SN[4]="Cafe Premium";
	$SD[4]="Hemos decidido cultivar granos de la mas alta calidad para nuestros clientes que desean probar una experiencia inolvidable en sus mañanas con sabores distinguidos que solo nuestro cafe puede ofrecerles.";
	



	$Name = array(		 
		"Espresso",
		"Lounge ",
		"Home",		
		"Montero",	
		"Roast",
		"Zurekin",
		"Arratsaldean",
		"Egun on",
		);





		/*Productos Descripcion*/
		
		
		

$Detail = array(		 
	"Saborea un café Nicaraguense con sabor atrevido pero suave y con notas dulces y vibrantes.",

	"Sírvete un delicioso café ligeramente tostado, delicado y sabroso, con una agradable suavidad.  ",

	"Este café  está lleno de sabor, con equilibradas notas de frutos secos y cacao y un delicado toque dulce que proviene del tueste.",	

	"El dulce tueste con notas de cacao intenso de esta mezcla hacen que esta taza de café sea equilibrada y deliciosa.",

	"Deleitate con el tueste de este café unico, delicioso con sabor y bastantes sensaciones con el tueste especial.",

	"Disfruta del mejor café acompañandote siempre en todo lo que hagas, como su nombre, siempre contigo.",

	"Debusta tu tarde con el café con el tueste indicado para brindar esas sensaciones del nostalgico atardecer que reconforta con solo verlo. ",

	"Nada como empezar tu día con el café que te da las energías, te brinda emociones y sensaciones solo con su increíble sabor acompañandote desde.",


	);



$Small = array(		 
	"10",
	"10",
	"15",
	"10",
	"11",
	"10",
	"15",
	"10",		
	);


$large = array(		 
	"20",
	"20",
	"30",
	"20",
	"22",
	"20",
	"30",
	"20"		
	);



//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
