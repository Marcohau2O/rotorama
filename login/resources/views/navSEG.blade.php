@vite('resources/css/app.css')
<div class=" bg-[#393d42] w-[18rem] h-screen flex flex-col justify-between">
    <div>
        <a href="/" class="text-white flex flex-row align-items-center p-3 pb-3 gap-2">
            <span class="text-4xl font-bold">SIC</span>
            <span class="border-l-2 pl-2">Sistema integral de calificaciones.</span>
        </a>
        <ul class="flex flex-col justify-between">

            <div>
                <!--Linea de separación atte: guayabo -->
                <p class="border-top opacity-60"></p>
                <li>
                    <a href="/dashboard"
                        class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                        <i class="fa-solid fa-school"></i>
                        Inicio
                    </a>
                </li>
                <li>
                    <button
                        class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                        <i class="fa-solid fa-users-line"></i>
                        Usuarios
                    </button>
                </li>
                <li>
                    <button
                        class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                        <i class="fa-solid fa-diagram-project"></i>
                        Gestión de proyecto
                    </button>
                </li>
                <li>
                    <button
                        class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                        <i class="fa-solid fa-envelope"></i>
                        Notificaciones
                    </button>
                </li>
                <li>
                    <button
                        class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                        <i class="fa-solid fa-address-card"></i>
                        Mi perfil
                    </button>
                </li>
            </div>
        </ul>
    </div>
    <div class="">
        <!--Linea de separación atte: guayabo -->
        <p class="border-top opacity-60"></p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                class="logout_sidebar justify-start align-items-center py-3 text-[#e0e0e0] hover:text-[#181818] flex flex-row p-3 gap-2 w-full hover:bg-[#e0e0e0] text-"
                onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>
                {{ __('Cerrar sesión') }}
            </x-dropdown-link>
        </form>
    </div>
</div>