var base_url;
var alertaValidacion = '';
var validarci = false;

function baseurl(enlace)
{
    base_url = enlace;  
    //alert(base_url);
}
function asignar_area(id)
{
    var enlace = base_url + "Personal/asignar_area/"+id;
    location.href = enlace;    
}
function cargarcombos()
{
	var enlace = base_url + "Personal/getorganizacion";
    $.ajax({
        type: "GET", 
        url: enlace,
        success: function(data)  
         {
            $('#cbxorganizacion').html(data);
         }
    });
    
    $('#cbxorganizacion').change(function () 
  	{
	  var rol = $('#cbxorganizacion').val();
      var enlace = base_url + "Personal/gettipousuario";
        $.ajax({
            type: "GET",
            url: enlace,
             data: {id:rol},
            success: function(data) 
            {
            	$('#cbxrol').html(data);            	
            }
        });
 	});


    
}
