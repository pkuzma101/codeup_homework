<?php


function getInput($upper = true) {  // establishes all upper case letters are valid
	$input = trim(fgets(STDIN)); // gets what user types in
		$input = strtoupper($input); // converts user input to all caps
	return $input; // returns what user types to the computer
}

// function organize($string) {
// 	foreach($string as $words) {
// 			if(strlen($words == 22)) {
// 				echo /n;
// 			}

// 	}
// }

	echo "You are walking the streets of Hong Kong, minding your own business.  All of a sudden, a man dressed in black clothes with a twirly mustache challenges you to a fight." . PHP_EOL . "Do you (F)ight, (R)un, or recite a (P)oem about peace?" . PHP_EOL;

		 // First choice scenario

		 $choice = getInput(); // calls user input function
		 switch($choice) {
		 	case 'F':
		 		echo "Mr. Twirly 'Stache declares loudly that you are a fool and attempts to punch you in the face.  You quickly duck." . PHP_EOL . 
		 			 "Will you attempt an (U)ppercut, or will you instead attempt a (F)ootsweep?" . PHP_EOL;

		 			 // first branch in the 'fight' scenario
		 		$choice = getInput();
		 		switch($choice) {
		 			case 'U':
			 			echo "After ducking the punch, you counter with a fierce uppercut.  Unfortunately, Mr. Twirly 'Stache catches your fist and counters with a blow to your chest, knocking you to the ground.  He then raises his heel in the air, intending to bring it down in your face.  While on the ground, you notice a stick on the ground beside you." . PHP_EOL . 
			 			"Do you (R)oll out of the way, or (G)rab the stick?" . PHP_EOL;

		 				 //Fight ------>Uppercut scenario
		 				 $choice = getInput();
		 				 switch($choice) {
		 				 	case 'R': 
		 				 		echo "You roll aside just as Mr. Twirly 'Stache's heel hits the ground.  You then quickly try to get to your feet.  However, as you are getting to your feet, you see that Mr. Twirly 'Stache is in the process of delivering a roundhouse kick to your face.  His foot makes an acquaintance with your face and you fly backwards.  Mr. Twirly 'Stache then pins you to the ground and proceeds to beat you senseless.  After a minute or so, he declares you a weak, pathetic fool and laughs, leaving with two beautiful women at his side.  Well done!" . PHP_EOL;

			 				 		 //Fight----------->Uppercut----------->Roll scenario
			 				break;

		 				 	case 'G': 
		 				 		echo "You grab the stick just in time to swing it at the leg that is coming down at your face.  You hit Mr. Twirly 'Stache's ankle and he falls to the ground.  You take the opportunity to repeatedly help his face make an acquaintance with the stick you picked up.  After a few such liaisons, you stand up, dust yourself off, and continue on your way.  Well done!" . PHP_EOL;

		 				 			//Fight----------->Uppercut----------->Grab scenario
		 				 	break;
		 				 }
		 				 break;

		 			case 'F':
		 				echo "After ducking the punch, you counter with a footsweep.  Mr. Twirly 'Stache falls to the ground." . PHP_EOL .  
		 					 "Do you proceed by (P)ounding his face?  Or (M)ounting him and then pounding his face?" . PHP_EOL;

		 							//Fight ------>Footsweep scenario
		 				$choice = getInput();
		 				switch($choice) {
		 					case 'P':
		 						echo "While Mr. Twirly 'Stache is still down, you deliver a fierce punch to his face.  As he howls in pain, you come to your feet.  Then, with all the agility and quickness of a cat, you bend down and tie the two strands of his mustache together in a knot.  Humiliated at the loss of his dignity, The-Bully-Formerly-Known-As-Mr. Twirly 'Stache charges at you in a blind rage.  You easily evade his barrage of punches and deliver a roundhouse kick to his belly that knocks him to the ground in defeat.  Onlookers cheer at your martial prowess and two attractive women express a desire to have sexual relations with you.  Well done!" . PHP_EOL;

		 							//Fight ------>Footsweep-------->Pound scenario
		 					break;

		 					case 'M':
		 						echo "You climb onto Mr. Twirly 'Stache.  Before you can punch him, however, he brings his knees hard into your back.  He then uses the sides of his feet to grab your head, and pulls you off of him by your head.  While you are dazed, he proceeds to deliver a firm punch to your face, knocking you down.  Your face is then pounded repeatedly.  After awhile, Mr. Twirly 'Stache declares that you are a weak, pathetic fool and onlookers laugh at your misfortune.  Well done!" . PHP_EOL;

		 							//Fight ------>Footsweep-------->Mount scenario
		 					break;
		 				}
		 			break;
	
			 }
		}
		switch($choice) {
			case 'R':
				echo "You turn around and quickly begin running.  Do you keep on (R)unning, or (C)limb onto a nearby building?" . PHP_EOL;

						//first branch in "Run" scenario
				$choice = getInput();
				switch($choice) {
					case 'R':
						echo "You continue running.  Mr. Twirly 'Stache picks up a nearby rock and throws it at your head.  It hits you and you fall to the ground.  Mr. Twirly 'Stache is now running at you." . PHP_EOL;
						echo "Do you (S)tand and fight, or keep (R)unning?" . PHP_EOL;

						//Run------------->Run scenario
						$choice = getInput();
						switch($choice) {
							case 'S':
								echo "By the time you get to your feet, Mr. Twirly 'Stache is already jumping at you with his right foot extended.  His foot hits your face at a considerable velocity and you fall to the ground bloody and unconscious.  Well done!" . PHP_EOL;

								// Run---------->Run----------->Stand scenario
							break;

							case 'R': 
								echo "You quickly get up and resume running.  Onlookers taunt and ridicule you, and Mr. Twirly 'Stache stops and makes several unkind remarks about your mother, but the only damage done is to your pride and probably your chances with the ladies.  Well done!" . PHP_EOL;
								
								//Run------------>Run----------->Run scenario
							break;
						}
					break;

					case 'C':
						echo "You take a sharp turn and begin climbing up a nearby building.  Soon you are on the roof.  Mr. Twirly 'Stache declares that you are without honor, and a crowd has started watching the exchange." . PHP_EOL;
						echo "Should you continue your (E)scape or stop to (M)oon your adversary?" . PHP_EOL;

						//Run---------------->Climb scenario
						$choice = getInput();
						switch($choice) {
							case 'E':
								echo "You jump to the roof of a different building, and a different one after that.  Mr. Twirly 'Stache continues loudly insisting you have no honor, but the onlookers seem kind of impressed with your agility.  Well done!" . PHP_EOL;
								
								//Run----------->Climb------------->Escape scenario
							break;

							case 'M':
								echo "You quickly pull down your pants and point your naked buttocks at Mr. Twirly 'Stache.  The crowd laughs loudly, and you begin swiveling your hips in emphasis.  Suddenly, Mr. Twirly 'Stache pulls out a shuriken and throws it.  You scream in pain as the shuriken embeds itself in your left butt cheek, and promptly lose your footing and fall to the ground.  As you lie on the ground, your bloody posterior now the subject of laughter that can probably be heard from Japan, you quietly say goodbye to your dignity.  Well done!" . PHP_EOL;
							
								//Run----------->Climb------------->Moon scenario
							break;
						}
					break;
				}
			break;
		}
		switch($choice) {
			case 'P':
				echo "You know two poems about peace: one in which a panda is a metaphor for peace, and one that was written by Shel Silverstein." . PHP_EOL;
				echo "Do you recite the (P)anda poem, or the (S)ilverstein one?" . PHP_EOL;

				// first branch in Poem scenario

				$choice = getInput();
				switch($choice) {
					case 'P': 
						echo "You begin reciting a poem in which a panda settles differences between two people who are arguing.  You gesticulate and enunciate for emphasis, and Mr. Twirly 'Stache and the onlookers are staring open-mouthed.  You are unsure if this is because they are moved by the poem." . PHP_EOL;
						echo "Do you (C)ontinue reciting, or take this opportunity to (A)ttack?" . PHP_EOL;

						//Recite----------->Panda scenario
						$choice = getInput();
						switch($choice) {
							case 'C':
								echo "You continue reciting your poem, but before you are finished, your adversary and all onlookers are laughing and pointing at you.  You finish despite them, and when you begin walking away, Mr. Twirly 'Stache sucker punches you and then pushes your head in mud.  All the onlookers then begin throwing things at you.  Finally, a dog casually walks up and urinates on you while everyone laughs.  Well done!" . PHP_EOL;

								//Recite----------->Panda------------->Continue scenario
							break;

							case 'A':
								echo "You stop reciting your poem and immediately enter a flying crane stance (like the one in 'Karate Kid.')  You then leap at Mr. Twirly 'Stache.  He easily dodges your kick and delivers a fierce uppercut which knocks you to the ground.  Just before Mr. Twirly 'Stache knocks you into unconsciousness, you notice his shirt kind of looks like a Cobra Kai shirt.  Well done!" . PHP_EOL;

								//Recite----------->Panda------------->Attack scenario
							break;
						}
					break;

					case 'S':
							echo "You begin reciting 'The Giving Tree.'  After a few stanzas, Mr. Twirly 'Stache takes advantage of you having your eyes closed for emphasis to kick you in the face.  He declares that he hates 'The Giving Tree' and says it should be referred to as 'The Stupid Tree,' because the tree is so stupid." . PHP_EOL;
							echo "Do you (I)nsist that he is missing the meaning of the poem, or just (K)ick him in the stomach?" . PHP_EOL;

							//Recite----------->Shel scenario
							$choice = getInput();
							switch($choice) {
								case 'I':
									echo "You attempt to explain the meaning of the poem, but Mr. Twirly 'Stache pummels you into a curled-up ball of non-violent wussiness.  Everyone around agrees that the tree was indeed stupid for letting the boy take advantage of it, and that you are even stupider because you have basically done the same thing in real life.  Well done!" . PHP_EOL;

								//Recite----------->Shel------------->Insist scenario
								break;

								case 'K':
									echo "You deliever a swift kick to Mr. Twirly 'Stache's belly, and the two of you fight hand-to-hand for several minutes.  Then, when you duck one of his punches, Mr. Twirly 'Stache knees you in the face and then grabs your hair, pulls your head down, and knees you in the face again.  You are knocked unconscious, and several onlookers openly wonder if you would have won the fight if you had just kicked him in the beginning.  Well done!" . PHP_EOL;

								//Recite----------->Shel------------->Kick scenario
								break;
							}
							break;
				}
				break;

		}

?>
