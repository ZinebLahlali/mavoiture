<?php
include_once './classes/Vehicule.php';
include_once './classes/Database.php';
  $db = new Database();
  $pdo = $db->getPdo();
 
  
//  if(!isset($_GET['id_car'])) {

//     die("voiture manquant");
//  }

 $id_car = $_GET['id'] ?? null;
  if($id_car){
    $vehicule = Vehicule::getById($id_car);
  }



?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MaBagnole | Location de voitures au Maroc</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans">

  <header class="bg-white shadow-sm sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <div class="bg-red-600 p-2 rounded-lg">
          <i class="fas fa-car text-white text-xl"></i>
        </div>
        <span class="font-bold text-2xl tracking-tight text-gray-800">LOCATION<span class="text-red-600">VOITURE</span>.ma</span>
      </div>

      <div class="hidden md:flex items-center space-x-8 font-medium text-gray-600">
        <a href="Home.php" class="hover:text-red-600 transition">Accueil</a>
        <a href="index.php" class="hover:text-red-600 transition">Nos Voitures</a>
        <a href="#" class="hover:text-red-600 transition">Contact</a>
      </div>
      
      <button class="md:hidden text-gray-600"><i class="fas fa-bars text-2xl"></i></button>
         <span class="font-bold text-red-600">LOCATION-VOITURE.ma</span>
        
     
    </nav>
  </header>

  <section id="fleet" class="container mx-auto px-6 py-16">
    <div class="flex justify-between items-end mb-12">
     
    </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow group">

                            <!-- Image -->
                            <div class="relative overflow-hidden">
                            <img src="<?php echo htmlspecialchars($vehicule["image"]); ?>" 
                                class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 right-4 bg-white px-4 py-1 rounded-full text-sm font-bold shadow-sm">
                                Le prix/Jour: <?php echo htmlspecialchars($vehicule["prix"]); ?> DH
                            </span>
                            </div>

                            <!-- Main info -->
                            <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-1">
                                Marque: <?php echo htmlspecialchars($vehicule["marque"]); ?>
                            </h4>
                            <h4 class="text-lg font-semibold text-gray-600">
                                Catégorie: <?php echo htmlspecialchars($vehicule["categorie"]); ?>
                            </h4>
                            </div>

                            <!-- Details (design like image) -->
                            <div class="px-6 pb-6 grid grid-cols-2 gap-4 text-gray-700">

                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-user-group text-green-600"></i>
                                <span class="font-medium">
                                    Nombre places: <?php echo htmlspecialchars($vehicule["nb_places"]); ?>
                                </span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-gas-pump text-green-600"></i>
                                <span class="font-medium">
                                Carburant: <?php echo htmlspecialchars($vehicule["carburant"]); ?>
                                </span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-gears text-green-600"></i>
                                <span class="font-medium">
                                Boite vitesse: <?php echo htmlspecialchars($vehicule["boit_vitesse"]); ?>
                                </span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-suitcase text-green-600"></i>
                                <span class="font-medium">
                                Bagages: <?php echo htmlspecialchars($vehicule["bagages"]); ?>
                                </span>
                            </div>

                            </div>
                        </div>
            </div>

</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
      <div>
        <span class="font-bold text-2xl tracking-tight">LOCATION<span class="text-red-600">VOITURE</span>.ma</span>
        <p class="mt-4 text-gray-400">Votre partenaire de confiance pour la location de véhicules au Maroc depuis 2010.</p>
      </div>
      <div>
        <h4 class="text-lg font-bold mb-6">Liens Rapides</h4>
        <ul class="space-y-4 text-gray-400">
          <li><a href="#" class="hover:text-white transition">Nos Agences</a></li>
          <li><a href="#" class="hover:text-white transition">Conditions Générales</a></li>
          <li><a href="#" class="hover:text-white transition">F.A.Q</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-bold mb-6">Newsletter</h4>
        <div class="flex shadow-sm">
          <input type="email" placeholder="Votre email" class="bg-gray-800 border-none rounded-l-lg px-4 py-2 w-full focus:ring-2 focus:ring-red-600">
          <button class="bg-red-600 px-4 py-2 rounded-r-lg hover:bg-red-700 transition"><i class="fas fa-paper-plane"></i></button>
        </div>
      </div>
    </div>
    <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
      <p>&copy; 2025 MaBagnole. Tous droits réservés.</p>
    </div>
</footer>
</body>
</html>

  </body>
</html>