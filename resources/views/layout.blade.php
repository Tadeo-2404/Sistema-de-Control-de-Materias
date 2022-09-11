<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    @vite('resources/css/app.css')
    <title>SCM</title>
</head>
<body>
    <div class="flex flex-col">
        <nav class="p-4 bg-indigo-400 shadow-lg text-center w-full flex justify-between">
            <div class="flex flex-col justify-center">
                <a href="/">
                    <span>
                        <h1 class="text-4xl font-bold">SCM</h1>
                        <p class="font-semibold">Sistema de Control de Materias</p>
                    </span>
                </a>
            </div>
            <div class="flex items-center gap-x-8 w-96 content-center">
                <div>
                    <a href="/registrarse" class="font-bold uppercase text-white">Registrarse</a>
                </div>
                <div>
                    <a href="/iniciar-sesion" class="font-bold uppercase text-white">Inciar Sesion</a>
                </div>
            </div>
        </nav>
        <div class="mt-10 bg-white">
            @yield('content')
            <footer class="bg-black p-8 flex justify-center text-2xl text-white">
                <p>Todos los derechos reservados &copy; {{ now()->year }}</p>
            </footer>
        </div>
    </div>
</body>
</html>