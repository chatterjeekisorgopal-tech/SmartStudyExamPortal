<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Smart Study Exam Portal</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f5f7fb;
}

.hero{
background:linear-gradient(135deg,#1e3c72,#2a5298);
color:white;
padding:60px 20px;
text-align:center;
}

.hero h1{
font-size:38px;
margin-bottom:10px;
}

.hero p{
font-size:18px;
opacity:0.9;
}

.container{
max-width:900px;
margin:auto;
padding:20px;
}

.card{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
margin-top:-40px;
}

.form-group{
margin-bottom:15px;
}

.form-group label{
display:block;
margin-bottom:5px;
font-weight:600;
}

.form-group input{
width:100%;
padding:12px;
border:1px solid #ddd;
border-radius:8px;
font-size:15px;
}

.start-btn{
width:100%;
background:#1e3c72;
color:white;
border:none;
padding:15px;
font-size:18px;
border-radius:10px;
cursor:pointer;
}

.start-btn:hover{
background:#16315d;
}

.exam-section{
display:none;
}

.question-box{
background:white;
padding:20px;
margin-top:20px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.question-number{
font-size:18px;
font-weight:600;
margin-bottom:10px;
}

.question-text{
font-size:20px;
margin-bottom:20px;
}

.option{
display:block;
padding:12px;
margin-bottom:10px;
border:1px solid #ddd;
border-radius:8px;
cursor:pointer;
}

.option input{
margin-right:10px;
}

.timer{
background:#dc3545;
color:white;
padding:12px;
border-radius:10px;
font-size:20px;
font-weight:bold;
text-align:center;
margin-top:15px;
}

.submit-btn{
width:100%;
margin-top:20px;
background:#28a745;
color:white;
border:none;
padding:15px;
font-size:18px;
border-radius:10px;
cursor:pointer;
}

.result-box{
display:none;
background:white;
padding:30px;
margin-top:20px;
border-radius:15px;
text-align:center;
box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.result-box h2{
margin-bottom:15px;
}

.score{
font-size:40px;
font-weight:bold;
color:#1e3c72;
}

</style>
</head>

<body>

<div class="hero">
<h1>Smart Study Youth Computer Education Centre</h1>
<p>Online Examination Portal</p>
</div>

<div class="container">

<div class="card" id="studentForm">

<h2 style="margin-bottom:20px;">Student Information</h2>

<div class="form-group">
<label>Student Name</label>
<input type="text" id="name">
</div>

<div class="form-group">
<label>Roll Number</label>
<input type="text" id="roll">
</div>

<div class="form-group">
<label>Teacher Name</label>
<input type="text" id="teacher">
</div>

<div class="form-group">
<label>Batch</label>
<input type="text" id="batch">
</div>

<div class="form-group">
<label>Access Code</label>
<input type="password" id="accessCode">
</div>

<button class="start-btn" onclick="startExam()">
Start Examination
</button>

</div>
