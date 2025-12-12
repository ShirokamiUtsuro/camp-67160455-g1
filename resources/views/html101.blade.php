@extends('template.default')

@section('title','Workshop Form')
@section('content')
        <h1 class="mb-4 text-center">Workshop #HTML - FORM</h1>
            <form>
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุชื่อ
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุนามสกุล
                        </div>
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
                            <input class="form-check-input" type="radio" name="accept" id="accept">
                            <label class="form-check-label" for="accept">ไม่ยินยอม</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col d-flex justify-content-between">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button type="button" class="btn btn-success" onclick="clickMe()">Submit</button>
                    </div>
                </div>
            </form>
@endsection

@push('scripts')
    <script>
        function clickMe(){
            let fname = document.getElementById('fname')
            console.log(fname.value)
            console.log(lname.value)

            if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            }
            else{
                fname.classList.add('is-valid')
                fname.classList.remove('is-invalid')
            }

            if(lname.value == ""){
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            }
            else{
                lname.classList.add('is-valid')
                lname.classList.remove('is-invalid')
            }

        }

        let myfunc = (callback) => {
            callback("in Callback")
        }

        callMe = (param) => {
            console.log(param)
        }

        myfunc(callMe)

        let myvar1 = 1
        let myvar2 = "1"
        myvar2 = parseInt(myvar2)

        console.log(myvar2+myvar1+"\n\n\n\nทดสอบ")
        console.log(1 == '1')
    </script>
@endpush
