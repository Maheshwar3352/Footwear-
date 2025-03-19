<db_query class="php"><?php
    // Database connection
    $host = "localhost";  // Database host
    $dbname = "ghanekar_footwear";  // Database name
    $username = "root";  // Your database username
    $password = "";  // Your database password
    
    try {
        // Create a PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Example SQL query: Fetch contact information from the 'contacts' table
        $stmt = $pdo->query("SELECT * FROM contacts");
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Output the results as JSON
        echo json_encode($contacts);
    } catch (PDOException $e) {
        // Handle any connection or query errors
        echo "Error: " . $e->getMessage();
    }
    ?>
    </db_query>