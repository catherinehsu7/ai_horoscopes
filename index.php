<!--  index.php: -->
<!DOCTYPE html>

<html>
    <body>
    <head>
        <title>🌙 Horoscopes ⭐</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="js/jquery-3.6.0.min.js"></script>
    </head>
    <br><br><h1>🌙 Horoscopes ⭐</h1>
    
        
    <form action="" method="post" id="myForm" class="form-container">
        <h2>What's your sign?</h2>

        <div class="container">
            <div id="radios">
                <label for="aries">
                    <input type="radio" name="horoscope" id="aries" value="aries" />
                    <span><i class="ai aries"></i></span>
                </label>  

                <label for="taurus">
                    <input type="radio" name="horoscope" id="taurus" value="taurus" />
                    <span><i class="ai taurus"></i></span>
                </label>

                <label for="gemini">
                    <input type="radio" name="horoscope" id="gemini" value="gemini" />
                    <span><i class="ai gemini"></i></span>
                </label>

                <label for="cancer">
                    <input type="radio" name="horoscope" id="cancer" value="cancer" />
                    <span><i class="ai cancer"></i></span>
                </label>

                <br><br>

                <label for="leo">
                    <input type="radio" name="horoscope" id="leo" value="leo" />
                    <span><i class="ai leo"></i></span>
                </label>

                <label for="virgo">
                    <input type="radio" name="horoscope" id="virgo" value="virgo" />
                    <span><i class="ai virgo"></i></span>
                </label>
                
                <label for= "libra">
                    <input type="radio" name="horoscope" id="libra" value="libra" />
                    <span><i class="ai libra"></i></span>
                </label>

                <label for="scorpio">
                    <input type="radio" name="horoscope" id="scorpio" value="scorpio" />
                    <span><i class="ai scorpio"></i></span>
                </label>

                <br><br>

                <label for="sagittarius">
                    <input type="radio" name="horoscope" id="sagittarius" value="sagittarius" />
                    <span><i class="ai sagittarius"></i></span>
                </label>

                <label for="capricorn">
                    <input type="radio" name="horoscope" id="capricorn" value="capricorn" />
                    <span><i class="ai capricorn"></i></span>
                </label>

                <label for= "aquarius">
                    <input type="radio" name="horoscope" id="aquarius" value="aquarius" />
                    <span><i class="ai aquarius"></i></span>
                </label>

                <label for="pisces">
                    <input type="radio" name="horoscope" id="pisces" value="pisces" />
                    <span><i class="ai pisces"></i></span>
                </label>
            </div>
        </div>

        <br><br>

        <h2>What do you want to know about?</h2> <br>
        <div class="container">
            <div id="radios">
                <label for="romance">
                    <input type="radio" name="category" id="romance" value="romance" />
                    <span><i style = "font-size: 27px;" i class="fa fa-heart" aria-hidden="true"></i></span>
                </label>

                <label for="career">
                    <input type="radio" name="category" id="career" value="career" />
                    <span><i style = "font-size: 27px;" i class="fa fa-briefcase" aria-hidden="true"></i></span>
                </label>  

                <label for="friends">
                    <input type="radio" name="category" id="friends" value="friends" />
                    <span><i style = "font-size: 27px;" i class="fa fa-users" aria-hidden="true"></i></span>
                </label>

                <label for="finances">
                    <input type="radio" name="category" id="finances" value="finances" />
                    <span><i style = "font-size: 27px;" i class="fa fa-money" aria-hidden="true"></i></span>
                </label>

                <label for="lifestyle">
                    <input type="radio" name="category" id="lifestyle" value="lifestyle" />
                    <span><i style = "font-size: 27px;" i class="fa fa-coffee" aria-hidden="true"></i></span>
                </label>
            </div>
        </div>

        <br><br>
        <div class ="container">
        <input type="submit" value="Submit"/>
        </div>
    </form>
    
    <br><br>

    <div class = "container">
    <div class = "result">
    <h1 style = "font-size:24px">⭐ Results ⭐</h1>
            <?php
            if(isset($_POST["horoscope"]) && isset($_POST["category"])) {
                $horoscope = $_POST["horoscope"];
                $category = $_POST["category"];

                echo "<h1 style = 'font-size: 16px'>As a " . strtoupper($horoscope) . ", your " . strtoupper($category) . " horoscope says that you </h1>";

                if(($horoscope=="aries") && $category=="romance") {
                    $f_contents = file("_1aries.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aries") && $category=="career") {
                    $f_contents = file("_1aries.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aries") && $category=="friends") {
                    $f_contents = file("_1aries.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aries") && $category=="finances") {
                    $f_contents = file("_1aries.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aries") && $category=="lifestyle") {
                    $f_contents = file("_1aries.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="taurus") && $category=="romance") {
                    $f_contents = file("_2taurus.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="taurus") && $category=="career") {
                    $f_contents = file("_2taurus.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="taurus") && $category=="friends") {
                    $f_contents = file("_2taurus.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="taurus") && $category=="finances") {
                    $f_contents = file("_2taurus.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="taurus") && $category=="lifestyle") {
                    $f_contents = file("_2taurus.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="gemini") && $category=="romance") {
                    $f_contents = file("_3gemini.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="gemini") && $category=="career") {
                    $f_contents = file("_3gemini.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="gemini") && $category=="friends") {
                    $f_contents = file("_3gemini.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="gemini") && $category=="finances") {
                    $f_contents = file("_3gemini.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="gemini") && $category=="lifestyle") {
                    $f_contents = file("_3gemini.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="cancer") && $category=="romance") {
                    $f_contents = file("_4cancer.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="cancer") && $category=="career") {
                    $f_contents = file("_4cancer.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="cancer") && $category=="friends") {
                    $f_contents = file("_4cancer.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="cancer") && $category=="finances") {
                    $f_contents = file("_4cancer.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="cancer") && $category=="lifestyle") {
                    $f_contents = file("_4cancer.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="leo") && $category=="romance") {
                    $f_contents = file("_5leo.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="leo") && $category=="career") {
                    $f_contents = file("_5leo.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="leo") && $category=="friends") {
                    $f_contents = file("_5leo.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="leo") && $category=="finances") {
                    $f_contents = file("_5leo.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="leo") && $category=="lifestyle") {
                    $f_contents = file("_5leo.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="virgo") && $category=="romance") {
                    $f_contents = file("_6virgo.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="virgo") && $category=="career") {
                    $f_contents = file("_6virgo.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="virgo") && $category=="friends") {
                    $f_contents = file("_6virgo.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="virgo") && $category=="finances") {
                    $f_contents = file("_6virgo.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="virgo") && $category=="lifestyle") {
                    $f_contents = file("_6virgo.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="libra") && $category=="romance") {
                    $f_contents = file("_7libra.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="libra") && $category=="career") {
                    $f_contents = file("_7libra.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="libra") && $category=="friends") {
                    $f_contents = file("_7libra.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="libra") && $category=="finances") {
                    $f_contents = file("_7libra.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="libra") && $category=="lifestyle") {
                    $f_contents = file("_7libra.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="scorpio") && $category=="romance") {
                    $f_contents = file("_8scorpio.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="scorpio") && $category=="career") {
                    $f_contents = file("_8scorpio.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="scorpio") && $category=="friends") {
                    $f_contents = file("_8scorpio.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="scorpio") && $category=="finances") {
                    $f_contents = file("_8scorpio.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="scorpio") && $category=="lifestyle") {
                    $f_contents = file("_8scorpio.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="sagittarius") && $category=="romance") {
                    $f_contents = file("_9sagittarius.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="sagittarius") && $category=="career") {
                    $f_contents = file("_9sagittarius.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="sagittarius") && $category=="friends") {
                    $f_contents = file("_9sagittarius.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="sagittarius") && $category=="finances") {
                    $f_contents = file("_9sagittarius.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="sagittarius") && $category=="lifestyle") {
                    $f_contents = file("_9sagittarius.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="capricorn") && $category=="romance") {
                    $f_contents = file("_10capricorn.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="capricorn") && $category=="career") {
                    $f_contents = file("_10capricorn.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="capricorn") && $category=="friends") {
                    $f_contents = file("_10capricorn.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="capricorn") && $category=="finances") {
                    $f_contents = file("_10capricorn.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="capricorn") && $category=="lifestyle") {
                    $f_contents = file("_10capricorn.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aquarius") && $category=="romance") {
                    $f_contents = file("_11aquarius.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aquarius") && $category=="career") {
                    $f_contents = file("_11aquarius.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aquarius") && $category=="friends") {
                    $f_contents = file("_11aquarius.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aquarius") && $category=="finances") {
                    $f_contents = file("_11aquarius.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="aquarius") && $category=="lifestyle") {
                    $f_contents = file("_11aquarius.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="pisces") && $category=="romance") {
                    $f_contents = file("_12pisces.txt"); 
                    $line = $f_contents[rand(1, 20)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="pisces") && $category=="career") {
                    $f_contents = file("_12pisces.txt"); 
                    $line = $f_contents[rand(23, 42)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="pisces") && $category=="friends") {
                    $f_contents = file("_12pisces.txt"); 
                    $line = $f_contents[rand(45, 64)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="pisces") && $category=="finances") {
                    $f_contents = file("_12pisces.txt"); 
                    $line = $f_contents[rand(67, 86)];
                    echo "<h2>" . $line . "</h2>";
                    }

                if(($horoscope=="pisces") && $category=="lifestyle") {
                    $f_contents = file("_12pisces.txt"); 
                    $line = $f_contents[rand(89, 108)];
                    echo "<h2>" . $line . "</h2>";
                    }
        }
            ?>
    </div></div>
    <br>
    <footer>
        <br>
            <div class ="container">
            <p>Copyright © 2021 Catherine Hsu</p>
        </div>
    </footer>
</body>  
</html>