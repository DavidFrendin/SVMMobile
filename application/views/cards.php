<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>SVM Mobile</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="http://svm.hellforge.net/assets/js/jqm.autoComplete-1.5.0-min.js"></script>
</head> 

<body> 

<div data-role="page" id="cardsPage">

	<div data-role="header">
		<a href="<?php echo site_url('menu'); ?>" data-icon="back" data-iconpos="notext" data-rel="back" class="ui-btn-left"></a>
		<h1>SVM Mobile</h1>
	</div><!-- /header -->

	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>
	
	<div data-role="header" data-theme="c">
		<h2>Sök kort</h2>
	</div><!-- /header -->

	<div data-role="content">	

		<div class="content-primary">
		
			<div data-role="fieldcontain">
				<label for="cardname">Kortnamn:</label>
				<input type="text" name="cardname" id="cardname" value="" />
			</div>
			<ul id="suggestions" data-role="listview" data-inset="true"></ul>
			<button type="submit">Sök</button>
		</div>
			
	</div><!-- /content -->

	<div data-role="header" data-theme="c">
		<h2>Expansioner</h2>
	</div><!-- /header -->
	
	<div data-role="content">

		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Standard</h2></li>
			<li data-role="list-divider">Innistrad-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Innistrad'); ?>"><img src="http://www.svenskamagic.com/bilder/innistrad.gif" alt="Innistrad" class="ui-li-icon"> Innistrad</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Dark Ascension'); ?>"><img src="http://www.svenskamagic.com/dka.gif" alt="Dark Ascension" class="ui-li-icon"> Dark Ascension</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Avacyn Restored'); ?>"><img src="http://www.svenskamagic.com/avr.gif" alt="Avacyn Restored" class="ui-li-icon"> Avacyn Restored</a></li>
			
			<li data-role="list-divider">Return to Ravnica-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Return to Ravnica'); ?>"><img src="http://www.svenskamagic.com/rtr.gif" alt="Dark Ascension" class="ui-li-icon"> Return to Ravnica</a></li>
			
			<li data-role="list-divider">Bas-set</li>
			<li><a href="<?php echo site_url('cards/expansion/Magic 2013'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-m13.gif" alt="Dark Ascension" class="ui-li-icon"> Magic 2013</a></li>
		</ul>

		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Extended</h2><p>Inkl. ovan</p></li>
			<li data-role="list-divider">Scars of Mirrodin-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Scars of Mirrodin'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Scars.gif" alt="Dark Ascension" class="ui-li-icon"> Scars of Mirrodin</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Mirrodin Besieged'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-MBS.gif" alt="Dark Ascension" class="ui-li-icon"> Mirrodin Besieged</a></li>
			<li><a href="<?php echo site_url('cards/expansion/New Phyrexia'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Nph.gif" alt="Dark Ascension" class="ui-li-icon"> New Phyrexia</a></li>
			
			<li data-role="list-divider">Zendikar-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Zendikar'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Zendikar.gif" alt="Dark Ascension" class="ui-li-icon"> Zendikar</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Worldwake'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Worldwake.gif" alt="Dark Ascension" class="ui-li-icon"> Worldwake</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Rise of the Eldrazi'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-RiseOfEldrazi.gif" alt="Dark Ascension" class="ui-li-icon"> Rise of the Eldrazi</a></li>
			
			<li data-role="list-divider">Basset</li>
			<li><a href="<?php echo site_url('cards/expansion/Magic 2012'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-M12.gif" alt="Dark Ascension" class="ui-li-icon"> Magic 2012</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Magic 2011'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-M2011.gif" alt="Dark Ascension" class="ui-li-icon"> Magic 2011</a></li>
		</ul>

		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Modern</h2><p>Inkl. ovan</p></li>
			<li data-role="list-divider">Shards of Alara-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Shards of Alara'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-ShardsofAlara.gif" alt="Dark Ascension" class="ui-li-icon"> Shards of Alara</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Conflux'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Conflux.gif" alt="Dark Ascension" class="ui-li-icon"> Conflux</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Alara Reborn'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-AlaraReborn.gif" alt="Dark Ascension" class="ui-li-icon"> Alara Reborn</a></li>
			
			<li data-role="list-divider">Lorwyn-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Lorwyn'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Lorwyn.gif" alt="Dark Ascension" class="ui-li-icon"> Lorwyn</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Morningtide'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Morningtide.gif" alt="Dark Ascension" class="ui-li-icon"> Morningtide</a></li>

			<li data-role="list-divider">Shadowmoor-block</li>			
			<li><a href="<?php echo site_url('cards/expansion/Shadowmoor'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Shadowmoor.gif" alt="Dark Ascension" class="ui-li-icon"> Shadowmoor</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Eventide'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Eventide.gif" alt="Dark Ascension" class="ui-li-icon"> Eventide</a></li>
			
			<li data-role="list-divider">Time Spiral-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Time Spiral'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-TimeSpiral.gif" alt="Dark Ascension" class="ui-li-icon"> Time Spiral</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Timeshifted'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-TimeShifted.gif" alt="Dark Ascension" class="ui-li-icon"> Timeshifted</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Planar Chaos'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-PlanarChaos.gif" alt="Dark Ascension" class="ui-li-icon"> Planar Chaos</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Future Sight'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-FutureSight.gif" alt="Dark Ascension" class="ui-li-icon"> Future Sight</a></li>
			
			<li data-role="list-divider">Ravnica-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Ravnica'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Ravnica.gif" alt="Dark Ascension" class="ui-li-icon"> Ravnica</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Guildpact'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Guildpact.gif" alt="Dark Ascension" class="ui-li-icon"> Guildpact</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Dissension'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Dissension.gif" alt="Dark Ascension" class="ui-li-icon"> Dissension</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Coldsnap'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Coldsnap.gif" alt="Dark Ascension" class="ui-li-icon"> Coldsnap</a></li>
			
			<li data-role="list-divider">Kamigawa-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Champions of Kamigawa'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-cok.gif" alt="Dark Ascension" class="ui-li-icon"> Champions of Kamigawa</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Betrayers of Kamigawa'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-bok.gif" alt="Dark Ascension" class="ui-li-icon"> Betrayers of Kamigawa</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Saviors of Kamigawa'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-sok.gif" alt="Dark Ascension" class="ui-li-icon"> Saviors of Kamigawa</a></li>
			
			<li data-role="list-divider">Mirrodin-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Mirrodin'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Mirrodin.gif" alt="Dark Ascension" class="ui-li-icon"> Mirrodin</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Darksteel'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Darksteel.gif" alt="Dark Ascension" class="ui-li-icon"> Darksteel</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Fifth Dawn'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-FifthDawn.gif" alt="Dark Ascension" class="ui-li-icon"> Fifth Dawn</a></li>
			
			<li data-role="list-divider">Basset</li>
			<li><a href="<?php echo site_url('cards/expansion/Magic 2010'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-M2010.gif" alt="Dark Ascension" class="ui-li-icon"> Magic 2010</a></li>
			<li><a href="<?php echo site_url('cards/expansion/10th Edition'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-10thEdition.gif" alt="Dark Ascension" class="ui-li-icon"> 10th Edition</a></li>
			<li><a href="<?php echo site_url('cards/expansion/9th Edition'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-9thEdition.gif" alt="Dark Ascension" class="ui-li-icon"> 9th Edition</a></li>
			<li><a href="<?php echo site_url('cards/expansion/8th Edition'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-8thEdition.gif" alt="Dark Ascension" class="ui-li-icon"> 8th Edition</a></li>
		</ul>
		
		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Vintage & legacy</h2><p>Inkl. ovan</p></li>
			<li data-role="list-divider">Onslaught-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Onslaught'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Onslaught.gif" alt="Onslaught" class="ui-li-icon"> Onslaught</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Legions'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Legions.gif" alt="Legions" class="ui-li-icon"> Legions</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Scourge'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Scourge.gif" alt="Scourge" class="ui-li-icon"> Scourge</a></li>
			
			<li data-role="list-divider">Odyssey-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Odyssey'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Odyssey.gif" alt="Odyssey" class="ui-li-icon"> Odyssey</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Torment'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Torment.gif" alt="Torment" class="ui-li-icon"> Torment</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Judgment'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Judgment.gif" alt="Judgment" class="ui-li-icon"> Judgment</a></li>

			<li data-role="list-divider">Urza-block</li>			
			<li><a href="<?php echo site_url('cards/expansion/Urza\'s Saga'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-UrzasSaga.gif" alt="Urza's Saga" class="ui-li-icon"> Urza's Saga</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Urza\'s Legacy'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-UrzasLegacy.gif" alt="Urza's Legacy" class="ui-li-icon"> Urza's Legacy</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Urza\'s Destiny'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-UrzasDestiny.gif" alt="Urza's Destiny" class="ui-li-icon"> Urza's Destiny</a></li>
			
			<li data-role="list-divider">Invasion-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Invasion'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Invasion.gif" alt="Invasion" class="ui-li-icon"> Invasion</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Planeshift'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Planeshift.gif" alt="Planeshift" class="ui-li-icon"> Planeshift</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Apocalypse'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Apocalypse.gif" alt="Apocalypse" class="ui-li-icon"> Apocalypse</a></li>
			
			<li data-role="list-divider">Masques-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Mercadian Masques'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-MercadianMasques.gif" alt="Mercadian Masques" class="ui-li-icon"> Mercadian Masques</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Nemesis'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Nemesis.gif" alt="Nemesis" class="ui-li-icon"> Nemesis</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Prophecy'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Prophecy.gif" alt="Prophecy" class="ui-li-icon"> Prophecy</a></li>
			
			<li data-role="list-divider">Tempest-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Tempest'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Tempest.gif" alt="Tempest" class="ui-li-icon"> Tempest</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Stronghold'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Stronghold.gif" alt="Stronghold" class="ui-li-icon"> Stronghold</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Exodus'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Exodus.gif" alt="Exodus" class="ui-li-icon"> Exodus</a></li>
			
			<li data-role="list-divider">Mirage-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Mirage'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Mirage.gif" alt="Mirage" class="ui-li-icon"> Mirage</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Visions'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Visions.gif" alt="Visions" class="ui-li-icon"> Visions</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Weatherlight'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Weatherlight.gif" alt="Weatherlight" class="ui-li-icon"> Weatherlight</a></li>
			
			<li data-role="list-divider">Ice Age-block</li>
			<li><a href="<?php echo site_url('cards/expansion/Ice Age'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-IceAge.gif" alt="Ice Age" class="ui-li-icon"> Ice Age</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Alliances'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Alliances.gif" alt="Alliances" class="ui-li-icon"> Alliances</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Coldsnap'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Coldsnap.gif" alt="Coldsnap" class="ui-li-icon"> Coldsnap</a></li>

			<li data-role="list-divider">Tidiga expansioner</li>
			<li><a href="<?php echo site_url('cards/expansion/Arabian Nights'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-ArabianNights.gif" alt="Arabian Nights" class="ui-li-icon"> Arabian Nights</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Antiquities'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Antiquities.gif" alt="Antiquities" class="ui-li-icon"> Antiquities</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Legends'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Legends.gif" alt="Legends" class="ui-li-icon"> Legends</a></li>
			<li><a href="<?php echo site_url('cards/expansion/The Dark'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-TheDark.gif" alt="The Dark" class="ui-li-icon"> The Dark</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Fallen Empires'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-FallenEmpires.gif" alt="Fallen Empires" class="ui-li-icon"> Fallen Empires</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Homelands'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Homelands.gif" alt="Homelands" class="ui-li-icon"> Homelands</a></li>

			<li data-role="list-divider">Basset</li>
			<li><a href="<?php echo site_url('cards/expansion/Alpha'); ?>">Alpha</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Beta'); ?>">Beta</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Unlimited'); ?>">Unlimited</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Revised'); ?>">Revised</a></li>
			<li><a href="<?php echo site_url('cards/expansion/FBB Revised'); ?>">Revised (FBB)</a></li>
			<li><a href="<?php echo site_url('cards/expansion/4th Edition'); ?>">4th Edition</a></li>
			<li><a href="<?php echo site_url('cards/expansion/FBB 4th Edition'); ?>">4th Edition (FBB)</a></li>
			<li><a href="<?php echo site_url('cards/expansion/5th Edition'); ?>">5th Edition</a></li>
			<li><a href="<?php echo site_url('cards/expansion/6th Edition'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-6thEdition.gif" alt="6th Edition" class="ui-li-icon"> 6th Edition</a></li>
			<li><a href="<?php echo site_url('cards/expansion/7th Edition'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-7thEdition.gif" alt="7th Edition" class="ui-li-icon"> 7th Edition</a></li>

			<li data-role="list-divider">Portal & starter</li>
			<li><a href="<?php echo site_url('cards/expansion/Portal'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Portal.gif" alt="Portal" class="ui-li-icon"> Portal</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Portal Second Age'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Portal2.gif" alt="Portal Second Age" class="ui-li-icon"> Portal Second Age</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Portal Three Kingdoms'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Portal3.gif" alt="Portal Three Kingdoms" class="ui-li-icon"> Portal Three Kingdoms</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Starter 1999'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Starter1999.gif" alt="Starter 1999" class="ui-li-icon"> Starter 1999</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Starter 2000'); ?>">Starter 2000</a></li>
		</ul>
		
		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Övriga</h2></li>
			<li data-role="list-divider">Duel decks</li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Izzet vs Golgari'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-IzzetvsGolgari.gif" alt="Duel Decks: Izzet vs Golgari" class="ui-li-icon"> Duel Decks: Izzet vs Golgari</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Venser vs Koth'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-VenservsKoth.gif" alt="Duel Decks: Venser vs Koth" class="ui-li-icon"> Duel Decks: Venser vs Koth</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Ajani vs Nicol Bolas'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-AjanivsBolas.gif" alt="Duel Decks: Ajani vs Nicol Bolas" class="ui-li-icon"> Duel Decks: Ajani vs Nicol Bolas</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Knights vs Dragons'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-KvsD.gif" alt="Duel Decks: Knights vs Dragons" class="ui-li-icon"> Duel Decks: Knights vs Dragons</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Elspeth vs Tezzeret'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-ElspethvsTezzeret.gif" alt="Duel Decks: Elspeth vs Tezzeret" class="ui-li-icon"> Duel Decks: Elspeth vs Tezzeret</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Phyrexia vs The Coalition'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-PvsC.gif" alt="Duel Decks: Phyrexia vs The Coalition" class="ui-li-icon"> Duel Decks: Phyrexia vs The Coalition</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Garruk vs Liliana'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-GarrukvsLiliana.gif" alt="Duel Decks: Garruk vs Liliana" class="ui-li-icon"> Duel Decks: Garruk vs Liliana</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Elves vs Goblins'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-ElvesvsGoblins.gif" alt="Duel Decks: Elves vs Goblins" class="ui-li-icon"> Duel Decks: Elves vs Goblins</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Jace vs Chandra'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-JaceVsChandra.gif" alt="Duel Decks: Jace vs Chandra" class="ui-li-icon"> Duel Decks: Jace vs Chandra</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duel Decks: Divine vs Demonic'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-DvD.gif" alt="Duel Decks: Divine vs Demonic" class="ui-li-icon"> Duel Decks: Divine vs Demonic</a></li>
			<li data-role="list-divider">Premium decks</li>
			<li><a href="<?php echo site_url('cards/expansion/Premium Decks - Slivers'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Slivers.gif" alt="Premium Decks - Slivers" class="ui-li-icon"> Premium Decks - Slivers</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Premium Decks - Fire & Lightning'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-FaL.gif" alt="Premium Decks - Fire & Lightning" class="ui-li-icon"> Premium Decks - Fire & Lightning</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Premium Decks - Graveborn'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Graveborn.gif" alt="Premium Decks - Graveborn" class="ui-li-icon"> Premium Decks - Graveborn</a></li>
			<li data-role="list-divider">From the vault</li>
			<li><a href="<?php echo site_url('cards/expansion/From the Vault: Dragons'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Dragons.gif" alt="From the Vault: Dragons" class="ui-li-icon"> From the Vault: Dragons</a></li>
			<li><a href="<?php echo site_url('cards/expansion/From the Vault: Exiled'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-FtVExiled.gif" alt="From the Vault: Exiled" class="ui-li-icon"> From the Vault: Exiled</a></li>
			<li><a href="<?php echo site_url('cards/expansion/From the Vault: Relics'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Relics.jpg" alt="From the Vault: Relics" class="ui-li-icon"> From the Vault: Relics</a></li>
			<li><a href="<?php echo site_url('cards/expansion/From the Vault: Legends'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-FtVLegends.gif" alt="From the Vault: Legends" class="ui-li-icon"> From the Vault: Legends</a></li>
			<li><a href="<?php echo site_url('cards/expansion/From the Vault: Realms'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Realms.gif" alt="From the Vault: Realms" class="ui-li-icon"> From the Vault: Realms</a></li>
			<li data-role="list-divider">Övriga</li>
			<li><a href="<?php echo site_url('cards/expansion/Deckmasters'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Deckmasters.gif" alt="Deckmasters" class="ui-li-icon"> Deckmasters</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Beatdown'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Beatdown.gif" alt="Beatdown" class="ui-li-icon"> Beatdown</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Archenemy'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Archenemy.gif" alt="Archenemy" class="ui-li-icon"> Archenemy</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Duels of the Planeswalkers'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-DotP.gif" alt="Duels of the Planeswalkers" class="ui-li-icon"> Duels of the Planeswalkers</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Planechase 2012'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-PC2012.gif" alt="Planechase 2012" class="ui-li-icon"> Planechase 2012</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Planechase'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Planechase.gif" alt="Planechase" class="ui-li-icon"> Planechase</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Commander\'s Arsenal'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-CommandersArsenal.gif" alt="Commander's Arsenal" class="ui-li-icon"> Commander's Arsenal</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Commander'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Commander.gif" alt="Commander" class="ui-li-icon"> Commander</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Coldsnap Theme Decks'); ?>">Coldsnap Theme Decks</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Anthologies'); ?>">Anthologies</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Battle Royale'); ?>">Battle Royale</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Renaissance'); ?>">Renaissance</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Chronicles'); ?>">Chronicles</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Introductory Two-Player Set'); ?>">Introductory Two-Player Set</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Vanguard'); ?>">Vanguard</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Oversize Cards'); ?>">Oversize Cards</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Summer Magic'); ?>">Summer Magic</a></li>
		</ul>

		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Promos</h2></li>
			<li><a href="<?php echo site_url('cards/expansion/Release'); ?>">Release-kort</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Prerelease'); ?>">Prerelease-kort</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Friday Night Magic Promos'); ?>">Friday Night Magic</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Wizards Play Network'); ?>">Wizards Play Network</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Gateway'); ?>">Gateway</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Game Day Promos'); ?>">Game Day</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Buy-a-box Promos'); ?>">Buy-a-box Promos</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Judge Rewards'); ?>">Judge Rewards</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Player Rewards'); ?>">Player Rewards</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Reward Tokens'); ?>">Player Rewards - Tokens</a></li>
			<li>>GP/PT Promos</li>
			<li><a href="<?php echo site_url('cards/expansion/Duels of the Planeswalkers Promos'); ?>">Duels of the Planeswalkers Promos</a></li>
			<li>Walmart/Target Promos</li>
			<li>Magazine/Novel Promos</li>
			<li><a href="<?php echo site_url('cards/expansion/Arena League'); ?>">Arena League</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Promotional'); ?>">Promotional</a></li>
			<li>States/Champs</li>
			<li><a href="<?php echo site_url('cards/expansion/Junior Super Series'); ?>">Junior Super Series</a></li>
			<li><a href="<?php echo site_url('cards/expansion/European Lands'); ?>">European Lands</a></li>
			<li><a href="<?php echo site_url('cards/expansion/APAC Lands'); ?>">APAC Lands</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Guru Lands'); ?>">Guru Lands</a></li>
			<li><a href="<?php echo site_url('cards/expansion/MPS'); ?>">MPS</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Happy Holidays Promos'); ?>">Happy Holidays Promos</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Specialare'); ?>">Specialare</a></li>
		</ul>

		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Ej legala</h2></li>
			<li><a href="<?php echo site_url('cards/expansion/Collectors\' Edition'); ?>">Collectors' Edition</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Unglued'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Unglued.gif" alt="Unglued" class="ui-li-icon"> Unglued</a></li>
			<li><a href="<?php echo site_url('cards/expansion/Unhinged'); ?>"><img src="http://www.svenskamagic.com/bilder/expsymboler/msym-Unhinged.gif" alt="Unhinged" class="ui-li-icon"> Unhinged</a></li>
		</ul>
		
	</div>
	
		<script type="text/javascript">

		$( document ).delegate("#cardsPage", "pagebeforecreate", function() {
			$("#cardname").autocomplete({
				target: $('#suggestions'),
				source: '<?php echo site_url('api/searchcardname'); ?>/',
				link: '<?php echo site_url('cards/view'); ?>/',
				minLength: 3
			});

		});
	</script>

	
</div><!-- /page -->

</body>
</html>