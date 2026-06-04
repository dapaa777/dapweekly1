<!DOCTYPE html>
<html>
<head>
    <title>DAPPZ</title>
    <style>
        body {
            margin: 0;
            text-align: center;
            font-family: sans-serif;
        }

        .foto-bg {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
        }

        h1 {
            color: white;
            text-shadow: 2px 2px 5px black;
        }

        .foto-profil {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #0b19af;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto; 
            display: block;
        }

        table {
            background-color: rgba(255, 255, 255, 0.8);
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
        }

        table td {
            border: 1px solid #ccc;
        }

        table a {
            text-decoration: none;
            color: #0b19af;
            font-weight: bold;
        }
    </style>

</head>
<body>

    <h1>- WEB PROJECT BY DAP -</h1>

    <img src="https://i.pinimg.com/736x/bd/00/76/bd0076e46f7f1344e9529a6be13d38a7.jpg" class="foto-bg">

    <table align="center" cellspacing="0" cellpadding="15">
        <tr>
            <td>
                <a href="index.html">Home</a>
            </td>
            <td>
                <a href="profile.html">Profile</a>
            </td>
            <td>
                <a href="contact.html">Contact</a>
            </td>
        </tr>
    </table>

    <img src="https://i.pinimg.com/736x/bf/df/5c/bfdf5c8b8f85f86366d95f78ef940b46.jpg" class="foto-profil">

</body>
</html>