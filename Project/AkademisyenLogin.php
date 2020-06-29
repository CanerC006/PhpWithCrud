<?php include("veritabanı.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stajDegerlendirme</title>
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="stajDegerlendirme.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<form>
    <div id="stajDegerlendirme">
        <svg style="width:inherit;height:inherit;overflow:visible;">
            <rect fill="url(#background_cw_pattern)" width="100%" height="100%"></rect>
            <pattern elementId="background_cw" id="background_cw_pattern" x="0" y="0" width="100%" height="100%">
                <image x="0" y="0" width="100%" height="100%" href="background_cw_pattern.png"
                       xlink:href="background_cw_pattern.png"></image>
            </pattern>
            <img id="background" src="background.png" srcset="background.png 1x">
        </svg>
        <div id="Group_1">
            <div id="loggedPerson">
                Giriş Yapan Kullanıcı :
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
                function test_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                if ($_GET and $_GET['ogr_bilgileri_submit'] == "Öğrenci Çağır") {
                    $Post_Method_OgrNo = intval($_GET['input_ogr_nosu']);
                    if (@$_GET['ogr_bilgileri_submit'] == "Öğrenci Çağır") {
                        $read_ogr_bilgi_Query = $vt->query("select * from tbl_ogrenciler where OgrNo = " . $Post_Method_OgrNo);
                        while ($satir = $read_ogr_bilgi_Query->fetch_assoc()) {

                            // Database'den gelen veriler !
                            @$readQueryOgrNosu = $satir['OgrNo'];
                            @$readQueryOgrTcNosu = $satir['OgrTcNo'];
                            @$readQueryOgrAdi = $satir['OgrAd'];
                            @$readQueryOgrSoyAdi = $satir['OgrSoyad'];
                            $_SESSION['OgrAd'] = $readQueryOgrAdi;
                            $_SESSION['OgrSoyad'] = $readQueryOgrSoyAdi;
                            @$readQueryOgrSinifi = $satir['OgrSinif'];
                            @$readQueryOgrCepNosu = $satir['OgrCepNo'];
                            @$readQueryOgrEpostasi = $satir['OgrEposta'];
                        }
                    }
                    if (@$_GET['ogr_bilgileri_submit'] == "Öğrenci Çağır") {
                        $readQuery = $vt->query("select * from tablo_ogrencibilgileri where OgrNo = " . $Post_Method_OgrNo);
                        while ($satir = $readQuery->fetch_assoc()) {
                            // Database'den gelen veriler !
                            @$readQueryOgrNosu = $satir['OgrNo'];
                            @$readQueryOgrKayitNosu = $satir['OgrKayitNo'];
                            @$readQueryOgrStajKodu = $satir['OgrStajKod'];
                            @$readQueryOgrStajYeri = $satir['OgrStajYer'];
                            @$readQueryOgrBaslangicTarihi = $satir['OgrBasTar'];
                            @$readQueryOgrBitisTarihi = $satir['OgrBitTar'];
                            @$readQueryOgrZorStajYazisi = $satir['OgrStajYazi'];
                            @$readQueryOgrEndYazisi = $satir['OgrEndYazi'];
                            @$readQueryOgrStajAciklamasi = $satir['OgrOgrAciklama'];
                            @$readQueryOgrChckbx1 = $satir['OgrStajEvrak'];
                            @$readQueryOgrChckbx2 = $satir['OgrChckBasDil'];
                            @$readQueryOgrChckbx3 = $satir['OgrChckKabYazi'];
                            @$readQueryOgrChckbx4 = $satir['OgrChckMusBel'];
                            @$readQueryOgrChckbx5 = $satir['OgrKmlkFot'];
                            @$readQueryOgrChckbx6 = $satir['OgrStajDegForm'];
                            @$readQueryOgrChckbx7 = $satir['OgrStajRap'];
                        }
                    }

                } else if (@$_GET['ogr_bilgileri_submit'] == 'Öğrenci Güncelle') {
                    $update_Ogr_Intership_Query =
                        [
                            $_GET['input_ogr_tc_nosu'], $_GET['input_ogr_adi'], $_GET['input_ogr_soyadi'],
                            $_GET['input_ogr_sinifi'], $_GET['input_ogr_cep_nosu'], $_GET['input_ogr_epostasi'], $_GET['input_ogr_nosu'],
                        ];
                    $update_Ogr_Information_Query = $vt->prepare("update tbl_ogrenciler set OgrTcNo=?,OgrAd=?,OgrSoyad=?,
                OgrSinif=?,	OgrCepNo=?,OgrEposta=? where OgrNo=? ");
                    $update_Ogr_Information_Query->bind_param("issiisi", $update_Ogr_Intership_Query[0], $update_Ogr_Intership_Query[1],
                        $update_Ogr_Intership_Query[2], $update_Ogr_Intership_Query[3], $update_Ogr_Intership_Query[4], $update_Ogr_Intership_Query[5],
                        $update_Ogr_Intership_Query[6]);
                    $update_Ogr_Information_Query->execute();
                    $update_Ogr_Information_Query->close();


                    $update_Ogr_Intership_Query2 = $vt->prepare("update tablo_ogrencibilgileri set OgrKayitNo =?,OgrStajKod=?,OgrStajYer=?,
                OgrBasTar=?,OgrBitTar=?,OgrStajYazi=?,OgrEndYazi=? ,OgrOgrAciklama=?,OgrStajEvrak=?,OgrChckBasDil=?,OgrChckKabYazi=?,OgrChckMusBel=?,OgrKmlkFot=?,OgrStajDegForm=?,OgrStajRap=? where OgrNo=? ");
                    $update_Ogr_Intership_Query2->bind_param("isssssssiiiiiiii",
                        $_GET['input_ogr_kayit_nosu'], $_GET['input_ogr_staj_kodu'], $_GET['input_ogr_staj_yeri'], $_GET['input_ogr_baslangic_tarihi'],
                        $_GET['input_ogr_bitis_tarihi'], $_GET['input_ogr_zor_staj_yazisi'], $_GET['input_ogr_end_yazisi'], $_GET['input__ogr_textarea_staj_aciklamasi'],
                        intval(@$_GET['input_ogr_chckbx_staj_evraklari']), intval(@$_GET['input_ogr_chckbx_bas_dilekcesi']), intval(@$_GET['input_ogr_chckbx_kab_yazisi']),
                        intval(@$_GET['input_ogr_chckbx_mus_belgesi']), intval(@$_GET['input_ogr_chckbx_kmlk_fotokopisi']), intval(@$_GET['input_ogr_chckbx_staj_deg_formu']),
                        intval(@$_GET['input_ogr_chckbx_staj_raporu']), intval(@$_GET['input_ogr_nosu']));
                    $update_Ogr_Intership_Query2->execute();
                    $update_Ogr_Intership_Query2->close();
                } else if ($_GET and $_GET['ogr_bilgileri_submit'] == "Öğrenci Ekle") {
                    $insrtOgrNo = intval(@$_GET['input_ogr_nosu']);
                    $insrtOgrTcNo = intval(@$_GET['input_ogr_tc_nosu']);
                    $insrtOgrAd = $_GET['input_ogr_adi'];
                    $insrtOgrSoyad = $_GET['input_ogr_soyadi'];
                    $insrtOgrSinif = intval(@$_GET['input_ogr_sinifi']);
                    $insrtOgrCepNo = intval(@$_GET['input_ogr_cep_nosu']);
                    $insrtOgrEposta = $_GET['input_ogr_epostasi'];

                    $insertInformationOgrQuery = $vt->prepare("INSERT INTO tbl_ogrenciler values(?,?,?,?,?,?,?)");
                    $insertInformationOgrQuery->bind_param("iissiis", $insrtOgrNo, $insrtOgrTcNo,
                        $insrtOgrAd, $insrtOgrSoyad, $insrtOgrSinif, $insrtOgrCepNo, $insrtOgrEposta);
                    $insertInformationOgrQuery->execute();


                    $insrtOgrKayitNo = intval($_GET['input_ogr_kayit_nosu']);
                    $insrtOgrStajKod = $_GET['input_ogr_staj_kodu'];
                    $insrtOgrStajYer = $_GET['input_ogr_staj_yeri'];
                    $insrtOgrBasTar = $_GET['input_ogr_baslangic_tarihi'];
                    $insrtOgrBitTar = $_GET['input_ogr_bitis_tarihi'];
                    $insrtOgrStajYazi = $_GET['input_ogr_zor_staj_yazisi'];
                    $insrtOgrEndYazi = $_GET['input_ogr_end_yazisi'];
                    @$insrtOgrStajRap = intval($_GET['input_ogr_chckbx_staj_raporu']);
                    $insrtOgrOgrAciklama = $_GET['input__ogr_textarea_staj_aciklamasi'];
                    @$insrtOgrStajEvrak = intval(@$_GET['input_ogr_chckbx_staj_evraklari']);
                    @$insrtOgrChckBasDil = intval(@$_GET['input_ogr_chckbx_bas_dilekcesi']);
                    @$insrtOgrChckKabYazi = intval(@$_GET['input_ogr_chckbx_kab_yazisi']);
                    @$insrtOgrChckMusBel = intval(@$_GET['input_ogr_chckbx_mus_belgesi']);
                    @$insrtOgrKmlkFot = intval(@ $_GET['input_ogr_chckbx_kmlk_fotokopisi']);
                    @$insrtOgrStajDegForm = intval(@$_GET['input_ogr_chckbx_staj_deg_formu']);

                    $insertIntershipOgrQuery = $vt->prepare('INSERT INTO tablo_ogrencibilgileri VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $insertIntershipOgrQuery->bind_param("isssssssiiiiiiii", $insrtOgrKayitNo, $insrtOgrStajKod,
                        $insrtOgrStajYer, $insrtOgrBasTar, $insrtOgrBitTar, $insrtOgrStajYazi, $insrtOgrEndYazi, $insrtOgrOgrAciklama,
                        $insrtOgrStajEvrak, $insrtOgrChckBasDil, $insrtOgrChckKabYazi, $insrtOgrChckMusBel, $insrtOgrKmlkFot, $insrtOgrStajDegForm,
                        $insrtOgrNo, $insrtOgrStajRap
                    );
                    $insertIntershipOgrQuery->execute();
                    $insertIntershipOgrQuery->close();

                } else if ($_GET and $_GET['ogr_bilgileri_submit'] == "Öğrenci Sil") {
                    $deleteQuery = $vt->prepare("delete from tbl_ogrenciler where OgrNo=?");
                    $deleteQuery->bind_param("i", intval(@$_GET['input_ogr_nosu']));
                    $deleteQuery->execute();
                    $deleteQuery->close();

                    $deleteQuery2 = $vt->prepare("delete from tablo_ogrencibilgileri where OgrNo=?");
                    $deleteQuery2->bind_param("i", intval(@$_GET['input_ogr_nosu']));
                    $deleteQuery2->execute();
                    $deleteQuery2->close();
                }else if ($_GET and $_GET['ogr_bilgileri_submit'] == "Değerlendir") {

                    header("Refresh: 2; url=Degerlendirme.php");
                    die('Giriş kontrolü yapılıyor lütfen bekleyiniz.');
                }

                ?>
            </div>
            <div id="formName">
                <span>Staj Değerlendirme Formu</span>
            </div>
            <div id="register">
                <div id="registerNumber">
                    <span>Kayıt No:</span>
                </div>
                <div id="registerNumberValue">
                    <input id="registerNumberValue"
                           style="left: 0px !important; width: 300px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_kayit_nosu" value="<?php echo @$readQueryOgrKayitNosu ?>">
                </div>
            </div>
            <div id="signOutButton">
                <svg class="signOutBackground">
                    <rect id="signOutBackground" rx="28" ry="28" x="0" y="0" width="223" height="56">
                    </rect>
                </svg>
                <div id="signOutText">
                    <?php echo "<a href='Logout.php' style='text-decoration: none;color: rgba(20,119,194,1);'>Oturumu Kapat</a>"; ?>
                </div>
            </div>
            <button type="submit" name="ogr_bilgileri_submit"  value="Öğrenci Çağır" style="cursor: pointer;background-color: transparent;">
                <div id="getStudent">
                    <svg class="getStudentBG">
                        <rect id="getStudentBG" rx="26.5" ry="26.5" x="0" y="0" width="239" height="53">
                        </rect>
                    </svg>
                    <div id="getStudentText">
                        <span>ÖĞRENCİ ÇAĞIR</span>
                    </div>
                    <svg class="getStudentIcon" viewBox="6 7.5 21.491 21.491">
                        <path id="getStudentIcon" d="M 13.16383075714111 7.5 L 13.16383075714111 10.36553287506104 L 22.60576057434082 10.36553287506104 L 6 26.97129440307617 L 8.020199775695801 28.99149513244629 L 24.62596130371094 12.38573265075684 L 24.62596130371094 21.82766342163086 L 27.49149513244629 21.82766342163086 L 27.49149513244629 7.5 L 13.16383075714111 7.5 Z">
                        </path>
                    </svg>
                </div>
            </button>
            <button type="submit" name="ogr_bilgileri_submit"  value="Değerlendir" style="cursor: pointer;background-color: transparent;">
                <div id="updateStudent">
                    <svg class="updateStudentBG">
                        <rect id="updateStudentBG" rx="26.5" ry="26.5" x="0" y="0" width="282" height="53">
                        </rect>
                    </svg>
                    <div id="updateStudentText">
                        <span>DEĞERLENDİR.</span>
                    </div>
                    <svg class="updateStudentIcon" viewBox="4.502 4.5 25.788 25.79">
                        <path id="updateStudentIcon" d="M 30.28987503051758 14.70129680633545 L 20.57571983337402 14.70129680633545 L 24.50149917602539 10.66089630126953 C 20.59004783630371 6.792426109313965 14.25722122192383 6.649149894714355 10.34576988220215 10.51762008666992 C 6.434317111968994 14.40041732788086 6.434317111968994 20.66160583496094 10.34576988220215 24.54440116882324 C 14.25722122192383 28.42719841003418 20.59004783630371 28.42719841003418 24.50149917602539 24.54440116882324 C 26.45005989074707 22.62449264526367 27.42434310913086 20.37505149841309 27.42434310913086 17.53817176818848 L 30.28987503051758 17.53817176818848 C 30.28987503051758 20.37504959106445 29.0290412902832 24.05725860595703 26.50737190246582 26.55027198791504 C 21.47836303710938 31.53630065917969 13.31159591674805 31.53630065917969 8.282586097717285 26.55027198791504 C 3.267903566360474 21.57857322692871 3.224920511245728 13.49777221679688 8.253931045532227 8.526071548461914 C 13.28294086456299 3.554372549057007 21.34941482543945 3.554372549057007 26.37842559814453 8.526071548461914 L 30.28987503051758 4.5 L 30.28987503051758 14.70129680633545 Z M 18.11136054992676 11.66383171081543 L 18.11136054992676 17.75308799743652 L 23.12604331970215 20.73324012756348 L 22.09445190429688 22.46688842773438 L 15.96221256256104 18.82766151428223 L 15.96221256256104 11.66383171081543 L 18.11136054992676 11.66383171081543 Z">
                        </path>
                    </svg>
                </div>
            </button>
            <div id="firstFormGroup">
                <svg class="firstFormBG">
                    <rect id="firstFormBG" rx="55" ry="55" x="0" y="0" width="502" height="420">
                    </rect>
                </svg>
                <div id="form1">
                    <div id="formName_bd">
                        <span>Adı:</span>
                    </div>
                    <div id="formSurname">
                        <span>Soyadı:</span>
                    </div>
                    <div id="idNumInput">
                        <span>TC Kimlik No:</span>
                    </div>
                    <div id="phoneInput">
                        <span>Cep Tel:</span>
                    </div>
                    <div id="emailInput">
                        <span>E-Posta:</span>
                    </div>
                    <input class="inputBackground"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_adi" value="<?php echo @$readQueryOgrAdi; ?>">
                    <input class="inputBackground_bj"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_soyadi" value="<?php echo @$readQueryOgrSoyAdi; ?>">
                    <input class="inputBackground_bk"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_tc_nosu" value="<?php echo @$readQueryOgrTcNosu; ?>">
                    <input class="inputBackground_bl"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_cep_nosu" value="<?php echo @$readQueryOgrCepNosu; ?>">
                    <input class="inputBackground_bm"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="email" name="input_ogr_epostasi" value="<?php echo @$readQueryOgrEpostasi; ?>">
                </div>
            </div>
            <div id="secondFormGroup">
                <svg class="secondFormBG">
                    <rect id="secondFormBG" rx="55" ry="55" x="0" y="0" width="502" height="420">
                    </rect>
                </svg>
                <div id="form2">
                    <div id="studentNum">
                        <span>Öğrenci No:</span>
                    </div>
                    <div id="class">
                        <span>Sınıf:</span>
                    </div>
                    <div id="intTopic">
                        <span>Staj Kodu:</span>
                    </div>
                    <div id="intPlace">
                        <span>Staj Yeri:</span>
                    </div>
                    <input class="inputBackground_bu"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_nosu" value="<?php echo @$readQueryOgrNosu; ?>">
                    <input class="inputBackground_bv"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_sinifi" value="<?php echo @$readQueryOgrSinifi; ?>">
                    <input class="inputBackground_bw"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_staj_kodu" value="<?php echo @$readQueryOgrStajKodu; ?>">
                    <input class="inputBackground_bx"
                           style=" width: 268px;height: 34px; border-radius: 30px; padding-left: 15px; color: black"
                           type="text" name="input_ogr_staj_yeri" value="<?php echo @$readQueryOgrStajYeri; ?>">
                    <div id="startDate">
                        <span>Staj Başlangıç Tarihi:</span>
                    </div>
                    <div id="endDate">
                        <span>Staj Bitiş Tarihi:</span>
                    </div>
                    <input class="inputBackground_b"
                           style=" width: 208px;height: 34px; border-radius: 30px; padding-left: 15px; padding-right: 15px;color: black"
                           type="date" name="input_ogr_baslangic_tarihi"
                           value="<?php echo @$readQueryOgrBaslangicTarihi; ?>">
                    <input class="inputBackground_ca"
                           style=" width: 208px;height: 34px; border-radius: 30px; padding-left: 15px; padding-right: 15px;color: black"
                           type="date" name="input_ogr_bitis_tarihi" value="<?php echo @$readQueryOgrBitisTarihi; ?>">
                </div>
            </div>
            <div id="thirdFormGroup">
                <svg class="thirdFormBG">
                    <rect id="thirdFormBG" rx="55" ry="55" x="0" y="0" width="502" height="656">
                    </rect>
                </svg>
                <div id="studentNum_b">
                    <span>Öğrenci Z. Staj Yazısı:</span>
                </div>
                <div id="studentNum_ca">
                    <span>Başvuru Dilekçesi Verildi mi?</span>
                </div>
                <div id="studentNum_cb">
                    <span>Kimlik Fotokopisi Verildi mi?</span>
                </div>
                <div id="studentNum_cc">
                    <span>END Yazısı:</span>
                </div>
                <div id="studentNum_cd">
                    <span>Kabul Yazısı Getirildi mi?</span>
                </div>
                <div id="studentNum_ce">
                    <span>Staj Değerlendirme Formu Getirildi mi?</span>
                </div>
                <div id="studentNum_cf">
                    <span>Staj Evrakları Teslim Edildi mi?</span>
                </div>
                <div id="studentNum_cg">
                    <span>Mütehaklık Belgesi Verildi mi?</span>
                </div>
                <div id="studentNum_ch">
                    <span>Staj Raporu Verildi mi?</span>
                </div>
                <div id="studentNum_ci">
                    <span>Stajyer Açıklaması:</span>
                </div>
                <input class="inputBackground_ce"
                       style=" width: 212px;height: 34px; border-radius: 30px; padding-left: 15px; padding-right: 15px;color: black"
                       type="text" name="input_ogr_zor_staj_yazisi" value="<?php echo @$readQueryOgrZorStajYazisi; ?>">
                <input class="inputBackground_cf" type="checkbox" name=input_ogr_chckbx_bas_dilekcesi value="1"
                    <?php if ($_GET) {
                        if ($_GET['ogr_bilgileri_submit'] == 'Öğrenci Çağır') {
                            echo(@$readQueryOgrChckbx2 == 1 ? 'checked' : '');
                        }
                    } ?>>
                <input class="inputBackground_cg" type="checkbox" name=input_ogr_chckbx_kmlk_fotokopisi value="1"
                    <?php if ($_GET) {
                        if ($_GET['ogr_bilgileri_submit'] == 'Öğrenci Çağır') {
                            echo(@$readQueryOgrChckbx5 == 1 ? 'checked' : '');
                        }
                    } ?>>
                <input class="inputBackground_ch"
                       style=" width: 212px;height: 34px; border-radius: 30px; padding-left: 15px; padding-right: 15px;color: black"
                       type="text" name="input_ogr_end_yazisi" value="<?php echo @$readQueryOgrEndYazisi; ?>">
                <input class="inputBackground_ci" type="checkbox" name=input_ogr_chckbx_kab_yazisi value="1"
                    <?php if ($_GET) {
                        if ($_GET['ogr_bilgileri_submit'] == 'Öğrenci Çağır') {
                            echo(@$readQueryOgrChckbx3 == 1 ? 'checked' : '');
                        }
                    } ?>>
                <input class="inputBackground_cj" type="checkbox" name=input_ogr_chckbx_staj_deg_formu value="1"
                    <?php if ($_GET) {
                        if ($_GET['ogr_bilgileri_submit'] == 'Öğrenci Çağır') {
                            echo(@$readQueryOgrChckbx6 == 1 ? 'checked' : '');
                        }
                    } ?>>
                <input class="inputBackground_ck" type="checkbox" name=input_ogr_chckbx_staj_evraklari value="1"
                    <?php if ($_GET) {
                        if ($_GET['ogr_bilgileri_submit'] == 'Öğrenci Çağır') {
                            echo(@$readQueryOgrChckbx1 == 1 ? 'checked' : '');
                        }
                    } ?>>
                <input class="inputBackground_cl" type="checkbox" name=input_ogr_chckbx_mus_belgesi value="1"
                    <?php if ($_GET) {
                        if ($_GET['ogr_bilgileri_submit'] == 'Öğrenci Çağır') {
                            echo(@$readQueryOgrChckbx4 == 1 ? 'checked' : '');
                        }
                    } ?>>
                <input class="inputBackground_cm" type="checkbox" name=input_ogr_chckbx_staj_raporu value="1"
                    <?php if ($_GET) {
                        if ($_GET['ogr_bilgileri_submit'] == 'Öğrenci Çağır') {
                            echo(@$readQueryOgrChckbx7 == 1 ? 'checked' : '');
                        }
                    } ?>>
                <textarea class="inputBackground_cn" style=" resize: none;" name="input__ogr_textarea_staj_aciklamasi"
                ><?php echo @$readQueryOgrStajAciklamasi; ?></textarea>
            </div>
            <div id="arrow1">
                <svg class="Ellipse_1">
                    <ellipse id="Ellipse_1" rx="21" ry="21" cx="21" cy="21">
                    </ellipse>
                </svg>
                <svg class="Polygon_1" viewBox="0 0 16 14">
                    <path id="Polygon_1" d="M 7.999999046325684 0 L 16 14 L 0 14 Z">
                    </path>
                </svg>
            </div>
            <div id="arrow2">
                <svg class="Ellipse_2">
                    <ellipse id="Ellipse_2" rx="21" ry="21" cx="21" cy="21">
                    </ellipse>
                </svg>
                <svg class="Polygon_2" viewBox="0 0 16 14">
                    <path id="Polygon_2" d="M 7.999999046325684 0 L 16 14 L 0 14 Z">
                    </path>
                </svg>
            </div>
            <div id="assestmentPerson">
                <span>DEĞERLENDİRECEK AKADEMİSYEN: </span>
            </div>
            <svg class="assestmentDropDown">
                <rect id="assestmentDropDown" rx="16.5" ry="16.5" x="0" y="0" width="448" height="33">
                </rect>
            </svg>
            <select name="akademisyen_secimi" class="assestmentDropDown" style="padding-left: 15px;">
                <?php
                $perIsim = $perSoyisim = $perUunvan = "";
                $queryPersonel = $vt->query('select * from personeller_tbl');
                while ($satir = mysqli_fetch_assoc($queryPersonel)) {
                    $queryPersonelId = $satir['Personel_ID'];
                    $queryPersonelIsim = $satir['Personel_Isim'];
                    $queryPersonelSoyisim = $satir['Personel_Soyisim'];
                    $queryPersonelUnvan = $satir['Personel_Unvan'];
                    if ($queryPersonelId >= 50) {
                        echo "<option value='$queryPersonelId'>$queryPersonelUnvan  $queryPersonelIsim  $queryPersonelSoyisim</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
</form>
</body>
</html>