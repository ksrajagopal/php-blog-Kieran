

<head>

<title>Blog Template for Bootstrap</title>

 <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

 <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    
    </head>
    
    <body>
    
    <div class="blog-header">
		@include('layouts.nav')
		
        <div class="container">
          <h1 class="blog-title">Kieran's amazing blog </h1>
          <p class="lead blog-description">This blog is better than Preston's</p>
        </div>
      </div>
     
     <div class ="container">
		<div class="row">
			@yield('content')
				
			@include('layouts.sidebar')
		</div> 
	</div>
		
		
		@include('layouts.footer')
		
    </body>
</html>
