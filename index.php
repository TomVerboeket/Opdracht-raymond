<?php

// Create variable win, a nice string to show when user wins
// Concatinate with .
// \n is an enter
$win =  "      ___________\n"                        .
                "     '._==_==_=_.'\n"                    .
                "     .-\\:      /-.\n"                    .
                "    | (|:.     |) |\n"                    .
                "     '-|:.     |-' \n"                    .
                "       \\::.    /\n"                        .
                "        '::. .'\n"                            .
                "          ) (\n"                                .
                "        _.' '._\n"                            .
                "       `\"\"\"\"\"\"\"`\n";

// Nice intro screen for the game
// printf output a formatted string.
printf("Welkom in het leven van Raymond\n\n");
printf("
_      __    ____            
| | /| / /__ / / /_____  __ _ 
| |/ |/ / -_) /  '_/ _ \/  ' \
|__/|__/\__/_/_/\_\\___/_/_/_/
                             
\n");
printf("
____  _             _         _                                        
/ ___|| |_ __ _ _ __| |_    __| | ___    __ _  __ _ _ __ ___   ___    
\___ \| __/ _` | '__| __|  / _` |/ _ \  / _` |/ _` | '_ ` _ \ / _ \  
___) | || (_| | |  | |_  | (_| |  __/ | (_| | (_| | | | | | |  __/ | 
|____/ \__\__,_|_|   \__|  \__,_|\___|  \__, |\__,_|_| |_| |_|\___|  
                                       |___/                                                            
\n");

// Question 1
printf("Je bent Raymond en word wakker op een mooie woensdag ochtend, je hebt de volgende 2 keuzes:\n");
printf("Je gaat lekker naar school om de liefste kindjes van de hele wereld les te geven\n");
printf("Je blijft lekker warm in je bedje liggen en geniet de rest van de dag lekker op de bank\n");
printf("Kies de beste optie tussen 1 en 2\n");
// Collect answer
// readline is a function!!
// https://www.php.net/manual/en/function.readline.php
$userChoice = readline("");

// Check the choice of the user: Option 1
// So comparing is done with ==
// Declaring a variable is done with 1 =
if ($userChoice == 1) {
    printf("Kijk dat is nou gezellig raymond is veilig op school aangekomen om zijn allerleukste leerlingen te helpen, de vraag is wie raymond het liefst helpt\n\n");
    printf("Raymond helpt Tom Verboeket\n");
    printf("Raymond helpt elke andere leerling\n");
    printf("Kies de beste optie tussen 1 en 2\n");
    // Collect answer
    $userChoice = readline("");
  // Option 1 --> show winning
  if ($userChoice == 1) {
      printf("Kijk dat zijn nou eens goede keuzes gefeliciteerd, geniet nog van uw dag\n\n");
      printf("%s", $win);
  }
}

// Option 2
if ($userChoice == 2) {
    printf("Oei Raymond komt te laat weet hij dit nog goed te maken? \n\n");
  printf("Raymond geeft geen fuck en geniet van een lekker extra dagje vrij\n");
  printf("Raymond meld zich ziek en spijbelt\n");
  // Collect answer
  $userChoice = readline("");

  // Option 1 end game
  if ($userChoice == 1) {
        printf("Dat is niet zo netjes het meneer u word op deze manier ontslagen");
  }
  // Option 2 end game
  if ($userChoice == 2) {
    printf("Oei de grote baas komt erachter en Raymond heeft grote problemen, einde");
  }
}
?>