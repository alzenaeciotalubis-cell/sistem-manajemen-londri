<!DOCTYPE html>

<html>

<head>

    <title>Login - Sistem Manajemen Laundry</title>

    <style>

        *{

            margin:0;

            padding:0;

            box-sizing:border-box;

            font-family:'Segoe UI',sans-serif;

        }

        body{

            height:100vh;

            display:flex;

            justify-content:center;

            align-items:center;

            background:linear-gradient(135deg,#0047ff,#ffb6d9);

        }

        .card{

            width:400px;

            background:white;

            padding:40px;

            border-radius:25px;

            box-shadow:0 10px 30px rgba(0,0,0,0.2);

        }

        .logo{

            text-align:center;

            margin-bottom:30px;

        }

        .logo h1{

            color:#2563eb;

        }

        .input-box{

            margin-bottom:20px;

        }

        .input-box label{

            display:block;

            margin-bottom:8px;

        }

        .input-box input,

        .input-box select{

            width:100%;

            padding:15px;

            border:1px solid #ddd;

            border-radius:12px;

        }

        button{

            width:100%;

            padding:15px;

            border:none;

            background:#2563eb;

            color:white;

            border-radius:12px;

            font-size:16px;

            cursor:pointer;

        }

        button:hover{

            background:#1e40af;

        }

    </style>

</head>

<body>

<div class="card">

    <div class="logo">

        <h1>🧺 Laundry App</h1>

        <p>Sistem Manajemen Laundry</p>

    </div>

    <div class="input-box">

        <label>Email</label>

        <input type="email" placeholder="Masukkan Email">

    </div>

    <div class="input-box">

        <label>Password</label>

        <input type="password" placeholder="Masukkan Password">

    </div>

    <div class="input-box">

        <label>Login Sebagai</label>

        <select onchange="pindah(this.value)">

            <option>Pilih Role</option>

            <option value="/admin">Admin</option>

            <option value="/petugas">Petugas</option>

        </select>

    </div>

    <button>Login</button>

</div>

<script>

function pindah(role){

    if(role !== ""){

        window.location = role;

    }

}

</script>

</body>

</html>
