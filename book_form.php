<?php


Class book_db {
    private $server = "mysql:host=localhost;dbname=book_db";
    private $user = "root";
    private $pass = "12345";
    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE =>
        PDO::FETCH_ASSOC
    );
    protected $con;

    public function openConnection()
    {
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;


        } catch (PDOException $e) {
            echo "There is some problem in the connection :" . $e->getMessage();
        }
    }


    public function closeConnection()
    {
        $this->con = null;
    }



    // $connection = mysqli_connect('localhost', 'root', '', 'book_db');
    public function mysqli_connect($server, $user, $pass, $options )
    {
        if (isset($_POST['send'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $location = $_POST['location'];
            $guests = $_POST['guests'];
            $arrivals = $_POST['arrivals'];
            $leaving = $_POST['leaving'];


            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO book_form(`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->execute ([$name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);
            // mysqli_query($connection, $request);

            // header('location: index.php');

        } else {
            echo 'something went wrong please try again!';
        }
    }
}

$book_db = new book_db();
?>