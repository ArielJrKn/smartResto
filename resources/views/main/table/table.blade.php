@extends('main.layouts.app')
@section('content')   
	        
	        <!-- Main Content -->
	        <div class="flex-1 flex flex-col overflow-y-auto h-full">
	            
	        	<div class="pt-20  overflow-y-auto">
	        		<div class="flex items-center justify-between">
	        			<h1 class="text-2xl font-bold text-white ml-4">Mes tables</h1>
    					<div class="rounded-full m-1 p-1">
							<a href="{{route('addtable')}}" class="rounded-lg bg-primary text-white py-2 px-3">Ajouter une table</a>
						</div>
	        		</div>
	        		<div class="flex flex-col md:flex-row h-full">
	        			<!-- Vue principale - Plan de salle -->
				        <div class="flex-1 p-6">
				            <div class="bg-white/10 rounded-lg shadow-sm h-full relative overflow-hidden">
				                <!-- Légende des couleurs -->
				                <div class="absolute top-4 right-4 bg-black/50 lg:block hidden rounded-lg shadow-sm p-4 z-10">
				                    <h3 class="text-sm font-semibold text-white mb-3">Statut des tables</h3>
				                    <div class="space-y-2 text-xs">
				                        <div class="flex items-center space-x-2">
				                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
				                            <span class="text-gray-500">Libre</span>
				                        </div>
				                        <div class="flex items-center space-x-2">
				                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
				                            <span class="text-gray-500">Occupé</span>
				                        </div>
				                        <div class="flex items-center space-x-2">
				                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
				                            <span class="text-gray-500">En attente</span>
				                        </div>
				                        <div class="flex items-center space-x-2">
				                            <div class="w-3 h-3 rounded-full bg-blue-500"></div>
				                            <span class="text-gray-500">Réservé</span>
				                        </div>
				                        <div class="flex items-center space-x-2">
				                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
				                            <span class="text-gray-500">Indisponible</span>
				                        </div>
				                    </div>
				                </div>

				                <!-- Plan de salle -->
				                <div class="p-8 h-full">
				                    <div class="relative h-full flex items-center justify-between gap-2 flex-wrap">
				                        <!-- Tables -->
				                        @foreach($tables as $table)
				                        <div class="table-item" data-table="{{$table->number}}" data-id="{{$table->id}}" data-status="{{$table->status}}" data-capacity="{{$table->places}}" data-server="{{$table->user->name}}" data-order="">
				                            <div class="w-20 h-20 rounded-lg bg-yellow-500 flex items-center justify-center text-white font-bold cursor-pointer hover:scale-110 transition-transform">
				                                {{$table->number}}
				                            </div>
				                            <a href="{{route('showTable', $table)}}">voir</a>
				                        </div>
				                        @endforeach
				                    </div>
				                </div>
				            </div>
				        </div>

				        <!-- Panel latéral -->
				        <div class="lg:w-80 md:w-full rounded-lg bg-white/10 mx-3 p-6 overflow-y-auto">
				            <div id="table-details" class="hidden">
				                <div class="flex items-center justify-between mb-4">
				                    <h2 class="text-lg font-semibold text-white">Détails de la table</h2>
				                    <button id="close-details" class="w-6 h-6 flex items-center justify-center text-white">
				                        <i class="ri-close-line"></i>
				                    </button>
				                </div>

				                <div class="space-y-4">
				                    <div class="bg-white/10 rounded-lg p-4">
				                        <div class="flex items-center space-x-3 mb-3">
				                            <div id="table-status-indicator" class="w-4 h-4 rounded-full"></div>
				                            <span id="table-number" class="font-semibold text-white"></span>
				                        </div>
				                        <div class="space-y-2 text-sm text-gray-400">
				                            <div>Capacité: <span id="table-capacity" class="font-medium"></span> personnes</div>
				                            <div>Serveur: <span id="table-server" class="font-medium"></span></div>
				                            <div id="occupation-time" class="hidden">Durée d'occupation: <span class="font-medium">1h 23min</span></div>
				                        </div>
				                    </div>

				                    <div id="current-order" class="hidden">
				                        <h3 class="font-medium text-white mb-2">Commande en cours</h3>
				                        <div class="bg-white/10 rounded-lg p-3">
				                            <div id="order-items" class="text-sm text-gray-400 mb-2"></div>
				                            <div class="text-lg font-semibold text-blue-600">Total: 78,50 €</div>
				                        </div>
				                    </div>

				                    <div class="space-y-2">
				                    	<form class="reset" method="POST">
				                    		@csrf
				                    		@method('PATCH')
				                    		<button class="mb-2 w-full flex items-center justify-center space-x-2 bg-green-600/30 text-white px-4 py-2 rounded-full font-medium text-sm hover:bg-green-600 whitespace-nowrap">
				                            <div class="w-4 h-4 flex items-center justify-center">
				                                <i class="ri-check-line"></i>
				                            </div>
				                            <span>Libérer</span>
				                        </button>
				                    	</form>
				                        <a class="edit m-3">
				                     		<button class="w-full flex items-center justify-center space-x-2 bg-primary text-white px-4 py-2 rounded-full font-medium text-sm hover:bg-green-600 whitespace-nowrap">
				                            <div class="w-4 h-4 flex items-center justify-center">
				                                <i class="ri-edit-line"></i>
				                            </div>
				                            <span>Modifier</span>
				                        </button>
				                        </a>
				                        <form class="deleteForms" method="POST">
			                        		@csrf
			                        		@method('DELETE')
					                        <button onclick="return confirm('Cette action est irréversible')" type="submit" class="w-full flex items-center justify-center space-x-2 bg-red-900/30 text-white px-4 py-2 rounded-full font-medium text-sm hover:bg-red-600 whitespace-nowrap">
					                            <div class="w-4 h-4 flex items-center justify-center">
					                                <i class="ri-delete-bin-line"></i>
					                            </div>
					                            <span>supprimer</span>
					                        </button>
				                        </form>
				                    </div>
				                </div>
				            </div>

				            <!-- Section commandes actives -->
				            <div id="active-orders" class="">
				                <h2 class="text-lg font-semibold text-white mb-4">Commandes actives</h2>
				                <div class="space-y-3">
				                    <div class="bg-red-900/30 rounded-lg p-3">
				                        <div class="flex items-center justify-between mb-2">
				                            <span class="font-medium text-red-500">Table 2</span>
				                            <span class="text-xs text-red-500 bg-red-900/70 px-2 py-1 rounded-full">En préparation</span>
				                        </div>
				                        <div class="text-sm text-red-500">Salade César, Saumon grillé</div>
				                        <div class="text-xs text-red-500 mt-1">Temps d'attente: 15 min</div>
				                    </div>

				                    <div class="bg-yellow-900/30 rounded-lg p-3">
				                        <div class="flex items-center justify-between mb-2">
				                            <span class="font-medium text-yellow-500">Table 5</span>
				                            <span class="text-xs text-yellow-500 bg-yellow-900/70 px-2 py-1 rounded-full">Prêt</span>
				                        </div>
				                        <div class="text-sm text-yellow-500">Entrecôte, Tarte tatin</div>
				                        <div class="text-xs text-yellow-500 mt-1">À servir</div>
				                    </div>

				                    <div class="bg-red-900/30 rounded-lg p-3">
				                        <div class="flex items-center justify-between mb-2">
				                            <span class="font-medium text-red-500">Table 6</span>
				                            <span class="text-xs text-red-500 bg-red-900/70 px-2 py-1 rounded-full">En cours</span>
				                        </div>
				                        <div class="text-sm text-red-500">Menu dégustation (8 pers.)</div>
				                        <div class="text-xs text-red-500 mt-1">Plat principal</div>
				                    </div>

				                    <div class="bg-yellow-900/30 rounded-lg p-3">
				                        <div class="flex items-center justify-between mb-2">
				                            <span class="font-medium text-yellow-500">Table 9</span>
				                            <span class="text-xs text-yellow-500 bg-yellow-900/70 px-2 py-1 rounded-full">En préparation</span>
				                        </div>
				                        <div class="text-sm text-yellow-500">Bouillabaisse, Crème brûlée</div>
				                        <div class="text-xs text-yellow-500 mt-1">Temps d'attente: 8 min</div>
				                    </div>

				                    <div class="bg-yellow-900/30 rounded-lg p-3">
				                        <div class="flex items-center justify-between mb-2">
				                            <span class="font-medium text-yellow-500">Table 12</span>
				                            <span class="text-xs text-yellow-500 bg-yellow-900/70 px-2 py-1 rounded-full">Prêt</span>
				                        </div>
				                        <div class="text-sm text-yellow-500">Plateau de fruits de mer</div>
				                        <div class="text-xs text-yellow-500 mt-1">À servir</div>
				                    </div>
				                </div>
				            </div>
				        </div>
	        		</div>
			    </div>

	        </div>


	    <script id="table-interaction">
        document.addEventListener('DOMContentLoaded', function() {
            const tables = document.querySelectorAll('.table-item');
            const deleteForms = document.querySelector('.deleteForms');
            const edit = document.querySelector('.edit');
            const reset = document.querySelector('.reset');
            const tooltip = document.getElementById('tooltip');
            const tooltipContent = document.getElementById('tooltip-content');
            const tableDetails = document.getElementById('table-details');
            const activeOrders = document.getElementById('active-orders');
            const closeDetails = document.getElementById('close-details');
            const baseUrl = "{{ route('deleteTable', ':id') }}";
            const baseUrlEdit = "{{ route('editTable', ':id') }}";
            const baseUrlReset = "{{ route('reset', ':id') }}";

            let selectedTable = null;

            tables.forEach(table => {
                const tableElement = table.querySelector('div');

                table.addEventListener('mouseenter', function(e) {
                    const tableNum = this.dataset.table;
                    const status = this.dataset.status;
                    const capacity = this.dataset.capacity;
                    const server = this.dataset.server;
                    const order = this.dataset.order;
                    const id = this.dataset.id;

                    deleteForms.action = baseUrl.replace(':id', id);
                    reset.action = baseUrlReset.replace(':id', id);
                    edit.href = baseUrlEdit.replace(':id', id);

                    let content = `
                        <div class="font-semibold">Table ${tableNum}</div>
                        <div>Capacité: ${capacity} personnes</div>
                        <div>Statut: ${status}</div>
                    `;

                    if (server) {
                        content += `<div>Serveur: ${server}</div>`;
                    }

                    if (order) {
                        content += `<div>Commande: ${order}</div>`;
                    }

                    tooltipContent.innerHTML = content;
                    tooltip.style.opacity = '1';
                });

                table.addEventListener('mousemove', function(e) {
                    tooltip.style.left = e.pageX + 10 + 'px';
                    tooltip.style.top = e.pageY - 10 + 'px';
                });

                table.addEventListener('mouseleave', function() {
                    tooltip.style.opacity = '0';
                });

                table.addEventListener('click', function() {
                    if (selectedTable) {
                        selectedTable.classList.remove('ring-4', 'ring-blue-400');
                    }

                    selectedTable = tableElement;
                    selectedTable.classList.add('ring-4', 'ring-blue-400');

                    showTableDetails(this.dataset);
                });
            });

            function showTableDetails(data) {
                const tableNumber = document.getElementById('table-number');
                const tableCapacity = document.getElementById('table-capacity');
                const tableServer = document.getElementById('table-server');
                const tableStatusIndicator = document.getElementById('table-status-indicator');
                const currentOrder = document.getElementById('current-order');
                const orderItems = document.getElementById('order-items');
                const occupationTime = document.getElementById('occupation-time');

                tableNumber.textContent = `Table ${data.table}`;
                tableCapacity.textContent = data.capacity;
                tableServer.textContent = data.server || 'Non assigné';

                const statusColors = {
                    'Libre': 'bg-green-500',
                    'Occupé': 'bg-red-500',
                    'Attente': 'bg-yellow-500',
                    'Réservé': 'bg-blue-500',
                    'Indisponible': 'bg-gray-400'
                };
         
                tableStatusIndicator.className = `w-4 h-4 rounded-full ${statusColors[data.status]}`;

                if (data.order) {
                    orderItems.textContent = data.order;
                    currentOrder.classList.remove('hidden');
                } else {
                    currentOrder.classList.add('hidden');
                }

                if (data.status === 'Occupé' || data.status === 'Attente') {
                    occupationTime.classList.remove('hidden');
                } else {
                    occupationTime.classList.add('hidden');
                }

                tableDetails.classList.remove('hidden');
                activeOrders.classList.add('hidden');
            }

            closeDetails.addEventListener('click', function() {
                tableDetails.classList.add('hidden');
                activeOrders.classList.remove('hidden');
                if (selectedTable) {
                    selectedTable.classList.remove('ring-4', 'ring-blue-400');
                    selectedTable = null;
                }
            });
        });
    </script>
@endsection
			@include('components.notification')
