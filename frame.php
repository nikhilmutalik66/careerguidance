Live Demo
<!DOCTYPE html>
<html>

   <head>
      <title>HTML Frames</title>
   </head>
	
   <frameset rows = "10%,80%,10%">
      <frame name = "top" src = "navbar.html" />
      <frame name = "main" src = "" />
      <frame name = "bottom" src = "" />
   
      <noframes>
         <body>Your browser does not support frames.</body>
      </noframes>
      
   </frameset>
   
</html>