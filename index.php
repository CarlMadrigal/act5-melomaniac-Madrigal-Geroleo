<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="Image/logo.jpg">
    <title>Dabify</title>
    <style>
        body {
            font-family: 'verdana', 'Arial';
            background-color: hsl(0, 0%, 100%);
            color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .songlist {
            list-style: none;
            align-items: baseline;
            display: flex;
            flex-direction: column;
            margin: 25px;
        }

        .songitem {
            text-decoration: none;
            font-family: 'Lucida Sans Regular';
            border-radius: 30px;
            display: flex;
            align-items: center;
            margin: 10px;
            padding: 20px;
            width: 600px;
            box-shadow: 0 0px 30px rgba(0, 0, 0, 0.06);
        }

        .songitem:hover {
            transform: scale(1.03);
        }

        #photo {
            height: 120px;
            width: 120px;
            padding: 0px;
            border-radius: 15px;
            margin-right: 20px;
        }

        .songinfo {
            display: flex;
            flex-direction: column;
            padding-right: 0px;
            padding-left: 10px;
        }

        .songtitle {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            font-weight: bolder;
            color: #000000;
            margin: 0;
            padding: 0;
        }

        .songartist {
            font-family: Arial, Helvetica, sans-serif;
            color: #818181;
            font-size: 23px;
            margin: 0;
            padding: 0;
        }
        
        .websitename {
            margin-bottom: 30px; 
        }

        .websitename h1 {
            font-size: 6em;
            color: #2e2e2e;
        }
    </style>
</head>
<body>
    <header>
        <div class="websitename">
            <h1>Dabify</h1>
        </div>
    </header>
    <div class="songlist"> <!--Song 1-->
        <a class="songitem" href="song1.php">
            <img id="photo" src="Image/PlutoProjectCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Pluto Projector
                </p>
                <p class="songartist">
                    Rex Orange Country
                </p>
            </div>
        </a>

        <a class="songitem" href="song2.php">
            <img id="photo" src="Image/DoubleTakeCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Double Take
                </p>
                <p class="songartist">
                    Dhruv
                </p>
            </div>
        </a>

        <a class="songitem" href="song3.php">
            <img id="photo" src="Image/LockedOutofHeavenCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Locked out of Heaven
                </p>
                <p class="songartist">
                    Bruno Mars
                </p>
            </div>
        </a>

        <a class="songitem" href="song4.php">
            <img id="photo" src="Image/StarboyCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Starboy
                </p>
                <p class="songartist">
                    The Weeknd, Draft Punk
                </p>
            </div>
        </a>

        <a class="songitem" href="song5.php">
            <img id="photo" src="Image/SugarCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Sugar
                </p>
                <p class="songartist">
                    Brockhampton
                </p>
            </div>
        </a>

        <a class="songitem" href="song6.php">
            <img id="photo" src="Image/HeavenKnowsCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Heaven Knows
                </p>
                <p class="songartist">
                    Orange & Lemons
                </p>
            </div>
        </a>

        <a class="songitem" href="song7.php">
            <img id="photo" src="Image/SintaCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Sinta
                </p>
                <p class="songartist">
                    The Clubs
                </p>
            </div>
        </a>

        <a class="songitem" href="song8.php">
            <img id="photo" src="Image/LeonoraCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Leonora
                </p>
                <p class="songartist">
                    Sugarcane
                </p>
            </div>
        </a>

        <a class="songitem" href="song9.php">
            <img id="photo" src="Image/HappinessCover.jpg">
            <div class="songinfo">
                <p class="songtitle">
                    Happiness
                </p>
                <p class="songartist">
                    Rex Orange Country
                </p>
            </div>
        </a>
    </div>
</body>
</html>