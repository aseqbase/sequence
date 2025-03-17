<?php
class Information extends InformationBase{
	public $Owner = "MiMFa";
	public $FullOwner = "Minimal Members Factory";
	public $Product = "aseqbase";
	public $FullProduct = "aseqbase";
	public $Name = "aseqbase";
	public $FullName = "MiMFa aseqbase";
	public $Slogan = "<u>a seq</u>uence-<u>base</u>d framework";
	public $FullSlogan = "Develop websites by <u>a seq</u>uence-<u>base</u>d framework";
	public $Description = "An original, safe, very flexible, and innovative framework for web developments!";
	public $FullDescription = "A special framework for web development called \"aseqbase\" (a sequence-based framework) has been developed to implement safe, flexible, fast, and strong pure websites based on that, since 2018 so far.";

	public $Path = "https://aseqbase.ir";
	public $DownloadPath = "https://github.com/aseqbase/aseqbase";
	public $Location = null;

	public $KeyWords = array("MiMFa aseqbase Framework", "MiMFa", "aseqbase", "Web Development", "Development", "Web Framework", "Website", "Framework");

	public $MainMenus = array(
		array("Name" =>"HOME","Path"=>"/home","Image" =>"home","Attributes"=> "class='menu-link'"),
		array("Name" =>"GIT","Path"=>"http://github.com/mimfa/aseqbase","Image" =>"shopping-bag","Attributes"=> "class='menu-link'"),
		array("Name" =>"FORUM","Path"=>"https://github.com/aseqbase/aseqbase/issues","Image" =>"comment","Attributes"=> "class='menu-link'"),
		array("Name" =>"PRODUCTS","Path"=>"http://github.com/mimfa","Image" =>"clone", "Attributes"=>"class='menu-link'"),
		array("Name" =>"ABOUT","Path"=>"/about","Image" =>"","Attributes"=> "class='menu-link'")
		);

	public $Shortcuts = array(
		array("Name" =>"Menu","Path"=>"","Image" =>"bars", "Attributes"=>"onclick='viewSideMenu()'"),
		array("Name" =>"Market","Path"=>"#embed","Image" =>"shopping-bag","Attributes"=> "class='embed-link' onclick='viewEmbed(\"https://github.com/aseqbase/aseqbase\",\"fade\"); viewSideMenu(false);'"),
		array("Name" =>"Home","Path"=>"#internal","Image" =>"home","Attributes"=> "class='internal-link' onclick='viewInternal(\"home\",\"fade\"); viewSideMenu(false);'"),
		array("Name" =>"Products","Path"=>"#internal","Image" =>"clone", "Attributes"=>"class='internal-link' onclick='viewInternal(\"https://github.com/mimfa\",\"fade\"); viewSideMenu(false);'"),
		array("Name" =>"Chat","Path"=>"#internal","Image" =>"comment","Attributes"=> "class='internal-link' onclick='viewInternal(\"https://github.com/aseqbase/aseqbase/issues\",\"fade\"); viewSideMenu(false);'")
		);

	public $Services = array(
		array("Name" =>"MiMFa Collection","Description" =>"<p class='md-hide'>A special framework for web development called \"aseqbase\" (a sequence-based framework) has been developed to implement safe, flexible, fast, and strong pure websites based on that, since 2018 so far.</p>","Image" =>"/asset/icon/amplifier.png", "More"=>"<a class='btn' href='/about'>MORE</a>"),
		array("Name" =>"OUR TARGET","Description" =>"<p class='md-hide'>Develop websites by <u>a seq</u>uence-<u>base</u>d framework</p><p class='md-hide'>The privilege of using each of these graphic documents can be provided as NFT.</p>","Image" =>"/asset/icon/target.png", "More"=>"<a class='btn' href='/about'>MORE</a>"),
		array("Name" =>"WHAT IS WEB FRAMEWORK","Description" =>"<p class='md-hide'>A web development framework is a set of resources and tools for software developers to build and manage web applications, web services and websites.</p>","Image" =>"/asset/icon/coach.png", "More"=>"<a class=\"btn\" onclick=\"viewExternal('https://www.techtarget.com/searchcontentmanagement/definition/web-development-framework-WDF#:~:text=A%20web%20development%20framework%20is,applications%2C%20web%20services%20and%20websites.','fade');\" data-target=\".page\" href=\"#external\">READ ABOUT NFT</a>")
		);

	public $Contacts = array(
		array("Name" =>"Instagram","Path"=>"/?page=https://www.instagram.com/aseqbase","Icon"=> "fa fa-instagram"),
		array("Name" =>"Telegram","Path"=>"https://t.me/aseqbase","Icon"=> "fa fa-telegram"),
		array("Name" =>"Email","Path"=>"mailto:aseqbase@mimfa.net","Icon"=> "fa fa-envelope"),
		array("Name" =>"Github","Path"=>"http://github.com/mimfa","Icon"=> "fa fa-github"),
		array("Name" =>"Forum","Path"=>"/chat","Image" =>"comment","Icon"=> "fa fa-comments")
	);
}
?>
