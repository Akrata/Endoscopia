<?php
include "header.html";
?>
<div class="container">
    <div class="columns">
        <div class="column is-four-fifths" id="div-primario">
            <div class="container has-text-centered" id="container" style="padding-top: 15px;">

                <video id="gum" playsinline autoplay muted controls width="90%"></video>

                <canvas id="canvas" style="display: none;"></canvas>

                <div>

                    <button class="button is-link" id="foto">Tomar Imagen</button>
                    <button class="button is-link" id="record" disabled>Grabar Video</button>
                    <button class="button is-link" id="download" disabled>Descargar Video</button>

                </div>
                <p id="estado"></p>

            </div>
        </div>
        <div id="div-secundario">
            <!--TODO para cada imagen en la carpeta de usuario
                    mostrarla en pantalla e ir agregandolas verticalmente, con un boton de eliminar.
            -->
        </div>

    </div>
</div>



<div id="errorMsg"></div>
<?php
include "footer.html";
?>