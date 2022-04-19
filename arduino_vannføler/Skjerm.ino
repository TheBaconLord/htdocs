#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>
//deffinisjon på hvilke pins som er til de forskjellige brytterene/ følerene
const int oneHundred = 10;
const int seventyFive = 9;
const int fifty = 8;
const int twentyFive = 7;
const int motor = 6;
unsigned long sisteEndring = 0;
bool Status[4]= {false,false, false, false}; 

// dette er for å deffinere hva som er innputs/ outputs fra vannføleren, lcd skjermen og pumpen/motoren
void setup() {
    Serial.begin(9600);
    begin(16, 2);
    print("start");
    delay(1000);
    clear();
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
        clear();
        setCursor(0,2);
        print ("error");
        delay(500);
    } else {
        if (!Motor &&((!Twenty && Status[0] != Twenty) || (!Fifty && Status[1] != Fifty) || (!Seventy && Status[2] != Seventy) || (!Hundred && Status[3] != Hundred))){
            Serial.println(sisteEndring > millis());
            if(sisteEndring > millis()){
                digitalWrite(Motor, HIGH);
                setCursor(0,0);
                print ("high usage");
              	setCursor(0,1);
                print(" Pump on");
              	delay(1000);
            }
            
            sisteEndring = millis() + 1000;
        }
        
        Status[0] = Twenty;
        Status[1] = Fifty;
        Status[2] = Seventy;
        Status[3] = Hundred; 
            
        if (!Twenty) {
            clear();
            setCursor(0,1);
            print("<25%");
            digitalWrite(Motor, 1);
          	setCursor(0,0);
            print(" Pump on");
            delay(100);

        } else if (Twenty && !Fifty) {
            clear();
            
            setCursor(0,2);
            print("25%");
            delay(100);
        } else if (Twenty && Fifty && !Seventy) {
            clear();
            setCursor(0,2);
            print("50%");
            delay(100);
        } else if (Twenty && Fifty && Seventy && !Hundred) {
            clear();
            setCursor(0,2);
            print("75%");
            delay(100);
        } else if (Twenty && Fifty && Seventy && Hundred) {
            clear();
            setCursor(0,1);
            print("100%");
			setCursor(0,0);
            print(" pump off");
            delay(100);
            digitalWrite(Motor, 0);
        }
    } 
}