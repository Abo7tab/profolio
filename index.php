<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assiment</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .small-img {
        width: 40px;

    }

    :root {
        --font_famil: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }


    body {
        background: #C9D6FF;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #E2E2E2, #C9D6FF);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        font-family: var(--font_famil);
    }

    img {
        border-radius: 30%;
    }

    h1 {
        color: rgb(43, 43, 226);
        font-family: var(--font_famil);
    }

    .img {
        height: 50px;
        display: inline;

    }

    h4 {
        display: inline;
        padding-bottom: 18px;

    }

    p {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    input {
        width: 250px;
        padding: 2%;
        background: #eee;
        border-radius: 8px;
        border: none;
        outline: none;
        font-size: 16px;
        color: #333;
        margin: 2px;

    }

    label {
        border: #C9D6FF;
        border-bottom: 7dpx;
        display: block;

    }

    button {
        display: block;
        padding: 12px;
        border: #C9D6FF;
        border-radius: 8px;
        background-color: blue;
        color: white;
        border: none;
        outline: none;
        margin: 10px 0px;
    }

    .div {

        justify-items: center;
    }
    </style>
</head>

<body>



    <img src="img/240_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg" alt=" photo">
    <h1>Mohamed Emad Ali </h1>
    <a href="mailto:mohamedEmadAliAhmed@gmail.com">
        <img src="img/12png.png" class="small-img" alt="">
    </a>
    <h4>mohamedEmadAliAhmed@gmail.com</h4><br><br>
    <b>About</b>
    <p>lorem ipsum,dolor sit amet consectetur adipisicing elit Culpa, enim .Assumenda consequutur tempore inventore
        delectus delectus quo
        perspiciatis repudiandae esse ,ab ea aut iure similiq , quae voluptatibus sucscipit aperiam enim doloremque

    </p>
    <b>skills:</b>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JS</li>
        <li>PHP</li>
        <li>laravel</li>
    </ul>
    <B>projects:</B>
    <ul>
        <Li><a href="www.google.com"> Berimbolo-Security-company</a></Li>
        <Li><a href="www.google.com"> Berimbolo-Security-company</a></Li>
        <Li><a href="www.google.com"> Berimbolo-Security-company</a></Li>

    </ul>
    <div class="div">
        <B>Please fill out the form </B>
        <form method="post" enctype="multipart/form-data"><br>
            <label for="name">name</label><br>
            <input type=" text" name="name" placeholder="name"><br>

            <label for="email">email</label><br>
            <input type="text" name="email" placeholder="Email"><br>

            <label for="job_titel">job titel</label><br>
            <input type="text" name="job_titel" placeholder="job titel"><br>

            <label for="file">file</label><br>
            <input type="file" name="picture"><br>
            <button>Send</button>


        </form>

    </div>
    <br>

</html><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $Email = $_POST["email"];
    $job_titel = $_POST["job_titel"];
    $file=$_FILES["picture"]["size"]; 
    $_picture=$_FILES["picture"]["tmp_name"];
    $file_name=$_FILES["picture"]["name"];
    $file_location = "img/". $file_name;
    
    echo "Hello, " . htmlspecialchars($name). "<br>";  
    echo "Email : " . htmlspecialchars($Email)."<br>"; 
    echo "Your job titel : " . htmlspecialchars($job_titel)."<br>"; 
    echo "file size is :  " .round($file/1024)." MB"."<br>";
    move_uploaded_file($_picture,$file_location);
    
    echo "Your pictur : " ."<img src='{$file_location}'>";
    
}
?>
</body>