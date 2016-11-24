<?php
require_once '../config.php';

$apDate = (isset($_POST['apDate']))?$_POST['apDate']:'&&&';

if($apDate != '&&&') {

//--  ОБРАБОТКА ТЕКСТОВЫХ ВЕЛИЧИН
$apDate[1] = $apDate[1];  //--  ПРОСЛЕШОВАНИЕ ИМЕНИ ССЫЛКИ
$apDate[6] = $apDate[6];  //--  ПРОСЛЕШОВАНИЕ ОПИСАНИЕ ССЫЛКИ

if($apDate[4] == '#000000') {$apDate[4] = '#74AAF6';}



	$flag[0] = 1;  //--  Проверочный флаг

	//----------  ОБНОВЛЕНИЕ ИМЕНИ И ДРУГИХ ПАРАМЕТРОВ ССЫЛКИ ИСКЛЮЧАЯ ГРУППУ -------
	$per = mysql_query(" SELECT * FROM `links777` WHERE `id` = '".$apDate[0]."' ");
	
	while ($row = mysql_fetch_assoc($per)){
	
		if( $row["name"] == $apDate[1] && $row["group"] == $apDate[2]){
			$apdate = mysql_query(" UPDATE `links777` SET `name` = '".$apDate[1]."', `links` = '".$apDate[3]."', `background` = '".$apDate[4]."', `choise` = '".$apDate[5]."',  `title` = '".$apDate[6]."'  WHERE id = ".$apDate[0]." ");

			//apdatePar($apDate[3],$apDate[0]);  //-- ФУНКЦИЯ СОЗДАНИЯ СКРИНШОТОВ И ИКОНОК
		
			$flag[0] = 2;
		}
	} 
//------------------

	//----------   ОБНОВЛЕНИЕ ИМЕНИ И ДРУГИХ ПАРАМЕТРОВ ССЫЛКИ ИСКЛЮЧАЯ ГРУППУ -------
	$perr = mysql_query(" SELECT * FROM `links777` WHERE `id` = '".$apDate[0]."' ");
	
	while ($row = mysql_fetch_assoc($perr)){
		//-- Условие проверки на соответсвие ID-ссылки, категории, но отличия имени
		if( $row["name"] != $apDate[1] && $row["group"] == $apDate[2] ) {
			
			$perl = mysql_query(" SELECT * FROM `links777` ");
				while ($row1 = mysql_fetch_assoc($perl)){
				//-- Условие проверки существ. такой же ссылки в такой же категории
					if( $row1["name"] == $apDate[1] && $row1["group"] == $apDate[2] ){ $flag[0] = 33; break; }
				}
			
			if($flag[0] != 33){
			
				$apdate = mysql_query(" UPDATE `links777` SET `name` = '".$apDate[1]."',  `links` = '".$apDate[3]."', `background` = '".$apDate[4]."', `choise` = '".$apDate[5]."',  `title` = '".$apDate[6]."'  WHERE id = ".$apDate[0]." ");
				
				//apdatePar($apDate[3],$apDate[0]);  //-- ФУНКЦИЯ СОЗДАНИЯ СКРИНШОТОВ И ИКОНОК
				
				$flag[0] = 3;
			}
		}
	}

//------------------
	$perrr = mysql_query(" SELECT * FROM `links777` WHERE `id` = '".$apDate[0]."' ");
	
	while ($row = mysql_fetch_assoc($perrr)){
		//-- Условие проверки на соответсвие ID-ссылки, категории, но отличия имени
		if( $row["group"] != $apDate[2] ) {
			$flag[0] = 4444;
			
			$perl = mysql_query(" SELECT * FROM `links777` ");
				while ($row1 = mysql_fetch_assoc($perl)){
				//-- Условие проверки существ. такой же ссылки в такой же категории
					if( $row1["name"] == $apDate[1] && $row1["group"] == $apDate[2] ){ $flag[0] = 44; break; }
				}
			
			if($flag[0] != 44){
				
				if(!$apDate[7]) {			
		
					//-- БЛОК ОПРЕДЕЛЕНИЯ НОМЕРА ЭЛЕМЕНТА
					$pes8 = mysql_query(" SELECT `number` FROM `links777` WHERE `id` = '".$apDate[0]."' ");
					$row8 = mysql_fetch_row($pes8);
					$nomEllin = $row8[0];


					//-- функция присвоения измен. ссылки в нов. катег. последнего элемента
					$peson = mysql_query(" SELECT `kol` FROM `group_links` WHERE `name` = '".$apDate[2]."' ");
					$row7 = mysql_fetch_row($peson);
					$kolLin = $row7[0];
					$kolLin = $kolLin + 1;

					//-- ПОЛНОЕ ОБНАВЛЕНИЕ УКАЗАННОЙ ССЫЛКИ
					$apdate = mysql_query(" UPDATE `links777` SET `name` = '".$apDate[1]."', `number` = '".$kolLin."', `links` = '".$apDate[3]."', `group` = '".$apDate[2]."', `background` = '".$apDate[4]."', `choise` = '".$apDate[5]."',  `title` = '".$apDate[6]."'  WHERE id = ".$apDate[0]." ");

					
					apdCountLinks($apDate[2]);  //-- ФУНКЦИЯ ПОДСЧЁТА ЭЛЕМЕНТОВ. В НОВОЙ ГРУППЕ

					apdCountLinks($apDate[8]);  //-- ФУНКЦИЯ ПОДСЧЁТА ЭЛЕМЕНТОВ. В ПРЕДЫД. ГРУППЕ				
					

					//-- БЛОК ОПРЕДЕЛЕНИЯ КОЛИЧ. ССЫЛОК В КАТЕГОРИИ
					$pes7 = mysql_query(" SELECT `kol` FROM `group_links` WHERE `name` = '".$apDate[8]."' ");
					$row7 = mysql_fetch_row($pes7);
					$count = $row7[0];


					//------ ФОРМИРОВАНИЕ НОВОГО ПОРЯДКА НОМЕРОВ  ---------
					for($i = $nomEllin; $i < ($count + 1); $i++){
						$x = $i + 1;
						
						mysql_query(" UPDATE `links777` SET `number`='".$i."' WHERE `group` = '".$apDate[8]."' AND `number` = '".$x."' ");
					}

					
					$flag[0] = 4; //-- НОВАЯ ГРУППА ПРЕЖНЕЙ ССЫЛКИ
					
				}

					else

				{
					$now = date("Y-d-m H:i:s");
					
					//-- ИЗМЕНЕНИЕ ФОНА ПОСТАВЛЕННОГО ПО УМОЛЧАНИЮ
					if($apDate[4] == '#000000' || $apDate[4] == '') $apDate[4] = '#74AAF6';

				
					//-- функция присвоения измен. ссылки в нов. катег. последнего элемента
					$peson1 = mysql_query(" SELECT `kol` FROM `group_links` WHERE `name` = '".$apDate[2]."' ");
					$row1 = mysql_fetch_row($peson1);
					$kolLin1 = $row1[0];
					$kolLin1 = $kolLin1 + 1;

					//-- ЗАПИСЬ САМОЙ ССЫЛКИ
					mysql_query("INSERT INTO `links777` (`name`,`group`,`links`,`number`,`background`,`choise`,`title`,`data`) VALUES ('".$apDate[1]."','".$apDate[2]."','".$apDate[3]."','".$kolLin1."','".$apDate[4]."','".$apDate[5]."','".$apDate[6]."','".$now."') ");
					
					$id_link = mysql_insert_id();
					$flag[1] = $id_link;

					apdCountLinks($apDate[2]);
					
					$flag[0] = 45;
				}
				
				
			}
		}
	}

//-----
	header('Content-Type: application/json;charset=utf-8');
	print json_encode($flag);
}


//////////////////////////////////////////////////////////////////////////////////////////////
////-- функция создания параметров ссылки



//-- ФУНКЦИЯ ПОДСЧЁТА КОЛИЧЕСТВА ЭЛЕМЕНТОВ В КАТЕГОРИИ
function apdCountLinks($name){

	$pes = mysql_query(" SELECT COUNT(`id`) FROM `links777` WHERE `group` = '".$name."' ");
	$row = mysql_fetch_row($pes);
	$count = $row[0];
	
	mysql_query(" UPDATE `group_links` SET `kol` = '".$count."' WHERE `name` = '".$name."' ");	
}


