<?php session_start(); ?>

<?php
$path = "../images/backend/";

$categoriesList = array_filter(glob($path.'*'), 'is_dir');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $categoryName = $_POST['category_name'];

    if (empty($categoryName)) {
        $_SESSION['message'] = "Please select a category.";
    } else {
        $categoryFolder = $path . $categoryName;

        if (!is_dir($categoryFolder)) {
            $_SESSION['message'] = "Category does not exist.";
        } else {
            if (!empty(array_filter($_FILES['images']['name']))) {
                $files = $_FILES['images'];
                $uploaded = true;

                foreach ($files['name'] as $key => $file_name) {
                    $file_tmp = $files['tmp_name'][$key];
                    $file_destination = $categoryFolder . '/' . $file_name;

                    if (move_uploaded_file($file_tmp, $file_destination) === false) {
                        $uploaded = false;
                        $_SESSION['message'] = "Failed to upload one or more images.";
                        break;
                    }
                }

                if ($uploaded) {
                    $_SESSION['message'] = "Images uploaded successfully to category '$categoryName'.";
                }
            } else {
                $_SESSION['message'] = "Please select images to upload.";
            }
        }
    }
    header("Location: images.php");
    exit();
}

if (isset($_GET['category_name'])) {
    $selectedCategory = $_GET['category_name'];
    if (!empty($selectedCategory)) {
        $categoryFolder = $path . $selectedCategory;
        $images = array_diff(scandir($categoryFolder), array('.', '..')); // Get current images in the directory
    }
}
?>

<?php include_once('./head.php'); ?>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-2">
                <?php include_once('./sidebar.php'); ?>
            </div>
            <div class="col-md-10">
                <h4 class="pt-3">Images</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="category_name">Select Category:</label>
                                <select name="category_name" id="categorySelect" class="form-control" onchange="showImages(this.value)">
                                    <option value="">Select Category</option>
                                    <?php
                                    foreach ($categoriesList as $category) {
                                        $categoryName = basename($category);
                                        echo '<option value="' . $categoryName . '">' . $categoryName . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="images">Select Images (Multiple):</label>
                                <input type="file" name="images[]" class="form-control-file" multiple>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mt-3">Upload Images</button>
                        </form>
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo '<div class="mt-3 alert alert-info" role="alert">' . $_SESSION['message'] . '</div>';
                            unset($_SESSION['message']);
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <div id="imagesContainer" >
                            <?php
                            if (isset($images)) {
                                if (count($images) > 0) {
                                    echo '<h6>Current Images in ' . $selectedCategory . '</h6>';
                                    foreach ($images as $image) {
                                        echo '<img src="' . $categoryFolder . '/' . $image . '" style="max-width: 200px; margin: 5px;" />';
                                    }
                                } else {
                                    echo '<p>No images in ' . $selectedCategory . ' folder.</p>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showImages(category) {
            window.location.href = 'images.php?category_name=' + category;
        }

        let params = new URLSearchParams(window.location.search);
        let categoryFromURL = params.get('category_name');

        document.addEventListener("DOMContentLoaded", function() {
            let select = document.getElementById('categorySelect');
            if (categoryFromURL !== null) {
                select.value = categoryFromURL;
            }
        });
    </script>
<?php include_once('./foot.php'); ?>