<?php
require("dbh.php");
$ids = [1, 2, 3]; // Array of IDs to fetch
$products = []; // Array to store fetched products

$conn = dbconnect();

$productCount = 1; // Counter for product number

foreach ($ids as $id) {
    $stmt = $conn->prepare("SELECT name, subcategory_id, markid, image, price FROM products WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $name = $row['name'];
            $price = $row['price'];
            $category = $row['subcategory_id'];
            $mark = $row['markid'];
            $photo = base64_encode($row['image']);

            // Load two elements
            if (strpos($price, '.') === false) {
                $price = $price . ".00";
            }

            if (strpos($mark, '1') === 0) {
                $mark = "/rolex";
            }

            // Store each value in a separate variable
            ${"product" . $productCount . "name"} = $name;
            ${"product" . $productCount . "price"} = $price;
            ${"product" . $productCount . "category"} = $category;
            ${"product" . $productCount . "mark"} = $mark;
            ${"product" . $productCount . "photo"} = $photo;

            $products[] = [
                'name' => ${"product" . $productCount . "name"},
                'price' => ${"product" . $productCount . "price"},
                'category' => ${"product" . $productCount . "category"},
                'mark' => ${"product" . $productCount . "mark"},
                'photo' => ${"product" . $productCount . "photo"}
            ];

            $productCount++; // Increment the product counter

        }
    }
}
?>
