#include<LiquidCrystal.h>

const int rs=12, en=11, d4=5, d5=4, d6=3, d7=2;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);

int upButton = A1;
int downButton = A2;
int selectButton = A3;
int stopButton = A0;

int menu = 1;

int LED1 = 7;
int LED2 = 6;
int LED3 = 10;



void setup(){
    lcd.begin(16, 2);
    pinMode(upButton, INPUT_PULLUP);
    pinMode(downButton, INPUT_PULLUP);
    pinMode(selectButton, INPUT_PULLUP);
    pinMode(stopButton, INPUT_PULLUP);
    pinMode(LED1,OUTPUT);
    pinMode(LED2, OUTPUT);
    pinMode(LED3, OUTPUT);

    updateMenu();
}


void loop(){
    bool down = !digitalRead(downButton);
    bool up = !digitalRead(upButton);
    bool select = !digitalRead(selectButton);
    bool stop = !digitalRead(stopButton);

    if(down){
        menu++;
        updateMenu();
        delay(10);
        while (!digitalRead(downButton));
    }
    if (up){
        menu--;
        updateMenu();
        delay(10);
        while (!digitalRead(upButton));
    }
    if (select){
        execute();
        updateMenu();
        delay(10);
        while (!digitalRead(selectButton));
    }
    if (stop){
        action5();
        updateMenu();
        delay(10);
        while (!digitalRead(stopButton));
        
    }
    if (stop){
        while (!digitalRead(stopButton));
        action6(); 
        updateMenu();
    }
}


void updateMenu(){
    switch (menu){
        case 0:
        menu = 1;
        break;
        case 1:
        lcd.clear();
        lcd.print(">Valve On");
        lcd.setCursor(0, 1);
        lcd.print(" Valve Off");
        break;
        case 2:
        lcd.clear();
        lcd.print(" Valve On");
        lcd.setCursor(0, 1);
        lcd.print(">Valve Off");
        break;
        case 3:
        lcd.clear();
        lcd.print(">Run Pump");
        lcd.setCursor(0, 1);
        lcd.print(" Stop Pump");
        break;
        case 4:
        lcd.clear();
        lcd.print(" Run Pump");
        lcd.setCursor(0, 1);
        lcd.print(">Stop Pump");
        break;
        case 5:
        menu = 4;
        break;  
        case 6:
        menu = 1;
        break;     
    }
}

void execute(){
    switch(menu){
        case 1:
        action1();
        break;
        case 2:
        action2();
        break;
        case 3:
        action3();
        break;
        case 4:
        action4();
        break;
        case 5:
        action6();
        menu = 1;
        break;
    }
}

void action1(){
    lcd.clear();
    lcd.print(">VALVE OPEN");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
    
    digitalWrite(LED1, HIGH);
    delay(500);
}

void action2(){
    lcd.clear();
    lcd.print(">VALVE CLOSED");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
    
    digitalWrite(LED1, LOW);
    delay(500);
}

void action3(){
    lcd.clear();
    lcd.print(">PUMP ON");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
    
    digitalWrite(LED2, HIGH);
    delay(500);
}

void action4(){
    lcd.clear();
    lcd.print(">PUMP OFF");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
    
    digitalWrite(LED2, LOW);
    delay(500);
}

void action5(){
    lcd.clear();
    lcd.print("System halted");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
        delay(150);
    lcd.print(".");
    menu = 0;

    digitalWrite(LED3, HIGH);
    digitalWrite(LED1, LOW);
    digitalWrite(LED2, LOW);
    delay(500);
}   

void action6(){
    digitalWrite(LED3, LOW);
}