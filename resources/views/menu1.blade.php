<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome To Sadena</title>

    <style>
        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
            color: #171717;
            line-height: 1.7;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            text-align: center;
            padding: 80px 20px 60px;
        }

        .badge {
            display: inline-block;
            padding: 7px 16px;
            margin-bottom: 20px;

            border: 1px solid #ddd;
            border-radius: 50px;

            background: white;
            color: #666;

            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .hero h1 {
            margin-bottom: 15px;

            font-size: 55px;
            line-height: 1.2;
            font-weight: 800;
        }

        .hero h1 span {
            color: #e91e63;
        }

        .subtitle {
            max-width: 600px;
            margin: auto;

            color: #666;
            font-size: 18px;
        }


        /* =========================
           MEMBER SECTION
        ========================= */

        .members {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }


        /* =========================
           CARD
        ========================= */

        .member-card {
            padding: 35px 30px;

            background: white;
            border: 1px solid #e5e5e5;
            border-radius: 20px;

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);

            transition: 0.3s ease;
        }

        .member-card:hover {
            transform: translateY(-8px);

            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }


        /* =========================
           NUMBER
        ========================= */

        .number {
            margin-bottom: 20px;

            color: #e91e63;

            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
        }


        /* =========================
           TITLE
        ========================= */

        .member-card h2 {
            margin-bottom: 18px;

            font-size: 24px;
            line-height: 1.3;
        }


        /* =========================
           DESCRIPTION
        ========================= */

        .member-card p {
            color: #666;
            font-size: 16px;
            text-align: justify;
        }


        /* =========================
           TAG
        ========================= */

        .tag {
            display: inline-block;

            margin-top: 25px;
            padding: 7px 12px;

            border-radius: 8px;

            background: #fff0f5;
            color: #e91e63;

            font-size: 12px;
            font-weight: bold;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            padding: 50px 0 30px;

            color: #888;
            font-size: 14px;
            text-align: center;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .members {
                grid-template-columns: 1fr;
                max-width: 650px;
                margin: auto;
            }

            .hero h1 {
                font-size: 45px;
            }
        }

        @media (max-width: 600px) {

            .container {
                width: 92%;
            }

            .hero {
                padding: 60px 10px 40px;
            }

            .hero h1 {
                font-size: 35px;
            }

            .subtitle {
                font-size: 16px;
            }

            .member-card {
                padding: 28px 22px;
            }

            .member-card h2 {
                font-size: 21px;
            }

            .member-card p {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <main class="container">

        <section class="hero">

            <div class="badge">
                OUR PROJECT
            </div>

            <h1>
                Welcome To <span>Sadena</span>
            </h1>

            <p class="subtitle">
                Get to know the people behind our project.
            </p>

        </section>


        <section class="members">

            <!-- Satria -->
            <article class="member-card">

                <div class="number">
                    01
                </div>

                <h2>
                    Satria Mika Narendra
                </h2>

                <p>
                    I am Satria Mika Narendra, a third-semester student
                    majoring in Informatics Engineering within the Information
                    Technology department at the State Polytechnic of Jember.
                    I have a strong interest in the world of programming,
                    particularly in web development—specifically full-stack
                    web development.
                </p>

                <div class="tag">
                    Full-Stack Web Development
                </div>

            </article>


            <!-- Dewi -->
            <article class="member-card">

                <div class="number">
                    02
                </div>

                <h2>
                    Dewi Wardah Sukmaningrum
                </h2>

                <p>
                    My name is Dewi Wardah Sukmaningrum. I really enjoy
                    watching movies; I’m not great at cooking, but I’m an
                    expert at ordering food via GoFood. I love swimming,
                    though not in crowded places. I have one sibling,
                    and I am the youngest.
                </p>

                <div class="tag">
                    Movies • Swimming • Food
                </div>

            </article>


            <!-- Naila -->
            <article class="member-card">

                <div class="number">
                    03
                </div>

                <h2>
                    Naila Ivena Maulidiyah
                </h2>

                <p>
                    Nama saya Naila Ivena Maulidiyah, saya mempunyai hobi
                    yaitu membaca novel terlebih novel online di sebuah
                    aplikasi yaitu Wattpad. Saya terkadang juga menonton
                    sebuah series. Saya sangat menyukai warna pink akan
                    tetapi barang yang saya miliki jarang ada yang berwarna
                    pink. Saya anak ke-2 dari 2 bersaudara.
                </p>

                <div class="tag">
                    Wattpad • Series • Pink
                </div>

            </article>

        </section>


        <footer>
            © 2026 Sadena Project
        </footer>

    </main>

</body>

</html>
