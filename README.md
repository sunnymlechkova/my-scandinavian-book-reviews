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
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyC53QVtV9fOVm7c1Qpg2xQPMj-KV_XXYB8",
    authDomain: "scandinavian-book-reviews.firebaseapp.com",
    projectId: "scandinavian-book-reviews",
    storageBucket: "scandinavian-book-reviews.appspot.com",
    messagingSenderId: "684346841102",
    appId: "1:684346841102:web:723656b4093e4c5c1f045f",
    measurementId: "G-SZ9QDERBRP"
  };

  // Initialize Firebase
console.log("test");
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>






