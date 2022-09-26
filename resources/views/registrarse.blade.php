@extends('layout')
@section('content')

<div class="flex justify-center">
    <form action="/registrarse" method="POST" class="p-8 bg-slate-200 h-auto mb-10 w-96">
        <legend class="text-4xl uppercase font-bold text-indigo-400 text-center">Registrarse</legend>
        <fieldset class="flex flex-col justify-center gap-y-3 mt-6">
            @csrf
            <div class="p-2 flex flex-col gap-y-1 w-full">
                <label for="name">Nombre</label>
                <input class="p-2 outline-none" type="text" placeholder="Tu Nombre" name="name" id="name" required value="{{old('name')}}">

                @error('name')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="p-2 flex flex-col gap-y-1 w-full">
                <label for="lastname">Apellido</label>
                <input class="p-2 outline-none" type="text" placeholder="Tu Apellido" name="lastname" id="lastname" required value="{{old('lastname')}}">

                @error('lastname')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="p-2 flex flex-col gap-y-1 w-full">
                <label for="email">Email</label>
                <input class="p-2 outline-none" type="email" placeholder="Tu Email" name="email" id="email" required value="{{old('email')}}">

                @error('email')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="p-2 flex flex-col gap-y-1 w-full">
                <label for="password">Contraseña</label>
                <input class="p-2 outline-none" type="password" placeholder="Tu Contraseña" name="password" id="passwrod" required value="{{old('password')}}">

                @error('password')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="p-2 flex flex-col gap-y-1 w-full">
                <label for="password">Confirmar Contraseña</label>
                <input class="p-2 outline-none" type="password" placeholder="Confirmar tu Contraseña" name="password_confirmation" id="passwrod" required value="{{old('password_confirmation')}}">
            
                @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <input type="submit" value="Registrarse" class="bg-indigo-400 p-2 text-white uppercase">
        </fieldset>
    </form>
</div>

@endsection
