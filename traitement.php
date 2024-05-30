<?php
// Vérification que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : '';
    $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : '';
    $telephone = isset($_POST["telephone"]) ? $_POST["telephone"] : '';
    $commandes = isset($_POST["commande"]) ? $_POST["commande"] : '';
    $date_commande = isset($_POST["date_commande"]) ? $_POST["date_commande"] : '';
    $categories = isset($_POST["categories"]) ? $_POST["categories"] : '';  
    $adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : '';
    $code_postal = isset($_POST["code_postal"]) ? $_POST["code_postal"] : '';
    $ville = isset($_POST["ville"]) ? $_POST["ville"] : '';

    // Connexion à la base de données PostgreSQL en version local 
    // Faire réglage sur Vercel pour le déployer
    // Ne pas laisser les informations en clair 
    $host = 'localhost';
    $port = '5432';
    $dbname = 'db_boucherie';
    $user = 'postgres';
    $password = 'fidji333';

 

       // Convertir la chaîne de catégories en un tableau PostgreSQL
       $categories_array = '{' . implode(',', array_map('trim', explode(',', $categories))) . '}';
    
       $sql_commandes = "INSERT INTO commandes (categories, date_commande, commentaire) VALUES (:categories, :date_commande, :commandes)";
       $sql_utilisateurs = "INSERT INTO utilisateurs (nom, prenom, telephone, adresse, code_postal, ville) VALUES (:nom, :prenom, :telephone, :adresse, :code_postal, :ville)";
   

    try {
        $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        exit();
    }

    // Préparer la requête SQL avec des paramètres liés
    $sql = "INSERT INTO commandes (categories, date_commande, commentaire) VALUES (:categories, :date_commande, :commandes)";

    try {
        // Préparer et exécuter la requête avec des paramètres liés
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':categories', $categories);
        $stmt->bindParam(':date_commande', $date_commande);
        $stmt->bindParam(':commandes', $commandes);
        $stmt->execute();
    
        echo "La commande a été enregistrée avec succès.";
    } catch (PDOException $e) {
        // En cas d'erreur, afficher le message d'erreur
        echo "Erreur lors de l'enregistrement de la commande : " . $e->getMessage();
    }
    
    // Fermer la connexion à la base de données
    $conn = null;
} else {
    // Redirection vers la page du formulaire si le formulaire n'a pas été soumis
    header("Location: nousContacter.php");
    exit();
}
// Connexion à la base de données
// (Assurez-vous d'avoir déjà établi la connexion à la base de données dans votre script PHP)

// Sélectionnez les catégories depuis la table "catégorie"
$sql_categories = "SELECT * FROM categorie";
$stmt_categories = $conn->query($sql_categories);
$categories = $stmt_categories->fetchAll(PDO::FETCH_ASSOC);

// Connexion à la base de données
// (Assurez-vous d'avoir déjà établi la connexion à la base de données dans votre script PHP)

// Exécutez la requête SQL pour récupérer les catégories
$stmt_categories = $conn->query($sql_categories);

// Vérifiez si des catégories sont récupérées
if ($stmt_categories) {
    // Si des catégories sont récupérées, stockez-les dans la variable $categories
    $categories = $stmt_categories->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Si aucune catégorie n'est récupérée, définissez $categories comme un tableau vide
    $categories = [];
}


// Vérifiez si la connexion à la base de données est établie
if ($conn) {
    // La connexion à la base de données est établie avec succès
} else {
    // La connexion à la base de données a échoué
    echo "Erreur : Impossible de se connecter à la base de données.";
    exit();
}

?>
