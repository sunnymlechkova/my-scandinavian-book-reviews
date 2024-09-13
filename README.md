<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Reviews</title>
    <link rel="stylesheet" href="styles.css">
<style>
body {
background-color:
beige;
}
</style>
</head>
<body>
    <header>
        <h1>Book Reviews</h1>
        
    </header>
<?php
$bookTitle = $_POST['bookTitle'];
$author = $_POST['author'];
$review = $_POST['review'];
// Store the reviews in a text file (you can use a database like MySQL for a more advanced approach)
$reviewEntry = $bookTitle . '|' . $author . '|' . $review . "\\n";
file_put_contents('reviews.txt', $reviewEntry, FILE_APPEND);
// Redirect back to the reviews page
header('Location: reviews.php');
?>
<?php
$reviews = file('reviews.txt');  // Read the reviews file
foreach ($reviews as $review) {
list($bookTitle, $author, $reviewText) = explode('|', $review);
echo "<div><strong>$bookTitle</strong> by $author <br> $reviewText</div><br>";
}
?>
    <main>
        <section class="review-form">
            <h2>Submit Your Review</h2>
            <form id="reviewForm">
                <label for="bookTitle">Book Title:</label>
                <input type="text" id="bookTitle" name="bookTitle" required><br><br>

                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required><br><br>

                <label for="review">Review:</label><br>
                <textarea id="review" name="review" rows="5" required></textarea><br><br>

                <button type="submit">Submit Review</button>
            </form>
        </section>

        <section class="reviews-list">
            <h2>Recent Reviews</h2>
            <div id="reviewsContainer"></div>
        </section>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
