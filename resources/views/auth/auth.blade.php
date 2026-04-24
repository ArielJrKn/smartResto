<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartResto-Hotel - Authentification</title>
    <link rel="stylesheet" type="text/css" href="storage/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/scroll.css"> -->
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        .auth-input:focus { outline: none; border-color: #1e40af; }
        .tab-active { background-color: #102C26; color: white; }
        .tab-inactive { background-color: transparent; color: #6b7280; }
        .tab-inactive:hover { background-color: #f3f4f6; }
        .social-btn { transition: all 0.2s ease; }
        .social-btn:hover { transform: translateY(-1px); }
        .form-transition { transition: all 0.3s ease; }
        .custom-checkbox { appearance: none; }
        .custom-checkbox:checked { background-color: #1e40af; }
        .custom-select { appearance: none; }
    </style>
</head>

<body class="min-h-screen bg-white">
    <div class="flex min-h-screen">
        <!-- Côté Gauche - Section Promotionnelle -->
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url({{asset('storage/images/resto.png')}})"></div>
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            
            <div class="relative z-10 flex flex-col justify-between p-12 text-white w-full">
                <!-- Logo et Slogan -->
                <div>
                    <h1 class="text-4xl font-['Pacifico'] tmb-4">SmartResto-Hotel</h1>
                </div>
                
                <!-- Témoignage Client -->
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 max-w-md">

                    <p class="text-sm leading-relaxed">"SmartResto-Hotel a révolutionné la gestion de mon restaurant. Interface intuitive, fonctionnalités complètes, je recommande vivement !"</p>

                </div>
                
                <!-- Footer -->
                <div class="text-sm text-gray-300">
                    © 2026 SmartResto-Hotel. Tous droits réservés.
                </div>
            </div>
        </div>
        
        <!-- Côté Droit - Section Formulaire -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- En-tête Mobile -->
                <div class="lg:hidden text-center mb-8">
                    <h1 class="text-3xl font-['Pacifico'] text-[#102C26] mb-2">SmartResto-Hotel</h1>
                    <p class="text-gray-600">Gérez votre établissement simplement</p>
                </div>
                
                <!-- Onglets -->
                <div class="hide flex bg-gray-100 rounded-lg p-1 mb-8">
                    <button id="loginTab" class="flex-1 py-2 px-4 text-center rounded-md font-medium transition-all duration-200 tab-active">
                        CONNEXION
                    </button>
                    <button id="registerTab" class="flex-1 py-2 px-4 text-center rounded-md font-medium transition-all duration-200 tab-inactive">
                        INSCRIPTION
                    </button>
                </div>
                
                <!-- Formulaire de Connexion -->
                <div id="loginForm" class="form-transition">
                    <form class="space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Adresse e-mail</label>
                            <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="votre@email.com" required="">
                            @error('email')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                            <div class="relative">
                                <input type="password" name="password" id="loginPassword" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200 pr-12" placeholder="••••••••" required="">
                                <button type="button" id="toggleLoginPassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <i class="ri-eye-line"></i>
                                    </div>
                                </button>
                            </div>
                            @error('password')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" class="custom-checkbox w-4 h-4 border-2 border-gray-300 rounded">
                                <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                            </label>
                            <a href="{{ route('password.request') }}" class="text-sm text-[#102C26] hover:underline">Mot de passe oublié ?</a>
                        </div>
                        
                        <button type="submit" class="w-full bg-[#102C26] text-white py-3 px-4 !rounded-button font-medium rounded-lg transition-colors duration-200 whitespace-nowrap">
                            SE CONNECTER
                        </button>
                        
                        <div class="text-center">
                            <span class="text-sm text-gray-600">Pas encore de compte ? </span>
                            <button type="button" id="switchToRegister" class="text-sm text-[#102C26] hover:underline font-medium">
                                Créer un compte
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Formulaire d'Inscription -->
                <div id="registerForm" class="form-transition hidden">
                    <form class="space-y-6" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="sectionUser space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="Jean Dupont" name="name" required="">
                                @error('name')
                                <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Adresse e-mail</label>
                                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="votre@email.com" name="email" required="">
                                @error('email')
                                <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Numéro de téléphone</label>
                                <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="+33 1 23 45 67 89" name="tel" required="">
                                @error('tel')
                                <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                                <div class="relative">
                                    <input type="password" id="registerPassword" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200 pr-12" placeholder="••••••••" name="password" required="">
                                    <button type="button" id="toggleRegisterPassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-eye-line"></i>
                                        </div>
                                    </button>
                                </div>
                                @error('password')
                                <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Confirmer le mot de passe</label>
                                <div class="relative">
                                    <input type="password" id="confirmPassword" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200 pr-12" placeholder="••••••••" name="password_confirmation" required="">
                                    <button type="button" id="toggleConfirmPassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-eye-line"></i>
                                        </div>
                                    </button>
                                </div>
                                @error('password_confirmation')
                                <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Type d'établissement</label>
                                <div class="relative">
                                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200 custom-select pr-10" required="" name="typeEtat">
                                        <option value="resto">Restaurant</option>
                                        <option value="hotel">Hôtel</option>
                                        <option value="mixte">Mixte (Restaurant + Hôtel)</option>
                                    </select>
                                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-arrow-down-s-line text-gray-500"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="button" class="next w-full bg-[#102C26] text-white py-3 px-4 !rounded-md font-medium transition-colors duration-200 whitespace-nowrap">
                                Continuer
                            </button>
                            
                            <div class="text-center">
                                <span class="text-sm text-gray-600">Déjà un compte ? </span>
                                <button type="button" id="switchToLogin" class="text-sm text-[#102C26] hover:underline font-medium">
                                    Se connecter
                                </button>
                            </div>
                        </div>

                        <div class="sectionEtat space-y-6 hidden">
                            <div class="back my-8 text-xl font-semibold flex items-center gap-3">
                                <div>
                                    <i class="ri-arrow-left-line"></i>
                                </div>
                                <h1>Enregistrer votre établissement</h1>
                            </div>
                            <div class="sectionEtatInfo">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nom de l'établissement</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="Le Gourmet" required="" name="nameEtat">
                                    @error('nameEtat')
                                    <p class="text-red-500">{{$message}}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email de l'établissment</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="contact@Gourmet.bj" required="" name="emailEtat">
                                    @error('emailEtat')
                                    <p class="text-red-500">{{$message}}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="+22901XXXXXXXX" required="" name="telEtat">
                                    @error('telEtat')
                                    <p class="text-red-500">{{$message}}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Adresse</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="15 Rue de la Paix, 75001 Paris" required="" name="adresseEtat">
                                </div>

                                <div>
                                    <label class="flex items-start">
                                        <input type="checkbox" class="custom-checkbox w-4 h-4 border-2 border-gray-300 rounded mt-1" required="">
                                        <span class="ml-2 text-sm text-gray-600 leading-relaxed">
                                            J'accepte les <a href="#" class="text-[#102C26] hover:underline">Conditions Générales d'Utilisation</a> et la <a href="#" class="text-[#102C26] hover:underline">Politique de Confidentialité</a>
                                        </span>
                                    </label>
                            </div>
                            </div>
                        </div>

                        <button type="submit" class="register hidden w-full bg-[#102C26] text-white py-3 px-4 !rounded-md font-medium transition-colors duration-200 whitespace-nowrap">
                                S'inscrire
                            </button>
                    </form>
                </div>
                
                <!-- Séparateur -->
                <div class="hide my-8 flex items-center">
                    <div class="flex-1 border-t border-gray-300"></div>
                    <span class="px-4 text-sm text-gray-500">ou</span>
                    <div class="flex-1 border-t border-gray-300"></div>
                </div>
                
                <!-- Boutons de Connexion Sociale -->
                <a href="{{route('google.login')}}">
                    <div class=" hide space-y-3">
                        <button class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg social-btn hover:bg-gray-50 transition-all duration-200">
                            <div class="w-5 h-5 flex items-center justify-center mr-3">
                                <i class="ri-google-fill text-red-500"></i>
                            </div>
                            <span class="font-medium text-gray-700">Continuer avec Google</span>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const next = document.querySelector('.next');
            const back = document.querySelector('.back');

            const sectionEtat = document.querySelector('.sectionEtat');
            const sectionUser = document.querySelector('.sectionUser');
            const hides = document.querySelectorAll('.hide');
            const register = document.querySelector('.register');

            next.addEventListener('click', function(){
                sectionUser.classList.add('hidden');
                sectionEtat.classList.remove('hidden');
                register.classList.remove('hidden')
                hides.forEach(hide=>{
                    hide.classList.add('hidden')
                })
            })

            back.addEventListener('click', function(){
                sectionUser.classList.remove('hidden');
                sectionEtat.classList.add('hidden');
                register.classList.add('hidden')
                hides.forEach(hide=>{
                    hide.classList.remove('hidden')
                })
            })
        });
    </script>
    
    <script id="tab-switcher">
        document.addEventListener('DOMContentLoaded', function() {
            const loginTab = document.getElementById('loginTab');
            const registerTab = document.getElementById('registerTab');
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const switchToRegister = document.getElementById('switchToRegister');
            const switchToLogin = document.getElementById('switchToLogin');
            
            function showLogin() {
                loginTab.className = loginTab.className.replace('tab-inactive', 'tab-active');
                registerTab.className = registerTab.className.replace('tab-active', 'tab-inactive');
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
            }
            
            function showRegister() {
                registerTab.className = registerTab.className.replace('tab-inactive', 'tab-active');
                loginTab.className = loginTab.className.replace('tab-active', 'tab-inactive');
                registerForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
            }
            
            loginTab.addEventListener('click', showLogin);
            registerTab.addEventListener('click', showRegister);
            switchToRegister.addEventListener('click', showRegister);
            switchToLogin.addEventListener('click', showLogin);
        });
    </script>
    
    <script id="password-toggle">
        document.addEventListener('DOMContentLoaded', function() {
            function setupPasswordToggle(toggleId, inputId) {
                const toggle = document.getElementById(toggleId);
                const input = document.getElementById(inputId);
                
                toggle.addEventListener('click', function() {
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                    
                    const icon = toggle.querySelector('i');
                    if (type === 'password') {
                        icon.className = 'ri-eye-line';
                    } else {
                        icon.className = 'ri-eye-off-line';
                    }
                });
            }
            
            setupPasswordToggle('toggleLoginPassword', 'loginPassword');
            setupPasswordToggle('toggleRegisterPassword', 'registerPassword');
            setupPasswordToggle('toggleConfirmPassword', 'confirmPassword');
        });
    </script>

</body></html>