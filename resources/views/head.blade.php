<!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
<link href="{{asset('css/theme/style.css')}}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('js/theme/jquery.min.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});
</script>
<!-- grid-slider -->
<script type="text/javascript" src="{{asset('js/theme/jquery.mousewheel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/theme/jquery.contentcarousel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/theme/jquery.easing.1.3.js')}}"></script>
<!-- //grid-slider -->
<script src="{{asset('js/theme/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/theme/nav.js')}}"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});

	$('#ca-container').contentcarousel();

	$(window).load(function() {
		$("#flexiselDemo3").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 2
				}
			}
		});

	});
</script>
<script type="text/javascript" src="{{asset('js/theme/jquery.flexisel.js')}}"></script>

<!---calender-style---->
<link rel="stylesheet" href="{{asset('css/theme/jquery-ui.css')}}" />
<!---//calender-style---->
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">