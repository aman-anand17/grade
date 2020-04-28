<html>
<head>
	<title></title>
</head>
<body style="background: #cc0908;">
	<h1 style="margin:20px auto;font-size: 6.5rem; color: #ffffff;">Grade System of Nsec</h1>
	<script type="text/javascript">
		var is = false;
		var bd = document.querySelector("body");
		var h = document.querySelector("h1");
		function p(){
			if(!is){
			bd.style.background ="#cc0908";
			h.textContent="Grade System of Nsec";
			is =true;
		}
		else{
			bd.style.background ="#bb9009";

			h.textContent="Grade System of Nsec by AMAN";
			h.style.color ="#ffffff";
			is =false;

		}}
		setInterval(p, 1000);
		
	</script>
	<br>
	<br>
	<div>
		<lable style="color: #ffffff;background: #262626; font-size: 4.5rem; font-weight: bold;">The maximum marks and grade are::<br>
			
		</lable>
		<lable style="color: #ffffff;background: #262626; font-size: 4.5rem; font-weight: bold;">

			<?php
$math =$_POST['math'];
$phy =$_POST['phy'];
$chem =$_POST['chem'];
$eng =$_POST['eng'];
$cd =$_POST['cd'];

$marks = array($math,$phy,$chem,$eng,$cd);

$max = $marks[0];
for($i=1;$i<5;$i++)
{
	if(($marks[$i]) > ($max))
	{
		$max= $marks[$i];
		$m =$i;
	}
	
}
echo $max;
echo "  ,  ";
$n = intdiv($max, 10);
switch ($n) {
	case 10 :
		echo "O";
		break;
		case 9 :
		echo "O";
		break;
		case 8 :
		echo "E";
		break;
		case 7 :
		echo "A";
		break;
		case 6 :
		echo "B";
		break;
		case 5 :
		echo "C";
		break;
		case 4 :
		echo "D";
		break;
		case 3 :
		echo "F";
		break;
		case 2 :
		echo "kuch toh padh tu fail hai";
		break;
		case 1 :
		echo "Padho ja ke fail h aap";
		

		break;
		case 1 :
		echo "Live wrestling at home FAIL AACHE";
		

		break;
	
	
}




?>
			


		</lable>
	</div>

</body>
</html>