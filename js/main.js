$(function()	

	{

		$('#ajouter').on('click',function(e)

		{
			//alert("frzfga");
			e.preventDefault();

			$('#aff_com').empty();

			$.post('add_comment.php',

			{

				idpost: $('#idpost').val(),

				pseudo: $('#pseudo').val(),

				commentaire: $('#commentaire').val()

			},

			affiche_comment,

              'json'

				);

			function affiche_comment(data)
			{

				//console.log(data);

				$.each(data,function(index,value){


                 $('#aff_com').append('<p><i class="fas fa-comments"></i><strong>rédigé le <small>'+value.NickName+'</p><hr>')
              console.log(value.NickName);
				});

			}



		});

		

	});