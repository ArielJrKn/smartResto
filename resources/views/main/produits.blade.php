@extends('main.layouts.app')
@section('content')   
	        
	        <!-- Main Content -->
	        <div class=" flex-1 flex flex-col overflow-hidden">
	            
	            <!-- Dashboard Content -->
	            <main class="pt-20 flex-1 overflow-y-auto p-6">
		            <div class="flex items-center justify-between">
		                <h1 class="text-2xl font-bold text-white">Carte &amp; Menu</h1>
		                <div class="flex items-center gap-3">
		                    <button class="bg-primary text-white px-4 py-2 rounded-lg whitespace-nowrap flex items-center gap-2 hover:bg-blue-600 transition-colors" onclick="openModal('addDish')">
		                        <div class="w-4 h-4 flex items-center justify-center">
		                            <i class="ri-add-line text-sm"></i>
		                        </div>
		                        Ajouter plat
		                    </button>
		                    <button class=" hidden bg-orange-500 text-white px-4 py-2 rounded-lg whitespace-nowrap flex items-center gap-2 hover:bg-orange-600 transition-colors" onclick="openModal('addMenu')">
		                        <div class="w-4 h-4 flex items-center justify-center">
		                            <i class="ri-add-line text-sm"></i>
		                        </div>
		                        Ajouter menu
		                    </button>
		                </div>
		            </div>

		            <div class="px-1 py-2">
				        <!-- Entrées Section -->
				        <div class="bg-white/10 rounded-xl shadow-sm mb-6">
				            <div class="p-2 cursor-pointer" onclick="toggleAccordion('entrees')">
				                <div class="flex items-center justify-between">
				                    <div class="flex items-center gap-3">
				                        <div class="w-6 h-6 flex items-center justify-center text-primary">
				                            <i class="ri-restaurant-line"></i>
				                        </div>
				                        <h2 class="text-lg font-semibold text-gray-400">Entrées</h2>
				                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">8 articles</span>
				                    </div>
				                    <div class="w-5 h-5 flex items-center justify-center text-gray-400 transform transition-transform" id="entrees-icon">
				                        <i class="ri-arrow-down-s-line"></i>
				                    </div>
				                </div>
				            </div>
				            <div class="p-2" id="entrees-content">
				                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
				                    <!-- Product Card -->
				                    <div class="bg-white/10 rounded-lg p-4 relative group hover:shadow-md transition-shadow">
				                        <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-gray-50">
				                                <i class="ri-edit-line text-xs text-gray-400"></i>
				                            </button>
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-red-50">
				                                <i class="ri-delete-bin-line text-xs text-red-500"></i>
				                            </button>
				                        </div>
				                        <div class="w-full h-24 bg-gray-200 rounded-lg mb-3 overflow-hidden">
				                            <img src="https://readdy.ai/api/search-image?query=Fresh%20salmon%20tartare%20with%20avocado%20and%20citrus%20dressing%20on%20white%20ceramic%20plate%2C%20professional%20food%20photography%2C%20clean%20minimalist%20background%2C%20natural%20lighting%2C%20restaurant%20quality%20presentation&amp;width=200&amp;height=150&amp;seq=1&amp;orientation=landscape" alt="Tartare de saumon" class="w-full h-full object-cover object-top">
				                        </div>
				                        <div class="flex flex-wrap gap-1 mb-2">
				                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Recommandé</span>
				                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Nouveau</span>
				                        </div>
				                        <h3 class="font-semibold text-white mb-1">Tartare de saumon</h3>
				                        <p class="text-sm text-gray-400 mb-3">Saumon frais, avocat, citron vert</p>
				                        <div class="flex items-center justify-between">
				                            <span class="text-lg font-bold text-white">18€</span>
				                            <label class="relative inline-flex items-center cursor-pointer">
				                                <input type="checkbox" checked="" class="sr-only peer">
				                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
				                            </label>
				                        </div>
				                    </div>

				                    <div class="bg-white/10 rounded-lg p-4 relative group hover:shadow-md transition-shadow">
				                        <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-gray-50">
				                                <i class="ri-edit-line text-xs text-gray-600"></i>
				                            </button>
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-red-50">
				                                <i class="ri-delete-bin-line text-xs text-red-500"></i>
				                            </button>
				                        </div>
				                        <div class="w-full h-24 bg-gray-200 rounded-lg mb-3 overflow-hidden">
				                            <img src="https://readdy.ai/api/search-image?query=Burrata%20cheese%20with%20fresh%20tomatoes%20and%20basil%20leaves%20on%20white%20plate%2C%20professional%20food%20photography%2C%20clean%20minimalist%20background%2C%20natural%20lighting%2C%20restaurant%20quality%20presentation&amp;width=200&amp;height=150&amp;seq=2&amp;orientation=landscape" alt="Burrata aux tomates" class="w-full h-full object-cover object-top">
				                        </div>
				                        <div class="flex flex-wrap gap-1 mb-2">
				                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Saisonnier</span>
				                        </div>
				                        <h3 class="font-semibold text-white mb-1">Burrata aux tomates</h3>
				                        <p class="text-sm text-gray-400 mb-3">Tomates cerises, basilic frais</p>
				                        <div class="flex items-center justify-between">
				                            <span class="text-lg font-bold text-white">16€</span>
				                            <label class="relative inline-flex items-center cursor-pointer">
				                                <input type="checkbox" class="sr-only peer">
				                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
				                            </label>
				                        </div>
				                    </div>

				                    <div class="bg-white/10 rounded-lg p-4 relative group hover:shadow-md transition-shadow">
				                        <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-gray-50">
				                                <i class="ri-edit-line text-xs text-gray-600"></i>
				                            </button>
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-red-50">
				                                <i class="ri-delete-bin-line text-xs text-red-500"></i>
				                            </button>
				                        </div>
				                        <div class="w-full h-24 bg-gray-200 rounded-lg mb-3 overflow-hidden">
				                            <img src="https://readdy.ai/api/search-image?query=French%20foie%20gras%20terrine%20with%20fig%20jam%20and%20toasted%20brioche%20on%20elegant%20white%20plate%2C%20professional%20food%20photography%2C%20clean%20minimalist%20background%2C%20natural%20lighting%2C%20restaurant%20quality%20presentation&amp;width=200&amp;height=150&amp;seq=3&amp;orientation=landscape" alt="Foie gras" class="w-full h-full object-cover object-top">
				                        </div>
				                        <h3 class="font-semibold text-white mb-1">Foie gras mi-cuit</h3>
				                        <p class="text-sm text-gray-400 mb-3">Chutney de figues, brioche toastée</p>
				                        <div class="flex items-center justify-between">
				                            <span class="text-lg font-bold text-white">28€</span>
				                            <label class="relative inline-flex items-center cursor-pointer">
				                                <input type="checkbox" checked="" class="sr-only peer">
				                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
				                            </label>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>

				        <!-- Plats Section -->
				        <div class="bg-white/10 rounded-xl shadow-sm mb-6">
				            <div class="p-2 cursor-pointer" onclick="toggleAccordion('plats')">
				                <div class="flex items-center justify-between">
				                    <div class="flex items-center gap-3">
				                        <div class="w-6 h-6 flex items-center justify-center text-primary">
				                            <i class="ri-restaurant-2-line"></i>
				                        </div>
				                        <h2 class="text-lg font-semibold white">Plats</h2>
				                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">12 articles</span>
				                    </div>
				                    <div class="w-5 h-5 flex items-center justify-center text-gray-400 transform transition-transform" id="plats-icon">
				                        <i class="ri-arrow-down-s-line"></i>
				                    </div>
				                </div>
				            </div>
				            <div class="p-2 hidden" id="plats-content">
				                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
				                    <div class="bg-white/10 rounded-lg p-4 relative group hover:shadow-md transition-shadow">
				                        <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-gray-50">
				                                <i class="ri-edit-line text-xs text-gray-600"></i>
				                            </button>
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-red-50">
				                                <i class="ri-delete-bin-line text-xs text-red-500"></i>
				                            </button>
				                        </div>
				                        <div class="w-full h-24 bg-gray-200 rounded-lg mb-3 overflow-hidden">
				                            <img src="https://readdy.ai/api/search-image?query=Grilled%20beef%20filet%20with%20roasted%20vegetables%20and%20red%20wine%20sauce%20on%20white%20plate%2C%20professional%20food%20photography%2C%20clean%20minimalist%20background%2C%20natural%20lighting%2C%20restaurant%20quality%20presentation&amp;width=200&amp;height=150&amp;seq=4&amp;orientation=landscape" alt="Filet de bœuf" class="w-full h-full object-cover object-top">
				                        </div>
				                        <div class="flex flex-wrap gap-1 mb-2">
				                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Recommandé</span>
				                        </div>
				                        <h3 class="font-semibold text-white mb-1">Filet de bœuf grillé</h3>
				                        <p class="text-sm text-gray-400  mb-3">Légumes de saison, sauce au vin rouge</p>
				                        <div class="flex items-center justify-between">
				                            <span class="text-lg font-bold text-white">32€</span>
				                            <label class="relative inline-flex items-center cursor-pointer">
				                                <input type="checkbox" checked="" class="sr-only peer">
				                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
				                            </label>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>

				        <!-- Desserts Section -->
				        <div class="bg-white/10 rounded-xl shadow-sm mb-6">
				            <div class="p-2 cursor-pointer" onclick="toggleAccordion('desserts')">
				                <div class="flex items-center justify-between">
				                    <div class="flex items-center gap-3">
				                        <div class="w-6 h-6 flex items-center justify-center text-primary">
				                            <i class="ri-cake-3-line"></i>
				                        </div>
				                        <h2 class="text-lg font-semibold text-white">Desserts</h2>
				                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">6 articles</span>
				                    </div>
				                    <div class="w-5 h-5 flex items-center justify-center text-gray-400 transform transition-transform" id="desserts-icon">
				                        <i class="ri-arrow-down-s-line"></i>
				                    </div>
				                </div>
				            </div>
				            <div class="p-2 hidden" id="desserts-content">
				                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
				                    <div class="bg-white/10 rounded-lg p-4 relative group hover:shadow-md transition-shadow">
				                        <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-gray-50">
				                                <i class="ri-edit-line text-xs text-gray-600"></i>
				                            </button>
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-red-50">
				                                <i class="ri-delete-bin-line text-xs text-red-500"></i>
				                            </button>
				                        </div>
				                        <div class="w-full h-24 bg-gray-200 rounded-lg mb-3 overflow-hidden">
				                            <img src="https://readdy.ai/api/search-image?query=Chocolate%20lava%20cake%20with%20vanilla%20ice%20cream%20and%20berry%20coulis%20on%20white%20plate%2C%20professional%20food%20photography%2C%20clean%20minimalist%20background%2C%20natural%20lighting%2C%20restaurant%20quality%20presentation&amp;width=200&amp;height=150&amp;seq=6&amp;orientation=landscape" alt="Fondant chocolat" class="w-full h-full object-cover object-top">
				                        </div>
				                        <div class="flex flex-wrap gap-1 mb-2">
				                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Recommandé</span>
				                        </div>
				                        <h3 class="font-semibold text-white mb-1">Fondant au chocolat</h3>
				                        <p class="text-sm text-gray-400 mb-3">Glace vanille, coulis de fruits rouges</p>
				                        <div class="flex items-center justify-between">
				                            <span class="text-lg font-bold text-white">9€</span>
				                            <label class="relative inline-flex items-center cursor-pointer">
				                                <input type="checkbox" checked="" class="sr-only peer">
				                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
				                            </label>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>

				        <!-- Boissons Section -->
				        <div class="bg-white/10 rounded-xl shadow-sm mb-6">
				            <div class="p-2 cursor-pointer" onclick="toggleAccordion('boissons')">
				                <div class="flex items-center justify-between">
				                    <div class="flex items-center gap-3">
				                        <div class="w-6 h-6 flex items-center justify-center text-primary">
				                            <i class="ri-glass-line"></i>
				                        </div>
				                        <h2 class="text-lg font-semibold text-white">Boissons</h2>
				                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">15 articles</span>
				                    </div>
				                    <div class="w-5 h-5 flex items-center justify-center text-gray-400 transform transition-transform" id="boissons-icon">
				                        <i class="ri-arrow-down-s-line"></i>
				                    </div>
				                </div>
				            </div>
				            <div class="p-2 hidden" id="boissons-content">
				                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
				                    <div class="bg-white/10 rounded-lg p-4 relative group hover:shadow-md transition-shadow">
				                        <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-gray-50">
				                                <i class="ri-edit-line text-xs text-gray-600"></i>
				                            </button>
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-red-50">
				                                <i class="ri-delete-bin-line text-xs text-red-500"></i>
				                            </button>
				                        </div>
				                        <div class="w-full h-24 bg-gray-200 rounded-lg mb-3 overflow-hidden">
				                            <img src="https://readdy.ai/api/search-image?query=Bordeaux%20red%20wine%20bottle%20with%20elegant%20wine%20glass%20on%20white%20background%2C%20professional%20product%20photography%2C%20clean%20minimalist%20background%2C%20natural%20lighting%2C%20restaurant%20quality%20presentation&amp;width=200&amp;height=150&amp;seq=7&amp;orientation=landscape" alt="Bordeaux rouge" class="w-full h-full object-cover object-top">
				                        </div>
				                        <h3 class="font-semibold text-white mb-1">Bordeaux Rouge 2019</h3>
				                        <p class="text-sm text-gray-400 mb-2">Château Margaux • 75cl • 13.5%</p>
				                        <div class="flex items-center justify-between mb-3">
				                            <div class="text-sm">
				                                <div class="text-gray-400">Verre: <span class="font-semibold text-white">12€</span></div>
				                                <div class="text-gray-400">Bouteille: <span class="font-semibold text-white">65€</span></div>
				                            </div>
				                            <label class="relative inline-flex items-center cursor-pointer">
				                                <input type="checkbox" checked="" class="sr-only peer">
				                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
				                            </label>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>

				        <!-- Menus Section -->
				        <div class="bg-white/10 rounded-xl shadow-sm mb-6">
				            <div class="p-2 cursor-pointer" onclick="toggleAccordion('menus')">
				                <div class="flex items-center justify-between">
				                    <div class="flex items-center gap-3">
				                        <div class="w-6 h-6 flex items-center justify-center text-primary">
				                            <i class="ri-file-list-3-line"></i>
				                        </div>
				                        <h2 class="text-lg font-semibold text-white">Menus</h2>
				                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">3 menus</span>
				                    </div>
				                    <div class="w-5 h-5 flex items-center justify-center text-gray-400 transform transition-transform" id="menus-icon">
				                        <i class="ri-arrow-down-s-line"></i>
				                    </div>
				                </div>
				            </div>
				            <div class="p-2 hidden" id="menus-content">
				                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
				                    <div class="bg-gradient-to-br from-blue-900/30 to-indigo-900/30 rounded-lg p-6 relative group hover:shadow-lg transition-shadow">
				                        <div class="absolute top-4 right-4 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-gray-50">
				                                <i class="ri-edit-line text-xs text-gray-600"></i>
				                            </button>
				                            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow-sm hover:bg-red-50">
				                                <i class="ri-delete-bin-line text-xs text-red-500"></i>
				                            </button>
				                        </div>
				                        <div class="mb-4">
				                            <h3 class="text-xl font-bold text-white mb-2">Menu Découverte</h3>
				                            <p class="text-sm text-gray-400">Entrée + Plat + Dessert + Boisson</p>
				                        </div>
				                        <div class="space-y-3 mb-6">
				                            <div class="flex items-center gap-3">
				                                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
				                                <span class="text-sm text-gray-400">Tartare de saumon</span>
				                            </div>
				                            <div class="flex items-center gap-3">
				                                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
				                                <span class="text-sm text-gray-400">Filet de bœuf grillé</span>
				                            </div>
				                            <div class="flex items-center gap-3">
				                                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
				                                <span class="text-sm text-gray-400">Fondant au chocolat</span>
				                            </div>
				                            <div class="flex items-center gap-3">
				                                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
				                                <span class="text-sm text-gray-400">Verre de vin au choix</span>
				                            </div>
				                        </div>
				                        <div class="border-t border-blue-200 pt-4">
				                            <div class="flex items-center justify-between mb-2">
				                                <span class="text-sm text-gray-400">Prix séparé:</span>
				                                <span class="text-sm text-gray-400 line-through">71€</span>
				                            </div>
				                            <div class="flex items-center justify-between">
				                                <span class="text-lg font-bold text-white">Prix menu:</span>
				                                <span class="text-2xl font-bold text-blue-400">55€</span>
				                            </div>
				                            <div class="text-center mt-2">
				                                <span class="inline-block bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Économie de 16€</span>
				                            </div>
				                        </div>
				                    </div>

				                </div>
				            </div>
				        </div>
				    </div>
	            </main>
	        </div>
	    </div>

	 @include('main.modals.addProductModal')


	<script id="accordion-functionality">
        function toggleAccordion(section) {
            const content = document.getElementById(section + '-content');
            const icon = document.getElementById(section + '-icon');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>

    <script id="modal-functionality">
        function openModal(type) {
            const modal = document.getElementById(type + 'Modal');
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById(type + 'Modal');
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const modals = document.querySelectorAll('[id$="Modal"]');
            modals.forEach(modal => {
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                        document.body.style.overflow = 'auto';
                    }
                });
            });
        });
    </script>

    @include('components.notification')
@endsection





