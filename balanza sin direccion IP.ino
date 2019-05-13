
#include <HX711_ADC.h>

HX711_ADC LoadCell(6, 7);

long t;

void setup() {
  Serial.begin(9600);
  Serial.println("Espere...");
  LoadCell.begin();
  long stabilisingtime = 2000;
  LoadCell.start(stabilisingtime);
  LoadCell.setCalFactor(6032.00); // factor de calibración
  Serial.println("Calibracion completa");
}

void loop() {
  LoadCell.update();

  if (millis() > t + 250) {
    float i = LoadCell.getData();
    Serial.print("valor de peso: ");
    Serial.println(i);
    t = millis();
  }
  if (Serial.available() > 0) {
    float i;
    char inByte = Serial.read();
    if (inByte == 't') LoadCell.tareNoDelay();
  }

  if (LoadCell.getTareStatus() == true) {
    Serial.println("Encerado completo");
  }

}
