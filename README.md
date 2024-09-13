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

Малък наръчник по Люка;
Майк Викинг;
“Малък наръчник по люка” е една сладка, много уютна книжка, свързана със скандинавското (и по-конкретно с датското) възприятие за живота като цяло. С всяка прочетена страница от книгата все повече започвах да се възхищавам на манталитета на датчаните. ❗️Не казвам, че всичко там е перфектно (и авторът сам си го признава)❗️, но просто се доближава много до моите представи за живота и как бих искала да изглежда той в световен мащаб.

 "<div><strong></strong> <br></div><br>";
}
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
