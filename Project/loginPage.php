<?php include("veritabanı.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="loginPage.css"/>
</head>
<body>
<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_POST) {
    $loginPersonelId = $loginPersonelSifre = "";
    $loginPersonelId = $_POST['personel_select'];
    $loginPersonelSifre = $_POST['input_personel_sifre'];
    test_input($loginPersonelId);
    test_input($loginPersonelSifre);
    $queryPersonel = $vt->query('SELECT * FROM personeller_tbl WHERE Personel_ID="' . $loginPersonelId . '" AND Personel_Sifre="' . $loginPersonelSifre . '"');
    if (mysqli_num_rows($queryPersonel) == 1)
    {
        if ($loginPersonelId <= 10) {
            $_SESSION['id'] = $loginPersonelId;
            header("Refresh: 2; url=SekreterLogin.php");
            die('Giriş kontrolü yapılıyor lütfen bekleyiniz.');
        } elseif ($loginPersonelId >= 50) {
            $_SESSION['id'] = $loginPersonelId;
            header("Refresh: 2; url=AkademisyenLogin.php");
            die('Giriş kontrolü yapılıyor lütfen bekleyiniz.');
        }

    } else {
        if (empty($loginPersonelSifre))
        {
            die("Şifre Boş Bırakılamaz !");
        } else {
            echo "Hatalı şifre !";
        }
    }
}

?>
<form action="" method="post">

    <div id="login">
        <svg style="width:inherit;height:inherit;overflow:visible;">
            <rect fill="url(#loginBackground_x_pattern)" width="100%" height="100%"></rect>
            <pattern elementId="loginBackground_x" id="loginBackground_x_pattern" x="0" y="0" width="100%"
                     height="100%">
                <image x="0" y="0" width="100%" height="100%" href="loginBackground_x_pattern.png"
                       xlink:href="loginBackground_x_pattern.png"></image>
            </pattern>
            <img id="loginBackground" src="loginBackground.png"
                 srcset="loginBackground.png 1x, loginBackground@2x.png 2x">
        </svg>
        <div id="loginFormGroup">
            <svg class="secondFormBG">
                <rect id="secondFormBG" rx="55" ry="55" x="0" y="0" width="526" height="577">
                </rect>
            </svg>
            <div id="staffPw">
                <div id="staffPwText">
                    <span>Şifre:</span>
                </div>
                <input class="staffPwBg" type="password" name="input_personel_sifre">
            </div>
            <div id="staffDropDown">
                <div id="staffDdText">
                    <span>Personel:</span>
                </div>

                <select class="staffDdBackground" name="personel_select">
                    <?php
                    $perIsim = $perSoyisim = $perUunvan = "";
                    $queryPersonel = $vt->query('select * from personeller_tbl');
                    while ($satir = mysqli_fetch_assoc($queryPersonel)) {
                        $queryPersonelId = $satir['Personel_ID'];
                        $queryPersonelIsim = $satir['Personel_Isim'];
                        $queryPersonelSoyisim = $satir['Personel_Soyisim'];
                        $queryPersonelUnvan = $satir['Personel_Unvan'];
                        $queryPersonelSifre = $satir['Personel_Sifre'];
                        echo "<option value='$queryPersonelId'>$queryPersonelUnvan  $queryPersonelIsim  $queryPersonelSoyisim</option>";
                    }
                    ?>
                </select>
            </div>
            <svg class="loginIcon_r" viewBox="6 6 129.818 129.818">
                <linearGradient id="loginIcon_r" spreadMethod="pad" x1="0.5" x2="0.5" y1="0" y2="1">
                    <stop offset="0" stop-color="#6f23ff" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#05b2fc" stop-opacity="1"></stop>
                </linearGradient>
                <path id="loginIcon_r"
                      d="M 70.90885925292969 70.90885925292969 C 88.83992767333984 70.90885925292969 103.3632888793945 56.38550567626953 103.3632888793945 38.45442962646484 C 103.3632888793945 20.52335357666016 88.83992767333984 6 70.90885925292969 6 C 52.977783203125 6 38.45442962646484 20.52335357666016 38.45442962646484 38.45442962646484 C 38.45442962646484 56.38550567626953 52.977783203125 70.90885925292969 70.90885925292969 70.90885925292969 Z M 70.90885925292969 87.13607025146484 C 49.24552154541016 87.13607025146484 6 98.00830841064453 6 119.5904922485352 L 6 135.8177185058594 L 135.8177185058594 135.8177185058594 L 135.8177185058594 119.5904922485352 C 135.8177185058594 98.00830841064453 92.57219696044922 87.13607025146484 70.90885925292969 87.13607025146484 Z">
                </path>
            </svg>
            <div id="staffLoginText">
                <span>PERSONEL GİRİŞ</span>
            </div>
            <button style="background-color: transparent;" id="loginButton">
                <input type="submit" value="personel_sifre_gonder_submit"
                       style="z-index:1; opacity: 0; cursor: pointer;" class="loginBg">
                <svg class="loginBg">
                    <rect id="loginBg" rx="28" ry="28" x="0" y="0" width="251" height="56">
                    </rect>
                </svg>
                <div id="loginText">
                    <span>GİRİŞ YAP</span>
                </div>
                <svg class="loginButtonIcon" viewBox="0 0 21.561 18.866">
                    <path id="loginButtonIcon"
                          d="M 8.085361480712891 0 L 8.085361480712891 2.695120573043823 L 18.8658447265625 2.695120573043823 L 18.8658447265625 16.17072296142578 L 8.085361480712891 16.17072296142578 L 8.085361480712891 18.8658447265625 L 21.56096458435059 18.8658447265625 L 21.56096458435059 0 L 8.085361480712891 0 Z M 10.78048229217529 5.390241146087646 L 10.78048229217529 8.085361480712891 L 0 8.085361480712891 L 0 10.78048229217529 L 10.78048229217529 10.78048229217529 L 10.78048229217529 13.4756031036377 L 16.17072296142578 9.43292236328125 L 10.78048229217529 5.390241146087646 Z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</form>

</body>
</html>