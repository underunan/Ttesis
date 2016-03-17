  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 1,
      max: 1000,
      values: [ 1, 1000 ],
      slide: function( event, ui ) {
        $("#amount-1").val( "$" + ui.values[0]);
        if(ui.values[1] == 1000){
          $("#amount-2").val("$"+ui.values[1]+"+");
        }else
        {
          $("#amount-2").val("$"+ui.values[1]); 
        }
        
      },
      
    });
    $( "#amount-1" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ));
    $("#amount-2").val("$"+$("#slider-range").slider("values",1)+"+");
  });