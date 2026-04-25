<div id="newOrderModal" class="hidden absolute inset-0 bg-black bg-opacity-50 backdrop-blur-md z-50 flex items-center justify-center">
	        <form action="{{route('storeCommande')}}" method="POST" class="bg-white/10 rounded-xl shadow-2xl w-full max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
	        	@csrf
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
	                    <!-- Category Tabs -->
	                    <div class=" grid lg:grid-cols-4 md:grid-cols-2 mb-4 bg-white/10 p-1 rounded-lg">
	                        <button type="button" class="category-tab px-4 py-2 text-sm font-medium rounded-lg bg-white/20 text-gray-400 shadow-sm" data-category="entrees">Entrées</button>
	                        <button type="button" class="category-tab px-4 py-2 text-sm font-medium rounded-lg text-gray-400 hover:text-gray-900" data-category="plats">Plats</button>
	                        <button type="button" class="category-tab px-4 py-2 text-sm font-medium rounded-lg text-gray-400 hover:text-gray-900" data-category="desserts">Desserts</button>
	                        <button type="button" class="category-tab px-4 py-2 text-sm font-medium rounded-lg text-gray-400 hover:text-gray-900" data-category="boissons">Boissons</button>
	                    </div>

	                    <!-- Menu Items -->
	                    <div class="items space-y-3 overflow-y-auto h-72" data-category="entrees">
	                    	@foreach($entrees as $entree)
							<div class="product flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20">
								<input type="hidden" name="entrees[]" value="{{$entree->id}}">
							  <div class="flex-1">
							    <h4 class="font-medium text-white">{{$entree->name}}</h4>
							    <p class="text-sm text-gray-400">{{$entree->description}}</p>
							    <p class="price text-sm font-semibold text-white">{{$entree->price}} €</p>
							  </div>
	                            <div class="flex items-center space-x-2">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">-</button>
	                                <input name="qteEntrees[]" class="quantity bg-transparent border-none w-8 text-center text-white" value="0">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">+</button>
	                            </div>
							</div>
							@endforeach
	                    </div>

	                    <div class="items space-y-3 overflow-y-auto h-72" data-category="plats">
	                    	@foreach($plats as $plat)
							<div class="product flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20">
								<input type="hidden" name="plats[]" value="{{$plat->id}}">

							  <div class="flex-1">
							    <h4 class="font-medium text-white">{{$plat->name}}</h4>
							    <p class="text-sm text-gray-400">{{$plat->description}}</p>
							    <p class="price text-sm font-semibold text-white">{{$plat->price}} €</p>
							  </div>
	                            <div class="flex items-center space-x-2">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">-</button>
	                                <input name="qtePlats[]" class="quantity bg-transparent border-none w-8 text-center text-white" value="0">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">+</button>
	                            </div>
							</div>
							@endforeach
	                    </div>

	                    <div class="items space-y-3 overflow-y-auto h-72" data-category="desserts">
	                    	@foreach($desserts as $dessert)
							<div class="product flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20">
								<input type="hidden" name="desserts[]" value="{{$dessert->id}}">

							  <div class="flex-1">
							    <h4 class="font-medium text-white">{{$dessert->name}}</h4>
							    <p class="text-sm text-gray-400">{{$dessert->description}}</p>
							    <p class="price text-sm font-semibold text-white">{{$dessert->price}} €</p>
							  </div>
	                            <div class="flex items-center space-x-2">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">-</button>
	                                <input name="qteDesserts[]" class="quantity bg-transparent border-none w-8 text-center text-white" value="0">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">+</button>
	                            </div>
							</div>
							@endforeach
	                    </div>

	                    <div class="items space-y-3 overflow-y-auto h-72" data-category="boissons">
	                    	@foreach($boissons as $boisson)
							<div class="product flex items-center justify-between p-3 bg-white/10 rounded-lg hover:bg-white/20">
								<input type="hidden" name="boissons[]" value="{{$boisson->id}}">

							  <div class="flex-1">
							    <h4 class="font-medium text-white">{{$boisson->name}}</h4>
							    <p class="text-sm text-gray-400">{{$boisson->description}}</p>
							    <p class="price text-sm font-semibold text-white">{{$boisson->priceBottle}} €</p>
							  </div>
	                            <div class="flex items-center space-x-2">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">-</button>
	                                <input name="qteBoissons[]" class="quantity bg-transparent border-none w-8 text-center text-white" value="0">
	                                <button type="button" class="quantity-btn w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20">+</button>
	                            </div>
							</div>
							@endforeach
	                    </div>
	                </div>
	            </div>

	            <!-- Modal Footer -->
	            <div class="flex items-center justify-between p-6 " >
	                <div class="text-lg font-semibold text-gray-400">
	                    Total: <span id="orderTotal">0,00 €</span>
	                </div>
	                <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-600 transition-colors !rounded-button whitespace-nowrap">
	                    Valider la commande
	                </button>
	            </div>
	        </form>
	    </div>


<script>
const tabs = document.querySelectorAll('.category-tab');
const sections = document.querySelectorAll('.items');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {

        const category = tab.dataset.category;

        // 🔥 Gérer les onglets (actif / non actif)
        tabs.forEach(t => {
            t.classList.remove('bg-white/20', 'shadow-sm');
        });

        tab.classList.add('bg-white/20', 'shadow-sm');

        // 🔥 Gérer les sections
        sections.forEach(section => {
            if (section.dataset.category === category) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });

    });
});


// ⚡ INIT (important sinon tout s'affiche comme un marché de Calavi)
document.addEventListener('DOMContentLoaded', () => {
    sections.forEach((section, index) => {
        section.style.display = index === 0 ? 'block' : 'none';
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
		            const quantity = parseInt(quantitySpan.value);
		            // alert(quantitySpan.value);

		            total += price * quantity;
		        });
		        orderTotal.textContent = total.toFixed(2).replace('.', ',') + ' €';
		    }
		    quantityBtns.forEach(btn => {
		        btn.addEventListener('click', function() {
		            const isIncrement = btn.textContent === '+';
		            const quantitySpan = isIncrement ? btn.previousElementSibling : btn.nextElementSibling;
		            let currentQuantity = parseInt(quantitySpan.value);
		    

		            if (isIncrement) {
		                currentQuantity++;
		            	// alert(currentQuantity);

		            } else if (currentQuantity > 0) {
		                currentQuantity--;
		            }
		            quantitySpan.value = currentQuantity;
		            updateTotal();
		        });
		    });
		});
    </script>