<?php 
if (!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes') {
    echo '<script src="./assets/iklan/iklan.js"></script>';
}
require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <script>
            function histRender(){
                const history_buck = document.getElementById('history_buck');
                let template = ''
                if (localStorage.arrOfHyst !== null){
                    let histories = JSON.parse(localStorage.arrOfHyst)

                    histories = [...new Set(histories)]

                    histories.forEach(item => {
                        const hist = JSON.parse(localStorage.getItem(item))

                        template += `
                        <div style ="border:solid 1px gray; margin:2px">
                            <h5 style="margin:0; ">$(hist.judul)</h5>
                            <p style="margin:0; ">$(hist.judul)</p>
                        </div>
                        `
                    });

                    history_buck.innerHTML = template
                }
            }
            histRender()

            function addHist(el) {
            const id = el.getAttribute('data-id');
            const judul = el.getElementByClassName('card-head')[0].innerText
            const isi = el.getElementByClassName('card-body')[0].innerText

            const histItem = {
                id: id,
                judul: judul,
                isi: isi
            }
            if (localStorage.getItem('arrOfHyst') !== null ) {
                let histories = JSON.parse(localStorage.arrOfHyst)
                histories.push('hyst' + id)
                histories = [...new Set(histories)]

                localStorage.setItem('arrOfHyst', JSON.stringify(histories))
            } else {
                locakStorage.setItem('arrOfHyst', JSON.stringify(['hyst' + id]))
            }
            localStorage.setItem('hyst' + id, JSON.stringify(histItem))

            histRender()
        }
        </script>
    <style>
        .base {
            display: flex;

        }

        main {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            /* gap: 10px 10px; */

            width: 75%;

        }

        aside {
            width: 25%;
            background-color: #F0E9D2;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin: 10px;
            min-height: 235px;
            width: 90%;
            /* height: 200px; */
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        
        .card-body {
            overflow: hidden;
            line-height: 2rem;
            max-height: 8rem;
            -webkit-box-orient: vertical;
            display: block;
            display: -webkit-box;
            overflow: hidden !important;
            text-overflow: ellipsis;
            -webkit-line-clamp: 4;
            background-color: #E6DDC4;
        }

        .card-head {
            margin: 0;
            
            /* height: 75px; */
        }

        aside {
            min-height: 100%;
            border: solid 2px #181D31;
            padding: 10px;
            background-origin: content-box;
        }
    </style>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id']; ?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>
        <aside>
            <h2>History</h2>
            <div id="history_buck">

            </div>
        </aside>
    </section>
    
        
    <script src="./assets/iklan/iklan.js"></script>
</body>

</html>