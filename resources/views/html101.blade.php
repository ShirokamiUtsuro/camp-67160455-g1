<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>this is head of html</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>
    <body>
        <!-- สีไหนอยู่ล่างสุดในระดับเดียวกันจะใช้สีนั้น -->
        <h1>html&nbsp;&nbsp;&nbsp;101</h1> <!-- สเปคบาร์นับเป็นแท็ป --> <!-- &nbsp; = spacbar -->
        <h1 style="color:blue;color:red;">&lt;html 101</h1>
        <h1>html 101</h1>
        <h3>&gt;html 101</h3>
        <hr/>
        <hr>

        <table border="1" width="100%">
            <thead>
                <tr>
                    <td>ลำดับ</td>
                    <td>ชื่อ</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ekkrit</td>
                </tr>
            </tbody>
        </table>
        <div class="cotainer mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row">
                    <div class="col-sm12 col-md-4">
                            ชื่อ
                        </div>
                    <div class="col">
                        <input id="name" class="form-contral">
                </div>
            </form>
        </div>
    </body>
</html>