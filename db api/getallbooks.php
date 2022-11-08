<?php                                                  
		// header hasil berbentuk json 
		header("Content-Type:application /json; charset=UTF-8");

		//tangkap metode akses
		$method = $_SERVER['REQUEST_METHOD'];

		//variabel hasil 
		$result = array(); #bersifat array

		//cek metode
		if($method=='GET'){
			//jika metode sesuai
			$result['status'] = [
			"code" => 200,
			"description" => 'Request Valid'
			];

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

			//buat query
			$sql = "SELECT * FROM list";
			//eksekusi query
			$hasil_query = $conn->query($sql);

			//masukkan ke array result
			//membuat array yang terasosiasi
			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);

		}else{
			$result['status'] = [
				"code" => 400,
				"description" => 'Request Not Valid'
			];
		}
		//tampilkan data dalam format json
		echo json_encode($result, JSON_PRETTY_PRINT);
?>