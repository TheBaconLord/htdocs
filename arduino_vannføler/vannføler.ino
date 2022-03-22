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
    lcd.print("start");
    delay(1000);
    lcd.clear();
    pinMode (oneHundred, INPUT);    
    pinMode (seventyFive, INPUT);
    pinMode (fifty, INPUT);
    pinMode (twentyFive, INPUT);
    pinMode (motor, OUTPUT);
}
// looper lesing av inputene, gjør at den alltid lesser gjennom innputene, når det blir endringer på på en input skal det bli sendt ut til lcd skjermen
void loop(){
    bool digitalRead(oneHundred);
    bool digitalRead(seventyFive);
    bool digitalRead(fifty);
    bool digitalRead(twentyFive);
    if  ((!twentyFive && (fifty || seventyFive || oneHundred)) || (!fifty && (seventyFive || oneHundred)) || (!seventyFive && oneHundred)) {
        lcd.setCursor(0,2);
        lcd.print ("error");  
    }
    if  (!twentyFive == true);{
        lcd.setCursor(0,2);
        lcd.print("<25%");
    }
    if  (twentyFive == true);{
        lcd.setCursor(0,2);
        lcd.print("25%");
    }; 
    if  ((twentyFive && fifty) == true);{
        lcd.setCursor(0,2);
        lcd.print("50%");
    }
    if  ((twentyFive && fifty && seventyFive) == true);{
        lcd.setCursor(0,2);
        lcd.print("75%");
    }
    if  ((twentyFive && fifty && seventyFive && oneHundred) == true);{
        lcd.setCursor(0,2);
        lcd.print("100%");
    }
}