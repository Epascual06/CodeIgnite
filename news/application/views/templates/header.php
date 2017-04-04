<html>
        <head>
        <link rel="stylesheet" type="text/css" href="http://bootswatch.com/cyborg/bootstrap.min.css">
        	<script src="https://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
                <title>CodeIgniter</title>
        </head>
        <body>
        		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">News Blog</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href= "<? php echo base_url(); ?> pages/view/home ">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<? php echo base_url(); ?> pages/view/about ">About</a></li>
        <li><a href="<? php echo base_url(); ?> news">View News</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<? php echo base_url(); ?> news/create">Create News</a></li>
      </ul>
    </div>
  </div>
</nav>
                <h1><?php echo $title; ?></h1>