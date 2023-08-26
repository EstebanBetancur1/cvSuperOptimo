
<div x-data="{ mobileMenuOpen: false }" class="relative bg-white z-10">
  <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
    <div class="lg:w-0 lg:flex-1">
      <a href="/"><img class="h-8 w-auto sm:h-10" src="{{ asset('storage/imagenes/logo_ico.svg') }}" alt="Super Optimo Logo" /> </a>
    </div>
    <div class="-mr-2 -my-2 md:hidden">
      <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <nav class="hidden md:flex space-x-10">
      <div x-description="Flyout menu, show/hide based on flyout menu state." @click.away="flyoutMenuOpen = false" x-data="{ flyoutMenuOpen: false }" class="relative">
        <button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" class="inline-flex items-center space-x-2 text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900">
          <span>Soluciones</span>
          <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div style="display: none;" x-show="flyoutMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute -ml-4 mt-3 w-max-content max-w-md transform lg:ml-0 lg:left-1/2 lg:-translate-x-1/2 xl:max-w-3xl">
          <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs overflow-hidden">
              <div class="z-20 relative grid gap-8 bg-white p-8 xl:grid-cols-2">
                <a href="#" class="flex items-start space-x-4">
                  <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-md bg-naranja text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                      Analisis <span class="text-red-500">Prontamente...</span>
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Opten un analisis de las hojas de vida más elejidas.
                    </p>
                  </div>
                </a>
                <a href="#" class="flex items-start space-x-4">
                  <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-md bg-naranja text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                      Formatos <span class="text-red-500">Prontamente...</span>
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                    Descarga formatos de hojas de vida.
                    </p>
                  </div>
                </a>
              </div>
              <div class="py-6 px-8 bg-gray-50">
                <a href="/" class="block space-y-1 w-max-content max-w-full">
                  <div class="flex items-center space-x-3">
                    <div class="text-base leading-6 font-medium text-gray-900">
                      Contactanos para más información
                    </div>
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium leading-5 bg-indigo-100 text-naranja">
                      New
                    </span>
                  </div>
                  <p class="text-sm leading-5 text-gray-500">
                    Podemos darte consejos para mejorar tu hoja de vida con inteligencia artificial. 
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- <a href="#" class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900">
        Pricing
      </a> --}}
      <a href="#" class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900">
        Documentos
      </a>

      <div x-description="Flyout menu, show/hide based on flyout menu state." x-data="{ flyoutMenuOpen: false }" @click.away="flyoutMenuOpen = false" class="relative">
        <button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" class="inline-flex items-center space-x-2 text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900">
          <span>Información</span>
          <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div style="display: none;" x-show="flyoutMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute -ml-6 mt-3 w-max-content max-w-xs transform lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
          <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs overflow-hidden">
              <div class="z-20 relative space-y-8 bg-white p-8">
                <a href="#" class="block space-y-1">
                  <p class="text-base leading-6 font-medium text-gray-900">
                    Inteliencia Artificial
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Aquí puedes leer sobre como funciona la inteligencia artificial en nuestro sistema.
                  </p>
                </a>
                <a href="#" class="block space-y-1">
                  <p class="text-base leading-6 font-medium text-gray-900">
                    Tu mismo puedes hacerlo
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Te enseñamos como puedes utilizar la inteligencia artificial para mejorar tu hoja de vida.
                  </p>
                </a>
                <a href="#" class="block space-y-1">
                  <p class="text-base leading-6 font-medium text-gray-900">
                    Contactanos
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Si tienes alguna duda, puedes contactarnos y te responderemos lo más pronto posible.
                  </p>
                </a>
                {{-- <a href="#" class="block space-y-1">
                  <p class="text-base leading-6 font-medium text-gray-900">
                    Quienes somos
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Conoce más sobre nosotros.
                  </p>
                </a> --}}
                <a href="#" class="block space-y-1">
                  <p class="text-base leading-6 font-medium text-gray-900">
                    Tus datos
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Tus datos están seguros con nosotros y no los compartiremos con nadie.
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">
      <a href="{{ route('register') }}" class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:text-gray-900">
        Registrate
      </a>
      <span class="inline-flex rounded-md shadow-sm">
        <a href="{{ route('curriculum') }}" class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-naranja hover:bg-naranja focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-naranja_claro transition ease-in-out duration-150">
          Comenzar
        </a>
      </span>
    </div>
  </div>

  <div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 space-y-6">
          <div class="flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="{{ asset('storage/imagenes/logo_ico.svg') }}" alt="Workflow" />
            </div>
            <div class="-mr-2">
              <button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div>
            <nav class="space-y-6">
              <a href="#" class="flex items-center space-x-4">
                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-naranja text-white">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                </div>
                <div class="text-base leading-6 font-medium text-gray-900">
                  Analisis
                </div>
              </a>
              <a href="#" class="flex items-center space-x-4">
                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-naranja text-white">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                  </svg>
                </div>
                <div class="text-base leading-6 font-medium text-gray-900">
                  Formatos
                </div>
              </a>
              <a href="#" class="flex items-center space-x-4">
                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-naranja text-white">
                  <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <div class="text-base leading-6 font-medium text-gray-900">
                  Tus datos
                </div>
              </a>
              <a href="#" class="flex items-center space-x-4">
                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-naranja text-white">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                  </svg>
                </div>
                <div class="text-base leading-6 font-medium text-gray-900">
                  Inteligenia Artificial
                </div>
              </a>
              <a href="#" class="flex items-center space-x-4">
                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-naranja text-white">
                    <svg class="w-6 h-6 text-gray-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h9M5 9h5m8-8H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h4l3.5 4 3.5-4h5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                    </svg>
                </div>
                <div class="text-base leading-6 font-medium text-gray-900">
                    Contactanos
                </div>
              </a>
              <a href="#" class="flex items-center space-x-4">
                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-naranja text-white">
                  <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                </div>
                <div class="text-base leading-6 font-medium text-gray-900">
                    Quienes somos
                </div>
              </a>
            </nav>
          </div>
        </div>
        <div class="py-6 px-5 space-y-6">
          {{-- <div class="grid grid-cols-2 gap-4">
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Pricing
            </a>
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Docs
            </a>
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Enterprise
            </a>
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Blog
            </a>
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Help Center
            </a>
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Guides
            </a>
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Security
            </a>
            <a href="#" class="text-base leading-6 font-medium text-gray-900">
              Events
            </a>
          </div> --}}
          <div class="space-y-6">
            <span class="w-full flex rounded-md shadow-sm">
              <a href="{{ route('curriculum') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-naranja hover:bg-naranja focus:outline-none focus:bg-red-300 focus:shadow-outline-indigo active:bg-red-500 transition ease-in-out duration-150">
                Comenzar
              </a>
            </span>
            <p class="text-center text-base leading-6 font-medium text-gray-500">
              Ya tienes una cuenta?
              <a href="#" class="text-gray-900">
                Inicia sesión
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

