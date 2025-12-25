@extends('template.default')

@section('title','Workshop Form')
@section('content')
        <h1 class="mb-4 text-center">Workshop #HTML - FORM</h1>
            <form id="form" method="POST" action="/workshop">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" name="fname" class="form-control">
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
                        <input id="lname" name="lname" class="form-control">
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
                        <input type="date" id="birthdate" name="birthdate" class="form-control" max="{{ date('Y-m-d') }}">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุวันที่
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label>เพศ</label>
                    </div>
                    <div class="col d-flex align-items-center gap-3" id="gender">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="ชาย" id="male">
                            <label class="form-check-label" for="male">ชาย</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="หญิง" id="female">
                            <label class="form-check-label" for="female">หญิง</label>
                        </div>
                        <div class="invalid-feedback">
                            โปรดเลือกเพศ
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="profile">รูป</label>
                    </div>
                    <div class="col">
                        <input type="file"
                            id="profile"
                            class="form-control"
                            accept="image/*"
                            onchange="previewImage(event)">

                        <img id="preview"
                            class="mt-3 rounded"
                            style="max-width: 200px; display: none;">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดใส่รูป
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="address">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="address" name="address" class="form-control" rows="4"></textarea>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุที่อยู่
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select id="color" name="color" class="form-control">
                            <option value="">select</option>
                            <option value="แดง">แดง</option>
                            <option value="น้ำเงิน">น้ำเงิน</option>
                            <option value="เขียว">เขียว</option>
                            <option value="เหลือง">เหลือง</option>
                            <option value="ดำ">ดำ</option>
                            <option value="ขาว">ขาว</option>
                        </select>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดเลือกสี
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                     <div class="col-sm-12 col-md-4">
                        <label>แนวเพลงที่ชอบ</label>
                    </div>

                    <div class="col d-flex flex-column align-items-center">

                        <div class="d-flex flex-wrap justify-content-center gap-3" id="theme">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="theme" value="rock" id="rock">
                                <label class="form-check-label" for="rock">rock</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="theme" value="pop" id="pop">
                                <label class="form-check-label" for="pop">pop</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="theme" value="j-pop" id="jpop">
                                <label class="form-check-label" for="jpop">j-pop</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="theme" value="k-pop" id="kpop">
                                <label class="form-check-label" for="kpop">k-pop</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="theme" value="jazz" id="jazz">
                                <label class="form-check-label" for="jazz">jazz</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="theme" value="other" id="other">
                                <label class="form-check-label" for="other">other</label>
                            </div>
                        </div>
                        <div class="invalid-feedback" id="themeError">
                            โปรดเลือกแนวเพลง
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4">
                        <label>ยินยอมให้เก็บข้อมูล</label>
                    </div>
                    <div class="col" id="agreement">
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agreement" value="ยอมรับ" id="accept_yes">
                            <label class="form-check-label" for="accept_yes">ยินยอม</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agreement" value="ไม่ยอมรับ" id="accept_no">
                            <label class="form-check-label" for="accept_no">ไม่ยินยอม</label>
                            <div class="invalid-feedback">
                                โปรดเลือกว่าจะยินยอมหรือไม่
                            </div>
                        </div>
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
            let lname = document.getElementById('lname')
            let birth = document.getElementById('birthdate')
            let genderInputs = document.querySelectorAll('input[name="gender"]')
            let genderChecked = document.querySelector('input[name="gender"]:checked')
            let genderGroup = document.getElementById('gender')
            const genderError = genderGroup.querySelector('.invalid-feedback')
            let profile = document.getElementById('profile')
            let address = document.getElementById('address')
            let color = document.getElementById('color')
            const themeGroup = document.getElementById('theme')
            const themeInputs = document.querySelectorAll('input[name="theme"]')
            const themeChecked = document.querySelector('input[name="theme"]:checked')
            const themeError = document.getElementById('themeError')
            let agreementInputs = document.querySelectorAll('input[name="agreement"]')
            let agreementChecked = document.querySelector('input[name="agreement"]:checked')
            let agreementGroup = document.getElementById('agreement')
            const agreementError = document.querySelector('.invalid-feedback')

            console.log(fname.value)
            console.log(lname.value)
            console.log(birth.value)
            console.log(profile.value)
            console.log(color.value)
            console.log(gender?.id)
            console.log(theme?.id)
            console.log(agreement?.id)

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

            if(birth.value == ""){
                birth.classList.remove('is-valid')
                birth.classList.add('is-invalid')
            }
            else{
                birth.classList.add('is-valid')
                birth.classList.remove('is-invalid')
            }

            if (!genderChecked) {
                genderInputs.forEach(input => {
                    input.classList.add('is-invalid')
                    input.classList.remove('is-valid')
                })
                genderError.style.display = 'block'
            } else {
                genderInputs.forEach(input => {
                    input.classList.add('is-valid')
                    input.classList.remove('is-invalid')
                })
                genderError.style.display = 'none'
            }

            if(profile.value == ""){
                profile.classList.remove('is-valid')
                profile.classList.add('is-invalid')
            }
            else{
                profile.classList.add('is-valid')
                profile.classList.remove('is-invalid')
            }

            if (address.value.trim() === "") {
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            } else {
                address.classList.add('is-valid')
                address.classList.remove('is-invalid')
            }

            if(color.value == ""){
                color.classList.remove('is-valid')
                color.classList.add('is-invalid')
            }
            else{
                color.classList.add('is-valid')
                color.classList.remove('is-invalid')
            }

            if (!themeChecked) {
                themeInputs.forEach(input => {
                    input.classList.add('is-invalid')
                    input.classList.remove('is-valid')
                })
                themeError.style.display = 'block'
            }
            else {
                themeInputs.forEach(input => {
                    input.classList.remove('is-invalid')
                    input.classList.add('is-valid')
                })
                themeError.style.display = 'none' }


            if(!agreementChecked){
                 agreementInputs.forEach(input => {
                    input.classList.add('is-invalid')
                    input.classList.remove('is-valid')
                })
                agreementError.style.display = 'block'
            }
            else{
                agreementInputs.forEach(input => {
                    input.classList.add('is-valid')
                    input.classList.remove('is-invalid')
                })
                agreementError.style.display = 'none'
            }

            if (
                fname.value !== "" &&
                lname.value !== "" &&
                birth.value !== "" &&
                genderChecked &&
                address.value !== "" &&
                color.value !== "" &&
                themeChecked &&
                agreementChecked
            ) {
            document.getElementById('form').submit(); // ← POST จริง
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

        function previewImage(event) {
            const file = event.target.files[0]
            const preview = document.getElementById('preview')

            if (!file) {
                preview.style.display = 'none'
                return
            }

            const reader = new FileReader()
            reader.onload = function () {
            preview.src = reader.result
            preview.style.display = 'block'
            }
            reader.readAsDataURL(file)
        }

        document.getElementById('form').addEventListener('reset', function () {
            setTimeout(() => {
                document.getElementById('preview').style.display = 'none'
                document.getElementById('preview').src = ''
                document.getElementById('otherTheme').classList.add('d-none')
                document.getElementById('otherTheme').value = ''
                document.getElementById('themeError').style.display = 'none'
            }, 0)
        })


    </script>
@endpush
