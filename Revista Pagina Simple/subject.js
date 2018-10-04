function searchTupla(){
	//capturar valores del formulario de busqueda
	var search = document.getElementById('search').value;
	var dataEn = 'search=' + search;
	$.ajax({
		type : 'GET',
		url : 'backend_revista_base.php',
		data:dataEn,
		success:function(resp){
			$('#res').html(resp)
		}
	});
}

function insertUser(){

	// capturar valores del formulario de registro aqui ira el metodo post
	var identification = document.getElementById('identification').value;
	var first_name = document.getElementById('first_name').value;
	var last_name = document.getElementById('last_name').value;
	var age = document.getElementById('age').value;
	var city = document.getElementById('city').value;

	var dataEn = {
		'identification':identification,
		'first_name' : first_name,
		'last_name' : last_name,
		'age': age,
		'city': city
	};

	$.ajax({
		type : 'POST',
		url : 'backend_revista_base.php',
		data:dataEn,
		success:function(resp){
			$('#res').html(resp)
		}
	});

}

function subscribeuser(){
	
	var identification_sus = document.getElementById('identification_sus').value;
	var magazine = document.getElementById('magazine').value;

	// capturar info del formulario de suscripcion

}