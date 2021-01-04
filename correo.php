<?php 

include('./global/cabecera.html');
?>

 <!-- <form id="contactform" action="correoEnvia.php" name="contactform" method="POST">
    <fieldset>
        <br>
        <br>
        <div>
            <input type="text" name="nombre" id="first_name" placeholder="Nombre">
        </div>
        <div>
            <input type="text" name="apellido" id="last_name" placeholder="Apellido Paterno">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <input type="text" name="numero" id="phone" placeholder="Teléfono">
        </div>
        <div>
            <textarea class="form-control" name="mensaje" id="comments" rows="6"></textarea>
        </div>
        <input type="submit" name="enviar" value="Enviar">
    </fieldset>
</form> -->

<br>
<div class="text-center ">
<h4 class="bg-dark" >Mándenos un mensaje</h4>
<h4  class="bg-dark">Contáctenos al xxxxxxxxxxx</h4>
</div>


<form class="text-white">
    <div class=" row">
        <div class="col-md-6 p-5">
            <div>
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="first_name"  placeholder="Nombre">
                    
            </div>
            <div>
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="text" name="apellido" class="form-control" id="last_name"  placeholder="Apellidos">
                    
            </div>
            <div class="form-group ">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Teléfono</label>
                <input type="text" name="numero" class="form-control" id="phone" placeholder="Numero de telefono">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mensaje</label>
                <textarea type="text" name="numero" name="mensaje" class="form-control" id="comments" rows="6" ></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        
        <div class="col-sm-6 p-5">
            <div class="container">
                <h3>Preguntas frecuentes</h3><br><br>
                <ul>xxxxxxxxxxxx</ul><br>
                <ul>xxxxxxxxxxxxx</ul><br>
                <ul>xxxxxxxxxxxxx</ul><br>
                <ul>xxxxxxxxxxxxx</ul><br>
                <ul>xxxxxxxxxxxxx</ul><br>
                <ul>xxxxxxxxxxxxx</ul><br>
            </div>

            </div>
        </div>
   
       
    </div>
</form>


<?php
    include('./global/pie.html');
    ?>