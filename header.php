<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container">
<div class="header">
    <img src="logo.jpg" alt="Logo">
    <div class="header-right">
        <a class="active" href="main.php">Home</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact Us</a>
        <a href="login.php">Login</a>
        <a href="pageone.php"><img src="basket.png" alt="Basket">
        <a href="login.php"><img src="user.png" alt="User">
    </div>
</div>
</div>

<style>
.header {
overflow: hidden;
background-color: #f1f1f1;
padding: 20px 10px;
}


.header a {
float: left;
color: black;
text-align: center;
padding: 12px;
text-decoration: none;
font-size: 18px;
line-height: 25px;
border-radius: 4px;
}


.header a.logo {
font-size: 25px;
font-weight: bold;
}


.header a:hover {
background-color: #ddd;
color: black;
}


.header a.active {
background-color: dodgerblue;
color: white;
}

/* Float the link section to the right */
.header-right {
float: right;
}


@media screen and (max-width: 500px) {
.header a {
float: none;
display: block;
text-align: left;
}
.header-right {
float: none;
}
}
</style>