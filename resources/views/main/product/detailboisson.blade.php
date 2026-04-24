<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SmartResto-dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{asset('storage/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('storage/css/scroll.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- <script src="js/tailwindConfig.js"></script> -->
    <style>
    	body{
    		overflow: hidden;
    	}
    </style>
</head>
	<body>
		<div class="flex h-screen bg-[#102C26] overflow-hidden">
			<div class="absolute top-0 w-full z-50 bg-gradient-to-b from-black to-transparent">
				<header class="relative px-3 py-2 z-50">
					<div class="flex items-center justify-between flex-col rounded-full">

						<div class="flex items-center justify-between w-full">
							<h1 class="text-primary text-sm px-3">SmartResto-Hôtel</h1>

							<div class="bg-[#102C26] bg-opacity-30 rounded-full m-1 p-1 flex items-center gap-2 ">
							    <div data-zone="1" class=" btnStarts relative bg-white/10 text-gray-400 rounded-full py-1 px-2 flex items-center focus:outline-none">
							    	<i class="ri-search-line text-xl"></i>
							    </div>

							    <div data-zone="2" class="relative bg-white/10 text-gray-400 rounded-full py-1 px-2 flex items-center focus:outline-none btnStarts">
							    	<i class="ri-notification-3-line text-xl"></i>
							    	    <span class="flex items-center justify-center absolute -top-1 -right-1 w-6 h-6 bg-red-500 rounded-full">
									        <h5>2</h5>
									    </span>
							    </div>

							    <form action="{{route('logout')}}" method="post">
							    	 @csrf
							    @auth
							    <button type="submit">
							    								    <div class="bg-white/10 text-gray-400 rounded-full w-full py-1 px-2 flex items-center focus:outline-none" id="userMenuButton">

							        <span class="hidden md:block mr-3 text-sm font-medium text-gray-800 dark:text-white">{{Auth::user()->name}}</span>
							        <img class="h-8 w-8 rounded-full object-cover"
							            src="images/resto.png"
							            alt="Photo de profil">
							    </div>
							    </button>

							    @endauth
							    </form>

							</div>

							<!-- <div class="lg:hidden md:hidden sm:hidden p-2 flex items-center gap-2">
								<div class="rounded-full w-full py-1 px-2 flex items-center focus:outline-none" id="userMenuButton">
							        <img class="h-8 w-8 rounded-full object-cover"
							            src="images/resto.png"
							            alt="Photo de profil">
							    </div>
							</div> -->
						</div>
					</div>				
				</header>
			</div>
	        
	        <!-- Main Content -->
	        <div class=" flex-1 flex flex-col overflow-hidden">
	            
	            <!-- Dashboard Content -->
	            <main class="pt-20 flex-1 overflow-y-auto p-6">
			        <div class="max-w-7xl mx-auto">
			            <!-- En-tête du produit -->
			            <div class="">
			                <div class="flex items-start justify-between mb-4">
			                    <div class="flex-1">

			                        <div class="flex items-center gap-3 mb-2">
			                            <h2 class="text-xl font-bold text-white">{{$product->name}}</h2>
			                            <span class="px-3 py-1 bg-orange-100 text-orange-800 text-sm font-medium rounded-full">BOISSON</span>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <!-- Grille de contenu -->
			            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
			                <!-- Colonne gauche -->
			                <div class="lg:col-span-3 bg-white/10 p-2 rounded-lg">
			                    <!-- Galerie photo -->
			                    <div class="mb-8">
			                        <div class="relative mb-4 group">
			                            <img src="{{asset('storage/'. $product->cover)}}" alt="Saumon grillé" class="w-full h-96 object-cover rounded-lg shadow-lg object-top">
			                            <div class="absolute top-4 left-4">
			                                <span class="px-3 py-1 bg-white bg-opacity-90 text-gray-800 text-sm font-medium rounded-full">Image principale</span>
			                            </div>
			                        </div>
			                    </div>

			                    <!-- Informations détaillées -->
			                    <div class="space-y-6">
			                        <div class="bg-white/10 p-3 rounded-lg">
			                            <h3 class="text-lg font-semibold text-white mb-3">Description</h3>
			                            <p class="text-gray-400 leading-relaxed">{{$product->description}}</p>
			                        </div>
			                    </div>
			                </div>

			                <!-- Colonne droite -->
			                <div class="lg:col-span-2">
			                    <!-- Carte prix et disponibilité -->
			                    <div class="bg-white/10 rounded-lg p-6 mb-6">
			                        <h3 class="text-lg font-semibold text-white mb-4">Prix &amp; Disponibilité</h3>
			                        <div class="space-y-4">
			                            <div>
			                                <div class="text-3xl font-bold text-white mb-1">{{$product->priceBottle}} €</div>
			                                <div class="text-sm text-gray-400">Prix de vente TTC</div>
			                            </div>
			                            <div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-400">Stock disponible :</span>
			                                <span class="text-gray-400 font-medium">{{$product->stock}}</span>
			                            </div>

			                            <div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-400">Pourcentage Alcool :</span>
			                                <span class="text-gray-400 font-medium">{{$product->percentAlcohol}}%</span>
			                            </div>

			                            <div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-400">Volume de la bouteille :</span>
			                                <span class="text-gray-400 font-medium">{{$product->volumeBottle}}ml</span>
			                            </div>

			                            <div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-400">Prix par verre :</span>
			                                <span class="text-gray-400 font-medium">{{$product->priceVerre}}£</span>
			                            </div>

			                            <div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-400">Nbre de verre :</span>
			                                <span class="text-gray-400 font-medium">{{$product->nbreVerre}}</span>
			                            </div>

			                            <div class="pt-3 border-t border-gray-200">
			                                <div class="flex items-center justify-between">
			                                    <span class="text-sm font-medium text-gray-400">Disponible à la vente</span>
			                                    <label class="relative inline-flex items-center cursor-pointer">
			                                        <input type="checkbox" class="sr-only peer" {{ $product->disponible ? 'checked' : '' }}>
			                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
			                                    </label>
			                                </div>
			                            </div>
			                        </div>
			                    </div>

			                    <!-- Statistiques rapides -->
			                    <div class="bg-white/10 rounded-lg p-6 mb-6">
			                        <h3 class="text-lg font-semibold text-white mb-4">Statistiques</h3>
			                        <div class="space-y-4">
			                            <div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-300">Popularité ce mois :</span>
			                                <span class="font-semibold text-white">147 commandes</span>
			                            </div>

			                            <div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-300">Dernière commande :</span>
			                                <span class="text-sm text-white">Aujourd'hui, 14:32</span>
			                            </div>

			                           	<div class="flex justify-between items-center">
			                                <span class="text-sm text-gray-300">Catégorie</span>
			                                <span class="text-sm text-white">Boisson</span>
			                            </div>
			                        </div>
			                    </div>

			                   	<div class="flex items-center gap-2 p-1 rounded-full bg-white/10">
			                        <button class="px-4 py-2 w-full bg-primary text-white rounded-full hover:bg-blue-600 transition-colors flex items-center gap-2 whitespace-nowrap">
			                            <i class="ri-edit-line"></i>
			                            Modifier
			                        </button>
			                        <form method="POST" action="{{route('deleteboisson', $product)}}">
			                        	@csrf
			                        	@method('DELETE')
			                        	<button onclick="return confirm('Cette action est irréversible');" type="submit" class="px-4 py-2 w-full bg-red-600 text-white rounded-full hover:bg-red-700 transition-colors flex items-center gap-2 whitespace-nowrap">
				                            <i class="ri-delete-bin-line"></i>
				                            Supprimer
				                        </button>
			                        </form>
			                    </div>
			                </div>
			            </div>

			            <!-- Section bas de page -->
			            <div class="mt-12">
			                <div class="">
			                    <nav class="flex space-x-8">
			                        <button class="py-3 px-1 border-b-2 border-primary text-primary font-medium text-sm whitespace-nowrap tab-button active !rounded-button">
			                            Articles similaires
			                        </button>
			                        <!-- <button class="py-3 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium text-sm whitespace-nowrap tab-button !rounded-button">
			                            Commandes récentes
			                        </button>
			                        <button class="py-3 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium text-sm whitespace-nowrap tab-button !rounded-button">
			                            Avis clients
			                        </button> -->
			                    </nav>
			                </div>

			                <div class="py-8">
			                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6" id="similar-products">
			                        <div class="bg-white/10 rounded-lg overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
			                            <img src="https://readdy.ai/api/search-image?query=grilled%20sea%20bass%20fillet%20with%20mediterranean%20herbs%2C%20professional%20food%20photography%2C%20restaurant%20presentation%2C%20clean%20background&amp;width=300&amp;height=200&amp;seq=seabass&amp;orientation=landscape" alt="Bar grillé" class="w-full h-40 object-cover object-top">
			                            <div class="p-4">
			                                <div class="flex items-center gap-2 mb-2">
			                                    <h4 class="font-semibold text-white">Bar grillé méditerranéen</h4>
			                                    <span class="px-2 py-1 bg-orange-100 text-orange-800 text-xs rounded-full">PLAT</span>
			                                </div>
			                                <p class="text-sm text-gray-400 mb-2">Filet de bar grillé aux herbes méditerranéennes</p>
			                                <div class="flex justify-between items-center">
			                                    <span class="font-bold text-white">32,00 €</span>
			                                    <span class="text-xs text-gray-400">124 commandes</span>
			                                </div>
			                            </div>
			                        </div>
			                    </div>

			                    <!--  <div class="" id="recent-orders">
			                        <div class="space-y-4">
			                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
			                                <div class="flex items-center gap-4">
			                                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
			                                        <i class="ri-user-line text-gray-600"></i>
			                                    </div>
			                                    <div>
			                                        <div class="font-medium text-gray-900">Marie Dubois</div>
			                                        <div class="text-sm text-gray-600">Table 12 • Aujourd'hui 14:32</div>
			                                    </div>
			                                </div>
			                                <div class="text-right">
			                                    <div class="font-semibold text-gray-900">28,50 €</div>
			                                    <div class="text-sm text-secondary">Servi</div>
			                                </div>
			                            </div>
			                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
			                                <div class="flex items-center gap-4">
			                                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
			                                        <i class="ri-user-line text-gray-600"></i>
			                                    </div>
			                                    <div>
			                                        <div class="font-medium text-gray-900">Pierre Martin</div>
			                                        <div class="text-sm text-gray-600">Table 8 • Aujourd'hui 13:15</div>
			                                    </div>
			                                </div>
			                                <div class="text-right">
			                                    <div class="font-semibold text-gray-900">28,50 €</div>
			                                    <div class="text-sm text-secondary">Servi</div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="" id="customer-reviews">
			                        <div class="space-y-6">
			                            <div class="border border-gray-200 rounded-lg p-6">
			                                <div class="flex items-start justify-between mb-4">
			                                    <div class="flex items-center gap-3">
			                                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
			                                            <i class="ri-user-line text-gray-600"></i>
			                                        </div>
			                                        <div>
			                                            <div class="font-medium text-gray-900">Sophie Laurent</div>
			                                            <div class="text-sm text-gray-600">Il y a 2 jours</div>
			                                        </div>
			                                    </div>
			                                    <div class="flex">
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                    </div>
			                                </div>
			                                <p class="text-gray-700">Excellent ! Le saumon était parfaitement cuit et les herbes de Provence apportaient une saveur authentique. Présentation impeccable.</p>
			                            </div>
			                            <div class="border border-gray-200 rounded-lg p-6">
			                                <div class="flex items-start justify-between mb-4">
			                                    <div class="flex items-center gap-3">
			                                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
			                                            <i class="ri-user-line text-gray-600"></i>
			                                        </div>
			                                        <div>
			                                            <div class="font-medium text-gray-900">Jean-Michel Rousseau</div>
			                                            <div class="text-sm text-gray-600">Il y a 5 jours</div>
			                                        </div>
			                                    </div>
			                                    <div class="flex">
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-fill text-yellow-400 text-sm"></i>
			                                        <i class="ri-star-line text-gray-300 text-sm"></i>
			                                    </div>
			                                </div>
			                                <p class="text-gray-700">Très bon plat, cuisson parfaite. Les légumes d'accompagnement étaient délicieux. Service rapide et professionnel.</p>
			                            </div>
			                        </div>
			                    </div> -->
			                </div>
			            </div>
			        </div>
	            </main>
	        </div>
	    </div>

	    <!-- Zone de recherche version mobile -->
	    <div class="zone-1 hidden sm:w-full lg:w-1/4 md:w-2/4 bg-primary/20 text-white bg-black/50 right-0 absolute top-0 z-50 h-full p-2 backdrop-blur-md w-full" >
	    	<div class="flex gap-2 w-full">
	    		<div data-zone="1" class="zoneBacks relative bg-white/10 rounded-full py-1 px-2 flex items-center focus:outline-none" id="userMenuButton">
			    	<i class="ri-arrow-left-line text-xl"></i>
			    </div>

				<div class="relative w-full">
			        <div class="absolute inset-y-0 top-0 left-0 flex items-center pl-3 pointer-events-none">
			            <i class="ri-search-line text-gray-400 w-5 h-5"></i>
			        </div>
			        <input 
			            type="search"
			            placeholder="Efectuez une recherche"
			            class="bg-white/10 text-white dark:bg-dark dark:bg-opacity-30 border-none text-sm rounded-full pl-10 py-2 focus:ring-2 focus:ring-primary w-full">
				</div>
	    	</div>
	    		<div class="text-2xl font-bold flex items-center h-full justify-center">
					Effectuez votre recherche
				</div>
	    </div>

	   	
	    <div class="zone-2 m-1 rounded-lg right-0 hidden bg-black/50 text-white absolute top-0 z-50 h-full p-2 backdrop-blur-md sm:w-full lg:w-1/4 md:w-2/4" >
	    	<div class="flex items-center gap-2 w-full">
	    		<div data-zone="2" class="zoneBacks relative bg-white/10 rounded-full py-1 px-2 flex items-center focus:outline-none" id="userMenuButton">
			    	<i class="ri-arrow-left-line text-xl"></i>
			    </div>

				<h2>Mes notifications</h2>
	    	</div>

				<div class="h-full overflow-y-auto w-full p-2">
					<div class="mt-2 transition relative hover:scale-105 notification-card flex p-3 bg-white/10 rounded-lg">
	                    <div
	                        class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
	                        <div class="w-5 h-5 bg-primary/30 rounded-full p-2 flex items-center justify-center text-primary">
	                            <i class="ri-edit-line"></i>
	                        </div>
	                    </div>
	                    <div class="flex-1">
	                        <div class="flex items-center justify-between mb-1">
	                            <h4 class="text-sm font-medium text-gray-900 dark:text-white">System</h4>
	                            <span class="notification-dot bg-secondary"></span>
	                        </div>
	                        <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                        tempor incididunt ut labore et dolore magna aliqua.</p>
	                        <p class="text-gray-500 dark:text-gray-400 text-xs">12</p>
	                    </div>
	                    
	                        <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
	                </div>
				</div>
	    		<!-- <div class="text-2xl font-bold flex items-center h-full justify-center">
					Effectuez votre recherche
				</div> -->
	    </div>
	</body>

	<script>
		document.addEventListener('DOMContentLoaded', function(){
			document.querySelectorAll('.btnStarts').forEach(btnStart => {
                const id = btnStart.dataset.zone;
                const zone = document.querySelector('.zone-' + id);

                btnStart.addEventListener('click', function(){
                	zone.classList.remove('hidden');
                });
			})
		});

		document.addEventListener('DOMContentLoaded', function(){
			document.querySelectorAll('.zoneBacks').forEach(zoneBack =>{
				const id = zoneBack.dataset.zone;
                const zone = document.querySelector('.zone-' + id);

				zoneBack.addEventListener('click', function(){
					zone.classList.add('hidden')
				});

			// // Clic en dehors → cacher aussi
			//         document.addEventListener('click', function(e){
			//             if (!zone.classList.contains('hidden') && 
			//                 !zone.contains(e.target) && 
			//                 !zoneBack.contains(e.target)) {
			//                 zone.classList.add('hidden'); // <-- correction ici
			//             }
			//         });
			})
		})
	</script>
</html>