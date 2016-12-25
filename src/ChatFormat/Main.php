<?php

namespace ChatFormat;

use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getLogger()->info(C::GREEN."I am Done Loading!");
		@mkdir($this->getDataFolder());
		$this->config = new Config($this->getDataFolder(). "config.yml", Config::YAML, array
		
		(
			
			"Owner" => "masteremotevase", 
			
			"Co-Owner" => "mariobrostech",
			
			"Co-Owner2" => "MECEYECE",
			
			"Co-Owner3" => "MOIUHWIRUGEGAKGDLIWGLIFUGHDLUGFLUHDLIUGIFUGHDLIUHLIFU",
			
			"Builder" => "ThDragonRing",
			
			"Plugin-Dev" => "Ad5001",
			
			"Plugin-Dev1" => "THALHTILUUIAGRWLIHEIHTUIHWEILGTIUHEILWAHIUTGIHAE",
			
			"Head-Admin" => "Taki21",
			
			"Admin" => "Player11123",
			
			"Admin1" => "Player1422222222",
			
			"Admin2" => "Player1422222222223",
			
			"Admin3" => "Player41422222222",
			
			"Admin4" => "Player142222222225",
			
			"Admin5" => "Player142222222222226",
			
			"Admin6" => "Player124444444444447",
			
			"Admin7" => "Player14222222222222228",
			
			"Admin8" => "Player2142222222222222222229",
			
			"Admin9" => "Player1142222222222222220",
			
			"Regular_Players_Format" => "",
		));
		$this->config->save();
	}
	public function onChat(PlayerChatEvent $event){
		$pl = $event->getPlayer();
		$name = $pl->getName();
		$msg = $event->getMessage();
		if($name == "".$this->config->get("Owner").""){
			$event->setFormat("[".C::GOLD."Owner: $name] $msg");
		}else{
			if($name == "".$this->config->get("Co-Owner").""){
				$event->setFormat("[".C::AQUA."Co-".C::RED."Owner".C::WHITE.": $name".C::RESET."] $msg");
			}else{
				if($name == "".$this->config->get("Co-Owner2").""){
					$event->setFormat("[".C::AQUA."Co-".C::RED."Owner".C::WHITE.": $name".C::RESET."] $msg");
				}else{
					if($name == "".$this->config->get("Co-Owner3").""){
						$event->setFormat("[".C::AQUA."Co-".C::RED."Owner".C::WHITE.": $name".C::RESET."] $msg");
					}else{
						if($name == "".$this->config->get("Builder").""){
							$event->setFormat("[".C::YELLOW."Head Builder: $name".C::RESET."] $msg");
						}else{
							if($name == "".$this->config->get("Plugin-Dev").""){
								$event->setFormat("[".C::DARK_RED."Head Developer: $name".C::RESET."] $msg");
							}else{
								if($name == "".$this->config->get("Plugin-Dev1").""){
									$event->setFormat("[".C::DARK_RED."Other Developer: $name".C::RESET."] $msg");
								}else{
									if($name == "".$this->config->get("Head-Admin").""){
										$event->setFormat("[".C::GREEN."Head Administrator: $name".C::RESET."] $msg");
									}else{
										if($name == "".$this->config->get("Admin").""){
											$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
										}else{
											if($name == "".$this->config->get("Admin1").""){
												$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
											}else{
												if($name == "".$this->config->get("Admin2").""){
													$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
												}else{
													if($name == "".$this->config->get("Admin3").""){
														$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
													}else{
														if($name == "".$this->config->get("Admin4").""){
															$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
														}else{
															if($name == "".$this->config->get("Admin5").""){
																$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
															}else{
																if($name == "".$this->config->get("Admin6").""){
																	$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
																}else{
																	if($name == "".$this->config->get("Admin7").""){
																		$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
																	}else{
																		if($name == "".$this->config->get("Admin8").""){
																			$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
																		}else{
																			if($name == "".$this->config->get("Admin9").""){
																				$event->setFormat("[".C::GREEN."Administrator: $name".C::RESET."] $msg");
																			}else{
																				$event->setFormat("[".C::DARK_BLUE."$name".C::RESET."] $msg");
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
	public function onDisable(){
		$this->saveResource("config.yml");
	}
}
