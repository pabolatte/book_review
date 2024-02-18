<?php require 'partials/head.php' ?>

<?php if (isset($_GET['signup']) && $_GET['signup'] === 'success') echo '<script> alert("SIGNUP SUCCESSFUL!") </script>'; ?>
<?php if (isset($_GET['login']) && $_GET['login'] === 'success') echo '<script> alert("LOGIN SUCCESSFUL!") </script>'; ?>
    <p>Welcome <?php echo ucfirst($_SESSION['user_username'] ?? 'guest') ?> !</p>
    <ul>
        <li><a href="/login">Login</a></li>
        <li><a href="/signup">Signup</a></li>
        <li><form action="/logout" method='post'><button type='submit'>Logout</button></form></li>
    </ul>
    <ul>
    <?php
        foreach ($result as $book) { ?>
        <img src="./public/thumbnail.jpg" alt="book thumbnail image">
        <li>Title: " <?php echo htmlspecialchars($book["title"]); ?></li>
        <li>Author: " <?php echo  htmlspecialchars($book["author"]); ?></li> 
        <li>ISBN: " <?php echo htmlspecialchars($book["isbn"]); ?></li>  
        <a href="/books/<?php echo htmlspecialchars($book["isbn"]); ?>">CHECK BOOK</a>
        <br>
    <?php } ?>

    <a href="/books/new">Create New Book</a>
    </ul>

<?php require 'partials/footer.php' ?>