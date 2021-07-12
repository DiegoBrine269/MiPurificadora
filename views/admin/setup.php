<div class="contenido-centrado">
    <p>A continuación, rellene el formulario con la información de su negocio para que pueda empezar a operar ahora mismo.</p>

    <form action="" class="formulario" method="POST">
        <fieldset>
            <legend>Información general</legend>
            <div class="campo">
                <label for="id">Nombre de su purificadora:</label>
                <input required type="text" name="nombre" id="id" placeholder="Ej. La Gotilla">
            </div>

            <div class="campo">
                <label for="telefono">Numero de teléfono:</label>
                <input required type="tel" name="telefono" id="telefono" placeholder="Ej. 55 1234 5678">
            </div>

            <div class="campo">
                <label for="ubicacion">Ubicación o domicilio:</label>
                <input required type="text" name="ubicacion" id="ubicacion" placeholder="Ej. Calle 1, MZ 1, LT 15 ...">
            </div>  
        </fieldset>

        <fieldset>
            <legend>Información adicional</legend>
            <div class="campo">
                <label for="precioG20">Precio de los garrafones de 20 lt:</label>
                <input type="text" name="precioG20" id="precioG20" placeholder="Ej. $10">
            </div>

            <div class="campo">
                <label for="precioG10">Precio de los garrafones de 10 lt:</label>
                <input type="text" name="precioG10" id="precioG10" placeholder="Ej. $6">
            </div>

            <div class="campo">
                <label for="precioDomicilio">Precio adicional de entrega a domicilio:</label>
                <input type="text" name="precioDomicilio" id="precioDomicilio" placeholder="Ej. $1">
            </div>  
        </fieldset>

        <div class="campo">
            <input type="submit" value="Aceptar">
        </div>
    </form>
</div>
