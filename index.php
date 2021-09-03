<!DOCTYPE html>
<html lang="de-ch">

<head>
    <?php include 'public/static/head.php' ?>
    <title>Rolling Bakery</title>
</head>

<body>
    <div class="header">
        <?php include 'public/static/navbar.php' ?>

        <div class="heroContainer">
            <h1 class="heroText">Der beste Kuchen</h1>
        </div>
    </div>
    <div class="mainGrid">
        <!-- classname "ft" for firstTeaser-->
        <div class="ft">
            <div class="ft-textContainer">
                <h2 class="teaserTitle">Bäckerei auf vier Rädern</h2>
                <div class="ft-iconTextContainer">
                    <img class="ft-icon" src="./img/icons/coffee.svg" alt="image">
                    <div class="ft-text">Die Bäckerei welche zu dir kommt!</div>
                </div>
                <div class="ft-iconTextContainer">
                    <img class="ft-icon" src="./img/icons/coffee.svg" alt="image">
                    <div class="ft-text">Keine langen Wege zur Bäckerei!</div>
                </div>
                <div class="ft-iconTextContainer">
                    <img class="ft-icon" src="./img/icons/coffee.svg" alt="image">
                    <div class="ft-text">Immer was zu knabbern haben für die verdiente Pause!</div>
                </div>
                <button class="teaserButton">ZUM FAHRPLAN</button>
            </div>
            <div class="ft-imgContainer">
                <img class="ft-image" src="./img/moods/food-truck.jpeg" alt="image">
            </div>
        </div>
        <!-- classname "st" for secondTeaser-->
        <div class="st">
            <div class="st-titleContainer">
                <h2 class="teaserTitle">Unsere Lieblinge</h2>
            </div>
            <div class="st-contentContainer">
                <div class="_2x3">
                    <div class="recipeText">Croissant</div>
                    <img class="st-image" src="./img/moods/recipes/croissant_2x3.jpg" alt="image">
                </div>
                <div class="_4x2">
                    <div class="recipeText">Spitzbuebe</div>
                    <img class="st-image" src="./img/moods/recipes/spitz_4x2.png" alt="image">
                </div>
                <div class="_2x1">
                    <div class="recipeText">Macrons</div>
                    <img class="st-image" src="./img/moods/recipes/macrons_2x1.png" alt="image">
                </div>
                <div class="_2x2">
                    <div class="recipeText">Gingerbread</div>
                    <img class="st-image" src="./img/moods/recipes/ginger_2x2.png" alt="image">
                </div>
                <div class="_2x5">
                    <div class="recipeText">Pancakes</div>
                    <img class="st-image" src="./img/moods/recipes/pancakes_2x5.png" alt="image">
                </div>
                <div class="st-buttonContainer">
                    <button class="teaserButton">ZU ALLEN REZEPTEN</button>
                </div>
            </div>
        </div>
        <!-- classname "tt" for thirdTeaser-->
        <div class="tt">
            <div class="tt-imgContainer">
                <img class="tt-image" src="./img/moods/picnic_basket.jpeg" alt="image">
            </div>
            <div class="tt-textContainer">
                <h2 class="teaserTitle">Der Korb</h2>
                <div class="tt-text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </div>
                <button class="teaserButton">ZUM KORB</button>
            </div>

        </div>
    </div>
    <div class="footer">

    </div>
</body>

</html>