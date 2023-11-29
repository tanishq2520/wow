<?php
if(isset($_POST['submit'])) {
    $product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
    $sdf_price = filter_input(INPUT_POST, 'sdf_price', FILTER_SANITIZE_NUMBER_FLOAT);
    $hsn_code = filter_input(INPUT_POST, 'hsn_code', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $mrp_price = filter_input(INPUT_POST, 'mrp_price', FILTER_SANITIZE_NUMBER_FLOAT);
    $product_weight = filter_input(INPUT_POST, 'product_weight', FILTER_SANITIZE_STRING);
    $style_code = filter_input(INPUT_POST, 'style_code', FILTER_SANITIZE_STRING);
    $gst_percentage = filter_input(INPUT_POST, 'gst_percentage', FILTER_SANITIZE_NUMBER_FLOAT);

    $front_image = $_FILES['front_image']['name'];
    $front_image_temp = $_FILES['front_image']['tmp_name'];
    move_uploaded_file($front_image_temp, "uploads/$front_image");

    $other_images = [];
    foreach ($_FILES['other_images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['other_images']['name'][$key];
        move_uploaded_file($tmp_name, "uploads/$file_name");
        $other_images[] = $file_name;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="add_product.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <label for="product_name"><b>Product Name</b></label>
        <input type="text" placeholder="Enter Product Name" name="product_name" required>

        <label for="sdf_price"><b>SDF Price</b></label>
        <input type="text" placeholder="Enter SDF Price" name="sdf_price" required>

        <label for="hsn_code"><b>HSN Code</b></label>
        <input type="text" placeholder="Enter HSN Code" name="hsn_code" required>

        <label for="front_image"><b>Front Image</b></label>
        <input type="file" name="front_image" required>

        <label for="category"><b>Select Category</b></label>
        <select name="category" id="category" required>
            <option value="">Select Category</option>
            <option value="Category 1">Category 1</option>
            <option value="Category 2">Category 2</option>
        </select>

        <label for="mrp_price"><b>MRP Price</b></label>
        <input type="text" placeholder="Enter MRP Price" name="mrp_price" required>

        <label for="product_weight"><b>Product Weight</b></label>
        <input type="text" placeholder="Enter Product Weight" name="product_weight" required>

        <label for="style_code"><b>Style Code</b></label>
        <input type="text" placeholder="Enter Style Code" name="style_code" required>

        <label for="other_images"><b>Other Images</b></label>
        <input type="file" name="other_images[]" multiple required>

        <label for="gst_percentage"><b>GST %</b></label>
        <input type="text" placeholder="Enter GST %" name="gst_percentage" required>

        <button type="submit" name="submit">Add Product</button>
    </div>
</form>
</body>
</html>
