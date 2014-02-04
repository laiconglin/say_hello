<?php
require_once('check_login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="utils.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script>
        $(document).bind("mobileinit", function () {
            console.log("hello world mobileinit");
            $.mobile.ajaxEnabled = false;
        });
    </script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>  
    <script>
    toeic_list = ["001_MainTitle.mp3","002_Chapter-1_Title.mp3","003_KeyWords.mp3","004_PossibleAnswers.mp3","005_WrongAnswers.mp3","006_KeyWords.mp3","007_PossibleAnswers.mp3","008_WrongAnswers.mp3","009_KeyWords.mp3","010_PossibleAnswers.mp3","011_WrongAnswers.mp3","012_KeyWords.mp3","013_PossibleAnswers.mp3","014_WrongAnswersc.mp3","015_KeyWords.mp3","016_PossibleAnswers.mp3","017_WrongAnswers.mp3","018_KeyWords.mp3","019_PossibleAnswers.mp3","020_WrongAnswers.mp3","021_KeyWords.mp3","022_PossibleAnswers.mp3","023_WrongAnswers.mp3","024_KeyWords.mp3","025_PossibleAnswers.mp3","026_WrongAnswers.mp3","027_ExercisesTitle.mp3","028_Exercise_1.mp3","029_Exercise_2.mp3","030_Exercise_3.mp3","031_Exercise_4.mp3","032_KeyWords.mp3","033_PossibleAnswers.mp3","034_WrongAnswers.mp3","035_KeyWords.mp3","036_PossibleAnswers.mp3","037_WrongAnswers.mp3","038_KeyWords.mp3","039_PossibleAnswers.mp3","040_WrongAnswers.mp3","041_KeyWords.mp3","042_PossibleAnswers.mp3","043_WrongAnswers.mp3","044_KeyWords.mp3","045_PossibleAnswers.mp3","046_WrongAnswers.mp3","047_KeyWords.mp3","048_PossibleAnswers.mp3","049_WrongAnswers.mp3","050_KeyWords.mp3","051_PossibleAnswers.mp3","052_WrongAnswers.mp3","053_KeyWords.mp3","054_PossibleAnswers.mp3","055_WrongAnswers.mp3","056_ExercisesTitle.mp3","057_Exercise_1.mp3","058_Exercise_2.mp3","059_Exercise_3.mp3","060_Exercise_4.mp3","061_KeyWords.mp3","062_PossibleAnswers.mp3","063_WrongAnswers.mp3","064_KeyWords.mp3","065_PossibleAnswers.mp3","066_WrongAnswers.mp3","067_KeyWords.mp3","068_PossibleAnswers.mp3","069_WrongAnswers.mp3","070_KeyWords.mp3","071_PossibleAnswers.mp3","072_WrongAnswers.mp3","073_KeyWords.mp3","074_PossibleAnswers.mp3","075_WrongAnswers.mp3","076_KeyWords.mp3","077_PossibleAnswers.mp3","078_WrongAnswers.mp3","079_KeyWords.mp3","080_PossibleAnswers.mp3","081_WrongAnswers.mp3","082_KeyWords.mp3","083_PossibleAnswers.mp3","084_WrongAnswers.mp3","085_ExercisesTitle.mp3","086_Exercise_1.mp3","087_Exercise_2.mp3","088_Exercise_3.mp3","089_Exercise_4.mp3","090_Chapter-2_Title.mp3","091_What.mp3","092_PossibleAnswers.mp3","093_What.mp3","094_PossibleAnswers.mp3","095_What.mp3","096_PossibleAnswers.mp3","097_What.mp3","098_PossibleAnswers.mp3","099_What.mp3","100_PossibleAnswers.mp3","101_What.mp3","102_PossibleAnswers.mp3","103_What.mp3","104_PossibleAnswers.mp3","105_What.mp3","106_PossibleAnswers.mp3","107_When.mp3","108_PossibleAnswers.mp3","109_When.mp3","110_PossibleAnswers.mp3","111_When.mp3","112_PossibleAnswers.mp3","113_When.mp3","114_PossibleAnswers.mp3","115_When.mp3","116_PossibleAnswers.mp3","117_When.mp3","118_PossibleAnswers.mp3","119_When.mp3","120_PossibleAnswers.mp3","121_When.mp3","122_PossibleAnswers.mp3","123_Where.mp3","124_PossibleAnswers.mp3","125_Where.mp3","126_PossibleAnswers.mp3","127_Where.mp3","128_PossibleAnswers.mp3","129_Where.mp3","130_PossibleAnswers.mp3","131_Where.mp3","132_PossibleAnswers.mp3","133_Where.mp3","134_PossibleAnswers.mp3","135_Where.mp3","136_PossibleAnswers.mp3","137_Where.mp3","138_PossibleAnswers.mp3","139_Where.mp3","140_PossibleAnswers.mp3","141_Where.mp3","142_PossibleAnswers.mp3","143_Where.mp3","144_PossibleAnswers.mp3","145_Why.mp3","146_PossibleAnswers.mp3","147_Why.mp3","148_PossibleAnswers.mp3","149_Why.mp3","150_PossibleAnswers.mp3","151_Why.mp3","152_PossibleAnswers.mp3","153_Why.mp3","154_PossibleAnswers.mp3","155_Why.mp3","156_PossibleAnswers.mp3","157_Why.mp3","158_PossibleAnswers.mp3","159_Why.mp3","160_PossibleAnswers.mp3","161_Why.mp3","162_PossibleAnswers.mp3","163_Why.mp3","164_PossibleAnswers.mp3","165_Why.mp3","166_PossibleAnswers.mp3","167_Why.mp3","168_PossibleAnswers.mp3","169_Who.mp3","170_PossibleAnswers.mp3","171_Who.mp3","172_PossibleAnswers.mp3","173_Who.mp3","174_PossibleAnswers.mp3","175_Who.mp3","176_PossibleAnswers.mp3","177_Who.mp3","178_PossibleAnswers.mp3","179_How.mp3","180_PossibleAnswers.mp3","181_How.mp3","182_PossibleAnswers.mp3","183_How.mp3","184_PossibleAnswers.mp3","185_How.mp3","186_PossibleAnswers.mp3","187_How.mp3","188_PossibleAnswers.mp3","189_How.mp3","190_PossibleAnswers.mp3","191_How.mp3","192_PossibleAnswers.mp3","193_How.mp3","194_PossibleAnswers.mp3","195_How.mp3","196_PossibleAnswers.mp3","197_How.mp3","198_PossibleAnswers.mp3","199_How.mp3","200_PossibleAnswers.mp3","201_How.mp3","202_PossibleAnswers.mp3","203_Which.mp3","204_PossibleAnswers.mp3","205_ExercisesTitle.mp3","206_Exercise_1.mp3","207_Exercise_2.mp3","208_Exercise_3.mp3","209_Exercise_4.mp3","210_Exercise_5.mp3","211_Exercise_6.mp3","212_Exercise_7.mp3","213_Exercise_8.mp3","214_Exercise_9.mp3","215_Exercise_10.mp3","216_Exercise_11.mp3","217_Exercise_12.mp3","218_Exercise_13.mp3","219_Exercise_14.mp3","220_Exercise_15.mp3","221_Can-Could.mp3","222_PossibleAnswers.mp3","223_Can-Could.mp3","224_PossibleAnswers.mp3","225_Can-Could.mp3","226_PossibleAnswers.mp3","227_Can-Could.mp3","228_PossibleAnswers.mp3","229_Can-Could.mp3","230_PossibleAnswers.mp3","231_Can-Could.mp3","232_PossibleAnswers.mp3","233_Can-Could.mp3","234_PossibleAnswers.mp3","235_Will-Would.mp3","236_PossibleAnswers.mp3","237_Will-Would.mp3","238_PossibleAnswers.mp3","239_Will-Would.mp3","240_PossibleAnswers.mp3","241_Will-Would.mp3","242_PossibleAnswers.mp3","243_Will-Would.mp3","244_PossibleAnswers.mp3","245_Yes-No.mp3","246_PossibleAnswers.mp3","247_Yes-No.mp3","248_PossibleAnswers.mp3","249_Yes-No.mp3","250_PossibleAnswers.mp3","251_Yes-No.mp3","252_PossibleAnswers.mp3","253_Yes-No.mp3","254_PossibleAnswers.mp3","255_Yes-No.mp3","256_PossibleAnswers.mp3","257_Yes-No.mp3","258_PossibleAnswers.mp3","259_Yes-No.mp3","260_PossibleAnswers.mp3","261_Yes-No.mp3","262_PossibleAnswers.mp3","263_Yes-No.mp3","264_PossibleAnswers.mp3","265_Yes-No.mp3","266_PossibleAnswers.mp3","267_Yes-No.mp3","268_PossibleAnswers.mp3","269_Alt-Negative-Tag.mp3","270_PossibleAnswers.mp3","271_Alt-Negative-Tag.mp3","272_PossibleAnswers.mp3","273_Alt-Negative-Tag.mp3","274_PossibleAnswers.mp3","275_Alt-Negative-Tag.mp3","276_PossibleAnswers.mp3","277_Alt-Negative-Tag.mp3","278_PossibleAnswers.mp3","279_Alt-Negative-Tag.mp3","280_PossibleAnswers.mp3","281_Declarative.mp3","282_PossibleAnswers.mp3","283_Declarative.mp3","284_PossibleAnswers.mp3","285_Declarative.mp3","286_PossibleAnswers.mp3","287_Declarative.mp3","288_PossibleAnswers.mp3","289_Declarative.mp3","290_PossibleAnswers.mp3","291_Declarative.mp3","292_PossibleAnswers.mp3","293_Declarative.mp3","294_PossibleAnswers.mp3","295_Declarative.mp3","296_PossibleAnswers.mp3","297_Declarative.mp3","298_PossibleAnswers.mp3","299_Declarative.mp3","300_PossibleAnswers.mp3","301_Declarative.mp3","302_PossibleAnswers.mp3","303_Declarative.mp3","304_PossibleAnswers.mp3","305_Other.mp3","306_PossibleAnswers.mp3","307_ExercisesTitle.mp3","308_Exercise_1.mp3","309_Exercise_2.mp3","310_Exercise_3.mp3","311_Exercise_4.mp3","312_Exercise_5.mp3","313_Exercise_6.mp3","314_Exercise_7.mp3","315_Exercise_8.mp3","316_Exercise_9.mp3","317_Exercise_10.mp3","318_Exercise_11.mp3","319_Exercise_12.mp3","320_Exercise_13.mp3","321_Exercise_14.mp3","322_Exercise_15.mp3","323_Chapter-3_Title.mp3","324_KeyWords.mp3","325_KeyExpressions.mp3","326_SampleQuestions.mp3","327_KeyWords.mp3","328_KeyExpressions.mp3","329_SampleQuestions.mp3","330_KeyWords.mp3","331_KeyExpressions.mp3","332_SampleQuestions.mp3","333_KeyWords.mp3","334_KeyExpressions.mp3","335_SampleQuestions.mp3","336_KeyWords.mp3","337_KeyExpressions.mp3","338_SampleQuestions.mp3","339_KeyWords.mp3","340_KeyExpressions.mp3","341_SampleQuestions.mp3","342_KeyWords.mp3","343_KeyExpressions.mp3","344_SampleQuestions.mp3","345_ExercisesTitle.mp3","346_Exercise_1.mp3","347_Exercise_2.mp3","348_Exercise_3.mp3","349_KeyWords.mp3","350_KeyExpressions.mp3","351_SampleQuestions.mp3","352_KeyWords.mp3","353_KeyExpressions.mp3","354_SampleQuestions.mp3","355_KeyWords.mp3","356_KeyExpressions.mp3","357_SampleQuestions.mp3","358_KeyWords.mp3","359_KeyExpressions.mp3","360_SampleQuestions.mp3","361_KeyWords.mp3","362_KeyExpressions.mp3","363_SampleQuestions.mp3","364_KeyWords.mp3","365_KeyExpressions.mp3","366_SampleQuestions.mp3","367_KeyWords.mp3","368_KeyExpressions.mp3","369_SampleQuestions.mp3","370_ExercisesTitle.mp3","371_Exercise_1.mp3","372_Exercise_2.mp3","373_Exercise_3.mp3","374_Chapter-4_Title.mp3","375_KeyWords.mp3","376_KeyExpressions.mp3","377_SampleQuestions.mp3","378_KeyWords.mp3","379_KeyExpressions.mp3","380_SampleQuestions.mp3","381_KeyWords.mp3","382_KeyExpressions.mp3","383_SampleQuestions.mp3","384_KeyWords.mp3","385_KeyExpressions.mp3","386_SampleQuestions.mp3","387_KeyWords.mp3","388_KeyExpressions.mp3","389_SampleQuestions.mp3","390_ExercisesTitle.mp3","391_Exercise_1.mp3","392_Exercise_2.mp3","393_Exercise_3.mp3","394_KeyWords.mp3","395_KeyExpressions.mp3","396_SampleQuestions.mp3","397_KeyWords.mp3","398_KeyExpressions.mp3","399_SampleQuestions.mp3","400_KeyWords.mp3","401_KeyExpressions.mp3","402_SampleQuestions.mp3","403_KeyWords.mp3","404_KeyExpressions.mp3","405_SampleQuestions.mp3","406_KeyWords.mp3","407_KeyExpressions.mp3","408_SampleQuestions.mp3","409_ExercisesTitle.mp3","410_Exercise_1.mp3","411_Exercise_2.mp3","412_Exercise_3.mp3","413_Cｈａｐｔｅｒ-5_Title.mp3","414_ListeningTest_Directions.mp3","415_PART-1_Directions.mp3","416_Q-01.mp3","417_Q-02.mp3","418_Q-03.mp3","419_Q-04.mp3","420_Q-05.mp3","421_Q-06.mp3","422_Q-07.mp3","423_Q-08.mp3","424_Q-09.mp3","425_Q-10.mp3","426_PART-2_Directions.mp3","427_Q-11.mp3","428_Q-12.mp3","429_Q-13.mp3","430_Q-14.mp3","431_Q-15.mp3","432_Q-16.mp3","433_Q-17.mp3","434_Q-18.mp3","435_Q-19.mp3","436_Q-20.mp3","437_Q-21.mp3","438_Q-22.mp3","439_Q-23.mp3","440_Q-24.mp3","441_Q-25.mp3","442_Q-26.mp3","443_Q-27.mp3","444_Q-28.mp3","445_Q-29.mp3","446_Q-30.mp3","447_Q-31.mp3","448_Q-32.mp3","449_Q-33.mp3","450_Q-34.mp3","451_Q-35.mp3","452_Q-36.mp3","453_Q-37.mp3","454_Q-38.mp3","455_Q-39.mp3","456_Q-40.mp3","457_PART-3_Directions.mp3","458_Q-41-43.mp3","459_Q-44-46.mp3","460_Q-47-49.mp3","461_Q-50-52.mp3","462_Q-53-55.mp3","463_Q-56-58.mp3","464_Q-59-61.mp3","465_Q-62-64rev.mp3","466_Q-65-67.mp3","467_Q-68-70.mp3","468_PART-4_Directions.mp3","469_Q-71-73.mp3","470_Q-74-76.mp3","471_Q-77-79.mp3","472_Q-80-82.mp3","473_Q-83-85.mp3","474_Q-86-88.mp3","475_Q-89-91.mp3","476_Q-92-94.mp3","477_Q-95-97.mp3","478_Q-98-100.mp3","479_End.mp3"];
    index = 0;
    $(document).on("pageinit", "#index_page", function( event ) {
        console.log( "This page was just enhanced by jQuery Mobile!" );
    });
    $(document).ready(function(){
        console.log("hello world jqm");
        var user_name = getCookie("say_hello_username");
        $("img#top_user_thumbnail").attr("src","/say_hello/images/thumbnail_" + user_name + ".png");
        $("div#top_user_name").text(user_name);
        //audio.load();
        audio.addEventListener('ended', play_next);
        setTimeout(function(){audio.play();},100);
    });
    function play_next() {
        audio_name = $("h3#audio_name").html();
        index = parseInt(audio_name.substr(0, 3));
        next_name = toeic_list[index];
        $("h3#audio_name").html(next_name);
        au=$("#audio source");
        au.attr("src", "/say_hello/toeic_listening/toeic_keyword/mp3/" + next_name);        
        audio.load();
    }
    </script>
</head>
<body>
<div data-role="page" id="index_page" data-theme="d" data-title="评评灌灌">
    <div data-role="header" data-theme="c">
        <h2>评评灌灌</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->
    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >

        <?php
            $name = $_GET['name'];
            echo "<h3 id='audio_name'>".$name."</h3><br/>";
        ?>

        <audio id="audio" controls autoplay>
            <?php
                $name = $_GET['name'];
                echo "<source src=\"/say_hello/toeic_listening/toeic_keyword/mp3/" . $name . "\" type=\"audio/mpeg\">";
            ?>
        Your browser does not support the audio element.
        </audio>
        <br/>
        <br/>
        <button onclick='play_next()'>Next</button>
        <br/>
        <br/>
        <p><a href="#right-panel" data-role="button" data-theme="b" data-inline="true" data-mini="true" data-shadow="false">Share</a></p>
    </div><!-- /content -->
    <div data-role="panel" id="left-panel" data-theme="c" data-ajax="false">
        <ul data-role="listview">
            <li><a href="#" data-rel="close"><img id="top_user_thumbnail" /><div id="top_user_name" style="font-size:40px;text-align:center;vertical-align:middle;"></div></a></li>
            <li><a href="#" data-rel="close">首页</a></li>
            <li><a href="/say_hello/write_something.php">写点东西</a></li>
            <li><a href="/say_hello/toeic.php">Toeic</a></li>
            <li><a href="/say_hello/logout.php">退出</a></li>
        </ul>
    </div><!-- /panel -->
    <div data-role="panel" id="right-panel" data-display="overlay" data-position="right" data-theme="c">
        <ul data-role="listview" data-theme="d" data-icon="false">
            <li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
            <li data-role="list-divider">Share this page</li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Google +</a></li>
            <li><a href="#">Mail</a></li>
        </ul>
    </div><!-- /panel -->
    <div data-role="footer" data-theme="c">
        <p>Copyright &copy; 2013 Conglin Lai</p>
    </div>
</div>

</body>
</html>
