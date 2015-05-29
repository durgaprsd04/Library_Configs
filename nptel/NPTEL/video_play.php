
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NPTEL Video Repo</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<link href="js/video-js/video-js.css" rel="stylesheet">
<script src="js/video-js/video.js"></script>
<script>
  videojs.options.flash.swf = "js/video-js/video-js.swf"
</script>

    <div class="wrap">
        <div class="sidebar">
            <header>
                <div class="logo">
                    <a href="index.html" title="Mad"></a>
                </div>
                <div class="clearFloat"></div>
                <div class="search-box">
                    <form action="#">
                        <input type="text">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clearFloat"></div>
            </header>
            <div class="widget">
                <ul>
                            <li><a href="index.html">All&nbsp;Categories</a></li>
                            <li><a href="AerospaceEngineering.html">Aerospace&nbsp;Engineering</a></li>
                            <li><a href="Basiccourses(Sem1and2).html">Basic&nbsp;courses(Sem&nbsp;1&nbsp;and&nbsp;2)</a></li>
                            <li><a href="Biotechnology.html">Biotechnology</a></li>
                            <li><a href="ChemicalEngineering.html">Chemical&nbsp;Engineering</a></li>
                            <li><a href="ChemistryAndBiochemistry.html">Chemistry&nbsp;And&nbsp;Biochemistry</a></li>
                            <li><a href="CivilEngineering.html">Civil&nbsp;Engineering</a></li>
                            <li><a href="ComputerScienceAndEngineering.html">Computer&nbsp;Science&nbsp;And&nbsp;Engineering</a></li>
                            <li><a href="ElectricalEngineering.html">Electrical&nbsp;Engineering</a></li>
                            <li><a href="ElectronicsAndCommunicationEngineering.html">Electronics&nbsp;And&nbsp;Communication&nbsp;Engineering</a></li>
                            <li><a href="EngineeringDesign.html">Engineering&nbsp;Design</a></li>
                            <li><a href="HumanitiesandSocialSciences.html">Humanities&nbsp;and&nbsp;Social&nbsp;Sciences</a></li>
                            <li><a href="Management.html">Management</a></li>
                            <li><a href="Mathematics.html">Mathematics</a></li>
                            <li><a href="MechanicalEngineering.html">Mechanical&nbsp;Engineering</a></li>
                            <li><a href="MetallurgyandMaterialScience.html">Metallurgy&nbsp;and&nbsp;Material&nbsp;Science</a></li>
                            <li><a href="OceanEngineering.html">Ocean&nbsp;Engineering</a></li>
                            <li><a href="Physics.html">Physics</a></li>
                            <li><a href="TextileEngineering.html">Textile&nbsp;Engineering</a></li>
                            <li><a href="Miscellanious.html">Miscellanious</a></li>
                </ul>
            </div>
            <div class="clearFloat"></div>
        </div>
        <div class="content">
            <div class="clearFloat"></div>
            <div class="part">
                <h1><a href="#">Video Player</a></h1>
                <div class="player">
                <?php
			$videoname = htmlspecialchars($_GET['vid']);
			echo "<video id=\"example_video_1\" class=\"video-js vjs-default-skin\"
                        controls preload=\"auto\" width=\"640\" height=\"264\"
                        poster=\"http://video-js.zencoder.com/oceans-clip.png\"
                        data-setup=\'{\"example_option\":true}\'>";
                        echo "<source src=\"".$videoname."\" type=\'video/mp4\' />
                        echo "<p class=\"vjs-no-js\">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href=\"http://videojs.com/html5-video-support/\" target=\"_blank\">supports HTML5 video</a></p>";
                   	echo "</video>";


		?>

                </div>
                <h2>Other Videos</h2>


      <div class="clearFloat"></div>
            </div>
        </div>
    </div>
</body>
</html>
