			
		}
		
		if(!$config->get("OpenChest2")) {
			for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
				$x = -sin($yaw) + $center2->x;
				$z = cos($yaw) + $center2->z;
				$y = $center2->y;
				
				$level->addParticle(new FlameParticle(new Vector3($x, $y, $z)));
			}
		} else {
			if($this->time2 == 4) {
				$this->time2 = 0;
			}
			
			$this->time2++;
			
			if($this->time2 < 4) {
				
				for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
					$x = -sin($yaw) + $center2->x;
					$z = cos($yaw) + $center2->z;
					$y = $center2->y;
					
					$level->addParticle(new RedstoneParticle(new Vector3($x, $y, $z)));
					
				}
				
			} else {
				
				for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
					$x = -sin($yaw) + $center2->x;
					$z = cos($yaw) + $center2->z;
					$y = $center2->y;
					
					$level->addParticle(new RedstoneParticle(new Vector3($x, $y + 1, $z)));
					
				}
				
				$config->set("OpenChest2", false);
				$config->save();
				
			}
			
		}
		
		
	}
	
}
