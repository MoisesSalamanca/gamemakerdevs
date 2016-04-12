function JsLogOut()
		{

		$.get("./php/exitCount.php", function(data){
          
			//se leyo la informacion jajajaj
			window.location='./' ;
        });

        

		}

