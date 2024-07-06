<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'test_db';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect() {
        $this->conn = null;
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}

class User {
    private $conn;
    private $table = 'users';

    public $name;
    public $email;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (name, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);

        $stmt->bind_param("sss", $this->name, $this->email, $hashed_password);

        if ($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);

        return false;
    }
}

$database = new Database();
$db = $database->connect();

$user = new User($db);
$user->name = $_POST['name'];
$user->email = $_POST['email'];
$user->password = $_POST['password'];

if ($user->create()) {
    echo 'User created successfully.';
} else {
    echo 'User could not be created.';
}
?>
