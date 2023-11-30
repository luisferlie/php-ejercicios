<?php
$web_espanol = "<section>
            <h2>HABILIDADES</h2>
            <p> DIRECTION creativa  |   DESARROLLO  |  CONCEPTO VISUAL   |   ILLUSTRACION  |   DiSEÑO  |    ANIMAcION   |  2D & 3D ANIMAcION</p>
            <div>
                <div>
                    <h3>SOMOS</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
                <div>
                    <h3>VENTAJAS</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
                <div>
                    <h3>EL EQUIPO</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
            </div>
        </section>";
$web_francais = "<section class='about'>
            <h2>APPTITTUDES</h2>
            <p>CREATIVE DIRECTION  |   STORY DEVELOPEMENT  |   VISUAL CONCEPT  |   LAMOUR DU START  |   CHARACTER DESIGN  |   CHARACTER ANIMATION   |  2D & 3D ANIMATION</p>
            <div class='column's>
                <div>
                    <h3>NOUS SOMMES</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
                <div>
                    <h3>AVANTAGES</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
                <div>
                    <h3>L`ÈQUIPE</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
            </div>
        </section>";

$web_english = "<section class='about'>
            <h2>SKILLS</h2>
            <p>CREATIVE DIRECTION  |   STORY DEVELOPMENT  |   VISUAL CONCEPT  |   ILLUSTRATION  |   CHARACTER DESIGN  |   CHARACTER ANIMATION   |  2D & 3D ANIMATION</p>
            <div class='columns'>
                <div>
                    <h3>WE ARE</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
                <div>
                    <h3>THE ADVANTAGE</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
                <div>
                    <h3>THE TEAM</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur harum magnam aliquam aut nobis. Voluptatibus quaerat atque voluptates nam. Iure officia voluptates doloribus harum sed voluptate eos nulla laboriosam.
                    </p>
                </div>
            </div>
        </section>";

?>
<form action="">
    espanol <input type="radio" name="idioma" id="idoma" value="espanol">
    francais<input type="radio" name="idioma" id="idoma" value="francais">
    english<input type="radio" name="idioma" id="idoma" value="english">
    <input type="submit" value="selecionar" name="idiomaSeleccion">

</form>
<?php if (isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];
    switch ($idioma) {
        case 'espanol': {
                echo $web_espanol;
                break;
            }
        case 'francais': {
                echo $web_francais;
                break;
            }
            break;
        case 'english': {
                echo $web_english;
                break;
            }
            break;
        default: {
                echo "no se ha seleccionado un idioma";
                break;
            }
    }
}