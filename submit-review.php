<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$bookTitle = htmlspecialchars($_POST['bookTitle']);
$author = htmlspecialchars($_POST['author']);
$review = htmlspecialchars($_POST['review']);

```
// Create the review entry
$reviewEntry = $bookTitle . '|' . $author . '|' . $review . "\\n";

// Save the review into the reviews.txt file
file_put_contents('reviews.txt', $reviewEntry, FILE_APPEND);

// Redirect back to the main page
header('Location: index.php');
exit();

```

}
?>
