<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tablas de categoria</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
  <style>
 table {
    border: 40px;
    border-block-end-width: 400px;
    text-align: center;
  
 }

 td{
    margin: 500px;
    background: gray;
    color: rgb(255, 255, 255);
    width: 100px;
    padding: 10px;

 }

 ul, li ,a {
	text-decoration: none;
	display: block;
	font-size: 1.1em;
	padding: 0 10px;
	border: 1px solid rgb(25, 0, 252); /*--Gives the bevel look with a 1px white border inside the list item--*/
	outline: none;
 }


  </style>
</head>
<body>
 
<div id="tabs">

  <ul>
    
    @foreach ($categorias as $cat)
    <li><a href="#tabs-{{$cat->category_id}}">{{ $cat->name}}</a></li>
        
    @endforeach
    
    
  </ul>

 
  @foreach ($categorias as $cat)
      <div id="tabs-{{$cat->category_id}}">
        <div>
      
          <table style="border-block-style: 10px">
            <tr style="background-color: white">
                <td>Titulo de las pelicula</td>
            </tr>
            @foreach ($cat->peliculas()->get() as $pelicula)
            <tr>
            <td style="background-color:rgb(0, 0, 0)">{{$pelicula->title}}</td>
            </tr>

            
            @endforeach
          
          </table>
        </div>

      </div>
      
  @endforeach    
</div>
</body>
</html>