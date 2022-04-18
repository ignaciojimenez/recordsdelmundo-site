<!doctype html>
<html lang="es">
<head>
	<!-- <script src="../scripts/moment.min.js"></script> /-->
	<script src="../scripts/es.js"></script>
<?php
require("../head.php");
?>
	<meta name="robots" content="noindex" />
	<link href="../style/back.css" type="text/css" rel="stylesheet" />

	<script type="text/javascript">

	/**********************************************************
	Codigo para el infinitescroll
	**********************************************************/
	var prevHeight = 0;
	$(window).scroll(function()
	{
		if($(document).height() > prevHeight+100){
			if($(window).scrollTop() + $(window).height() > $(document).height() - 200)
		    {
				//alert('scrolltop:'+$(window).scrollTop() +'  docheight:'+$(document).height()+'  winheigh:'+$(window).height());
				//alert('scrolltop:'+$(window).scrollTop());
				if ($('div.tumblr_post').length > 0){
					count = parseInt($('div.tumblr_post').last()[0].id.split("_")[1]);

			        $('div#loadmoreajaxloader').show();
			    	$.ajax({
						async:false,
						cache:false,
						ifModified:true,
				        type: 'GET',
						url: 'http://api.tumblr.com/v2/blog/recordsdelmundo.tumblr.com/posts/text?api_key=XIHsDbrc9qCF3uj5F1kavGgFuK8E5iIYmUGBTbnNXdad4RUDgm&offset='+count+'&limit=3',
						data: { get_param: 'value' },
						dataType: 'jsonp',
						success: function(data){
							for (i = 0; i < 3; i++) {
								if(data.response.total_posts > count) {
									count = count +1;
									//$('#contenido').append('http://api.tumblr.com/v2/blog/recordsdelmundo.tumblr.com/posts/text?api_key=XIHsDbrc9qCF3uj5F1kavGgFuK8E5iIYmUGBTbnNXdad4RUDgm&offset='+count+'&limit=3');
									$('#contenido').append('<div class="tumblr_post" id="post_'+count+'"><div class="tumblr_date">'+moment(data.response.posts[i].date).fromNow()+'</div><div class="tumblr_title"><a href="' + data.response.posts[i].post_url +'">'+ data.response.posts[i].title +'</a></div><div class="tumblr_body">'+data.response.posts[i].body+'</div></div><div class="lineablog"></div><br/>');
									$('div#loadmoreajaxloader').hide();
								}else{
									$('div#loadmoreajaxloader').html('<center><br>Has alcanzado el final del blog.<br><br></center>');
								}
							}
				        }
			        });
				}
				prevHeight = $(document).height();
		    }
		}
	});

	</script>

</head>
<body onload="$('.contenido').fadeIn(900);">
	<div class="container">
		<div class="lateral_izq">
			LATERAL IZQ
		</div>
		<div class="lateral_izq_inferior">
		</div>

		<div class="lateral_dch">
			<?php
			require("../dcha.php");
			?>
		</div>

		<div class="centro">
			<?php
			require("../menu.php");
			?>

			<div class="contenido" id="contenido">
				<script type="text/javascript">
				moment.lang('es');
				$.ajax({
					type: 'GET',
					url: 'http://api.tumblr.com/v2/blog/recordsdelmundo.tumblr.com/posts/text?api_key=XIHsDbrc9qCF3uj5F1kavGgFuK8E5iIYmUGBTbnNXdad4RUDgm&limit=3',
					data: { get_param: 'value' },
					dataType: 'jsonp',
					success: function (data) {
					for (i = 0; i <= 2; i++) {
						cuenta = i+1;
						$('#contenido').append('<div class="tumblr_post" id="post_'+cuenta+'"><div class="tumblr_date">'+moment(data.response.posts[i].date).fromNow()+'</div><div class="tumblr_title"><a href="' + data.response.posts[i].post_url +'">'+ data.response.posts[i].title +'</a></div><div class="tumblr_body">'+data.response.posts[i].body+'</div></div><div class="lineablog"></div><br/>');
						}
					}
				});
				</script>
			</div>
			<div id="loadmoreajaxloader" style="display:none;">
				<center><img src="ajax-loader.gif" /></center>
			</div>
		</div>
	</div>
</body>
</html>
