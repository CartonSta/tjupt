<?php
$ACCOUNT=array(
    'neverdelete' => '6',
    'neverdeletepacked' => '3',
    'deletepacked' => '0',
    'deleteunpacked' => '0',
    'deletenotransfer' => '0',
    'deletenotransfertwo' => '0',
    'deletepeasant' => '14',
    'psdlone' => '50',
    'psratioone' => '0.4',
    'psdltwo' => '100',
    'psratiotwo' => '0.5',
    'psdlthree' => '200',
    'psratiothree' => '0.6',
    'psdlfour' => '400',
    'psratiofour' => '0.7',
    'psdlfive' => '800',
    'psratiofive' => '0.8',
    'putime' => '4',
    'pudl' => '50',
    'puprratio' => '1.05',
    'puderatio' => '0.95',
    'eutime' => '8',
    'eudl' => '120',
    'euprratio' => '1.55',
    'euderatio' => '1.45',
    'cutime' => '15',
    'cudl' => '300',
    'cuprratio' => '2.05',
    'cuderatio' => '1.95',
    'iutime' => '25',
    'iudl' => '500',
    'iuprratio' => '2.55',
    'iuderatio' => '2.45',
    'vutime' => '40',
    'vudl' => '750',
    'vuprratio' => '3.05',
    'vuderatio' => '2.95',
    'exutime' => '60',
    'exudl' => '1024',
    'exuprratio' => '3.55',
    'exuderatio' => '3.45',
    'uutime' => '80',
    'uudl' => '1536',
    'uuprratio' => '4.05',
    'uuderatio' => '3.95',
    'nmtime' => '100',
    'nmdl' => '3072',
    'nmprratio' => '4.55',
    'nmderatio' => '4.45',
    'getInvitesByPromotion' => array(
        '2' => '0',
        '3' => '0',
        '4' => '1',
        '5' => '1',
        '6' => '1',
        '7' => '1',
        '8' => '2',
        '9' => '3',
    ),
);
$ADVERTISEMENT=array(
    'enablead' => 'yes',
    'enablenoad' => 'yes',
    'noad' => '10',
    'enablebonusnoad' => 'yes',
    'bonusnoad' => '3',
    'bonusnoadpoint' => '100',
    'bonusnoadtime' => '7',
    'adclickbonus' => '0',
);
$ATTACHMENT=array(
    'enableattach' => 'yes',
    'classone' => '0',
    'countone' => '30',
    'sizeone' => '512',
    'extone' => 'jpg, jpeg, png, gif',
    'classtwo' => '2',
    'counttwo' => '60',
    'sizetwo' => '1024',
    'exttwo' => 'torrent, zip, rar, 7z, gzip, gz',
    'classthree' => '5',
    'countthree' => '100',
    'sizethree' => '2048',
    'extthree' => 'mp3, ogg, oga, flv',
    'classfour' => '12',
    'countfour' => '500',
    'sizefour' => '10240',
    'extfour' => 'doc, xls, swf',
    'savedirectory' => './attachments',
    'httpdirectory' => 'attachments',
    'savedirectorytype' => 'monthdir',
    'thumbnailtype' => 'no',
    'thumbquality' => '80',
    'thumbwidth' => '700',
    'thumbheight' => '800',
    'watermarkpos' => 'no',
    'watermarkwidth' => '300',
    'watermarkheight' => '300',
    'watermarkquality' => '85',
    'altthumbwidth' => '180',
    'altthumbheight' => '135',
);
$AUTHORITY=array(
    'defaultclass' => '1',
    'staffmem' => '13',
    'newsmanage' => '13',
    'newfunitem' => '1',
    'funmanage' => '14',
    'sbmanage' => '13',
    'pollmanage' => '14',
    'applylink' => '2',
    'linkmanage' => '14',
    'postmanage' => '13',
    'commanage' => '13',
    'forummanage' => '14',
    'clientsmanage' => '15',
    'viewuserlist' => '2',
    'torrentmanage' => '13',
    'torrentsticky' => '13',
    'askreseed' => '2',
    'viewnfo' => '1',
    'torrentstructure' => '8',
    'sendinvite' => '4',
    'viewhistory' => '5',
    'topten' => '2',
    'log' => '11',
    'confilog' => '13',
    'userprofile' => '13',
    'torrenthistory' => '2',
    'prfmanage' => '14',
    'cruprfmanage' => '14',
    'uploadsub' => '1',
    'delownsub' => '2',
    'submanage' => '13',
    'updateextinfo' => '13',
    'viewanonymous' => '11',
    'beanonymous' => '4',
    'addoffer' => '0',
    'offermanage' => '13',
    'upload' => '2',
    'uploadspecial' => NULL,
    'movetorrent' => NULL,
    'chrmanage' => '15',
    'viewinvite' => '14',
    'buyinvite' => '4',
    'seebanned' => '13',
    'againstoffer' => '1',
    'userbar' => '2',
);
$BASIC=array(
    // todo: edit this all
    'SITENAME' => 'TJUPT',
    'BASEURL' => 'SITE_BASE_URL',
    'announce_url' => 'TRACKER_URL/announce.php',
    'mysql_host' => 'localhost:3306',
    'mysql_user' => 'MYSQL_USERNAME',
    'mysql_pass' => 'MYSQL_PASSWORD',
    'mysql_db' => 'tjupt',
);
$BONUS=array(
    'donortimes' => '2',
    'perseeding' => '0.5',
    'maxseeding' => '40',
    'tzero' => '4',
    'nzero' => '7',
    'bzero' => '130',
    'l' => '300',
    'uploadtorrent' => '10',
    'uploadsubtitle' => '5',
    'starttopic' => '1',
    'makepost' => '0.2',
    'addcomment' => '0.2',
    'pollvote' => '1',
    'offervote' => '0',
    'funboxvote' => '0.5',
    'saythanks' => '0.5',
    'receivethanks' => '1',
    'funboxreward' => '5',
    'onegbupload' => '400',
    'fivegbupload' => '1500',
    'tengbupload' => '3200',
    'hundredgbupload' => '30000',
    'ratiolimit' => '6',
    'dlamountlimit' => '50',
    'oneinvite' => '10000',
    'customtitle' => '8000',
    'custumcolor' => '12000',
    'rename' => '88888',
    'vipstatus' => '40000',
    'bonusgift' => 'yes',
    'basictax' => '15',
    'taxpercentage' => '10',
    'prolinkpoint' => '1',
    'prolinktime' => '600',
);
$CODE=array(
    'mainversion' => 'NexusPHP',
    'subversion' => 'Standard v1.5 Beta 4',
    'releasedate' => '2010-06-15',
    'website' => '<a href="https://github.com/zcqian/tjupt">https://github.com/zcqian/tjupt</a>',
);
$MAIN=array(
    'site_online' => 'yes',
    'max_torrent_size' => '10485760',
    'announce_interval' => '2100',
    'annintertwoage' => '7',
    'annintertwo' => '2700',
    'anninterthreeage' => '30',
    'anninterthree' => '3600',
    'signup_timeout' => '259200',
    'minoffervotes' => '15',
    'offervotetimeout' => '259200',
    'offeruptimeout' => '86400',
    'maxsubsize' => '10485760',
    'postsperpage' => '10',
    'topicsperpage' => '20',
    'torrentsperpage' => '50',
    'maxnewsnum' => '5',
    'max_dead_torrent_time' => '86400',
    'maxusers' => '20000',
    'torrent_dir' => 'torrents',
    'iniupload' => '0',
    'SITEEMAIL' => 'ptmaster@example.com',
    'ACCOUNTANTID' => '9999',
    'ALIPAYACCOUNT' => 'alipay@example.com',
    'PAYPALACCOUNT' => '',
    'SLOGAN' => '',
    'icplicense' => '',
    'autoclean_interval_one' => '300',
    'autoclean_interval_two' => '1200',
    'autoclean_interval_three' => '1800',
    'autoclean_interval_four' => '43200',
    'autoclean_interval_five' => '86400',
    'reportemail' => 'ptadmin@example.com',
    'invitesystem' => 'yes',
    'registration' => 'no',
    'showhotmovies' => 'no',
    'showclassicmovies' => 'no',
    'showimdbinfo' => 'yes',
    'enablenfo' => 'yes',
    'enableschool' => 'yes',
    'restrictemail' => 'no',
    'showpolls' => 'yes',
    'showstats' => 'yes',
    'showlastxtorrents' => 'no',
    'showtrackerload' => 'yes',
    'showshoutbox' => 'yes',
    'showfunbox' => 'yes',
    'showoffer' => 'yes',
    'showtest' => 'no',
    'showrequest' => 'yes',
    'sptime' => 'no',
    'showhelpbox' => 'yes',
    'enablebitbucket' => 'yes',
    'smalldescription' => 'yes',
    'altname' => NULL,
    'extforum' => 'no',
    'extforumurl' => 'http://www.cc98.org',
    'defaultlang' => 'chs',
    'defstylesheet' => '9',
    'donation' => 'no',
    'spsct' => NULL,
    'browsecat' => '4',
    'specialcat' => NULL,
    'waitsystem' => 'no',
    'maxdlsystem' => 'no',
    'bitbucket' => 'bitbucket',
    'torrentnameprefix' => '[TJUPT]',
    'showforumstats' => 'yes',
    'verification' => 'email',
    'invite_count' => '0',
    'invite_timeout' => '7',
    'seeding_leeching_time_calc_start' => '',
    'startsubid' => NULL,
    'logo' => 'https://i.loli.net/2018/07/29/5b5d7bf497a9d.jpg',
    'logo_url' => '',
);
$SECURITY=array(
    'securelogin' => 'yes',
    'securetracker' => 'yes',
    'https_announce_url' => '',
    'iv' => 'no',
    'maxip' => '6',
    'maxloginattempts' => '25',
    'changeemail' => 'no',
    'cheaterdet' => '1',
    'nodetect' => '11',
);
$SMTP=array(
    'smtptype' => 'external',
    'emailnotify' => 'no',
    'smtpaddress' => 'smtp.example.com',
    'smtpport' => '587',
    'accountname' => 'nexusphp@example.com',
    'accountpassword' => 'PASSWORD',
    'exception_domain' => '',
    'smtpaddress2' => 'smtp.example.com',
    'smtpport2' => '587',
    'accountname2' => 'nexusphp@example.com',
    'accountpassword2' => 'PASSWORD',
);
$TORRENT=array(
    'prorules' => 'no',
    'randomhalfleech' => '0',
    'randomfree' => '2',
    'randomtwoup' => '5',
    'randomtwoupfree' => '1',
    'randomtwouphalfdown' => '0',
    'randomthirtypercentdown' => '2',
    'randomhalfleechforever' => '0',
    'randomfreeforever' => '0',
    'randomtwoupforever' => '0',
    'randomtwoupfreeforever' => '0',
    'randomtwouphalfdownforever' => '0',
    'randomthirtypercentdownforever' => '0',
    'largesize' => '50',
    'largepro' => '8',
    'middlesize' => '0',
    'middlepro' => '1',
    'expirehalfleech' => '2',
    'expirefree' => '2',
    'expiretwoup' => '2',
    'expiretwoupfree' => '2',
    'expiretwouphalfleech' => '2',
    'expirenormal' => '0',
    'hotdays' => '5',
    'hotseeder' => '100',
    'halfleechbecome' => '1',
    'freebecome' => '1',
    'twoupbecome' => '1',
    'twoupfreebecome' => '1',
    'twouphalfleechbecome' => '1',
    'normalbecome' => '1',
    'thirtypercentleechbecome' => '1',
    'uploaderdouble' => '1.5',
    'deldeadtorrent' => '0',
    'expirethirtypercentleech' => '2',
);
$TWEAK=array(
    'where' => 'no',
    'iplog1' => 'yes',
    'bonus' => 'enable',
    'datefounded' => '2010-05-17',
    'enablelocation' => 'no',
    'titlekeywords' => '',
    'metakeywords' => 'PT 校园 资源',
    'metadescription' => 'TJUPT是天津市首个、全国前列的校园Private Tracker，建立于2010年，由天津大学信网协会和天外天共同开发的，旨在为大家建立一个更好的资源共享环境，提高资源水准。',
    'enablesqldebug' => 'yes',
    'sqldebug' => '15',
    'cssdate' => '',
    'enabletooltip' => 'yes',
    'prolinkimg' => 'pic/prolink.png',
    'analyticscode' => '',
);
$DONATION=array(
    'enabled' => 'yes',
    // todo: edit this
    'clientid' => 'YOUZAN_CLIENT_ID',
    'clientsecret' => 'YOUZAN_CLIENT_SECRET_KEY',
    'kdtid' => 'YOUZAN_KDT_ID',
    'rewardzero' => '1000x,0,0,0,0',
    'amountone' => '10',
    'rewardone' => '10000,10,0,0,0',
    'amounttwo' => '20',
    'rewardtwo' => '23333,25,1,0,0',
    'amountthree' => '50',
    'rewardthree' => '56789,50,2,0,0',
    'amountfour' => '66',
    'rewardfour' => '66666,100,2,0,0',
    'amountfive' => '88',
    'rewardfive' => '88888,200,3,0,0',
    'amountsix' => '100',
    'rewardsix' => '100000,500,3,1,0',
    'amountseven' => '200',
    'rewardseven' => '0,0,5,1,1',
    'amounteight' => '0',
    'rewardeight' => '0,0,0,0,0',
    'amountnine' => '0',
    'rewardnine' => '0,0,0,0,0',
);
