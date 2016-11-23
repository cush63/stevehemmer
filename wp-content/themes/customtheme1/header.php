<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="Custom Theme using BootStrap" content="">
    <meta name="Steve Hemmer" content="">

<title>Blog Template using Bootstrap By Steve Hemmer</title>
    
    
    

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="blog.css" rel="stylesheet"> "Original css link"--> 
    <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet"><!--"New href to link custom CSS file"-->
      


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
  </head>
    


    <div class="blog-masthead">
	<div class="container">
		<nav class="blog-nav">
			<a class="blog-nav-item active" href="#">Home</a>
			<?php wp_list_pages( '&title_li=' ); ?>
		</nav>
	</div>
</div>

    <div class="container">

      <div class="blog-header">
      <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
       <!--<h1 class="blog-title">The Bootstrap Blog</h1>-->
        
        	<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
        <!--<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>-->
        </div>