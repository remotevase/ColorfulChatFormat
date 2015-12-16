<?php

namespace Taki21\ChatFormat;

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
			# IMPORTANT: Color is for the Color Format for Chat. Make sure to write a color Recognized by Pocketmine-MP!
			
			"Owner" => "Taki21", 
			
			"Co-Owner" => "Steve",
			
			"Co-Owner2" => "Jeb",
			
			"Co-Owner3" => "Notch",
			
			"Builder" => "Taki",
			
			"Plugin-Dev" => "Alex",
			
			"Plugin-Dev1" => "DanTDM",
			
			"Head-Admin" => "ExplodingTNT",
			
			"Admin" => "Player1",
			
			"Admin1" => "Player2",
			
			"Admin2" => "Player3",
			
			"Admin3" => "Player4",
			
			"Admin4" => "Player5",
			
			"Admin5" => "Player6",
			
			"Admin6" => "Player7",
			
			"Admin7" => "Player8",
			
			"Admin8" => "Player9",
			
			"Admin9" => "Player10",
			
			"Regular_Players_Format" => "USER",
		));
		$this->config->save();
	}
	public function onChat(PlayerChatEvent $event){
		$pl = $event->getPlayer();
		$name = $pl->getName();
		$msg = $event->getMessage();
		if($name == "".$this->config->get("Owner").""){
			$event->setFormat("[".C::AQUA."Owner: $name] $msg");
		}else{
			if($name == "".$this->config->get("Co-Owner").""){
				$event->setFormat("[".C::GREEN."Co-Owner $name] $msg");
			}else{
				if($name == "".$this->config->get("Co-Owner2").""){
					$event->setFormat("[".C::RED."Co-Owner: $name] $msg");
				}else{
					if($name == "".$this->config->get("Co-Owner3").""){
						$event->setFormat("[".C::AQUA."Co-".C::RED."Owner".C::WHITE.": $name] $msg");
					}else{
						if($name == "".$this->config->get("Builder").""){
							$event->setFormat("[".C::YELLOW."Builder(OP): $name] $msg");
						}else{
							if($name == "".$this->config->get("Plugin-Dev").""){
								$event->setFormat("[".C::DARK_RED."Plugin-Dev(OP): $name] $msg");
							}else{
								if($name == "".$this->config->get("Plugin-Dev1").""){
									$event->setFormat("[".C::GOLD."Plugin-Dev(OP): $name] $msg");
								}else{
									if($name == "".$this->config->get("Head-Admin").""){
										$event->setFormat("[".C::GREEN."Head-Admin: $name] $msg");
									}else{
										if($name == "".$this->config->get("Admin").""){
											$event->setFormat("[".C::DARK_AQUA."Admin: $name] $msg");
										}else{
											if($name == "".$this->config->get("Admin1").""){
												$event->setFormat("[".C::RED."Admin: $name] $msg");
											}else{
												if($name == "".$this->config->get("Admin2").""){
													$event->setFormat("[".C::YELLOW."Admin: $name] $msg");
												}else{
													if($name == "".$this->config->get("Admin3").""){
														$event->setFormat("[".C::GOLD."Admin:".C::GOLD." $name] $msg");
													}else{
														if($name == "".$this->config->get("Admin4").""){
															$event->setFormat("[".C::RED."Admin:".C::GOLD." $name] $msg");
														}else{
															if($name == "".$this->config->get("Admin5").""){
																$event->setFormat("[".C::DARK_AQUA."Admin: $name] $msg");
															}else{
																if($name == "".$this->config->get("Admin6").""){
																	$event->setFormat("[".C::DARK_RED."Admin: $name] $msg");
																}else{
																	if($name == "".$this->config->get("Admin7").""){
																		$event->setFormat("[".C::YELLOW."Admin: $name] $msg");
																	}else{
																		if($name == "".$this->config->get("Admin8").""){
																			$event->setFormat("[".C::BLUE."Admin: $name] $msg");
																		}else{
																			if($name == "".$this->config->get("Admin9").""){
																				$event->setFormat("[".C::GREEN."Admin: $name] $msg");
																			}else{
																				$event->setFormat("[".C::GOLD.$this->config->get("Regular_Players_Format").": $name] $msg");
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
