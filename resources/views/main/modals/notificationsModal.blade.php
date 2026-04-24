	<!-- Zone de notification -->
    <div class="zone-2 hidden m-1 rounded-lg right-0 bg-black/50 text-white absolute top-0 z-50 h-full p-2 backdrop-blur-md sm:w-full lg:w-1/4 md:w-2/4" >
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
	<!-- Zone de notification -->