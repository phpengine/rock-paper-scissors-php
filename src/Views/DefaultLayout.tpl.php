<html>
    <head>
        <?php
        if (isset($pageVars["jsFiles"]) && is_array($pageVars["jsFiles"])) {
            foreach ($pageVars["jsFiles"] as $jsFile) { ?>
                <script src="<?= $jsFile ?>"></script>
       <?php } } ?>
        <title>Rock, Paper, Scissors</title>
        <!--<link rel="stylesheet" type="text/css" href="/css/style.css" >-->
        <link rel="stylesheet" type="text/css" href="/css/daveCss.css" >
    </head>
    <body>
        <div class="wrap">
            <div class="page">
                <div class="pageRow">
                    <div id="logo">
                        <a href="/"><img src="images/ebay_logo1.jpg" alt="EBAY"></a>
                    </div>
                    <div class="navMenu">
                        <form action="/index.php" id="cvFullPageButton" method="POST">
                            <input type="hidden" id="cvFullPageButtonControl" name="control" value="page" class="buttonInput" />
                            <input type="hidden" id="cvFullPageButtonAction" name="action" value="full-cv" class="buttonInput" />
                            <input type="submit" id="cvFullPageButtonSubmit" name="submit" value="Full CV" class="buttonInput button" />
                        </form>
                        <form action="/index.php" id="cvJuicyPageButton" method="POST">
                            <input type="hidden" id="cvJuicyPageButtonControl" name="control" value="page" class="buttonInput" />
                            <input type="hidden" id="cvJuicyPageButtonAction" name="action" value="juicy-bits" class="buttonInput" />
                            <input type="submit" id="cvJuicyPageButtonSubmit" name="submit" value="Juicy Bits" class="buttonInput button" />
                        </form>
                        <form action="/index.php" id="hiPageButton" method="POST">
                            <input type="hidden" id="hiPageButtonControl" name="control" value="page" class="buttonInput" />
                            <input type="hidden" id="hiPageButtonAction" name="action" value="hi" class="buttonInput" />
                            <input type="submit" id="hiPageButtonSubmit" name="submit" value="Hi" class="buttonInput button" />
                        </form>
                        <form action="/index.php" id="homePageButton" method="POST">
                            <input type="hidden" id="homePageButtonControl" name="control" value="index" class="buttonInput" />
                            <input type="hidden" id="homePageButtonAction" name="action" value="index" class="buttonInput" />
                            <input type="submit" id="homePageButtonSubmit" name="submit" value="Home" class="buttonInput button" />
                        </form>
                    </div> <!-- end navMenu -->


                </div> <!-- end pageRow div-->

                <div class="pageRow">
                    <?= $this->viewHelpers->renderMessages($pageVars); ?>
                </div> <!-- end pageRow div-->

                <div class="pageRow">
                    <?php echo $templateData; ?>
                </div> <!-- end pageRow div-->

                <div class="pageRow">
                    <p>
                        Brought to you by eBay UK
                    </p>
                </div> <!-- end pageRow div-->

            </div>
        </div>
    </body>
</html>