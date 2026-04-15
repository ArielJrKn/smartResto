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
	        <div class="w-64 pt-10 bg-white/10 shadow-lg flex flex-col hidden lg:block">
	            <nav class="flex-1 p-4">
	                <ul class="space-y-2">
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg bg-white/10 text-white">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-home-line"></i></div>
	                        Accueil
	                    </a></li>
	                    <li><a href="{{route('employes')}}" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg bg-white/10 text-[#FF6B35]">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-group-line"></i></div>
	                        Mes Employés
	                    </a></li>
	                    <li><a href="commandes.html" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-shopping-cart-line"></i></div>
	                        Commandes
	                    </a></li>
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-calendar-line"></i></div>
	                        Réservations
	                    </a></li>
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-table-line"></i></div>
	                        Tables
	                    </a></li>
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-hotel-bed-line"></i></div>
	                        Chambres
	                    </a></li>
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-restaurant-line"></i></div>
	                        Menu
	                    </a></li>
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-archive-line"></i></div>
	                        Stocks
	                    </a></li>
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-bar-chart-line"></i></div>
	                        Rapports
	                    </a></li>
	                    <li><a href="#" class="flex items-center p-3 text-gray-700 dark:text-gray-300 hover:bg-white/30 rounded-lg">
	                        <div class="w-5 h-5 flex items-center justify-center mr-3"><i class="ri-settings-line"></i></div>
	                        Paramètres
	                    </a></li>
	                </ul>
	            </nav>
	        </div> 