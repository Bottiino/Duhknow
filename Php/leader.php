<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../Src/Css/style.css">
        <style>

            
            section{
                display: block;
                margin: 3rem auto;
                width: 50%;
                font-family: monospace;
                color: #555;
            }
            .title{
                text-align: center;
                padding: 2rem;

            }
            table{
                width: 100%;

                thead{
                    background-color: #e4e4e4;
                }

                td{
                    padding: 15px;
                }

                tbody {
                    display:block;
                    max-height:160px;
                    overflow-y: auto;

                }

                tbody{
                    td{
                        border-bottom: 1px solid #eaeaea;
                    }
                }

                thead, tbody tr {
                    display:table;
                    width:100%;
                    table-layout:fixed;

                }
            } 

            .leadercontent{
                color: white;
                text-align: center;
                display: block;
                background-color:#a29bfe;
                width: 80%;
                max-height: 80%;
                position: relative;

                margin: auto;
                margin-top: 5%;
                margin-bottom: 5%;
                padding: 3%;
              
            }
            .heads
            {
                background-color: #6c5ce7;
            }

        </style>
    </head>
    <body>


        <div class="leadercontent">


            <h1 class="title">Leader-Boards</h1>
            <table>
                <thead>
                    <tr class="heads">
                        <td>User-Name</td>
                        <td>Scores</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="" >Adrain</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td><img src="" >Sean</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td><img src="" >Aoife</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td><img src="" >Michael</td>
                        <td>40</td>
                    </tr>

                </tbody>
            </table>
        </div>



        <div class="bnavbar">
            <div class="navbutt">
                <a href="mainMenu.php" id="home">Home</a>
                <a href="profile.php">Profile</a>
                <a href="dict.php">Dict</a>
                <a href="leader.php">Leader</a>
           
            </div>
        </div>
    </body>
</html>
