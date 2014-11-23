        <div id="header">

            <h1>The Mobile Homeless</h1>
            <div id="social-buttons">
                
                <a href="https://twitter.com/mobilehomeless1">
                    <img class="social-buttons" src="img/twitter.png" alt="Twitter Logo">
                </a>
                
                
                <a href="http://www.facebook.com/the-mobile-homeless">
                    <img class="social-buttons" src="img/facebook.png" alt="Facebook Logo">
                </a>
                
            </div>

        </div>
        
        <img class="header-image" src="img/dunedin-brewery-1-1280x400.jpg" alt="The Mobile Homeless Live at Dunedin Brewery">
        <nav>
            <ul>
                <li><a <?php IF ($page_name=="Home") {echo 'class="selected" ';} ?> href="index.php">Home</a></li>
                <li><a <?php IF ($page_name=="Music") {echo 'class="selected" ';} ?> href="music.php">Music</a></li>
                <li><a <?php IF ($page_name=="Shows") {echo 'class="selected" ';} ?> href="shows.php">Shows</a></li>
                <li><a <?php IF ($page_name=="About") {echo 'class="selected" ';} ?> href="about.php">About</a></li>
                <li><a <?php IF ($page_name=="Contact") {echo 'class="selected" ';} ?> href="contact.php">Contact</a></li>
            </ul>
        </nav>