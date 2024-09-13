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

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

header {
    background-color: #444;
    color: white;
    padding: 1rem;
    text-align: center;
}

main {
    padding: 2rem;
}

.review-form, .reviews-list {
    background-color: white;
    padding: 1.5rem;
    margin-bottom: 2rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input, textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #28a745;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

#reviewsContainer {
    display: flex;
    flex-direction: column;
}

.review-card {
    background-color: #fff;
    border-radius: 5px;
    padding: 1rem;
    margin-bottom: 1rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.review-card h3 {
    margin: 0;
    font-size: 1.2rem;
}

.review-card p {
    margin: 0.5rem 0;
}

document.getElementById('reviewForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const bookTitle = document.getElementById('bookTitle').value;
    const author = document.getElementById('author').value;
    const review = document.getElementById('review').value;

    addReview(bookTitle, author, review);

    document.getElementById('bookTitle').value = '';
    document.getElementById('author').value = '';
    document.getElementById('review').value = '';
});

function addReview(title, author, reviewText) {
    const reviewsContainer = document.getElementById('reviewsContainer');

    const reviewCard = document.createElement('div');
    reviewCard.className = 'review-card';

    const reviewTitle = document.createElement('h3');
    reviewTitle.textContent = `${title} by ${author}`;
    reviewCard.appendChild(reviewTitle);

    const reviewContent = document.createElement('p');
    reviewContent.textContent = reviewText;
    reviewCard.appendChild(reviewContent);

    reviewsContainer.prepend(reviewCard);
}

