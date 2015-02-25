<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/styles.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="/">Laravel</a></h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    
	    <!-- Right Nav Section -->
	    <ul class="right">
	      @if (Auth::guest())
			<li><a href="/auth/login">Login</a></li>
			<li><a href="/auth/register">Register</a></li>
		  @else
	        <li class="has-dropdown">
		      <a href="#">{{ Auth::user()->name }}</a>
		      <ul class="dropdown">
		        <li><a href="/auth/logout">Logout</a></li>
		      </ul>
		    </li>
		  @endif
	    </ul>

	    <!-- Left Nav Section -->
	    <ul class="left">
	      <li><a href="/">Home</a></li>
	    </ul>
	  </section>
	</nav>

	@yield('content')

	<script src="/js/main.js"></script>
	<script>
		$(document).foundation();
	</script>
	
</body>
</html>
