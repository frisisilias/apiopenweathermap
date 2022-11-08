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
	if ($method == 'POST') {

		//pengecekan parameter (filter parameter)
		if (isset($_POST['category']) and isset($_POST['image']) and isset($_POST['title']) and isset($_POST['author']) and isset($_POST['publisher']) and isset($_POST['year']) and isset($_POST['isbn']) and isset($_POST['language']) and isset($_POST['rating']) and isset($_POST['price']) and isset($_POST['page'])) {

			//echo "semua parameter lengkap";
			//die;

			$category = $_POST['category'];
			$image = $_POST['image'];
			$title = $_POST['title'];
			$author = $_POST['author'];
			$publisher = $_POST['publisher'];
			$year = $_POST['year'];
			$isbn = $_POST['isbn'];
			$language = $_POST['language'];
			$rating = $_POST['rating'];
			$price = $_POST['price'];
			$page = $_POST['page'];

			//jika metode sesuai
			$result['status'] = [
				"code" => 200,
				"description" => '1 Data Inserted'
			];

			//echo $nim;
			//die; 

			//buat query
			//$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
			$sql = "INSERT INTO list (category, image, title, author, publisher, year, isbn, language, rating, price, page)
								VALUES('$category', '$image', '$title', '$author', '$publisher', '$year', '$isbn', '$language', '$rating', '$price', '$page')";
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
		}
	} else {
		$result['status'] = [
			"code" => 400,
			"description" => 'Parameter Invalid'
		];
	}
} else {
	$result['status'] = [
		"code" => "400",
		"description" => 'API Key/Token Not Valid'
	];
}


//tampilkan data dalam format json 
echo json_encode($result, JSON_PRETTY_PRINT);
