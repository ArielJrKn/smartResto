<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartResto-Hotel - Authentification à deux facteurs</title>
    <link rel="stylesheet" type="text/css" href="{{asset('storage/css/style.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="css/scroll.css"> -->
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

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
                <div class="lg text-center mb-8">
                    <h1 class="text-3xl text-[#102C26] mb-2">Réinitialisation du mot de passe</h1>
                </div>
                
                <!-- Formulaire de Connexion -->
                <div id="loginForm" class="form-transition">
                    <!-- Session Status -->
                    <form class="space-y-6" method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" :value="old('email', $request->email)" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200" placeholder="exemple@gmail.com" required="">
                            @error('email')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nouveau mot de passe</label>
                                <div class="relative">
                                    <input type="password" autocomplete="new-password" id="registerPassword" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200 pr-12" placeholder="••••••••" name="password" required="">
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
                                    <input type="password" autocomplete="new-password" id="confirmPassword" class="w-full px-4 py-3 border border-gray-300 rounded-lg auth-input transition-colors duration-200 pr-12" placeholder="••••••••" name="password_confirmation" required="">
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

                        
                        <button type="submit" class="w-full bg-[#102C26] text-white py-3 px-4 !rounded-button font-medium rounded-lg transition-colors duration-200 whitespace-nowrap">
                            Changer mon mot de passe
                        </button>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>


</body></html>