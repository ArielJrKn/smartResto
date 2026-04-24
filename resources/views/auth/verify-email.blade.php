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
</head>

<body class="min-h-screen bg-white">
    <div class="flex min-h-screen">
        <!-- Côté Gauche - Section Promotionnelle -->
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('storage/images/resto.png')"></div>
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
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-['Pacifico'] text-[#102C26] mb-2">SmartResto-Hotel</h1>
                    <p class="text-gray-600">Vérification de votre adresse mail</p>
                </div>
                
                <div class="mb-4 text-md">
                    Enregistrement réussis mais avant de commencer à gérer votre établissement, nous vous avons envoyer un lien dans votre adresse mail. Cliquez sur ce lien pour la vérification. Si vous n'avez pas reçu de mail, vous pouvez re-tentez.
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div class="bg-primary">
                            <x-primary-button>
                                {{ __('Resend Verification Email') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body></html>
