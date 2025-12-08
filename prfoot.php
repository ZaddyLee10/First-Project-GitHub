<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super League - Ultimate Football Experience</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- News Ticker -->
    <div class="news-ticker bg-white">
        <div class="container">
            <div class="ticker-content text-warning">
                <strong>Breaking:</strong> Super League kicks off in 3 days! | Chelsea signs Wonderkid Esteavo | Man City are in full spirit | Juventus unveils new kit | Luiz enrique belives PSG can go all the way | This might be Ronaldo last chance to win first trophy with Al Nassr
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">SUPER LEAGUE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#teams">Teams</a></li>
                    <li class="nav-item"><a class="nav-link" href="#standings">Standings</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fixtures">Fixtures</a></li>

                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- When user IS logged in -->
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Welcome, <?php echo $_SESSION['username']; ?>!</a></li>
                    <?php else: ?>
                        <!-- When user is NOT logged in -->
                        <li class="nav-item"><a class="nav-link" href="signin.php">Signin</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#">Welcome, Guest!</a></li> -->
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="#players">Stars</a></li>
                    <button class="nav-item btn btn-link" data-bs-toggle="modal" data-bs-target="#quizModal">
                        Quiz
                    </button>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container position-relative">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-1 fw-bold">SUPER LEAGUE</h1>
                    <p class="lead fs-3 mb-4">The World's Most Elite Football Competition</p>
                    <div class="countdown mb-4">
                        <p class="mb-1">Season Starts In</p>
                        <span id="countdown">3</span> <small>Days</small><br>
                        <span style="color: #f59e0b;"><i>Are you ready?</i></span>
                    </div>
                    <a href="#teams" class="btn btn-warning btn-lg px-5 py-3 fw-bold">EXPLORE TEAMS</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Teams Section -->
<section id="teams" class="py-5">
    <div class="container">
        <h2 class="section-title">ELITE TEAMS</h2>
        <div class="row g-4">
            <!-- Chelsea -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/Chelsea_FC.svg.png" alt="Chelsea" class="w-100">
                    <div class="p-4">
                        <h4 class="text-warning">Chelsea FC</h4>
                        <p class="small">London's pride, First team to have won it all</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #3f37c9;">Est. 1905</span>
                            <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal1">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Man City -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/mancity.png" alt="Man City" class="w-100">
                    <div class="p-4">
                        <h4 class="text-info">Manchester City</h4>
                        <p class="small">Dominant force with revolutionary possession football</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: aqua;">Est. 1880</span>
                            <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal2">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Juventus -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/juve.webp" alt="Juventus" class="w-100">
                    <div class="p-4">
                        <h4 class="text-light">Juventus</h4>
                        <p class="small">The Old Lady - 36 Serie A titles and Italian royalty</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #e2e8f0;">Est. 1897</span>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal3">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inter Milan -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/FC_Internazionale_Milano_2021.svg.png" alt="Inter" class="w-100">
                    <div class="p-4">
                        <h4 class="text-primary">Inter Milan</h4>
                        <p class="small">Nerazzurri with passionate fans and rich history</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #03045e;">Est. 1908</span>
                           EO<a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal4">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Napoli -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/Napoli.png" alt="Napoli" class="w-100">
                    <div class="p-4">
                        <h4 class="text-info">Napoli</h4>
                        <p class="small">Passionate southern Italian club with attacking flair</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: aqua;">Est. 1926</span>
                            <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal5">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PSG -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">France</span>
                    <img src="images/Paris_Saint-Germain_F.C..svg.webp" alt="PSG" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">PSG</h4>
                        <p class="small">Parisian giants with global superstars</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #03045e;">Est. 1970</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal6">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Strasbourg -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">France</span>
                    <img src="images/Racing_Club_de_Strasbourg_logo.svg.png" alt="Strasbourg" class="w-100">
                    <div class="p-4">
                        <h4 class="text-primary">RC Strasbourg</h4>
                        <p class="small">Historic French club with passionate support</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: cyan;">Est. 1906</span>
                            <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal7">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Al Nassr -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Saudi Arabia</span>
                    <img src="images/al-nassr-alnassr-saudi-club-600nw-2354710755.webp" alt="Al Nassr" class="w-100">
                    <div class="p-4">
                        <h4 class="text-warning">Al Nassr</h4>
                        <p class="small">Saudi powerhouse with global icon Cristiano Ronaldo</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: gold;">Est. 1955</span>
                            <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal8">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Arsenal -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/Arsenal_F.C.-Logo.wine.png" alt="Arsenal" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">Arsenal</h4>
                        <p class="small">The Invincibles of 2004</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #ef0107;">Est. 1886</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal9">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Liverpool -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/Logo-Liverpool.png" alt="Liverpool" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">Liverpool</h4>
                        <p class="small">You'll Never Walk Alone</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #c8102e;">Est. 1892</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal10">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Manchester United -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/Manchester_United_FC_crest.svg.png" alt="Man United" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">Manchester United</h4>
                        <p class="small">20-time English champions</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #da020e;">Est. 1878</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal11">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tottenham Hotspur -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/spurs.jpg" alt="Spurs" class="w-100">
                    <div class="p-4">
                        <h4 class="text-light">Tottenham Hotspur</h4>
                        <p class="small">To Dare Is To Do</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #132257;">Est. 1882</span>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal12">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newcastle United -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/newcastle.jpg" alt="Newcastle" class="w-100">
                    <div class="p-4">
                        <h4 class="text-light">Newcastle United</h4>
                        <p class="small">Saudi-backed Toon Army</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #fff;">Est. 1892</span>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal13">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Real Madrid -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Spain</span>
                    <img src="images/Real_Madrid_CF.svg.png" alt="Real Madrid" class="w-100">
                    <div class="p-4">
                        <h4 class="text-light">Real Madrid</h4>
                        <p class="small">15 UCL titles</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #fff;">Est. 1902</span>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal14">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Barcelona -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Spain</span>
                    <img src="images/barca.jpeg" alt="Barcelona" class="w-100">
                    <div class="p-4">
                        <h4 class="text-primary">Barcelona</h4>
                        <p class="small">Més que un club</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #004d98;">Est. 1899</span>
                            <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal15">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Atlético Madrid -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Spain</span>
                    <img src="images/atletico.jpg" alt="Atlético" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">Atlético Madrid</h4>
                        <p class="small">Simeone's warriors</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #cb3522;">Est. 1903</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal16">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Real Betis -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Spain</span>
                    <img src="images/Real_betis_logo.svg.png" alt="Betis" class="w-100">
                    <div class="p-4">
                        <h4 class="text-success">Real Betis</h4>
                        <p class="small">Seville's green soul</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #00913b;">Est. 1907</span>
                            <a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal17">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Athletic Club -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Spain</span>
                    <img src="images/Club_Athletic_Bilbao_logo.svg.png" alt="Athletic" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">Athletic Club</h4>
                        <p class="small">Basque-only legends</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #ee2b38;">Est. 1898</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal18">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AC Milan -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/Milan-Logo.png" alt="AC Milan" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">AC Milan</h4>
                        <p class="small">7-time UCL winners</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #000;">Est. 1899</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal19">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Roma -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/AS_Roma_logo_(2017).svg.png" alt="Roma" class="w-100">
                    <div class="p-4">
                        <h4 class="text-warning">Roma</h4>
                        <p class="small">Mourinho's Europa kings</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #f0c330;">Est. 1927</span>
                            <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal20">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Atalanta -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/Atalanta-logo.jpg" alt="Atalanta" class="w-100">
                    <div class="p-4">
                        <h4 class="text-info">Atalanta</h4>
                        <p class="small">Goddess of attack</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #004b8d;">Est. 1907</span>
                            <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal21">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lazio -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/S.S._Lazio_badge.svg" alt="Lazio" class="w-100">
                    <div class="p-4">
                        <h4 class="text-info">Lazio</h4>
                        <p class="small">Eagles of Rome</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #87d8f7;">Est. 1900</span>
                            <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal22">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fiorentina -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Italy</span>
                    <img src="images/ACF_Fiorentina.svg.png" alt="Fiorentina" class="w-100">
                    <div class="p-4">
                        <h4 class="text-purple">Fiorentina</h4>
                        <p class="small">Viola passion</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #4e2685;">Est. 1926</span>
                            <a href="#" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal23">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Al Hilal -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Saudi Arabia</span>
                    <img src="images/Al_Hilal_SFC_Logo.svg" alt="Al Hilal" class="w-100">
                    <div class="p-4">
                        <h4 class="text-primary">Al Hilal</h4>
                        <p class="small">4-time Asian champions</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #004b8d;">Est. 1957</span>
                            <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal24">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Al Ittihad -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Saudi Arabia</span>
                    <img src="images/Al-Ittihad_logo.png" alt="Al Ittihad" class="w-100">
                    <div class="p-4">
                        <h4 class="text-warning">Al Ittihad</h4>
                        <p class="small">Benzema's Tigers</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #ffd700;">Est. 1927</span>
                            <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal25">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Al Ahli -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Saudi Arabia</span>
                    <img src="images/al-ahli-club-logo-symbol.jpg" alt="Al Ahli" class="w-100">
                    <div class="p-4">
                        <h4 class="text-success">Al Ahli</h4>
                        <p class="small">The Royal Club</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #006633;">Est. 1937</span>
                            <a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal26">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Al Shabab -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Saudi Arabia</span>
                    <img src="images/Al_Shabab_FC_(Riyadh).svg.png" alt="Al Shabab" class="w-100">
                    <div class="p-4">
                        <h4 class="text-light">Al Shabab</h4>
                        <p class="small">The White Lion</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #fff;">Est. 1947</span>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal27">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Al Ettifaq -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">Saudi Arabia</span>
                    <img src="images/960px-Ettifaq_logo.jpg" alt="Al Ettifaq" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">Al Ettifaq</h4>
                        <p class="small">Gerrard's project</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #cc0000;">Est. 1945</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal28">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Leeds United -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/Leeds-United-logo.png" alt="Leeds" class="w-100">
                    <div class="p-4">
                        <h4 class="text-light">Leeds United</h4>
                        <p class="small">Marching on Together</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #fff;">Est. 1919</span>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal29">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Leicester City -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/Leicester_City_crest.svg.png" alt="Leicester" class="w-100">
                    <div class="p-4">
                        <h4 class="text-primary">Leicester City</h4>
                        <p class="small">2016 miracle winners</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #0033a0;">Est. 1884</span>
                            <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal30">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Southampton -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/FC_Southampton.svg.png" alt="Southampton" class="w-100">
                    <div class="p-4">
                        <h4 class="text-danger">Southampton</h4>
                        <p class="small">The Saints</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #ed1a3b;">Est. 1885</span>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal31">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Norwich City -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card h-100">
                    <span class="team-badge">England</span>
                    <img src="images/Norwich_City_FC_logo.svg.png" alt="Norwich" class="w-100">
                    <div class="p-4">
                        <h4 class="text-success">Norwich City</h4>
                        <p class="small">On the ball, City!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="color: #00a14b;">Est. 1902</span>
                            <a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#teamModal32">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Standings Section -->
 <!-- STANDINGS SECTION -->
<section id="standings" class="py-5 bg-white">
    <div class="container">
        <h2 class="section-title text-center mb-4">LEAGUE STANDINGS</h2>
        
        <div class="table-responsive">
            <table class="table table-hover standings-table align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Pos</th>
                        <th scope="col">Team</th>
                        <th scope="col">P</th>
                        <th scope="col">W</th>
                        <th scope="col">D</th>
                        <th scope="col">L</th>
                        <th scope="col">GF</th>
                        <th scope="col">GA</th>
                        <th scope="col">GD</th>
                        <th scope="col">Pts</th>
                        <th scope="col">Form</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 1 -->
                    <tr class="table-warning">
                        <td><strong>1</strong></td>
                        <td><strong>Manchester City</strong></td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><strong>0</strong></td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <!-- 2 -->
                    <tr>
                        <td>2</td>
                        <td>Chelsea</td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <!-- 3 -->
                    <tr>
                        <td>3</td>
                        <td>PSG</td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <!-- 4 -->
                    <tr>
                        <td>4</td>
                        <td>Juventus</td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <!-- 5 -->
                    <tr>
                        <td>5</td>
                        <td>Inter Milan</td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <!-- 6 -->
                    <tr>
                        <td>6</td>
                        <td>Napoli</td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <!-- 7 -->
                    <tr>
                        <td>7</td>
                        <td>Al Nassr</td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <!-- 8 -->
                    <tr>
                        <td>8</td>
                        <td>RC Strasbourg</td>
                        <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                        <td><span class="badge bg-secondary">PRE</span></td>
                    </tr>
                    <tr><td>9</td><td>Arsenal</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>10</td><td>Liverpool</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>11</td><td>Manchester United</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>12</td><td>Tottenham Hotspur</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>13</td><td>Newcastle United</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>14</td><td>Real Madrid</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>15</td><td>Barcelona</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>16</td><td>Atlético Madrid</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>17</td><td>Real Betis</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>18</td><td>Athletic Club</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>19</td><td>AC Milan</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>20</td><td>Roma</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>21</td><td>Atalanta</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>22</td><td>Lazio</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>23</td><td>Fiorentina</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>24</td><td>Al Hilal</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>25</td><td>Al Ittihad</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>26</td><td>Al Ahli</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>27</td><td>Al Shabab</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>28</td><td>Al Ettifaq</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>29</td><td>Leeds United</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>30</td><td>Leicester City</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>31</td><td>Southampton</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                    <tr><td>32</td><td>Norwich City</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td><span class="badge bg-secondary">PRE</span></td></tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <p class="text-muted small mb-2">Season kicks off in <strong>3 days</strong> • 186 matches • 1 champion </p>
        </div>
    </div>
</section>

   <!-- FIXTURES SECTION -->
<section id="fixtures" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="section-title text-center mb-5 text-warning">MATCHDAY 1 • NOV 2–3, 2025</h2>
        
        <div class="row g-4">
            <div class="col-lg-10 mx-auto">

                <!-- GAME 1 -->
                <div class="fixture-card bg-gradient border-warning shadow-lg">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-warning">Chelsea</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-warning text-dark fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 2 • 15:00 GMT</p>
                            <span class="badge bg-danger live-pulse" id="countdown1">LIVE IN 2D 18H</span>
                            <p><b>Stamford Bridge</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-info">Man City</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 2 -->
                <div class="fixture-card bg-gradient">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-danger">PSG</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-light text-dark fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 2 • 17:30 CET</p>
                            <p><b>Parc des Princes</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-light">Juventus</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 3 -->
                <div class="fixture-card bg-gradient">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-primary">Inter Milan</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-primary text-white fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 3 • 14:00 CET</p>
                            <p><b>San siro</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-info">Napoli</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 4 -->
                <div class="fixture-card bg-gradient">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-warning">Al Nassr</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-warning text-dark fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 3 • 18:00 AST</p>
                            <p><b>Mrsool Park</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-primary">RC Strasbourg</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 5 -->
                <div class="fixture-card bg-gradient border-danger">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-danger">Arsenal</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-danger text-white fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 2 • 12:30 GMT</p>
                            <p><b>Emirates Stadium</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-danger">Liverpool</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 6 -->
                <div class="fixture-card bg-gradient">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-danger">Man United</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-danger fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 2 • 17:30 GMT</p>
                            <p><b>Old Trafford</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-light">Tottenham</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 7 -->
                <div class="fixture-card bg-gradient">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-light">Newcastle</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-light text-dark fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 3 • 15:00 GMT</p>
                            <p><b>St james park</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-light">Real Madrid</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 8 -->
                <div class="fixture-card bg-gradient">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-primary">Barcelona</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-primary fs-6">MD1</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 3 • 21:00 CET</p>
                            <p><b>Camp Nou</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-danger">Atlético</h5>
                        </div>
                    </div>
                </div>

                <!-- GAME 9–16 (Quick-fire) -->
                <div class="fixture-card bg-gradient"><div class="d-flex justify-content-between align-items-center p-3">
                    <div class="text-center flex-fill"><h5 class="mt-2 text-success">Real Betis</h5></div>
                    <div class="text-center px-4"><p class="mb-0 badge bg-success fs-6">MD1</p><p class="vs display-6">VS</p><p class="text-info">Nov 2 • 20:00</p><p><b>Betis Stadium</b></p></div>
                    <div class="text-center flex-fill"><h5 class="mt-2 text-danger">Athletic Club</h5></div>
                </div></div>

                <div class="fixture-card bg-gradient"><div class="d-flex justify-content-between align-items-center p-3">
                    <div class="text-center flex-fill"><h5 class="mt-2 text-danger">AC Milan</h5></div>
                    <div class="text-center px-4"><p class="mb-0 badge bg-danger fs-6">MD1</p><p class="vs display-6">VS</p><p class="text-info">Nov 3 • 19:45</p><p><b>San Siro</b></p></div>
                    <div class="text-center flex-fill"><h5 class="mt-2 text-warning">Roma</h5></div>
                </div></div>

                <div class="fixture-card bg-gradient"><div class="d-flex justify-content-between align-items-center p-3">
                    <div class="text-center flex-fill"><h5 class="mt-2 text-info">Atalanta</h5></div>
                    <div class="text-center px-4"><p class="mb-0 badge bg-info fs-6">MD1</p><p class="vs display-6">VS</p><p class="text-info">Nov 2 • 17:00</p><p><b>Atalanta Stadium</b></p></div>
                    <div class="text-center flex-fill"><h5 class="mt-2 text-info">Lazio</h5></div>
                </div></div>

                <div class="fixture-card bg-gradient"><div class="d-flex justify-content-between align-items-center p-3">
                    <div class="text-center flex-fill"><h5 class="mt-2 text-purple">Fiorentina</h5></div>
                    <div class="text-center px-4"><p class="mb-0 badge bg-secondary fs-6">MD1</p><p class="vs display-6">VS</p><p class="text-info">Nov 3 • 12:00</p><p><b>Retina Stadium</b></p></div>
                    <div class="text-center flex-fill"><h5 class="mt-2 text-primary">Al Hilal</h5></div>
                </div></div>

                <div class="fixture-card bg-gradient"><div class="d-flex justify-content-between align-items-center p-3">
                    <div class="text-center flex-fill"><h5 class="mt-2 text-warning">Al Ittihad</h5></div>
                    <div class="text-center px-4"><p class="mb-0 badge bg-warning fs-6">MD1</p><p class="vs display-6">VS</p><p class="text-info">Nov 3 • 20:00</p><p><b>Oama Stadium</b></p></div>
                    <div class="text-center flex-fill"><h5 class="mt-2 text-success">Al Ahli</h5></div>
                </div></div>

                <div class="fixture-card bg-gradient"><div class="d-flex justify-content-between align-items-center p-3">
                    <div class="text-center flex-fill"><h5 class="mt-2 text-light">Al Shabab</h5></div>
                    <div class="text-center px-4"><p class="mb-0 badge bg-dark fs-6">MD1</p><p class="vs display-6">VS</p><p class="text-info">Nov 2 • 19:00</p><p><b>Shabbab Arena</b></p></div>
                    <div class="text-center flex-fill"><h5 class="mt-2 text-danger">Al Ettifaq</h5></div>
                </div></div>

                <div class="fixture-card bg-gradient"><div class="d-flex justify-content-between align-items-center p-3">
                    <div class="text-center flex-fill"><h5 class="mt-2 text-light">Leeds</h5></div>
                    <div class="text-center px-4"><p class="mb-0 badge bg-secondary fs-6">MD1</p><p class="vs display-6">VS</p><p class="text-info">Nov 3 • 13:30</p><p><b>Vardey Stadium</b></p></div>
                    <div class="text-center flex-fill"><h5 class="mt-2 text-primary">Leicester</h5></div>
                </div></div>

                <div class="fixture-card bg-gradient border-success">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-danger">Southampton</h5>
                        </div>
                        <div class="text-center px-4">
                            <p class="mb-0 badge bg-success text-white fs-6">FEATURED</p>
                            <p class="vs display-6 fw-bold">VS</p>
                            <p class="text-info fw-bold">Nov 3 • 16:00 GMT</p>
                            <p><b>St' mary Stadium</b></p>
                        </div>
                        <div class="text-center flex-fill">
                            <h5 class="mt-2 text-success">Norwich City</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- STAR PLAYERS SECTION -->
<section id="players" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="section-title text-center mb-5 text-warning fw-bold display-5">
            PLAYERS TO WATCH OUT FOR
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- 1. CRISTIANO RONALDO -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-warning"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/Cristiano_Ronaldo_playing_for_Al_Nassr_FC_against_Persepolis\,_September_2023_\(cropped\).jpg') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-warning mb-1">Cristiano Ronaldo</h5>
                        <p class="mb-2 fs-5">Al Nassr <span class="text-white">#7</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-warning text-dark">950 Goals</span>
                            <span class="stats-badge bg-gold">5× Ballon d'Or</span>
                            <span class="stats-badge bg-danger">Siuuu!</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. ERLING HAALAND -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-info"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/halland.jpg') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-info mb-1">Erling Haaland</h5>
                        <p class="mb-2 fs-5">Man City <span class="text-white">#9</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-info text-dark">Goal Machine</span>
                            <span class="stats-badge bg-cyan text-dark">Robot</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. LAMINE YAMAL -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-primary"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/Lamine\ Yamal.JPG') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-primary mb-1">Lamine Yamal</h5>
                        <p class="mb-2 fs-5">Barcelona <span class="text-white">#10</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-primary text-white">New Messi</span>
                            <span class="stats-badge bg-gold text-dark">Mr Confidence</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. KYLIAN MBAPPÉ -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-light"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/kylian-mbappe.webp') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-light mb-1">Kylian Mbappé</h5>
                        <p class="mb-2 fs-5">Real Madrid <span class="text-warning">#9</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-light text-dark">Scores Every Game</span>
                            <span class="stats-badge bg-danger text-white">Madrid Savior</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. MOHAMED SALAH -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-danger"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/salah.webp') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-danger mb-1">Mohamed Salah</h5>
                        <p class="mb-2 fs-5">Liverpool <span class="text-white">#11</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-danger text-white">200+ LFC Goals</span>
                            <span class="stats-badge bg-warning text-dark">Egyptian King</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. JULIÁN ÁLVAREZ -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-danger"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/Alvarez.png') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-danger mb-1">Julián Álvarez</h5>
                        <p class="mb-2 fs-5">Atlético <span class="text-white">#19</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-danger text-white">Underrated Baller</span>
                            <span class="stats-badge bg-info text-dark">Finisher</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7. CHRISTIAN PULISIC -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-danger"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/pulisic.webp') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-danger mb-1">Christian Pulisic</h5>
                        <p class="mb-2 fs-5">AC Milan <span class="text-white">#11</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-danger text-white">Captain America</span>
                            <span class="stats-badge bg-gold text-dark">Serie A Star</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 8. KENAN YILDIZ -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-light"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/Yildiz.webp') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-light mb-1">Kenan Yıldız</h5>
                        <p class="mb-2 fs-5">Juventus <span class="text-white">#10</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-light text-dark">19yo Maestro</span>
                            <span class="stats-badge bg-info text-dark">Turkish Messi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 9. ANTHONY (BETIS) -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-success"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/Anthony.jpg') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-success mb-1">Anthony</h5>
                        <p class="mb-2 fs-5">Real Betis <span class="text-white">#20</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-success text-white">Betis Star</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 10. COLE PALMER -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-primary"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/cole\ palmer.avif') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-primary mb-1">Cole Palmer</h5>
                        <p class="mb-2 fs-5">Chelsea <span class="text-white">#20</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-primary text-white">Cold Palmer</span>
                            <span class="stats-badge bg-gold text-dark">StarBoy</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 11. OUSMANE DEMBÉLÉ -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="player-card position-relative overflow-hidden rounded-3 shadow-lg border border-danger"
                     style="height: 380px; background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.9)), url('images/Dembele.webp') center/cover no-repeat;">
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-center">
                        <h5 class="fw-bold text-danger mb-1">Ousmane Dembélé</h5>
                        <p class="mb-2 fs-5">PSG <span class="text-white">#10</span></p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="stats-badge bg-danger text-white">2024 Ballon d'Or</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Button -->
        <div class="text-center mt-5">
            <a href="#teams" class="btn btn-outline-warning btn-lg px-5 fw-bold">
                SEE ALL 32 SQUADS
            </a>
        </div>
    </div>
</section>

    <!-- Quiz Button -->
    <button class="quiz-btn" data-bs-toggle="modal" data-bs-target="#quizModal">
        <span>?</span>
    </button>

    <!-- Scroll to Top -->
    <button class="scroll-top" id="scrollTop">
        <span>↑</span>
    </button>

    <!-- Team Modals -->
    <!-- CHELSEA – MODAL 1 -->
    <div class="modal fade" id="teamModal1" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-warning fw-bold">Chelsea FC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/0033A0/FFFFFF?text=STAMFORD+BRIDGE+NIGHT" alt="Stamford Bridge" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> Stamford Bridge (40,341)</li>
                    <li><strong>Manager:</strong> Enzo Maresca</li>
                    <li><strong>Big Wins:</strong> 6 Premier Leagues, 2 Champions Leagues</li>
                    <li><strong>Star:</strong> Cole Palmer</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-warning text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    Imagine a pub in 1905. A group of friends decide, “Let’s start a football team!” That’s Chelsea.  
                    For 99 years they were good, but never the best. Then, in 2003, a Russian billionaire named Roman bought the club and said, “I want trophies.”  
                    Money + genius managers = magic. In 2005 they won the league for the first time in 50 years.  
                    In 2012, against all odds, they beat Bayern Munich in their own stadium to win the Champions League.  
                    In 2021 they did it again in Portugal.  
                    Today Chelsea is the club that turns teenagers into superstars (think Palmer, 22 years old, already England’s hero).  
                    Blue is the colour, winning is the game.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- MAN CITY – MODAL 2 -->
        <div class="modal fade" id="teamModal2" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-info fw-bold">Manchester City</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/6CABDD/FFFFFF?text=ETIHAD+BLUE+MOON" alt="Etihad" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> Etihad (53,400)</li>
                    <li><strong>Manager:</strong> Pep Guardiola</li>
                    <li><strong>Big Wins:</strong> 10 Premier Leagues, 1 Champions League</li>
                    <li><strong>Star:</strong> Erling Haaland</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-info mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    Picture a rainy Manchester afternoon in 2008. City were the “noisy neighbours” of mighty United.  
                    Then a prince from Abu Dhabi arrived with a chequebook the size of a bus.  
                    Overnight, City went from mid-table to super-club.  
                    They hired Pep Guardiola — the coach who makes football look like ballet.  
                    Result? 4 league titles in a row (nobody else has done that).  
                    In 2023 they won the Treble: Premier League, FA Cup, Champions League — same as United in 1999.  
                    Haaland scores goals like he’s playing FIFA on easy mode.  
                    City play in sky blue, pass the ball 800 times, and make defenders dizzy.  
                    Love them or hate them, you can’t stop watching.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- JUVENTUS – MODAL 3 -->
        <div class="modal fade" id="teamModal3" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-light fw-bold">Juventus</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/000000/FFFFFF?text=ALLIANZ+STRIPES" alt="Allianz" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> Allianz (41,507)</li>
                    <li><strong>Manager:</strong> Thiago Motta</li>
                    <li><strong>Big Wins:</strong> 36 Italian titles, 2 Champions Leagues</li>
                    <li><strong>Star:</strong> Dušan Vlahović</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-light text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    Juventus is Italy’s New York Yankees — black-and-white stripes, 36 league titles, everyone else plays catch-up.  
                    Started in 1897 by teenagers on a park bench.  
                    The Agnelli family (they own Ferrari) took over in 1923 and turned Juve into a dynasty.  
                    From 2012 to 2020 they won the league NINE years in a row — imagine your team never losing the title for a decade.  
                    Nicknamed “The Old Lady” because they’re classy and unbeatable.  
                    They’ve had legends: Platini, Del Piero, Buffon, Ronaldo.  
                    Even when they got sent to the second division in 2006 (a cheating scandal), they came straight back and won again.  
                    Turin is black-and-white; the rest of Italy just borrows the colours.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- INTER MILAN – MODAL 4 -->
        <div class="modal fade" id="teamModal4" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-primary fw-bold">Inter Milan</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/03152A/FFFFFF?text=SAN+SIRO+NIGHT" alt="San Siro" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> San Siro (75,923)</li>
                    <li><strong>Manager:</strong> Simone Inzaghi</li>
                    <li><strong>Big Wins:</strong> 20 Italian titles, 3 Champions Leagues</li>
                    <li><strong>Star:</strong> Lautaro Martínez</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-primary mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    1908: AC Milan said “no foreigners allowed.” 44 artists and poets walked out and shouted, “Then we’ll make our own club!” That’s Inter.  
                    Nicknamed Nerazzurri (Black & Blues) and famous for the snake on their badge.  
                    In 2010 José Mourinho turned them into monsters: they won the league, cup, AND Champions League — the only Italian team to win all three in one year.  
                    They share the San Siro with Milan — same stadium, different soul.  
                    Inter fans light blue flares that look like the Milky Way.  
                    Lautaro scores, Hakan Çalhanoğlu curls free-kicks, and every derby feels like the city stops breathing.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- NAPOLI – MODAL 5 -->
        <div class="modal fade" id="teamModal5" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-info fw-bold">Napoli</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/0033A0/FFFFFF?text=MARADONA+MURAL" alt="Maradona" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> Diego Armando Maradona (54,726)</li>
                    <li><strong>Manager:</strong> Antonio Conte</li>
                    <li><strong>Big Wins:</strong> 3 Italian titles</li>
                    <li><strong>Star:</strong> Victor Osimhen</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-info mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    Naples is loud, chaotic, and in love with football.  
                    In 1984 they signed a short, chubby Argentine called Diego Maradona.  
                    He danced past defenders, scored with his HAND (the “Hand of God”), and gave Naples its first-ever titles in 1987 and 1990.  
                    The city built shrines; they still kiss his murals.  
                    33 years later, in 2023, Napoli won the league again.  
                    Grown men cried in the streets, scooters honked for days, and the stadium was renamed after Diego.  
                    Osimhen wears the mask, Kvaratskhelia dribbles like a dream, and every match feels like a street party.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- PSG – MODAL 6 -->
        <div class="modal fade" id="teamModal6" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-danger fw-bold">Paris Saint-Germain</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/004170/FFFFFF?text=PARC+DES+PRINCES" alt="Parc des Princes" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> Parc des Princes (47,929)</li>
                    <li><strong>Manager:</strong> Luis Enrique</li>
                    <li><strong>Big Wins:</strong> 12 French titles</li>
                    <li><strong>Star:</strong> Kylian Mbappé</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    Paris wanted a superstar club. In 2011 Qatar said, “We’ll build one.”  
                    They bought Neymar for €222 million (more than a skyscraper) and brought Messi over for coffee.  
                    Result: 12 league titles in 13 years.  
                    The problem? The Champions League keeps slipping away.  But eventually, after the Messi,Mbappe,Neymar era
                    With the help of Dembele who won the balon'd'or, they won their first ever champions legue.  
                    Every home game the ultras light red flares and sing until the Eiffel Tower shakes.  
                    PSG is fashion, fame, and frustration rolled into one glittery package.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- STRASBOURG – MODAL 7 -->
        <div class="modal fade" id="teamModal7" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-primary fw-bold">RC Strasbourg</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/0033A0/FFFFFF?text=MEINAU+SUNSET" alt="Meinau" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> Stade de la Meinau (26,280)</li>
                    <li><strong>Manager:</strong> Patrick Vieira</li>
                    <li><strong>Big Wins:</strong> 1 French title (1979)</li>
                    <li><strong>Star:</strong> Habib Diallo</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-primary mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    Strasbourg sits right on the German border — one day the city was French, next day German, then French again.  
                    The club was born in 1906 and speaks both languages.  
                    In 1979, against all odds, they won the French league.  
                    The Meinau stadium sings in Alsatian dialect and gives goosebumps to visitors.  
                    In 2023 Chelsea’s owners called Blue'co bought them. now little Strasbourg trains and play with future youngstar.   
                    Think of them as the plucky underdog who shares the big boys’ toys.
                    And now, they are competing in european competition. And competing to win the french league like they did in 1979.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- AL NASSR – MODAL 8 -->
        <div class="modal fade" id="teamModal8" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-warning fw-bold">Al Nassr FC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/FCD116/000000?text=MRsool+PARK+FIRE" alt="Mrsool Park" class="w-100 rounded mb-4">
                <div class="row g-4">
                <div class="col-md-5">
                    <ul class="list-unstyled small lh-lg">
                    <li><strong>Stadium:</strong> Mrsool Park (25,000)</li>
                    <li><strong>Manager:</strong> Luís Castro</li>
                    <li><strong>Big Wins:</strong> 9 Saudi titles, 2 Asian Champions Leagues</li>
                    <li><strong>Star:</strong> Cristiano Ronaldo</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <span class="badge bg-warning text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                    <p class="small lh-lg">
                    1955: two brothers in Riyadh kicked a ball and said, “Let’s make a club.”  
                    Fast-forward to 2022: Cristiano Ronaldo, the most famous footballer ever, signs at 37 years old.  
                    Suddenly the world tunes in to Saudi nights.  
                    Yellow flares, drumbeats, and 25,000 fans chanting “Siuuu!”  
                    Ronaldo scores hat-tricks for fun, joao felix silky skills and the stadium roof lifts off.  
                    Al Nassr used to be local heroes; now they’re global superstars winning 80% of their matches. 
                    They might win it all soon.infact, they will win it all soon 
                    Welcome to the new epicentre of football.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- ARSENAL – MODAL 9 -->
<div class="modal fade" id="teamModal9" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">Arsenal FC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/DC143C/FFFFFF?text=EMIRATES+NORTH+BANK" alt="Emirates" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Emirates (60,704)</li>
                            <li><strong>Manager:</strong> Mikel Arteta</li>
                            <li><strong>Big Wins:</strong> 13 Leagues, Invincibles 2004</li>
                            <li><strong>Star:</strong> Bukayo Saka</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        2004: Arsenal played 38 games, won 26, drew 12, LOST ZERO.  
                        Thierry Henry glided, Vieira tackled, Bergkamp flicked.  
                        They were called “The Invincibles”.  
                        Fast-forward 20 years: Saka (born 2002) dribbles like Henry, Rice bosses midfield, and the Emirates sings “North London Forever”.  
                        Arteta is building something special in north london,Red cannons fire when they score.  
                        They beat chelsea's lampard to win the 2020 Fa Cup and City's in 2022 to win the community sheild
                        Arsenal isn’t just a club — it’s a religion in red and white. their mentality is topnotch.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LIVERPOOL – MODAL 10 -->
<div class="modal fade" id="teamModal10" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">Liverpool FC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/C8102E/FFFFFF?text=ANFIELD+YOU'LL+NEVER+WALK" alt="Anfield" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Anfield (61,000)</li>
                            <li><strong>Manager:</strong> Arne Slot</li>
                            <li><strong>Big Wins:</strong> 19 Leagues, 6 UCL</li>
                            <li><strong>Star:</strong> Mohamed Salah</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        70,000 voices sing “You’ll Never Walk Alone” and the whole stadium shakes.  
                        2019: Liverpool were 7 points behind City with 10 games left.  
                        They won 9, drew 1, and lifted the Premier League for the first time in 30 years. 
                        won the champions league, the Supercup, intercontinental cup, they won the treble. 
                        Salah runs so fast that the opponent can’t keep up.  
                        Klopp turned doubters into believers. Arne Slot took over, became the PL champion Again.
                        They are one of the most feared and respected football team right now.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MAN UNITED – MODAL 11 -->
<div class="modal fade" id="teamModal11" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">Manchester United</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/DA020E/FFFFFF?text=OLD+TRAFFORD+THEATRE" alt="Old Trafford" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Old Trafford (74,310)</li>
                            <li><strong>Manager:</strong> Ruben Amorim</li>
                            <li><strong>Big Wins:</strong> 20 Leagues, 3 UCL</li>
                            <li><strong>Star:</strong> Bruno Fernandes</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg"> 
                        Sir Matt Busby rebuilt the team and won the European Cup 10 years later — tears in his eyes. 
                        After what they've been through, 
                        1999: 90+3 minutes, two goals, treble.  
                        Sir Alex Ferguson turned boys into legends. His legacy is never forgotten.
                        Mounrinho Came to the club, won the europa league
                        Today the Stretford End still roars “20 times”.  
                        United is drama, glory, and never giving up.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TOTTENHAM – MODAL 12 -->
<div class="modal fade" id="teamModal12" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-light text-dark">
                <h4 class="modal-title fw-bold">Tottenham Hotspur</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/132257/FFFFFF?text=SPURS+NEW+STADIUM" alt="Tottenham" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Tottenham Hotspur (62,850)</li>
                            <li><strong>Manager:</strong> Ange Postecoglou</li>
                            <li><strong>Big Wins:</strong> 2 Leagues, 8 FA Cups</li>
                            <li><strong>Star:</strong> Son Heung-min</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-light text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        Motto: “To Dare Is To Do”.  
                        First English team to win a European trophy in 1961 
                        Son,Dele alli, erikson, Kane scored 30 goals a season,Pochettino played rock-and-roll football, almost won the league. 
                        The new stadium has a 17,500-seat single-tier stand — loudest in Europe.
                        They won, the europa league 2024/2025 session. thanks to ange postetogleu.   
                        Now, Thomas frank has taken over.
                        Spursy? Maybe. But when they attack, the world stops.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NEWCASTLE – MODAL 13 -->
<div class="modal fade" id="teamModal13" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-light text-dark">
                <h4 class="modal-title fw-bold">Newcastle United</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/000000/FFFFFF?text=ST+JAMES+PARK" alt="St James" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> St. James’ Park (52,305)</li>
                            <li><strong>Manager:</strong> Eddie Howe</li>
                            <li><strong>Big Wins:</strong> 4 Leagues, 6 FA Cups</li>
                            <li><strong>Star:</strong> Alexander Isak</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-light text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        2021: Saudi billions arrived.  
                        The Toon Army painted the city black and white. Got Eddie Howe has the new manager.
                        Last year, they won thier first trophy in 52 years, they are now in europe
                        competing for the champions league, they are going into the right direction.   
                        52,000 sing “Local Hero” until the stadium shakes.   
                        Geordie passion + mega money = fairy tale.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- REAL MADRID – MODAL 14 -->
<div class="modal fade" id="teamModal14" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-light text-dark">
                <h4 class="modal-title fw-bold">Real Madrid</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/FFFFFF/0033A0?text=BERNABEU+GALACTICOS" alt="Bernabeu" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Santiago Bernabéu (81,044)</li>
                            <li><strong>Manager:</strong> Carlo Ancelotti</li>
                            <li><strong>Big Wins:</strong> 15 UCL, 36 LaLiga</li>
                            <li><strong>Star:</strong> Vinícius Jr.</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-light text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                         15 Champions Leagues.  
                         Start with the numbers that silence every debate: 15 Champions Leagues—more than twice as many as anyone else. 
                         Five in a row in the 1950s with the magical Di Stéfano. Another three-peat with Zidane the player, then Zidane the coach.
                         Cristiano Ronaldo arrived and turned the Bernabéu into his personal goal factory, leaving with 450 strikes and four more European Cups.
                         Now Vinícius, Bellingham, Rodrygo, and Mbappé are writing the next chapter.
                         Madrid don’t do rebuilds; they reload. They don’t accept transition seasons; they demand trophies. 
                          Galácticos, legends, kids from the academy—everyone who pulls on that famous white shirt knows the standard: win, entertain, and never settle.
                          Becoming a Madridista means joining the biggest, proudest family in football.
                          From every corner of the planet, you’ll find someone ready to tell you why Real Madrid are kings.So if you want glory that never stops, stars that shine brightest, and a love story that lasts a lifetime—welcome home.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BARCELONA – MODAL 15 -->
<div class="modal fade" id="teamModal15" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-primary text-white">
                <h4 class="modal-title fw-bold">FC Barcelona</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/004D98/FFFFFF?text=CAMP+NOU+MÉS+QUE+UN+CLUB" alt="Camp Nou" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Spotify Camp Nou (99,354)</li>
                            <li><strong>Manager:</strong> Hansi Flick</li>
                            <li><strong>Big Wins:</strong> 27 LaLiga, 5 UCL</li>
                            <li><strong>Star:</strong> Lamine Yamal (17!)</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-primary mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                         Barça became Catalonia’s beating heart, a symbol of pride in a land that refused to bow. 
                         “Més que un club”—more than a club—wasn’t marketing; it was survival.Under Franco’s dictatorship, when speaking Catalan was forbidden, 
                         Camp Nou roared in a language the regime couldn’t silence.This is the club that turned tragedy into legend: Cruyff’s revolution in the ’70s, Dream Team glory in ’92 with the first European Cup at Wembley,
                         and then Messi—an Argentinian kid from La Masia polished into the greatest ever—leading the impossible 2009 sextuple and that 6-1 remontada against PSG that still gives goosebumps.
                           Every era has its anthem:
                          Kubala’s magic in the ’50s, Guardiola’s tiki-taka poetry, Xavi-Iniesta-Busi magic, and now a new golden generation rising with Yamal, Gavi, and Pedri.
                          Four Champions Leagues, 27 La Ligas, countless nights when 99,000 souls in Camp Nou made the earth shake.Barcelona doesn’t just play football. It fights for identity, beauty, and defiance. 
                          If you want a love story that hurts as much as it thrills, if you’re ready to cry at a Cant del Barça and scream “Visca Barça” till your voice breaks—welcome home, culé. This fire has been burning for 125 years.
                         Come feel it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ATLÉTICO MADRID – MODAL 16 -->
<div class="modal fade" id="teamModal16" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">Atlético Madrid</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/CB3522/FFFFFF?text=CÍVITAS+METROPOLITANO" alt="Metropolitano" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Cívitas Metropolitano (70,460)</li>
                            <li><strong>Manager:</strong> Diego Simeone</li>
                            <li><strong>Big Wins:</strong> 11 LaLiga, 3 Europa</li>
                            <li><strong>Star:</strong> Antoine Griezmann</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                         This isn’t a club. It’s a war cry wearing red-and-white stripes.
                          Founded in 1903 by Basque students dreaming of rebellion, Atlético became Madrid’s other voice — the one that fights, bites, scratches, and never ever surrenders.
                          Eleven La Ligas, three Europa Leagues, but the real trophies are carved in blood: 2014 league title stolen from the giants on the final day, 2013 Copa del Rey won at the Bernabéu, 
                           two heartbreaking Champions League finals lost in the cruelest fashion. Then came Simeone — a madman in a black suit screaming “¡A muerte!” — and suddenly the Metropolitano became a fortress where giants fall.
                           Oblak defies physics, Griezmann dances through chaos, Koke bleeds for the shield. This is the club that turned suffering into an art form, that made 1-0 feel like poetry. 
                           If you want polite football, go elsewhere. If you want to feel your heart explode every time the whistle blows, if you’re ready to scream “¡Aúpa Atleti!” until your throat burns — welcome to the religion of never giving up.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- REAL BETIS – MODAL 17 -->
<div class="modal fade" id="teamModal17" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-success text-white">
                <h4 class="modal-title fw-bold">Real Betis</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/00913B/FFFFFF?text=BENITO+VILLAMARÍN" alt="Villamarín" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Benito Villamarín (60,720)</li>
                            <li><strong>Manager:</strong> Manuel Pellegrini</li>
                            <li><strong>Big Wins:</strong> 1 LaLiga, 3 Copas</li>
                            <li><strong>Star:</strong> Anthony</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-success mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                         In a city painted red and white, Betis chose green — the color of hope, of Andalusian soul, of never of money. 
                         Born 1907, crowned LaLiga champions in 1935 (the only “small” club ever to do it), three Copas del Rey, one Europa League quarter-final run that felt like winning the universe.
                         Benito Villamarín shakes when 60,000 béticos throw their green scarves to the sky and sing until sunrise. Joaquín cried when he lifted the 2022 Copa del Rey in Seville against Valencia — the whole city cried with him.
                          Anthony’s left foot, Isco silky skills the eternal “¡Manquepierda!” attitude. 
                         Betis isn’t about titles; it’s about feeling alive. It’s sun on your face, cold beer, and believing that tomorrow will be beautiful even when today hurts. If you want plastic perfection, look away. If you want a love affair that will break your heart and heal it in the same match, come to Heliópolis.
                         Forever green, forever yours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ATHLETIC CLUB – MODAL 18 -->
<div class="modal fade" id="teamModal18" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">Athletic Club</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/EE2B38/FFFFFF?text=SAN+MAMÉS+ROAR" alt="San Mamés" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> San Mamés (53,331)</li>
                            <li><strong>Manager:</strong> Ernesto Valverde</li>
                            <li><strong>Big Wins:</strong> 8 LaLiga, 24 Copas</li>
                            <li><strong>Star:</strong> Nico Williams</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        One rule. 126 years unbroken.
                         Only Basque blood roars in San Mamés. Eight La Ligas, 24 Copas del Rey — more Spanish Cups than anyone — yet the greatest trophy is the policy itself: 
                         pride over money, identity over glory. From Telmo Zarra’s 251 goals to the Williams brothers flying today, every lion has roots in Euskal Herria. 2024:
                         After 40 years without silverware, they beat Mallorca in the Copa final. 1.5 million flooded Bilbao’s streets, the river turned red and white,
                         the city shut down for a week of pure joy. San Mamés isn’t a stadium; it’s a cathedral where 53,000 voices make the earth tremble. No billionaires, no mercenaries — just boys from the quarry who would die for the shield. If you think football is business, stay away.
                          If you want to fall in love with purity, with tradition that refuses to bend, with a roar that shakes your soul — come home to the lions. Aupa Athletic, forever.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AC MILAN – MODAL 19 -->
<div class="modal fade" id="teamModal19" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">AC Milan</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/000000/FFFFFF?text=SAN+SIRO+RED+BLACK" alt="San Siro" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> San Siro (75,923)</li>
                            <li><strong>Manager:</strong> Sérgio Conceição</li>
                            <li><strong>Big Wins:</strong> 19 Leagues, 7 UCL</li>
                            <li><strong>Star:</strong> Rafael Leão</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        Seven Champions Leagues — only Real Madrid has more.
                         Nineteen Scudetti. San Siro painted red and black since 1899. From the Gre-No-Li Swedish gods to Sacchi’s revolution, from the invincible 1989 team that destroyed Steaua 4-0 to Kaka’s magical 2007 night against Manchester United.
                          Berlusconi’s money helped, but the soul was always there: Maldini’s elegance, Van Basten’s genius, Shevchenko’s ice-cold finishing, Ibrahimović’s arrogance. 
                          Bankruptcy almost killed them, yet 2022 saw Leão sprint the entire pitch and Milan crowned champions again after 11 years of pain. 
                          Now Pulisic, Modric, Maignan carry the flame. When the Curva Sud lights red flares and sings “Allegri’s on fire,” the whole world stops. Milan isn’t a club
                          — it’s fashion, passion, history, glory. It’s the Diavolo that seduces you, breaks you, then makes you champion of Europe again. If you’re ready to wear the devil with pride, Forza Milan forever.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ROMA – MODAL 20 -->
<div class="modal fade" id="teamModal20" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-warning text-dark">
                <h4 class="modal-title fw-bold">AS Roma</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/F0C330/000000?text=OLIMPICO+CURVA+SUD" alt="Olimpico" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Stadio Olimpico (70,634)</li>
                            <li><strong>Manager:</strong> Daniele De Rossi</li>
                            <li><strong>Big Wins:</strong> 3 Leagues, 2022 Europa Conference</li>
                            <li><strong>Star:</strong> Paulo Dybala</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-warning text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                          Rome has only one true love, and her name is Roma.
                          Founded 1927 to give the capital a people’s club, three Scudetti, nine Copas, but the real treasure is 2022 — Mourinho’s tears in Tirana after winning the Conference League,
                          the first European trophy in 61 years. Olimpico becomes hell: yellow-red flares, 70,000 voices singing “Grazie Roma” until the sky cries. Totti’s entire life in one chip against Inter, De Rossi bleeding for the shirt,
                           Dybala’s mask celebration, Pellegrini’s captain armband. From Falcao’s magic to Salah’s speed, every legend left a piece of heart in the Curva Sud. Roma isn’t about winning everything; it’s about loving like madmen,
                           suffering beautifully, celebrating like the world ends tomorrow. If you can handle a love that hurts as much as it heals, if you’re ready to scream “Forza Roma sempre” even when we lose
                            — this city, this shirt, this madness is yours forever.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ATALANTA – MODAL 21 -->
<div class="modal fade" id="teamModal21" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-info text-white">
                <h4 class="modal-title fw-bold">Atalanta BC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/004B8D/FFFFFF?text=GEWISS+GOALS" alt="Gewiss" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Gewiss Stadium (21,300)</li>
                            <li><strong>Manager:</strong> Gian Piero Gasperini</li>
                            <li><strong>Big Wins:</strong> 1 Coppa, 2024 Europa League</li>
                            <li><strong>Star:</strong> Teun Koopmeiners</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-info mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        Tiny Bergamo, giant dreams. No oil money, no superstars — just Gasperini’s insane courage and a youth system that produces miracles. 
                        One Coppa Italia (1963), but 2024 delivered immortality: 3-0 against invincible Leverkusen in Dublin, Europa League in the bag, Lookman hat-trick, Bergamo partying for a month.
                         Before that, four straight Champions League qualifications, quarter-final against PSG, constant 70-80-90-goal seasons. La Dea attacks like no one else: Zapata bullets, Koopmeiners rockets, Scamacca headers,
                         blue-black arrows raining down. Gewiss Stadium only holds 21,000, but it feels like 100,000 when they sing the anthem. Atalanta is proof that money doesn’t win — 
                         ideas do, heart does, courage does. If you love underdogs who punch galaxies above their weight, 
                         who play football like it’s art and war at the same time, come to Bergamo. The Goddess is calling.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LAZIO – MODAL 22 -->
<div class="modal fade" id="teamModal22" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-info text-white">
                <h4 class="modal-title fw-bold">SS Lazio</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/87D8F7/000000?text=OLIMPICO+EAGLES" alt="Olimpico" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Stadio Olimpico (70,634)</li>
                            <li><strong>Manager:</strong> Marco Baroni</li>
                            <li><strong>Big Wins:</strong> 2 Leagues, 7 Copas</li>
                            <li><strong>Star:</strong> Ciro Immobile</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-info mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                          Sky-blue since 1900,
                          the eagle Olympia has flown over Rome for 124 years. Two Scudetti (1974 fairy tale and 2000 last-day miracle), seven Copas, one Cup Winners’ Cup, one UEFA Super Cup.
                          But Lazio is more than silverware: it’s the eagle landing on the pitch before kick-off, it’s 70,000 lighting white-and-light-blue flares, it’s Nesta-Simeone-Nedvěd-Verón destroying Europe, 
                          it’s Immobile becoming Capocannoniere at 34. From the darkness of -points to the ecstasy of crushing rivals in the Derby della Capitale. 
                          Curva Nord never stops, even in storms. 
                          Lazio is pride, rebellion, elegance, and fury in one breath. 
                          If you want a club that flies high and fights dirty when needed, if you’re ready to scream “Sò già du ore che t’aspettamo” before every derby — come wear the aquila on your heart.
                           Forza Lazio sempre.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIORENTINA – MODAL 23 -->
<div class="modal fade" id="teamModal23" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-secondary text-white">
                <h4 class="modal-title fw-bold">ACF Fiorentina</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/4E2685/FFFFFF?text=ARTEMIO+FRANCHI" alt="Franchi" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Artemio Franchi (43,147)</li>
                            <li><strong>Manager:</strong> Raffaele Palladino</li>
                            <li><strong>Big Wins:</strong> 2 Leagues, 6 Copas</li>
                            <li><strong>Star:</strong> Nicolás González</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-secondary mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                         Purple is the color of royalty and heartbreak. Born 1926,
                         reborn from bankruptcy in 2002, Fiorentina has two Scudetti, six Copas, one Cup Winners’ Cup, and a soul that never dies. Batistuta’s thunder, Rui Costa’s magic,
                          Antognoni’s loyalty, Chiesa’s speed — every era had a god in viola. 2023 and 2024 Conference League finals lost in the final minutes — tears in Prague and Athens,
                           yet the fans sang louder. Artemio Franchi turns violet when 40,000 light flares and cry “Viola per sempre.” 
                          This isn’t a team; it’s a religion of beauty and suffering. Florence doesn’t just watch football — it lives it, breathes it,
                           dies and resurrects every Sunday. If you’re ready to fall madly in love with a club that plays like artists and fights like gladiators,
                           if purple runs in your blood now — welcome to the Viola family.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AL HILAL – MODAL 24 -->
<div class="modal fade" id="teamModal24" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-primary text-white">
                <h4 class="modal-title fw-bold">Al Hilal SFC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/004B8D/FFFFFF?text=KINGDOM+ARENA" alt="Kingdom" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Kingdom Arena (26,000)</li>
                            <li><strong>Manager:</strong> Jorge Jesus</li>
                            <li><strong>Big Wins:</strong> 19 Leagues, 4 Asian CL</li>
                            <li><strong>Star:</strong> Neymar</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-primary mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                         Asia’s Galácticos. Four AFC Champions Leagues, 19 Saudi leagues, 66-game unbeaten world record. From Kingdom Arena’s blue ocean, Neymar dazzles, Mitrović heads bullets,
                          Bono saves worlds. 2019, 2021, 2022, 2023 — they kept conquering Asia while Europe watched in shock. Jesus’ men play like samba mixed with desert storm. Riyadh turns into carnival when Hilal scores:
                          blue flares, drums, 26,000 screaming “Al Zaeem!” This is the club that made the impossible normal, that brought the world’s biggest names to prove the Saudi League belongs among giants. 
                          If you want to support royalty that actually wins, 
                         if you love attacking madness and global domination — bow to the Kings in blue.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AL ITTIHAD – MODAL 25 -->
<div class="modal fade" id="teamModal25" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-warning text-dark">
                <h4 class="modal-title fw-bold">Al Ittihad</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/FFD700/000000?text=KING+ABDULLAH" alt="King Abdullah" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> King Abdullah (62,345)</li>
                            <li><strong>Manager:</strong> Laurent Blanc</li>
                            <li><strong>Big Wins:</strong> 9 Leagues, 1 Asian CL</li>
                            <li><strong>Star:</strong> Karim Benzema</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-warning text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        The Tigers of Jeddah. Nine Saudi leagues, one AFC Champions League 2004 & 2005 back-to-back — the first Arab club to reach Club World Cup quarter-finals.
                         Benzema (Ballon d’Or winner) now leads the yellow-black pride,
                         Kanté tackles like 2018 again, Fabinho dictates. King Abdullah Stadium roars when 62,000 wave tiger flags. 
                         From Hamzah Idris’ goals to modern superstars, 
                         Ittihad is Western Saudi’s beating heart. If you want a historic giant reborn with world-class fire, 
                        come roar with the Tigers. Ittihad is the one because they won the 2025 kings cup.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AL AHLI – MODAL 26 -->
<div class="modal fade" id="teamModal26" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-success text-white">
                <h4 class="modal-title fw-bold">Al Ahli SFC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/006633/FFFFFF?text=KING+ABDULLAH" alt="Jeddah" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> King Abdullah Sports City</li>
                            <li><strong>Manager:</strong> Matthias Jaissle</li>
                            <li><strong>Big Wins:</strong> 9 Leagues</li>
                            <li><strong>Star:</strong> Riyad Mahrez</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-success mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        The Royal Club. Jeddah’s green soul. Nine leagues, 13 King’s Cups, most successful club in Saudi history until the new era.
                         Mahrez curves, Firmino smiles, Saint-Maximin flies, Ivana goals rain.
                         40,000 chant “Ahli Ahli” like prayer. 
                        Relegated in 2022, promoted as champions 2023, now hunting the throne again. 
                        Green is class, green is history, green is coming back to rule.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AL SHABAB – MODAL 27 -->
<div class="modal fade" id="teamModal27" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-light text-dark">
                <h4 class="modal-title fw-bold">Al Shabab FC</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/FFFFFF/000000?text=AL+SHABAB+WHITE" alt="Shabab" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Al Shabab Club Stadium</li>
                            <li><strong>Manager:</strong> Vítor Pereira</li>
                            <li><strong>Big Wins:</strong> 6 Leagues</li>
                            <li><strong>Star:</strong> Yannick Carrasco</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-light text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        The White Lion never sleeps.  
                        Carrasco crosses, Banega curls.  
                        Riyadh’s original giant.
                        The White Lion. Riyadh’s original powerhouse. Six leagues, Asian Cup Winners’ Cup. Banega still curls magic, Carrasco crosses rockets. 
                        Elegant white shirts, ferocious heart. 
                        Shabab never follows — it leads.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AL ETTIFAQ – MODAL 28 -->
<div class="modal fade" id="teamModal28" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">Al Ettifaq</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/CC0000/FFFFFF?text=ETTI+KNIGHTS" alt="Dammam" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Al Ettifaq Club Stadium</li>
                            <li><strong>Manager:</strong> Steven Gerrard</li>
                            <li><strong>Big Wins:</strong> 2 Leagues</li>
                            <li><strong>Star:</strong> Demarai Gray</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        The Knights of Dammam. Gerrard in the dugout, Henderson passing, Gray sprinting.
                        They also never stop fighting, in 2024, they went all in to buy star players in europe
                        Now they are one of the most feared team in Saudi pro league.
                        Won Saudi cups many times and proved they are not meant to be undarrated. 
                        Red fire rising in the East. 
                        Small history, giant ambition.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LEEDS UNITED – MODAL 29 -->
<div class="modal fade" id="teamModal29" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-light text-dark">
                <h4 class="modal-title fw-bold">Leeds United</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/FFFFFF/000000?text=ELLAND+ROAD" alt="Elland Road" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Elland Road (37,645)</li>
                            <li><strong>Manager:</strong> Daniel Farke</li>
                            <li><strong>Big Wins:</strong> 3 Leagues</li>
                            <li><strong>Star:</strong> Crysencio Summerville</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-light text-dark mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                       “Marching on Together” since 1919. Three English titles, European finals, Bielsa’s beautiful madness, 
                       2020 promotion after 16 years pain. and they never stop fighting to stay in the premeier league
                        Elland Road white sea, never silent. Produces the likes of Raphinha who is now one of barca most important player
                        Also Tyler Adams who is now one of the best Defensive midfeider in the premeier league.
                        Won championship many times.
                       Pure Yorkshire passion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LEICESTER – MODAL 30 -->
<div class="modal fade" id="teamModal30" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-primary text-white">
                <h4 class="modal-title fw-bold">Leicester City</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/0033A0/FFFFFF?text=KING+POWER+MIRACLE" alt="King Power" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> King Power (32,262)</li>
                            <li><strong>Manager:</strong> Steve Cooper</li>
                            <li><strong>Big Wins:</strong> 1 Premier League 2016</li>
                            <li><strong>Star:</strong> Jamie Vardy</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-primary mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        2016: 5000-1 odds.    
                        Leicester City — greatest fairy tale ever.
                        5000-1. Greatest sporting miracle ever.
                       2015-16 Premier League winners against all odds. 
                       Vardy party, Ranieri’s pizza, Kante engines, Mahrez magic. Fairy tale written in blue.
                       Always a top club, will always be, there have been ups and down, but their fighting spirit,
                       Is what will make them be where they deserve to be.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SOUTHAMPTON – MODAL 31 -->
<div class="modal fade" id="teamModal31" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h4 class="modal-title fw-bold">Southampton</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/ED1A3B/FFFFFF?text=ST+MARYS" alt="St Mary's" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> St. Mary’s (32,384)</li>
                            <li><strong>Manager:</strong> Russell Martin</li>
                            <li><strong>Big Wins:</strong> 1976 FA Cup</li>
                            <li><strong>Star:</strong> Adam Armstrong</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-danger mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        1976: beat Man United as second-division side.  
                        Saints march in — red-white pride. Won many championschip cup, came to the premeir league to disturb the giants
                        They never gives up, always up to the task, always fighting for one or two,
                        Created stars like boufal, wardprowse, etc, big teams struggles against them. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NORWICH – MODAL 32 -->
<div class="modal fade" id="teamModal32" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-success text-white">
                <h4 class="modal-title fw-bold">Norwich City</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2">
                <img src="https://via.placeholder.com/800x400/00A14B/FFFFFF?text=CARROW+ROAD" alt="Carrow Road" class="w-100 rounded mb-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        <ul class="list-unstyled small lh-lg">
                            <li><strong>Stadium:</strong> Carrow Road (27,359)</li>
                            <li><strong>Manager:</strong> Johannes Hoff Thorup</li>
                            <li><strong>Big Wins:</strong> 2 League Cups</li>
                            <li><strong>Star:</strong> Josh Sargent</li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <span class="badge bg-success mb-3 fs-6">YOUR 2-MINUTE STORY</span>
                        <p class="small lh-lg">
                        Is a dominated side in English football
                        Competed with the likes of Man united, Newcastle, and those in the premeir league
                        Got relegated, but never gave up, Got relegated again, but never gave un
                        Pukki a finland international scores many goals for them
                        Now Norwich city is fighting and going back to where they belong
                        “On the Ball, City” — world’s oldest football song. Green-yellow joy, yo-yo passion, Carrow Road love that never fades.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Quiz Modal with 20 Questions -->
<div class="modal fade" id="quizModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-dark text-white border-warning">
            <div class="modal-header bg-warning text-dark border-0">
                <h3 class="modal-title fw-bold">SUPER LEAGUE QUIZ CHALLENGE</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body py-4">
                <div id="quizContainer">

                    <!-- QUESTION 1 -->
                    <div class="quiz-question mb-5" data-question="1">
                        <h5 class="text-warning">1. Which club has won the most Champions League titles in the Super League?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">PSG</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Juventus</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Real Madrid</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">AC Milan</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 2 -->
                    <div class="quiz-question mb-5 d-none" data-question="2">
                        <h5 class="text-info">2. Who is Al Nassr's legendary #7?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Neymar</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Cristiano Ronaldo</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Benzema</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Mane</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 3 -->
                    <div class="quiz-question mb-5 d-none" data-question="3">
                        <h5 class="text-danger">3. Which 17-year-old wonderkid plays for Barcelona?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Pedri</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Lamine Yamal</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Gavi</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Fati</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 4 -->
                    <div class="quiz-question mb-5 d-none" data-question="4">
                        <h5 class="text-primary">4. What is Manchester City's nickname?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">The Red Devils</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">The Citizens</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">The Blues</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">The Sky Blues</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 5 -->
                    <div class="quiz-question mb-5 d-none" data-question="5">
                        <h5 class="text-success">5. Which club is known as “The Old Lady”?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Inter</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Juventus</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Napoli</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Roma</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 6 -->
                    <div class="quiz-question mb-5 d-none" data-question="6">
                        <h5 class="text-warning">6. Who won the 2024 Ballon d'Or?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Haaland</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Ousmane Dembélé</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Vinícius</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Rodri</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 7 -->
                    <div class="quiz-question mb-5 d-none" data-question="7">
                        <h5 class="text-danger">7. Which stadium hosts the Madrid Derby?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Camp Nou</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Santiago Bernabéu</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Wanda Metropolitano</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Both B & C</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 8 -->
                    <div class="quiz-question mb-5 d-none" data-question="8">
                        <h5 class="text-info">8. How many Saudi clubs are in the Super League?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">3</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">6</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">8</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">10</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 9 -->
                    <div class="quiz-question mb-5 d-none" data-question="9">
                        <h5 class="text-primary">9. Who wears #11 at Liverpool?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Darwin Núñez</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Mohamed Salah</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Luis Díaz</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Cody Gakpo</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 10 -->
                    <div class="quiz-question mb-5 d-none" data-question="10">
                        <h5 class="text-light">10. Which club plays at St. James’ Park?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Sunderland</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Newcastle United</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Middlesbrough</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Leeds</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 11 -->
                    <div class="quiz-question mb-5 d-none" data-question="11">
                        <h5 class="text-danger">11. Who is Atlético Madrid’s all-time top scorer?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Diego Costa</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Antoine Griezmann</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Fernando Torres</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Falcao</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 12 -->
                    <div class="quiz-question mb-5 d-none" data-question="12">
                        <h5 class="text-success">12. Which club only signs Basque players?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Real Sociedad</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Athletic Club</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Osasuna</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Eibar</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 13 -->
                    <div class="quiz-question mb-5 d-none" data-question="13">
                        <h5 class="text-warning">13. Who is AC Milan’s “Captain America”?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Weston McKennie</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Christian Pulisic</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Yunus Musah</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Tim Weah</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 14 -->
                    <div class="quiz-question mb-5 d-none" data-question="14">
                        <h5 class="text-info">14. Which stadium was renamed after Diego Maradona?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">San Paolo</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Diego Armando Maradona Stadium</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">San Siro</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Olimpico</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 15 -->
                    <div class="quiz-question mb-5 d-none" data-question="15">
                        <h5 class="text-primary">15. Who is Juventus’ 19-year-old Turkish star?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Arda Güler</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Kenan Yıldız</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Hakan Çalhanoğlu</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Cengiz Ünder</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 16 -->
                    <div class="quiz-question mb-5 d-none" data-question="16">
                        <h5 class="text-danger">16. Which Super League team won the 2016 Premier League at 5000-1 odds?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Southampton</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Leicester City</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Norwich</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Leeds</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 17 -->
                    <div class="quiz-question mb-5 d-none" data-question="17">
                        <h5 class="text-light">17. What is Al Hilal’s nickname?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">The Tigers</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">The Blue Waves</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">The Royals</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">The Leaders</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 18 -->
                    <div class="quiz-question mb-5 d-none" data-question="18">
                        <h5 class="text-warning">18. Which player is called “Cold Palmer”?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Mason Mount</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Cole Palmer</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Reece James</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Enzo Fernández</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 19 -->
                    <div class="quiz-question mb-5 d-none" data-question="19">
                        <h5 class="text-success">19. Which club has a live eagle fly before kick-off?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Benfica</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">Lazio</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Crystal Palace</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">Ajax</button></div>
                        </div>
                    </div>

                    <!-- QUESTION 20 -->
                    <div class="quiz-question mb-5 d-none" data-question="20">
                        <h5 class="text-danger">20. How many teams are in the Super League?</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><button class="option-btn" data-correct="false">20</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">24</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="false">28</button></div>
                            <div class="col-md-6"><button class="option-btn" data-correct="true">32</button></div>
                        </div>
                    </div>

                </div>

                <!-- RESULT SCREEN -->
                <div id="quizResult" class="text-center d-none">
                    <h2 id="resultTitle" class="display-4 fw-bold text-warning"></h2>
                    <p id="scoreText" class="lead"></p>
                    <div class="my-4">
                        <h4 id="funFact" class="text-info"></h4>
                    </div>
                    <button class="btn btn-warning btn-lg px-5" id="restartQuiz">PLAY AGAIN</button>
                </div>
            </div>

            <div class="modal-footer bg-black">
                <button class="btn btn-outline-light" id="prevQuestion">Previous</button>
                <button class="btn btn-warning" id="nextQuestion">Next</button>
                <div class="ms-auto text-white">
                    <span id="questionCounter" class="fs-5">Question 1 of 20</span>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-warning">Super League</h5>
                    <p class="small text-primary">The ultimate football competition featuring the world's elite clubs.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="small text-primary">&copy; 2025 Super League. All rights reserved.</p>
                    <p class="small text-primary"><b>Developed By Rasheed Samuel Gbenga</b></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script>
let currentQuestion = 1;
let score = 0;
const totalQuestions = 20;

// Tiny CSS to make inline feedback look perfect
const style = document.createElement('style');
style.innerHTML = `
    .feedback-inline {
        display: inline-block;
        font-weight: bold;
        font-size: 1.1em;
        margin-left: 12px;
        min-width: 80px;
    }
    @media (max-width: 480px) {
        .feedback-inline { font-size: 1em; margin-left: 8px; }
    }
`;
document.head.appendChild(style);

// Show question by number
function showQuestion(n) {
    document.querySelectorAll('.quiz-question').forEach(q => q.classList.add('d-none'));
    const question = document.querySelector(`.quiz-question[data-question="${n}"]`);
    if (question) question.classList.remove('d-none');
    document.getElementById('questionCounter').innerText = `Question ${n} of ${totalQuestions}`;
    document.getElementById('prevQuestion').disabled = n === 1;
    document.getElementById('nextQuestion').innerText = n === totalQuestions ? 'FINISH' : 'Next';
}

// Handle answer click
document.querySelectorAll('.option-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const questionDiv = this.closest('.quiz-question');
        const wasAnswered = questionDiv.classList.contains('answered');
        if (wasAnswered) return;
        questionDiv.classList.add('answered');

        // Disable all buttons
        questionDiv.querySelectorAll('.option-btn').forEach(b => {
            b.disabled = true;
            b.style.pointerEvents = 'none';
            b.style.opacity = '0.8';
        });

        const isCorrect = this.getAttribute('data-correct') === 'true';

        if (isCorrect) {
            this.classList.add('btn-success');
            score++;
        } else {
            this.classList.add('btn-danger');
            questionDiv.querySelector('[data-correct="true"]').classList.add('btn-success');
        }

        // Remove any previous feedback
        questionDiv.querySelectorAll('.feedback-inline').forEach(el => el.remove());

        // Create feedback right after the clicked button
        const feedback = document.createElement('span');
        feedback.className = 'feedback-inline';
        feedback.textContent = isCorrect ? 'Correct!' : 'Wrong!';
        feedback.style.color = isCorrect ? '#28a745' : '#dc3545';

        // Insert directly after the button (outside the box, inline)
        this.insertAdjacentElement('afterend', feedback);
    });
});

// Navigation
document.getElementById('nextQuestion').addEventListener('click', () => {
    if (currentQuestion < totalQuestions) {
        currentQuestion++;
        showQuestion(currentQuestion);
    } else {
        endQuiz();
    }
});

document.getElementById('prevQuestion').addEventListener('click', () => {
    if (currentQuestion > 1) {
        currentQuestion--;
        showQuestion(currentQuestion);
    }
});

// Restart Quiz
document.getElementById('restartQuiz').addEventListener('click', () => {
    score = 0;
    currentQuestion = 1;
    document.querySelectorAll('.quiz-question').forEach(q => {
        q.classList.remove('answered');
        q.querySelectorAll('.option-btn').forEach(b => {
            b.classList.remove('btn-success', 'btn-danger');
            b.disabled = false;
            b.style.pointerEvents = 'auto';
            b.style.opacity = '1';
        });
        q.querySelectorAll('.feedback-inline').forEach(el => el.remove());
    });
    document.getElementById('quizContainer').classList.remove('d-none');
    document.getElementById('quizResult').classList.add('d-none');
    showQuestion(1);
});

// End Quiz
function endQuiz() {
    document.getElementById('quizContainer').classList.add('d-none');
    document.getElementById('quizResult').classList.remove('d-none');
    document.getElementById('scoreText').innerText = `You scored ${score}/${totalQuestions}!`;

    const titles = {
        20: "GOAT STATUS UNLOCKED!",
        18: "CHAMPION!",
        15: "SUPER FAN!",
        10: "FUTURE LEGEND!",
        5:  "KEEP WATCHING GAMES!",
        0:  "TIME TO BINGE YOUTUBE!"
    };

    let title = "NICE TRY!";
    for (let threshold in titles) {
        if (score >= threshold) {
            title = titles[threshold];
            break;
        }
    }

    document.getElementById('resultTitle').innerText = title;

    const facts = [
        "Ronaldo just sent you a signed jersey!",
        "Haaland wants your boots!",
        "Yamal is calling you 'Big Bro'!",
        "Even the refs are clapping!",
        "You're officially in the Super League Hall of Fame!"
    ];
    document.getElementById('funFact').innerText = facts[Math.min(Math.floor(score / 4), 4)];
}

// Initialize
showQuestion(1);
</script>
</body>
</html>