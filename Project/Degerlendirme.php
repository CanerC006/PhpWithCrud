<?php include("veritabanı.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stajPuanlama</title>
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="stajPuanlama.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div id="stajPuanlama">
    <svg style="width:inherit;height:inherit;overflow:visible;">
        <rect fill="url(#background_cj_pattern)" width="100%" height="100%"></rect>
        <pattern elementId="background_cj" id="background_cj_pattern" x="0" y="0" width="100%" height="100%">
            <image x="0" y="0" width="100%" height="100%" href="background_cj_pattern.png"
                   xlink:href="background_cj_pattern.png"></image>
        </pattern>
        <img id="background" src="background.png" srcset="background.png 1x">
    </svg>
    <div id="loggedPerson">
        <span>Giriş Yapan Kullanıcı:</span>
        <?php

        if ($_SESSION['id'] >= 50) {
            if ($_SESSION['id'] == 50) {
                echo "Öğr. Gör. Dr. Muhammet Yorulmaz";
            } else if ($_SESSION['id'] == 2) {
                echo "Dr. Öğr. Gör. Ahmet Turgut Tuncer";
            } else if ($_SESSION['id'] == 3) {
                echo "Öğr. Gör. Emre Öner Tartan";
            }
        }

        if (@$_GET) {
            @$s1 = $_GET['s1'];
            @$s2 = $_GET['s2'];
            @$s3 = $_GET['s3'];
            @$s4 = $_GET['s4'];
            @$s5 = $_GET['s5'];
            @$s6 = $_GET['s6'];
            @$s7 = $_GET['s7'];
            @$s8 = $_GET['s8'];
            @$s9 = $_GET['s9'];
            @$s10 = $_GET['s10'];
            @$s11 = $_GET['s11'];
            @$s12 = $_GET['s12'];
            @$s13 = $_GET['s13'];
            @$s14 = $_GET['s14'];
            @$s15 = $_GET['s15'];
            @$s16 = $_GET['s16'];
            @$s17 = $_GET['s17'];
            @$s18 = $_GET['s18'];
            @$s19 = $_GET['s19'];
            @$s20 = $_GET['s20'];
            @$toplam = $s1 + $s2 + $s3 + $s4 + $s5 + $s6 + $s7 + $s8 + $s9 + $s10 + $s11 + $s12 + $s13 + $s14 + $s15 + $s16 + $s17 + $s18 + $s19 + $s20;
            if ($toplam < 51) {
                ?>
                <h3 class="sonuc" style="margin-top: 825px;margin-left: 250px;">Başarısız Öğrenci : <?php echo $toplam; ?> </h3><br>
            <?php } else { ?>
                <h3 class="sonuc" style="margin-top: 825px; margin-left: 250px;">Başarılı Öğrenci : <?php echo $toplam; ?> </h3><br>
            <?php }
        }


        ?>
    </div>


    <form action="" method="get">
        <div id="form">
            <svg class="calculatingBG">
                <rect id="calculatingBG" rx="55" ry="55" x="0" y="0" width="1208" height="773">
                </rect>
            </svg>
            <div id="question20">
                <div id="question20Text">
                    <span>Soru 20:</span>
                </div>
                <input type="text" name="s20" class="question20Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question20Input">
                    <rect id="question20Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question19">
                <div id="question19Text">
                    <span>Soru 18:</span>
                </div>
                <input type="text" name="s18" class="question18Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question19Input">
                    <rect id="question19Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question18">
                <div id="question18Text">
                    <span>Soru 17:</span>
                </div>
                <input type="text" name="s17" class="question17Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question18Input">
                    <rect id="question18Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question17">
                <div id="question17Text">
                    <span>Soru 16:</span>
                </div>
                <input type="text" name="s16" class="question16Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question17Input">
                    <rect id="question17Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question16">
                <div id="question16Text">
                    <span>Soru 15:</span>
                </div>
                <input type="text" name="s15" class="question15Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question16Input">
                    <rect id="question16Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question15">
                <div id="question15Text">
                    <span>Soru 14:</span>
                </div>
                <input type="text" name="s14" class="question14Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question15Input">
                    <rect id="question15Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question14">
                <div id="question14Text">
                    <span>Soru 13:</span>
                    <input type="text" name="s13" class="question13Input"
                           style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                </div>
                <svg class="question14Input">
                    <rect id="question14Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question13">
                <div id="question13Text">
                    <span>Soru 12:</span>
                </div>
                <input type="text" name="s12" class="question12Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question13Input">
                    <rect id="question13Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question12">
                <div id="question12Text">
                    <span>Soru 11:</span>
                </div>
                <input type="text" name="s11" class="question11Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question12Input">
                    <rect id="question12Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question11">
                <div id="question11Text">
                    <span>Soru 10:</span>
                </div>
                <input type="text" name="s10" class="question10Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question11Input">
                    <rect id="question11Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question10">
                <div id="question10Text">
                    <span>Soru 9:</span>
                </div>
                <input type="text" name="s9" class="question9Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question10Input">
                    <rect id="question10Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question9">
                <div id="question9Text">
                    <span>Soru 19:</span>
                </div>
                <input type="text" name="s19" class="question19Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question9Input">
                    <rect id="question9Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question8">
                <div id="question8Text">
                    <span>Soru 8:</span>
                </div>
                <input type="text" name="s8" class="question8Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question8Input">
                    <rect id="question8Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question7">
                <div id="question7Text">
                    <span>Soru 7:</span>
                </div>
                <input type="text" name="s7" class="question7Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question7Input">
                    <rect id="question7Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question6">
                <div id="question6Text">
                    <span>Soru 6:</span>
                </div>
                <input type="text" name="s6" class="question6Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question6Input">
                    <rect id="question6Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question5">
                <div id="question5Text">
                    <span>Soru 5:</span>
                </div>
                <input type="text" name="s5" class="question5Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question5Input">
                    <rect id="question5Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question4">
                <div id="question4Text">
                    <span>Soru 4:</span>
                </div>
                <input type="text" name="s4" class="question4Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question4Input">
                    <rect id="question4Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question3">
                <div id="question3Text">
                    <span>Soru 3:</span>
                </div>
                <input type="text" name="s3" class="question3Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question3Input">
                    <rect id="question3Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question2">
                <div id="question2Text">
                    <span>Soru 2:</span>
                </div>
                <input type="text" name="s2" class="question2Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question2Input">
                    <rect id="question2Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="question1">
                <div id="question1Text">
                    <span>Soru 1:</span>
                </div>
                <input type="text" name="s1" class="question1Input"
                       style="z-index: 1; border-radius: 30px; padding-left: 15px;">
                <svg class="question1Input">
                    <rect id="question1Input" rx="17.5" ry="17.5" x="0" y="0" width="433" height="35">
                    </rect>
                </svg>
            </div>
            <div id="surname">
                <div id="surnameText">
                    <span>Soyadı:</span>
                </div>
                <input class="surnameInput" style="z-index: 1; padding-left: 15px;border-radius: 30px;" type="text"
                       value="<?php echo $_SESSION['OgrSoyad']; ?>">
                <svg class="surnameInput">
                    <rect id="surnameInput" rx="17.5" ry="17.5" x="0" y="0" width="281" height="35">
                    </rect>
                </svg>
            </div>
            <div id="name">
                <div id="nameText">
                    <span>Adı:</span>
                </div>
                <input class="nameInput" style="z-index: 1; padding-left: 15px;border-radius: 30px;" type="text"
                       value="<?php echo $_SESSION['OgrAd']; ?>">
                <svg class="nameInput">
                    <rect id="nameInput" rx="17.5" ry="17.5" x="0" y="0" width="281" height="35">
                    </rect>
                </svg>
            </div>
            <div id="signOutButton">
                <button type="submit" style="cursor:pointer; background-color: transparent;">
                    <svg class="signOutBackground">
                        <rect id="signOutBackground" rx="29.5" ry="29.5" x="0" y="0" width="234" height="59">
                        </rect>
                    </svg>
                    <div id="signOutText">
                        <span>Hesapla</span>
                    </div>
                </button>
            </div>
            <div id="signOutButton">
                <button type="submit" style="cursor:pointer; background-color: transparent;" name="Hesapla"
                        value="Hesapla">
                    <svg class="signOutBackground">
                        <rect id="signOutBackground" rx="29.5" ry="29.5" x="0" y="0" width="234" height="59">
                        </rect>
                    </svg>
                    <div id="signOutText">
                        <span>Hesapla</span>
                    </div>
            </div>
    </form>
</div>
</body>
</html>