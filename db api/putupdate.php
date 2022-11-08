<?php
// header hasil berbentuk json 
header("Content-Type:application /json; charset=UTF-8");

//tangkap metode akses
$method = $_SERVER['REQUEST_METHOD'];

//variabel hasil 
$result = array(); #bersifat array

//cek metode (filter metode)
if ($method == 'PUT') {

	parse_str(file_get_contents("php://input"), $_PUT);

	//pengecekan parameter (filter parameter)
	if (
		isset($_PUT['category']) and isset($_PUT['image']) and isset($_PUT['title']) and isset($_PUT['author'])
		and isset($_PUT['publisher']) and isset($_PUT['year']) and isset($_PUT['isbn']) and isset($_PUT['language'])
		and isset($_PUT['rating']) and isset($_PUT['price']) and isset($_PUT['page']) and isset($_PUT['id'])
	) {

		//echo "semua parameter lengkap";
		//die;

		$category = $_PUT['category'];
		$image = $_PUT['image'];
		$title = $_PUT['title'];
		$author = $_PUT['author'];
		$publisher = $_PUT['publisher'];
		$year = $_PUT['year'];
		$isbn = $_PUT['isbn'];
		$language = $_PUT['language'];
		$rating = $_PUT['rating'];
		$price = $_PUT['price'];
		$page = $_PUT['page'];
		$id = $_PUT['id'];

		//jika metode sesuai
		$result['status'] = [
			"code" => 200,
			"description" => '1 Data Updated'
		];

		//echo $nim;
		//die; 

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
		//$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
		$sql = "UPDATE list SET category='$category', image='$image', title='$title', author='$author', 
				publisher='$publisher', year='$year', isbn='$isbn', language='$language', rating='$rating', 
				price='$price', page='$page' WHERE id = '$id'";

		//eksekusi query
		$conn->query($sql);

		//masukkan ke array result
		//membuat array yang terasosiasi
		$result['results'] = [
			"category" => $category,
			"image" => $image,
			"title" => $title,
			"author" => $author,
			"publisher" => $publisher,
			"year" => $year,
			"isbn" => $isbn,
			"language" => $language,
			"rating" => $rating,
			"price" => $price,
			"page" => $page
		];
	} else {
		$result['status'] = [
			"code" => 400,
			"description" => 'Parameter Invalid'
		];
	}
} else {
	$result['status'] = [
		"code" => 400,
		"description" => 'Method Not Valid'
	];
}


//tampilkan data dalam format json 
echo json_encode($result, JSON_PRETTY_PRINT);
