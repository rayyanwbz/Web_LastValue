<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Control Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #333;
        }
        .control-panel {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-areas: 
                " .  up    .  "
                "left center right"
                " .  down  .  ";
            grid-gap: 10px;
        }
        .direction-button {
            padding: 20px;
            font-size: 20px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .direction-button:hover {
            background-color: #ddd;
            transform: scale(1.05);
        }
        .direction-button:active {
            background-color: #ccc;
        }
        .up {
            grid-area: up;
            background-color: #FF5733; /* Orange color */
            color: white;
        }
        .down {
            grid-area: down;
            background-color: #C70039; /* Red color */
            color: white;
        }
        .left {
            grid-area: left;
            background-color: #900C3F; /* Dark Red color */
            color: white;
        }
        .right {
            grid-area: right;
            background-color: #FFC300; /* Yellow color */
            color: white;
        }
        .center {
            grid-area: center;
            background-color: #000000; /* Black color */
            color: white;
        }
        .retreive {
            grid-area: down;
            background-color: #2196F3; /* Blue color */
            color: white;
        }
    </style>
</head>
<body>
    <h1>Control Panel</h1>
    <div class="control-panel">
        <form method="post" action="process.php">
            <button class="direction-button up" type="submit" name="direction" value="forward">Forward</button>
            <button class="direction-button down" type="submit" name="direction" value="backward">Backward</button>
            <button class="direction-button left" type="submit" name="direction" value="left">Left</button>
            <button class="direction-button right" type="submit" name="direction" value="right">Right</button>
            <button class="direction-button center" type="submit" name="direction" value="stop">Stop</button>
        </form>
        <form action="indexr.php">
            <button class="direction-button retreive" type="submit" name="last_value" value="last_value">Last Value</button>
        </form>
    </div>
</body>
</html>
