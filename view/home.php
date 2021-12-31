<!DOCTYPE html>
<html lang="en">

<head>
    <?php
		require 'view/common/head.php';
		?>
</head>

<body>

    <div class="container-fluid">
        <?php
			require 'view/common/nav.php';
			?>

        <div id="header-image-menu">
            <img src="uploads/header-bg.jpg" style="height: 100%; width: 105%; margin-left:-15px">
        </div>


        <hr />
        <div class="row" style="margin-left: 20px" ;>
            <?php
				require 'view/common/categories.php';
            ?>

            <div class="col-md-3">
                
            <iframe width="914" height="514" src="https://www.youtube.com/embed/r6ngjA6thWc?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <?php
			require 'view/common/footer.php';
			?>
    </div>

</body>

</html>
