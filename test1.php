<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="ckeditor/ckeditor.js"></script>
        <script src="ckfinder/ckfinder.js"></script>
    </head>
    <body>
        <form action="" method="POST">
            <textarea id="id" name="description" rows="10" cols="30"></textarea>
        </form>
<!--        <script>
        CKEDITOR.replace("id",{
            height:500
        })</script>-->
        <script>
        var editor = CKEDITOR.replace('description', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            height: 500,
        })
        CKFinder.setupCKEditor(editor);
    </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
