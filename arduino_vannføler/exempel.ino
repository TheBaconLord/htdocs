bool Q1 =false; bool Q2 =false;
bool stopp =false;

void setup()
{
  pinMode(2, INPUT);
  pinMode(3, INPUT);
  pinMode(4, INPUT);
  pinMode(7, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(13, OUTPUT);
}

void loop()
{
  bool s2 = digitalRead(2);
  bool s3 = digitalRead(3);
  get_stopp();
  
  Q1 = (((Q1 || s2) && !s3) && stopp);   //se tegning over motor-logikk
  Q2 = (((Q2 || s3) && !s2) && stopp);   //se tegning over motor-logikk
  
  if (Q1) 
  {
    digitalWrite(12, LOW);
      delay(100);   // Gi motor tid til å stoppe
    digitalWrite(13, HIGH);
    digitalWrite(7,LOW);
  } 
  else if (Q2) 
  {
    digitalWrite(13, LOW);
      delay(100);   // Gi motor tid til å stoppe
    digitalWrite(12, HIGH);
    digitalWrite(7,LOW);
  }
  else
  {
    digitalWrite(12,LOW);
    digitalWrite(13,LOW);
    
    if (stopp == true)    // Flash if armed
    {
      digitalWrite(7,HIGH); delay(50); digitalWrite(7, LOW); delay(100);
    }
    else  // Konstant lys hvis stoppet
    {
      digitalWrite(7,HIGH);
    }
  }
  delay(10);   // Delay her er kun for tinkercad simulering blir bedre
}

void get_stopp()
{
   int stopp_button = 4;
   if (digitalRead(stopp_button) == true) 
   {
     stopp = !stopp;    // Toggle state
   } 
   while(digitalRead(stopp_button) == true);
   delay(50);     // Løkka kanselerer kontakt debounce
}