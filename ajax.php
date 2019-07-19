<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <title>Layout.phtml</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="css/normalize-3.0.3.min.css">
  <link rel="stylesheet" type="text/css" href="css/blog-theme.css">
  
  <link rel="stylesheet" type="text/css" href="css/ui-form.css">
  <link rel="stylesheet" type="text/css" href="css/blog-main.css">
  <link rel="stylesheet" type="text/css" href="css/ui-button.css">
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
  </script>
</head>
<body>




<h2><a href="">Ajout commentaire avec Ajax</a></h2>

<form method="POST" action="" class="generic-form">
 
   <fieldset>

       <legend><i class="far fa-comment"></i>Nouveau commentaire</legend> <!-- Titre du fieldset --> 
       <ul>
             <li class="hides">

              <label for="resultat">resultat ajax :</label>
              <input type="text" name="resultat" value="" id="resultat" />
            
            </li>
            <li>
              <label for="texte">titre :</label>
              <input type="text" name="titre" value="" id="texte" />
            
          </li>

           <li>
             <label class="textarea" for="contenu">commentaire :</label>
             <textarea  name="contenu" value="" id="contenu" rows="8" cols="33"> </textarea> 
          </li>
         <li>
           <label><input class="button  button-primary" type="submit" name="ajouter" value="ajouter" id="ajouter"></label> 
           <label><input class="button  button-cancel"  type="reset"  name="Annuler" value="Annuler"></label>
          </li>

       </ul>         

           
     

   </fieldset>

 

</form>
<script>
  
  $(function()
  {
     $('#ajouter').on('click',function(e)

     {
      e.preventDefault();


      $.post('registre_ajax.php',
                                 {
                                  titre: $('#texte').val(),
                                  contenu : $('#contenu').val()
                                 },

                                 response,

                                 'text'
             );
      function response(data)
      {

        console.log(data);

              if(data == "succes")

              {

                $('.hide').toggle();

                $('#resultat').val('commentaire insérer avec'+data);
                  
              }
              else

                console.log("ereur");

      
      }


     });



  }); 
 
</script>
</body>

</html>