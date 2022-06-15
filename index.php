<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Search Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "index.css">
</head>
<body>
    
    <div class = "wrapper">
        <div class = "logo">
            <div class = "container">
                <p>Pre<span>view</span></p>
                <div class = "home">
                <a href="logout.php">LOGOUT</a>
                </div>
            </div>
        </div>
        <div class = "search-container">
            <div class = "search-element">
                <h3 style="color:yellow;">SEARCH:</h3>
                <input type = "text" class = "form-control" placeholder="Enter a movie name" id = "movie-search-box" onkeyup="findMovies()" onclick = "findMovies()" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                <div class = "search-list" id = "search-list">
                </div>
            </div>
        </div>
        <div class = "container">
            <div class = "result-container">
                <div class = "result-grid" id = "result-grid">
                </div>
            </div>
        </div>
    </div>
    <script src = "script.js"></script>
</body>
</html>