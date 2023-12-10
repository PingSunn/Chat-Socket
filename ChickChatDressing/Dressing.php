<?php
   include("../server/connect.php");

   $EmoSql = 'SELECT * FROM emotiontag ';
   $StatusSql = 'SELECT * FROM Statustag';
   $queryEmo = mysqli_query($connect,$EmoSql);
   $queryStatus = mysqli_query($connect,$StatusSql);

?>
<?php 
session_start();

if(!isset($_SESSION['UserID'])){
    $_SESSION['error'] = "You must login first";
    header('location: ../ChickChatLogIn/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Image/IMG_1012.PNG" type="image/x-icon">
    <title>Dressing Page</title>
    <link rel="stylesheet" href="Dressing.css">
    <script src="https://kit.fontawesome.com/26997adfb2.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <img src="image/IMG_1012.PNG" alt="">
    </header>
        <?php if(isset($_SESSION['error'])):?>
                <div class="error">
                    <h3>
                        <?php
                        echo $_SESSION['error'];
                        unset ($_SESSION['error']);
                        ?>
                    </h3>
                </div>
        <?php endif?>
    <div class="container">
        <div class="box box-1">
            <div class="button-left">
                <button class="face">face</button>
                <button class="clothes">clothes</button>
            </div>
        </div>
        <div class="box box-2">
            <div class="avatar-container">
                <div id="faceDiv" class="avatar-div">
                    <!-- Face DB content goes here -->
                </div>
                <div id="clothesDiv" class="avatar-div">
                    <!-- Clothes DB content goes here -->
                </div>
            </div>
            <form action="">
                <div class=" input-box Name">
                    <input type="text" required>
                    <label>Enter Your Name <i class="fa-solid fa-pencil"></i></label>
                </div>
            </form>
        </div>
        <div class="box box-3">
            <form action="Dressing_DB.php" method = 'POST'>
                <div class="input-box">
<<<<<<< HEAD:ChickChatDressing/Dressing.php
                    <ul>
                        <li class="menu-item">
                            <p>StatusTag<i class="fa-solid fa-caret-down"></i></p>
                            <ul class="dropdown" name = 'Status' >

                                <!-- TagDB Show -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="input-box">
                    <ul>
                        <li class="menu-item2">
                            <p>EmotionTag<i class="fa-solid fa-caret-down"></i></p>
                            <select name = "Emotion">
                                    <?php
                                        while ($Emo = mysqli_fetch_assoc($queryEmo)) {
                                    ?>
                                        <option values = "<?php echo $Emo['EmoID']?>">
                                            <p class="tag-2" >
                                                <?php echo $Emo['EmoName']; ?>
                                            </p>
                                        </option>
                                    <?php
                                    }
                                    ?>
                            <!-- Emotag DB Show -->
                            </select>
                        </li>
                    </ul>
=======
                    <select name="" id="Status">
                        <option value="">Tag-1</option>
                        <option value="">Tag-2</option>
                        <option value="">Tag-3</option>
                        <option value="">Tag-4</option>
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                    </select>
                </div>
                <div class="input-box">
                    <select name="" id="Status">
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                        <option value="">Tag-1</option>
                    </select>
>>>>>>> Beta:ChickChatDressing/Dressing.html
                </div>
                <div class="input-box description">
                    <textarea id="message" name="message" rows="8"></textarea>
                    <label for="message">Description</label>
                </div>
                <button type = 'submit' class="confirm" name = 'comfirm'>confirm</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Dressing.js"></script>
<script>
    const faceBtn = document.querySelector('.face');
    const clothesBtn = document.querySelector('.clothes');

    const tagText = document.querySelector(".menu-item > p");
    const tagItems = document.querySelectorAll(".tag");

    const tagText2 = document.querySelector(".menu-item2 > p");
    const tagItems2 = document.querySelectorAll(".tag-2");

    const confirm = document.querySelector(".confirm");

    faceBtn.addEventListener('click', () => {
        window.location.href = 'face.html';
    })

    clothesBtn.addEventListener('click', () => {
        window.location.href = 'clothes.html';
    })

    tagItems.forEach(tagItem => {
        tagItem.addEventListener("click", function () {
            tagText.innerHTML = tagItem.textContent + `<i class="fa-solid fa-caret-up"></i>`;
        });
    });

    tagItems2.forEach(tagItem2 => {
        tagItem2.addEventListener("click", function () {
            tagText2.innerHTML = tagItem2.textContent + `<i class="fa-solid fa-caret-up"></i>`;
        });
    });


    $(document).ready(function () {
        $(".menu-item").click(function () {
            $(this).find(".dropdown").toggle();
        });
    });

    $(document).ready(function () {
        $(".menu-item2").click(function () {
            $(this).find(".dropdown").toggle();
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(function (menuItem) {
            menuItem.addEventListener('click', function () {
                const icon = this.querySelector('.fa-solid');
                icon.classList.toggle('fa-caret-down');
                icon.classList.toggle('fa-caret-up');
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const menuItems = document.querySelectorAll('.menu-item2');

        menuItems.forEach(function (menuItem) {
            menuItem.addEventListener('click', function () {
                const icon = this.querySelector('.fa-solid');
                icon.classList.toggle('fa-caret-down');
                icon.classList.toggle('fa-caret-up');
            });
        });
    });

    confirm.addEventListener("click", () => {
        window.location.href = '../ChickChatDressing/Dressing.php';
    })
    ///แก้เป็น home
</script>
</body>



</html>