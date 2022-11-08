<?php                                                  
	// header hasil berbentuk json 
	header("Content-Type:application /json; charset=UTF-8");

	// tangkap key 
    $header = apache_request_headers();
    $key = $header['key'];

	//tangkap metode akses
	$method = $_SERVER['REQUEST_METHOD'];

	//variabel hasil 
	$result = array(); #bersifat array

	//S:koneksi database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "buku";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// E:koneksi database 

	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	printf("Initial character set: %s\n", mysqli_character_set_name($conn));

	/* change character set to utf8mb4 */
	if (!mysqli_set_charset($conn, "utf8mb4")) {
	    printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
	    exit();
	} else {
	    printf("Current character set: %s\n", mysqli_character_set_name($conn));
	}

	// cek user
    $sql = "SELECT * FROM user WHERE key_generate='$key'";
	$user = $conn->query($sql);

	if ($user->num_rows > 0) {
	//cek metode (filter metode)
		if($method=='GET'){

			//pengecekan parameter (filter parameter)
			if(isset($_GET['category'])){
				//tangap parameter
				$category = $_GET['category'];
				//jika metode sesuai
				$result['status'] = [
					"code" => 200,
					"description" => 'Request Valid'
				];

			//echo $nim;
			//die; 

			//buat query
			$sql = "SELECT * FROM list WHERE category='$category'";
			//eksekusi query
			$hasil_query = $conn->query($sql);

			//masukkan ke array result
			//membuat array yang terasosiasi
			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);}
		}else{
			$result['status'] = [
				"code" => 400,
				"description" => 'Parameter Invalid'
			];
		}	

	}else {
        $result['status'] = [
            "code" => "400",
            "description" => 'API Key/Token Not Valid'
        ];  
    }

	//tampilkan data dalam format json 
	echo json_encode($result, JSON_PRETTY_PRINT);
		
?>

