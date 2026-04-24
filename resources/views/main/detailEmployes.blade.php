@extends('main.layouts.app')
@section('content')
	        
	        <!-- Main Content -->
	        <div class=" flex-1 flex flex-col overflow-hidden">
	            
	            <!-- Dashboard Content -->
	            <main class="pt-20 flex-1 overflow-y-auto p-6">
	            	    <!-- EN-TÊTE PROFIL -->
				    <div class="bg-white/10 rounded-2xl shadow-sm overflow-hidden mb-6">
				        <!-- Bannière de couverture -->
				        <div class="h-20 relative">
				            <button class="absolute top-3 right-3 bg-white/20 backdrop-blur hover:bg-white/30 text-white p-2 rounded-full transition">
				                <i class="ri-camera-line text-sm"></i>
				            </button>
				        </div>
				        
				        <!-- Photo et infos principales -->
				        <div class="px-6 pb-6 relative">
				            <div class="flex flex-col md:flex-row md:items-end gap-4 -mt-12">
				                <div class="relative">
				                    <img src="{{ $user->photo ? asset('storage/'.$user->photo) : 'https://randomuser.me/api/portraits/men/32.jpg' }}" alt="Photo" 
				                         class="w-28 h-28 rounded-full border-4 border-white shadow-lg object-cover">
				                    <button class="absolute bottom-1 right-1 bg-white rounded-full p-1.5 shadow-md hover:bg-gray-100">
				                        <i class="ri-camera-line text-gray-400 text-xs"></i>
				                    </button>
				                </div>
				                <div class="flex-1">
				                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
				                        <div class="flex flex-col">
				                            <h1 class="text-2xl font-bold text-white">{{$user->name}}</h1>
				                            <div class="flex items-center gap-2 mt-1">
				                                <span class="text-gray-400 text-sm px-3 py-1 rounded-full font-medium">{{$user->role->libelle}}</span>
				                                <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full flex items-center gap-1">
				                                    <i class="fas fa-circle text-[6px]"></i> Actif
				                                </span>
				                                <span class="bg-blue-100 text-blue-700 text-sm px-3 py-1 rounded-full">
				                                    ID: #EMP-001
				                                </span>
				                            </div>
				                        </div>
				                        <div class="flex gap-2">
				                            <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg transition flex items-center gap-2">
				                                <i class="fas fa-edit"></i> Modifier
				                            </button>
				                            <button class="border border-red-300 text-red-600 hover:bg-red-50 px-4 py-2 rounded-lg transition flex items-center gap-2">
				                                <i class="fas fa-trash-alt"></i> Supprimer
				                            </button>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
    
    <!-- GRILLE PRINCIPALE -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- COLONNE GAUCHE - INFOS PERSONNELLES -->
        <div class="space-y-6">
            <!-- Carte coordonnées -->
            <div class="bg-white/10 rounded-2xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-white flex items-center gap-2 mb-4">
                    <i class="fas fa-address-card text-secondary"></i>
                    Coordonnées
                </h3>
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <i class="ri-mail-line text-gray-400 mt-1 w-5"></i>
                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="text-white">{{$user->email}}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="ri-phone-line text-gray-400 mt-1 w-5"></i>
                        <div>
                            <p class="text-sm text-gray-500">Téléphone</p>
                            <p class="text-white">{{$user->telephone}}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="ri-map-pin-line text-gray-400 mt-1 w-5"></i>
                        <div>
                            <p class="text-sm text-gray-500">Adresse</p>
                            <p class="text-white">{{$user->adresse}}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="ri-calendar-line text-gray-400 mt-1 w-5"></i>
                        <div>
                            <p class="text-sm text-gray-500">Date de naissance</p>
                            <p class="text-white">{{$user->birthDate->isoFormat('dddd D MMMM YYYY')}} ({{$user->birthDate->age}} ans) </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carte professionnelle -->
            <div class="bg-white/10 rounded-2xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-white flex items-center gap-2 mb-4">
                    <i class="fas fa-briefcase text-secondary"></i>
                    Informations professionnelles
                </h3>
                <div class="space-y-3">
                    <div class="flex justify-between py-2 ">
                        <span class="text-white">Poste</span>
                        <span class="font-medium text-gray-400">{{$user->role->libelle}}</span>
                    </div>
                    <div class="flex justify-between py-2 ">
                        <span class="text-white">Date d'embauche</span>
                        <span class="font-medium text-gray-400">{{$user->dateApply->isoFormat('dddd D MMMM YYYY')}}</span>
                    </div>
                    <div class="flex justify-between py-2 ">
                        <span class="text-white">Type contrat</span>
                        <span class="font-medium text-gray-400">{{$user->contrat}}</span>
                    </div>
                    <div class="flex justify-between py-2 ">
                        <span class="text-white">Salaire brut</span>
                        <span class="font-medium text-green-600">{{$user->salary}} € / mois</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-white">Taux horaire</span>
                        <span class="font-medium text-gray-400">{{$user->tauxSalary}} €</span>
                    </div>
                </div>
            </div>
           
        </div>
        
        <!-- COLONNE DROITE -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- STATISTIQUES RAPIDES -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="bg-white/10 rounded-xl p-4 text-center shadow-sm">
                    <div class="text-secondary text-2xl mb-1"><i class="fas fa-chart-line"></i></div>
                    <div class="text-xl font-bold text-white">45.2k€</div>
                    <div class="text-xs text-gray-400">CA généré</div>
                    <div class="text-green-600 text-xs">↑ +12%</div>
                </div>
                <div class="bg-white/10 rounded-xl p-4 text-center shadow-sm">
                    <div class="text-secondary text-2xl mb-1"><i class="fas fa-clipboard-list"></i></div>
                    <div class="text-xl font-bold text-white">342</div>
                    <div class="text-xs text-gray-400">Commandes supervisées</div>
                </div>
                <div class="bg-white/10 rounded-xl p-4 text-center shadow-sm">
                    <div class="text-secondary text-2xl mb-1"><i class="fas fa-star"></i></div>
                    <div class="text-xl font-bold text-white">4.8</div>
                    <div class="text-xs text-gray-400">Note satisfaction</div>
                    <div class="text-yellow-500 text-xs">★★★★★</div>
                </div>
                <div class="bg-white/10 rounded-xl p-4 text-center shadow-sm">
                    <div class="text-secondary text-2xl mb-1"><i class="fas fa-clock"></i></div>
                    <div class="text-xl font-bold text-white">2 450h</div>
                    <div class="text-xs text-gray-400">Heures travaillées</div>
                </div>
            </div>
            
            <!-- ONGLETS NAVIGATION -->
            <div class="bg-white/10 rounded-2xl shadow-sm overflow-hidden">
                <div class="">
                    <div class="flex overflow-x-auto scrollbar-hide">
                        <button data-tab="informations" class="tab-btn active px-6 py-3 text-sm font-medium text-primary transition">
                            <i class="fas fa-chart-simple mr-2"></i> Performance
                        </button>
                        <button data-tab="planning" class="tab-btn px-6 py-3 text-sm font-medium text-gray-400 hover:text-gray-500 transition">
                            <i class="fas fa-calendar-week mr-2"></i> Planning
                        </button>
                        <button data-tab="presences" class="tab-btn px-6 py-3 text-sm font-medium text-gray-400 hover:text-gray-500 transition">
                            <i class="fas fa-clock mr-2"></i> Présences
                        </button>
                        <button data-tab="conges" class="tab-btn px-6 py-3 text-sm font-medium text-gray-400 hover:text-gray-500 transition">
                            <i class="fas fa-umbrella-beach mr-2"></i> Congés
                        </button>
                        <button data-tab="paie" class="tab-btn px-6 py-3 text-sm font-medium text-gray-400 hover:text-gray-500 transition">
                            <i class="fas fa-file-invoice-dollar mr-2"></i> Paie
                        </button>
                        <button data-tab="historique" class="tab-btn px-6 py-3 text-sm font-medium text-gray-400 hover:text-gray-500 transition">
                            <i class="fas fa-history mr-2"></i> Historique
                        </button>
                    </div>
                </div>
                
                <!-- CONTENU ONGLETS -->
                <div class="p-6">
                    <!-- Performance -->
                    <div class="tab-content" id="informations">
                        <canvas id="performanceChart" height="200" class="w-full"></canvas>
                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div class="bg-white/10 rounded-xl p-3">
                                <p class="text-xs text-gray-400">Meilleure performance</p>
                                <p class="font-semibold text-white">Décembre 2024</p>
                                <p class="text-gray-400">12 450€ CA</p>
                            </div>
                            <div class="bg-white/10 rounded-xl p-3">
                                <p class="text-xs text-gray-400">Objectif mensuel</p>
                                <p class="font-semibold text-white">85% atteint</p>
                                <div class="w-full bg-gray-400 rounded-full h-2 mt-1">
                                    <div class="bg-secondary h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content hidden" id="planning">
				        <div class="bg-white/10 rounded-lg shadow-sm p-6 mt-6">
				          <div class="flex items-center justify-between mb-6">
				            <h2 class="text-lg font-semibold text-white">Planning Hebdomadaire</h2>
				            <button onclick="openScheduleModal()"
				              class="px-4 py-2 bg-primary text-white rounded-lg font-medium text-sm hover:bg-green-600 transition-colors whitespace-nowrap">
				              + Ajouter plage
				            </button>
				          </div>
				          <div class="overflow-x-auto">
				            <div class="min-w-full">
				              <div class="grid grid-cols-8 gap-px bg-white/10 rounded-lg overflow-x-auto">
				                <div class="p-3 text-center font-medium text-gray-400">Heures</div>
				                <div class="p-3 text-center font-medium text-gray-400">Lun</div>
				                <div class="p-3 text-center font-medium text-gray-400">Mar</div>
				                <div class="p-3 text-center font-medium text-gray-400">Mer</div>
				                <div class="p-3 text-center font-medium text-gray-400">Jeu</div>
				                <div class="p-3 text-center font-medium text-gray-400">Ven</div>
				                <div class="p-3 text-center font-medium text-gray-400">Sam</div>
				                <div class="p-3 text-center font-medium text-gray-400">Dim</div>
				                <div class="p-3 text-center text-sm text-gray-400">08h-12h</div>
				                <div
				                  class="bg-blue-900/30 p-3 text-center text-xs font-medium text-blue-500 cursor-pointer hover:bg-blue-900">
				                  Matin</div>
				                <div
				                  class="bg-blue-900/30 p-3 text-center text-xs font-medium text-blue-500 cursor-pointer hover:bg-blue-900">
				                  Matin</div>
				                <div class="p-3"></div>
				                <div
				                  class="bg-blue-900/30 p-3 text-center text-xs font-medium text-blue-500 cursor-pointer hover:bg-blue-900">
				                  Matin</div>
				                <div
				                  class="bg-blue-900/30 p-3 text-center text-xs font-medium text-blue-500 cursor-pointer hover:bg-blue-900">
				                  Matin</div>
				                <div
				                  class="bg-orange-900/30 p-3 text-center text-xs font-medium text-orange-500 cursor-pointer hover:bg-orange-500">
				                  Matin</div>
				                <div class="p-3"></div>
				                <div class="p-3 text-center text-sm text-gray-400">12h-18h</div>
				                <div class="p-3"></div>
				                <div class="p-3"></div>
				                <div
				                  class="bg-green-900/30 p-3 text-center text-xs font-medium text-green-500 cursor-pointer hover:bg-green-900">
				                  Après-midi</div>
				                <div class="p-3"></div>
				                <div class="p-3"></div>
				                <div
				                  class="bg-green-900/30 p-3 text-center text-xs font-medium text-green-500 cursor-pointer hover:bg-green-900">
				                  Après-midi</div>
				                <div
				                  class="bg-green-900/30 p-3 text-center text-xs font-medium text-green-500 cursor-pointer hover:bg-green-900">
				                  Après-midi</div>
				                <div class="p-3 text-center text-sm text-gray-400">18h-23h</div>
				                <div
				                  class="bg-purple-900/30 p-3 text-center text-xs font-medium text-purple-500 cursor-pointer hover:bg-purple-900">
				                  Soir</div>
				                <div
				                  class="bg-purple-900/30 p-3 text-center text-xs font-medium text-purple-500 cursor-pointer hover:bg-purple-900">
				                  Soir</div>
				                <div class="p-3"></div>
				                <div
				                  class="bg-purple-900/30 p-3 text-center text-xs font-medium text-purple-500 cursor-pointer hover:bg-purple-900">
				                  Soir</div>
				                <div
				                  class="bg-purple-900/30 p-3 text-center text-xs font-medium text-purple-500 cursor-pointer hover:bg-purple-900">
				                  Soir</div>
				                <div class="p-3"></div>
				                <div class="p-3"></div>
				                <div id="editButtons" class="hidden flex gap-3 mt-6 pt-6 border-t border-gray-200">
				                  <button id="cancelButton"
				                    class="flex-1 px-4 py-2 bg-gray-100 text-gray-400 rounded-button font-medium text-sm hover:bg-gray-200 transition-colors whitespace-nowrap !rounded-button">
				                    Annuler
				                  </button>
				                  <button id="saveButton"
				                    class="flex-1 px-4 py-2 bg-primary text-white rounded-button font-medium text-sm hover:bg-blue-600 transition-colors whitespace-nowrap !rounded-button">
				                    Enregistrer les modifications
				                  </button>
				                </div>
				              </div>
				            </div>
				          </div>

				          <div class="mt-6 p-4 bg-white/10 rounded-lg">
				            <h3 class="font-medium text-white mb-2">Résumé hebdomadaire</h3>
				            <div class="flex items-center gap-6">
				              <div class="text-sm text-gray-400">Total des heures : <span class="font-medium text-white">35h</span>
				              </div>
				              <div class="text-sm text-gray-400">Heures supplémentaires : <span
				                  class="font-medium text-white">3h</span></div>
				              <div id="editButtons" class="hidden flex gap-3 mt-6 pt-6 border-t border-gray-200">
				                <button id="cancelButton"
				                  class="flex-1 px-4 py-2 bg-gray-100 text-gray-400 rounded-button font-medium text-sm hover:bg-gray-200 transition-colors whitespace-nowrap !rounded-button">
				                  Annuler
				                </button>
				                <button id="saveButton"
				                  class="flex-1 px-4 py-2 bg-primary text-white rounded-button font-medium text-sm hover:bg-blue-600 transition-colors whitespace-nowrap !rounded-button">
				                  Enregistrer les modifications
				                </button>
				              </div>
				            </div>
				          </div>
				        </div>
			      	</div>
			      	<div class="tab-content hidden" id="presences">
				        <div class="bg-white/10 rounded-lg shadow-sm p-6 mt-6">
				          <div class="flex items-center justify-between mb-6">
				            <h2 class="text-lg font-semibold text-white">Présences &amp; Pointage - Mars 2026</h2>
				            <button
				              class="px-4 py-2 bg-primary text-white rounded-lg font-medium text-sm hover:bg-blue-600 transition-colors whitespace-nowrap"
				              onclick="openQRModal()">
				              Pointer maintenant
				            </button>
				          </div>
				          <div class="overflow-x-auto">
				            <table class="min-w-full">
				              <thead>
				                <tr class="border-b border-gray-200">
				                  <th class="text-left py-3 px-4 font-medium text-gray-400">Date</th>
				                  <th class="text-left py-3 px-4 font-medium text-gray-400">Arrivée</th>
				                  <th class="text-left py-3 px-4 font-medium text-gray-400">Départ</th>
				                  <th class="text-center py-3 px-4 font-medium text-gray-400">Présence</th>
				                  <th class="text-right py-3 px-4 font-medium text-gray-400">Heures travaillées</th>
				                  <th class="text-right py-3 px-4 font-medium text-gray-400">Heures supp.</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr class="border-b border-gray-100">
				                  <td class="py-3 px-4 text-white">Lun 24 Mars</td>
				                  <td class="py-3 px-4 text-gray-400">08:00</td>
				                  <td class="py-3 px-4 text-gray-400">17:00</td>
				                  <td class="py-3 px-4 text-center">
				                    <div class="w-6 h-6 flex items-center justify-center mx-auto text-green-600">
				                      <i class="ri-check-line"></i>
				                    </div>
				                  </td>
				                  <td class="py-3 px-4 text-right text-white">8h00</td>
				                  <td class="py-3 px-4 text-right text-gray-400">0h00</td>
				                </tr>
				                <tr class="border-b border-gray-100">
				                  <td class="py-3 px-4 text-white">Mar 25 Mars</td>
				                  <td class="py-3 px-4 text-gray-400">08:15</td>
				                  <td class="py-3 px-4 text-gray-400">18:30</td>
				                  <td class="py-3 px-4 text-center">
				                    <div class="w-6 h-6 flex items-center justify-center mx-auto text-green-600">
				                      <i class="ri-check-line"></i>
				                    </div>
				                  </td>
				                  <td class="py-3 px-4 text-right text-white">9h15</td>
				                  <td class="py-3 px-4 text-right text-orange-600">1h15</td>
				                </tr>
				                <tr class="border-b border-gray-100">
				                  <td class="py-3 px-4 text-white">Mer 26 Mars</td>
				                  <td class="py-3 px-4 text-gray-400">-</td>
				                  <td class="py-3 px-4 text-gray-400">-</td>
				                  <td class="py-3 px-4 text-center">
				                    <div class="w-6 h-6 flex items-center justify-center mx-auto text-red-600">
				                      <i class="ri-close-line"></i>
				                    </div>
				                  </td>
				                  <td class="py-3 px-4 text-right text-gray-400">0h00</td>
				                  <td class="py-3 px-4 text-right text-gray-400">0h00</td>
				                </tr>
				                <tr class="border-b border-gray-100">
				                  <td class="py-3 px-4 text-white">Jeu 27 Mars</td>
				                  <td class="py-3 px-4 text-gray-400">08:00</td>
				                  <td class="py-3 px-4 text-gray-400">17:45</td>
				                  <td class="py-3 px-4 text-center">
				                    <div class="w-6 h-6 flex items-center justify-center mx-auto text-green-600">
				                      <i class="ri-check-line"></i>
				                    </div>
				                  </td>
				                  <td class="py-3 px-4 text-right text-white">8h45</td>
				                  <td class="py-3 px-4 text-right text-orange-600">0h45</td>
				                </tr>
				                <tr class="border-b border-gray-100">
				                  <td class="py-3 px-4 text-white">Ven 28 Mars</td>
				                  <td class="py-3 px-4 text-gray-400">07:45</td>
				                  <td class="py-3 px-4 text-gray-400">17:00</td>
				                  <td class="py-3 px-4 text-center">
				                    <div class="w-6 h-6 flex items-center justify-center mx-auto text-green-600">
				                      <i class="ri-check-line"></i>
				                    </div>
				                  </td>
				                  <td class="py-3 px-4 text-right text-white">8h15</td>
				                  <td class="py-3 px-4 text-right text-gray-400">0h15</td>
				                </tr>
				              </tbody>
				            </table>
				          </div>
				          <div class="mt-6 p-4 bg-white/10 rounded-lg">
				            <h3 class="font-medium text-white mb-3">Résumé mensuel</h3>
				            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6">
				              <div class="text-sm text-gray-400">Total des heures : <span
				                  class="font-medium text-white">142h30</span></div>
				              <div class="text-sm text-gray-400">Heures supplémentaires : <span
				                  class="font-medium text-orange-600">8h15</span></div>
				              <div class="text-sm text-gray-400">Absences justifiées : <span class="font-medium text-blue-600">2</span>
				              </div>
				              <div class="text-sm text-gray-400">Absences injustifiées : <span class="font-medium text-red-600">1</span>
				              </div>
				            </div>
				          </div>
				        </div>
			      	</div>
			      	<div class="tab-content hidden" id="conges">
				        <div class="bg-white/10 rounded-lg shadow-sm p-6 mt-6">
				          <div class="flex items-center justify-between mb-6">
				            <h2 class="text-lg font-semibold text-white">Congés &amp; Demandes</h2>
				          </div>
				          <div class="mb-6">
				            <h3 class="font-medium text-white mb-4">Soldes disponibles</h3>
				            <div class="grid grid-cols-2 gap-4">
				              <div class="p-4 bg-blue-900/30 rounded-lg">
				                <div class="text-sm text-blue-400 font-medium">Congés payés restants</div>
				                <div class="text-2xl font-bold text-blue-500 mt-1">18,5 jours</div>
				              </div>
				              <div class="p-4 bg-green-900/30 rounded-lg">
				                <div class="text-sm text-green-400 font-medium">RTT restants</div>
				                <div class="text-2xl font-bold text-green-500 mt-1">6 jours</div>

				              </div>
				            </div>
				          </div>
				          <div class="space-y-4">
				            <h3 class="font-medium text-white">Demandes récentes</h3>
				            <div class="border border-gray-200 rounded-lg p-4">
				              <div class="flex items-center justify-between">
				                <div class="flex items-center gap-4">
				                  <div>
				                    <div class="font-medium text-white">Congés payés</div>
				                    <div class="text-sm text-gray-500">Du 15 au 22 avril 2026 (8 jours)</div>
				                    <div class="text-sm text-gray-500 mt-1">Vacances familiales</div>
				                  </div>
				                </div>
				                <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-sm font-medium rounded-full">En attente</span>
				              </div>
				            </div>
				            <div class="border border-gray-200 rounded-lg p-4">
				              <div class="flex items-center justify-between">
				                <div class="flex items-center gap-4">
				                  <div>
				                    <div class="font-medium text-white">RTT</div>
				                    <div class="text-sm text-gray-500">Le 5 avril 2026 (1 jour)</div>
				                    <div class="text-sm text-gray-500 mt-1">Rendez-vous médical</div>
				                  </div>
				                </div>
				                <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Validé</span>
				              </div>
				            </div>
				            <div class="border border-gray-200 rounded-lg p-4">
				              <div class="flex items-center justify-between">
				                <div class="flex items-center gap-4">
				                  <div>
				                    <div class="font-medium text-white">Congés payés</div>
				                    <div class="text-sm text-gray-500">Du 1er au 3 mars 2026 (3 jours)</div>
				                    <div class="text-sm text-gray-500 mt-1">Week-end prolongé</div>
				                  </div>
				                </div>
				                <span class="px-3 py-1 bg-red-100 text-red-800 text-sm font-medium rounded-full">Refusé</span>
				              </div>
				              <div id="editButtons" class="hidden flex gap-3 mt-6 pt-6 border-t border-gray-200">
				                <button id="cancelButton"
				                  class="flex-1 px-4 py-2 bg-gray-100 text-gray-700 rounded-button font-medium text-sm hover:bg-gray-200 transition-colors whitespace-nowrap !rounded-button">
				                  Annuler
				                </button>
				                <button id="saveButton"
				                  class="flex-1 px-4 py-2 bg-primary text-white rounded-button font-medium text-sm hover:bg-blue-600 transition-colors whitespace-nowrap !rounded-button">
				                  Enregistrer les modifications
				                </button>
				              </div>
				            </div>
				          </div>
				        </div>
			      	</div>
			      	<div class="tab-content hidden" id="paie">
				        <div class="bg-white/10 rounded-lg shadow-sm p-6 mt-6">
				          <div class="flex items-center justify-between mb-6">
				            <h2 class="text-lg font-semibold text-white">Bulletins de Paie</h2>
				            <button
				              class="px-4 py-2 bg-primary text-white rounded-lg font-medium text-sm hover:bg-blue-600 transition-colors whitespace-nowrap">
				              Générer bulletin mars 2026
				            </button>
				          </div>
				          <div class="mb-6 p-4 bg-green-900/30 rounded-lg">
				            <h3 class="font-medium text-green-500 mb-2">Résumé annuel 2026</h3>
				            <div class="text-2xl font-bold text-green-500">28 450 € brut</div>
				            <div class="text-sm text-green-500">Gains totaux depuis janvier</div>
				          </div>
				          <div class="space-y-4">
				            <h3 class="font-medium text-white">Bulletins disponibles</h3>
				            <div class="border border-gray-200 rounded-lg p-4">
				              <div class="flex items-center justify-between">
				                <div>
				                  <div class="font-medium text-white">Février 2026</div>
				                  <div class="text-sm text-gray-600 mt-1">
				                    Brut : 2 650 € • Cotisations : 685 € • Net : 1 965 €
				                  </div>
				                  <div class="text-sm text-gray-500 mt-1">
				                    Heures normales : 152h • Heures supp. : 8h • Prime : 150 €
				                  </div>
				                </div>
				                <button
				                  class="px-3 flex py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-button text-sm font-medium transition-colors whitespace-nowrap !rounded-button">
				                  <div class="w-4 h-4 flex items-center justify-center mr-2 inline-block">
				                    <i class="ri-download-line"></i>
				                  </div>
				                  PDF
				                </button>
				              </div>
				            </div>
				          </div>
				        </div>
			      	</div>
			      	<div class="tab-content" id="historique">
				        <div class="bg-white/10 rounded-lg shadow-sm p-6 mt-6">
				          <div class="flex items-center justify-between mb-6">
				            <h2 class="text-lg font-semibold text-white">Historique Complet</h2>
				          </div>
				          <div class="space-y-4">
				            <div class="flex items-start gap-4 p-4 border-l-4 border-blue-500 bg-blue-900/30">
				              <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm">
				                <i class="ri-user-add-line"></i>
				              </div>
				              <div class="flex-1">
				                <div class="font-medium text-white">Embauche</div>
				                <div class="text-sm text-gray-500 mt-1">
				                  Contrat CDI signé - Poste de Serveuse
				                </div>
				                <div class="text-xs text-gray-500 mt-2 flex items-center gap-4">
				                  <span>15 janvier 2023</span>
				                  <span>Par : Pierre Martin</span>
				                </div>
				                <div id="editButtons" class="hidden flex gap-3 mt-6 pt-6 border-t border-gray-200">
				                  <button id="cancelButton"
				                    class="flex-1 px-4 py-2 bg-gray-100 text-gray-700 rounded-button font-medium text-sm hover:bg-gray-200 transition-colors whitespace-nowrap !rounded-button">
				                    Annuler
				                  </button>
				                  <button id="saveButton"
				                    class="flex-1 px-4 py-2 bg-primary text-white rounded-button font-medium text-sm hover:bg-blue-600 transition-colors whitespace-nowrap !rounded-button">
				                    Enregistrer les modifications
				                  </button>
				                </div>
				              </div>
				            </div>
				          </div>
				        </div>
			      	</div>
                </div>
            </div>
            
            <!-- ACTIVITÉS RÉCENTES -->
            <div class="bg-white/10 rounded-2xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-white flex items-center gap-2 mb-4">
                    <i class="fas fa-clock text-secondary"></i>
                    Activités récentes
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 p-3 hover:bg-white/20 rounded-lg transition">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="ri-check-double-line text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-white">Commande #CMD-4521 validée</p>
                            <p class="text-xs text-gray-400">Il y a 2 heures</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 hover:bg-white/20 rounded-lg transition">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="ri-user-add-line text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-white">Nouveau client ajouté</p>
                            <p class="text-xs text-gray-400">Hier, 15:30</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 hover:bg-white/20 rounded-lg transition">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <i class="ri-line-chart-line text-yellow-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-white">Rapport mensuel généré</p>
                            <p class="text-xs text-gray-400">Hier, 09:15</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 hover:bg-white/20 rounded-lg transition">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="ri-calendar-line text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-white">Réservation groupe confirmée</p>
                            <p class="text-xs text-gray-400">Le 12/03/2026</p>
                        </div>
                    </div>
                </div>
                <button class="w-full mt-4 text-center text-secondary text-sm hover:underline">
                    Voir tout l'historique <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>
        </div>
    </div>
	            </main>
	        </div>
@endsection

	    <div id="qrModal" class="absolute hidden inset-0 bg-black bg-opacity-50 backdrop-blur-md items-center justify-center z-50">
		    <div class="bg-white/10 rounded-lg p-6 max-w-md w-full mx-4">
		      <div class="flex items-center justify-between mb-4">
		        <h3 class="text-lg font-semibold text-white">Pointage QR Code</h3>
		        <button onclick="closeQRModal()"
		          class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-600">
		          <i class="ri-close-line"></i>
		        </button>
		      </div>
		      <div class="text-center">
		        <div class="w-48 h-48 bg-white/10 mx-auto mb-4 rounded-lg flex items-center justify-center">
		          <div
		            class="w-40 h-40 bg-white/10 border-2 border-dashed border-gray-300 rounded flex items-center justify-center">
		            <span class="text-gray-500 text-sm">QR Code</span>
		          </div>
		        </div>
		        <p class="text-sm text-gray-400 mb-4">Scannez ce code avec votre téléphone pour pointer</p>
		        <div class="flex gap-3">
		          <button onclick="clockIn()"
		            class="flex-1 px-4 py-2 bg-green-600 text-white rounded-lg font-medium text-sm hover:bg-green-700 transition-colors whitespace-nowrap ">
		            Entrée
		          </button>
		          <button onclick="clockOut()"
		            class="flex-1 px-4 py-2 bg-red-600 text-white rounded-lg font-medium text-sm hover:bg-red-700 transition-colors whitespace-nowrap ">
		            Sortie
		          </button>
		        </div>
		      </div>
		    </div>
		</div>

		<div id="scheduleModal" class="absolute hidden inset-0 bg-black bg-opacity-50 backdrop-blur-md items-center justify-center z-50">
		    <div class="bg-white/10 rounded-lg p-6 max-w-md w-full mx-4">
		      <div class="flex items-center justify-between mb-4">
		        <h3 class="text-lg font-semibold text-white">Ajouter une plage horaire</h3>
		        <button onclick="closeScheduleModal()"
		          class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-600">
		          <i class="ri-close-line"></i>
		        </button>
		      </div>
		      <form id="scheduleForm" class="space-y-4">
		        <div>
		          <label class="block text-sm font-medium text-gray-400 mb-2">Jour de la semaine</label>
		          <select id="daySelect" class="w-full px-3 py-2 rounded-lg text-gray-400 outline-none text-sm bg-white/10 pr-8">
		            <option value="1">Lundi</option>
		            <option value="2">Mardi</option>
		            <option value="3">Mercredi</option>
		            <option value="4">Jeudi</option>
		            <option value="5">Vendredi</option>
		            <option value="6">Samedi</option>
		            <option value="7">Dimanche</option>
		          </select>
		        </div>
		        <div>
		          <label class="block text-sm font-medium text-gray-400 mb-2">Plage horaire</label>
		          <select id="timeSlotSelect"
		            class="w-full px-3 py-2 rounded-lg text-gray-400 outline-none text-sm bg-white/10 pr-8">
		            <option value="morning">Matin (08h-12h)</option>
		            <option value="afternoon">Après-midi (12h-18h)</option>
		            <option value="evening">Soir (18h-23h)</option>
		          </select>
		        </div>
		        <div>
		          <label class="block text-sm font-medium text-gray-400 mb-2">Type de service</label>
		          <select id="serviceTypeSelect"
		            class="w-full px-3 py-2 rounded-lg text-gray-400 outline-none text-sm bg-white/10 pr-8">
		            <option value="restaurant">Restaurant</option>
		            <option value="bar">Bar</option>
		            <option value="banquet">Banquet</option>
		            <option value="room-service">Room Service</option>
		          </select>
		        </div>
		        <div class="flex gap-3 pt-2">
		          <button type="button" onclick="closeScheduleModal()"
		            class="flex-1 px-4 py-2 bg-white/10 text-gray-400 rounded-button font-medium text-sm hover:bg-white/20 transition-colors whitespace-nowrap rounded-lg">
		            Annuler
		          </button>
		          <button type="submit"
		            class="flex-1 px-4 py-2 bg-primary text-white rounded-lg font-medium text-sm hover:bg-primary transition-colors whitespace-nowrap">
		            Ajouter
		          </button>
		        </div>
		      </form>
		    </div>
		</div>

		<div id="leaveModal" class="absolute hidden inset-0 bg-black bg-opacity-50 backdrop-blur-md items-center justify-center z-50">
		    <div class="bg-white/10 rounded-lg p-6 max-w-md w-full mx-4">
		      <div class="flex items-center justify-between mb-4">
		        <h3 class="text-lg font-semibold text-white">Demander un congé</h3>
		        <button onclick="closeLeaveModal()"
		          class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-600">
		          <i class="ri-close-line"></i>
		        </button>
		      </div>
		      <form class="space-y-4">
		        <div>
		          <label class="block text-sm font-medium text-gray-400 mb-2">Type de congé</label>
		          <select class="w-full px-3 py-2 rounded-lg bg-white/10 outline-none text-gray-400 text-sm pr-8">
		            <option>Congés payés</option>
		            <option>RTT</option>
		            <option>Maladie</option>
		            <option>Sans solde</option>
		          </select>
		        </div>
		        <div class="grid grid-cols-2 gap-3">
		          <div>
		            <label class="block text-sm font-medium text-gray-400 mb-2">Date de début</label>
		            <input type="date" class="w-full px-3 py-2 rounded-lg bg-white/10 outline-none text-gray-400 text-sm">
		          </div>
		          <div>
		            <label class="block text-sm font-medium text-gray-400 mb-2">Date de fin</label>
		            <input type="date" class="w-full px-3 py-2 rounded-lg bg-white/10 outline-none text-gray-400 text-sm">
		          </div>
		        </div>
		        <div>
		          <label class="block text-sm font-medium text-gray-400 mb-2">Motif</label>
		          <textarea class="w-full px-3 py-2 rounded-lg bg-white/10 outline-none text-gray-400 text-sm h-20 resize-none"
		            placeholder="Précisez le motif de votre demande..."></textarea>
		        </div>
		        <div class="flex gap-3 pt-2">
		          <button type="button" onclick="closeLeaveModal()"
		            class="flex-1 px-4 py-2 bg-gray-100 text-gray-400 rounded-lg font-medium text-sm hover:bg-gray-200 transition-colors whitespace-nowrap !rounded-lg">
		            Annuler
		          </button>
		          <button type="submit"
		            class="flex-1 px-4 py-2 bg-primary text-white rounded-lg font-medium text-sm hover:bg-blue-600 transition-colors whitespace-nowrap !rounded-lg">
		            Envoyer
		          </button>
		        </div>
		      </form>
		    </div>
		</div>

<script>
    // Graphique performance
    const ctx = document.getElementById('performanceChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
            datasets: [{
                label: 'Chiffre d\'affaires (€)',
                data: [32000, 34500, 36800, 39200, 41500, 43800, 45200, 46800, 48500, 50200, 51800, 54500],
                borderColor: '#FF6B35',
                backgroundColor: 'rgba(255, 107, 53, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: { legend: { position: 'top' } }
        }
    });
</script>

<script id="tab-navigation">
    document.addEventListener('DOMContentLoaded', function () {
      const tabButtons = document.querySelectorAll('.tab-btn');
      const tabContents = document.querySelectorAll('.tab-content');
      tabButtons.forEach(button => {
        button.addEventListener('click', function () {
          const targetTab = this.getAttribute('data-tab');
          tabButtons.forEach(btn => {
            btn.classList.remove('active', 'border-primary', 'text-primary');
            btn.classList.add('border-transparent', 'text-gray-500');
          });
          this.classList.add('active', 'border-primary', 'text-primary');
          this.classList.remove('border-transparent', 'text-gray-500');
          tabContents.forEach(content => {
            content.classList.add('hidden');
          });
          document.getElementById(targetTab).classList.remove('hidden');
        });
      });
    });
</script>

<script id="modal-management">
function openQRModal() {
  document.getElementById('qrModal').classList.remove('hidden');
  document.getElementById('qrModal').classList.add('flex');
}
function closeQRModal() {
  document.getElementById('qrModal').classList.add('hidden');
  document.getElementById('qrModal').classList.remove('flex');
}
function openLeaveModal() {
  document.getElementById('leaveModal').classList.remove('hidden');
  document.getElementById('leaveModal').classList.add('flex');
}
function closeLeaveModal() {
  document.getElementById('leaveModal').classList.add('hidden');
  document.getElementById('leaveModal').classList.remove('flex');
}

function openScheduleModal() {
  document.getElementById('scheduleModal').classList.remove('hidden');
  document.getElementById('scheduleModal').classList.add('flex');
}

function closeScheduleModal() {
  document.getElementById('scheduleModal').classList.add('hidden');
  document.getElementById('scheduleModal').classList.remove('flex');
}

function clockIn() {
  alert('Pointage d\'entrée enregistré');
  closeQRModal();
}
function clockOut() {
  alert('Pointage de sortie enregistré');
  closeQRModal();
}
</script>

<script id="edit-mode-management">
	document.addEventListener('DOMContentLoaded', function () {
	  const editButton = document.getElementById('editButton');
	  const cancelButton = document.getElementById('cancelButton');
	  const saveButton = document.getElementById('saveButton');
	  const editButtons = document.getElementById('editButtons');
	  const fields = [
	    'nom', 'email', 'telephone', 'adresse', 'dateEmbauche', 'dateNaissance',
	    'poste', 'service', 'manager', 'contrat', 'salaire', 'taux', 'secu', 'iban'
	  ];
	  let originalValues = {};
	  function enterEditMode() {
	    fields.forEach(field => {
	      const displayElement = document.getElementById(field + 'Display');
	      const inputElement = document.getElementById(field + 'Input');
	      if (displayElement && inputElement) {
	        originalValues[field] = inputElement.value;
	        displayElement.classList.add('hidden');
	        inputElement.classList.remove('hidden');
	      }
	    });
	    editButton.textContent = 'Mode édition';
	    editButton.disabled = true;
	    editButton.classList.add('opacity-50', 'cursor-not-allowed');
	    editButtons.classList.remove('hidden');
	  }
	  function exitEditMode(save = false) {
	    fields.forEach(field => {
	      const displayElement = document.getElementById(field + 'Display');
	      const inputElement = document.getElementById(field + 'Input');
	      if (displayElement && inputElement) {
	        if (!save) {
	          inputElement.value = originalValues[field];
	        } else {
	          if (field === 'salaire') {
	            displayElement.textContent = inputElement.value + ' €';
	          } else if (field === 'taux') {
	            displayElement.textContent = inputElement.value + ' €';
	          } else if (field === 'adresse') {
	            displayElement.innerHTML = inputElement.value.replace(/\n/g, '<br>');
	          } else if (field === 'dateEmbauche') {
	            const date = new Date(inputElement.value);
	            displayElement.textContent = date.toLocaleDateString('fr-FR', { day: 'numeric', month: 'long', year: 'numeric' });
	          } else if (field === 'dateNaissance') {
	            const date = new Date(inputElement.value);
	            displayElement.textContent = date.toLocaleDateString('fr-FR', { day: 'numeric', month: 'long', year: 'numeric' });
	          } else {
	            displayElement.textContent = inputElement.value;
	          }
	        }
	        displayElement.classList.remove('hidden');
	        inputElement.classList.add('hidden');
	      }
	    });
	    editButton.textContent = 'Modifier';
	    editButton.disabled = false;
	    editButton.classList.remove('opacity-50', 'cursor-not-allowed');
	    editButtons.classList.add('hidden');
	  }
	  editButton.addEventListener('click', enterEditMode);
	  cancelButton.addEventListener('click', function () {
	    exitEditMode(false);
	  });
	  saveButton.addEventListener('click', function () {
	    exitEditMode(true);
	    const notification = document.createElement('div');
	    notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
	    notification.textContent = 'Modifications enregistrées avec succès';
	    document.body.appendChild(notification);
	    setTimeout(() => {
	      notification.remove();
	    }, 3000);
	  });
	});
</script>

<script id="schedule-management">
	document.addEventListener('DOMContentLoaded', function () {
	  const scheduleForm = document.getElementById('scheduleForm');

	  scheduleForm.addEventListener('submit', function (e) {
	    e.preventDefault();

	    const daySelect = document.getElementById('daySelect');
	    const timeSlotSelect = document.getElementById('timeSlotSelect');
	    const serviceTypeSelect = document.getElementById('serviceTypeSelect');

	    const day = parseInt(daySelect.value);
	    const timeSlot = timeSlotSelect.value;
	    const serviceType = serviceTypeSelect.value;

	    const serviceColors = {
	      'restaurant': { bg: 'bg-blue-100', text: 'text-blue-800', hover: 'hover:bg-blue-200' },
	      'bar': { bg: 'bg-green-100', text: 'text-green-800', hover: 'hover:bg-green-200' },
	      'banquet': { bg: 'bg-purple-100', text: 'text-purple-800', hover: 'hover:bg-purple-200' },
	      'room-service': { bg: 'bg-orange-100', text: 'text-orange-800', hover: 'hover:bg-orange-200' }
	    };

	    const serviceLabels = {
	      'restaurant': 'Restaurant',
	      'bar': 'Bar',
	      'banquet': 'Banquet',
	      'room-service': 'Room Service'
	    };

	    const timeSlotLabels = {
	      'morning': 'Matin',
	      'afternoon': 'Après-midi',
	      'evening': 'Soir'
	    };

	    const timeSlotRows = {
	      'morning': 1,
	      'afternoon': 2,
	      'evening': 3
	    };

	    const grid = document.querySelector('.grid.grid-cols-8');
	    const cells = grid.children;
	    const targetCellIndex = timeSlotRows[timeSlot] * 8 + day;

	    if (cells[targetCellIndex]) {
	      const cell = cells[targetCellIndex];
	      const colors = serviceColors[serviceType];

	      cell.className = `${colors.bg} p-3 text-center text-xs font-medium ${colors.text} cursor-pointer ${colors.hover}`;
	      cell.textContent = `${timeSlotLabels[timeSlot]} - ${serviceLabels[serviceType]}`;
	    }

	    closeScheduleModal();

	    const notification = document.createElement('div');
	    notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
	    notification.textContent = 'Plage horaire ajoutée avec succès';
	    document.body.appendChild(notification);

	    setTimeout(() => {
	      notification.remove();
	    }, 3000);
	  });
	});
</script>
