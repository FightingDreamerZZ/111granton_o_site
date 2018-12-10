<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118874296-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118874296-1');
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>

	$(document).ready(function(){

		$("body.fadein").fadeIn("slow");

		$(document).on("load scroll", function(){

			if($(window).   scrollTop() === 0){
				$("header").addClass("top-of-page");
			} else {
				$("header").removeClass("top-of-page");
			}

		});

		$("#myNavbar > ul > li.link > a").click(function(){
			var $link_url = $(this).attr("href");

			window.location.replace($link_url);
		});

		$(".navbar-toggle").click(function(){

			$("body").toggleClass("menu-open");

			$(".main-overlay").toggleClass("active");
			$("#myNavbar>ul>li").removeClass("open");
			
		});

		$("#myNavbar > ul > li:not(.link)").click(function(){

			// Remove the class "open" from each list then apply the open to clicked item
			if($(this).hasClass("open")){
				$(this).removeClass("open");
				
				if($(window).width() > 767){
					$(".main-overlay").removeClass("active");
					$("body").removeClass("menu-open");
				}
				
				$(this).next("a > .caret").removeClass("open");
			} else {
				$("#myNavbar > ul > li").removeClass("open");
				$(this).addClass("open");

				if($(window).width() > 767){
					$(".main-overlay").addClass("active");
					$("body").addClass("menu-open");
				}
				
				$(this).next("a > .caret").addClass("open");
			}

			$("a",$(this)).click(function(){
				var $link_url = $(this).attr("href");

				window.location.replace($link_url);
			});

			return false;
		});

		// This prevents the menu to disappear when user clicks around the submenutoggl
		$(".sub-menu li").click(function(e){
			e.preventDefault();

			return false;
		});

		$(".main-overlay").click(function(){

			if($(window).width() > 767){
				if($(this).hasClass("active")){
					$(this).removeClass("active");
					$("#myNavbar > ul > li").removeClass("open");
					$("body").removeClass("menu-open");
				}
			}

		});

	});





</script>