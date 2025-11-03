<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Get & Post</title>
  </head>
  <body>
    <form action= "enlaceformulario.php" method="POST">
      <div>
        <label for="nombre">Nombre</label>
        <input type="text"
        id="nombre" name="nombre">

      </div>
      <br>
      <label for="asignatura"> Asignatura</label>
      <select id="asignatura" name="asignatura[]" multiple>
        <option value="Ingles">Ingles</option>
        <option value="Matematicas">Matematicas</option>
        <option value="Ciencia">Ciencia</option>
        <option value="Lenguaje">Lenguaje</option>
    
      </select>
      
      <br><br>

      <label for ="opcion-1">
        <input type="checkbox" value="Manzana"
        id="opcion-1" name="frutas[]">Manzana</input>

      </label>
       <label for ="opcion-2">
        <input type="checkbox" value="Fresa"
        id="opcion-2" name="frutas[]">Fresa</input>

         <label for ="opcion-3">
        <input type="checkbox" value="Banana"
        id="opcion-3" name="frutas[]">Banana</input>

      </label>

      </label>
<br><br><br>

<button type="submit">Enviar</button>

</form>
  </body>
</html>
