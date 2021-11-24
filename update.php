<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
        $country = isset($_POST['country']) ? $_POST['country'] : '';
        $director = isset($_POST['director']) ? $_POST['director'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE film SET id = ?, name = ?, email = ?, category = ?, title = ?, genre = ?, country = ?, director = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $email, $category, $title, $genre, $country, $director, $_GET['id']]);
        header('Location: read.php');
        // $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM film WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="nama" value="<?=$contact['name']?>" id="nama">
        <label for="email">Email</label>
        <label for="category">category</label>
        <input type="text" name="email" id="email" value="<?=$contact['email']?>">
        <input type="text" name="category" id="category" value="<?=$contact['category']?>">
        <label for="title">title</label>
        <input type="text" name="title" id="title" value="<?=$contact['title']?>">
        <label for="genre">genre</label>
        <label for="country">country</label>
        <input type="text" name="genre" id="genre" value="<?=$contact['genre']?>">
        <input type="text" name="country" id="country" value="<?=$contact['country']?>">
        <label for="director">director</label>
        <input type="text" name="director" id="director" value="<?=$contact['director']?>">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>