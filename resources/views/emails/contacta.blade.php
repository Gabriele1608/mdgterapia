<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Manuela Di Giorgio</title>
    </head>
    <body>
        
        <h1 class="semi-bold text-lg">Consulta de clientes</h1> 
    
       <ul class="list-none">
            <li>
               Nombre: {{$detallesEmail['nombre']}}
            </li>
            <li>
                Apellidos: {{$detallesEmail['apellido']}}
             </li>
            <li>
                Email: {{$detallesEmail['email']}}
            </li>
            <li>
                Telefono: {{$detallesEmail['telefono']}}
            </li>
            <p>
                Mensaje: {{$detallesEmail['mensaje']}}
            </p>
       </ul>
    
    </body>
    </html>