<?php

namespace pocketmorph\morph;

use pocketmine\entity\Entity;
use pocketmine\nbt\tag\Int;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\Player;

class MorphZombieVillager extends Entity implements MorphEntity
{

    const NETWORK_ID = 44;

    public function getName()
    {
        return "ZombieVillager";
    }

    public function spawnTo(Player $player)
    {
        $pk = new AddEntityPacket();
        $pk->eid = $this->getId();
        $pk->type = self::NETWORK_ID;
        $pk->x = $this->x;
        $pk->y = $this->y;
        $pk->z = $this->z;
        $pk->yaw = $this->yaw;
        $pk->pitch = $this->pitch;
        $pk->metadata = [
            3 => [0, $this->getDataProperty(3)],
            15 => [0, 1]
        ];      
		$player->dataPacket($pk);
        parent::spawnTo($player);
    }

}
