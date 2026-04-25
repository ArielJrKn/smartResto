<div id="newOrderModal" class=" absolute inset-0 bg-black bg-opacity-50 hidden backdrop-blur-md z-50 flex items-center justify-center">
	        <div class="bg-white/10 rounded-xl shadow-2xl w-full max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
	            <!-- Modal Header -->
	            <div class="flex items-center justify-between p-6">
	                <h2 class="text-xl font-semibold text-white">Nouvelle Commande</h2>
	                <button id="closeModal" class="text-gray-400 hover:text-gray-600">
	                    <i class="ri-close-line text-xl"></i>
	                </button>
	            </div>

	            <!-- Modal Content -->
	            <div class="w-full flex flex-col md:flex-row h-full">
	                <!-- Left Side - Table Selection -->
	                <div class="w-full p-6 border-r border-gray-400">
	                    <h3 class="font-semibold text-gray-400 mb-4">Sélection Table</h3>
	                    <div class="grid grid-cols-3 gap-3 text-white">
	                        <button class="table-btn p-3 border-2 border-gray-200 rounded-lg hover:border-primary transition-colors text-center">
	                            <div class="font-semibold">T01</div>
	                            <div class="text-xs text-gray-500">Libre</div>
	                        </button>
	                        <button class="table-btn p-3 border-2 border-gray-200 rounded-lg hover:border-primary transition-colors text-center">
	                            <div class="font-semibold">T02</div>
	                            <div class="text-xs text-gray-500">Libre</div>
	                        </button>
	                        <button class="table-btn p-3 border-2 border-red-300 rounded-lg text-center opacity-50 cursor-not-allowed">
	                            <div class="font-semibold">T03</div>
	                            <div class="text-xs text-red-500">Occupée</div>
	                        </button>
	                        <button class="table-btn p-3 border-2 border-gray-200 rounded-lg hover:border-primary transition-colors text-center">
	                            <div class="font-semibold">T04</div>
	                            <div class="text-xs text-gray-500">Libre</div>
	                        </button>
	                        <button class="table-btn p-3 border-2 border-gray-200 rounded-lg hover:border-primary transition-colors text-center">
	                            <div class="font-semibold">T05</div>
	                            <div class="text-xs text-gray-500">Libre</div>
	                        </button>
	                        <button class="table-btn p-3 border-2 border-gray-200 rounded-lg hover:border-primary transition-colors text-center">
	                            <div class="font-semibold">T06</div>
	                            <div class="text-xs text-gray-500">Libre</div>
	                        </button>
	                    </div>

	                    <!-- Customer Info -->
	                    <div class="mt-6">
	                        <label class="block text-sm font-medium text-gray-400 mb-2">Nom du client</label>
	                        <input type="text" placeholder="Nom du client" class="w-full px-3 py-2 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm bg-white/10">
	                    </div>

	                    <!-- Special Notes -->
	                    <div class="mt-4">
	                        <label class="block text-sm font-medium text-gray-400 mb-2">Notes spéciales</label>
	                        <textarea placeholder="Allergies, préférences..." class="w-full px-3 py-2 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm h-20 resize-none bg-white/10"></textarea>
	                    </div>
	                </div>

	                <!-- Right Side - Menu Selection -->
	                <div class="w-full p-6">
	                    <!-- Search Bar -->
	                    <div class="mb-4">
	                        <div class="relative">
	                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
	                                <i class="ri-search-line text-gray-400"></i>
	                            </div>
	                            <input type="text" placeholder="Rechercher un plat ou une boisson..." class="w-full pl-10 pr-4 py-2 outline-none rounded-full bg-white/10 text-gray-400 focus:ring-2 focus:ring-primary  focus:border-transparent text-sm">
	                        </div>
	                    </div>

	                    <!-- Category Tabs -->
	                    <div class=" grid lg:grid-cols-4 md:grid-cols-2 mb-4 bg-white/10 p-1 rounded-lg">
	                        <button class="category-tab px-4 py-2 text-sm font-medium rounded-lg bg-white/20 text-gray-400 shadow-sm">Entrées</button>
	                        <button class="category-tab px-4 py-2 text-sm font-medium rounded-lg text-gray-400 hover:text-gray-900">Plats</button>
	                        <button class="category-tab px-4 py-2 text-sm font-medium rounded-lg text-gray-400 hover:text-gray-900">Desserts</button>
	                        <button class="category-tab px-4 py-2 text-sm font-medium rounded-lg text-gray-400 hover:text-gray-900">Boissons</button>
	                    </div>

	                    <!-- Menu Items -->
	                    <div class="space-y-3 overflow-y-auto h-72">
							<div class="product flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20">
							  <div class="flex-1">
							    <h4 class="font-medium text-white">Velouté de champignons</h4>
							    <p class="text-sm text-gray-400">Crème de champignons de saison, croûtons</p>
							    <p class="price text-sm font-semibold text-white">9,50 €</p>
							  </div>
	                            <div class="flex items-center space-x-2">
	                                <button class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">-</button>
	                                <span class="quantity w-8 text-center text-white">0</span>
	                                <button class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">+</button>
	                            </div>
							</div>
							<div class="product flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20">
							  <div class="flex-1">
							    <h4 class="font-medium text-white">Velouté de champignons</h4>
							    <p class="text-sm text-gray-400">Crème de champignons de saison, croûtons</p>
							    <p class="price text-sm font-semibold text-white">9,50 €</p>
							  </div>
	                            <div class="flex items-center space-x-2">
	                                <button class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">-</button>
	                                <span class="quantity w-8 text-center text-white">0</span>
	                                <button class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">+</button>
	                            </div>
							</div>
							<div class="product flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20">
							  <div class="flex-1">
							    <h4 class="font-medium text-white">Velouté de champignons</h4>
							    <p class="text-sm text-gray-400">Crème de champignons de saison, croûtons</p>
							    <p class="price text-sm font-semibold text-white">9,50 €</p>
							  </div>
	                            <div class="flex items-center space-x-2">
	                                <button class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">-</button>
	                                <span class="quantity w-8 text-center text-white">0</span>
	                                <button class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">+</button>
	                            </div>
							</div>
	                    </div>
	                </div>
	            </div>

	            <!-- Modal Footer -->
	            <div class="flex items-center justify-between p-6 " >
	                <div class="text-lg font-semibold text-gray-400">
	                    Total: <span id="orderTotal">0,00 €</span>
	                </div>
	                <button class="bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-600 transition-colors !rounded-button whitespace-nowrap">
	                    Valider la commande
	                </button>
	            </div>
	        </div>
	    </div>


    <script id="category-tabs">
        document.addEventListener('DOMContentLoaded', function() {
            const categoryTabs = document.querySelectorAll('.category-tab');
            
            categoryTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    categoryTabs.forEach(t => {
                        t.classList.remove('bg-white', 'text-primary', 'shadow-sm');
                        t.classList.add('text-gray-600');
                    });
                    
                    this.classList.remove('text-gray-600');
                    this.classList.add('bg-white', 'text-primary', 'shadow-sm');
                });
            });
        });
    </script>

    <script id="quantity-controls">
		document.addEventListener('DOMContentLoaded', function() {
		    const quantityBtns = document.querySelectorAll('.quantity-btn');
		    const orderTotal = document.getElementById('orderTotal');

		    function updateTotal() {
		        let total = 0;
		        document.querySelectorAll('.product').forEach(row => {
		            const priceElement = row.querySelector('.price');
		            const quantitySpan = row.querySelector('.quantity');
		            const price = parseFloat(priceElement.textContent.replace(',', '.').replace(' €', ''));
		            const quantity = parseInt(quantitySpan.textContent);
		            total += price * quantity;
		        });
		        orderTotal.textContent = total.toFixed(2).replace('.', ',') + ' €';
		    }

		    quantityBtns.forEach(btn => {
		        btn.addEventListener('click', function() {
		            const isIncrement = btn.textContent === '+';
		            const quantitySpan = isIncrement ? btn.previousElementSibling : btn.nextElementSibling;
		            let currentQuantity = parseInt(quantitySpan.textContent);

		            if (isIncrement) {
		                currentQuantity++;
		            } else if (currentQuantity > 0) {
		                currentQuantity--;
		            }
		            quantitySpan.textContent = currentQuantity;
		            updateTotal();
		        });
		    });
		});
    </script>