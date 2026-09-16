<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #e0f2fe 0%, #fae8ff 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(236, 72, 153, 0.1);
            width: 100%;
            max-width: 380px;
            padding: 40px 30px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: linear-gradient(135deg, #bae6fd, #fbcfe8);
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 16px rgba(14, 165, 233, 0.15);
            padding: 4px;
        }

        .avatar-inner {
            width: 100%;
            height: 100%;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar-inner svg {
            width: 60px;
            height: 60px;
            fill: #94a3b8;
        }

        .card-title {
            font-size: 14px;
            font-weight: 600;
            color: #db2777;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }

        .info-group {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .info-box {
            background: #ffffff;
            border: 1px solid #f1f5f9;
            padding: 14px 18px;
            border-radius: 14px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
            text-align: left;
            transition: all 0.2s ease;
        }

        .info-box:hover {
            border-color: #f472b6;
            box-shadow: 0 4px 15px rgba(244, 114, 182, 0.15);
        }

        .info-label {
            font-size: 11px;
            font-weight: 500;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: block;
            margin-bottom: 2px;
        }

        .info-value {
            font-size: 15px;
            font-weight: 600;
            color: #1e293b;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <!-- Foto / Avatar -->
        <div class="avatar">
            <div class="avatar-inner">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
        </div>

        <div class="card-title">Kartu Profil Mahasiswa</div>

        <div class="info-group">
            <div class="info-box">
                <span class="info-label">Nama Lengkap</span>
                <span class="info-value">{{ $nama }}</span>
            </div>
            
            <div class="info-box">
                <span class="info-label">Kelas / Program Studi</span>
                <span class="info-value">{{ $kelas }}</span>
            </div>
            
            <div class="info-box">
                <span class="info-label">NPM</span>
                <span class="info-value">{{ $npm }}</span>
            </div>
        </div>
    </div>

</body>
</html>