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
    <div class="container-register">
        <div class="forms-container">
            <div class="signin-signup">

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="sign-in-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="title">Registro</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre" id="name" class="block mt-1 w-full" type="text"
                            name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input placeholder="Correo" id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" id="password" class="block mt-1 w-full"
                            type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirmar contraseña" id="password_confirmation"
                            class="block mt-1 w-full" type="password" name="password_confirmation" required
                            autocomplete="new-password" />
                    </div>

                    <x-jet-validation-errors class="mt-12 error-login" />

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif


                    <x-jet-button class="ml-4 btn solid">
                        {{ __('Registrarse') }}
                    </x-jet-button>


                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>
                        Si ya tienes una cuenta inicia sesión para disfrutar de los cursos
                    </p>
                    <button onclick="location.href='{{ route('login') }}'" class="btn-transparent">
                        Inicia Sesión
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
