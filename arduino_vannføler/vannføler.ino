#include <LiquidCrystal.h>
//deffinisjon på hvilke pins som er til de forskjellige brytterene/ følerene
const int oneHundred = 10;
const int seventyFive = 9;
const int fifty = 8;
const int twentyFive = 7;
const int motor = 6;

LiquidCrystal lcd(12, 11, 5, 4, 3, 2);

// dette er for å deffinere hva som er innputs/ outputs fra vannføleren, lcd skjermen og pumpen/motoren
void setup() {
    lcd.begin(16, 2);
    pinMode (oneHundred, INPUT);    
    pinMode (seventyFive, INPUT);
    pinMode (fifty, INPUT);
    pinMode (twentyFive, INPUT);
    pinMode (motor, OUTPUT);
}
//når denne brytteren blir skrud på vil stå at det er 100% vannhøyde, da skal pumpen/ motoren stope
//her skal koden sette inn inputen fra sensorene og regne ut om det har blit endringer elle rikke, hvis det har blitt endringer skal det sendes et signal som sier det.
void OneHundred(){

}
//når denne brytteren blir skrud på vil stå at det er 75% vannhøyde
//her skal koden sette inn inputen fra sensorene og regne ut om det har blit endringer elle rikke, hvis det har blitt endringer skal det sendes et signal som sier det.
void SeventyFive(){
    
}
//når denne brytteren blir skrud på vil stå at det er 50% vannhøyde
//her skal koden sette inn inputen fra sensorene og regne ut om det har blit endringer elle rikke, hvis det har blitt endringer skal det sendes et signal som sier det.
void Fifty(){
    
}
//når denne brytteren blir skrud på vil stå at det er 25% vannhøyd, da skal pumpen/motoren starte
//her skal koden sette inn inputen fra sensorene og regne ut om det har blit endringer elle rikke, hvis det har blitt endringer skal det sendes et signal som sier det.
void TwentyFive(){
    
}
// denne skal skru seg på når vannhøyden er lavere en 25% og skru seg av når den er på 100%
//her skal pumpen starte hvis vannivået synker uner 25% som vil si at den skal være kobllet opp til 100% og 25% modullene. så når det blir en endring i modullene som gjør at vanninvået går under 25% skal den gå på og 100% av.
void Motor(){
    
}
// looper lesing av inputene, gjør at den alltid lesser gjennom innputene, når det blir endringer på på en input skal det bli sendt ut til lcd skjermen
void loop(){
    bool OneHundred = digitalRead(oneHundred);
    bool SeventyFive = digitalRead(twentyFive);
    bool Fifty = digitalRead(fifty);
    bool TwentyFive = digitalRead(twentyFive);
    if ((!TwentyFive && (Fifty || SeventyFive || OneHundred)) || (!Fifty && (SeventyFive || OneHundred)) || (!SeventyFive && OneHundred)) {
        
    };
}