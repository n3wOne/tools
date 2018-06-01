<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bus.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function() {

/*var array=[{
	"url": "index.php?option=com_content&view=article&id=322&catid=41", 
	"title": "«Тула – город мастеров!»",
	"price": "7600/7400",
	"route": "Мелихово –  Тула – Кремль – «Музей Оружия» и «Музей Белобородова» – Ясная поляна",
	"date": "23 - 24 февраля 2018г.",
	"otherdate": "",
	"img":"tula.jpg"
	},
	{
	"url": "index.php?option=com_content&view=article&id=299&catid=61", 
	"title": "«Смоленск-город русской славы»",
	"price": "7000/6800",
	"route": "Смоленск–Талашкино – Фленово - Хмелита",
	"date": "23 - 24 февраля 2018г.",
	"otherdate": "",
	"img":"smolensk.jpg"
	}];*/





// Вывод массива JSON 
function extractArray(){
	var arr = $('#arrayIn').val();
	var arrr = arr.replace(/"/g,'\"');
	var array = JSON.parse(arrr);
	console.log(array);
		$.each(array, function(index, value) {
			// console.log("url: ="+value['url']+'; Название: '+value['title']);

			 $('#res').append('<!--- '+value['title']+'  ---->\n<li class="touritem">\n\t<div class="tourwrap">\n\t<a href="'+value['url']+'">\n\t\t<span class="torutitle">'+value['title']+'</span> \n\t\t<img src="/images/images/programms/mnogodnev/fortour/'+value['img']+'" height="187" style="background: #999;" /></a>\n\t\t<div class="tourdesc">\n\t\t<span class="tourdate">'+value['date']+'</span> \n\t\t<span class="tourprice">'+value['price']+'</span>\n\t</div></div>\n\t<div class="tourotherdates">'+value['otherdate']+'</div>\n\t<span class="tourroute">'+value['route']+'</span>\n</li>\n\n<!---------------------------->\n\n');
			});
	}

		$('#add').on("click", function() {
		var name=$('#name').val();
		var link = $('#link').val();
		var date = $('#date').val();
		var route =$('#route').val();
		var price = $('#price').val();
		var img = $('#img').val();
		var otherdate =$('#otherdate').val();
		var tmpl='<!--- '+name+'  ---->\n\t<li class="touritem"><div class="tourwrap">\n\t\t<a href="'+link+'">\n<span class="torutitle">'+name+'</span> \n<img src="/images/images/programms/mnogodnev/fortour/'+img+'" height="187" style="background: #999;" /></a>\n<div class="tourdesc"><span class="tourdate">'+date+'</span> \n<span class="tourprice">'+price+'</span>\n</div>\n</div>\n<div class="tourotherdates">'+otherdate+'</div>\n<span class="tourroute">'+route+'</span>\n</li>\n\n<!---------------------------->';
		$('#res').append(tmpl);
		
		});

		$('#del').on("click", function()
		{
			$("#res li:last").remove();
		});

		$('#clear').on("click", function()
		{
		$('#name').val('');
		$('#link').val('');
		$('#date').val('');
		$('#route').val('');
		 $('#price').val('');
		var img = $('#img').val();
		$('#otherdate').val('');
		

		});

		$('#extractArray').on("click", extractArray);


	});
		



		
</script>
</head>
<body>
<div>
	<button id="extractArray">extractArray</button>
</div>
<div>
	<textarea id="arrayIn" rows="5" cols ="30"></textarea><br>
	<label>Ссылка</label> <input id="link" type="text" /><br>
	<label>Название</label> <input id="name" type="text" /><br>
	<label>Дата</label> <input id="date" type="text" /><br>
	<label>Цена</label> <input id="price" type="text" /><br>
	<label>Маршрут</label> <input id="route" type="text" /><br>
	<label>Другие даты</label> <input id="otherdate" type="text" /><br>
	<label>Картинка</label> <input id="img" type="text" /><br>
	<button id="add">add</button>   
	<button id="del">delete</button>
	<button id="clear">clear</button>
</div>
<div id='result'>
<ul id="res">
	
</ul>
</div>
</body>
</html>

