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
                display: block;
                background-color: #D980FA;

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
                    text-align: center;

                }
            } 


            .dictcontent{
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
            .dictcontent button
            {
                background-color: white;
                border: 0;
                padding: 10px 15px;
                color: white;
                background-color: #a29bfe;
                border-radius: 3px;
                width: 250px;
                cursor: pointer;
                font-size: 18px;
                position: relative;
             
            }
            .letter
            {
                float:left;
                
            }

        </style>
    </head>
    <body>
        <div class="dictcontent">


            <h1 class="title">Dictionary</h1>
            <h4 class="title">French</h4>
            <button class="switch" >Switch</button>
            <table>
                <thead>
                    <tr class="heads">
                        <td>French</td>
                        <td>English</td>
                    </tr>
                </thead>
                <tbody>
                <td class="letter">A</td>
                <tr>
                    <td>Aller</td>
                    <td>To go</td>
                </tr>
                <td class="letter">B</td>
                <tr>
                    <td>Buerre</td>
                    <td>Butter</td>
                </tr>
                <td class="letter">C</td>
                <tr>
                    <td>Canard</td>
                    <td>Duck</td>
                </tr>


                </tbody>
            </table>
        </div>



        <div class="bnavbar">
            <div class="navbutt">
                <a href="mainmenu.php" id="home">Home</a>
                <a href="profile.php">Profile</a>
                <a href="dict.php">Dict</a>
                <a href="leader.php">Leader</a>

            </div>
        </div>
    </body>
</html>
