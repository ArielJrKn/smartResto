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
							<h1 class="text-primary px-3">SmartResto-Hôtel</h1>

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

							    <div class="bg-white/10 text-gray-400 rounded-full w-full py-1 px-2 flex items-center focus:outline-none" id="userMenuButton">
							        <span class="hidden md:block mr-3 text-sm font-medium text-gray-800 dark:text-white">KINKIN Ariel</span>
							        <img class="h-8 w-8 rounded-full object-cover"
							            src="images/resto.png"
							            alt="Photo de profil">
							    </div>
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
	        <div class="w-64 pt-10 bg-white/10 shadow-lg flex flex-col hidden lg:block">
	            <div class="p-4">
	                <ul class="space-y-2">
	                    <li>
	                        <button class="sidebar-item active w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/10 rounded-lg" data-section="general">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-settings-line"></i>
	                            </div>
	                            <span>Général</span>
	                        </button>
	                    </li>
	                    <li>
	                        <button class="sidebar-item w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/20 rounded-lg" data-section="payments">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-bank-card-line"></i>
	                            </div>
	                            <span>Paiements</span>
	                        </button>
	                    </li>
	                    <li>
	                        <button class="sidebar-item w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/20 rounded-lg" data-section="notifications">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-notification-2-line"></i>
	                            </div>
	                            <span>Notifications</span>
	                        </button>
	                    </li>
	                    <li>
	                        <button class="sidebar-item w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/20 rounded-lg" data-section="security">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-shield-line"></i>
	                            </div>
	                            <span>Sécurité</span>
	                        </button>
	                    </li>
	                    <li>
	                        <button class="sidebar-item w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/20 rounded-lg" data-section="backup">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-database-line"></i>
	                            </div>
	                            <span>Sauvegarde</span>
	                        </button>
	                    </li>
	                    <li>
	                        <button class="sidebar-item w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/20 rounded-lg" data-section="api">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-code-line"></i>
	                            </div>
	                            <span>API</span>
	                        </button>
	                    </li>
	                    <li>
	                        <button class="sidebar-item w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/20 rounded-lg" data-section="logs">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-file-list-line"></i>
	                            </div>
	                            <span>Journaux</span>
	                        </button>
	                    </li>

	                    <li>
	                        <button class="sidebar-item w-full flex items-center space-x-3 px-3 py-2 text-left text-gray-400 hover:bg-white/20 rounded-lg" data-section="others">
	                            <div class="w-5 h-5 flex items-center justify-center">
	                                <i class="ri-file-list-line"></i>
	                            </div>
	                            <span>Matériel et autre configuration de base</span>
	                        </button>
	                    </li>
	                </ul>
	            </div>
	        </div>
	        
	        <!-- Main Content -->
	        <div class=" flex-1 flex flex-col overflow-hidden">
	            
	            <!-- Dashboard Content -->
	            <main class="pt-20 flex-1 overflow-y-auto p-6">
	            	<div class="flex-1 p-6">
			            <!-- Section Général -->
			            <div id="general" class="section-content hidden">
			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Informations établissement</h2>
			                    <div class="grid grid-cols-2 gap-6">
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Nom de l'établissement</label>
			                            <input type="text" value="Restaurant Le Gourmet" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Email</label>
			                            <input type="email" value="contact@legourmet.fr" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Téléphone</label>
			                            <input type="tel" value="+33 1 42 36 58 97" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Adresse</label>
			                            <input type="text" value="15 Rue de la Paix, 75001 Paris" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                        </div>	
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Type</label>
			                            <select class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                            	<option>Hotêl</option>
			                            	<option>Restauration</option>
			                            	<option>Mixte</option>
			                            </select>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Nbre étages(si hôtel)</label>
			                            <input type="number" value="7" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                        </div>
			                    </div>
			                </div>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Apparence</h2>
			                    <div class="grid grid-cols-2 gap-6">
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Logo de l'établissement</label>
			                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
			                                <div class="w-12 h-12 mx-auto mb-3 flex items-center justify-center text-gray-400">
			                                    <i class="ri-image-line ri-2x"></i>
			                                </div>
			                                <p class="text-sm text-gray-500 mb-2">Glissez votre logo ici ou</p>
			                                <button class="!rounded-button whitespace-nowrap px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-600">Parcourir</button>
			                            </div>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Couleur principale</label>
			                            <div class="flex items-center space-x-3">
			                                <input type="color" value="#3b82f6" class="w-12 h-10  rounded-lg cursor-pointer">
			                                <input type="text" value="#3b82f6" class="flex-1 px-3 py-2  rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                            </div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2 mt-4">Couleur secondaire</label>
			                            <div class="flex items-center space-x-3">
			                                <input type="color" value="#64748b" class="w-12 h-10  rounded-lg cursor-pointer">
			                                <input type="text" value="#64748b" class="flex-1 px-3 py-2  rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
			                            </div>
			                        </div>
			                    </div>
			                </div>



			                <div class="bg-white/10 rounded-xl shadow-sm p-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Localisation</h2>
			                    <div class="grid grid-cols-3 gap-6">
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Langue</label>
			                            <div class="relative">
			                                <button class="w-full px-3 py-2 pr-8  rounded-lg text-left focus:ring-2 focus:ring-primary focus:border-transparent">
			                                    Français
			                                </button>
			                                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center">
			                                    <i class="ri-arrow-down-s-line text-gray-400"></i>
			                                </div>
			                            </div>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Devise</label>
			                            <div class="relative">
			                                <button class="w-full px-3 py-2 pr-8  rounded-lg text-left focus:ring-2 focus:ring-primary focus:border-transparent">
			                                    Euro (EUR)
			                                </button>
			                                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center">
			                                    <i class="ri-arrow-down-s-line text-gray-400"></i>
			                                </div>
			                            </div>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Fuseau horaire</label>
			                            <div class="relative">
			                                <button class="w-full px-3 py-2 pr-8  rounded-lg text-left focus:ring-2 focus:ring-primary focus:border-transparent">
			                                    Europe/Paris
			                                </button>
			                                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center">
			                                    <i class="ri-arrow-down-s-line text-gray-400"></i>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <!-- Section Paiements -->
			            <div id="payments" class="section-content hidden">
			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Modes de paiement</h2>
			                    <div class="space-y-4">
			                        <div class="bg-white/10 flex items-center justify-between p-4 rounded-lg">
			                            <div class="flex items-center space-x-3">
			                                <div class="w-8 h-8 flex items-center justify-center text-green-600">
			                                    <i class="ri-money-euro-circle-line ri-lg"></i>
			                                </div>
			                                <div>
			                                    <h3 class="font-medium text-white">Espèces</h3>
			                                    <p class="text-sm text-gray-500">Paiement en liquide</p>
			                                </div>
			                            </div>
			                            <div class="toggle-switch" data-enabled="true">
			                                <div class="toggle-track bg-primary">
			                                    <div class="toggle-thumb"></div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="bg-white/10 flex items-center justify-between p-4 rounded-lg">
			                            <div class="flex items-center space-x-3">
			                                <div class="w-8 h-8 flex items-center justify-center text-yellow-600">
			                                    <i class="ri-smartphone-line ri-lg"></i>
			                                </div>
			                                <div>
			                                    <h3 class="font-medium text-white">MTN Money</h3>
			                                    <p class="text-sm text-gray-500">Paiement mobile MTN</p>
			                                </div>
			                            </div>
			                            <div class="toggle-switch" data-enabled="true">
			                                <div class="toggle-track bg-primary">
			                                    <div class="toggle-thumb"></div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="bg-white/10 flex items-center justify-between p-4 rounded-lg">
			                            <div class="flex items-center space-x-3">
			                                <div class="w-8 h-8 flex items-center justify-center text-blue-600">
			                                    <i class="ri-phone-line ri-lg"></i>
			                                </div>
			                                <div>
			                                    <h3 class="font-medium text-white">Wave</h3>
			                                    <p class="text-sm text-gray-500">Paiement mobile Wave</p>
			                                </div>
			                            </div>
			                            <div class="toggle-switch" data-enabled="false">
			                                <div class="toggle-track bg-gray-300">
			                                    <div class="toggle-thumb"></div>
			                                </div>
			                            </div>
			                        </div> 
			                        <div class="bg-white/10 flex items-center justify-between p-4 rounded-lg">
			                            <div class="flex items-center space-x-3">
			                                <div class="w-8 h-8 flex items-center justify-center text-purple-600">
			                                    <i class="ri-bank-card-line ri-lg"></i>
			                                </div>
			                                <div>
			                                    <h3 class="font-medium text-white">Carte bancaire</h3>
			                                    <p class="text-sm text-gray-500">Visa, Mastercard, etc.</p>
			                                </div>
			                            </div>
			                            <div class="toggle-switch" data-enabled="true">
			                                <div class="toggle-track bg-primary">
			                                    <div class="toggle-thumb"></div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Clés API</h2>
			                    <div class="space-y-4">
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Clé publique Stripe</label>
			                            <div class="flex items-center space-x-2">
			                              
			                                <button class="px-3 py-2 text-gray-400 hover:text-gray-400 border border-gray-300 rounded-lg">
			                                    <i class="ri-eye-off-line"></i>
			                                </button>
			                            </div>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Clé secrète Stripe</label>
			                    </div>
			                </div>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Frais par mode de paiement</h2>
			                    <div class="overflow-x-auto">
			                        <table class="w-full">
			                            <thead>
			                                <tr class="">
			                                    <th class="text-left py-3 px-4 font-medium text-white">Mode de paiement</th>
			                                    <th class="text-left py-3 px-4 font-medium text-white">Frais fixe (€)</th>
			                                    <th class="text-left py-3 px-4 font-medium text-white">Frais % du montant</th>
			                                    <th class="text-left py-3 px-4 font-medium text-white">Actif</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                                <tr class="text-gray-400">
			                                    <td class="py-3 px-4 flex items-center space-x-2">
			                                        <i class="ri-money-euro-circle-line text-green-600"></i>
			                                        <span>Espèces</span>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="0" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="0" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <div class="w-4 h-4 bg-green-500 rounded-full"></div>
			                                    </td>
			                                </tr>
			                                <tr class="text-gray-400">
			                                    <td class="py-3 px-4 flex items-center space-x-2">
			                                        <i class="ri-smartphone-line text-yellow-600"></i>
			                                        <span>MTN Money</span>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="0.50" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="1.5" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <div class="w-4 h-4 bg-green-500 rounded-full"></div>
			                                    </td>
			                                </tr>
			                                <tr class="text-gray-400">
			                                    <td class="py-3 px-4 flex items-center space-x-2">
			                                        <i class="ri-phone-line text-blue-600"></i>
			                                        <span>Wave</span>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="0.30" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="1.0" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <div class="w-4 h-4 bg-gray-400 rounded-full"></div>
			                                    </td>
			                                </tr>
			                                <tr class="text-gray-400">
			                                    <td class="py-3 px-4 flex items-center space-x-2">
			                                        <i class="ri-bank-card-line text-purple-600"></i>
			                                        <span>Carte bancaire</span>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="0.25" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <input type="number" value="2.9" step="0.01" class="w-20 bg-white/10 outline-none text-gray-400 px-2 py-1  rounded-lg text-center">
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <div class="w-4 h-4 bg-green-500 rounded-full"></div>
			                                    </td>
			                                </tr>
			                            </tbody>
			                        </table>
			                    </div>
			                </div>
			            </div>

			            <!-- Section Notifications -->
			            <div id="notifications" class="section-content hidden">
			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Templates de messages</h2>
			                    <div class="grid grid-cols-1 gap-6">
			                        <div>
			                            <div class="flex items-center justify-between mb-4">
			                                <h3 class="text-lg font-medium text-white">Message d'accueil</h3>
			                                <div class="flex space-x-2">
			                                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">SMS</button>
			                                    <button class="px-3 py-1 text-sm bg-primary text-white rounded-lg">Email</button>
			                                </div>
			                            </div>
			                            <div class="rounded-lg bg-white/10">
			                                <div class="flex items-center justify-between p-3 ">
			                                    <span class="text-sm font-medium text-gray-400">Objet</span>
			                                </div>
			                                <input type="text" value="Bienvenue chez {restaurant_name}" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 focus:ring-0">
			                                <div class="border-t border-gray-300 p-3 bg-white/10">
			                                    <span class="text-sm font-medium text-gray-400">Contenu</span>
			                                </div>
			                                <textarea rows="4" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 resize-none focus:ring-0" placeholder="Bonjour {client_name}, merci de votre visite...">Bonjour {client_name},Merci de votre visite chez {restaurant_name} ! Nous espérons que vous avez passé un excellent moment.N'hésitez pas à nous faire part de vos commentaires.</textarea>
			                            </div>
			                        </div>
			                        <div>
			                            <div class="flex items-center justify-between mb-4">
			                                <h3 class="text-lg font-medium text-white">Confirmation de réservation</h3>
			                                <div class="flex space-x-2">
			                                    <button class="px-3 py-1 text-sm bg-primary text-white rounded-lg">SMS</button>
			                                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">Email</button>
			                                </div>
			                            </div>
			                            <div class="rounded-lg">
			                                <textarea rows="3" class="w-full px-3 py-2 bg-white/10 rounded-lg outline-none text-gray-400 resize-none focus:ring-0" placeholder="Message SMS...">Réservation confirmée pour {date} à {heure} pour {nb_personnes} personne(s). Référence: {ref}. À bientôt chez {restaurant_name} !</textarea>
			                            </div>
			                        </div>
			                        <div>
			                            <div class="flex items-center justify-between mb-4">
			                                <h3 class="text-lg font-medium text-white">Rappel de réservation</h3>
			                                <div class="flex space-x-2">
			                                    <button class="px-3 py-1 text-sm bg-primary text-white rounded-lg">SMS</button>
			                                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">Email</button>
			                                </div>
			                            </div>
			                            <div class="rounded-lg">
			                                <textarea rows="3" class="w-full px-3 py-2 bg-white/10 rounded-lg outline-none text-gray-400 resize-none focus:ring-0" placeholder="Message SMS...">Rappel : votre réservation chez {restaurant_name} est prévue demain à {heure} pour {nb_personnes} personne(s). À bientôt !</textarea>
			                            </div>
			                        </div>
			                    </div>
			                </div>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Alertes automatiques</h2>
			                    <div class="space-y-4">
			                        <div class="flex items-center justify-between p-4 rounded-lg">
			                            <div>
			                                <h3 class="font-medium text-white">Alerte stock bas</h3>
			                                <p class="text-sm text-gray-500">Notification quand un produit atteint le stock minimum</p>
			                                <div class="mt-2 flex items-center space-x-4">
			                                    <div class="flex items-center space-x-2">
			                                        <label class="text-sm text-gray-400">Seuil :</label>
			                                        <input type="number" value="5" class="w-16 px-2 py-1 bg-white/10 outline-none text-gray-400 rounded-lg text-center">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="toggle-switch" data-enabled="true">
			                                <div class="toggle-track bg-primary">
			                                    <div class="toggle-thumb"></div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="flex items-center justify-between p-4 rounded-lg">
			                            <div>
			                                <h3 class="font-medium text-white">Nouvelle réservation</h3>
			                                <p class="text-sm text-gray-500">Notification immédiate lors d'une nouvelle réservation</p>
			                                <div class="mt-2">
			                                    <div class="flex items-center space-x-4">
			                                        <label class="flex items-center space-x-2">
			                                            <input type="checkbox" checked="" class="rounded border-gray-300">
			                                            <span class="text-sm text-gray-400">Email</span>
			                                        </label>
			                                        <label class="flex items-center space-x-2">
			                                            <input type="checkbox" checked="" class="rounded border-gray-300">
			                                            <span class="text-sm text-gray-400">SMS</span>
			                                        </label>
			                                        <label class="flex items-center space-x-2">
			                                            <input type="checkbox" class="rounded border-gray-300">
			                                            <span class="text-sm text-gray-400">Push</span>
			                                        </label>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="toggle-switch" data-enabled="true">
			                                <div class="toggle-track bg-primary">
			                                    <div class="toggle-thumb"></div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <!-- Section Sécurité -->
			            <div id="security" class="section-content hidden">
			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Gestion des sessions</h2>
			                    <div class="space-y-6">
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Durée de session (minutes)</label>
			                            <div class="flex items-center space-x-4">
			                                <input type="range" min="30" max="480" value="120" class="flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
			                                <div class="w-16 px-2 py-1 border border-gray-300 rounded-lg text-center text-sm">120</div>
			                            </div>
			                            <p class="text-xs text-gray-500 mt-1">Les utilisateurs seront déconnectés après cette durée d'inactivité</p>
			                        </div>
			                    </div>
			                </div>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Journal des connexions</h2>
			                    <div class="mb-4 flex items-center space-x-4">
			                        <div class="flex-1">
			                            <input type="text" placeholder="Rechercher par utilisateur..." class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                        </div>
			                    </div>
			                    <div class="overflow-x-auto">
			                        <table class="w-full">
			                            <thead>
			                                <tr class="">
			                                    <th class="text-left py-3 px-4 font-medium text-white">Utilisateur</th>
			                                    <th class="text-left py-3 px-4 font-medium text-white">Date</th>
			                                    <th class="text-left py-3 px-4 font-medium text-white">IP</th>
			                                    <th class="text-left py-3 px-4 font-medium text-white">Statut</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                                <tr class="text-gray-400">
			                                    <td class="py-3 px-4">admin@legourmet.fr</td>
			                                    <td class="py-3 px-4">15/01/2024 14:32</td>
			                                    <td class="py-3 px-4">192.168.1.100</td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Réussie</span>
			                                    </td>
			                                </tr>
			                                <tr class="text-gray-400">
			                                    <td class="py-3 px-4">manager@legourmet.fr</td>
			                                    <td class="py-3 px-4">15/01/2024 09:15</td>
			                                    <td class="py-3 px-4">192.168.1.105</td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Réussie</span>
			                                    </td>
			                                </tr>
			                                <tr class="text-gray-400">
			                                    <td class="py-3 px-4">unknown@test.com</td>
			                                    <td class="py-3 px-4">14/01/2024 23:45</td>
			                                    <td class="py-3 px-4">45.123.67.89</td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-red-100 text-red-800 rounded-full">Échec</span>
			                                    </td>
			                                </tr>
			                            </tbody>
			                        </table>
			                    </div>
			                </div>
			            </div>

			            <!-- Section Sauvegarde -->
			            <div id="backup" class="section-content hidden">
			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Export de la base de données</h2>
			                    <div class="grid grid-cols-2 gap-6">
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Format d'export</label>
			                            <div class="space-y-2">
			                                <label class="flex text-gray-400 items-center space-x-2">
			                                    <input type="radio" name="export_format" value="sql" checked="" class="text-primary">
			                                    <span class="text-sm">SQL (.sql)</span>
			                                </label>
			                                <label class="flex text-gray-400 items-center space-x-2">
			                                    <input type="radio" name="export_format" value="json" class="text-primary">
			                                    <span class="text-sm">JSON (.json)</span>
			                                </label>
			                                <label class="flex text-gray-400 items-center space-x-2">
			                                    <input type="radio" name="export_format" value="csv" class="text-primary">
			                                    <span class="text-sm">CSV (.csv)</span>
			                                </label>
			                            </div>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-2">Tables à exporter</label>
			                            <div class="space-y-2">
			                                <label class="flex text-gray-400 items-center space-x-2">
			                                    <input type="checkbox" checked="" class="text-primary rounded">
			                                    <span class="text-sm">Utilisateurs</span>
			                                </label>
			                                <label class="flex text-gray-400 items-center space-x-2">
			                                    <input type="checkbox" checked="" class="text-primary rounded">
			                                    <span class="text-sm">Réservations</span>
			                                </label>
			                                <label class="flex text-gray-400 items-center space-x-2">
			                                    <input type="checkbox" checked="" class="text-primary rounded">
			                                    <span class="text-sm">Produits</span>
			                                </label>
			                                <label class="flex text-gray-400 items-center space-x-2">
			                                    <input type="checkbox" class="text-primary rounded">
			                                    <span class="text-sm">Journaux</span>
			                                </label>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="mt-6">
			                        <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 flex items-center space-x-2">
			                            <i class="ri-download-line"></i>
			                            <span>Exporter maintenant</span>
			                        </button>
			                    </div>
			                </div>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Sauvegardes automatiques</h2>
			                    <div class="space-y-4">
			                        <div class="flex items-center justify-between p-4 rounded-lg">
			                            <div>
			                                <h3 class="font-medium text-white">Sauvegarde quotidienne</h3>
			                                <p class="text-sm text-gray-500">Sauvegarde automatique tous les jours à 3h00</p>
			                            </div>
			                            <div class="toggle-switch" data-enabled="true">
			                                <div class="toggle-track bg-primary">
			                                    <div class="toggle-thumb"></div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="grid grid-cols-3 gap-4">
			                            <div>
			                                <label class="block text-sm font-medium text-gray-400 mb-2">Heure</label>
			                                <input type="time" value="03:00" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                            </div>
			                            <div>
			                                <label class="block text-sm font-medium text-gray-400 mb-2">Rétention (jours)</label>
			                                <input type="number" value="30" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                            </div>
			                            <div>
			                                <label class="block text-sm font-medium text-gray-400 mb-2">Stockage</label>
			                                <select class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                                    <option>Local</option>
			                                    <option>Google Drive</option>
			                                    <option>AWS S3</option>
			                                </select>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="mt-6">
			                        <h3 class="text-lg font-medium text-white mb-4">Historique des sauvegardes</h3>
			                        <div class="space-y-2">
			                            <div class="text-gray-400 flex items-center justify-between p-3 rounded-lg">
			                                <div>
			                                    <span class="font-medium">backup_15-01-2024_03-00.sql</span>
			                                    <span class="text-sm text-gray-500 ml-2">2.3 MB</span>
			                                </div>
			                                <div class="text-gray-400 flex items-center space-x-2">
			                                    <span class="text-sm text-gray-500">15/01/2024 03:00</span>
			                                    <button class="text-primary hover:text-blue-600">
			                                        <i class="ri-download-line"></i>
			                                    </button>
			                                </div>
			                            </div>
			                            <div class="flex items-center justify-between p-3 rounded-lg">
			                                <div class="text-gray-400">
			                                    <span class="font-medium">backup_14-01-2024_03-00.sql</span>
			                                    <span class="text-sm text-gray-500 ml-2">2.2 MB</span>
			                                </div>
			                                <div class="flex items-center space-x-2">
			                                    <span class="text-sm text-gray-500">14/01/2024 03:00</span>
			                                    <button class="text-primary hover:text-blue-600">
			                                        <i class="ri-download-line"></i>
			                                    </button>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6">
			                    <h2 class="text-xl font-semibold text-white mb-6">Restauration</h2>
			                    <div class="border-2 border-dashed border-yellow-300 rounded-lg p-6 bg-yellow-900/30">
			                        <div class="flex items-start space-x-3">
			                            <i class="ri-alert-line text-yellow-600 text-xl mt-1"></i>
			                            <div>
			                                <h3 class="font-medium text-yellow-800 mb-2">Attention</h3>
			                                <p class="text-sm text-yellow-700 mb-4">La restauration remplacera toutes les données actuelles. Cette action est irréversible.</p>
			                                <div class="space-y-3">
			                                    <div>
			                                        <input type="file" accept=".sql,.json,.csv" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary file:text-white hover:file:bg-blue-600">
			                                    </div>
			                                    <button class="px-6 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700">
			                                        Restaurer la sauvegarde
			                                    </button>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <!-- Section API -->
			            <div id="api" class="section-content hidden">
			                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Clés d'accès API</h2>
			                    <div class="space-y-4">
			                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
			                            <div>
			                                <h3 class="font-medium text-gray-900">Clé de production</h3>
			                                <p class="text-sm text-gray-500 font-mono">sk_prod_51JXX...XXXX</p>
			                                <div class="mt-2 flex items-center space-x-4">
			                                    <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded-full">Active</span>
			                                    <span class="text-xs text-gray-500">Lecture/Écriture</span>
			                                </div>
			                            </div>
			                            <div class="flex items-center space-x-2">
			                                <button class="p-2 text-gray-500 hover:text-gray-700 border border-gray-300 rounded-lg">
			                                    <i class="ri-eye-line"></i>
			                                </button>
			                                <button class="p-2 text-gray-500 hover:text-gray-700 border border-gray-300 rounded-lg">
			                                    <i class="ri-file-copy-line"></i>
			                                </button>
			                                <button class="p-2 text-red-500 hover:text-red-700 border border-red-300 rounded-lg">
			                                    <i class="ri-delete-bin-line"></i>
			                                </button>
			                            </div>
			                        </div>
			                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
			                            <div>
			                                <h3 class="font-medium text-gray-900">Clé de test</h3>
			                                <p class="text-sm text-gray-500 font-mono">sk_test_51JXX...XXXX</p>
			                                <div class="mt-2 flex items-center space-x-4">
			                                    <span class="text-xs text-gray-600 bg-gray-100 px-2 py-1 rounded-full">Test</span>
			                                    <span class="text-xs text-gray-500">Lecture seule</span>
			                                </div>
			                            </div>
			                            <div class="flex items-center space-x-2">
			                                <button class="p-2 text-gray-500 hover:text-gray-700 border border-gray-300 rounded-lg">
			                                    <i class="ri-eye-line"></i>
			                                </button>
			                                <button class="p-2 text-gray-500 hover:text-gray-700 border border-gray-300 rounded-lg">
			                                    <i class="ri-file-copy-line"></i>
			                                </button>
			                                <button class="p-2 text-red-500 hover:text-red-700 border border-red-300 rounded-lg">
			                                    <i class="ri-delete-bin-line"></i>
			                                </button>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="mt-6">
			                        <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 flex items-center space-x-2">
			                            <i class="ri-add-line"></i>
			                            <span>Générer une nouvelle clé</span>
			                        </button>
			                    </div>
			                </div>

			                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
			                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Webhooks</h2>
			                    <div class="space-y-4">
			                        <div class="p-4 border border-gray-200 rounded-lg">
			                            <div class="flex items-center justify-between mb-3">
			                                <h3 class="font-medium text-gray-900">Nouvelle réservation</h3>
			                                <div class="toggle-switch" data-enabled="true">
			                                    <div class="toggle-track bg-primary">
			                                        <div class="toggle-thumb"></div>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="space-y-2">
			                                <div>
			                                    <label class="block text-sm font-medium text-gray-700 mb-1">URL de destination</label>
			                                    <input type="url" value="https://api.example.com/webhooks/reservation" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
			                                </div>
			                                <div class="flex items-center space-x-4">
			                                    <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded-full">Actif</span>
			                                    <span class="text-xs text-gray-500">Dernière activité: 15/01/2024 14:32</span>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="p-4 border border-gray-200 rounded-lg">
			                            <div class="flex items-center justify-between mb-3">
			                                <h3 class="font-medium text-gray-900">Paiement reçu</h3>
			                                <div class="toggle-switch" data-enabled="false">
			                                    <div class="toggle-track bg-gray-300">
			                                        <div class="toggle-thumb"></div>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="space-y-2">
			                                <div>
			                                    <label class="block text-sm font-medium text-gray-700 mb-1">URL de destination</label>
			                                    <input type="url" placeholder="https://..." class="w-full px-3 py-2 border border-gray-300 rounded-lg">
			                                </div>
			                                <div class="flex items-center space-x-4">
			                                    <span class="text-xs text-gray-600 bg-gray-100 px-2 py-1 rounded-full">Inactif</span>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="mt-6">
			                        <button class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 flex items-center space-x-2">
			                            <i class="ri-add-line"></i>
			                            <span>Ajouter un webhook</span>
			                        </button>
			                    </div>
			                </div>

			                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
			                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Documentation</h2>
			                    <div class="grid grid-cols-2 gap-6">
			                        <div>
			                            <h3 class="text-lg font-medium text-gray-900 mb-3">Ressources disponibles</h3>
			                            <div class="space-y-3">
			                                <a href="#" class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50">
			                                    <i class="ri-file-text-line text-blue-600"></i>
			                                    <div>
			                                        <div class="font-medium">Guide de démarrage</div>
			                                        <div class="text-sm text-gray-500">Configuration initiale de l'API</div>
			                                    </div>
			                                </a>
			                                <a href="#" class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50">
			                                    <i class="ri-code-box-line text-green-600"></i>
			                                    <div>
			                                        <div class="font-medium">Référence API</div>
			                                        <div class="text-sm text-gray-500">Endpoints et paramètres</div>
			                                    </div>
			                                </a>
			                                <a href="#" class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50">
			                                    <i class="ri-lightbulb-line text-yellow-600"></i>
			                                    <div>
			                                        <div class="font-medium">Exemples de code</div>
			                                        <div class="text-sm text-gray-500">PHP, JavaScript, Python</div>
			                                    </div>
			                                </a>
			                            </div>
			                        </div>
			                        <div>
			                            <h3 class="text-lg font-medium text-gray-900 mb-3">Exemple de requête</h3>
			                            <div class="bg-gray-900 text-green-400 p-4 rounded-lg text-sm font-mono">
			                                <div class="text-gray-400"># Créer une réservation</div>
			                                <div>curl -X POST \</div>
			                                <div>&nbsp;&nbsp;https://api.legourmet.fr/v1/reservations \</div>
			                                <div>&nbsp;&nbsp;-H "Authorization: Bearer sk_..." \</div>
			                                <div>&nbsp;&nbsp;-H "Content-Type: application/json" \</div>
			                                <div>&nbsp;&nbsp;-d '{</div>
			                                <div>&nbsp;&nbsp;&nbsp;&nbsp;"client_name": "Dupont",</div>
			                                <div>&nbsp;&nbsp;&nbsp;&nbsp;"date": "2024-01-20",</div>
			                                <div>&nbsp;&nbsp;&nbsp;&nbsp;"time": "19:30",</div>
			                                <div>&nbsp;&nbsp;&nbsp;&nbsp;"guests": 4</div>
			                                <div>&nbsp;&nbsp;}'</div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <!-- Section Journaux -->
			            <div id="logs" class="section-content hidden">
			                <div class="bg-white/10 rounded-xl shadow-sm p-6">
			                    <div class="flex items-center justify-between mb-6">
			                        <h2 class="text-xl font-semibold text-white">Journal des actions utilisateurs</h2>
			                    </div>
			                    
			                    <div class="mb-6 grid grid-cols-4 gap-4">
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-1">Utilisateur</label>
			                            <select class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                                <option>Tous les utilisateurs</option>
			                                <option>admin@legourmet.fr</option>
			                                <option>manager@legourmet.fr</option>
			                                <option>serveur@legourmet.fr</option>
			                            </select>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-1">Action</label>
			                            <select class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                                <option>Toutes les actions</option>
			                                <option>Connexion</option>
			                                <option>Création</option>
			                                <option>Modification</option>
			                                <option>Suppression</option>
			                            </select>
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-1">Date de début</label>
			                            <input type="date" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                        </div>
			                        <div>
			                            <label class="block text-sm font-medium text-gray-400 mb-1">Date de fin</label>
			                            <input type="date" class="w-full px-3 py-2 bg-white/10 outline-none text-gray-400 rounded-lg">
			                        </div>
			                    </div>

			                    <div class="overflow-x-auto">
			                        <table class="w-full">
			                            <thead>
			                                <tr class="border-b border-gray-200 text-gray-400">
			                                    <th class="text-left py-3 px-4 font-medium">Date/Heure</th>
			                                    <th class="text-left py-3 px-4 font-medium">Utilisateur</th>
			                                    <th class="text-left py-3 px-4 font-medium">Action</th>
			                                    <th class="text-left py-3 px-4 font-medium">Module</th>
			                                    <th class="text-left py-3 px-4 font-medium">Détails</th>
			                                    <th class="text-left py-3 px-4 font-medium">IP</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                                <tr class="border-b border-gray-100 text-gray-400">
			                                    <td class="py-3 px-4 text-sm">15/01/2024 14:32:15</td>
			                                    <td class="py-3 px-4">
			                                        <div class="flex items-center space-x-2">
			                                            <div class="w-6 h-6 bg-blue-500 text-white text-xs rounded-full flex items-center justify-center">A</div>
			                                            <span class="text-sm">admin@legourmet.fr</span>
			                                        </div>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded-full">Modification</span>
			                                    </td>
			                                    <td class="py-3 px-4 text-sm">Paramètres</td>
			                                    <td class="py-3 px-4 text-sm">Modification des frais MTN Money</td>
			                                    <td class="py-3 px-4 text-sm text-gray-500">192.168.1.100</td>
			                                </tr>
			                                <tr class="border-b border-gray-100">
			                                    <td class="py-3 px-4 text-sm">15/01/2024 11:28:42</td>
			                                    <td class="py-3 px-4">
			                                        <div class="flex items-center space-x-2">
			                                            <div class="w-6 h-6 bg-green-500 text-white text-xs rounded-full flex items-center justify-center">M</div>
			                                            <span class="text-sm">manager@legourmet.fr</span>
			                                        </div>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Création</span>
			                                    </td>
			                                    <td class="py-3 px-4 text-sm">Réservations</td>
			                                    <td class="py-3 px-4 text-sm">Nouvelle réservation - Table 5</td>
			                                    <td class="py-3 px-4 text-sm text-gray-500">192.168.1.105</td>
			                                </tr>
			                                <tr class="border-b border-gray-100">
			                                    <td class="py-3 px-4 text-sm">15/01/2024 09:15:33</td>
			                                    <td class="py-3 px-4">
			                                        <div class="flex items-center space-x-2">
			                                            <div class="w-6 h-6 bg-green-500 text-white text-xs rounded-full flex items-center justify-center">M</div>
			                                            <span class="text-sm">manager@legourmet.fr</span>
			                                        </div>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-gray-100 text-gray-800 rounded-full">Connexion</span>
			                                    </td>
			                                    <td class="py-3 px-4 text-sm">Authentification</td>
			                                    <td class="py-3 px-4 text-sm">Connexion réussie</td>
			                                    <td class="py-3 px-4 text-sm text-gray-500">192.168.1.105</td>
			                                </tr>
			                                <tr class="border-b border-gray-100">
			                                    <td class="py-3 px-4 text-sm">14/01/2024 18:45:12</td>
			                                    <td class="py-3 px-4">
			                                        <div class="flex items-center space-x-2">
			                                            <div class="w-6 h-6 bg-purple-500 text-white text-xs rounded-full flex items-center justify-center">S</div>
			                                            <span class="text-sm">serveur@legourmet.fr</span>
			                                        </div>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-red-100 text-red-800 rounded-full">Suppression</span>
			                                    </td>
			                                    <td class="py-3 px-4 text-sm">Commandes</td>
			                                    <td class="py-3 px-4 text-sm">Annulation commande #1234</td>
			                                    <td class="py-3 px-4 text-sm text-gray-500">192.168.1.110</td>
			                                </tr>
			                                <tr class="border-b border-gray-100">
			                                    <td class="py-3 px-4 text-sm">14/01/2024 16:22:08</td>
			                                    <td class="py-3 px-4">
			                                        <div class="flex items-center space-x-2">
			                                            <div class="w-6 h-6 bg-blue-500 text-white text-xs rounded-full flex items-center justify-center">A</div>
			                                            <span class="text-sm">admin@legourmet.fr</span>
			                                        </div>
			                                    </td>
			                                    <td class="py-3 px-4">
			                                        <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded-full">Export</span>
			                                    </td>
			                                    <td class="py-3 px-4 text-sm">Sauvegarde</td>
			                                    <td class="py-3 px-4 text-sm">Export base de données (SQL)</td>
			                                    <td class="py-3 px-4 text-sm text-gray-500">192.168.1.100</td>
			                                </tr>
			                            </tbody>
			                        </table>
			                    </div>

			                    <div class="mt-6 flex items-center justify-between">
			                        <div class="text-sm text-gray-500">
			                            Affichage de 1-5 sur 247 entrées
			                        </div>
			                        <div class="flex items-center space-x-2">
			                            <button class="px-3 py-1 border border-gray-300 text-gray-400 rounded-lg hover:bg-gray-50 disabled:opacity-50" disabled="">
			                                Précédent
			                            </button>
			                            <button class="px-3 py-1 bg-primary text-white rounded-lg">1</button>
			                            <button class="px-3 py-1 border border-gray-300 text-gray-400 rounded-lg hover:bg-gray-50">2</button>
			                            <button class="px-3 py-1 border border-gray-300 text-gray-400 rounded-lg hover:bg-gray-50">3</button>
			                            <button class="px-3 py-1 border border-gray-300 text-gray-400 rounded-lg hover:bg-gray-50">
			                                Suivant
			                            </button>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <div id="others" class="section-content ">
			                	<h1 class="text-white text-xl font-semibold mb-6">Matériel et autre configuration de base</h1>

			                <div class="bg-white/10 rounded-xl shadow-sm p-6">
			                    <div class="flex items-center justify-between mb-6">
			                        <h2 class="text-xl font-semibold text-white">Mes Verres</h2>

			                        <button class="addVerreBtn bg-primary p-2 rounded-lg text-white">Ajouter un verre</button>
			                    </div>

			                    <div class="grid grid-cols-6 gap-2">
			                    	@foreach($verres as $verre)
			                    	<div class="bg-white/10 flex items-center justify-center flex-col p-2 rounded-md">
			                    		<div class="mb-2">    			
			            	        		<img src="storage/images/resto.png" class="h-20 w-20 rounded-lg object-cover">
			                    		</div>

			                    		<div>
			                    			<h2>nom : {{$verre->name}}</h2>
			                    			<h2>Volume :{{$verre->volumeVerre}} ml</h2>
			                    		</div>
			                    	</div>
			                    	@endforeach
			                    </div>
			                   
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


	    <div id="addverre" class="absolute hidden flex items-center backdrop-blur-md inset-0 bg-black bg-opacity-50 items-center justify-center z-50">
	        <div class="bg-white/10 rounded-xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
	            <div class="p-6">
	                <div class="flex items-center justify-between">
	                    <h2 class="text-xl font-bold text-white">Ajouter un verre</h2>
	                    <button class="closesModal w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-600">
	                        <i class="ri-close-line"></i>
	                    </button>
	                </div>
	            </div>

	            <div class="p-6">
	            	<form class="space-y-2" action="{{route('addVerre')}}" method="POST" enctype="multipart/form-data">
	            		@csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Nom du verre *</label>
                            <input type="text" name="name" class="w-full px-3 py-2 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="">
                            @error('name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Volume du verre en ml *</label>
                            <input type="number" step="any" name="volume" class="w-full px-3 py-2 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
                            @error('volume')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">photo</label>
                            <input type="file" accept="images/*" name="photo" class="w-full px-3 py-2 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
                            @error('photo')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>

	                <button type="button" class="closesModal px-4 py-2 text-gray-400 bg-white/10 hover:bg-white/30 rounded-lg whitespace-nowrap transition-colors">
		                    Annuler
		            </button>
	                <button type="submit" class="px-4 py-2 bg-primary text-white hover:bg-blue-600 rounded-lg whitespace-nowrap transition-colors">
	                    Sauvegarder
	                </button>
	            	</form>
	            </div>
	        </div>
	    </div>

	    @include('components.notification')
	</body>

	<script>
		document.addEventListener('DOMContentLoaded', function(){
			const addVerreBtn = document.querySelector('.addVerreBtn');
			const addverre = document.getElementById('addverre');
			const closes = document.querySelectorAll('.closesModal');

			addVerreBtn.addEventListener('click', function(){
				addverre.classList.remove('hidden');
			});

			closes.forEach(close =>{
				close.addEventListener('click', function(){
					addverre.classList.add('hidden');

				})

			});
		});
	</script>
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

	<style>
        .toggle-switch {
            cursor: pointer;
        }
        
        .toggle-track {
            width: 44px;
            height: 24px;
            border-radius: 12px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .toggle-thumb {
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 50%;
            position: absolute;
            top: 2px;
            left: 2px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .toggle-switch[data-enabled="true"] .toggle-thumb {
            transform: translateX(20px);
        }
        
        .sidebar-item.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: #3b82f6;

        }
        
        .section-content.hidden {
            display: none;
        }
    </style>

    <script>
        // Navigation entre sections
        document.querySelectorAll('.sidebar-item').forEach(item => {
            item.addEventListener('click', function() {
                // Retirer la classe active de tous les éléments
                document.querySelectorAll('.sidebar-item').forEach(el => el.classList.remove('active'));
                document.querySelectorAll('.section-content').forEach(el => el.classList.add('hidden'));
                
                // Ajouter la classe active à l'élément cliqué
                this.classList.add('active');
                
                // Afficher la section correspondante
                const sectionId = this.dataset.section;
                document.getElementById(sectionId).classList.remove('hidden');
            });
        });

        // Toggle switches
        document.querySelectorAll('.toggle-switch').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const isEnabled = this.dataset.enabled === 'true';
                const newState = !isEnabled;
                this.dataset.enabled = newState;
                
                const track = this.querySelector('.toggle-track');
                if (newState) {
                    track.classList.remove('bg-gray-300');
                    track.classList.add('bg-primary');
                } else {
                    track.classList.remove('bg-primary');
                    track.classList.add('bg-gray-300');
                }
            });
        });

        // Bouton sauvegarder
        document.getElementById('save-button').addEventListener('click', function() {
            // Animation du bouton
            this.innerHTML = '<i class="ri-loader-line animate-spin"></i><span>Sauvegarde...</span>';
            
            // Simuler la sauvegarde
            setTimeout(() => {
                this.innerHTML = '<i class="ri-check-line"></i><span>Sauvegardé</span>';
                this.classList.add('bg-green-600');
                
                setTimeout(() => {
                    this.innerHTML = '<i class="ri-save-line"></i><span>Sauvegarder</span>';
                    this.classList.remove('bg-green-600');
                }, 2000);
            }, 1500);
        });
    </script>
</html>