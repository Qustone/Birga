// Определение времени часового пояса
	function calcTime(offset) {
	    var d = new Date();
	    var utc = d.getTime() - (d.getTimezoneOffset() * 60000);
	    var nd = new Date(utc + (3600000*offset));
	    return nd.toLocaleString();
	}

// Подсвечивает число равное текущему времени
	setInterval(function(){
		var time = calcTime('-3');
		var hour = time.charAt(12)+time.charAt(13); //текущий час
		var hours = $('table td');  //все часы в виде объекта

		for(var key in hours) {  //сортировка по ключам
			if(hours[key].innerHTML == hour) {  //если текущий час равен значению в ячейке
				var is_hour = hours[key];   //  <td> текущий час </td>
				is_hour.style = 'color: red';
			}
		}
	}, 1000);

// Форма регистрации / открытие
	$('#reg').click(function() {
		var reg = $('.reg');
		reg.css({'display':'block'});
	});

// закрытие
	$('.cross').click(function() {
		var reg = $('.reg');
		reg.css({'display':'none'});
	});


// Отправка регистрационных данных
	var but = $('input[type="submit"]');
	but.click(function() {
		var suc = $('.h170 .success');
		suc.css({'display':'block'});
	});