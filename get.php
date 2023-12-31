<html>

<head>
    <meta charset="utf-8" />
    <title>CV Gonzalo Sumina Quispe</title>
    <style>
        .grid-container {
            display: grid block;
            grid-template-rows: 300px 1000px;
            grid-template-columns: 1fr 2fr;
            grid-template-areas:
                "area4 area1 area1"
                "area2 area3 area3"
                "area2 area3 area3";
            justify-content: space-between;
        }

        .grid-item1 {
            background: rgb(73, 72, 72);
            color: white;
            text-align: left;
            text-align-last: center;
            grid-area: area1;
            justify-items: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            border: rgb(73, 72, 72) 50px solid;
        }

        .grid-item2 {
            background-color: rgb(173, 173, 173);
            text-align: left;
            border: rgb(173, 173, 173) 55px solid;
            grid-area: area2;
        }

        .grid-item3 {
            background-color: rgb(203, 206, 203);
            text-align: left;
            border: rgb(203, 206, 203) 55px solid;
            /*border: black 5px solid;*/
            grid-area: area3;
        }

        .grid-item4 {
            background-color: rgb(73, 72, 72);
            grid-area: area4;
            text-align: center;
            position: relative;
            border: 10px;
        }

        .circular--square {
            top: 20%;
            border: 2px black solid;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        h1.Title {
            border-bottom: none;
        }

        h1 {
            border-bottom: 3px black solid;
            padding-bottom: 2px;
            font-weight: normal;
        }

        h2.Subtitle {
            font-weight: normal;
        }

        h2 {
            font-size: 30px;
        }

        ul {
            font-size: 30px;
        }

        h3 {
            font-size: 25px;
        }

        span {
            color: rgb(90, 88, 88);
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <div class="grid-item1">
            <h1>
                <?php echo $_GET["namelastname"]; ?>
            </h1>
            <h2 class="Subtitle">PUESTO OCUPADO / BUSCADO</h2>
        </div>
        <div class="grid-item2">
            <h1>CONTACTO</h1>
            <h2>944865251</h2>
            <h2>gonzalo.sumina@ucsp.edu.pe</h2>
            <h2>Peru</h2>
            <h2>linkedin.com/gonzalo-sumina</h2>
            <br />
            <h1>IDIOMAS</h1>
            <h2>Español: Nativo</h2>
            <h2>Ingles: Basico</h2>
            <br />
            <h1>APTITUDES</h1>
            <ul>
                <li>Inteligencia emocional</li>
                <li>Espiritu critico</li>
                <li>Trabajo en equipo</li>
                <li>Capacidad analitica</li>
                <li>Habilidades fisicas</li>
            </ul>
            <br />
            <h1>HABILIDADES</h1>
            <ul>
                <li>Acondicionamiento fisico</li>
                <li>Creacion videos deportivos</li>
                <li>Pack office</li>
                <li>Tenis</li>
            </ul>
            <br />
            <h1>OTROS INTERESES</h1>
            <ul>
                <li>Creador de yincanas</li>
                <li>Paseos ecologicos grupales</li>
                <li>Lectura grupal en ingles</li>
            </ul>
        </div>
        <div class="grid-item3">
            <h1>PERFIL</h1>
            <h2>
                Trabajador social con 4 años de experiencia en proyectos colectivos.
                Mi objetivo es lograr que los jovenes obtengan acceso a la educacion
                superior mediante logros deportivos.
            </h2>
            <br />
            <h1>EXPERIENCIA LABORAL</h1>
            <h2>Trabajador Social</h2>
            <h3>Mexico DF, <span>| 2022 - Actualmente</span></h3>
            <ul>
                <li>
                    Coordinador y mediador entre los equiposde ayuda psicologica a
                    jovenes y ninos en exclusion social.
                </li>
                <li>
                    Velar por la salud mental del equipo y de miembros involucrados en
                    proyectos.
                </li>
                <li>
                    Mepeo de necesidades estrategicas y logicas para las diferentes
                    area.
                </li>
                <li>Monitor de ejercicios fisicos para adolescentes</li>
                <li>
                    Programar diferentes actividades extracurriculares en los
                    involucrados
                </li>
            </ul>
            <h2>Trabajador Social</h2>
            <h3>Mexico DF, <span>| 2020 - 2022</span></h3>
            <ul>
                <li>
                    Funciones para seguimientos de casos para jovenes con problemas de
                    adicciones.
                </li>
                <li>
                    Capacitaciones e integracion vinculadas a medidas preventivas.
                </li>
                <li>
                    Recopilacion de evidencias para auditorias y programas sociales.
                </li>
            </ul>
            <h2>Trabajador Social (Practicas)</h2>
            <h3>Zaragoza, Espana <span>| 2019 - 2020</span></h3>
            <ul>
                <li>Profesor de lengua espanola e inglesa para jovenes migrantes.</li>
                <li>Monitor de actividades ecologicas con adolescentes.</li>
                <li>Coordinador de areas deportivas.</li>
            </ul>
            <br />
            <h1>FORMACION</h1>
            <h2>Grado de Trabajo Social</h2>
            <h3>ESMA, Madrid <span>| 2012 - 2015</span></h3>
            <br />
            <h2>Licenciatura Profesional</h2>
            <h3>Universidad de la Frontera, Mexico <span>| 2011 - 2012</span></h3>
        </div>
        <div class="grid-item4">
            <img class="circular--square" src="foto-cv.png" id="Myimage" width="220" aling="center" />
        </div>
    </div>
</body>

</html>