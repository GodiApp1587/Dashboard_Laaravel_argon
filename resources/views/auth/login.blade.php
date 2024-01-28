@extends('layouts.app')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="container d-flex align-items-center justify-content-center">                              
                                <div class="col-xl-11 col-lg-5 col-md-7   mx-lg-0 mx-auto">
                                    <div class="card z-index-0">
                                    <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <div class="d-flex justify-content-center mb-1">
                                            <h3 class="font-weight-bolder">Iniciar Sesión</h3>
                                    </div>
                                    <p class="mb-1"> <p class="text-center">Ingresa tu correo electrónico y contraseña, asignados por el administrador</p></p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email')   }}" placeholder="Correo electrónico">                                           
                                             @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña" value="{{ old('password') }}" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Recordar mi cuenta</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar Sesión</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                      ¿No tienes cuenta en Respuesta Inmediata?
                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Crear Cuenta</a>
                                    </p>
                                </div>
                            </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-4 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://i.pinimg.com/564x/2e/6d/de/2e6dde6ecee954b3f5cc8d05a8e64516.jpg');
              background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-4"></span>
                                <h1 class="mt-5 text-white font-weight-bolder position-relative">"Llegar juntos es el principio"</h1>
                                <h6 class="text-white position-relative">Mantenerse juntos, es el progreso. Trabajar juntos es el éxito. Henry Ford.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
