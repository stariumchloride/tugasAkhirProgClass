<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $director = isset($_POST['director']) ? $_POST['director'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO film VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $category, $title, $genre, $country, $director]);
    // Output message
    header('Location: read.php');
    // $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="email">Email</label>
        <label for="category">category</label>
        <input type="text" name="email" id="email" required>
        <input type="text" name="category" id="category" required>
        <label for="title">title</label>
        <input type="text" name="title" id="title" required>
        <label for="genre">genre</label>
        <label for="country">country</label>
        <input type="text" name="genre" id="genre" required>
        <input type="text" name="country" id="country" required>
        <label for="director">director</label>
        <input type="text" name="director" id="director" required>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>