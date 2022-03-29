#include <LiquidCrystal.h>
//deffinisjon på hvilke pins som er til de forskjellige brytterene/ følerene
const int oneHundred = 10;
const int seventyFive = 9;
const int fifty = 8;
const int twentyFive = 7;
const int motor = 6;
unsigned long sisteEndring = 0;
bool Status[4]= {false,false, false, false}; 
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);

// dette er for å deffinere hva som er innputs/ outputs fra vannføleren, lcd skjermen og pumpen/motoren
void setup() {
    Serial.begin(9600);
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
    bool Hundred = digitalRead(oneHundred);
    bool Seventy = digitalRead(seventyFive);
    bool Fifty = digitalRead(fifty);
    bool Twenty = digitalRead(twentyFive);
    bool Motor = digitalRead(motor);
    if  ((!Twenty && (Fifty || Seventy || Hundred)) || (!Fifty && (Seventy || Hundred)) || (!Seventy && Hundred)) {
        lcd.clear();
        lcd.setCursor(0,2);
        lcd.print ("error");
        delay(500);
    } else {
        if (!Motor &&((!Twenty && Status[0] != Twenty) || (!Fifty && Status[1] != Fifty) || (!Seventy && Status[2] != Seventy) || (!Hundred && Status[3] != Hundred))){
            Serial.println(sisteEndring > millis());
            if(sisteEndring > millis()){
                digitalWrite(Motor, HIGH);
                lcd.setCursor(0,0);
                lcd.print ("high usage");
              	lcd.setCursor(0,1);
                lcd.print(" Pump on");
              	delay(1000);
            }
            
            sisteEndring = millis() + 1000;
        }
        
        Status[0] = Twenty;
        Status[1] = Fifty;
        Status[2] = Seventy;
        Status[3] = Hundred; 
            
        if (!Twenty) {
            lcd.clear();
            lcd.setCursor(0,1);
            lcd.print("<25%");
            digitalWrite(Motor, 1);
          	lcd.setCursor(0,0);
            lcd.print(" Pump on");
            delay(100);

        } else if (Twenty && !Fifty) {
            lcd.clear();
            lcd.setCursor(0,2);
            lcd.print("25%");
            delay(100);
        } else if (Twenty && Fifty && !Seventy) {
            lcd.clear();
            lcd.setCursor(0,2);
            lcd.print("50%");
            delay(100);
        } else if (Twenty && Fifty && Seventy && !Hundred) {
            lcd.clear();
            lcd.setCursor(0,2);
            lcd.print("75%");
            delay(100);
        } else if (Twenty && Fifty && Seventy && Hundred) {
            lcd.clear();
            lcd.setCursor(0,1);
            lcd.print("100%");
			lcd.setCursor(0,0);
            lcd.print(" pump off");
            delay(100);
            digitalWrite(Motor, 0);
        }
    } 
}