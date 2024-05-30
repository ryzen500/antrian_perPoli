<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.2/socket.io.js"></script> -->
    <script src="./socket.io.js"></script>

    <link rel="stylesheet" href="http://192.168.214.223/ihospital-rswb-staging/themes/neon/assets/css/neon.css">
    <link rel="stylesheet" href="http://192.168.214.223/ihospital-rswb-staging/themes/neon/assets/css/bootstrap.css">
    <!--<link rel="stylesheet" href="themes/neon/assets/css/neon-core.css">-->
    <link rel="stylesheet" href="http://192.168.214.223/ihospital-rswb-staging/themes/neon/assets/css/neon-theme.css">
    <link rel="stylesheet" href="http://192.168.214.223/ihospital-rswb-staging/themes/neon/assets/css/neon-forms.css">
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/print.css" media="print" />
    <!-- <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/mws/mws.style.css" media="screen" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/mws/icons/icons.css" media="screen" /> -->
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/treeview/jquery.treeview.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/main.css" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/form.css" />
    <link href="http://192.168.214.223/ihospital-rswb-staging/css/imagesTampilAntrian/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/css/animation-loading.css" />
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/jquery-1.3.2.js"></script>
    <!-- <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/mws.js"></script> -->
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/howler.min.js"></script>
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/suara.antrian.js"></script>
    <link rel="shortcut icon" href="http://192.168.214.223/ihospital-rswb-staging/images/icon/favecon.png" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/assets/e83e0fa3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/assets/e83e0fa3/theme/skinsidebar/icon-sidebar-green.css" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/assets/e83e0fa3/font-icons/entypo/css/entypo.css" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/assets/e83e0fa3/font-icons/font-awesome5/css/all.css" />
    <link rel="stylesheet" type="text/css" href="http://192.168.214.223/ihospital-rswb-staging/assets/e83e0fa3/font-icons/font-awesome/css/font-awesome.css" />
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/assets/f02f4c3f/jquery.js"></script>
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/jquery.maskMoney.js"></script>
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/accounting.js"></script>
    <script type="text/javascript" src="http://192.168.214.223/ihospital-rswb-staging/js/js.sound/jquery.jplayer.min.js"></script>
    <title>RS William Booth Surabaya - Tampil Antrian Ke Klinik</title>
</head>

<body>
    <style>
        body {
            /* //default */
            background-repeat: no-repeat;
            /*width:980px;*/
            color: #000;
            background-position: center top;
            background-size: 100% auto;
        }
    </style>
    <!--<div style="margin-top: 128px"></div>-->
    <div class="content" style="padding-bottom: 55px;">
        <link rel="stylesheet" type="text/css" href="css/font.css" />

        <style>
            body {
                /* background:
            radial-gradient(black 15%, transparent 16%) 0 0,
            radial-gradient(black 15%, transparent 16%) 8px 8px,
            radial-gradient(rgba(255, 255, 255, .1) 15%, transparent 20%) 0 1px,
            radial-gradient(rgba(255, 255, 255, .1) 15%, transparent 20%) 8px 9px;
        background-color: #282828;
        background-size: 16px 16px; */
                background: url(http://192.168.214.223/ihospital-rswb-staging/images/login_mixed_new.jpg) center center no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }

            .content {
                margin: 0;
            }

            .row {
                margin: 0;
            }

            /*    div{
            font-size: 20px;
            font-weight:bold;
            letter-spacing:2px;
            color: #fff;
            text-shadow:
                -1px -1px 0 #000,  
                 1px -1px 0 #000,
                 -1px 1px 0 #000,
                  1px 1px 0 #000;
        }*/
            thead th {
                text-align: center;
                padding-right: 20px;
            }

            .antrian {
                margin: 0 5px;
            }

            .judul {
                text-align: center;
                font-size: 35px;
                font-weight: bold;
                padding-bottom: 0;
            }

            .ruangan {
                width: 100%;
                height: 4.8vw;
                padding: 10px;
                background-color: #2b2e3b;
            }

            .ruangan1 {
                background-color: #2b2e3b;
                /* height: 2.75vw; */
                width: 100%;
                margin-top: 10px;
            }

            .col-xs-4:nth-child(-n+3) .ruangan1 {
                margin-top: 30px;
            }

            .ruangan2 {
                width: 100%;
                height: 120px;
                margin-top: 15px;
                padding: 0;
                color: #fff;
                font-size: 2vw;
                font-family: oswald;
                font-weight: bold;
                text-align: center;
            }

            /*    .dokter{
        font-size: 70%;
        color: #00FF00;
        border: 1px solid #fff;
        border-bottom: none;
        border-top:none;
    }*/
            .pasien-deskripsi,
            .ruangan {
                color: #fff;
                text-align: center;
                font-size: 13.7vw;
                font-weight: bold;
            }

            
        .pantriantengah {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
      



     /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


            .pasien-deskripsi {
                /*font-size: 70%;*/
                width: 100%;
                font-size: 3vw;
                -moz-border-radius: 0 0 5px 5px;
                -webkit-border-radius: 0 0 5px 5px;
                border-radius: 0 0 5px 5px;
                border-top: none;
                background-color: #2b2e3b;
                color: #fff;
                font-family: oswald;
                font-weight: bold;
                /*height: 20px;*/
            }

            .daftar-judul {
                color: #fff;
                text-align: center;
                -moz-border-radius: 5px 5px 0 0;
                -webkit-border-radius: 5px 5px 0 0;
                border-radius: 5px 5px 0 0;
            }

            .daftar-isi td,
            th {
                color: #fff;
                background-color: rgba(0, 0, 0, 0.8) !important;
                font-size: 11px;
                text-align: left;
                font-weight: bold;
            }

            .block-footer-antrian {
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .rheader {}

            #textrunning {
                color: #007;
                text-shadow: none;
                height: 40px;
                bottom: 0;
                right: 0;
                color: #fff;
                text-shadow: none;
                font-weight: bold;
                font-size: 30px;
                padding: 0;
                font-family: oswald;
                padding-left: 6px;
                padding-right: 6px;
                background-color: #2b2e3b;
            }

            #clock {
                position: absolute;
                bottom: 0;
                right: 0;
                width: 506px;
                padding: 0 10px;
                color: #007;
                text-shadow: none;
                font-weight: bold;
                font-size: 30px;
                text-align: center;
                color: #fff;
                height: 40px;
                font-family: oswald;
                background-color: #3753a4;
            }

            .content {
                margin-left: 0 !important;
            }

            #pantrian {
                background-color: #2b2e3b;
                height: 125px;
                width: 25%;
            }

            #pantrian2 {
                background-color: #fff;
                height: 125px;
            }

            .pantriantengah {
                width: 100%;
                height: 40.5vw;
                padding: 300px;
                background-color: #18476d;
                color: #fff;
                font-family: oswald;
                font-weight: bold;
                text-align: center;
            }

          /* Default font size for large screens (full screen monitor) */
.no-antrian {
    font-size: 180px;
}

/* Font size for medium screens (mini laptop) */
@media (max-width: 1024px) {
    .no-antrian {
        font-size:  83px; 
    }
}



 

            #pantrianbawah {
                background-color: #2b2e3b;
                height: 150px;
                width: 100%;
            }

            #layar {
                background-color: #2b2e3b;
                border-color: #f5f4f7;
            }

            #layarbor {
                background-color: #3a3c4a;
                height: 160px;
                width: 100%;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            #vimi {
                background-color: #3a3c4a;
                color: #fff;
                font-family: oswald;
                font-weight: lighter;
                font-size: 1vw;
                border-bottom-left-radius: 10px;
            }

            #vimi2 {
                color: #fff;
                font-family: oswald;
                font-weight: bold;
                font-size: 2vw;
            }

            #vimi3 {
                margin-bottom: 50px;
                padding: 10px 0;
                background-color: #377fb7;
                color: #fff;
                font-family: oswald;
                font-weight: lighter;
                font-size: 1vw;
                text-transform: uppercase;
            }

            #vimi4 {
                color: #fff;
                font-family: oswald;
                font-weight: lighter;
                font-size: 8px;
                text-transform: uppercase;
            }

            #vimi5 {
                color: #fff;
                font-family: oswald;
                font-weight: lighter;
                font-size: 1vw;
            }

            #kotak1 {
                margin-top: 0;
            }

            .blinked .no-antrian {
                -webkit-animation: blinked-container-noantrian 3s infinite;
                /* Safari 4+ */
                -moz-animation: blinked-container-noantrian 3s infinite;
                /* Fx 5+ */
                -o-animation: blinked-container-noantrian 3s infinite;
                /* Opera 12+ */
                animation: blinked-container-noantrian 3s infinite;
                /* IE 10+, Fx 29+ */
            }


            @-webkit-keyframes blinked-container-noantrian {

                0%,
                49% {
                    background-color: #3a3c4a;
                    color: #fff;
                }

                50%,
                100% {
                    background-color: rgba(255, 255, 255, 0.5);
                    color: #333;
                }
            }
        </style>
        <input readonly="readonly" class="realtime" type="hidden" value="" name="jamsekarang" id="jamsekarang" />
        <!-- <div class="row">
            <div class="col-sm-12 statistik" id="kotak1" style="background-color:none; padding: 0 5px;">

                <div class="clear"></div>
                <div class="col-sm-12" style="padding: 0 5px;">
                    <div class="col-sm-12" style="padding: 0;" ada-data="tidak">
                        <div id="ruangan_512" class="antrian">
                            <div style="font-size:2vw; color:white; font-family:oswald; font-weight: bold;" class="col-sm-12 ruangan1 loket-nama" id="pasien-deskripsi_0">
                                <div class="col-sm-12" style="font-size:4vw; text-align:center"> <span id="nama_ruangan"></span></div>
                                <div class="col-sm-12 pasien-deskripsi mt-12" style="padding-bottom: 8px;"><span id="gelardepan"></span> <span id="nama_pegawai"></span> <span id="gelarbelakang_nama"></span></div>
                            </div>
                            <div class="col-xs-4 pantriantengah">
                                <div class="col-sm-12 no-antrian" style="font-size:9.5vw;"><span id="ruangan_singkatan"></span>-<span id="no_antri"></span> </div>
                            </div>
                            <div class="col-xs-4 ruangan" id="ruangan_nama_0">
                                <div class="col-sm-12 dokter" style="font-size:4vw;padding-left: 0; padding-right: 0;">100343839</div>

                            </div>
                            <input class="span3" onkeyup="return $(this).focusNextInputField(event);" name="ANInfokunjunganrjV[pendaftaran_id]" id="ANInfokunjunganrjV_pendaftaran_id" type="hidden" /><input class="span3" onkeyup="return $(this).focusNextInputField(event);" name="ANInfokunjunganrjV[ruangan_id]" id="ANInfokunjunganrjV_ruangan_id" type="hidden" /><input class="span3" onkeyup="return $(this).focusNextInputField(event);" name="ANInfokunjunganrjV[carabayar_id]" id="ANInfokunjunganrjV_carabayar_id" type="hidden" /><input class="span3" onkeyup="return $(this).focusNextInputField(event);" name="ANInfokunjunganrjV[antrian_id]" id="ANInfokunjunganrjV_antrian_id" type="hidden" /><input class="span3" onkeyup="return $(this).focusNextInputField(event);" name="ANInfokunjunganrjV[pegawai_id]" id="ANInfokunjunganrjV_pegawai_id" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[ruangan_nama]" id="ANInfokunjunganrjV_ruangan_nama" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[ruangan_singkatan]" id="ANInfokunjunganrjV_ruangan_singkatan" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" name="ANInfokunjunganrjV[tgl_pendaftaran]" id="ANInfokunjunganrjV_tgl_pendaftaran" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="6" name="ANInfokunjunganrjV[no_pendaftaran]" id="ANInfokunjunganrjV_no_pendaftaran" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[no_urutantri]" id="ANInfokunjunganrjV_no_urutantri" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[no_rekam_medik]" id="ANInfokunjunganrjV_no_rekam_medik" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[namadepan]" id="ANInfokunjunganrjV_namadepan" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[nama_pasien]" id="ANInfokunjunganrjV_nama_pasien" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[gelardepan]" id="ANInfokunjunganrjV_gelardepan" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[nama_pegawai]" id="ANInfokunjunganrjV_nama_pegawai" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[gelarbelakang_nama]" id="ANInfokunjunganrjV_gelarbelakang_nama" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[statuspasien]" id="ANInfokunjunganrjV_statuspasien" type="hidden" /><input readonly="readonly" class="span3" onkeyup="return $(this).focusNextInputField(event);" maxlength="50" name="ANInfokunjunganrjV[panggilantrian]" id="ANInfokunjunganrjV_panggilantrian" type="hidden" />
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="block-footer-antrian">
            <div id="footerAntrian">
                <marquee direction="left" scrollamount="10" id="textrunning">
                    RS William Booth Surabaya - <label style="font-family: 'Brush Script MT', cursive; font-size: 40px; color: #fff;">“Melayani Dengan KASIH”.</label>
                </marquee>
            </div>
            <div id="footerClock">
                <div id="clock"></div>
            </div>
        </div> -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 statistik" id="kotak1" style="background-color:none; padding: 0 5px;">

                    <div class="clear"></div>
                    <div class="col-md-12" style="padding: 0 5px;">
                        <div class="col-md-12" style="padding: 0;" ada-data="tidak">
                            <div id="ruangan_512" class="antrian">
                                <div style="font-size:2vw; color:white; font-family:oswald; font-weight: bold;" class="col-md-12 ruangan1 loket-nama" id="pasien-deskripsi_0">
                                    <div class="col-md-12" style="font-size:4vw; text-align:center"> <span id="nama_ruangan"></span></div>
                                    <div class="col-md-12 pasien-deskripsi mt-12" style="padding-bottom: 8px;"><span id="gelardepan"></span> <span id="nama_pegawai"></span> <span id="gelarbelakang_nama"></span></div>
                                </div>
                                <div class="col-md-4 pantriantengah">
                                    <div class="no-antrian">

                                        <span id="ruangan_singkatan"></span>-<span id="no_antri"></span>
                                 
                                    </div>
                                </div>
                                <div class="col-md-4 ruangan" id="ruangan_nama_0">
                                    <div class="col-md-12 dokter" style="font-size:4vw;padding-left: 0; padding-right: 0;"><span id="no_rekam_medik"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 block-footer-antrian">
                    <div id="footerAntrian">
                        <marquee direction="left" scrollamount="10" id="textrunning">
                            RS William Booth Surabaya - <label style="font-family: 'Brush Script MT', cursive; font-size: 40px; color: #fff;">“Melayani Dengan KASIH”.</label>
                        </marquee>
                    </div>
                    <div id="footerClock">
                        <div id="clock"></div>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            const urutkanRuanganAntrian = () => {
                $(".no-antrian-container:not(.blinked)[ada-data='ada']").each(function() {
                    cloneContainer($(this));
                });

                cloneContainer($(".no-antrian-container.blinked"));

                resetPosisi($(".no-antrian-container:first"));
            }

            const resetPosisi = (obj) => {
                let no = 1;
                $(".no-antrian-container").each(function() {
                    $(this).attr('no', no);
                    no++;
                });

                no = 1;
                $.each([{
                    "512": {
                        "ruangan_nama": "KLINIK GERIATRI",
                        "ruangan_singkatan": "KGR",
                        "col": "col-xs-4",
                        "nama_dokter": null,
                        "no_rm": null,
                        "noantrian": null
                    }
                }], function(key, value) {
                    $.each(value, function(key2, value2) {
                        $(".no-antrian-container[no='" + no + "']").attr("class", "no-antrian-container " + value2.col);
                        no++;
                    });
                });

                $(".no-antrian-container:first").addClass("blinked");
            }

            const cloneContainer = (obj) => {
                const cloneContainer = $(obj).clone();
                $(obj).detach();

                $(".no-antrian-container:first").before(cloneContainer);
            }

            /************************************************************************************************************
             (C) www.dhtmlgoodies.com, October 2005
             
             This is a script from www.dhtmlgoodies.com. You will find this and a lot of other scripts at our website.	
             
             Terms of use:
             You are free to use this script as long as the copyright message is kept intact. However, you may not
             redistribute, sell or repost it without our permission.
             
             Thank you!
             
             www.dhtmlgoodies.com
             Alf Magne Kalleland
             
             ************************************************************************************************************/
            var fitTextInBox_maxWidth = false;
            var fitTextInBox_maxHeight = false;
            var fitTextInBox_currentWidth = false;
            var fitTextInBox_currentBox = false;
            var fitTextInBox_currentTextObj = false;

            var cnt_fit = 0;

            function fitTextInBox(boxID, maxHeight) {
                if (maxHeight)
                    fitTextInBox_maxHeight = maxHeight;
                else
                    fitTextInBox_maxHeight = 10000;
                var obj = document.getElementById(boxID);

                // console.log(obj);
                obj.style.whiteSpace = "noWrap";

                fitTextInBox_maxWidth = obj.offsetWidth;
                fitTextInBox_currentBox = obj;
                fitTextInBox_currentTextObj = obj.getElementsByTagName('SPAN')[0];
                fitTextInBox_currentTextObj.style.fontSize = '1px';
                fitTextInBox_currentWidth = fitTextInBox_currentTextObj.offsetWidth;
                fitTextInBoxAutoFit();

            }

            function fitTextInBoxAutoFit() {
                var tmpFontSize = fitTextInBox_currentTextObj.style.fontSize.replace('px', '') / 1;
                fitTextInBox_currentTextObj.style.fontSize = tmpFontSize + 1 + 'px';
                var tmpWidth = fitTextInBox_currentTextObj.offsetWidth;
                var tmpHeight = fitTextInBox_currentTextObj.offsetHeight;
                if (tmpWidth >= fitTextInBox_currentWidth && tmpWidth < fitTextInBox_maxWidth && tmpHeight < fitTextInBox_maxHeight && tmpFontSize < 300) {
                    fitTextInBox_currentWidth = fitTextInBox_currentTextObj.offsetWidth;
                    fitTextInBoxAutoFit();
                } else {
                    fitTextInBox_currentTextObj.style.fontSize = fitTextInBox_currentTextObj.style.fontSize.replace('px', '') / 1 - 1 + 'px';
                }
            }

            var antrian_arr = [];
            var sound_arr = [];
            var is_call = false;

            function push_arr(obj) {
                antrian_arr.push(obj);
            }

            function preregister_sound(kodeantrian, antri_terbilang, ruangan) {
                var arr = [];
                var arr_kode = kodeantrian.trim().toLowerCase().split("");
                var arr_no = antri_terbilang.trim().split(" ");
                var i = 0;

                arr.push({
                    'name': 'noantrian'
                });
                for (i = 0; i < arr_kode.length; i++) {
                    arr.push({
                        'name': arr_kode[i]
                    });
                }
                for (i = 0; i < arr_no.length; i++) {
                    arr.push({
                        'name': arr_no[i]
                    });
                }

                arr.push({
                    'name': 'poliklinik'
                });
                arr.push({
                    'name': ruangan
                });

                // console.log(arr);

                sound_arr.push(arr);

            }

            function customFungsi() {
                console.log(antrian_arr);
                for (var key in antrian_arr) {
                    if (antrian_arr.hasOwnProperty(key)) {
                        var obj = antrian_arr[key];
                        if (key == 'ruangan_id') {
                            setFormAntrian($("#ruangan_" + obj), antrian_arr);
                        }
                    }
                }
            }


            function call_antrian() {
                is_call = true;

                //$(".antrian_big").show();
                //$(".isi_antrian").hide();

                console.log(antrian_arr);

                if (antrian_arr.length != 0) {
                    var data = antrian_arr[0];
                    var snd = sound_arr[0];
                    var gelarbelakang = "";

                    if (data.gelarbelakang_nama !== null)
                        gelarbelakang = ", " + data.gelarbelakang_nama;

                    $("#ruangan_nama_big > span").html(data.ruangan_nama);
                    $("#dokter_big > span").html(data.gelardepan + " " + data.nama_pegawai + gelarbelakang);
                    $(".no-antrian_big").html(data.ruangan_singkatan + "-" + data.no_urutantri);
                    $("#pasien-deskripsi_big > span").html(data.no_rekam_medik);

                    //            registerSuaraAntrian(snd);
                    //            // playAntrian();
                    //
                    //            setTimeout(function () {
                    //                antrian_arr.shift();
                    //                sound_arr.shift();
                    //                if (antrian_arr.length != 0)
                    //                    call_antrian();
                    //                else {
                    //                    //	$(".antrian_big").hide();
                    //                    //	$(".isi_antrian").show();
                    //                    is_call = false;
                    //                }
                    //            }, 12000);
                }
                // $("#ruangan_nama_big").html(antrian_arr[0].);
            }

            /**
             * set semua antrian 
             * @param {type} antrian_id
             * @returns {undefined} */
            async function setAntrians(ruangan_id) {
                $.ajax({
                    type: 'POST',
                    url: 'antrianPoli.php',
                    data: {
                        ruangan_id: ruangan_id
                    },
                    dataType: "json",
                    success: function(data) {
                        var i = 0;

                        console.log("Hai");

                        $("#ruangan_singkatan").text(data.ruangan_singkatan);
                        $("#no_antri").text(data.no_urutantri);
                        $("#nama_ruangan").text(data.ruangan_nama);
                        $("#gelardepan").text(data.gelardepan);
                        $("#nama_pegawai").text(data.nama_pegawai);
                        $("#gelarbelakang_nama").text(data.gelarbelakang_nama);
                        $("#no_rekam_medik").text(data.no_rekam_medik);


                        // antrian_arr = data;

                        // var kodeantrian = data.ruangan_singkatan;
                        // var noantrian = data.no_urutantri;
                        // var ruangan_id = data.ruangan_id;

                        // // if (data.panggilantrian == 'Device Display'){
                        // setSuaraPanggilan(kodeantrian, noantrian, ruangan_id);
                        // //}

                        // customFungsi();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                    }
                });
            }


            /**
             * set div antrian
             * @param {type} obj
             * @param {type} data
             * @returns {undefined} */
            function setFormAntrian(obj, data) {
                $(obj).find("#ANInfokunjunganrjV_pendaftaran_id").val(data.pendaftaran_id);
                $(obj).find("#ANInfokunjunganrjV_ruangan_id").val(data.ruangan_id);
                $(obj).find("#ANInfokunjunganrjV_carabayar_id").val(data.carabayar_id);
                $(obj).find("#ANInfokunjunganrjV_antrian_id").val(data.antrian_id);
                $(obj).find("#ANInfokunjunganrjV_pegawai_id").val(data.pegawai_id);
                $(obj).find("#ANInfokunjunganrjV_ruangan_nama").val(data.ruangan_nama);
                $(obj).find("#ANInfokunjunganrjV_ruangan_singkatan").val(data.ruangan_singkatan);
                $(obj).find("#ANInfokunjunganrjV_tgl_pendaftaran").val(data.tgl_pendaftaran);
                $(obj).find("#ANInfokunjunganrjV_no_pendaftaran").val(data.no_pendaftaran);
                $(obj).find("#ANInfokunjunganrjV_no_urutantri").val(data.no_urutantri);
                $(obj).find("#ANInfokunjunganrjV_no_rekam_medik").val(data.no_rekam_medik);
                $(obj).find("#ANInfokunjunganrjV_namadepan").val(data.namadepan);
                $(obj).find("#ANInfokunjunganrjV_nama_pasien").val(data.nama_pasien);
                $(obj).find("#ANInfokunjunganrjV_gelardepan").val(data.gelardepan);
                $(obj).find("#ANInfokunjunganrjV_nama_pegawai").val(data.nama_pegawai);
                $(obj).find("#ANInfokunjunganrjV_gelarbelakang_nama").val(data.gelarbelakang_nama);
                $(obj).find("#ANInfokunjunganrjV_statuspasien").val(data.statuspasien);
                $(obj).find("#ANInfokunjunganrjV_panggilantrian").val(data.panggilantrian);
                var gelarbelakang = "";
                if (data.gelarbelakang_nama !== null)
                    gelarbelakang = ", " + data.gelarbelakang_nama;
                $(obj).find(".dokter").html("<span>" + data.gelardepan + " " + data.nama_pegawai + gelarbelakang + "</span>");
                $(obj).find(".no-antrian").html(data.ruangan_singkatan + "-" + data.no_urutantri);
                $(obj).find(".pasien-deskripsi").html("<span>" + data.no_rekam_medik + "<span>");

                $(".no-antrian-container").removeClass("blinked");


                cloneContainer($(obj).parents(".no-antrian-container"));

                resetPosisi($(obj).parents(".no-antrian-container"));
            }

            function setTableStatistik(obj, data) {
                $(obj).find("#label_jmlpasien").html("JUMLAH PASIEN " + data.statuspasien);

                $(obj).find("#jmlpasien").html(data.jmlpasien);
                $(obj).find("#jmlmenunggu").html(data.jmlmenunggu);
                $(obj).find("#jmlterdaftar").html(data.jmlterdaftar);
            }

            /**
             * suara panggilan per ruangan
             * @param {type} param
             */
            // function setSuaraPanggilanSingle(kodeantrian, noantrian, ruangan_id) {
            //     $("#ruangan_" + ruangan_id + " #suarapanggilan").attr("src", "http://192.168.214.223/ihospital-rswb-staging/index.php?r=antrian/tampilAntrianKePoliklinikNew/suaraPanggilanSingle&kodeantrian=" + kodeantrian + "&noantrian=" + noantrian + "&ruangan_id=" + ruangan_id);
            // }

            /**
             * 
             * @param {type} param
             */
            // async function setSuaraPanggilan(kodeantrian, noantrian, ruangan_id) {
            //     $.ajax({
            //         type: 'POST',
            //         url: 'http://192.168.214.223/ihospital-rswb-staging/index.php?r=antrian/tampilAntrianKePoliklinikNew/SuaraPanggilanPoli',
            //         data: {
            //             kodeantrian: kodeantrian,
            //             noantrian: noantrian,
            //             ruangan_id: ruangan_id
            //         },
            //         dataType: "json",
            //         success: function(data) {
            //             $("#suarapanggilan").html(data.suarapanggilan);
            //         },
            //         error: function(jqXHR, textStatus, errorThrown) {
            //             console.log(errorThrown);
            //         }
            //     });
            // }

            /**
             * fungsi .ready() harus tetap di bawah
             * @param {type} param */
            $(document).ready(function() {

                var ruangan_id = '<?php echo $_GET['ruangan_id']; ?>';
                console.log("-_-");
                urutkanRuanganAntrian();
                setAntrians(ruangan_id);
                //        resetPosisi($(".no-antrian-container:first"))
                //setAntriansFarmasi('');        
                var chatServer = '192.168.214.222';

                // <!-- var chatServer = '192.168.214.222'; -->
                // var chatServer = 'http://localhost';

                var chatPort = '3333';
                socket = io.connect(chatServer + ':' + chatPort);

                console.log(socket);
                socket.emit('subscribe', 'antrian');

                socket.on('antrian', function(data) {
                    console.log("data", data.antrian_id);
                    setAntrians(ruangan_id);
                });

                // setInterval(() => {
                //     setAntrians();
                // }, 1000);
                //DINONAKTIF KAN KARENA BERAT JIKA DI EKSEKUSI DI SMART TV BOX (TARAKAN) >> setInterval(function(){reloadHalaman();},1000);

                // setJenisSuaraAntrian("http://192.168.214.223/ihospital-rswb-staging/data/sounds/antrian/mp3/PEREMPUAN/");

                refreshAt(1, 0, 0);
            });

            function refreshAt(hours, minutes, seconds) {
                var now = new Date();
                var then = new Date();

                if (now.getHours() > hours ||
                    (now.getHours() == hours && now.getMinutes() > minutes) ||
                    now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) {
                    then.setDate(now.getDate() + 1);
                }
                then.setHours(hours);
                then.setMinutes(minutes);
                then.setSeconds(seconds);

                var timeout = (then.getTime() - now.getTime());
                setTimeout(function() {
                    window.location.reload(true);
                }, timeout);
            }
        </script>
        <!-- <iframe id="suarapanggilan" src="" style="display:none;"></iframe> -->
        <script>
            var day = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            var mon = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];

            function updateClock() {
                var currentTime = new Date();
                var currentHours = currentTime.getHours();
                var currentMinutes = currentTime.getMinutes();
                var currentSeconds = currentTime.getSeconds();
                var currentDay = currentTime.getDay();
                var currentDate = currentTime.getDate();
                var currentMonth = currentTime.getMonth();
                var currentYear = currentTime.getFullYear();
                // Pad the minutes and seconds with leading zeros, if required
                currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
                currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
                // Choose either "AM" or "PM" as appropriate
                var timeOfDay = (currentHours < 12) ? "AM" : "PM";
                // Convert the hours component to 12-hour format if needed
                currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
                // Convert an hours component of "0" to "12"
                currentHours = (currentHours == 0) ? 12 : currentHours;
                // Compose the string for display

                var currentTimeString = currentDate + " " + mon[currentMonth] + " " + currentYear + " - " + currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
                // console.log("current Time", currentTimeString);

                // console.log(currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay);
                $("#clock").html(currentTimeString);
            }
            $(document).ready(function() {
                setInterval('updateClock()', 1000);
            });
        </script>


    </div>
</body>
<script type="text/javascript">
    /**
     * reload halaman (reset) pada jam tertentu
     */
    function reloadHalaman() {
        var jamsekarang = $('#jamsekarang').val().split(" ");
        var jam = jamsekarang[3].substring(0, 8);
        if (jam == "06:00:00") {
            location.reload();
        }
    }
</script>

</html>