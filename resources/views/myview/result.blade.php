@extends('template.default')

@section('content')
<h2 class="text-center">ข้อมูล</h2>

<p>ชื่อ: {{ $fname }}</p>
<p>สกุล: {{ $lname }}</p>
<p>วันเกิด: {{ $birthdate }}</p>
<p>เพศ: {{ $gender }}</p>
<p>ที่อยู่: {{ $address }}</p>
<p>สีที่ชอบ: {{ $color }}</p>
<p>แนวเพลง: {{ $theme }}</p>
<p>ยินยอมข้อมูล: {{ $agreement }}</p>
@endsection
