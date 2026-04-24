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

	        <!-- Sidebar -->

	        
	        <!-- Main Content -->
	        <div class=" flex-1 flex flex-col">
	            
	            <!-- Dashboard Content -->
	            <main class="pt-20 flex-1 items-center justify-center flex-col overflow-y-auto p-6">
					<div class=" px-2 py-4">
				        <div class="flex items-center justify-between">
				            <div class="flex items-center gap-4">
				                <h1 class="text-2xl font-semibold text-white">Ajouter une table</h1>
				            </div>
				            
				            <!-- Step Indicator -->
				            <div class="flex items-center gap-2">
				                <div class="step-indicator active w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center text-sm font-medium">1</div>
				                <div class="w-8 h-0.5 bg-gray-300"></div>
				                <div class="step-indicator w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center text-sm font-medium">2</div>
				            </div>
				        </div>
				    </div>

				    <div class="flex min-h-[calc(100vh-80px)] w-full">
				        <!-- Main Form Area -->
				        <div class="flex-1 p-2">
				            <form class="max-w-2xl mx-auto" action="{{route('store')}}" method="POST">
				            	@csrf
				                <!-- Step 1: General Information -->
				                <div class="form-step active bg-white/10 rounded-xl shadow-sm p-8">
				                    <div class="mb-8 flex items-center justify-between">
				                        <div>
				                        	<h2 class="text-xl font-semibold text-white mb-2">Informations générales</h2>
				                        	<p class="text-gray-400">Définissez les caractéristiques de base de votre table</p>
				                        </div>

				                        <button type="button" id="multipleTablesBtn" class="px-4 py-2 bg-white/10 outline-none rounded-lg hover:bg-gray-50 transition-colors text-sm text-gray-400 hover:text-black font-medium whitespace-nowrap !rounded-button">
					                        <i class="ri-stack-line mr-2"></i>Ajout multiple
					                    </button>
				                    </div>

				                    <div class="space-y-6">
				                        <!-- Table Number -->
				                        <div>
				                            <label class="block text-sm font-medium text-gray-400 mb-2">
				                                Numéro de table <span class="text-red-500">*</span>
				                            </label>
				                            <input type="text" name="number" id="tableNumber" placeholder="12" class="w-full px-4 py-3 bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm">
				                            @error('number')
				                            	<p class="text-red-500">{{$message}}</p>
				                            @enderror
				                        </div>

				                        <!-- Table Name -->
				                        <div>
				                            <label class="block text-sm font-medium text-gray-400 mb-2">Nom/Libellé (optionnel)</label>
				                            <input type="text" name="libelle" id="tableName" placeholder="Table ronde" class="w-full px-4 py-3 bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm">
				                            @error('libelle')
				                            	<p class="text-red-500">{{$message}}</p>
				                            @enderror
				                        </div>

				                        <!-- Zone Selection -->
				                        <div>
				                            <label class="block text-sm font-medium text-gray-400 mb-2">Zone/Salle</label>
				                            <div class="flex gap-3">
				                                <div class="relative flex-1">
				                                    <select name="zone" id="zoneSelect" class="text-gray-400 w-full px-4 py-3 pr-8 bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm appearance-none">
				                                        <option value="terrasse">Terrasse</option>
				                                        <option value="salle principale">Salle principale</option>
				                                        <option value="salon prive">Salon privé</option>
				                                    </select>
				                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
				                                        <i class="ri-arrow-down-s-line text-gray-400"></i>
				                                    </div>
				                                </div>
				                                @error('zone')
				                            		<p class="text-red-500">{{$message}}</p>
				                            	@enderror
				                            </div>
				                        </div>

				                        <!-- Capacity -->
				                        <div>
				                            <label class="block text-sm font-medium text-gray-400 mb-2">Capacité maximale</label>
				                            <div class="flex items-center gap-3">
				                                <button type="button" id="capacityMinus" class="text-gray-400 w-10 h-10 flex items-center justify-center bg-white/10 outline-none rounded-lg hover:bg-white/30 transition-colors">
				                                    <i class="ri-subtract-line"></i>
				                                </button>
				                                <input name="places" type="number" id="capacity" value="4" min="2" max="12" class="text-gray-400 capacity-input w-20 px-3 py-2 text-center bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm">
				                                <button type="button" id="capacityPlus" class="text-gray-400 w-10 h-10 flex items-center justify-center bg-white/10 outline-none rounded-lg hover:bg-white/30 transition-colors">
				                                    <i class="ri-add-line"></i>
				                                </button>
				                                <span class="text-sm text-gray-400 ml-2">personnes</span>
				                            </div>
				                            @error('places')
				                            		<p class="text-red-500">{{$message}}</p>
				                            	@enderror
				                        </div>
				                    </div>
				                </div>

				                <!-- Step 3: Configuration -->
				                <div class="form-step bg-white/10 rounded-xl shadow-sm p-8">
				                    <div class="mb-8">
				                        <h2 class="text-xl font-semibold text-white mb-2">Configuration</h2>
				                        <p class="text-gray-400">Paramètres avancés et options de service</p>
				                    </div>

				                    <div class="space-y-6">
				                        <!-- Main Server -->
				                        <div>
				                            <label class="block text-sm font-medium text-gray-400 mb-2">Serveur principal</label>
				                            <div class="relative">
				                                <select name="id_serveur" id="mainServer" class="w-full px-4 py-3 pr-8 bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm appearance-none text-gray-400">
				                                	@foreach($serveurs as $serveur)
				                                    <option value="{{$serveur->id}}">{{$serveur->name}}</option>
				                                    @endforeach
				                                </select>
				                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
				                                    <i class="ri-arrow-down-s-line text-gray-400"></i>
				                                </div>
				                            </div>
				                            @error('id_serveur')
				                            		<p class="text-red-500">{{$message}}</p>
				                            	@enderror
				                        </div>

				                        <!-- Activate Now -->
				                        <div class="flex items-start gap-3">
				                            <div class="flex items-center h-6">
				                                <input name="status" type="checkbox" id="activateNow" checked="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
				                            </div>
				                            <div class="flex-1">
				                                <label for="activateNow" class="text-sm font-medium text-gray-400">Activer dès maintenant</label>
				                                <p class="text-xs text-gray-500 mt-1">La table sera immédiatement disponible pour les réservations</p>
				                            </div>
				                        </div>

				                        <!-- Notes -->
				                        <div>
				                            <label class="block text-sm font-medium text-gray-400 mb-2">Notes</label>
				                            <textarea name="notes" id="tableNotes" rows="4" placeholder="Idéal pour couples, vue fenêtre, proche de la cuisine..." class="w-full px-4 py-3 bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm resize-none"></textarea>
				                        </div>
				                    </div>
				                </div>

			                    <div class="bg-white/10 mt-3 rounded-xl px-6 py-4">
							        <div class="flex justify-between items-center max-w-2xl gap-2 mx-auto">
							            <button type="button" id="prevBtn" class="px-6 py-3 rounded-lg hover:bg-white/30 bg-white/10 text-gray-400 transition-colors text-sm font-medium whitespace-nowrap !rounded-button" disabled="">
							                <i class="ri-arrow-left-line mr-2"></i>Précédent
							            </button>
							            
							            <div class="flex gap-3">
							                <button type="button" id="nextBtn" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors text-sm font-medium whitespace-nowrap !rounded-button">
							                    Suivant<i class="ri-arrow-right-line ml-2"></i>
							                </button>
							                <button type="submit" id="addTableBtn" class="hidden px-6 py-3 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors text-sm font-medium whitespace-nowrap !rounded-button">
							                    <i class="ri-add-line mr-2"></i>Ajouter cette table
							                </button>
							            </div>
							        </div>
							    </div>
				            </form>
				        </div>
				    </div>
	            </main>
	        </div>
	    </div>

			@include('main.modals.searchModal')
			@include('main.modals.notificationsModal')
			@include('components.notification')

	   <div id="multipleModal" class="modal backdrop-blur-md transition items-center justify-center">
	        <div class="bg-white/10 rounded-xl shadow-xl max-w-md w-full mx-4 p-6">
	            <div class="flex items-center justify-between mb-6">
	                <h3 class="text-lg font-semibold text-white">Ajout multiple de tables</h3>
	                <button type="button" id="closeModal" class="text-white w-8 h-8 flex items-center justify-center hover:bg-white/30 rounded-lg transition-colors">
	                    <i class="ri-close-line"></i>
	                </button>
	            </div>
	            
	            <div class="space-y-4">
	                <div>
	                    <label class="block text-sm font-medium text-gray-400 mb-2">Nombre de tables à ajouter</label>
	                    <input type="number" id="multipleCount" value="5" min="1" max="20" class="w-full text-gray-400 px-4 py-3 bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm">
	                </div>
	                
	                <div>
	                    <label class="block text-sm font-medium text-gray-400 mb-2">Numéro de départ</label>
	                    <input type="number" id="startNumber" value="20" min="1" class="w-full text-gray-400 px-4 py-3 bg-white/10 outline-none rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-sm">
	                    <p class="text-xs text-gray-500 mt-1">Les tables seront numérotées de façon séquentielle (ex: 20, 21, 22...)</p>
	                </div>
	            </div>
	            
	            <div class="flex gap-3 mt-6">
	                <button type="button" id="cancelMultiple" class="px-6 py-3 rounded-lg hover:bg-white/30 bg-white/10 text-gray-400 transition-colors text-sm font-medium whitespace-nowrap !rounded-button" >
	                    Annuler
	                </button>
	                <button type="button" id="confirmMultiple" class="flex-1 px-4 py-3 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors text-sm font-medium whitespace-nowrap !rounded-button">
	                    Créer les tables
	                </button>
	            </div>
	        </div>
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


	<script id="form-navigation">
        document.addEventListener('DOMContentLoaded', function() {
            let currentStep = 1;
            const totalSteps = 2;
            
            const steps = document.querySelectorAll('.form-step');
            const stepIndicators = document.querySelectorAll('.step-indicator');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const addTableBtn = document.getElementById('addTableBtn');
            const addContinueBtn = document.getElementById('addContinueBtn');
            
            function updateStep() {
                steps.forEach((step, index) => {
                    step.classList.toggle('active', index === currentStep - 1);
                });
                
                stepIndicators.forEach((indicator, index) => {
                    const stepNum = index + 1;
                    indicator.classList.toggle('active', stepNum === currentStep);
                    indicator.classList.toggle('completed', stepNum < currentStep);
                });
                
                prevBtn.disabled = currentStep === 1;
                prevBtn.classList.toggle('opacity-50', currentStep === 1);
                
                if (currentStep === totalSteps) {
                    nextBtn.classList.add('hidden');
                    addTableBtn.classList.remove('hidden');
                    addContinueBtn.classList.remove('hidden');
                } else {
                    nextBtn.classList.remove('hidden');
                    addTableBtn.classList.add('hidden');
                    addContinueBtn.classList.add('hidden');
                }
            }
            
            nextBtn.addEventListener('click', function() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateStep();
                }
            });
            
            prevBtn.addEventListener('click', function() {
                if (currentStep > 1) {
                    currentStep--;
                    updateStep();
                }
            });
            
            updateStep();
        });
    </script>

    <script id="modal-controls">
        document.addEventListener('DOMContentLoaded', function() {
            const multipleModal = document.getElementById('multipleModal');
            const multipleTablesBtn = document.getElementById('multipleTablesBtn');
            const closeModal = document.getElementById('closeModal');
            const cancelMultiple = document.getElementById('cancelMultiple');
            const confirmMultiple = document.getElementById('confirmMultiple');
            
            multipleTablesBtn.addEventListener('click', function() {
                multipleModal.classList.add('show');
            });
            
            function closeModalHandler() {
                multipleModal.classList.remove('show');
            }
            
            closeModal.addEventListener('click', closeModalHandler);
            cancelMultiple.addEventListener('click', closeModalHandler);
            
            multipleModal.addEventListener('click', function(e) {
                if (e.target === multipleModal) {
                    closeModalHandler();
                }
            });
            
            confirmMultiple.addEventListener('click', function() {
                const count = document.getElementById('multipleCount').value;
                const startNum = document.getElementById('startNumber').value;
                alert(`Création de ${count} tables à partir du numéro ${startNum}`);
                closeModalHandler();
            });
        });
    </script>

    <script id="validation">
        document.addEventListener('DOMContentLoaded', function() {
            const tableNumber = document.getElementById('tableNumber');
            const numberError = document.getElementById('numberError');
            const existingNumbers = ['1', '2', '3', '5', '8', '10'];
            
            tableNumber.addEventListener('input', function() {
                const value = this.value.trim();
                if (existingNumbers.includes(value)) {
                    numberError.classList.remove('hidden');
                    this.classList.add('border-red-500');
                } else {
                    numberError.classList.add('hidden');
                    this.classList.remove('border-red-500');
                }
            });
        });
    </script>

        <script id="capacity-controls">
        document.addEventListener('DOMContentLoaded', function() {
            const capacityInput = document.getElementById('capacity');
            const capacityMinus = document.getElementById('capacityMinus');
            const capacityPlus = document.getElementById('capacityPlus');
            
            function updateCapacity(value) {
                const newValue = Math.max(2, Math.min(12, value));
                capacityInput.value = newValue;
                updatePreview();
            }
            
            capacityMinus.addEventListener('click', function() {
                updateCapacity(parseInt(capacityInput.value) - 1);
            });
            
            capacityPlus.addEventListener('click', function() {
                updateCapacity(parseInt(capacityInput.value) + 1);
            });
            
            capacityInput.addEventListener('input', function() {
                updateCapacity(parseInt(this.value) || 4);
            });
        });
    </script>
</html>