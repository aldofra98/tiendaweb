<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="footer.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda Artes</title>

</head>
<style>
    body{
        background-color: Lightpink;
    }
		#estiloqueen{
			align-content: center;
			height: 300px;
			width: 3000;
			margin:10px auto;
            display:block;
        }
            figure img {
            padding: 2px;
            border-radius: 30px;
            -webkit-transition: -webkit-transform 0.3s ease-in-out 0.1s;
}
figure img:hover{
	-webkit-transform:scale(1.2);

    }
    .footer2 {
        font-family: 'Oswald', sans-serif;
        margin: 0;
        color: white;
        padding-top: 20px;
        font-size: 50px;
        text-align: center;  
        text-shadow: 3px 4px rgba(white, .1);
        transition: .3s;
        background-color: black;
        display: block;
      }

        
        </style>
<body>
    <br><br><br><br>
<figure><img id="estiloqueen" src="templates\QUEEN2.png" /></figure>
	<div style="align-content: center" align="center"><h1><em>“Nunca Juzgues Una Obra de Arte Por Sus Defectos.”</em></h1></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="templates\inicio.html">Salir con Arte</a>
        <a class="navbar-brand" href="templates\pag.html">Conocenos</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="mostrarCarrito.php">Carrito(<?php 
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br/> <br/>
    <div class="container">