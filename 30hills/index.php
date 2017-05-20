<?php
include_once 'db/db.php';
include_once 'classes/people.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Social network</title>
<meta charset="UTF-8">	

	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">-->
</head>
<body>
    <?php 
		$izjavaClan = $kon->prepare("SELECT * FROM people");	
         $nizSvih=array();
		$izjavaClan->execute();
		
		while($red=$izjavaClan->fetch()){			
			$nizID[]=$red['id'];			
			$nizSvih[]= new People($red['id'],$red['firstname'],$red['surname'],$red['age'],$red['gender'],$red['friends'],$nizID);			
		}
	?>
	<div id="container">	
		<form action="" method="get">
			<p>			
				Choose person:
				<select name="choose">
					<option value="all">Choose...</option>
					<?php
						for($i=0;$i<count($nizSvih);$i++){
							echo '<option value="'.$nizSvih[$i]->id.'">'.$nizSvih[$i]->firstname.' '.$nizSvih[$i]->surname.'</option>';
						}
					?>
				</select>
				
			</p>
			<p>
				<input type="submit" name="sub" value="START" id="button"/>
			</p>
		</form>
<?php


		
			if(isset($_GET['choose'])){
				if($_GET['choose'] == "all"){
					echo "Choose some person!";
				}elseif($_GET['choose']){
				$i=$_GET['choose']-1;
			$split_prijatelje=explode(',',$nizSvih[$i]->friends);
			?>
			<div class="one_profile">
				<fieldset>
					<legend><h2><?php echo $nizSvih[$i]->firstname . " " . $nizSvih[$i]->surname;?></h2></legend>
				<table border="1">
				<tr>
					<td rowspan="8"><img id="slika_avatar" src="avatar2.png" alt="avatar"></td>
				</tr>				
			<?php		
			
			$nizSvih[$i]->id_friends = $split_prijatelje;			
			echo "<tr><td>" . "Id: " . "</td>" . "<td class='podaci_tabela'>" . $nizSvih[$i]->id . "</td></tr>" . "<tr><td>" .  "First name: " . "</td>" . "<td class='podaci_tabela'>" . $nizSvih[$i]->firstname . "</td></tr>" . "<tr><td>" .  "Surname: " . "</td>" . "<td class='podaci_tabela'>" .$nizSvih[$i]->surname . "</td></tr>" .  "<tr><td>" .  "Age: " . "</td>" . "<td class='podaci_tabela'>" . $nizSvih[$i]->age  . "</td></tr>" ."<tr><td>" .  "Gender: " . "</td>" . "<td class='podaci_tabela'>" . $nizSvih[$i]->gender . "</td></tr>";

	?>			
	<tr><td>Friends:</td><td><a href=''><?php foreach($nizSvih[$i]->id_friends as $one_id){				
		echo $nizSvih[$one_id-1]->firstname.", ";				
		}		
		?>
				</a></td></tr>
				<tr><td>Friends of friends:</td><td><a href=''>
						<?php   
								$strpp="";
						        foreach($nizSvih[$i]->id_friends as $one_id){				
								$strpp.= $nizSvih[$one_id-1]->friends.",";				
								}
								
								//niz prijatelja prijatelja
								$strpp=substr($strpp,0,count($strpp)-2);
								$nizpp=explode(',',$strpp);
								 
								//izbacivanje duplikata
								$nizpp=array_unique($nizpp);
								
								foreach($nizpp as $ind){				
								if($i!=$ind-1)echo $nizSvih[$ind-1]->firstname.", ";				
								}		
						?>
									
				</a></td></tr>
				<!--<tr><td>Suggested friends:</td><td><a href=''>
				</a></td></tr>-->
			</table>
		</fieldset>
	</div>
	<?php
}
}

?>					
		</div>			
	</body>
</html>