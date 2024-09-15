<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Reviews</title>
</head>
<body>
<h1>Submit Your Book Review</h1>

```
<form action="submit_review.php" method="POST">
    <label for="bookTitle">Book Title:</label><br>
    <input type="text" id="bookTitle" name="bookTitle" required><br><br>

    <label for="author">Author:</label><br>
    <input type="text" id="author" name="author" required><br><br>

    <label for="review">Review:</label><br>
    <textarea id="review" name="review" rows="5" required></textarea><br><br>

    <button type="submit">Submit Review</button>
</form>
<?php
$reviewsFile = 'reviews.txt';
if (file_exists($reviewsFile)) {
    $reviews = file($reviewsFile, FILE_IGNORE_NEW_LINES);
    foreach ($reviews as $review) {
        list($bookTitle, $author, $reviewText) = explode('|', $review);
        echo "<div><strong>$bookTitle</strong> by $author <br> $reviewText</div><br>";
    }
} else {
    echo "<p>No reviews yet.</p>";
}
?>






