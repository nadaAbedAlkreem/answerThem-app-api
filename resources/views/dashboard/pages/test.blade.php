<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Test</title>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bar Rating plugin JS -->
    <script src="https://cdn.rawgit.com/antennaio/jquery-bar-rating/master/dist/jquery.barrating.min.js"></script>

    <!-- Include FontAwesome CSS for stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Include Bar Rating plugin CSS for the stars -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/antennaio/jquery-bar-rating/master/dist/themes/fontawesome-stars.css">
</head>
<body>
<label for="rating">Rating:</label>
<select id="rating" name="rating">
    <option value="1">1 Star</option>
    <option value="2">2 Stars</option>
    <option value="3">3 Stars</option>
    <option value="4">4 Stars</option>
    <option value="5">5 Stars</option>
</select>

<script>
    $(document).ready(function() {
        $('#rating').barrating({
            theme: 'fontawesome-stars',
            showSelectedRating: false
        });
    });
</script>
</body>
</html>
