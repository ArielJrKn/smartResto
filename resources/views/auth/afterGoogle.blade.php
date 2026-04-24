<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartResto-Hotel - Authentification</title>
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
                <div class="lg:hidden text-center mb-8">
                    <h1 class="text-3xl font-['Pacifico'] text-[#102C26] mb-2">SmartResto-Hotel</h1>
                    <p class="text-gray-600">Gérez votre établissement simplement</p>
                </div>
                
                
                <!-- Formulaire d'Inscription -->
                <div id="registerForm" class="form-transition">
                    <form class="space-y-6" method="POST" action="{{ route('registerAfterGoogle') }}">
                        @csrf
                        <div class="sectionEtat space-y-6">
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

                        <button type="submit" class="register w-full bg-[#102C26] text-white py-3 px-4 !rounded-md font-medium transition-colors duration-200 whitespace-nowrap">
                                S'inscrire
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body></html>