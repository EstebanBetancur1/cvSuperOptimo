@extends('dashboard.app')

@section('content')

<style>
    .contenedor_grid{
        display: grid;
        grid-template-columns: 2fr 3fr;
        grid-template-rows: 1fr;
        gap: 1rem;

    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 6px;
    right: 1px;
    width: 20px;
    }
    body > div.contenedor_grid.px-10 > div.w-full.mx-auto.p-6.bg-white.shadow-lg > div:nth-child(5) > div:nth-child(1) > span > span.selection > span{
        height: 37px;
    border: none;
    --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    display: flex;
    justify-content: start;
    align-items: center;
}
.gridphoto {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr auto; /* Second row set to auto to accommodate content size */
    gap: 1rem;
}

/* Assuming .error-message is the class for the error message */
.error-message {
    grid-column: 2; /* Place the error message in the second column */
    grid-row: 2; /* Place the error message in the second row */
}
</style>
<div class="contenedor_grid px-10">
<div class="w-full mx-auto p-6 bg-white shadow-lg">
    <h2 class="text-2xl font-semibold mb-6">Detalles personales <i class="fas fa-pencil-alt"></i></h2>
    <div class="gridphoto mb-6">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="job-title">
                Título del trabajo buscado <i class="fas fa-question-circle"></i>
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="job-title" type="text" placeholder="Programador">
        </div>
        <div class="text-center flex gap-5">
            <div class="mb-2">
                <i class="fas fa-user fa-4x text-gray-300" id="DefaultPhoto"></i>
             
                    <img src="" alt="" id="PreviePhoto" class="h-[56px] w-[69px] object-cover" hidden>
            </div>
            <button class=" text-blue-500 font-bold py-2 px-4 rounded" id="SelectPhoto">
                Subir foto
            </button>

            <input type="file" hidden id="photo">
        </div>
        <span id="errorphoto" class="error-message"></span>
    </div>
    <div class="grid grid-cols-2 gap-6 mb-6">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="first-name">
                Nombre de pila
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="first-name" type="text" placeholder="Esteban">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="last-name">
                Apellido
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="last-name" type="text" placeholder="Betancur">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-6 mb-6">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Correo electrónico
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="email" type="email" placeholder="personadata42@gmail.com">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                Teléfono
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="phone" type="text" placeholder="">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-6">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="country">
                País
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="country" type="text" placeholder="">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                Ciudad
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="city" type="text" placeholder="">
        </div>
    </div>
</div>

<div class="w-full mx-auto p-6 bg-white h-screen overflow-hidden">
    <div class="flex flex-wrap -mx-2">
        <div class="flex flex-wrap bg-white shadow-lg h-screen overflow-scroll">
          <div class="w-full md:w-1/3 p-8 border-r border-gray-300">
            <div class="mb-8">
              <img id="previePhotoVida" alt="Portrait of Mariana Anderson, a professional Marketing Manager" class="rounded-full w-32 h-32 mx-auto object-cover" src="https://placehold.co/200x200" />
            </div>
            <div class="mb-8">
              <h2 class="text-2xl font-bold mb-2">Contact</h2>
              <p class="mb-2 contact-info">
                <strong>Phone</strong><br>
                123-456-7890
              </p>
              <p class="mb-2 contact-info">
                <strong>Email</strong><br>
                hello@reallygreatsite.com
              </p>
              <p class="mb-2 contact-info">
                <strong>Address</strong><br>
                123 Anywhere St., Any City
              </p>
            </div>
            <div class="mb-8">
              <h2 class="text-2xl font-bold mb-2">Education</h2>
              <p class="mb-2 education-info">
                2008<br>
                <strong>Enter Your Degree</strong><br>
                University/College
              </p>
              <p class="mb-2 education-info">
                2008<br>
                <strong>Enter Your Degree</strong><br>
                University/College
              </p>
            </div>
            <div class="mb-8">
              <h2 class="text-2xl font-bold mb-2">Expertise</h2>
              <ul class="list-disc ml-4 expertise-info">
                <li>UI/UX</li>
                <li>Visual Design</li>
                <li>Wireframes</li>
                <li>Storyboards</li>
                <li>User Flows</li>
                <li>Process Flows</li>
              </ul>
            </div>
            <div>
              <h2 class="text-2xl font-bold mb-2">Language</h2>
              <p class="language-info">
                English<br>
                Spanish
              </p>
            </div>
          </div>
          <div class="w-full md:w-2/3 p-8">
            <div class="mb-8">
              <h1 class="text-5xl font-bold" id="NombrePersonaVida">Mariana Anderson</h1>
              <p class="text-2xl text-gray-700" id="CargoVida">Marketing Manager</p>
              <p class="mt-4 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra in lorem at laoreet. Donec hendrerit libero eget est tempor, quis tempus arcu elementum. In elementum elit at dui tristique feugiat. Mauris convallis, mi at mattis malesuada, neque nulla volutpat dolor, hendrerit faucibus eros nibh ut nunc.</p>
            </div>
            <div class="mb-8">
              <h2 class="text-2xl font-bold mb-2">Experience</h2>
              <div class="mb-4">
                <h3 class="text-xl font-bold mb-1">2019 - 2022</h3>
                <p class="font-bold">Company Name | 123 Anywhere St., Any City</p>
                <p class="text-gray-700 italic mb-2">Job position here</p>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra in lorem at laoreet. Donec hendrerit libero eget est tempor, quis tempus arcu elementum. In elementum elit at dui tristique feugiat. Mauris convallis, mi at mattis malesuada, neque nulla volutpat dolor, hendrerit faucibus eros nibh ut nunc. Proin luctus urna id nunc sagittis dignissim. Sed in libero sed libero dictum dapibus. Vivamus fermentum est eget lorem aliquet, vel tempus metus dignissim. Donec risus arcu, tristique et sollicitudin blandit, iaculis ut nisl. Integer rutrum ultrices fringilla.</p>
              </div>

              <div>
                <h3 class="text-xl font-bold mb-1">2015 - 2017</h3>
                <p class="font-bold">Company Name | 123 Anywhere St., Any City</p>
                <p class="text-gray-700 italic mb-2">Job position here</p>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra in lorem at laoreet. Donec hendrerit libero eget est tempor, quis tempus arcu elementum. In elementum elit at dui tristique feugiat. Mauris convallis, mi at mattis malesuada, neque nulla volutpat dolor, hendrerit faucibus eros nibh ut nunc. Proin luctus urna id nunc sagittis dignissim. Sed in libero sed libero dictum dapibus. Vivamus fermentum est eget lorem aliquet, vel tempus metus dignissim. Donec risus arcu, tristique et sollicitudin blandit, iaculis ut nisl. Integer rutrum ultrices fringilla.</p>
              </div>
            </div>
            <div>
              <h2 class="text-2xl font-bold mb-2">Reference</h2>
              <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                  <p class="font-bold">Name Surname</p>
                  <p class="text-gray-700">Job position, Company Name</p>
                  <p class="text-gray-700"><strong>Phone:</strong> 123-456-7890</p>
                  <p class="text-gray-700"><strong>Email:</strong> hello@reallygreatsite.com</p>
                </div>
                <div class="w-full md:w-1/2 px-2">
                  <p class="font-bold">Name Surname</p>
                  <p class="text-gray-700">Job position, Company Name</p>
                  <p class="text-gray-700"><strong>Phone:</strong> 123-456-7890</p>
                  <p class="text-gray-700"><strong>Email:</strong> hello@reallygreatsite.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>


<script>
    
// Función asíncrona para cargar los países desde la URL y poblar el elemento select
async function loadCountries() {
    try {
        // Obtenemos los datos de la URL
        const response = await fetch('https://case1490.github.io/API-pais/data.json');
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();

        // Procesamos los datos y los agregamos al elemento select
        const selectElement = document.getElementById('country');
        data.forEach(country => {
            const option = document.createElement('option');
            option.value = country.code;
            option.text = country.name;
            selectElement.appendChild(option);
        });

        // Inicializar Select2 en el elemento select
        $(selectElement).select2({
            placeholder: "Selecciona un país",
            maximumSelectionLength: 1,
            language: "es"
        });

    } catch (error) {
        console.error('Error al cargar los países:', error);
    }
}

// Llamar a la función cuando la página esté lista
document.addEventListener('DOMContentLoaded', loadCountries);

const SelectPhoto = document.getElementById('SelectPhoto');
const photo = document.getElementById('photo');
const previePhotoVida = document.getElementById('previePhotoVida');
const errorphoto = document.getElementById('errorphoto');

SelectPhoto.addEventListener('click', () => {
    photo.click();
});

const PreviePhoto = document.getElementById('PreviePhoto');
const DefaultPhoto = document.getElementById('DefaultPhoto');

photo.addEventListener('change', (e) => {
    const file = e.target.files[0];
    const fileReader = new FileReader();
    const allowedExtensions = ['jpg', 'jpeg', 'png'];
    const maxFileSize = 4 * 1024 * 1024; // 4MB

    if (file) {
        const extension = file.name.split('.').pop().toLowerCase();
        const fileSize = file.size;

        if (allowedExtensions.includes(extension) && fileSize <= maxFileSize) {
            fileReader.readAsDataURL(file);

            fileReader.addEventListener('load', (e) => {
                PreviePhoto.setAttribute('src', e.target.result);
                DefaultPhoto.setAttribute('hidden', '');
                PreviePhoto.removeAttribute('hidden');
                previePhotoVida.setAttribute('src', e.target.result);
                DefaultPhoto.setAttribute('hidden', '');
                previePhotoVida.removeAttribute('hidden');
            });
        } else {
            const errorSpan = document.createElement('span');
            errorSpan.textContent = 'No se permite este tipo de formato o el archivo supera los 4MB';
            errorSpan.style.color = 'red';
            errorphoto.appendChild(errorSpan);
        }
    }
});

const NombrePersonaVida = document.getElementById('NombrePersonaVida');
const nombre = document.getElementById('first-name');
const CargoVida = document.getElementById('CargoVida');
const cargo = document.getElementById('job-title');

nombre.addEventListener('keyup', () => {
    NombrePersonaVida.textContent = nombre.value;
});

cargo.addEventListener('keyup', () => {
    CargoVida.textContent = cargo.value;
});
</script>
@endsection