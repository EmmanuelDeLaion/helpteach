<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos-login.css') }}">
    <title>Inicia sesión</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="sign-in-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="title">Inicia sesión</h2>



                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuario" id="email" class="block mt-1 w-full" type="email"
                            name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" id="password" class="block mt-1 w-full"
                            type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <x-jet-validation-errors class="mt-12 error-login" />


                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordar Contraseña') }}</span>
                        </label>
                    </div>

                    <x-jet-button class="ml-4 btn solid">
                        {{ __('Iniciar Sesión') }}
                    </x-jet-button>

                </form>



            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¿No tienes una cuenta?</h3>
                    <p>
                        Para poder iniciar sesión debes de registrarte
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Regístrate
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

   
</body>

</html>
