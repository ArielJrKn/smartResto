<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SmartResto-Hôtel</title>
	<link rel="stylesheet" type="text/css" href="storage/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <!-- <script src="js/tailwindConfig.js"></script> -->
</head>
<body>
	<div class="flex flex-col h-screen">
		<div class="overflow-y-auto h-full">
			<div class="junior h-full">
				<div class="absolute top-0 w-full z-50 bg-gradient-to-b from-black to-transparent">
					<header class="relative px-3 py-2 z-50">
						<div class="flex items-center justify-between flex-col rounded-full">

							<div class="flex items-center justify-between w-full">
								<h1 class="text-[#102C26] px-3">SmartResto-Hôtel</h1>

								<div class="bg-[#102C26] bg-opacity-30 rounded-full m-1 p-1 lg:block md:block sm:block hidden">
									<a href="{{ route('register') }}">
										<button class="bg-white rounded-full py-2 px-3">Connexion</button>
									</a>
									<a href="{{ route('register') }}">
										<button class="rounded-full bg-[#102C26] text-white py-2 px-3">Ajouter votre établissement</button>
									</a>
								</div>

								<div class="btnMenu lg:hidden md:hidden sm:hidden p-2">
									<i class="ri-menu-2-line ri-lg"></i>
								</div>
							</div>

							<div class="listMenu hidden rounded-md w-full flex-col flex items-center justify-center absolute top-10 left-0 px-3 bg-black/20">
								<a href="{{ route('register') }}">
										<button class="bg-white rounded-full py-2 px-3">Connexion</button>
									</a>
									<a href="{{ route('register') }}">
										<button class="rounded-full bg-[#102C26] text-white py-2 px-3">Ajouter votre établissement</button>
									</a>
							</div>
						</div>
						
					</header>
				</div>

				<div class="flex items-center justify-center h-full px-8 bg-white/90">
					<div class="grid lg:grid-cols-2 sm:grid-cols-1 flex items-center justify-center gap-4">
						<div class="p-3">
							<h1 class="text-3xl font-semibold mb-2">La solution tout-en-un pour gérer votre hôtel et restaurant</h1>
							<p class="mb-4 text-black/50" >Commande, réservations, stocks, paiements centralisé dans une seule plateforme intuitive</p>

							<button class="rounded-full bg-[#102C26] text-white py-2 px-3 mb-4">Ajouter votre établissement</button>

							<div class="flex items-center gap-2 text-black/50">
								<div class="flex items-center justify-center flex-col">
									<h1 class="text-[#102C26]">500 +</h1>
									<p>Etablissements</p>
								</div>

								<div class="flex items-center justify-center flex-col">
									<h1 class="text-[#102C26]">500 %</h1>
									<p>Satisfactions</p>
								</div>
							</div>
						</div>

						<div class=" rounded-xl p-2">
							<img src="storage/images/resto.png" class="rounded-lg">
						</div>
					</div>
				</div>
			</div>

			<div class="flex items-center justify-center flex-col w-full bg-white py-4 px-3">
				<div class="flex items-center justify-center flex-col">
					<h1 class="text-3xl font-semibold p-3">Tout pour votre établissement</h1>
					<h3 class="text-md">Une suite complète d'outil pour optimiser votre gestion</h3>
				</div>

				<div class="flex flex-wrap lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 grid p-4 gap-3">
					<div class="shadow-xl bg-white p-4 rounded-xl flex justify-start gap-4 flex-col">
						<div class="pt-4">
							<i class="ri-edit-line bg-[#102C26] bg-opacity-50 text-[#102C26] p-3 rounded-lg ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Gestions des commandes</h1>

						<p>Centraliser toutes vos commandes en salle, à emporter et en livraison sur une seule interface</p>
					</div>

					<div class="shadow-xl bg-white p-4 rounded-xl flex justify-start gap-4 flex-col">
						<div class="pt-4">
							<i class="ri-edit-line bg-[#102C26] bg-opacity-50 text-[#102C26] p-3 rounded-lg ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Réservations</h1>

						<p>Gérez vos réservations de tables et chambres avec un plannig intelligent et automatisé</p>
					</div>

					<div class="shadow-xl bg-white p-4 rounded-xl flex justify-start gap-4 flex-col">
						<div class="pt-4">
							<i class="ri-edit-line bg-[#102C26] bg-opacity-50 text-[#102C26] p-3 rounded-lg ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Caisse & paiement</h1>

						<p>Encaissez rapidement avec tous les modes de paiements et suivez vos revenu en temps réels</p>
					</div>

					<div class="shadow-xl bg-white p-4 rounded-xl flex justify-start gap-4 flex-col">
						<div class="pt-4">
							<i class="ri-edit-line bg-[#102C26] bg-opacity-50 text-[#102C26] p-3 rounded-lg ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Gestions des stocks</h1>

						<p>Optimisez vos approvisionnements avec des alertes automatiques et un suivi précis</p>
					</div>

					<div class="shadow-xl bg-white p-4 rounded-xl flex justify-start gap-4 flex-col">
						<div class="pt-4">
							<i class="ri-edit-line bg-[#102C26] bg-opacity-50 text-[#102C26] p-3 rounded-lg ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Statistiques avancées</h1>

						<p>Analysez vos performances avec des rapports détaillés et des insights personnalisés</p>
					</div>

					<div class="shadow-xl bg-white p-4 rounded-xl flex justify-start gap-4 flex-col">
						<div class="pt-4">
							<i class="ri-edit-line bg-[#102C26] bg-opacity-50 text-[#102C26] p-3 rounded-lg ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Programme de fidélité</h1>

						<p>Fidélisez votre clientèle avec des programmes de recompenses personnalisables</p>
					</div>
				</div>
			</div>

			<div class="flex items-center justify-center flex-col w-full bg-[#102C26] bg-opacity-30 py-4 px-3">
				<div class="flex items-center justify-center flex-col">
					<h1 class="text-3xl font-semibold p-3">Commencez en 3 étapes</h1>
					<h3 class="text-md">Lancez votre établissement en quelques minutes</h3>
				</div>

				<div class="flex flex-wrap lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 grid p-4 gap-3">
					<div class="p-4 rounded-xl flex items-center justify-center gap-2 flex-col">
						<div class="flex items-center justify-center">
							<h1 class="bg-[#102C26] bg-opacity-30 rounded-full w-10 h-10 flex items-center justify-center text-xl font-semibold p-3">1</h1>
						</div>

						<h1 class="font-semibold text-xl">Inscrivez-vous</h1>

						<p>Créer votre compte gratuitement en moins de 2 minutes</p>
					</div>

					<div class="p-4 rounded-xl flex items-center justify-center gap-2 flex-col">
						<div class="flex items-center justify-center">
							<h1 class="bg-[#102C26] bg-opacity-30 rounded-full w-10 h-10 flex items-center justify-center text-xl font-semibold p-3">2</h1>
						</div>

						<h1 class="font-semibold text-xl">Ajoutez votre établissement</h1>

						<p>Configurez vos menus, tarifs et paramètres en quelques clics</p>
					</div>

					<div class="p-4 rounded-xl flex items-center justify-center gap-2 flex-col">
						<div class="flex items-center justify-center">
							<h1 class="bg-[#102C26] bg-opacity-30 rounded-full w-10 h-10 flex items-center justify-center text-xl font-semibold p-3">3</h1>
						</div>

						<h1 class="font-semibold text-xl">Lancez-vous</h1>

						<p>Commencez à gérer votre établissement immédiatement</p>
					</div>
				</div>
			</div>

			<div class="flex items-center justify-center flex-col w-full bg-white py-4 px-3">
				<div class="flex items-center justify-center flex-col">
					<h1 class="text-3xl font-semibold p-3">Pourquoi choisir SmartResto-Hotel</h1>
					<h3 class="text-md">Une suite complète d'outil pour optimiser votre gestion</h3>
				</div>

				<div class="flex flex-wrap lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-2 grid p-4 gap-4">
					<div class="p-4 rounded-xl flex items-center justify-center gap-3 flex-col">
						<div class="bg-[#102C26] bg-opacity-50 rounded-xl p-3">
							<i class="ri-edit-line text-[#102C26] ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Multi-établissement</h1>

						<p>Gérez plusieurs restaurants et hôtels depuis un seul tableau de bord</p>
					</div>

					<div class="p-4 rounded-xl flex items-center justify-center gap-3 flex-col">
						<div class="bg-[#102C26] bg-opacity-50 rounded-xl p-3">
							<i class="ri-edit-line text-[#102C26] ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Mode hors-ligne</h1>

						<p>Continuez à travailler même sans connexion internet</p>
					</div>


					<div class="p-4 rounded-xl flex items-center justify-center gap-3 flex-col">
						<div class="bg-[#102C26] bg-opacity-50 rounded-xl p-3">
							<i class="ri-edit-line text-[#102C26] ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Rapports détaillés</h1>

						<p>Analyses approfondies pour optimiser votre rentabilité</p>
					</div>


					<div class="p-4 rounded-xl flex items-center justify-center gap-3 flex-col">
						<div class="bg-[#102C26] bg-opacity-50 rounded-xl p-3">
							<i class="ri-edit-line text-[#102C26] ri-lg"></i>
						</div>

						<h1 class="font-semibold text-xl">Support prioritaire</h1>

						<p>Assistance dédiée 7j/7 pour vous accompagner</p>
					</div>


				</div>
			</div>

			<div class="flex items-center justify-center flex-col w-full bg-[#102C26] bg-opacity-30 py-4 px-3">
				<div class="flex items-center justify-center flex-col">
					<h1 class="text-3xl font-semibold p-3">Ils nous font confiance</h1>
					<h3 class="text-md">Découvrez les témoignages de nos clients</h3>
				</div>

				<div class="p-4 w-full">
					<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					    	<div class="bg-white p-4 rounded-xl">
								<div class="flex items-center gap-2">
									<img src="images/resto.png" class="rounded-full w-10 h-10 objectif-cover">
									<div>
										<h2 class="text-lg font-semibold">KINKIN Ariel</h2>
										<h5 class="text-md">Fondateur - Sofitel</h5>
									</div>
								</div>	

								<p class="text-gray-500 text-sm pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				    		
					    	</div>
					    </div>

					    <div class="carousel-item">
					    	<div class="bg-white p-4 rounded-xl">
								<div class="flex items-center gap-2">
									<img src="images/resto.png" class="rounded-full w-10 h-10 objectif-cover">
									<div>
										<h2 class="text-lg font-semibold">KINKIN Ariel</h2>
										<h5 class="text-md">Fondateur - Sofitel</h5>
									</div>
								</div>	

								<p class="text-gray-500 text-sm pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				    		
					    	</div>
					    </div>
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>
					</div>
				</div>
			</div>

			<div class="flex items-center justify-center flex-col w-full bg-white py-4 px-3">
				<div class="flex items-center justify-center flex-col">
					<h1 class="text-3xl font-semibold p-3">Choisissez votre formule</h1>
					<h3 class="text-md">Des tarifs adaptés à tous les établissements</h3>
				</div>

				<div class="flex flex-wrap lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-3 grid p-4 gap-4">
					<div class="bg-[#102C26] bg-opacity-10 p-3 rounded-xl gap-4 flex items-center justify-center flex-col">
						<div class="w-full flex-col flex items-center justify-center">
							<h1 class="font-semibold">Découverte</h1>	
							<h1 class="text-3xl font-semibold">Gratuit</h1>	
							<h1>Pour commencer</h1>	
						</div>

						<div class="text-md">
							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>1 Etablissement</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Gestion des commandes</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Gestion des Réservations</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Support par mail</h2>
							</div>
						</div>

						<button class="rounded-full border border-[#102C26] text-black py-2 px-3">Commencer gratuitement</button>
					</div>

					<div class="bg-[#102C26] bg-opacity-50 scale-105 p-3 rounded-xl gap-4 flex items-center justify-center flex-col">
						<div class="w-full flex-col flex items-center justify-center">
							<h1 class="font-semibold">Pro</h1>	
							<h1 class="text-3xl font-semibold">29$/mois</h1>	
							<h1>Pour les professionnels</h1>	
						</div>

						<div class="text-md">
							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Etablissements illimités</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Toutes les fonctionnalités</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Rapports avancés</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Support prioritaire</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Mode hors ligne</h2>
							</div>
						</div>

						<button class="rounded-full bg-[#102C26] text-white py-2 px-3">Ajouter votre établissement</button>
					</div>

					<div class="bg-[#102C26] bg-opacity-10 p-3 rounded-xl gap-4 flex items-center justify-center flex-col">
						<div class="w-full flex-col flex items-center justify-center">
							<h1 class="font-semibold">Entreprise</h1>	
							<h1 class="text-3xl font-semibold">Sur devis</h1>	
							<h1>Pour les grandes chaînes</h1>	
						</div>

						<div class="text-md">
							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Solution personnalisée</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Intégration sur mesure</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Formation dédiée</h2>
							</div>

							<div class="flex items-center gap-2">
								<i class="ri-check-line"></i>
								<h2>Support 24/7</h2>
							</div>
						</div>

						<button class="rounded-full border border-[#102C26] text-black py-2 px-3">Nous contacter</button>
					</div>
				</div>
			</div>

			<div class="flex items-center justify-center flex-col w-full bg-[#102C26] py-4 px-3">
				<div class="flex items-center justify-center flex-col gap-4">
					<h1 class="text-3xl font-semibold text-gray-500">Prêt à digitaliser votre établissement ?</h1>
					<h3 class="text-md text-gray-500">Rejoignez les centaines d'établissements qui nous font déjà confiance</h3>
					<button class="rounded-full bg-white text-[#102C26] py-2 px-3">Ajouter votre établissement</button>
					<h4 class="text-sm text-gray-500">Essai gratuit 14 jours • Aucun engagement</h4>
				</div>
			</div>

			<footer class="flex items-center justify-center flex-col w-full bg-black p-8 ">
				 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		            <div class="grid md:grid-cols-4 gap-8">
		                <div>
		                    <div class="text-2xl font-['Pacifico'] text-[#102C26] mb-4">SmartResto-Hotel</div>
		                    <p class="text-gray-400 mb-6">La solution tout-en-un pour gérer votre restaurant et hôtel avec simplicité et efficacité.</p>
		                    <div class="flex space-x-4">
		                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 !rounded-full hover:bg-primary transition-colors">
		                            <i class="ri-facebook-fill"></i>
		                        </a>
		                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 !rounded-full hover:bg-primary transition-colors">
		                            <i class="ri-twitter-fill"></i>
		                        </a>
		                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 !rounded-full hover:bg-primary transition-colors">
		                            <i class="ri-linkedin-fill"></i>
		                        </a>
		                    </div>
		                </div>
		                
		                <div>
		                    <h4 class="text-lg font-semibold mb-4">Produit</h4>
		                    <ul class="space-y-2 text-gray-400">
		                        <li><a href="#" class="hover:text-white transition-colors">Fonctionnalités</a></li>
		                        <li><a href="#" class="hover:text-white transition-colors">Tarifs</a></li>
		                        <li><a href="#" class="hover:text-white transition-colors">Démo</a></li>
		                        <li><a href="#" class="hover:text-white transition-colors">API</a></li>
		                    </ul>
		                </div>
		                
		                <div>
		                    <h4 class="text-lg font-semibold mb-4">Support</h4>
		                    <ul class="space-y-2 text-gray-400">
		                        <li><a href="#" class="hover:text-white transition-colors">Centre d'aide</a></li>
		                        <li><a href="#" class="hover:text-white transition-colors">Formation</a></li>
		                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
		                        <li><a href="#" class="hover:text-white transition-colors">Status</a></li>
		                    </ul>
		                </div>
		                
		                <div>
		                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
		                    <ul class="space-y-2 text-gray-400">
		                        <li class="flex items-center">
		                            <i class="ri-phone-line mr-2"></i>
		                            +33 1 23 45 67 89
		                        </li>
		                        <li class="flex items-center">
		                            <i class="ri-mail-line mr-2"></i>
		                            contact@smartresto-hotel.fr
		                        </li>
		                        <li class="flex items-center">
		                            <i class="ri-map-pin-line mr-2"></i>
		                            Paris, France
		                        </li>
		                    </ul>
		                </div>
		            </div>
		            
		            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
		                <p>© 2026 SmartResto-Hotel. Tous droits réservés.</p>
		            </div>
		        </div>		
			</footer>



		</div>
	</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
	document.addEventListener('DOMContentLoaded', function(){
		const btnMenu = document.querySelector('.btnMenu');
		const listMenu = document.querySelector('.listMenu');

		btnMenu.addEventListener('click', function(){
			listMenu.classList.toggle('hidden');
		})
	})
</script>
</html>