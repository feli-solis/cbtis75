$(function(){

	var currentYear = new Date().getFullYear();
	var optionsDay = '';
	var optionsMonth = '';
	var optionsYear = '';
	var months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
								"Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	var optionsCarreras = '';
	var carreras = ["Administración de Recursos Humanos", "Contabilidad", "Electricidad",
									"Logística", "Mecánica Industrial", "Programación", "Soporte y Mantenimiento Técnico"];

	for(i = 1; i <= 31; i++){
		optionsDay += '<option value="' + i + '">' + i + '</option>';
	}
	$('#day').append(optionsDay);
	Foundation.libs.forms.refresh_custom_select($('#day'), true);

	for(i = 1; i <= months.length; i++){
		//$('#month').append($('<option></option>').val(i+1).html(months[i]));
		optionsMonth += '<option value="' + i +'">' + months[i-1] + '</option>';
	}
	$('#month').append(optionsMonth);
	Foundation.libs.forms.refresh_custom_select($('#month'), true);

	for(i = currentYear; i >= currentYear-30; i--){
		//$('#year').append($('<option></option>').val(i).html(i));
		optionsYear += '<option value="' + i + '">' + i + '</option>';
	}
	$('#year').append(optionsYear);
	//$('#year').trigger('change');
	Foundation.libs.forms.refresh_custom_select($('#year'), true);

	for(i = 0; i < carreras.length; i++){
		optionsCarreras += '<option value="' + carreras[i] + '">' + carreras[i] + '</option>';
	}
	$('#carrera1,#carrera2,#carrera3,#carrera4,#carrera5,#carrera6,#carrera7').append(optionsCarreras);
	$('#carrera1,#carrera2,#carrera3,#carrera4,#carrera5,#carrera6,#carrera7').trigger('change');

	$.ajax({	url: 'mexico.php',
						data: {action: 'getEstados'},
						type: 'get',
						success: function(output){
							var options = '';
							for(i = 0; i < output.length; i++){
								//$('#estadon, #estado').append($('<option></option>').val(output[i].nombre).html(output[i].nombre));
								options += '<option value="' + output[i].nombre + '">' + output[i].nombre + '</option>';
							}
							$('#estadon, #estado, #estadosec').append(options);
							$('#estadon, #estado, #estadosec').trigger('change');
						}
	})
});

var selectedDay;
var selectedMonth;
var selectedYear;

$('#day').change(function(){
	selectedDay = $('#day option:selected').val();
	updateDaysInMonth(selectedYear, selectedMonth);
});

$('#month').change(function(){
	selectedMonth = $('#month option:selected').val()-1;
	updateDaysInMonth(selectedYear, selectedMonth);
});

$('#year').change(function(){
	selectedYear = $('#year option:selected').val();
	updateDaysInMonth(selectedYear, selectedMonth);
});

function updateDaysInMonth(){
	if(selectedYear != null && selectedMonth != null && selectedDay != null){
		calculateAge(selectedYear, selectedMonth, selectedDay);
		var maxDays =  new Date(selectedYear, selectedMonth+1, 0).getDate();
		console.log(maxDays);
		if(selectedDay > maxDays){
			selectedDay = maxDays;
			$('#day').val(selectedDay);
			Foundation.libs.forms.refresh_custom_select($('#day'), true);
		}
	}
}

function calculateAge(year, month, day){
	var currentDate = new Date();
	var birthDate = new Date(year, month, day);
	var age = currentDate.getFullYear()-birthDate.getFullYear();
	var m = currentDate.getMonth()-birthDate.getMonth();
	if(m < 0 || m == 0 && currentDate.getDate() < birthDate.getDate()){
		age--;
	}
	$('#edad').val(age);
}

$('input:text').on("blur", function(){
	$(this).val($(this).val().toLocaleUpperCase());
});

$('#estadon').change(function(){
	if($('#estadon option:selected').val() != ""){	
		var options = '';
		$('#municipion').empty();
		$.getJSON('mexico.php',{action:'getMunicipios',estado:$('#estadon option:selected').val()},function(output){
			for(i = 0; i < output.length; i++){
				//$('#municipion').append($('<option></option>').val(output[i].nombre).html(output[i].nombre));
				options += '<option value="' + output[i].nombre + '">' + output[i].nombre + '</option>';
			}
			$('#municipion').append(options);
			$('#municipion').trigger('change');
		});
	}
});


$('#estado').change(function(){
	if($('#estado option:selected').val() != ""){
		var options = "";
		$('#municipio').empty();
		$.getJSON('mexico.php',{action:'getMunicipios',estado:$('#estado option:selected').val()},function(output){
			for(i = 0; i < output.length; i++){
				//$('#municipion').append($('<option></option>').val(output[i].nombre).html(output[i].nombre));
				options += '<option value="' + output[i].nombre + '">' + output[i].nombre + '</option>';
			}
			$('#municipio').append(options);
			$('#municipio').trigger('change');
		});
	}
});

$('#estadosec').change(function(){
	if($('#estadosec option:selected').val() != ""){
		var options = "";
		$('#municipiosec').empty();
		$.getJSON('mexico.php',{action:'getMunicipios',estado:$('#estadosec option:selected').val()},function(output){
			for(i = 0; i < output.length; i++){
				//$('#municipion').append($('<option></option>').val(output[i].nombre).html(output[i].nombre));
				options += '<option value="' + output[i].nombre + '">' + output[i].nombre + '</option>';
			}
			$('#municipiosec').append(options);
			$('#municipiosec').trigger('change');
		});
	}
});

/* Quick and dirty hack to force abide.js to add the data-invalid attribute
to the select element if no valid option has been selected */
$('#enviar').click(function(){
	//console.log('#enviar clicked');
	if($('#carrera1').val() == null){
		$('#carrera1').val('');
	}
	if($('#carrera2').val() == null){
		$('#carrera2').val('');
	}
	if($('#carrera3').val() == null){
		$('#carrera3').val('');
	}
	if($('#carrera4').val() == null){
		$('#carrera4').val('');
	}
	if($('#carrera5').val() == null){
		$('#carrera5').val('');
	}
	if($('#carrera6').val() == null){
		$('#carrera6').val('');
	}
	if($('#carrera7').val() == null){
		$('#carrera7').val('');
	}
});
