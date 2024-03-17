<!DOCTYPE html>
<html>

<head>
    <title>Chatbot</title>
</head>

<body>
    <button id="helpButton">Help Me</button>
    <div class="container">
        <h1>My Icons <i class="fas fa-heart"></i></h1>
    </div>

    <script>
        document.getElementById('helpButton').addEventListener('click', () => {
            fetch('/help-me', {
                method: 'POST'
            });
        });
    </script>
</body>

</html>