<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>GLO Blog</title>

    <?php 
    $polacz = new mysqli ("localhost", "admin", "", "gloBlog");
    if (isset($_POST['inputTytulBlogaMYSQL']) && isset($_POST['inputOpisBlogaMYSQL'])) {
        $tytulValue = $_POST["inputTytulBlogaMYSQL"];
        $opisValue = $_POST["inputOpisBlogaMYSQL"];

        $polacz = new mysqli ("localhost", "admin", "", "gloBlog");

        if (!empty($tytulValue) && !empty($opisValue)){

            $dodawanieValuePosty = "INSERT INTO `POSTY`(`Tytul`, `Opis`) VALUES ('$tytulValue','$opisValue')";
            ($polacz->query($dodawanieValuePosty) === TRUE);
        }

        $select = "SELECT `Tytul`, `Opis`, `reg_date`, `serca` FROM `POSTY` ORDER BY RAND() LIMIT 25";
        $rezultat = mysqli_query($polacz,$select);


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tytulValue = $_POST["inputTytulBlogaMYSQL"];
            $opisValue= $_POST["inputOpisBlogaMYSQL"];
        
            $tytulValue = "";
            $opisValue = "";
        }

        $polacz->close();
    }
    
    ?>

</head>
<body>
    <header>
        <div class="spolecznosci">
            <div class="przywitanie">
                <h1>Podziel się swoimi przeżyciami!</h1>
            </div>
            <div class="portaleSpolecznosciowe">
                <ul>
                    <li><a href="https://twitter.com/home?lang=pl"><img src="twitter_PNG1.png" alt="" class="photo"></a></li>
                    <li><a href="https://www.facebook.com/"><img src="facebookIcon.png" alt="" class="photo"></a></li>
                    <li><a href="https://www.instagram.com/?hl=pl"><img src="instagrmIcon.png" alt="" class="photo"></a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="tytul">
        <h2>BLOG</h2>
        <div id="glo" style="display:none;">
            <div id="form-container">
                <form  method="post">
                <div class="tutulBlogu">
                    <input name="inputTytulBlogaMYSQL" type="text" placeholder="Tytuł Bloga ..." id="inputTytulBloga" >
                </div>
                <div class="opisBlogu">
                    <form method="post">
                    <textarea name="inputOpisBlogaMYSQL" id="inputOpisBloga" cols="10" rows="10" placeholder="Opis ..."></textarea>
                </div>
                <div class="przyciskiWysylanieBlogu">
                    <div class="przyciskiInputBlog">
                        <button id="anulujPrzycisk" onclick="anulujDodanieBloga()"><span class="text">Anuluj</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button></button>

                        <input type="submit" value="submit">

                        <button type="submit" name="submit" class="wyslijPrzycisk" onclick="createPost()">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <span>Wyślij</span>
                        </button>
                    </div>
                </div>
                </form>
            </div>      
        </div>    
    </div>
    <section>
        <div class="menu">
            <div class="menuLista"> 
                <ul class="menuUl">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="najnowszePosty.php">NAJNOWSZE</a></li>
                    <li><a href="lnajbardziejlubianePosty.php">NAJBARDZIEJ LUBIANE</a></li>
                </ul>
            </div>
            <button class="dodajPost" onclick="pokazDiva()">Dodaj post!</button> 
        </div>

        <div id="posty">
        <?php
            $polacz = new mysqli("localhost", "admin", "", "gloBlog");

            if ($polacz->connect_error) {
                die("Błąd połączenia: " . $polacz->connect_error);
            }

            $select = "SELECT `Tytul`, `Opis`, `reg_date`, `serca` FROM `POSTY` ORDER BY RAND() LIMIT 25";
            $rezultat = mysqli_query($polacz, $select);

            if ($rezultat->num_rows > 0) {
                while ($row = $rezultat->fetch_assoc()) {
                    echo '<div id="post" style="
                    background-color: #333333;
                    width: 80%;
                    height: fit-content;
                    margin-left: 8%;
                    margin-top: 30px;
                    float: left;
                    border-radius: 15px;
                    color: #f2f2f2;
                    font-size: 30px;
                    padding-left: 2%;
                    padding-right: 2%;
                    padding-top: 2%;
                    padding-bottom: 2%;
                    flex-wrap: wrap;
                    ">';

                    echo "<h3 style='
                    padding-bottom: 1%;
                    '>" . $row["Tytul"] . "</h3>";

                    echo "<p>" . $row["Opis"] . "</p>";

                    echo "<footer style='
                    text-align: center;
                    font-size: 15px;
                    padding-top: 2%;
                    '>" . $row["reg_date"] . "<p style='float:right; margin-left:1%;'>". $row['serca'] ."</p>" ."<img src='Hearts.png' alt='' class='serce'>" . "<img src='brokenHearts.png' alt='' class='serce'>" ."</footer>";

                    echo "</div>";
                }
            } else {
                echo "Brak postów do wyświetlenia.";
            }

            $polacz->close();
        ?>
        </div>
    </section>
</body>
</html>