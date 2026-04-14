@extends('main.layouts.app')
@section('content')   
    <div class=" flex-1 flex flex-col overflow-hidden">
        <!-- Dashboard Content -->
        <main class="pt-20 flex-1 overflow-y-auto p-6">
            <!-- Statistics Cards -->
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Chiffre d'affaires</p>
                            <p class="text-2xl font-bold text-white">2 847 €</p>
                            <p class="text-sm text-green-600 dark:text-green-400">+12% vs hier</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center">
                            <div class="w-6 h-6 flex items-center justify-center text-green-600 dark:text-green-400">
                                <i class="ri-money-euro-circle-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Commandes en cours</p>
                            <p class="text-2xl font-bold text-white">18</p>
                            <p class="text-sm text-blue-600 dark:text-blue-400">6 en préparation</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                            <div class="w-6 h-6 flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <i class="ri-shopping-cart-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Taux d'occupation</p>
                            <p class="text-2xl font-bold text-white">78%</p>
                            <p class="text-sm text-orange-600 dark:text-orange-400">Tables: 85% | Chambres: 71%</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center">
                            <div class="w-6 h-6 flex items-center justify-center text-orange-600 dark:text-orange-400">
                                <i class="ri-pie-chart-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Stocks faibles</p>
                            <p class="text-2xl font-bold text-white">7</p>
                            <p class="text-sm text-red-600 dark:text-red-400">Réapprovisionnement urgent</p>
                        </div>
                        <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                            <div class="w-6 h-6 flex items-center justify-center text-red-600 dark:text-red-400">
                                <i class="ri-alert-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Restaurant & Hotel Sections -->
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-8 mb-8">
                <!-- Restaurant Section -->
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl font-bold text-white">Restaurant</h2>
                    	                        
                    <!-- Recent Orders -->
                    <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                        <h3 class="text-lg font-semibold text-white mb-4">Commandes Récentes</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
                                <div>
                                    <p class="font-medium text-white">Table 12 - Salade César</p>
                                    <p class="text-sm text-gray-500">14:32</p>
                                </div>
                                <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-800 dark:text-orange-300 text-sm rounded-full">En attente</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
                                <div>
                                    <p class="font-medium text-white">Table 5 - Bœuf Bourguignon</p>
                                    <p class="text-sm text-gray-500">14:28</p>
                                </div>
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 text-sm rounded-full">Préparation</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
                                <div>
                                    <p class="font-medium text-white">Table 8 - Tarte Tatin</p>
                                    <p class="text-sm text-gray-500">14:25</p>
                                </div>
                                <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 text-sm rounded-full">Prêt</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tables Status -->
                    <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                        <h3 class="text-lg font-semibold text-white mb-4">État des Tables</h3>
                        <div class="grid grid-cols-6 gap-2">
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">1</div>
                            <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white font-bold">2</div>
                            <div class="w-12 h-12 bg-gray-300 dark:bg-gray-600 rounded-lg flex items-center justify-center text-gray-700 dark:text-gray-300 font-bold">3</div>
                            <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white font-bold">4</div>
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">5</div>
                            <div class="w-12 h-12 bg-gray-300 dark:bg-gray-600 rounded-lg flex items-center justify-center text-gray-700 dark:text-gray-300 font-bold">6</div>
                            <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white font-bold">7</div>
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">8</div>
                            <div class="w-12 h-12 bg-gray-300 dark:bg-gray-600 rounded-lg flex items-center justify-center text-gray-700 dark:text-gray-300 font-bold">9</div>
                            <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white font-bold">10</div>
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold">11</div>
                            <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white font-bold">12</div>
                        </div>
                        <div class="flex items-center justify-center space-x-4 mt-4 text-sm">
                            <div class="flex items-center"><div class="w-3 h-3 bg-green-500 rounded mr-2"></div>Libre</div>
                            <div class="flex items-center"><div class="w-3 h-3 bg-red-500 rounded mr-2"></div>Occupée</div>
                            <div class="flex items-center"><div class="w-3 h-3 bg-gray-300 dark:bg-gray-600 rounded mr-2"></div>Réservée</div>
                        </div>
                    </div>
                </div>
                
                <!-- Hotel Section -->
                <div class="space-y-2">
                    <h2 class="text-xl font-bold text-white">Hôtel</h2>
                    
                    <!-- Reservations Calendar -->
                    <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                        <h3 class="text-lg font-semibold text-white mb-4">Calendrier des Réservations</h3>
                        <div class="grid grid-cols-7 gap-1 text-center text-sm">
                            <div class="font-semibold text-gray-500 p-2">Lun</div>
                            <div class="font-semibold text-gray-500 p-2">Mar</div>
                            <div class="font-semibold text-gray-500 p-2">Mer</div>
                            <div class="font-semibold text-gray-500 p-2">Jeu</div>
                            <div class="font-semibold text-gray-500 p-2">Ven</div>
                            <div class="font-semibold text-gray-500 p-2">Sam</div>
                            <div class="font-semibold text-gray-500 p-2">Dim</div>
                            
                            <div class="p-2 text-gray-400">10</div>
                            <div class="p-2 text-gray-400">11</div>
                            <div class="p-2 text-gray-400">12</div>
                            <div class="p-2 text-gray-400">13</div>
                            <div class="p-2 text-gray-400">14</div>
                            <div class="p-2 text-gray-400">15</div>
                            <div class="p-2 bg-primary text-white rounded">16</div>
                            
                            <div class="p-2 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 rounded">17</div>
                            <div class="p-2 bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 rounded">18</div>
                            <div class="p-2">19</div>
                            <div class="p-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300 rounded">20</div>
                            <div class="p-2">21</div>
                            <div class="p-2 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 rounded">22</div>
                            <div class="p-2">23</div>
                        </div>
                    </div>
                    
                    <!-- Check-ins/outs -->
                    <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                        <h3 class="text-lg font-semibold text-white mb-4">Check-ins/outs du Jour</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-medium text-green-600 dark:text-green-400 mb-2">Arrivées (Check-in)</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center p-2 bg-green-500/20 rounded">
                                        <span class="text-white">Pierre Martin - Ch. 205</span>
                                        <span class="text-sm text-white">15:00</span>
                                    </div>
                                    <div class="flex justify-between items-center p-2 bg-green-500/20 rounded">
                                        <span class="text-white">Sophie Laurent - Ch. 312</span>
                                        <span class="text-sm text-white">16:30</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-medium text-red-600 dark:text-red-400 mb-2">Départs (Check-out)</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center p-2 bg-red-500/50 rounded">
                                        <span class="text-white">Jean Durand - Ch. 108</span>
                                        <span class="text-sm text-white">11:00</span>
                                    </div>
                                    <div class="flex justify-between items-center p-2 bg-red-500/50 rounded">
                                        <span class="text-white">Anne Moreau - Ch. 204</span>
                                        <span class="text-sm text-white">12:15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Room Occupancy -->
                    <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                        <h3 class="text-lg font-semibold text-white mb-4">Taux d'Occupation Chambres</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-gray-500">Standard (20 chambres)</span>
                                    <span class="text-sm font-medium text-white">75%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-primary h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-gray-500">Supérieure (10 chambres)</span>
                                    <span class="text-sm font-medium text-white">80%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-secondary h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-gray-500">Suite (5 chambres)</span>
                                    <span class="text-sm font-medium text-white">60%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-orange-500 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Activities & Quick Actions -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                <!-- Recent Activities Timeline -->
                <div class="lg:col-span-2 bg-white/10 p-6 rounded-2xl shadow-sm">
                    <h3 class="text-lg font-semibold text-white mb-6">Activités Récentes</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <div class="w-4 h-4 flex items-center justify-center text-green-600 dark:text-green-400">
                                    <i class="ri-shopping-cart-line"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-white">Nouvelle commande reçue - Table 12</p>
                                <p class="text-sm text-gray-500">Il y a 5 minutes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center">
                                <div class="w-4 h-4 flex items-center justify-center text-blue-600 dark:text-blue-400">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-white">Réservation confirmée - Chambre 205</p>
                                <p class="text-sm text-gray-500">Il y a 12 minutes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center">
                                <div class="w-4 h-4 flex items-center justify-center text-yellow-600 dark:text-yellow-400">
                                    <i class="ri-money-euro-circle-line"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-white">Paiement reçu - 127,50 €</p>
                                <p class="text-sm text-gray-500">Il y a 18 minutes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-full flex items-center justify-center">
                                <div class="w-4 h-4 flex items-center justify-center text-red-600 dark:text-red-400">
                                    <i class="ri-logout-circle-line"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-white">Check-out effectué - Chambre 108</p>
                                <p class="text-sm text-gray-500">Il y a 25 minutes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center">
                                <div class="w-4 h-4 flex items-center justify-center text-purple-600 dark:text-purple-400">
                                    <i class="ri-alert-line"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-white">Stock faible - Saumon frais</p>
                                <p class="text-sm text-gray-500">Il y a 32 minutes</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="bg-white/10 p-6 rounded-2xl shadow-sm">
                    <h3 class="text-lg font-semibold text-white mb-6">Actions Rapides</h3>
                    <div class="space-y-4">
                        <button class="w-full bg-primary hover:bg-primary/90 text-white py-3 px-4 rounded-lg flex items-center justify-center space-x-2 whitespace-nowrap">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-add-line"></i>
                            </div>
                            <span>Nouvelle Commande</span>
                        </button>
                        
                        <button class="w-full bg-secondary hover:bg-secondary/90 text-white py-3 px-4 rounded-lg flex items-center justify-center space-x-2 whitespace-nowrap">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-calendar-line"></i>
                            </div>
                            <span>Nouvelle Réservation</span>
                        </button>
                        
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-3 px-4 rounded-lg flex items-center justify-center space-x-2 whitespace-nowrap">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-cash-line"></i>
                            </div>
                            <span>Caisse Ouverte</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
	    