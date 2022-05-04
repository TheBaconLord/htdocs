#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define SCREEN_WIDTH 128      // OLED display width, in pixels
#define SCREEN_HEIGHT 64      // OLED display height, in pixels

#define OLED_RESET     4      // Reset pin # (or -1 if sharing Arduino reset pin)
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, & Wire, OLED_RESET);
//deffinisjon på hvilke pins som er til de forskjellige brytterene/ følerene
const int oneHundred = A3;
const int seventyFive = A2;
const int fifty = A1;
const int twentyFive = A0;
const int motor = 3;
unsigned long sisteEndring = 0;
bool Status[4]= {false,false, false, false}; 

// dette er for å deffinere hva som er innputs/ outputs fra vannføleren, OLED skjermen og pumpen/motoren
void setup() {
    Serial.begin(9600);
    display.begin(SSD1306_SWITCHCAPVCC, 0x3D);

    pinMode (oneHundred, INPUT);    
    pinMode (seventyFive, INPUT);
    pinMode (fifty, INPUT);
    pinMode (twentyFive, INPUT);
    pinMode (motor, OUTPUT);

    display.display();
    delay(1000);
    display.clearDisplay();
}
// looper lesing av inputene, gjør at den alltid lesser gjennom innputene, når det blir endringer på på en input skal det bli sendt ut til lcd skjermen
void loop(){
    bool Hundred = digitalRead(oneHundred);
    bool Seventy = digitalRead(seventyFive);
    bool Fifty = digitalRead(fifty);
    bool Twenty = digitalRead(twentyFive);
    bool Motor = digitalRead(motor);
// Dette er en startup sekvens for OLED skjermen
    display.clearDisplay();
    display.setTextColor(WHITE);
    display.setTextSize(1);
// Dette er kodedelen som ser etter feil med sensorene 
    if  ((!Twenty && (Fifty || Seventy || Hundred)) || (!Fifty && (Seventy || Hundred)) || (!Seventy && Hundred)) {
        display.setCursor(50,30);
        display.print("error");
        delay(500);
    } else { // Dette er kodelinjen som reiner ut om motoren/pumpen skal gå i forhold til hva som var forige input på sensorene
        if (!Motor &&((!Twenty && Status[0] != Twenty) || (!Fifty && Status[1] != Fifty) || (!Seventy && Status[2] != Seventy) || (!Hundred && Status[3] != Hundred))){
            Serial.println(sisteEndring > millis());
            if(sisteEndring > millis()){
                digitalWrite(motor, HIGH);
                display.setCursor(0,15);
                display.print ("high usage");
              	display.setCursor(30,0);
                display.print("Pump on");
            }
            
            sisteEndring = millis() + 2000;
        }
        //Definerer hvilke verdier det forskjelige sensorene er.
        Status[0] = Twenty;
        Status[1] = Fifty;
        Status[2] = Seventy;
        Status[3] = Hundred; 
        //Dette er kodelinjen som bestemer hva som skal printes ut på OLED skjermen når sensoren for under 25% vannhøyde er aktiv.    
        if (!Twenty) {
            display.setCursor(0,15);
            display.print("<25%");
            digitalWrite(motor, HIGH);
          	display.setCursor(30,0);
            display.print(" Pump on");
            
        // Dette er kodelinjen bestemer hva som skal printes ut på OLED skjermen når sensoren for 25% vannhøyde er aktiv og når 50% vannhøyde er aktiv.
        } else if (Twenty && !Fifty) {            
            display.setCursor(0,15);
            display.print("25%");
        } else if (Twenty && Fifty && !Seventy) {
            display.setCursor(0,15);
            display.print("50%");
        //Dette er kodelinjen som bestemer hva som skal printes ut på OLED skjermen når sensoren for 75% vannhøyde er aktiv.
        } else if (Twenty && Fifty && Seventy && !Hundred) {
            display.setCursor(0,15);
            display.print("75%");
        //Dette er kodelinjen som bestemer hva som skal printes ut på OLED skjermen når sensoren for 100% vannhøyde er aktiv.
        } else if (Twenty && Fifty && Seventy && Hundred) {
            display.setCursor(0,15);
            display.print("100%");
			display.setCursor(30,0);
            display.print(" pump off");
            digitalWrite(motor, LOW);
        }
        //Dette er kodelinjen som lager loading baren for hvor fullt et vannmagasin er.
     display.drawRect(0, 40, SCREEN_WIDTH, SCREEN_HEIGHT - 40, WHITE);
     display.fillRect(0, 40, SCREEN_WIDTH * (
         Hundred ? 1: 
         Seventy ? 0.75:
         Fifty ? 0.50:
         Twenty ? 0.25: 0), SCREEN_HEIGHT - 40, WHITE);
    } 
    
    display.display();
}