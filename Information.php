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
		array("Name"=>"HOME","Link"=>"/home","Image"=>"/asset/symbol/home.png","Attributes"=> "class='menu-link'"),
		array("Name"=>"GIT","Link"=>"http://github.com/mimfa/aseqbase","Image"=>"/asset/symbol/market.png","Attributes"=> "class='menu-link'"),
		array("Name"=>"FORUM","Link"=>"https://github.com/aseqbase/aseqbase/issues","Image"=>"/asset/symbol/chat.png","Attributes"=> "class='menu-link'"),
		array("Name"=>"PRODUCTS","Link"=>"http://github.com/mimfa","Image"=>"/asset/symbol/product.png", "Attributes"=>"class='menu-link'"),
		array("Name"=>"ABOUT","Link"=>"/about","Image"=>"","Attributes"=> "class='menu-link'")
		);

	public $Shortcuts = array(
		array("Name"=>"Menu","Link"=>"","Image"=>"/asset/symbol/menu.png", "Attributes"=>"onclick='viewSideMenu()'"),
		array("Name"=>"Market","Link"=>"#embed","Image"=>"/asset/symbol/market.png","Attributes"=> "class='embed-link' onclick='viewEmbed(\"https://github.com/aseqbase/aseqbase\",\"fade\"); viewSideMenu(false);'"),
		array("Name"=>"Home","Link"=>"#internal","Image"=>"/asset/symbol/home.png","Attributes"=> "class='internal-link' onclick='viewInternal(\"home\",\"fade\"); viewSideMenu(false);'"),
		array("Name"=>"Products","Link"=>"#internal","Image"=>"/asset/symbol/product.png", "Attributes"=>"class='internal-link' onclick='viewInternal(\"https://github.com/mimfa\",\"fade\"); viewSideMenu(false);'"),
		array("Name"=>"Chat","Link"=>"#internal","Image"=>"/asset/symbol/chat.png","Attributes"=> "class='internal-link' onclick='viewInternal(\"https://github.com/aseqbase/aseqbase/issues\",\"fade\"); viewSideMenu(false);'")
		);

	public $Services = array(
		array("Name"=>"MiMFa Collection","Description"=>"<p class='md-hide'>A special framework for web development called \"aseqbase\" (a sequence-based framework) has been developed to implement safe, flexible, fast, and strong pure websites based on that, since 2018 so far.</p>","Image"=>"/asset/icon/amplifier.png", "More"=>"<a class='btn' href='/about'>MORE</a>"),
		array("Name"=>"OUR TARGET","Description"=>"<p class='md-hide'>Develop websites by <u>a seq</u>uence-<u>base</u>d framework</p><p class='md-hide'>The privilege of using each of these graphic documents can be provided as NFT.</p>","Image"=>"/asset/icon/target.png", "More"=>"<a class='btn' href='/about'>MORE</a>"),
		array("Name"=>"WHAT IS WEB FRAMEWORK","Description"=>"<p class='md-hide'>A web development framework is a set of resources and tools for software developers to build and manage web applications, web services and websites.</p>","Image"=>"/asset/icon/coach.png", "More"=>"<a class=\"btn\" onclick=\"viewExternal('https://www.techtarget.com/searchcontentmanagement/definition/web-development-framework-WDF#:~:text=A%20web%20development%20framework%20is,applications%2C%20web%20services%20and%20websites.','fade');\" data-target=\".page\" href=\"#external\">READ ABOUT NFT</a>")
		);

	public $Contacts = array(
		array("Name"=>"Instagram","Link"=>"/?page=https://www.instagram.com/aseqbase","Icon"=> "fa fa-instagram"),
		array("Name"=>"Telegram","Link"=>"https://t.me/aseqbase","Icon"=> "fa fa-telegram"),
		array("Name"=>"Email","Link"=>"mailto:aseqbase@mimfa.net","Icon"=> "fa fa-envelope"),
		array("Name"=>"Github","Link"=>"http://github.com/mimfa","Icon"=> "fa fa-github"),
		array("Name"=>"Forum","Link"=>"/chat","Image"=>"/asset/symbol/chat.png","Icon"=> "fa fa-comments")
	);
}
?>
