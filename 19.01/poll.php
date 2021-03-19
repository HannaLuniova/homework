 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ОПРОС</title>
     <link rel="stylesheet" href="poll.css">

 </head>

 <body>
     <div class="head">

         <?php

            $data = explode(".", file_get_contents("poll.txt"));/* строку разбили на подстроки */

            $data[$_POST["q1"]]++;
            // $sum = array_sum($data);

            file_put_contents("poll.txt", implode(".", $data));

            echo '<p class="heading2">Результаты голосования</p>';

            ?>
         <table class="text">
             <tr>
                 <td>
                     <?php
                        echo '<p >Коньки - ' . round($data[0] * 100 / array_sum($data), 2) . '%</p>';
                        echo '<p >Лыжи - ' . round($data[1] * 100 / array_sum($data), 2) . '%</p>';
                        echo '<p >Сноуборд - ' . round($data[2] * 100 / array_sum($data), 2) . '%</p>';
                        echo '<p >Хоккей - ' . round($data[3] * 100 / array_sum($data), 2) . '%</p>';
                        echo '<p >Катаюсь на санках с горки - ' . round($data[4] * 100 / array_sum($data), 2) . '%</p>';
                        echo '<p >Леплю снеговиков - ' . round($data[5] * 100 / array_sum($data), 2) . '%</p>';
                        echo '<p >Играю в снежки - ' . round($data[6] * 100 / array_sum($data), 2) . '%</p>';
                        echo '<p >Только мандаринопоедание - ' . round($data[7] * 100 / array_sum($data), 2) . '%</p>';

                        echo '<p class="text2"> Общее количество '  . array_sum($data) . '</p>';

                        ?>
                 </td>
             </tr>
         </table>
     </div>
 </body>

 </html>