<!doctype html>
<html lang="en">
<head>
    <title>Proyecto IOT: Contenedores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header bg-primary text-white">
                        <div class="row">
                            <div class="col-md-12">
                                <strong style="display: flex; justify-content: center; align-items: center;">PROYECTO: CONTENEDORES DE BASURA INTELIGENTES</strong>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Porcentaje</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
        <br>
        <div class="container mb-5">
            <div class="row mb-5" style="padding-top: 20px;display: flex; justify-content: center; align-items: center;">
                <div class="col-md-5 mr-3" style="border: 2px solid black; border-radius: 25px;">
                    <div class="row">
                        <div class="col-md-12 bg-primary text-white" style="border-top-left-radius: 25px; border-top-right-radius: 25px;display: flex; justify-content: center; align-items: center;"> 1° Contenedor</div>
                        <div class="col-md-12" style="background-color: #d0e4fc;display: flex; justify-content: center; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="300" height="300" viewBox="0 0 100 100">
                                <path fill="#8b8bc1" d="M77,32L77,32H23h-5v5l5,5v33.308C23,82.288,28.295,86,34.766,86h30.269	C71.616,86,77,82.288,77,75.308V41.917L82,37v-5H77z"></path><path fill="#1f212b" d="M65.035,87H34.766C27.13,87,22,82.301,22,75.308V42.414l-4.707-4.707C17.105,37.52,17,37.265,17,37	v-5c0-0.552,0.448-1,1-1h64c0.552,0,1,0.448,1,1v5c0,0.268-0.108,0.525-0.299,0.713L78,42.336v32.972C78,82.301,72.79,87,65.035,87z M19,36.586l4.707,4.707C23.895,41.48,24,41.735,24,42v33.308C24,82.461,29.8,85,34.766,85h30.269C70.093,85,76,82.461,76,75.308	V41.917c0-0.268,0.108-0.525,0.299-0.713L81,36.581V33H19V36.586z"></path><path fill="#6869ad" d="M29.5,60.5V42.917c0-1.375,1.125-2.5,2.5-2.5l0,0c1.375,0,2.5,1.125,2.5,2.5v16.75v14.25	c0,1.375-1.125,2.5-2.5,2.5l0,0c-1.375,0-2.5-1.125-2.5-2.5V70.5V60.5z"></path><path fill="#1f212b" d="M32,76.917c-1.654,0-3-1.346-3-3V70.5c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v3.417	c0,1.103,0.897,2,2,2s2-0.897,2-2v-31c0-1.103-0.897-2-2-2s-2,0.897-2,2V60.5c0,0.276-0.224,0.5-0.5,0.5S29,60.776,29,60.5V42.917	c0-1.654,1.346-3,3-3s3,1.346,3,3v31C35,75.571,33.654,76.917,32,76.917z"></path><path fill="#1f212b" d="M29.5,66c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v3	C30,65.776,29.776,66,29.5,66z"></path><path fill="#6869ad" d="M44,76.5L44,76.5c-1.375,0-2.5-1.125-2.5-2.5V43c0-1.375,1.125-2.5,2.5-2.5l0,0	c1.375,0,2.5,1.125,2.5,2.5v31C46.5,75.375,45.375,76.5,44,76.5z"></path><path fill="#1f212b" d="M44,77c-1.654,0-3-1.346-3-3V43c0-1.654,1.346-3,3-3s3,1.346,3,3v31C47,75.654,45.654,77,44,77z M44,41c-1.103,0-2,0.897-2,2v31c0,1.103,0.897,2,2,2s2-0.897,2-2V43C46,41.897,45.103,41,44,41z"></path><path fill="#6869ad" d="M56,76.5L56,76.5c-1.375,0-2.5-1.125-2.5-2.5V43c0-1.375,1.125-2.5,2.5-2.5l0,0	c1.375,0,2.5,1.125,2.5,2.5v31C58.5,75.375,57.375,76.5,56,76.5z"></path><path fill="#1f212b" d="M56,77c-1.654,0-3-1.346-3-3V43c0-1.654,1.346-3,3-3s3,1.346,3,3v31C59,75.654,57.654,77,56,77z M56,41c-1.103,0-2,0.897-2,2v31c0,1.103,0.897,2,2,2s2-0.897,2-2V43C58,41.897,57.103,41,56,41z"></path><path fill="#6869ad" d="M68,76.5L68,76.5c-1.375,0-2.5-1.125-2.5-2.5V43c0-1.375,1.125-2.5,2.5-2.5l0,0	c1.375,0,2.5,1.125,2.5,2.5v31C70.5,75.375,69.375,76.5,68,76.5z"></path><path fill="#1f212b" d="M68,77c-1.654,0-3-1.346-3-3V43c0-1.654,1.346-3,3-3s3,1.346,3,3v31C71,75.654,69.654,77,68,77z M68,41c-1.103,0-2,0.897-2,2v31c0,1.103,0.897,2,2,2s2-0.897,2-2V43C70,41.897,69.103,41,68,41z"></path><path fill="#a3a3cd" d="M82,32v-0.237C82,24.749,79.127,21,70.727,21H29.273C20.873,21,18,24.749,18,31.763V32H82z"></path><path fill="#1f212b" d="M82,33H18c-0.552,0-1-0.448-1-1v-0.237C17,23.628,20.785,20,29.272,20h41.455	C79.215,20,83,23.628,83,31.763V32C83,32.552,82.552,33,82,33z M19.013,31h61.975c-0.216-6.38-3.237-9-10.26-9H29.272	C22.25,22,19.229,24.62,19.013,31z"></path><path fill="#1f212b" d="M81.5,36h-63c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h63c0.276,0,0.5,0.224,0.5,0.5	S81.776,36,81.5,36z"></path><path fill="#1f212b" d="M75.5,82h-50c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h50c0.276,0,0.5,0.224,0.5,0.5	S75.776,82,75.5,82z"></path><path fill="#1f212b" d="M63,22H37c-0.552,0-1-0.448-1-1v-2.646C36,15.401,38.309,13,41.146,13h17.708	C61.691,13,64,15.401,64,18.354V21C64,21.552,63.552,22,63,22z M38,20h24v-1.646C62,16.504,60.589,15,58.854,15H41.146	C39.411,15,38,16.504,38,18.354V20z"></path><path fill="#1f212b" d="M72.5,29h-54c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h54c0.276,0,0.5,0.224,0.5,0.5	S72.776,29,72.5,29z"></path><path fill="#1f212b" d="M77,58.917c-0.552,0-1-0.448-1-1v-12c0-0.552,0.448-1,1-1c2.757,0,5,2.243,5,5v4	C82,56.673,79.757,58.917,77,58.917z M78,47.088v9.657c1.164-0.413,2-1.525,2-2.829v-4C80,48.613,79.164,47.5,78,47.088z"></path><path fill="#1f212b" d="M23,58.917c-2.757,0-5-2.243-5-5v-4c0-2.757,2.243-5,5-5c0.552,0,1,0.448,1,1v12	C24,58.469,23.552,58.917,23,58.917z M22,47.088c-1.164,0.413-2,1.525-2,2.829v4c0,1.304,0.836,2.416,2,2.829V47.088z"></path><path fill="#1f212b" d="M78.5,29h-3c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5	S78.776,29,78.5,29z"></path>
                            </svg>
                        </div>
                        <div class="col-md-12" style="border-top: 2px solid black;"> <div class="mb-3 mt-3"><span id="porcentaje1"></span></div> </div>
                        <div class="col-md-12">
                            <div class="row" style="border-top: 2px solid black;">
                                <div class="col-md-6" style="border-right: 2px solid black;display: block; text-align: center;">
                                    <div class="mt-3 mb-3">Id:</div>
                                    <div class="mt-1 mb-3">Nombre:</div>
                                    <div class="mt-1 mb-3">Estado:</div>
                                </div>
                                <div class="col-md-6" style="display: block; text-align: center;">
                                    <div class="mt-3 mb-3"><span id="id1"></span></div>
                                    <div class="mt-1 mb-3"><span id="nombre1"></span></div>
                                    <div class="mt-1 mb-3"><span id="estado1"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mr-3" style="border: 2px solid black; border-radius: 25px;">
                    <div class="row">
                        <div class="col-md-12 bg-primary text-white" style="border-top-left-radius: 25px; border-top-right-radius: 25px;display: flex; justify-content: center; align-items: center;"> 2° Contenedor</div>
                        <div class="col-md-12" style="background-color: #d0e4fc; display: flex; justify-content: center; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="300" height="300" viewBox="0 0 100 100">
                                <path fill="#8b8bc1" d="M77,32L77,32H23h-5v5l5,5v33.308C23,82.288,28.295,86,34.766,86h30.269	C71.616,86,77,82.288,77,75.308V41.917L82,37v-5H77z"></path><path fill="#1f212b" d="M65.035,87H34.766C27.13,87,22,82.301,22,75.308V42.414l-4.707-4.707C17.105,37.52,17,37.265,17,37	v-5c0-0.552,0.448-1,1-1h64c0.552,0,1,0.448,1,1v5c0,0.268-0.108,0.525-0.299,0.713L78,42.336v32.972C78,82.301,72.79,87,65.035,87z M19,36.586l4.707,4.707C23.895,41.48,24,41.735,24,42v33.308C24,82.461,29.8,85,34.766,85h30.269C70.093,85,76,82.461,76,75.308	V41.917c0-0.268,0.108-0.525,0.299-0.713L81,36.581V33H19V36.586z"></path><path fill="#6869ad" d="M29.5,60.5V42.917c0-1.375,1.125-2.5,2.5-2.5l0,0c1.375,0,2.5,1.125,2.5,2.5v16.75v14.25	c0,1.375-1.125,2.5-2.5,2.5l0,0c-1.375,0-2.5-1.125-2.5-2.5V70.5V60.5z"></path><path fill="#1f212b" d="M32,76.917c-1.654,0-3-1.346-3-3V70.5c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v3.417	c0,1.103,0.897,2,2,2s2-0.897,2-2v-31c0-1.103-0.897-2-2-2s-2,0.897-2,2V60.5c0,0.276-0.224,0.5-0.5,0.5S29,60.776,29,60.5V42.917	c0-1.654,1.346-3,3-3s3,1.346,3,3v31C35,75.571,33.654,76.917,32,76.917z"></path><path fill="#1f212b" d="M29.5,66c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v3	C30,65.776,29.776,66,29.5,66z"></path><path fill="#6869ad" d="M44,76.5L44,76.5c-1.375,0-2.5-1.125-2.5-2.5V43c0-1.375,1.125-2.5,2.5-2.5l0,0	c1.375,0,2.5,1.125,2.5,2.5v31C46.5,75.375,45.375,76.5,44,76.5z"></path><path fill="#1f212b" d="M44,77c-1.654,0-3-1.346-3-3V43c0-1.654,1.346-3,3-3s3,1.346,3,3v31C47,75.654,45.654,77,44,77z M44,41c-1.103,0-2,0.897-2,2v31c0,1.103,0.897,2,2,2s2-0.897,2-2V43C46,41.897,45.103,41,44,41z"></path><path fill="#6869ad" d="M56,76.5L56,76.5c-1.375,0-2.5-1.125-2.5-2.5V43c0-1.375,1.125-2.5,2.5-2.5l0,0	c1.375,0,2.5,1.125,2.5,2.5v31C58.5,75.375,57.375,76.5,56,76.5z"></path><path fill="#1f212b" d="M56,77c-1.654,0-3-1.346-3-3V43c0-1.654,1.346-3,3-3s3,1.346,3,3v31C59,75.654,57.654,77,56,77z M56,41c-1.103,0-2,0.897-2,2v31c0,1.103,0.897,2,2,2s2-0.897,2-2V43C58,41.897,57.103,41,56,41z"></path><path fill="#6869ad" d="M68,76.5L68,76.5c-1.375,0-2.5-1.125-2.5-2.5V43c0-1.375,1.125-2.5,2.5-2.5l0,0	c1.375,0,2.5,1.125,2.5,2.5v31C70.5,75.375,69.375,76.5,68,76.5z"></path><path fill="#1f212b" d="M68,77c-1.654,0-3-1.346-3-3V43c0-1.654,1.346-3,3-3s3,1.346,3,3v31C71,75.654,69.654,77,68,77z M68,41c-1.103,0-2,0.897-2,2v31c0,1.103,0.897,2,2,2s2-0.897,2-2V43C70,41.897,69.103,41,68,41z"></path><path fill="#a3a3cd" d="M82,32v-0.237C82,24.749,79.127,21,70.727,21H29.273C20.873,21,18,24.749,18,31.763V32H82z"></path><path fill="#1f212b" d="M82,33H18c-0.552,0-1-0.448-1-1v-0.237C17,23.628,20.785,20,29.272,20h41.455	C79.215,20,83,23.628,83,31.763V32C83,32.552,82.552,33,82,33z M19.013,31h61.975c-0.216-6.38-3.237-9-10.26-9H29.272	C22.25,22,19.229,24.62,19.013,31z"></path><path fill="#1f212b" d="M81.5,36h-63c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h63c0.276,0,0.5,0.224,0.5,0.5	S81.776,36,81.5,36z"></path><path fill="#1f212b" d="M75.5,82h-50c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h50c0.276,0,0.5,0.224,0.5,0.5	S75.776,82,75.5,82z"></path><path fill="#1f212b" d="M63,22H37c-0.552,0-1-0.448-1-1v-2.646C36,15.401,38.309,13,41.146,13h17.708	C61.691,13,64,15.401,64,18.354V21C64,21.552,63.552,22,63,22z M38,20h24v-1.646C62,16.504,60.589,15,58.854,15H41.146	C39.411,15,38,16.504,38,18.354V20z"></path><path fill="#1f212b" d="M72.5,29h-54c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h54c0.276,0,0.5,0.224,0.5,0.5	S72.776,29,72.5,29z"></path><path fill="#1f212b" d="M77,58.917c-0.552,0-1-0.448-1-1v-12c0-0.552,0.448-1,1-1c2.757,0,5,2.243,5,5v4	C82,56.673,79.757,58.917,77,58.917z M78,47.088v9.657c1.164-0.413,2-1.525,2-2.829v-4C80,48.613,79.164,47.5,78,47.088z"></path><path fill="#1f212b" d="M23,58.917c-2.757,0-5-2.243-5-5v-4c0-2.757,2.243-5,5-5c0.552,0,1,0.448,1,1v12	C24,58.469,23.552,58.917,23,58.917z M22,47.088c-1.164,0.413-2,1.525-2,2.829v4c0,1.304,0.836,2.416,2,2.829V47.088z"></path><path fill="#1f212b" d="M78.5,29h-3c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5	S78.776,29,78.5,29z"></path>
                            </svg>
                        </div>
                        <div class="col-md-12" style="border-top: 2px solid black;"> <div class="mb-3 mt-3"><span id="porcentaje2"></span></div> </div>
                        <div class="col-md-12">
                            <div class="row" style="border-top: 2px solid black;">
                                <div class="col-md-6" style="border-right: 2px solid black;display: block; text-align: center;">
                                    <div class="mt-3 mb-3">Id:</div>
                                    <div class="mt-1 mb-3">Nombre:</div>
                                    <div class="mt-1 mb-3">Estado:</div>
                                </div>
                                <div class="col-md-6" style="display: block; text-align: center;">
                                    <div class="mt-3 mb-3"><span id="id2"></span></div>
                                    <div class="mt-1 mb-3"><span id="nombre2"></span></div>
                                    <div class="mt-1 mb-3"><span id="estado2"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-2 pb-2" style="display: flex; justify-content: center; align-items: center;">
                <div class="col-md-3"> 
                    <div class="row" style="border-radius: 25px; border: 2px solid black;">
                        <div class="col-md-12 bg-primary text-white" style="border-top-left-radius: 25px; border-top-right-radius: 25px; display: flex; justify-content: center; align-items: center;"> Leyenda </div>
                        <div class="col-md-12 mt-3 d-flex align-items-center">
                            <div class="circle" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 10px; background-color: #28a745;"></div> 
                            <span>Contenedor Vacío</span>
                        </div>
                        <div class="col-md-12 mt-3 d-flex align-items-center">
                            <div class="circle" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 10px; background-color: #ffc107;"></div> 
                            <span>Contenedor por llenarse</span>
                        </div>
                        <div class="col-md-12 mt-3 mb-3 d-flex align-items-center">
                            <div class="circle" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 10px; background-color: #dc3545;"></div> 
                            <span>Contenedor Lleno</span>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>
    </div>

    <script>
        var config = {
            apiKey: "AIzaSyC5TdpVTw0NrIj1uRsKz3qi1-j6Dpz7A6s",
            authDomain: "iot-proyecto-de053.firebaseapp.com",
            databaseURL: "https://iot-proyecto-de053-default-rtdb.firebaseio.com",
            projectId: "iot-proyecto-de053",
            storageBucket: "iot-proyecto-de053.appspot.com",
            messagingSenderId: "625920823877",
            appId: "1:625920823877:web:0ea1cbaa1a982c7963892c"
        };
        firebase.initializeApp(config);
        var database = firebase.database();
        
        function actualizarTabla(contenedores) {
            var contenedoresData = [];
            var html = '';
            contenedores.forEach(function(contenedor) {
                var nombre = contenedor.Nombre || '';
                var porcentaje = (contenedor.Porcentaje || 0) + ' %';
                var estado = contenedor.Estado ? 'Lleno' : 'Vacío';
                var id = (contenedor.Id || 0);

                var contenedorData = {
                    id: id,
                    nombre: nombre,
                    porcentaje: porcentaje,
                    estado: estado
                };
                contenedoresData.push(contenedorData); 
                html += '<tr>\
                    <td>'+ id +'</td>\
                    <td>'+ nombre +'</td>\
                    <td>'+ porcentaje +'</td>\
                    <td>'+ estado +'</td>\
                </tr>';
            });
            $('#tbody').html(html);
            if (contenedores.length > 0) {
                mostrarDatosContenedor(contenedores[0]);
                mostrarDatosContenedor2(contenedores[1]); // Mostrar datos del primer contenedor por defecto
            } else {
                console.log('No se encontraron contenedores o los datos están vacíos.');
            }
        }
        function mostrarDatosContenedor(contenedor) {
            $('#id1').text(contenedor.Id || '');
            $('#nombre1').text(contenedor.Nombre || '');

            // Determinar el color del círculo según el porcentaje
            var porcentaje = contenedor.Porcentaje || 0;
            var estado = contenedor.Estado ? 'Lleno' : 'Vacío';
            var color = '';

            if (porcentaje < 70) {
                color = '#28a745';  // Verde para menos del 70%
            } else if (porcentaje >= 70 && porcentaje < 95) {
                color = '#ffc107'; // Ámbar para entre 70% y 95%
            } else {
                color = '#dc3545';    // Rojo para 95% o más
            }

            // Crear el círculo con el color determinado
            var circleHtml = '<div class="circle" style=" width: 25px; height: 25px; border-radius: 50%; display: inline-block; margin-left: 5px;background-color: '+ color +'"></div>';
            var progressHtml = `
                    <div class="progress" style="height: 20px; margin-bottom: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: ${porcentaje}%; transition: width 0.6s ease; background-color: ${color};" aria-valuenow="${porcentaje}" aria-valuemin="0" aria-valuemax="100">${porcentaje}%</div>
                    </div>
            `;
            $('#estado1').html(circleHtml);
            $('#porcentaje1').html(progressHtml);
        }


        function mostrarDatosContenedor2(contenedor) {
            $('#id2').text(contenedor.Id || '');
            $('#nombre2').text(contenedor.Nombre || '');

            // Determinar el color del círculo según el porcentaje
            var porcentaje2 = contenedor.Porcentaje || 0;
            var estado2 = contenedor.Estado ? 'Lleno' : 'Vacío';
            var color2 = '';

            if (porcentaje2 < 70) {
                color2 = '#28a745';  // Verde para menos del 70%
            } else if (porcentaje2 >= 70 && porcentaje2 < 95) {
                color2 = '#ffc107'; // Ámbar para entre 70% y 95%
            } else {
                color2 = '#dc3545';    // Rojo para 95% o más
            }

            var progressHtml2 = `
                    <div class="progress" style="height: 20px; margin-bottom: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: ${porcentaje2}%; transition: width 0.6s ease; background-color: ${color2};" aria-valuenow="${porcentaje2}" aria-valuemin="0" aria-valuemax="100">${porcentaje2}%</div>
                    </div>
            `;
            // Crear el círculo con el color determinado
            var circleHtml2 = '<div class="circle" style=" width: 25px; height: 25px; border-radius: 50%; display: inline-block; margin-left: 5px;background-color: '+ color2 +'"></div>';
            $('#estado2').html(circleHtml2);
            $('#porcentaje2').html(progressHtml2);
        }

        firebase.database().ref('Contenedores').on('value', function(snapshot) {
            var contenedores = [];
            snapshot.forEach(function(childSnapshot) {
                var contenedor = childSnapshot.val();
                contenedores.push(contenedor);
            });
            if (contenedores.length > 0) {
                actualizarTabla(contenedores);
            } else {
                console.log('No se encontraron contenedores o los datos están vacíos.');
            }
        });
    </script>
</body>
</html>
