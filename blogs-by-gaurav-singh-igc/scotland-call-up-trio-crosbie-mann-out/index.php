<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog202";

?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo APP_BLOGS[$ServiceId]['title']; ?> @ <?php echo APP['APP_NAME']; ?> Blogs</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <?php include __DIR__ . "/../sections/MetaHeaderTags.php"; ?>
</head>

<body class="white-version template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
    <?php include $RunningDir . "/blogs-by-gaurav-singh-igc/sections/BlogHeaderSections.php"; ?>

    <div>
        <!-- 🎯 Scotland Squad Update: Changes Ahead of Six Nations Clash Against Wales -->
        <h4>🎯 Scotland Squad Update: Changes Ahead of Six Nations Clash Against Wales</h4>

        <!-- 📅 Match Details -->
        <h5>📅 Match Details:</h5>
        <ul>
            <li><strong>Venue:</strong> British Gas Murrayfield</li>
            <li><strong>Date:</strong> Saturday, <strong>8 March</strong></li>
            <li><strong>Kick-off:</strong> <strong>16:45 GMT</strong></li>
        </ul>

        <!-- 📺 Coverage -->
        <h5>📺 Coverage:</h5>
        <ul>
            <li><strong>Watch:</strong> BBC One</li>
            <li><strong>Listen:</strong> Radio 5 Live, BBC Radio Scotland & BBC Sounds</li>
            <li><strong>Live Text Commentary & Highlights:</strong> BBC Sport website & app</li>
        </ul>

        <!-- 🏉 Scotland Calls Up Three New Players as Crosbie and Mann Drop Out -->
        <h4>🏉 Scotland Calls Up Three New Players as Crosbie and Mann Drop Out</h4>
        <p>Scotland has announced three new <strong>call-ups</strong> ahead of their upcoming
            <strong>Guinness Men's Six Nations</strong> fixture against <strong>Wales</strong>.
            <strong>Matt Currie, Nathan McBeth, and Ben Muncaster</strong> have been drafted into the squad,
            filling the void created by the injuries of <strong>Luke Crosbie</strong> and <strong>Jack Mann</strong>.
        </p>

        <!-- 👥 New Squad Members: Who Are They? -->
        <h5>👥 New Squad Members: Who Are They?</h5>

        <!-- ✔️ Matt Currie (Centre) -->
        <h6>✔️ Matt Currie (Centre)</h6>
        <ul>
            <li><strong>Recalls After Hat-Trick:</strong> Currie made a remarkable comeback by scoring a
                <strong>hat-trick</strong> for <strong>Edinburgh against Munster</strong> on <strong>Friday</strong>,
                following his recovery from a concussion sustained against <strong>Zebre</strong>.
            </li>
            <li><strong>Reason for Selection:</strong> His impressive performance and ability to break
                defensive lines made him a perfect fit for <strong>Scotland’s backline</strong>.</li>
        </ul>

        <!-- ✔️ Ben Muncaster (Back-Row) -->
        <h6>✔️ Ben Muncaster (Back-Row)</h6>
        <ul>
            <li><strong>One Cap Experience:</strong> Muncaster, who has already earned <strong>one international cap</strong>,
                demonstrated <strong>high-level performance</strong> during <strong>Edinburgh's victory against Munster</strong>.</li>
            <li><strong>Squad Support:</strong> He has been included to provide cover for the back row following
                the injuries to <strong>Crosbie</strong> and <strong>Mann</strong>.</li>
        </ul>

        <!-- ✔️ Nathan McBeth (Prop) -->
        <h6>✔️ Nathan McBeth (Prop)</h6>
        <ul>
            <li><strong>Try Scorer:</strong> McBeth, who scored a crucial <strong>try</strong> during
                <strong>Glasgow Warriors</strong> game against <strong>Ospreys</strong>, has also been included.
            </li>
            <li><strong>Front-Row Depth:</strong> His inclusion aims to strengthen the squad’s front row
                in the upcoming match.</li>
        </ul>

        <!-- ⚠️ Injury Update -->
        <h5>⚠️ Injury Update:</h5>
        <ul>
            <li><strong>Luke Crosbie:</strong> Sustained an injury during <strong>Edinburgh’s game</strong>
                on <strong>Friday</strong> and has been released for <strong>further medical assessment</strong>.</li>
            <li><strong>Jack Mann:</strong> Suffered a <strong>head injury</strong> during
                <strong>Glasgow Warriors' game</strong> and is now undergoing <strong>World Rugby’s concussion protocols</strong>.
            </li>
        </ul>

        <!-- 📉 Scotland's Current Performance -->
        <h5>📉 Scotland's Current Performance:</h5>
        <ul>
            <li><strong>Results:</strong> Scotland has faced <strong>defeats against Ireland and England</strong> after
                their <strong>opening-weekend victory against Italy</strong>.</li>
            <li><strong>Wales' Standings:</strong> Wales currently sits <strong>at the bottom of the Six Nations table</strong>
                after facing <strong>three consecutive defeats</strong>.</li>
        </ul>

        <!-- 💯 Full Scotland Squad To Face Wales -->
        <h5>💯 Full Scotland Squad To Face Wales:</h5>

        <h6>🔨 Forwards:</h6>
        <ul>
            <li>Ewan Ashman, Jamie Bhatti, Gregor Brown, Dave Cherry, Rory Darge, Jack Dempsey,
                Matt Fagerson, Zander Fagerson, Euan Ferrie, Grant Gilchrist, Jonny Gray, Patrick Harrison,
                Cameron Henderson, Will Hurd, Ewan Johnson, Nathan McBeth, Ben Muncaster, D'Arcy Rae,
                Jamie Ritchie, Pierre Schoeman, Sam Skinner, Rory Sutherland, Marshall Sykes.</li>
        </ul>

        <h6>🦁 Backs:</h6>
        <ul>
            <li>Fergus Burke, Matt Currie, Jamie Dobie, Darcy Graham, George Horne, Rory Hutchinson,
                Huw Jones, Tom Jordan, Blair Kinghorn, Stafford McDowall, Cameron Redpath,
                Arron Reed, Finn Russell, Kyle Rowe, Ollie Smith, Duhan van der Merwe, Ben White.</li>
        </ul>

        <p><strong>Note:</strong> The upcoming match against <strong>Wales</strong> will be crucial for
            <strong>Scotland</strong> to keep their Six Nations title hopes alive.
        </p>

    </div>
    <?php include $RunningDir . "/blogs-by-gaurav-singh-igc/sections/BlogFooterSections.php"; ?>
</body>

</html>