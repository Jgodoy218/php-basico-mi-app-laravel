<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League - Experience 360°</title>
    <style>
        :root {
            --pl-purple: #37003c;
            --pl-dark: #0a051b;
            --pl-green: #00ff87;
            --pl-pink: #ff005a;
            --pl-cyan: #00e5ff;
            --pl-yellow: #ffe600;
            --bg-body: #060312;
            --card-glass: rgba(22, 12, 45, 0.65);
            --card-border: rgba(255, 255, 255, 0.12);
            --text-main: #ffffff;
            --text-muted: #a0aec0;
        }

        [data-theme="light"] {
            --bg-body: #f0f4f8;
            --card-glass: rgba(255, 255, 255, 0.85);
            --card-border: rgba(55, 0, 60, 0.15);
            --text-main: #1a202c;
            --text-muted: #4a5568;
            --pl-purple: #52005a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            overflow-x: hidden;
            transition: background 0.4s ease, color 0.4s ease;
        }

        /* FONDO ANIMADO NEÓN */
        .glow-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .glow-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.35;
            animation: floatOrb 12s infinite alternate ease-in-out;
        }

        .orb-1 { width: 500px; height: 500px; background: var(--pl-purple); top: -100px; left: -100px; }
        .orb-2 { width: 400px; height: 400px; background: var(--pl-pink); bottom: -100px; right: -50px; animation-delay: -5s; }
        .orb-3 { width: 350px; height: 350px; background: var(--pl-green); top: 50%; left: 50%; transform: translate(-50%, -50%); animation-delay: -8s; }

        @keyframes floatOrb {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(60px, 80px) scale(1.15); }
        }

        /* NAVBAR PREMIUM */
        nav {
            background: rgba(10, 5, 27, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 16px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--card-border);
        }

        nav .logo {
            font-size: 22px;
            font-weight: 900;
            color: var(--pl-green);
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: 1px;
            text-shadow: 0 0 12px rgba(0,255,135,0.4);
        }

        nav .logo img {
            height: 38px;
            filter: drop-shadow(0 0 8px rgba(0,255,135,0.6));
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            align-items: center;
        }

        nav ul li a {
            color: var(--text-main);
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            padding: 6px 0;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0%;
            height: 2px;
            background: var(--pl-green);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            box-shadow: 0 0 8px var(--pl-green);
        }

        nav ul li a:hover::after { width: 100%; }
        nav ul li a:hover { color: var(--pl-green); }

        .theme-toggle {
            background: rgba(255,255,255,0.1);
            border: 1px solid var(--card-border);
            color: var(--text-main);
            padding: 8px 14px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 700;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s;
        }

        .theme-toggle:hover {
            background: var(--pl-green);
            color: var(--pl-purple);
            box-shadow: 0 0 15px var(--pl-green);
        }

        /* HERO ultra impactante */
        .hero {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(180deg, rgba(6, 3, 18, 0.3) 0%, var(--bg-body) 100%),
                        url('https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTFP1tjjucSZiWapjN8mC-Rc5XfkKn3-IhBU8c_jiK7d4k8dpTdh9cJ_0uCapBhVY0XTvIHYdmqYTyxnO0') center/cover no-repeat;
        }

        .hero-content { max-width: 900px; z-index: 2; }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 0, 90, 0.2);
            border: 1px solid var(--pl-pink);
            color: var(--pl-pink);
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 25px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(255,0,90,0.3);
        }

        .hero-badge .live-dot {
            width: 8px;
            height: 8px;
            background: var(--pl-pink);
            border-radius: 50%;
            animation: pulseDot 1.2s infinite;
        }

        @keyframes pulseDot {
            0% { transform: scale(0.9); opacity: 1; box-shadow: 0 0 0 0 rgba(255,0,90,0.7); }
            70% { transform: scale(1.4); opacity: 0.4; box-shadow: 0 0 0 8px rgba(255,0,90,0); }
            100% { transform: scale(0.9); opacity: 1; }
        }

        .hero h1 {
            font-size: 72px;
            font-weight: 900;
            line-height: 1.05;
            margin-bottom: 20px;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #ffffff 30%, #a5b4fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero h1 span {
            background: linear-gradient(135deg, var(--pl-green) 0%, var(--pl-cyan) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 25px rgba(0,255,135,0.4));
        }

        .hero p {
            font-size: 19px;
            color: var(--text-muted);
            margin: 0 auto 40px auto;
            max-width: 650px;
            line-height: 1.6;
        }

        .btn-group { display: flex; gap: 20px; justify-content: center; }

        .btn {
            padding: 16px 36px;
            border-radius: 40px;
            font-weight: 800;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: var(--pl-green);
            color: #060312;
            border: none;
            box-shadow: 0 0 25px rgba(0, 255, 135, 0.5);
        }

        .btn-primary:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 0 40px rgba(0, 255, 135, 0.8);
            background: #2bffa3;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.08);
            color: var(--text-main);
            border: 1px solid var(--card-border);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            border-color: var(--pl-cyan);
            box-shadow: 0 0 20px rgba(0, 229, 255, 0.3);
        }

        /* SECCIÓN TICKER / PARTIDOS EN VIVO */
        .matches-ticker {
            max-width: 1200px;
            margin: -50px auto 60px auto;
            position: relative;
            z-index: 10;
            padding: 0 20px;
        }

        .ticker-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 15px;
        }

        .match-card {
            background: var(--card-glass);
            border-radius: 16px;
            border: 1px solid var(--card-border);
            padding: 16px;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .match-card:hover {
            transform: translateY(-4px);
            border-color: var(--pl-green);
        }

        .match-header {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            font-weight: 800;
            color: var(--pl-cyan);
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .match-teams {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .match-team {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 700;
            font-size: 14px;
        }

        .match-team div { display: flex; align-items: center; gap: 8px; }
        .match-team img { width: 22px; height: 22px; object-fit: contain; }
        .score { font-weight: 900; font-size: 16px; color: var(--pl-yellow); }

        /* SECCIONES HEADER */
        .section-header {
            text-align: center;
            margin: 90px 0 40px 0;
            padding: 0 20px;
        }

        .section-title {
            font-size: 40px;
            font-weight: 900;
            letter-spacing: -0.5px;
        }

        .section-title span {
            color: var(--pl-green);
            text-shadow: 0 0 20px rgba(0,255,135,0.3);
        }

        .section-subtitle {
            color: var(--text-muted);
            font-size: 16px;
            margin-top: 8px;
        }

        /* HIGHLIGHTS / VIDEOTECA */
        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .video-card {
            background: var(--card-glass);
            border-radius: 20px;
            border: 1px solid var(--card-border);
            overflow: hidden;
            position: relative;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .video-card:hover {
            transform: translateY(-8px);
            border-color: var(--pl-pink);
            box-shadow: 0 15px 35px rgba(255,0,90,0.25);
        }

        .video-thumb {
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .video-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .video-card:hover .video-thumb img { transform: scale(1.1); }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background: rgba(255, 0, 90, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(255,0,90,0.8);
            transition: transform 0.3s;
        }

        .play-btn::after {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 8px 0 8px 14px;
            border-color: transparent transparent transparent #ffffff;
            margin-left: 3px;
        }

        .video-card:hover .play-btn { transform: translate(-50%, -50%) scale(1.15); }

        .video-info { padding: 20px; }
        .video-tag { font-size: 11px; font-weight: 800; color: var(--pl-green); text-transform: uppercase; }
        .video-info h3 { font-size: 17px; margin: 6px 0 4px 0; line-height: 1.3; }

        /* GOLEADORES */
        .players-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .player-card {
            background: var(--card-glass);
            border-radius: 24px;
            border: 1px solid var(--card-border);
            overflow: hidden;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            position: relative;
        }

        .player-card:hover {
            transform: translateY(-8px);
            border-color: var(--pl-cyan);
            box-shadow: 0 15px 35px rgba(0, 229, 255, 0.25);
        }

        .player-img-wrapper {
            height: 250px;
            position: relative;
            background: radial-gradient(circle at center, var(--pl-purple), var(--bg-body));
        }

        .player-img-wrapper img { width: 100%; height: 100%; object-fit: cover; }

        .player-stat {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(10, 5, 27, 0.85);
            border: 1px solid var(--pl-green);
            color: var(--pl-green);
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 900;
            backdrop-filter: blur(5px);
            box-shadow: 0 0 10px rgba(0,255,135,0.3);
        }

        .player-info { padding: 20px; }
        .player-info h3 { font-size: 20px; margin-bottom: 4px; }
        .player-info .club { color: var(--text-muted); font-size: 14px; }

        /* CLUBES */
        .teams-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .team-card {
            background: var(--card-glass);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--card-border);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .team-card:hover {
            transform: translateY(-8px);
            border-color: var(--pl-green);
            box-shadow: 0 15px 35px rgba(0, 255, 135, 0.2);
        }

        .stadium-wrapper { height: 140px; position: relative; overflow: hidden; }
        .stadium-wrapper img { width: 100%; height: 100%; object-fit: cover; }

        .crest-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--bg-body);
            border: 3px solid var(--card-border);
            margin: -35px auto 10px auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
            z-index: 2;
        }

        .crest-wrapper img { width: 75%; height: 75%; object-fit: contain; }
        .team-details { padding: 15px 20px 25px 20px; text-align: center; }
        .team-details h3 { font-size: 18px; margin-bottom: 4px; }
        .team-details p { font-size: 13px; color: var(--text-muted); }

        /* TABLA INTERACTIVA */
        .standings-container { max-width: 1000px; margin: 0 auto; padding: 0 20px; }

        .table-filter {
            display: flex;
            gap: 12px;
            margin-bottom: 25px;
            justify-content: center;
        }

        .filter-btn {
            background: var(--card-glass);
            border: 1px solid var(--card-border);
            color: var(--text-muted);
            padding: 10px 22px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 700;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--pl-purple);
            color: var(--pl-green);
            border-color: var(--pl-green);
            box-shadow: 0 0 15px rgba(0,255,135,0.3);
        }

        .table-responsive {
            background: var(--card-glass);
            border-radius: 24px;
            border: 1px solid var(--card-border);
            overflow: hidden;
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }

        table { width: 100%; border-collapse: collapse; }
        thead { background: rgba(55, 0, 60, 0.7); }

        th {
            padding: 18px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--pl-green);
            text-align: center;
        }

        th.text-left { text-align: left; }

        td {
            padding: 18px;
            text-align: center;
            font-size: 14px;
            border-bottom: 1px solid var(--card-border);
        }

        td.text-left { text-align: left; }
        tbody tr { transition: background 0.2s ease; }
        tbody tr:hover { background: rgba(0, 255, 135, 0.08); }

        .pos-badge {
            display: inline-block;
            width: 28px;
            height: 28px;
            line-height: 28px;
            border-radius: 50%;
            font-weight: 900;
            font-size: 12px;
        }

        .champions { background: rgba(0, 255, 135, 0.2); color: var(--pl-green); border: 1px solid var(--pl-green); }
        .europa { background: rgba(0, 229, 255, 0.2); color: var(--pl-cyan); border: 1px solid var(--pl-cyan); }

        .team-cell { display: flex; align-items: center; gap: 14px; font-weight: 700; }
        .team-cell img { width: 26px; height: 26px; object-fit: contain; }

        /* CTA BANNER */
        .cta-banner {
            margin: 100px 20px 60px 20px;
            border-radius: 32px;
            padding: 80px 20px;
            text-align: center;
            background: linear-gradient(135deg, rgba(55, 0, 60, 0.95), rgba(10, 5, 27, 0.95)),
                        url('https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcSx3VvtwLIeFNF7PzyXrj5Es6dsz0maJooGQy07eit-avEC4QdGg0WyRap3YHHJL9O8mRghdpkhv6S0dpA') center/cover no-repeat;
            border: 1px solid var(--pl-green);
            box-shadow: 0 0 60px rgba(0, 255, 135, 0.2);
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-banner h2 { font-size: 42px; font-weight: 900; margin-bottom: 15px; }
        .cta-banner p { color: var(--text-muted); max-width: 550px; margin: 0 auto 35px auto; font-size: 16px; }

        /* FOOTER */
        footer {
            border-top: 1px solid var(--card-border);
            padding: 40px 20px;
            text-align: center;
            color: var(--text-muted);
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 42px; }
            nav ul { display: none; }
        }
    </style>
</head>
<body>

    <!-- FONDO NEÓN ORBS -->
    <div class="glow-bg">
        <div class="glow-orb orb-1"></div>
        <div class="glow-orb orb-2"></div>
        <div class="glow-orb orb-3"></div>
    </div>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcSJMNIoUrOwZHxPqXZ6TiLg8U3xNFoDuwuuVFpXpGLKdyijwQTzTRfvFpt_xHonflliQg5Qj5oMAUEUOhk" alt="Logo Premier League">
            PREMIER<span style="color:var(--text-main)">LEAGUE</span>
        </div>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#vivo">En Vivo</a></li>
            <li><a href="#highlights">Highlights</a></li>
            <li><a href="#goleadores">Goleadores</a></li>
            <li><a href="#equipos">Clubes</a></li>
            <li><a href="#tabla">Tabla</a></li>
        </ul>
        <button class="theme-toggle" id="themeBtn">
            <span>🌙</span> Tema
        </button>
    </nav>

    <!-- HERO -->
    <section class="hero" id="inicio">
        <div class="hero-content">
            <span class="hero-badge"><span class="live-dot"></span> Temporada 2025 / 2026 Live Hub</span>
            <h1>Siente la pasión del <span>Fútbol Más Grande</span></h1>
            <p>Sigue las estadísticas en tiempo real, los mejores momentos del fin de semana y la lucha encarnizada por el trofeo más codiciado del planeta.</p>
            <div class="btn-group">
                <a href="#tabla" class="btn btn-primary">Ver Posiciones</a>
                <a href="#highlights" class="btn btn-secondary">▶ Repeticiones</a>
            </div>
        </div>
    </section>

    <!-- TICKER DE PARTIDOS EN VIVO Y PRÓXIMOS -->
    <div class="matches-ticker" id="vivo">
        <div class="ticker-grid">
            <div class="match-card">
                <div class="match-header"><span>84' · EN VIVO</span><span style="color:var(--pl-pink)">● DIRECTO</span></div>
                <div class="match-teams">
                    <div class="match-team">
                        <div><img src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcQ4UZu7o_YCpLggvlhJasc2-eCYLUC4SfnkbqsP48SWo3hCUlI4EdpZwNNgT7l0tR__SyqpMGzY-xJdTOg" alt="MC"> Man City</div>
                        <span class="score">2</span>
                    </div>
                    <div class="match-team">
                        <div><img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcS8fxQ7Ix_pDdeI10EHrJAbxfYwNleOz1xHmk7Seb90lBOqGacTXojRWuNs_s_S8IrpVZEtClIOp6jV_b0" alt="CHE"> Chelsea</div>
                        <span class="score">1</span>
                    </div>
                </div>
            </div>

            <div class="match-card">
                <div class="match-header"><span>HOY · 17:30</span><span>STAMFORD BRIDGE</span></div>
                <div class="match-teams">
                    <div class="match-team">
                        <div><img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcRbfWl7hmfGdyvQb1XGYHc7HK1V5V4-EOvYMp110IKzr7tc63FRyV4horvtzXWZko2TAToMd27ZcP2vKeE" alt="MU"> Man United</div>
                        <span class="score">-</span>
                    </div>
                    <div class="match-team">
                        <div><img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcS-oAejKCAsPBaFleEHKwcTKV5AG518xOSuaM20La3lIV-Xl7ZOuC31BwlJLrgf1cux0hUDf5xZinsuqc4" alt="AV"> Aston Villa</div>
                        <span class="score">-</span>
                    </div>
                </div>
            </div>

            <div class="match-card">
                <div class="match-header"><span>FINALIZADO</span><span>ANFIELD</span></div>
                <div class="match-teams">
                    <div class="match-team">
                        <div><img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcRbfWl7hmfGdyvQb1XGYHc7HK1V5V4-EOvYMp110IKzr7tc63FRyV4horvtzXWZko2TAToMd27ZcP2vKeE" alt="LIV"> Liverpool</div>
                        <span class="score">3</span>
                    </div>
                    <div class="match-team">
                        <div><img src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcQ4UZu7o_YCpLggvlhJasc2-eCYLUC4SfnkbqsP48SWo3hCUlI4EdpZwNNgT7l0tR__SyqpMGzY-xJdTOg" alt="ARS"> Arsenal</div>
                        <span class="score">1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HIGHLIGHTS / VIDEO RECAPS -->
    <div class="section-header" id="highlights">
        <h2 class="section-title">Momentos <span>Inolvidables</span></h2>
        <p class="section-subtitle">Revive los goles y atajadas más espectaculares de la jornada.</p>
    </div>
    <div class="highlights-grid">
        <div class="video-card">
            <div class="video-thumb">
                <img src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcTHrigUR13pLspYGVopEbnHXQG6LzLJYzoIynzpGkqK-xY39JijupXGhq70mugpPihgEHY1EkbAgRbcua8" alt="Highlight 1">
                <div class="play-btn"></div>
            </div>
            <div class="video-info">
                <span class="video-tag">Resumen del Partido</span>
                <h3>Liverpool vs Arsenal (3-1) - Todas las jugadas clave</h3>
            </div>
        </div>
        <div class="video-card">
            <div class="video-thumb">
                <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcSx3VvtwLIeFNF7PzyXrj5Es6dsz0maJooGQy07eit-avEC4QdGg0WyRap3YHHJL9O8mRghdpkhv6S0dpA" alt="Highlight 2">
                <div class="play-btn"></div>
            </div>
            <div class="video-info">
                <span class="video-tag">Top 5 Goles</span>
                <h3>Los mejores misiles de fuera del área de la Jornada 10</h3>
            </div>
        </div>
        <div class="video-card">
            <div class="video-thumb">
                <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcRLtbUVnWMXUk88UsNex8VNhoivMcytyM4BWA21ujb5NfGk0RfnONw_FI4Q8iOK8DmOdK0WHhVIK-g9nug" alt="Highlight 3">
                <div class="play-btn"></div>
            </div>
            <div class="video-info">
                <span class="video-tag">Atmósfera pura</span>
                <h3>El rugido de Old Trafford tras la remontada agónica</h3>
            </div>
        </div>
    </div>

    <!-- MÁXIMOS GOLEADORES -->
    <div class="section-header" id="goleadores">
        <h2 class="section-title">Líderes de <span>Goleo</span></h2>
        <p class="section-subtitle">Los artilleros implacables que están destrozando las redes.</p>
    </div>
    <div class="players-grid">
        <div class="player-card">
            <div class="player-img-wrapper">
                <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcT0AvAOjh_nq_Ge5xVXK14Pwdy5icyNu7CfRK_Gc6kRmEOZer41gLIMnA6JiTMMlnV1oSDVtxklGAo0cAA" alt="Erling Haaland">
                <span class="player-stat">⚡ 14 GOLES</span>
            </div>
            <div class="player-info">
                <h3>Erling Haaland</h3>
                <p class="club">Manchester City · Delantero Centro</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-img-wrapper">
                <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcS70BWESBybUUWxIA8ijB8YwQW4SX2C5q3xrJoMx3vbJ008rnYabi0Rxa8OKQ_JYbC7CqNLZgJy-2jt3bY" alt="Mohamed Salah">
                <span class="player-stat">⚡ 11 GOLES</span>
            </div>
            <div class="player-info">
                <h3>Mohamed Salah</h3>
                <p class="club">Liverpool FC · Extremo Derecho</p>
            </div>
        </div>
    </div>

    <!-- CLUBES DESTACADOS -->
    <div class="section-header" id="equipos">
        <h2 class="section-title">Clubes <span>Protagónicos</span></h2>
        <p class="section-subtitle">La élite del fútbol inglés frente a frente.</p>
    </div>
    <div class="teams-grid">
        <div class="team-card">
            <div class="stadium-wrapper">
                <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcRLtbUVnWMXUk88UsNex8VNhoivMcytyM4BWA21ujb5NfGk0RfnONw_FI4Q8iOK8DmOdK0WHhVIK-g9nug" alt="Old Trafford">
            </div>
            <div class="crest-wrapper">
                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcRbfWl7hmfGdyvQb1XGYHc7HK1V5V4-EOvYMp110IKzr7tc63FRyV4horvtzXWZko2TAToMd27ZcP2vKeE" alt="Man United Crest">
            </div>
            <div class="team-details">
                <h3>Manchester United</h3>
                <p>Old Trafford · Cap. 74,310</p>
            </div>
        </div>
        <div class="team-card">
            <div class="stadium-wrapper">
                <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcTT6z9wMc16xEBu09dAaUWz1kE2vJdQY_FcwRwgE7YiVLmD6mNwfjxaxWrb2eZ0HrA5AOdZ2eOaJ1kUYYQ" alt="Stamford Bridge">
            </div>
            <div class="crest-wrapper">
                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcS8fxQ7Ix_pDdeI10EHrJAbxfYwNleOz1xHmk7Seb90lBOqGacTXojRWuNs_s_S8IrpVZEtClIOp6jV_b0" alt="Chelsea Crest">
            </div>
            <div class="team-details">
                <h3>Chelsea FC</h3>
                <p>Stamford Bridge · Cap. 40,341</p>
            </div>
        </div>
        <div class="team-card">
            <div class="stadium-wrapper">
                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTFP1tjjucSZiWapjN8mC-Rc5XfkKn3-IhBU8c_jiK7d4k8dpTdh9cJ_0uCapBhVY0XTvIHYdmqYTyxnO0" alt="Etihad Stadium">
            </div>
            <div class="crest-wrapper">
                <img src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcQ4UZu7o_YCpLggvlhJasc2-eCYLUC4SfnkbqsP48SWo3hCUlI4EdpZwNNgT7l0tR__SyqpMGzY-xJdTOg" alt="Man City Crest">
            </div>
            <div class="team-details">
                <h3>Manchester City</h3>
                <p>Etihad Stadium · Cap. 53,400</p>
            </div>
        </div>
        <div class="team-card">
            <div class="stadium-wrapper">
                <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcQ1ApaLXcMi_dT_j3Xj-gZP4vYJuXUUMHB5RPkzlMa-nllHR7-JW6YHxd3BowiI-Qq9SsPZ0a8TGcKVIqs" alt="Villa Park">
            </div>
            <div class="crest-wrapper">
                <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcS-oAejKCAsPBaFleEHKwcTKV5AG518xOSuaM20La3lIV-Xl7ZOuC31BwlJLrgf1cux0hUDf5xZinsuqc4" alt="Aston Villa Crest">
            </div>
            <div class="team-details">
                <h3>Aston Villa</h3>
                <p>Villa Park · Cap. 42,657</p>
            </div>
        </div>
    </div>

    <!-- TABLA DE POSICIONES INTERACTIVA -->
    <div class="section-header" id="tabla">
        <h2 class="section-title">Tabla de <span>Clasificación</span></h2>
        <p class="section-subtitle">Filtra la tabla según la lucha europea.</p>
    </div>
    <div class="standings-container">
        <div class="table-filter">
            <button class="filter-btn active" onclick="filterTable('all', this)">Todos los Equipos</button>
            <button class="filter-btn" onclick="filterTable('champions', this)">Zona Champions</button>
            <button class="filter-btn" onclick="filterTable('europa', this)">Zona Europa League</button>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Pos</th>
                        <th class="text-left">Club</th>
                        <th>PJ</th>
                        <th>G</th>
                        <th>E</th>
                        <th>P</th>
                        <th>Pts</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr class="row-champions">
                        <td><span class="pos-badge champions">1</span></td>
                        <td class="text-left">
                            <div class="team-cell">
                                <img src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcQ4UZu7o_YCpLggvlhJasc2-eCYLUC4SfnkbqsP48SWo3hCUlI4EdpZwNNgT7l0tR__SyqpMGzY-xJdTOg" alt="MC">
                                Manchester City
                            </div>
                        </td>
                        <td>10</td><td>8</td><td>1</td><td>1</td><td><strong>25</strong></td>
                    </tr>
                    <tr class="row-champions">
                        <td><span class="pos-badge champions">2</span></td>
                        <td class="text-left">
                            <div class="team-cell">
                                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcRbfWl7hmfGdyvQb1XGYHc7HK1V5V4-EOvYMp110IKzr7tc63FRyV4horvtzXWZko2TAToMd27ZcP2vKeE" alt="LIV">
                                Liverpool FC
                            </div>
                        </td>
                        <td>10</td><td>7</td><td>2</td><td>1</td><td><strong>23</strong></td>
                    </tr>
                    <tr class="row-champions">
                        <td><span class="pos-badge champions">3</span></td>
                        <td class="text-left">
                            <div class="team-cell">
                                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcS8fxQ7Ix_pDdeI10EHrJAbxfYwNleOz1xHmk7Seb90lBOqGacTXojRWuNs_s_S8IrpVZEtClIOp6jV_b0" alt="CHE">
                                Chelsea FC
                            </div>
                        </td>
                        <td>10</td><td>6</td><td>2</td><td>2</td><td><strong>20</strong></td>
                    </tr>
                    <tr class="row-europa">
                        <td><span class="pos-badge europa">4</span></td>
                        <td class="text-left">
                            <div class="team-cell">
                                <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcS-oAejKCAsPBaFleEHKwcTKV5AG518xOSuaM20La3lIV-Xl7ZOuC31BwlJLrgf1cux0hUDf5xZinsuqc4" alt="AV">
                                Aston Villa
                            </div>
                        </td>
                        <td>10</td><td>5</td><td>3</td><td>2</td><td><strong>18</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- BANNER DE SUSCRIPCIÓN -->
    <section class="cta-banner">
        <h2>Recibe las Alertas Instantáneas</h2>
        <p>Alineaciones oficiales, goles en directo y datos estadísticos avanzados directo en tu dispositivo.</p>
        <button class="btn btn-primary">Suscribirme Ahora</button>
    </section>

    <!-- FOOTER -->
    <footer>
        &copy; 2026 Premier League Interactive Hub · Diseñado con tecnología Glassmorphism, animaciones CSS y JavaScript dinámico.
    </footer>

    <!-- JAVASCRIPT DINÁMICO -->
    <script>
        // LÓGICA DE TEMA CLARO / OSCURO
        const themeBtn = document.getElementById('themeBtn');
        let currentTheme = 'dark';

        themeBtn.addEventListener('click', () => {
            if (currentTheme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'light');
                themeBtn.innerHTML = '☀️ Tema';
                currentTheme = 'light';
            } else {
                document.documentElement.removeAttribute('data-theme');
                themeBtn.innerHTML = '🌙 Tema';
                currentTheme = 'dark';
            }
        });

        // FILTRADO DE TABLA DINÁMICA
        function filterTable(type, btn) {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const rows = document.querySelectorAll('#tableBody tr');
            rows.forEach(row => {
                if (type === 'all') {
                    row.style.display = '';
                } else if (type === 'champions') {
                    row.style.display = row.classList.contains('row-champions') ? '' : 'none';
                } else if (type === 'europa') {
                    row.style.display = row.classList.contains('row-europa') ? '' : 'none';
                }
            });
        }
    </script>
</body>
</html>