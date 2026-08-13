<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League - Experience 360°</title>

    <link rel="stylesheet" href="./Styles.css">
    
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