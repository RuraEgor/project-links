<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0" />
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link type="text/css" href="css/jquery-ui.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/style2.css" rel="stylesheet" type="text/css" />
	
	<title>������</title>
	
	<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script> 
	<!--   <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/scriptAjax.js"></script>
	<script type="text/javascript" src="js/categ.js"></script>
</head>

<body>
<div id = "sizeElem"></div>
<div id = "hideAllCat"></div>
<div id = "zoom_screen"><div class="down"></div></div>

<div id = "modal_wind"></div>

<div id = "up"></div>
<div id = "down"></div>

<div id = "header">
	
	<button id="all_links" title = "��� ������� ������� ��� ��������� ������">��� ������</button>
	
	<a href="http://ron17.h19.ru/lin/" target="_blank" ><img src="img/logo.png" /></a>

	<a href="http://ron17.h19.ru/wr/" target="_blank" ><img src="img/logo.png" /></a>
	
	<select>
	</select>

	<input type="checkbox" class="addGroup" title="��������� ��������� ����� �������� ������ � ��� ����������" />
	
	<div class="wr_inp_seach">
		<input id = "search" />
		<ul id = "sel_ch"></ul>
	</div>

	<input type="checkbox" class="glob_search js_glob_search" checked="true" title="���������� ���������� �����" />
	<!-- <input type="checkbox" class="allSearchBd" title="����� �� ���� ���� ������ �� ���� ��������" /> -->
	
	<button id="all_categories" title = "������� ��� ���������">��� ���������</button>	
	
	<button id="but_group_form">���. ������</button>
	<button id="but_form">���. ������</button>
	<button id="addLast">20</button>
	<button id="delMnLks" >��������</button>
	<button id="cancelDelMnLks" title="������ �������� ���������� ��� �������� ������" >������</button>
	<ul class='menuCat'>
	</ul>
	
	<a href="https://www.yandex.ru" id="search_yandex" target="_blank" class="links_header"><span>������</span></a>
	<a href="https://www.google.ru" id="search_google" target="_blank" class="links_header"><span>����</span></a>
	<a href="https://translate.google.ru" id="transl_google" target="_blank" class="links_header"><span>����������</span></a>
	<a href="https://www.youtube.com" id="youtube" target="_blank" class="links_header"><span>YOUTOBE</span></a>

</div><!--  END  but_form  -->


	<!--  ����� ��� ������ ���� �����  -->
	<div id="all_group">
		<div class="close ui-sortable-handle" style=""></div>
		<h2>��� ������������ ���������</h2>
		<ul class = "list sortable ui-sortable">
		</ul>
		<div class="clear"></div>
	</div>	

	
<!--  ����� ��� �������� ������  -->
<div id = "wrap_form">


	<!--  ����� ��� �������� ������  -->
	<div id="link_add" class="sortable">
		
		<div class="close"></div>
		
		<form>
				<h2>���������� ������</h2>
			
				<h3>�������� ������</h3>
			<input type="text" name="name" id="name" autofocus = "" />
			
				<h3>���������</h3>
			<select>
			</select>
			
				<h3>������</h3>
			<input type="text" name="links" id="links" />
							
				<h3>���</h3>
			<input type="color" name="background" value = "#74AAF6" id="background" />
			
			<p>
				<label>
					<input type="checkbox" id="choise_back" /> - �������� ���� ������ ����� �� ������� ���� �����������
				</label>
			</p>
			
				<h3>��������</h3>
			<textarea name="title" id="title" ></textarea>
					
			<input type="button" name="but_send" id="but_send" value="���������" accesskey = "w"/>
		</form>
	</div><!--  END  link_add  -->
	

<!--  ����� ��� ������ ������ -->
	<div id="group_add" class="sortable">
		
		<div class="close"></div>
		
		<form>
				<h1>����� ���������</h1>
			
				<h3>�������� ������</h3>
			<input type="text" id="name_group" autofocus = "" />
			
				<h3>���</h3>
			<p>
				<input type="radio" name="group_backg" value="true" id="backg_group_1" checked />
				<input type="color" value = "#fddff5" id="backg_group_color" />
			</p>
			
				<h3>��� - �����������</h3>
			<p>
				<input type="radio" name="group_backg" value="true" id="backg_group_2" />
				<input type="text" id="backg_group_img" value="#74AAF6" />			
			</p>
			
				<h3>��������</h3>
			<textarea id="title_group" ></textarea>
					
			<input type="button" id="but_send_group" value="���������" accesskey = "w"/>
		</form>
	</div><!--  END  group_add  -->




<!--  ����� ��� ��������� ������ -->
<div id="group_apdate" class="sortable">
	
	<div class="close"></div>
	
	<form>
			<h1>�������� ���������</h1>
		
			<h3 class="catg_name">�������� ���������</h3>
		<input type="text" id="name_group" autofocus = "" />
		
			<h3>���</h3>
		<p>
			<input type="radio" name="group_backg" value="true" id="backg_group_1" checked />
			<input type="color" value = "#fddff5" id="backg_group_color" />
		</p>
		
			<h3>��� - �����������</h3>
		<p>
			<input type="radio" name="group_backg" value="true" id="backg_group_2" />
			<input type="text" id="backg_group_img" value="#74AAF6" />			
		</p>
		<p>
			<label class="check-view">
				<input id="menu_view" value="" checked type="checkbox"> - ������ ����� ����� ���� �� �����������
			</label>
		</p>
		
			<h3>��������</h3>
		<textarea id="title_group" ></textarea>
				
		<input type="button" id="but_send_group" value="���������" accesskey = "w"/>
	</form>
</div>
<!--  END  group_apdate  -->


<!-- ����� ��� ���������� ������ -->
	<div id="apdate_form" class="sortable">
		
		<div class="close"></div>
		
		<form>
				<h2>�������������� ������</h2>
			
				<h3>�������� ������</h3>
			<input type="text" name="name" class="name" autofocus = "" />
			
				<h3>���������</h3>
			<select>
			</select>
			
			<input type="hidden" name="hidGroup" class="hidGroup" />
			
				<h3>������</h3>
			<input type="text" name="links" class="links" />
			<!-- 
				<h3>���</h3>
			<input type="text" name="background" class="background_1" />
			 -->
				<h3>������ ���</h3>
			<input type="color" name="background" value = "#74AAF6" class="background_2" />
			
			<p>
				<label>
					<input class="choise_back" type="checkbox" />
					- �������� ���� ������ ����� �� ������� ���� �����������
				</label>
			</p>
			
			<p>
				<label>
					<input class="rewriteLink" type="checkbox" />
					- �������� ���� ������ ����� ���� ������� ����� ������
				</label>
			</p>
			
			

				<h3>��������</h3>
			<textarea name="title" class="title" ></textarea>
					
			<input type="button" name="but_send" class="but_send" value="���������" accesskey = "w"/>
		</form>
	</div><!--  END  link_add  -->
		
<!-- -->	
	
</div><!--  END  wrapp_form  -->


<div class = "alert_mess"></div>

<!---------->
<div id="lastTventy" >

	<h2 class = "titlLastGroup">��������� �������� ������</h2>
	<ul class="bom sortable">

	</ul>

	<div class = 'clear'></div>

</div><!--   END WRAPPER   -->

<!---------->
<div id="wrapper" >

	<h1 class = "nameGroup"><span>�������</span></h1>
	<ul class="bom sortable">

	</ul>

	<div class = 'clear'></div>

</div><!--   END WRAPPER   -->



<script>
	$(document).ready(function(){
		$("a[onclick]").click();
	});
</script>

<script type="text/javascript" src="js/script_1.js"></script>

</body>
</html>
