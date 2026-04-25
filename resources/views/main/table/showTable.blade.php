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
	        <!-- Main Content -->
	        <div class=" flex-1 flex flex-col overflow-hidden">
	            
	            <!-- Dashboard Content -->
	            <main class=" flex-1 overflow-y-auto p-6">
	            	<div class="flex min-h-screen">
        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
                	<h1 class="text-2xl text-white font-semibold p-3">Passer votre commande</h1>

            <div class="bg-white/10 rounded-lg shadow-sm p-6 mb-6">
                <div class="lg:flex md:flex-col justify-between">
                    <div class="flex items-center space-x-4">
                        <div>
                            <h1 class="text-2xl font-bold text-white">Table 12 – Vue jardin</h1>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800 mt-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                                Occupée
                            </span>
                        </div>
                    </div>
                    
                    <div class="pt-2 grid lg:grid-cols-4 md:grid-cols-2 gap-2 space-x-3">
                        <button class="flex items-center justify-center rounded-lg flex p-2 bg-blue-600 text-white rounded-button whitespace-nowrap hover:bg-blue-700 transition-colors">
                        	<!-- modifier -->
                            <i class="ri-edit-line mr-2"></i>
                            <h2 class="hidden lg:block md:block">Modifier</h2>
                        </button>
                        <button onclick="document.getElementById('newOrderModal').classList.remove('hidden');" class="flex items-center justify-center rounded-lg flex p-2 bg-primary text-white rounded-button whitespace-nowrap hover:bg-orange-600 transition-colors">
                        	<!-- nouvelle commande -->
                            <i class="ri-add-line mr-2"></i>
                            <h2 class="hidden lg:block md:block">Commander</h2>

                        </button>
                        <button class="flex items-center justify-center rounded-lg flex p-2 bg-red-600 text-white rounded-button whitespace-nowrap hover:bg-red-700 transition-colors">
                        	<!-- annuler -->
                            <i class="ri-close-line mr-2"></i>
                            <h2 class="hidden lg:block md:block">Annuler</h2>

                        </button>
                        <button onclick="document.querySelector('.paiement').classList.remove('hidden');" class="flex items-center justify-center rounded-lg flex p-2 bg-gray-600 text-white rounded-button whitespace-nowrap hover:bg-gray-700 transition-colors">
                        	<!-- paiement -->
                            <i class="ri-file-text-line mr-2"></i>
                            <h2 class="hidden lg:block md:block">Payer</h2>

                        </button>
                    </div>
                </div>
            </div>

            <!-- Résumé Commande -->
            <div class="bg-white/10 rounded-lg shadow-sm p-6 mb-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-semibold text-white">Résumé de la commande</h2>
                    <div class="timer text-lg font-mono bg-gray-100 px-3 py-1 rounded">
                        <span id="elapsed-time">01:30:37</span>
                    </div>
                </div>

                <!-- Entrées -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-white mb-3 flex items-center">
                        <i class="ri-restaurant-line mr-2 text-primary"></i>Entrées
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
                            <div class="flex-1">
                                <div class="flex items-center space-x-3">
                                    <span class="font-medium">Salade de chèvre chaud</span>
                                    <span class="px-2 py-1 bg-white/10 text-white text-xs rounded">Sans noix</span>
                                </div>
                                <div class="text-sm text-white mt-1">Quantité: 2 × 12,50 €</div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-semibold text-white">25,00 €</span>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boissons -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-white mb-3 flex items-center">
                        <i class="ri-cup-line mr-2 text-primary"></i>Boissons
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
                            <div class="flex-1">
                                <span class="font-medium">Bordeaux Rouge 2020</span>
                                <div class="text-sm text-white mt-1">Quantité: 1 × 35,00 €</div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-semibold text-white">35,00 €</span>

                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between p-3 bg-white/10 rounded-lg">
                            <div class="flex-1">
                                <span class="font-medium">Eau minérale</span>
                                <div class="text-sm text-white mt-1">Quantité: 2 × 4,50 €</div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-semibold text-white">9,00 €</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    @include('main.modals.addCommandeClient')
    <!-- Sidebar Paiement -->
        <div class="paiement absolute hidden backdrop-blur-md right-0 top-0 h-full sm:w-full lg:w-1/4 md:w-2/4 bg-white/10 shadow-lg p-6 overflow-y-auto">
            <div class="sticky top-0  pb-4">
                <div class="text-xl font-semibold text-white mb-6">
                	<button onclick="document.querySelector('.paiement').classList.add('hidden');">
                		<i class="ri-close-line"></i>
                	</button>
                Récapitulatif paiement</div>
                
                <!-- Totaux -->
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-white">
                        <span>Sous-total</span>
                        <span>121,50 €</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>TVA (10%)</span>
                        <span>12,15 €</span>
                    </div>
                    <div class="border-t pt-3">
                        <div class="flex justify-between text-2xl font-bold text-primary">
                            <span>TOTAL À PAYER</span>
                            <span>133,65 €</span>
                        </div>
                    </div>
                </div>

                <!-- Options de partage -->
                <div class="mb-6">
                    <label class="flex items-center space-x-2 text-sm text-white">
                        <input type="checkbox" class="hidden" id="split-bill">
                        <div class="w-4 h-4 border-2 border-gray-300 rounded flex items-center justify-center cursor-pointer split-checkbox">
                            <i class="ri-check-line text-white text-xs hidden"></i>
                        </div>
                        <span>Répartir entre plusieurs clients</span>
                    </label>
                </div>

                <!-- Pourboires -->
                <div class="mb-6">
                    <h3 class="font-medium text-white mb-3">Pourboire</h3>
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <button class="tip-btn px-3 py-2 border border-gray-300 rounded-button text-sm hover:border-primary hover:text-primary" data-tip="5">
                            5% (6,68 €)
                        </button>
                        <button class="tip-btn px-3 py-2 border border-gray-300 rounded-button text-sm hover:border-primary hover:text-primary" data-tip="10">
                            10% (13,37 €)
                        </button>
                        <button class="tip-btn px-3 py-2 border border-gray-300 rounded-button text-sm hover:border-primary hover:text-primary border-primary text-primary bg-primary bg-opacity-10" data-tip="custom">
                            Libre
                        </button>
                    </div>
                    <input type="number" placeholder="Montant personnalisé" class="w-full px-3 py-2 border border-gray-300 rounded text-sm" id="custom-tip">
                </div>

                <!-- Moyens de paiement -->
                <div class="mb-6">
                    <h3 class="font-medium text-white mb-3">Moyens de paiement</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="payment-btn flex flex-col items-center p-4 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors" data-payment="cash">
                            <i class="ri-money-euro-circle-line text-2xl mb-2"></i>
                            <span class="text-sm font-medium">Espèces</span>
                        </button>
                        
                        <button class="payment-btn flex flex-col items-center p-4 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors" data-payment="mtn">
                            <i class="ri-smartphone-line text-2xl mb-2"></i>
                            <span class="text-sm font-medium">MTN Money</span>
                        </button>
                        
                        <button class="payment-btn flex flex-col items-center p-4 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors" data-payment="wave">
                            <i class="ri-water-flash-line text-2xl mb-2"></i>
                            <span class="text-sm font-medium">Wave</span>
                        </button>
                        
                        <button class="payment-btn flex flex-col items-center p-4 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors" data-payment="card">
                            <i class="ri-bank-card-line text-2xl mb-2"></i>
                            <span class="text-sm font-medium">Carte bancaire</span>
                        </button>
                        
                        <button class="payment-btn flex flex-col items-center p-4 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5 transition-colors col-span-2" data-payment="transfer">
                            <i class="ri-bank-line text-2xl mb-2"></i>
                            <span class="text-sm font-medium">Virement bancaire</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal Paiement -->
    <div id="payment-modal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50 hidden">
        <div class="bg-white/10 rounded-lg p-6 w-96 max-w-full mx-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-white" id="modal-title">Virement bancaire</h3>
                <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white" id="close-modal">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-white mb-1">Montant à payer</label>
                    <input type="number" value="133.65" class="w-full px-3 py-2 border border-gray-300 rounded text-lg font-semibold" id="payment-amount">
                </div>
                
                <div id="cash-fields" class="space-y-4 hidden">
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Montant reçu</label>
                        <input type="number" placeholder="Montant reçu" class="w-full px-3 py-2 border border-gray-300 rounded" id="cash-received">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Monnaie à rendre</label>
                        <input type="number" readonly="" class="w-full px-3 py-2 border border-gray-300 rounded bg-white/10" id="change-amount">
                    </div>
                </div>
                
                <div id="mobile-fields" class="hidden">
                    <label class="block text-sm font-medium text-white mb-1">Référence transaction</label>
                    <input type="text" placeholder="Numéro de référence" class="w-full px-3 py-2 border border-gray-300 rounded" id="transaction-ref">
                </div>
                
                <div>
                    <label class="flex items-center space-x-2 text-sm text-white">
                        <input type="checkbox" class="hidden" id="send-receipt">
                        <div class="w-4 h-4 border-2 border-gray-300 rounded flex items-center justify-center cursor-pointer receipt-checkbox">
                            <i class="ri-check-line text-white text-xs hidden"></i>
                        </div>
                        <span>Envoyer ticket par SMS/Email</span>
                    </label>
                </div>
                
                <div class="flex space-x-3 pt-4">
                    <button class="flex-1 px-4 py-2 border border-gray-300 text-white rounded-button whitespace-nowrap hover:bg-white/10" id="cancel-payment">
                        Annuler
                    </button>
                    <button class="flex-1 px-4 py-2 bg-secondary text-white rounded-button whitespace-nowrap hover:bg-green-600" id="validate-payment">
                        Valider le paiement
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ticket -->
    <div id="ticket-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white/10 rounded-lg p-6 w-96 max-w-full mx-4">
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="ri-check-line text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Paiement validé</h3>
                <p class="text-white">Ticket généré avec succès</p>
            </div>
            
            <div class="bg-white/10 rounded-lg p-4 mb-6 text-center">
                <div class="w-24 h-24 bg-white/10 rounded mx-auto mb-2 flex items-center justify-center">
                    <i class="ri-qr-code-line text-3xl text-gray-400"></i>
                </div>
                <p class="text-sm text-white">Code QR du ticket</p>
            </div>
            
            <div class="grid grid-cols-3 gap-3 mb-6">
                <button class="flex flex-col items-center p-3 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5">
                    <i class="ri-printer-line text-xl mb-1"></i>
                    <span class="text-xs">Imprimer</span>
                </button>
                <button class="flex flex-col items-center p-3 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5">
                    <i class="ri-whatsapp-line text-xl mb-1"></i>
                    <span class="text-xs">WhatsApp</span>
                </button>
                <button class="flex flex-col items-center p-3 border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-5">
                    <i class="ri-mail-line text-xl mb-1"></i>
                    <span class="text-xs">Email</span>
                </button>
            </div>
            
            <button class="w-full px-4 py-2 bg-primary text-white rounded-button whitespace-nowrap hover:bg-orange-600" id="close-ticket">
                Fermer
            </button>
        </div>
    </div>

    <script id="accordion-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');
            
            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const content = document.getElementById(targetId);
                    const arrow = this.querySelector('.accordion-arrow');
                    
                    if (content.classList.contains('active')) {
                        content.classList.remove('active');
                        arrow.style.transform = 'rotate(0deg)';
                    } else {
                        document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('active'));
                        document.querySelectorAll('.accordion-arrow').forEach(a => a.style.transform = 'rotate(0deg)');
                        
                        content.classList.add('active');
                        arrow.style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>

    <script id="checkbox-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            
            checkboxes.forEach(checkbox => {
                const visual = checkbox.nextElementSibling;
                const icon = visual.querySelector('i');
                
                visual.addEventListener('click', function() {
                    checkbox.checked = !checkbox.checked;
                    
                    if (checkbox.checked) {
                        visual.classList.add('bg-primary', 'border-primary');
                        visual.classList.remove('border-gray-300');
                        icon.classList.remove('hidden');
                    } else {
                        visual.classList.remove('bg-primary', 'border-primary');
                        visual.classList.add('border-gray-300');
                        icon.classList.add('hidden');
                    }
                });
            });
        });
    </script>

    <script id="payment-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            const paymentButtons = document.querySelectorAll('.payment-btn');
            const modal = document.getElementById('payment-modal');
            const modalTitle = document.getElementById('modal-title');
            const closeModal = document.getElementById('close-modal');
            const cancelPayment = document.getElementById('cancel-payment');
            const validatePayment = document.getElementById('validate-payment');
            const cashFields = document.getElementById('cash-fields');
            const mobileFields = document.getElementById('mobile-fields');
            const cashReceived = document.getElementById('cash-received');
            const changeAmount = document.getElementById('change-amount');
            const paymentAmount = document.getElementById('payment-amount');
            const ticketModal = document.getElementById('ticket-modal');
            const closeTicket = document.getElementById('close-ticket');
            
            let currentPaymentMethod = '';
            
            paymentButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    currentPaymentMethod = this.getAttribute('data-payment');
                    
                    const titles = {
                        'cash': 'Paiement par espèces',
                        'mtn': 'Paiement MTN Money',
                        'wave': 'Paiement Wave',
                        'card': 'Paiement par carte',
                        'transfer': 'Virement bancaire'
                    };
                    
                    modalTitle.textContent = titles[currentPaymentMethod];
                    
                    if (currentPaymentMethod === 'cash') {
                        cashFields.classList.remove('hidden');
                        mobileFields.classList.add('hidden');
                    } else if (currentPaymentMethod === 'mtn' || currentPaymentMethod === 'wave') {
                        cashFields.classList.add('hidden');
                        mobileFields.classList.remove('hidden');
                    } else {
                        cashFields.classList.add('hidden');
                        mobileFields.classList.add('hidden');
                    }
                    
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                });
            });
            
            cashReceived.addEventListener('input', function() {
                const received = parseFloat(this.value) || 0;
                const amount = parseFloat(paymentAmount.value) || 0;
                const change = received - amount;
                changeAmount.value = change >= 0 ? change.toFixed(2) : '0.00';
            });
            
            closeModal.addEventListener('click', closePaymentModal);
            cancelPayment.addEventListener('click', closePaymentModal);
            
            function closePaymentModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
            
            validatePayment.addEventListener('click', function() {
                closePaymentModal();
                ticketModal.classList.remove('hidden');
                ticketModal.classList.add('flex');
            });
            
            closeTicket.addEventListener('click', function() {
                ticketModal.classList.add('hidden');
                ticketModal.classList.remove('flex');
            });
        });
    </script>

    <script id="tip-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            const tipButtons = document.querySelectorAll('.tip-btn');
            const customTipInput = document.getElementById('custom-tip');
            
            tipButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    tipButtons.forEach(b => b.classList.remove('border-primary', 'text-primary', 'bg-primary', 'bg-opacity-10'));
                    
                    this.classList.add('border-primary', 'text-primary', 'bg-primary', 'bg-opacity-10');
                    
                    if (this.getAttribute('data-tip') === 'custom') {
                        customTipInput.focus();
                    } else {
                        customTipInput.value = '';
                    }
                });
            });
        });
    </script>

    <script id="timer-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            let startTime = new Date().getTime() - (1 * 3600 + 23 * 60 + 45) * 1000;
            
            function updateTimer() {
                const now = new Date().getTime();
                const elapsed = now - startTime;
                
                const hours = Math.floor(elapsed / (1000 * 60 * 60));
                const minutes = Math.floor((elapsed % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((elapsed % (1000 * 60)) / 1000);
                
                const timeString = 
                    String(hours).padStart(2, '0') + ':' +
                    String(minutes).padStart(2, '0') + ':' +
                    String(seconds).padStart(2, '0');
                
                document.getElementById('elapsed-time').textContent = timeString;
            }
            
            updateTimer();
            setInterval(updateTimer, 1000);
        });
    </script>
	            </main>
	        </div>
	    </div>
	</body>


</html>