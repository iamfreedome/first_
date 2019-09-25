<?php
	abstract class airplane {
		var height, krenx, kreny, speed, fuel, maxPower, zakrilki, tormoz, shassi;
		
		
		public function takeoff() {
			//реальизация взлета самолета
		}
		public function landing() {
			//реализация посадки
		}
	}
	class tu_154 extends airplane {
		public function takeoff(){
			echo "реализация взлета на ту154";
		}
		public function landing(){
			echo "метод реализация посадки на ту 154"
		}
	}
	
	class mig extends airplane {
		var weapoon;
		public function takeoff(){
			echo "реализация взлета для миг"
		}
		public function landing(){
			echo "реализация посадки для МИГ"
		}
		public function attaсk(){
			echo "метод атаки МИГ"
		
		}
	}
	
?>