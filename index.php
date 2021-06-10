<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comment Ajouter une information vers une base de données en utilisant ajax</title>
        <link href="bootstrap.min.css" rel="stylesheet">
        <script src="jquery_3.6.js"></script> 
    </head>
    <body style="background-color: #ec8b5e;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h2><strong>Formulaire pour COURS Ajax PHP</strong></h2>
                        </div>
                        <div class="card-body">
                            <div id="show_message" class="alert alert-success" style="display: none">Insertion affectuée avec succès </div>
	 
                            <div id="error" class="alert alert-danger" style="display: none"></div>

                            <form action="javascript:void(0)" method="post" id="ajax-form">
	 
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" name="fname" id="fname" class="form-control" value="">
                                </div>
	         
                                <div class="form-group ">
                                    <label>Nom</label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="">
                                </div>
	         
                                <div class="form-group">
                                    <label>Commentaire</label>
                                    <input type="text" name="comment" id="comment" class="form-control" value="">
                                </div> 
	         
                                <div class="text-center">
                                    <input type="submit" class="btn btn-success btn-sm" name="submit" value="Enregistrer">
                                </div>
	                     
                            </form>  
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function($){
		 
            // hide messages 
            $("#error").hide();
            $("#show_message").hide();
		 
            // on submit...
            $('#ajax-form').submit(function(e){
		 
                e.preventDefault();
		 
                $("#error").hide();
		 
                //First name required
                var name = $("input#fname").val();
               if(name == ""){
                    $("#error").fadeIn().text("First Name Field required.");
                    $("input#fname").focus();
                    return false;
                }
		 
                // last name required
                var lname = $("input#lname").val();
                if(lname == ""){
                    $("#error").fadeIn().text("Last Name Field required");
                    $("input#lname").focus();
                    return false;
                }
		 
                // Comment number required
                var comment = $("input#comment").val();
                if(comment == ""){
                    $("#error").fadeIn().text("Comment Field required");
                    $("input#comment").focus();
                    return false;
                }
		 
                // ajax
                $.ajax({
                    type:"POST",
                    url: "upload.php",
                    data: $(this).serialize(), // recipérer toutes les valeurs contenues dans le formulaire
                    success: function(){
                      $("#show_message").fadeIn();
                      //$("#ajax-form").fadeOut();
                    }
                });
            });  
		 
            return false;
        });
        </script>
    </body>
</html>