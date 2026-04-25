@extends('main.layouts.app')
@section('content')   
	        
	        <!-- Main Content -->
	        <div class=" flex-1 flex flex-col overflow-hidden">
	            
	            <!-- Dashboard Content -->
	            <main class="pt-20 flex-1 overflow-y-auto p-6">
	            	<div class="">
				        <div class="flex items-center justify-between">
				            <div class="flex items-center gap-4">
				                <h1 class="text-2xl font-semibold text-white">Gestions des commandes</h1>
				            </div>
				            
				            <!-- Step Indicator -->
				            <div class="flex items-center gap-2">
								<button type="button" id="addOrderBtn" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors text-sm font-medium whitespace-nowrap !rounded-button">
				                    Nouvelle commande
				                </button>

				            </div>
				        </div>
				    </div>

            	    <main class="lg:p-6 md:p-2">
				        <!-- Kanban Board -->
				        <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-6 min-h-screen">
				            <!-- En Attente Column -->
				            <div class="bg-white/10 rounded-xl shadow-sm">
				                <div class="p-4">
				                    <div class="flex items-center justify-between">
				                        <div class="flex items-center">
				                            <span class="text-lg mr-2">📥</span>
				                            <h3 class="font-semibold text-white">En Attente</h3>
				                        </div>
				                        <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2 py-1 rounded-full">3</span>
				                    </div>
				                </div>
				                <div class="p-4 space-y-3">
				                    <!-- Order Card 1 -->
				                    <div class="cards bg-orange-900/30 rounded-lg p-4 cursor-pointer hover:shadow-md transition-shadow" draggable="true">
				                        <div class="flex items-start justify-between mb-2">
				                            <div class="flex items-center">
				                                <span class="bg-orange-500 text-white text-sm font-bold px-2 py-1 rounded">T12</span>
				                                <div class="ml-3">
				                                    <p class="font-medium text-gray-300">Sophie Martin</p>
				                                    <p class="text-xs text-gray-400">14:32</p>
				                                </div>
				                            </div>
				                            <div class="w-6 h-6 flex items-center justify-center">
				                                <i class="ri-user-smile-line text-gray-400"></i>
				                            </div>
				                        </div>
				                        <div class="flex items-center justify-between text-sm">
				                            <span class="text-gray-400">4 articles</span>
				                            <span class="font-semibold text-white">42,50 €</span>
				                        </div>
				                    </div>
				                </div>
				            </div>

				            <!-- En Préparation Column -->
				            <div class="bg-white/10 rounded-xl shadow-sm">
				                <div class="p-4">
				                    <div class="flex items-center justify-between">
				                        <div class="flex items-center">
				                            <span class="text-lg mr-2">👨&zwj;🍳</span>
				                            <h3 class="font-semibold text-white">En Préparation</h3>
				                        </div>
				                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded-full">2</span>
				                    </div>
				                </div>
				                <div class="p-4 space-y-3">
				                    <!-- Order Card 1 -->
				                    <div class="cards bg-blue-900/30 rounded-lg p-4 cursor-pointer hover:shadow-md transition-shadow" draggable="true">
				                        <div class="flex items-start justify-between mb-2">
				                            <div class="flex items-center">
				                                <span class="bg-blue-500 text-white text-sm font-bold px-2 py-1 rounded">T03</span>
				                                <div class="ml-3">
				                                    <p class="font-medium text-white">Pierre Leroy</p>
				                                    <p class="text-xs text-gray-500">14:15</p>
				                                </div>
				                            </div>
				                            <div class="w-6 h-6 flex items-center justify-center">
				                                <i class="ri-user-smile-line text-gray-400"></i>
				                            </div>
				                        </div>
				                        <div class="flex items-center justify-between text-sm">
				                            <span class="text-gray-600">3 articles</span>
				                            <span class="font-semibold text-white">35,80 €</span>
				                        </div>
				                        <div class="mt-2 text-xs text-blue-600">⏱️ 12 min</div>
				                    </div>

				                </div>
				            </div>

				            <!-- Prêt à Servir Column -->
				            <div class="bg-white/10 rounded-xl shadow-sm ">
				                <div class="p-4">
				                    <div class="flex items-center justify-between">
				                        <div class="flex items-center">
				                            <span class="text-lg mr-2">✅</span>
				                            <h3 class="font-semibold text-white">Prêt à Servir</h3>
				                        </div>
				                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">4</span>
				                    </div>
				                </div>
				                <div class="p-4 space-y-3">
				                    <!-- Order Card 1 -->
				                    <div class="cards bg-green-900/30 rounded-lg p-4 cursor-pointer hover:shadow-md transition-shadow" draggable="true">
				                        <div class="flex items-start justify-between mb-2">
				                            <div class="flex items-center">
				                                <span class="bg-green-500 text-white text-sm font-bold px-2 py-1 rounded">T07</span>
				                                <div class="ml-3">
				                                    <p class="font-medium text-white">Antoine Bernard</p>
				                                    <p class="text-xs text-gray-500">14:05</p>
				                                </div>
				                            </div>
				                            <div class="w-6 h-6 flex items-center justify-center">
				                                <i class="ri-user-smile-line text-gray-400"></i>
				                            </div>
				                        </div>
				                        <div class="flex items-center justify-between text-sm">
				                            <span class="text-gray-600">2 articles</span>
				                            <span class="font-semibold text-white">24,90 €</span>
				                        </div>
				                    </div>
				                </div>
				            </div>

				            <!-- Servi Column -->
				            <div class="bg-white/10 rounded-xl shadow-sm">
				                <div class="p-4">
				                    <div class="flex items-center justify-between">
				                        <div class="flex items-center">
				                            <span class="text-lg mr-2">🍽️</span>
				                            <h3 class="font-semibold text-white">Servi</h3>
				                        </div>
				                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-1 rounded-full">5</span>
				                    </div>
				                </div>
				                <div class="p-4 space-y-3">
				                    <!-- Order Card 1 -->
				                    <div class="cards bg-white/10  rounded-lg p-4 cursor-pointer hover:shadow-md transition-shadow" draggable="true">
				                        <div class="flex items-start justify-between mb-2">
				                            <div class="flex items-center">
				                                <span class="bg-gray-500 text-white text-sm font-bold px-2 py-1 rounded">T01</span>
				                                <div class="ml-3">
				                                    <p class="font-medium text-white">Thomas Roux</p>
				                                    <p class="text-xs text-gray-400">13:45</p>
				                                </div>
				                            </div>
				                            <div class="w-6 h-6 flex items-center justify-center">
				                                <i class="ri-check-line text-green-500"></i>
				                            </div>
				                        </div>
				                        <div class="flex items-center justify-between text-sm">
				                            <span class="text-gray-400">3 articles</span>
				                            <span class="font-semibold text-white">32,70 €</span>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </main>
	            </main>
	        </div>
	    </div>

	    <!-- Modal Nouvelle Commande -->
	    @include('main.modals.addCommande')

	    <!-- Order Detail Modal -->
	    <div id="orderDetailModal" class=" absolute inset-0 bg-black bg-opacity-50 hidden backdrop-blur-md z-50 flex items-center justify-center">
	        <div class="bg-white/10 rounded-xl shadow-2xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
	            <!-- Modal Header -->
	            <div class="flex items-center justify-between p-6 ">
	                <h2 class="text-xl font-semibold text-white">Détail Commande #T12</h2>
	                <button id="closeDetailModal" class="text-gray-400 hover:text-gray-600">
	                    <i class="ri-close-line text-xl"></i>
	                </button>
	            </div>

	            <!-- Modal Content -->
	            <div class="p-6">
	                <!-- Order Info -->
	                <div class="bg-white/10 rounded-lg p-4 mb-6">
	                    <div class="grid grid-cols-2 gap-4">
	                        <div>
	                            <p class="text-sm text-gray-400">Client</p>
	                            <p class="font-semibold text-gray-300">Sophie Martin</p>
	                        </div>
	                        <div>
	                            <p class="text-sm text-gray-400">Heure</p>
	                            <p class="font-semibold text-gray-300">14:32</p>
	                        </div>
	                        <div>
	                            <p class="text-sm text-gray-400">Table</p>
	                            <p class="font-semibold text-gray-300">T12</p>
	                        </div>
	                        <div>
	                            <p class="text-sm text-gray-400">Serveur</p>
	                            <p class="font-semibold text-gray-300">Marie Dubois</p>
	                        </div>
	                    </div>
	                </div>

	                <!-- Order Items -->
	                <div class="space-y-3 mb-6">
	                    <h3 class="font-semibold text-white">Articles commandés</h3>
	                    
	                    <div class="flex items-center justify-between bg-white/10 p-3 rounded-lg">
	                        <div class="flex-1">
	                            <p class="font-medium text-gray-400">Salade César</p>
	                            <p class="text-sm text-gray-400">Quantité: 1</p>
	                        </div>
	                        <div class="flex items-center space-x-3">
	                            <span class="text-sm font-semibold text-gray-400">12,50 €</span>
	                            <span class="bg-green-100 text-green-900/30 text-xs px-2 py-1 rounded-full">Prêt</span>
	                        </div>
	                    </div>

	                    <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
	                        <div class="flex-1">
	                            <p class="font-medium text-gray-400">Saumon grillé</p>
	                            <p class="text-sm text-gray-400">Quantité: 1</p>
	                        </div>
	                        <div class="flex items-center space-x-3">
	                            <span class="text-sm font-semibold text-gray-400">22,00 €</span>
	                            <span class="bg-blue-100 text-blue-900/30 text-xs px-2 py-1 rounded-full">En préparation</span>
	                        </div>
	                    </div>

	                    <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
	                        <div class="flex-1">
	                            <p class="font-medium text-gray-400">Eau minérale</p>
	                            <p class="text-sm text-gray-400">Quantité: 2</p>
	                        </div>
	                        <div class="flex items-center space-x-3">
	                            <span class="text-sm font-semibold text-gray-400">8,00 €</span>
	                            <span class="bg-green-100 text-green-900/30 text-xs px-2 py-1 rounded-full">Prêt</span>
	                        </div>
	                    </div>
	                </div>

	                <!-- Total -->
	                <div class=" pt-2 text-white mb-6">
	                    <div class="flex justify-between items-center text-lg font-semibold">
	                        <span>Total</span>
	                        <span>42,50 €</span>
	                    </div>
	                </div>

	                <!-- Actions -->
	                <div class="flex flex-col md:flex-row gap-2">
	                    <button class=" w-full flex-1 bg-green-600 text-white py-3 rounded-lg font-medium hover:bg-green-700 transition-colors !rounded-button whitespace-nowrap">
	                        Marquer comme prêt
	                    </button>
	                    <button class=" w-full flex-1 bg-primary text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors !rounded-button whitespace-nowrap">
	                        Marquer comme servi
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- interface cuisine -->
	    <div id="kitchenModal" class="hidden absolute inset-0 bg-black backdrop-blur-md bg-opacity-50 z-50 flex items-center justify-center">
	    	<div class="bg-white/10 rounded-xl shadow-2xl w-full max-w-6xl mx-4 max-h-[90vh] overflow-y-auto">
	            <div class="flex items-center justify-between p-3">
	                <h2 class="text-xl font-semibold text-white flex items-center">
	                    <i class="ri-restaurant-line mr-2"></i>
	                    Interface Cuisine
	                </h2>
	                <button id="closeKitchenModal" class="text-gray-400 hover:text-gray-500">
	                    <i class="ri-close-line text-xl"></i>
	                </button>
	            </div>
	            
	            <div class="p-1">
	                <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-6 mb-6">
	                    <div class="bg-red-900/30 rounded-xl p-2">
	                        <h3 class="font-semibold text-red-500 mb-4 flex items-center">
	                            <i class="ri-alarm-warning-line mr-2"></i>
	                            Commandes Urgentes
	                        </h3>
	                        <div class="space-y-3">
	                            <div class="bg-white/10 rounded-lg p-3">
	                                <div class="flex justify-between items-center mb-2">
	                                    <span class="font-semibold text-white">Table 3</span>
	                                    <span class="bg-red-100 text-red-500 text-xs px-2 py-1 rounded-full">⏰ 18 min</span>
	                                </div>
	                                <div class="text-sm text-gray-400">
	                                    <p>• Saumon grillé x1</p>
	                                    <p>• Risotto aux champignons x1</p>
	                                </div>
	                                <button class="mt-2 w-full bg-red-600 text-white py-2 rounded-lg text-sm font-medium hover:bg-red-700 !rounded-button whitespace-nowrap">
	                                    Marquer prêt
	                                </button>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="bg-orange-900/30 rounded-xl p-2">
	                        <h3 class="font-semibold text-orange-500 mb-4 flex items-center">
	                            <i class="ri-time-line mr-2"></i>
	                            En Préparation
	                        </h3>
	                        <div class="space-y-3">
	                            <div class="bg-white/10 rounded-lg p-3">
	                                <div class="flex justify-between items-center mb-2">
	                                    <span class="font-semibold text-white">Table 15</span>
	                                    <span class="bg-orange-100 text-orange-500 text-xs px-2 py-1 rounded-full">⏰ 8 min</span>
	                                </div>
	                                <div class="text-sm text-gray-40000">
	                                    <p>• Entrecôte grillée x2</p>
	                                    <p>• Salade César x1</p>
	                                </div>
	                                <button class="mt-2 w-full bg-orange-600 text-white py-2 rounded-lg text-sm font-medium hover:bg-orange-700 !rounded-button whitespace-nowrap">
	                                    Marquer prêt
	                                </button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	                <div class="bg-green-900/50 rounded-xl p-2">
	                    <h3 class="font-semibold text-green-500 mb-4 flex items-center">
	                        <i class="ri-check-double-line mr-2"></i>
	                        Prêt à Servir
	                    </h3>
	                    <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-4">
	                        <div class="bg-white/10 rounded-lg p-3">
	                            <div class="flex justify-between items-center mb-2">
	                                <span class="font-semibold text-white">Table 7</span>
	                                <span class="bg-green-100 text-green-500 text-xs px-2 py-1 rounded-full">✅ Prêt</span>
	                            </div>
	                            <div class="text-sm text-gray-400">
	                                <p>• Soupe à l'oignon x1</p>
	                                <p>• Tartare de bœuf x1</p>
	                            </div>
	                        </div>
	                        <div class="bg-white/10 rounded-lg p-3">
	                            <div class="flex justify-between items-center mb-2">
	                                <span class="font-semibold text-white">Table 11</span>
	                                <span class="bg-green-100 text-green-500 text-xs px-2 py-1 rounded-full">✅ Prêt</span>
	                            </div>
	                            <div class="text-sm text-gray-400">
	                                <p>• Pizza Margherita x1</p>
	                                <p>• Salade mixte x2</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <button id="kitchenModalBtn" class="absolute bottom-5 right-5 bg-black/50 text-white px-4 py-3 rounded-full backdrop-blur-md shadow-lg hover:shadow-xl transition-all !rounded-button whitespace-nowrap">
	    	<i class="ri-restaurant-line mr-2"></i>Vue Cuisine
	    </button>
	

	<script id="modal-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            const addOrderBtn = document.getElementById('addOrderBtn');
            const newOrderModal = document.getElementById('newOrderModal');

            const kitchenModalBtn = document.getElementById('kitchenModalBtn');
            const kitchenModal = document.getElementById('kitchenModal');
            const closeKitchenModal = document.getElementById('closeKitchenModal');

            const closeModal = document.getElementById('closeModal');
            const orderDetailModal = document.getElementById('orderDetailModal');
            const closeDetailModal = document.getElementById('closeDetailModal');
            const cards = document.querySelectorAll('.cards');

            addOrderBtn.addEventListener('click', function() {
                newOrderModal.classList.remove('hidden');
            });

            kitchenModalBtn.addEventListener('click', function() {
                kitchenModal.classList.remove('hidden');
            });

            closeModal.addEventListener('click', function() {
                newOrderModal.classList.add('hidden');
            });

            closeKitchenModal.addEventListener('click', function() {
                kitchenModal.classList.add('hidden');
            });

            closeDetailModal.addEventListener('click', function() {
                orderDetailModal.classList.add('hidden');
            });

            newOrderModal.addEventListener('click', function(e) {
                if (e.target === newOrderModal) {
                    newOrderModal.classList.add('hidden');
                }
            });

            kitchenModal.addEventListener('click', function(e) {
                if (e.target === kitchenModal) {
                    kitchenModal.classList.add('hidden');
                }
            });

            orderDetailModal.addEventListener('click', function(e) {
                if (e.target === orderDetailModal) {
                    orderDetailModal.classList.add('hidden');
                }
            });

            document.querySelectorAll('.cards').forEach(card => {
                card.addEventListener('click', function() {
                    orderDetailModal.classList.remove('hidden');
                });
            });
        });
    </script>

    <script id="table-selection">
        document.addEventListener('DOMContentLoaded', function() {
            const tableBtns = document.querySelectorAll('.table-btn');
            
            tableBtns.forEach(btn => {
                if (!btn.classList.contains('cursor-not-allowed')) {
                    btn.addEventListener('click', function() {
                        tableBtns.forEach(b => {
                            if (!b.classList.contains('cursor-not-allowed')) {
                                b.classList.remove('border-primary', 'bg-primary');
                                b.classList.add('border-gray-200');
                            }
                        });
                        
                        this.classList.remove('border-gray-200');
                        this.classList.add('border-primary', 'bg-primary');
                    });
                }
            });
        });
    </script>


	@include('components.notification')

    <script id="drag-drop">
        document.addEventListener('DOMContentLoaded', function() {
            let draggedElement = null;

            document.querySelectorAll('.bg-orange-50, .bg-blue-50, .bg-green-50, .bg-gray-50').forEach(card => {
                card.draggable = true;
                
                card.addEventListener('dragstart', function(e) {
                    draggedElement = this;
                    this.style.opacity = '0.5';
                });

                card.addEventListener('dragend', function(e) {
                    this.style.opacity = '1';
                    draggedElement = null;
                });
            });

            document.querySelectorAll('.bg-white.rounded-xl.shadow-sm').forEach(column => {
                column.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    this.classList.add('ring-2', 'ring-primary', 'ring-opacity-50');
                });

                column.addEventListener('dragleave', function(e) {
                    this.classList.remove('ring-2', 'ring-primary', 'ring-opacity-50');
                });

                column.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.classList.remove('ring-2', 'ring-primary', 'ring-opacity-50');
                    
                    if (draggedElement) {
                        const dropZone = this.querySelector('.space-y-3');
                        if (dropZone) {
                            dropZone.appendChild(draggedElement);
                            
                            const columnTitle = this.querySelector('h3').textContent;
                            updateCardStatus(draggedElement, columnTitle);
                            showNotification(`Commande déplacée vers ${columnTitle}`, 'success');
                        }
                    }
                });
            });

            function updateCardStatus(card, status) {
                card.className = card.className.replace(/bg-(orange|blue|green|gray)-50/, '');
                card.className = card.className.replace(/border-(orange|blue|green|gray)-200/, '');
                
                const tableSpan = card.querySelector('span[class*="bg-"]');
                
                switch(status) {
                    case 'En Attente':
                        card.classList.add('bg-orange-50', 'border-orange-200');
                        tableSpan.className = 'bg-orange-500 text-white text-sm font-bold px-2 py-1 rounded';
                        break;
                    case 'En Préparation':
                        card.classList.add('bg-blue-50', 'border-blue-200');
                        tableSpan.className = 'bg-blue-500 text-white text-sm font-bold px-2 py-1 rounded';
                        break;
                    case 'Prêt à Servir':
                        card.classList.add('bg-green-50', 'border-green-200');
                        tableSpan.className = 'bg-green-500 text-white text-sm font-bold px-2 py-1 rounded';
                        break;
                    case 'Servi':
                        card.classList.add('bg-gray-50', 'border-gray-200');
                        tableSpan.className = 'bg-gray-500 text-white text-sm font-bold px-2 py-1 rounded';
                        break;
                }
            }
        });
    </script>
@endsection