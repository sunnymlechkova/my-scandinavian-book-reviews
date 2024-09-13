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
<form id="reviewForm">
    <label for="bookTitle">Book Title:</label><br>
    <input type="text" id="bookTitle" name="bookTitle" required><br><br>

    <label for="author">Author:</label><br>
    <input type="text" id="author" name="author" required><br><br>

    <label for="review">Review:</label><br>
    <textarea id="review" name="review" rows="5" required></textarea><br><br>

    <button type="submit">Submit Review</button>
</form>
<h2>Book Reviews</h2>
<div id="reviewList" class="review-box">
    <!-- Submitted reviews will be displayed here -->
</div>

<script>
    function loadReviews() 
        const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        const reviewList = document.getElementById('reviewList');
        const bookTitle = document.getElementById('bookTitle').value;
        const author = document.getElementById('author').value;
        const review = document.getElementById('review').value;

        saveReview(bookTitle, author, review);

        document.getElementById('reviewForm').reset();

        loadReviews();

    document.addEventListener('DOMContentLoaded', loadReviews);
</script>

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
