<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css"rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
      <script src=" https://oss.maxcdn.com /html5shiv/3.7.2 /html5shiv.min.js"></script>
      <script src=" https://oss.maxcdn.com /respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
    .me{
        width:35%;
    }
    .wis{
         background-color:#DAA520;
    }
</style>

    </head>
    <body>
     <header>
       <div class="navbar navbar-default wis">
         <div class="container">
           <div class="navbar-header">
             
            <a href="" class="navbar-brand" style="color:white;">WISCOURSE</a>
           </div>
         </div>

       </div>
 </header>
      <div class="container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="index.html" data-toggle="tab">Home</a></li>
          <li><a href="#Home" data-toggle="tab">Contact</a></li>
          <li><a href="#Home" data-toggle="tab">About</a></li>
            
            
        </ul>

        
      </div>
        
  <br>
      <div class="container me">
      <div class="well">
  <form>

    <fieldset class="form-group">
        
          <label>From</label>
          <input class="form-control" type="email" name="" placeholder="Enter Email" value="" />
        
    </fieldset>
    <fieldset class="form-group">
        
          <label>To</label>
          <input class="form-control" type="email" name="" placeholder="Enter Email" value="" />
        
    </fieldset>
    <div class="form-group">
        
          <label>Subject</label>
          <input class="form-control form-control-lg" type="text" name="" placeholder="Subject" value="" />
        
    </fieldset>
   <fieldset class="form-group" ></br>
        
          <label>Message</label></br>
          <textarea class="form-control form-control-lg" name="" placeholder="Message" ></textarea>
        
    </fieldset>
    <fieldset>
       <label for="exampleInputFile">Attachment</label>
       <input type="file" id="file" class="form-control-file">
       <small class="text-muted">Upload your file attachmernt here</small>
     
     </fieldset>
     </br>
     <button type="submit" class="btn btn-primary">Send</button>
     <button type="submit" class="btn btn-danger">Cancel</button>
     </form>
    
      
     </div>
     </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=" https://ajax.googleapis.com /ajax/libs/jquery/1.11.3 /jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
