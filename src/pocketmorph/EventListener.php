<?php

namespace pocketmorph;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmorph\PocketMorph;
use pocketmorph\morph\MorphCow;

class EventListener implements Listener {
	
	private $plugin;
	
	public function __construct(PocketMorph $plugin) {
		$this->plugin = $plugin;	
	}
	
	private function getPlugin() {
		return $this->plugin;
	}
	
	public function onQuit(PlayerQuitEvent $event) {
		$player = $event->getPlayer();
		
		if($this->getPlugin()->getMorphManager()->isMorphed($player)) {
			$morph = $this->getPlugin()->getMorphManager()->getMorph($player);
			
			 $morph->close();
		}
	}
	
	public function onMove(PlayerMoveEvent $event) {
		
		$player = $event->getPlayer();
		
		if($this->getPlugin()->getMorphManager()->isMorphed($player)) {
			$morph = $this->getPlugin()->getMorphManager()->getMorph($player);
			
			$this->getPlugin()->getMorphManager()->moveEntity($player, $morph->getId());
		}
	}
	
}
