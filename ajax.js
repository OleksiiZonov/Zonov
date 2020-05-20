function getCar(){
	$.ajax({
	  type: "GET",
	  url: "vendors.php",
	  data: {vendor: $('[name="vendor"]').val()},
	  success: function(result){
	  	$('#result1').html(result);
	  }
	});
}
function getDate(){
	$.ajax({
	  converters: {
	   "text xml": function(data){return data}
	   },
	  type: "GET",
	  url: "dates.php",
	  data: {targetDate: $('[name="targetDate"]').val()},
	  success: function(result){
	  	$('#result2').html('');
	  	$(result).find('carName').each(function(){
	  		$('#result2').append('<li>'+ $(this).text() + '</li>');
	  	});
	  }
	});
}
function getRent(){
	$.ajax({
	  converters: {
	   "text json": jQuery.parseJSON
	   },
	  type: "GET",
	  url: "rent.php",
	  data: {rentTarget: $('[name="rentTarget"]').val()},
	  success: function(result){
	  	$('#result3').html('<li>'+ result + '</li>');
	  }
	});
}

function setRent(){
	$.ajax({
	  type: "GET",
	  url: "insert/in-rent.php",
	  data: $('form#set_in_rent').serialize(),
	  success: function(result){
	  	$('#result4').html('<li>'+ result + '</li>');
	  }
	});
}

function replaceRace(){
	$.ajax({
	converters: {
	   "text xml": function(data){return data}
	   },	
	  type: "GET",
	  url: "insert/replace-race.php",
	  data: $('form#replace-race').serialize(),
	  success: function(result){
	  	$('#result5').html('<li>'+ $(result).find('info').text() + '</li>');
	  }
	});
}