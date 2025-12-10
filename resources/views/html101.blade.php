<!Doctype html>

<html>
<head>
    <title>This is my HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Sarabun", sans-serif;
            background-image: url("https://pictures.altai-travel.com/1160x0/mount-everest-nepal-istock-3746.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.4);
            z-index: -1;
        }

    </style>
</head>

<body>
    <div class="container border rounded p-4 mt-5 mx-auto"
     style="max-width: 700px; background: #ffffff;">
        <h1 class="mb-4 text-center">Workshop #HTML - FORM</h1>

        <form>
            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class="col">
                    <input id="fname" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label for="lname">สกุล</label>
                </div>
                <div class="col">
                    <input id="lname" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">วัน/เดือน/ปีเกิด</label>
                </div>
                <div class="col">
                    <input id="birthdate" class="form-control" placeholder="วว/ดด/ปปปป">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label>เพศ</label>
                </div>
                <div class="col d-flex align-items-center gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male">
                        <label class="form-check-label" for="male">ชาย</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female">
                        <label class="form-check-label" for="female">หญิง</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label for="profile">รูป</label>
                </div>
                <div class="col">
                    <input type="file" id="profile" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label for="address">ที่อยู่</label>
                </div>
                <div class="col">
                    <textarea id="address" class="form-control" rows="4"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label for="color">สีที่ชอบ</label>
                </div>
                <div class="col">
                    <select id="color" class="form-control">
                        <option value="">select</option>
                        <option value="แดง">แดง</option>
                        <option value="น้ำเงิน">น้ำเงิน</option>
                        <option value="เขียว">เขียว</option>
                        <option value="เหลือง">เหลือง</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label>แนวเพลงที่ชอบ</label>
                </div>
                <div class="col d-flex align-items-center gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="rock">
                        <label class="form-check-label" for="rock">rock</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="pop">
                        <label class="form-check-label" for="pop">pop</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="jpop">
                        <label class="form-check-label" for="jpop">j-pop</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="kpop">
                        <label class="form-check-label" for="kpop">k-pop</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="jazz">
                        <label class="form-check-label" for="jazz">jazz</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="theme" id="other">
                        <label class="form-check-label" for="other">other</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-4">
                    <label>ยินยอมให้เก็บข้อมูล</label>
                </div>
                <div class="col d-flex align-items-center gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="accept" id="accept">
                        <label class="form-check-label" for="accept">ยินยอม</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="not accept" id="not accept">
                        <label class="form-check-label" for="not accept">ไม่ยินยอม</label>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col d-flex justify-content-between">
                    <button type="button" class="btn btn-danger">Reset</button>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>


        </form>
    </div>
</body>
</html>