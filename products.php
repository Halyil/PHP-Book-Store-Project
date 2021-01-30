
<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
    <style>
        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>


<h4>Enjoy Your Shopping</h4>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
            <img src="b1.jpg" alt="Book" width="600" height="400">
        </a>

    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_forest.jpg">
            <img src="b2.jpg" alt="Book" width="600" height="400">
        </a>

    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_lights.jpg">
            <img src="b3.jpg" alt="Book Lights" width="600" height="400">
        </a>

    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="b4.jpg" alt="Book" width="600" height="400">
        </a>

    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
            <img src="b5.jpg" alt="Book" width="600" height="400">
        </a>
        <div class="desc">.</div>
    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_forest.jpg">
            <img src="b6.jpg" alt="Book" width="600" height="400">
        </a>

    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_lights.jpg">
            <img src="b7.jpg" alt="Book" width="600" height="400">
        </a>

    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="b8.jpg" alt="Book" width="600" height="400">
        </a>

    </div>
</div>



<div class="clearfix"></div>



</body>
</html>
<?php include 'footer.php';?>