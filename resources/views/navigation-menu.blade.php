<nav x-data="{ 
        showSidebar: false, 
        inventarioOpen: false,
        comprasOpen: false, 
        ventasOpen: false, 
        cajaOpen: false, 
        reportesOpen: false  
        }" class="relative">
    <div x-cloak x-show="showSidebar" x-transition.opacity @click="showSidebar = false"
        class="fixed inset-0 z-30 bg-black/20 md:hidden" aria-hidden="true"></div>

    <aside
        class="fixed top-0 left-0 z-40 h-screen w-64 bg-white border-r border-gray-200 transform transition-transform duration-300 md:translate-x-0"
        :class="showSidebar ? 'translate-x-0' : '-translate-x-full md:translate-x-0'">
        <div class="h-full flex flex-col">
            <div class="h-16 px-4 border-b border-gray-200 flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-4">
                    <x-application-mark class="block h-auto w-auto" />
                    <span class="text-sm font-semibold text-gray-700">RESTAURANTE JIBA</span>
                </a>
            </div>

            <div class="p-3 space-y-1 overflow-y-auto">

                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('dashboard') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10.5L12 3l9 7.5M5.25 9.75V21h13.5V9.75" />
                    </svg>
                    <span>Inicio</span>
                </a>

                <div>
                    <button type="button" @click="inventarioOpen = !inventarioOpen"
                        class="w-full flex items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition"
                        :aria-expanded="inventarioOpen ? 'true' : 'false'" aria-controls="submenu-inventario">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <span>Inventario</span>
                        </span>
                        <svg class="w-4 h-4 transition-transform" :class="inventarioOpen ? 'rotate-180' : ''"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="submenu-inventario" x-cloak x-show="inventarioOpen" x-transition
                        class="mt-1 ml-2 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M9 5a1 1 0 000 2h6a1 1 0 100-2H9zM7 9a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2H7z" /></svg>
                            <span>Ver Productos</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M10 3H4a1 1 0 00-1 1v6a1 1 0 001 1h6a1 1 0 001-1V4a1 1 0 00-1-1zM20 3h-6a1 1 0 00-1 1v6a1 1 0 001 1h6a1 1 0 001-1V4a1 1 0 00-1-1zM10 13H4a1 1 0 00-1 1v6a1 1 0 001 1h6a1 1 0 001-1v-6a1 1 0 00-1-1z" /></svg>
                            <span>Categorias</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 7a2 2 0 012-2h7l2 2h5a2 2 0 012 2v2H3V7zm0 4h18v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6z" /></svg>
                            <span>Marcas</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" /></svg>
                            <span>Ajuste Positivo</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-blue-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" /></svg>
                            <span>Ajuste Negativo</span>
                        </a>
                    </div>
                </div>

                <div>
                    <button type="button" @click="comprasOpen = !comprasOpen"
                        class="w-full flex items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition"
                        :aria-expanded="comprasOpen ? 'true' : 'false'" aria-controls="submenu-compras">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1 5h12M10 21a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z" />
                            </svg>
                            <span>Compras</span>
                        </span>
                        <svg class="w-4 h-4 transition-transform" :class="comprasOpen ? 'rotate-180' : ''"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="submenu-compras" x-cloak x-show="comprasOpen" x-transition class="mt-1 ml-2 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M5 4a2 2 0 00-2 2v12a2 2 0 002 2h14a2 2 0 002-2V8l-6-4H5zm10 1.5L19.5 9H15V5.5z" /></svg>
                            <span>Lista de Compras</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" /></svg>
                            <span>Nueva Compra</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2h-4v-5H10v5H6a2 2 0 01-2-2V6z" /></svg>
                            <span>Proveedores</span>
                        </a>
                    </div>
                </div>

                <div>
                    <button type="button" @click="ventasOpen = !ventasOpen"
                        class="w-full flex items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition"
                        :aria-expanded="ventasOpen ? 'true' : 'false'" aria-controls="submenu-ventas">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a5 5 0 00-10 0v2m-2 0h14l-1 11H6L5 9z" />
                            </svg>
                            <span>Ventas</span>
                        </span>
                        <svg class="w-4 h-4 transition-transform" :class="ventasOpen ? 'rotate-180' : ''"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="submenu-ventas" x-cloak x-show="ventasOpen" x-transition class="mt-1 ml-2 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M5 3a2 2 0 00-2 2v14a2 2 0 002 2h14V7l-4-4H5zm9 1.5L17.5 8H14V4.5z" /></svg>
                            <span>Lista de Ventas</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" /></svg>
                            <span>Nueva Venta</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16 11a4 4 0 10-8 0 4 4 0 008 0zm-4 6c-4.418 0-8 2.015-8 4.5V23h16v-1.5c0-2.485-3.582-4.5-8-4.5z" /></svg>
                            <span>Clientes</span>
                        </a>
                    </div>
                </div>

                <div>
                    <button type="button" @click="cajaOpen = !cajaOpen"
                        class="w-full flex items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition"
                        :aria-expanded="cajaOpen ? 'true' : 'false'" aria-controls="submenu-caja">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18v10H3V7zm0 0l2-3h14l2 3M7 12h4" />
                            </svg>
                            <span>Caja</span>
                        </span>
                        <svg class="w-4 h-4 transition-transform" :class="cajaOpen ? 'rotate-180' : ''"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="submenu-caja" x-cloak x-show="cajaOpen" x-transition class="mt-1 ml-2 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" /></svg>
                            <span>Apertura de Caja</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m-7-7l7 7-7 7" /></svg>
                            <span>Movimientos</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" /></svg>
                            <span>Cierre de Caja</span>
                        </a>
                    </div>
                </div>

                <div>
                    <button type="button" @click="reportesOpen = !reportesOpen"
                        class="w-full flex items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition"
                        :aria-expanded="reportesOpen ? 'true' : 'false'" aria-controls="submenu-reportes">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19h16M7 16V9m5 7V5m5 11v-4" />
                            </svg>
                            <span>Reportes</span>
                        </span>
                        <svg class="w-4 h-4 transition-transform" :class="reportesOpen ? 'rotate-180' : ''"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="submenu-reportes" x-cloak x-show="reportesOpen" x-transition class="mt-1 ml-2 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19h16M7 16V9m5 7V5m5 11v-4" /></svg>
                            <span>Reporte de Ventas</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19h16M8 15V7m8 8V10" /></svg>
                            <span>Reporte de Compras</span>
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                            <span>Reporte de Inventario</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-auto border-t border-gray-200 p-3">
                <a href="{{ route('profile.show') }}"
                    class="block rounded-md px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Perfil</a>

                <form method="POST" action="{{ route('logout') }}" class="mt-1">
                    @csrf
                    <button type="submit"
                        class="w-full text-left rounded-md px-3 py-2 text-sm text-red-600 hover:bg-red-50">
                        Cerrar Sesion
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <button type="button" @click="showSidebar = !showSidebar"
        class="fixed top-4 right-4 z-50 md:hidden inline-flex items-center justify-center rounded-md bg-white border border-gray-300 p-2 text-gray-700 shadow-sm"
        aria-label="Mostrar u ocultar menu">
        <svg x-show="!showSidebar" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="showSidebar" x-cloak class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</nav>