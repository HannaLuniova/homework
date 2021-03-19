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

            $data = file("poll.txt");
            $answer = $_POST["q1"];
            $data[$answer] = ($data[$answer] + 1) . "\n";


            $saveData = $data[0] . $data[1] . $data[2] . $data[3] . $data[4] . $data[5] . $data[6] . $data[7];
            $saveData2 = $data[0] + $data[1] + $data[2] + $data[3] + $data[4] + $data[5] + $data[6] + $data[7];

            $fp = fopen("poll.txt", "w+");
            fwrite($fp, $saveData);
            fclose($fp);

            echo '<p class="heading2">Результаты голосования</p>';
            ?>
         <table class="text">
             <tr>
                 <td>
                     <?php
                        echo '<p >Коньки - ' .  $data[0] . '</p>';
                        echo '<p >Лыжи - ' . $data[1] . '</p>';
                        echo '<p >Сноуборд - ' . $data[2] . '</p>';
                        echo '<p >Хоккей - ' . $data[3] . '</p>';
                        echo '<p >Катаюсь на санках с горки - ' . $data[4] . '</p>';
                        echo '<p >Леплю снеговиков - ' . $data[5] . '</p>';
                        echo '<p >Играю в снежки - ' . $data[6] . '</p>';
                        echo '<p >Только мандаринопоедание - ' . $data[7] . '</p>';

                        echo '<p class="text2"> Общее количество '  . $saveData2 . '</p>';

                        ?>
                 </td>
             </tr>
         </table>
     </div>
 </body>

 </html>