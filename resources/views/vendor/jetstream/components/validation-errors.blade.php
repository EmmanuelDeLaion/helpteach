@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-500">{{ __('El usuario y/o la contraseña no son correctos') }}</div>

        <ul class="mt-6 list-disc list-inside text-sm text-red-500">
            @foreach ($errors->all() as $error)
                {{-- <li>{{ $error }}</li> --}}
            @endforeach
        </ul>
    </div>
@endif
