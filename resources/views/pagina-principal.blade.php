@extends('layout')
@section('content')

<div>
    <div class="p-4 grid grid-cols-2 gap-x-4">
        <div>
            <img src="/images/home-page-description.webp" alt="image" class="w-full h-full">
        </div>
        <div class="bg-white flex flex-col gap-y-4">
            <div>
                <h1 class="text-5xl font-bold" >Organiza tus horarios en cuestion de segundos</h1>
            </div>
            <div>
                <p class="text-xl font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ullam corporis dolorem vero incidunt et vitae pariatur quis, id earum soluta laudantium deserunt a velit ducimus repellat saepe provident, quaerat asperiores eos distinctio. At molestiae aut ad quia temporibus velit, laborum tempora nisi ducimus ratione quasi harum possimus consequuntur. Totam.</p>
            </div>
            <div class="grid grid-cols-2 gap-x-4">
                <a href="iniciar-sesion">
                    <button class="w-full p-3 border-indigo-400 border-2 text-indigo-400 uppercase hover:text-white hover:bg-indigo-400 hover:transition-all">
                        Iniciar Sesion
                    </button>
                </a>
                <a href="/registrarse">
                    <button class="w-full p-3 bg-indigo-400 text-white uppercase hover:bg-white hover:text-indigo-400 hover:border-indigo-400 hover:border-2">
                        Crear Cuenta
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 justify-between content-center p-4">
        <div class="flex flex-col justify-center items-center text-center p-4 m-8 shadow-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                <path d="M12 6v2m0 8v2" />
            </svg>
            <h2 class="font-semibold text-xl">Ahorra Dinero</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsa natus fugit, earum laboriosam totam?</p>
        </div>

        <div class="flex flex-col justify-center items-center text-center p-4 m-8 shadow-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <polyline points="12 7 12 12 15 15" />
            </svg>
            <h2 class="font-semibold text-xl">Ahorra tiempo</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsa natus fugit, earum laboriosam totam?</p>
        </div>

        <div class="flex flex-col justify-center items-center text-center p-4 m-8 shadow-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="4" y="5" width="16" height="16" rx="2" />
                <line x1="16" y1="3" x2="16" y2="7" />
                <line x1="8" y1="3" x2="8" y2="7" />
                <line x1="4" y1="11" x2="20" y2="11" />
                <rect x="8" y="15" width="2" height="2" />
              </svg>
            <h2 class="font-semibold text-xl">Organiza mas</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsa natus fugit, earum laboriosam totam?</p>
        </div>
    </div>
    <div class="mt-20">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center items-center text-center p-4 w-8/12">
                <h1 class="text-4xl font-semibold">Testimonios de nuestros estudiantes</h1>
                <p class="font-thin mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, aliquam delectus. Saepe ex officiis culpa dolor! Tenetur dolor id similique sapiente suscipit beatae commodi? Harum, dignissimos ipsam voluptate dicta placeat officia totam quod cupiditate quam. Officiis laborum quibusdam quidem nihil. Consequuntur id fugit facilis sequi odio impedit iusto molestiae at.</p>
            </div>
        </div>
        <div class="grid grid-cols-3 p-4 gap-8">
            @foreach ($testimonios as $testimonio)
              <div class="bg-gray-100 p-4 text-left">
                 <div class="flex items-center gap-4">
                    <div>
                        <h3 class="font-semibold text-2xl">{{$testimonio['nombre']}} {{$testimonio['apellido']}}  </h3>
                        <p class="font-thim"> {{$testimonio['universidad']}}  </p>
                    </div>
                 </div>
                 <div>
                     <p class="mt-5">{{$testimonio['descripcion']}} </p>
                 </div>
              </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
