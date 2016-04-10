<?php

namespace pocketmorph;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmorph\morph\manager\MorphManager;
use pocketmine\entity\Entity;
use pocketmorph\morph\MorphCow;
use pocketmorph\morph\MorphCreeper;
use pocketmorph\morph\MorphBat;
use pocketmorph\morph\MorphSheep;
use pocketmorph\morph\MorphPigZombie;
use pocketmorph\morph\MorphGhast;
use pocketmorph\morph\MorphBlaze;
use pocketmorph\morph\MorphIronGolem;
use pocketmorph\morph\MorphSnowman;
use pocketmorph\morph\MorphOcelot;
use pocketmorph\morph\MorphZombieVillager;
use pocketmorph\morph\MorphVillager;
use pocketmorph\morph\MorphZombie;
use pocketmorph\morph\MorphSquid;
use pocketmorph\morph\MorphSpider;
use pocketmorph\morph\MorphPig;
use pocketmorph\morph\MorphMooshroom;
use pocketmorph\morph\MorphWolf;
use pocketmorph\morph\MorphMagmaCube;
use pocketmorph\morph\MorphSilverfish;
use pocketmorph\morph\MorphSkeleton;
use pocketmorph\morph\MorphSlime;
use pocketmorph\morph\MorphChicken;
use pocketmorph\morph\MorphEnderman;
use pocketmorph\morph\MorphCaveSpider;
use pocketmorph\command\Commands;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class PocketMorph extends PluginBase {
	
	public $morphs = [];
	
	public function onEnable() {	
		     
		Entity::registerEntity(MorphCreeper::class, true);
	        Entity::registerEntity(MorphBat::class, true);
	        Entity::registerEntity(MorphSheep::class, true);
	        Entity::registerEntity(MorphPigZombie::class, true);
	        Entity::registerEntity(MorphGhast::class, true);
	        Entity::registerEntity(MorphBlaze::class, true);
	        Entity::registerEntity(MorphIronGolem::class, true);
	        Entity::registerEntity(MorphSnowman::class, true);
	        Entity::registerEntity(MorphOcelot::class, true);
	        Entity::registerEntity(MorphZombieVillager::class, true);
	        Entity::registerEntity(MorphVillager::class, true);
	        Entity::registerEntity(MorphZombie::class, true);
	        Entity::registerEntity(MorphSquid::class, true);
	        Entity::registerEntity(MorphCow::class, true);
	        Entity::registerEntity(MorphSpider::class, true);
	        Entity::registerEntity(MorphPig::class, true);
	        Entity::registerEntity(MorphMooshroom::class, true);
	        Entity::registerEntity(MorphWolf::class, true);
	        Entity::registerEntity(MorphMagmaCube::class, true);
	        Entity::registerEntity(MorphSilverfish::class, true);
	        Entity::registerEntity(MorphSkeleton::class, true);
	        Entity::registerEntity(MorphSlime::class, true);
	        Entity::registerEntity(MorphChicken::class, true);
	        Entity::registerEntity(MorphEnderman::class, true);
        	Entity::registerEntity(MorphCaveSpider::class, true);

		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
	        $cmds = new Commands($this);
		
		$cmds->onCommand($sender,$cmd, $label,$args);
	}
	
	
	public function getMorphManager() {		
		return new MorphManager($this);
	}
	
	
}
