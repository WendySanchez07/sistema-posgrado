<x-app-layout>
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver horario de la presentación') }}
        </h2>
  </x-slot>

  <div class="py-12">
  @if (session('status'))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-{{ session('color') }}-300 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-{{ session('color') }}-300 border-b border-gray-200">
                        <p id="session" class="text-{{ session('color') }}-700">{{ session('status') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          @if($avance == false)
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">No tienes programada una fecha aún, vuelve más tarde.</h2>
          @else
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tienes programada la siguiente fecha para presentar tu avance</h2>
            <p class="text-lg text-blue-400 mt-2">
              En la fecha {{ $avance->fecha }} y hora {{ $avance->hora }}
            </p>
            <p class="mt-4 text-gray-400">
              Comentarios: {{$avance->comentarios}}
            </p>
          @endif

        </div>
      </div>
    </div>
  </div>
</x-app-layout>