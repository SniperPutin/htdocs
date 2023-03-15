<?php
    $value = $_REQUEST["v"];
    $datafile = fopen("SuperHTML.csv", "r");
    $data = array();
    while (!feof($datafile)){
       $data[] = fgetcsv($datafile); 
    }
    //create variable extra styles and store all styles in here. then print extra styles in the top. 
    include('top.php');
?>

            <body class ="style1">
                <header>
                    Super Heros Wiki 
                </header>
                <nav >
                    <a href="HomePage.html">Home</a>
                    <a href="About.html">| About</a>
                    <a href="Collections.html">| Collections</a>
    
                </nav>
                <div class="SuperHeader">
                        <?= $data[$value][0] ?>
                </div>

            <div class="style1">
                    
                <div class="SuperBody">    
                    <img src=<?= $data[$value][4] ?> style="width: 570px;">
            <dl>
                <dt>
                    Alias/Name
                </dt>
                <dd>
                <?= $data[$value][0] ?>
                </dd>
                <dt>
                    About
                </dt>  
                    
                <dd>
                <?= $data[$value][1] ?>
                </dd>
                <dt>
                    Creator/Writer
                </dt>
                <dd>
                <?= $data[$value][3] ?>
                </dd>
                <dt>
                    Debut
                </dt>
                <dd>
                    <?= $data[$value][2] ?>
                </dd>
            </dl> 
            <a href="CaptainAmerica.html">Captain America</a>
            <br>
            <a href="Batman.html">Batman</a>
            <br>
            <a href="Thor.html">Thor</a>
            <br>
            <a href="Spiderman.html">Spiderman</a>
            <br>
            <br>
            <br>
            </div>

    
    
                    <div class="style2">
                    This space is reserved for Ads for the illustrous Dragon Ball Z Community.
                    </div>
    
                     
                <footer>
                    This Site references Britannica for its information about Superheros, check the About for more information, This site has been written by David Groom 2/22/2023
                </footer>
                <?php
                if ($value > 1) 
                {
                    //we have a previous page
                    $prev = $value - 1;
                    echo "<a href=\"/Supermandetail.php?v=$prev\">&lt;&lt; Previous</a>";
                }
                echo " | ";
                if($value < 15)
                {
                    //we haven't reached the end of the set
                    $next = $value + 1;
                    echo "<a href=\"/Supermandetail.php?v=$next\">Next</a>";
                }
                ?>
            </body>
    
    </html>