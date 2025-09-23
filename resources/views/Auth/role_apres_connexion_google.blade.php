<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="storage/style/inscription.css">
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="storage/js_style/student_dashboard_tailwindConfig.js"></script>


</head>
<body class="dark">
    <!-- <div class="progress-bar"></div> -->
    <div>
        <div>
             <img src="https://readdy.ai/api/search-image?query=modern%20web%20development%20coding%20on%20laptop%20screen%2C%20showing%20HTML%2C%20CSS%20and%20JavaScript%20code%2C%20professional%20lighting%2C%20clean%20desk%20setup%2C%20high%20quality&width=400&height=200&seq=course1&orientation=landscape" alt="Web Development" class="w-full h-full object-cover fixed">
        </div>
        <div class="w-full mx-auto p-3 absolute top-3 flex-col flex items-center justify-center h-full">
            <div class="lg:w-2/5 sm:w-full backdrop-filter backdrop-blur-3xl rounded-lg shadow-lg p-8 card">
                <div class="text-center mb-8">
                @auth
                    <h1 class="text-xl text-white mb-2">
                        Bienvenue à vous {{ Auth::user()->name }} <br> êtes vous un...
                    </h1>
                @endauth                    
                <div class="h-px bg-gray-200 my-4"></div>
                </div>
                
                <form id="registerForm" method="post" action="#" class="space-y-6">
                    @csrf
                    <div class="form-group">
                        <div class="relative">
                            <div class="absolute left-3 top-3 w-5 h-5 flex items-center justify-center text-gray-500">
                                <i class="ri-user-community-line"></i>
                            </div>
                            <select id="role" name="role" class="form-control bg-transparent w-full px-10 py-3 text-gray-100 border border-gray-300 rounded-button focus:outline-none">
                                s<option class="text-gray-900" value="apprenant">Apprenant</option>
                                <option class="text-gray-900" value="formateur">Formateur</option>
                                <option class="text-gray-900" value="entreprise">Entreprise / Recruteur</option>
                                <option class="text-gray-900" value="user">Personne Lambda</option>
                            </select>
                            <label for="role" class="form-label text-gray-500 bg-transparent ml-4">Choisir votre rôle</label>
                            @error('role')
                            <div class="error-message">{{$message}}</div>
                            @enderror
                        </div>


                    </div>
                    
                    <button type="submit" class="w-full h-10 bg-primary text-white py-3 rounded-button hover:bg-primary/90 transition-all duration-300 font-medium !rounded-button whitespace-nowrap">
                        S'inscrire
                    </button>
                </form>
            </div>

            <div class="text-center mt-6 text-gray-100 text-sm">
                <p>© 2025 Tous droits réservés</p>
            </div>
        </div>
    </div>

    <!-- <script src="storage/js_style/inscription.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <script>

            window.addEventListener('onload', () => {
                NProgress.start();
            })
            // Quand la page est chargée → arrêter
            window.addEventListener("load", () => {
                NProgress.done();
            });
    </script>


</body>
</html>