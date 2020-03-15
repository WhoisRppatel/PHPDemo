<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="Style.css">
	<style>
		body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #455A64;
    background-image:  url(img/background.jpg);
}
.Box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #37474F;
    text-align: center;
    opacity: 0.6;
}
.Box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}
.Box input[type = "text"],.Box input[ type = "Password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #03A9F4;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.Box input[type = "text"]:focus,.Box input[ type = "Password"]:focus{
    width: 280px;
    border-color: #8BC34A;
}
.Box input[Type="submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #8BC34A;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.Box input[type="submit"]:hover{
    background: #8BC34A;
}

	</style>
    </head>
    <body>
            <form class="Box" action="welcome.php" method="POST">

                <h1>Login</h1>
                <input name="unm" required type="text"placeholder="Username">
                <input name="pass" required type="password"placeholder="Password">
                <input type="submit"value="Login" >
            </form>
    </body>
</html>
