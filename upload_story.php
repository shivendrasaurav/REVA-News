

<html>
    <head>

        <title>REVA News Uploader</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <link href="https://fluentdesignforweb.github.io/fluent.css" type="text/css" rel="stylesheet">
        <link href="https://shivendrasaurav.github.io/Fluent-Design-For-Web/Icons/css/icons.css" type="text/css" rel="stylesheet">
        <link href="customstyles.css" type="text/css" rel="stylesheet">

    </head>
    <body>

        <div class="page_container column large8 medium8 small12 zi2 center">
            <form method="post" action="create_story.php" enctype="multipart/form-data">
                <h4><img src="logo_reva.png" style="width: 50px; height: 50px; margin: -10px; margin-left: 5px;"/>&nbsp;&nbsp;Upload Your Article</h4><br>
                <label>Unique ID</label><br>
                <input type="text" name="id" placeholder="Employee ID">
                <br><br>
                <label>Name</label><br>
                <input type="text" name="name" placeholder="Name">
                <br><br>
                <label>News Title</label><br>
                <input type="text" name="title" placeholder="Title of News">
                <br><br>
                <label>Date</label><br>
                <input type="date" name="date" placeholder="date">
                <br><br>
                <label>News Article</label><br>
                <textarea type="text" name="content" placeholder="Content for News" style="height: 200px; width: 80%; padding: 20px"></textarea>
                <br><br>
                <label>Images if any</label>
                <input type="file" name="image">
                <br><br>
                <input type="submit" class="button" value="Publish Article" style="background: rgb(231, 120, 23); color: #FFF;">
            </form>
        </div>

    </body>
</html>