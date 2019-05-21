/*
 Setup your scale and start the sketch WITHOUT a weight on the scale
 Once readings are displayed place the weight on the scale
 Press +/- or a/z to adjust the calibration_factor until the output readings match the known weight
 Arduino pin 5 -> HX711 CLK
 Arduino pin 6 -> HX711 DOUT
 Arduino pin 5V -> HX711 VCC
 Arduino pin GND -> HX711 GND 
*/

#include "HX711.h"
#include <SPI.h>
#include <Ethernet.h>
char c;
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };   //Direccion Fisica MAC
byte ip[] = { 192, 168, 100, 70 };                       // IP Local que usted debe configurar 
byte gateway[] = { 192, 168, 100, 1 };                   // Puerta de enlace
byte subnet[] = { 255, 255, 255, 0 };                  //Mascara de Sub Red
EthernetServer server(80);                             //Se usa el puerto 80 del servidor     
String readString;
HX711 scale(6, 5);

float calibration_factor = 350; // calibracion de la celda
float units;
float ounces;

void setup() {
  Ethernet.begin(mac, ip, gateway, subnet); // Inicializa la conexion Ethernet y el servidor
  server.begin();
  Serial.print("El Servidor es: ");
  Serial.println(Ethernet.localIP());    // Imprime la direccion IP Local
  Serial.begin(9600);
  Serial.println("HX711 calibration sketch");
  Serial.println("Reire todo el peso de la banza");
  Serial.println("Presione + o a para aumentar el factor");
  Serial.println("Presione - o z para decrementar el factor");

  scale.set_scale();
  scale.tare();  //Pone el valor en 0
  long zero_factor = scale.read_average(); 
  Serial.print("Zero factor: "); 
  Serial.println(zero_factor);
}

void loop() {
  EthernetClient client = server.available();
  scale.set_scale(calibration_factor); //Ajusta el factor de calibracion

  Serial.print("Leyendo: ");
  units = scale.get_units(), 10;
  if (units < 0)
  {
    units = 0.00;
  }
  ounces = units * 0.035274;
  Serial.print(units);
  Serial.print(" gramos"); 
  Serial.print(" factor de calibración: ");
  Serial.print(calibration_factor);
  Serial.println();
  
  
  if (client) {
    Serial.println("new client");
    // an http request ends with a blank line
    bool currentLineIsBlank = true;
    while (client.connected()) {
      if (client.available()) {
        c = client.read();
        if (c == '\n' && currentLineIsBlank) {
          client.println("HTTP/1.1 200 OK");
          client.println("Content-Type: text/html");
          client.println("Connection: close");
          client.println("Refresh: 5");
          client.println();
          client.println("<!DOCTYPE HTML>");
          client.println("<html>");
          client.println("<HEAD>");
          client.println("<TITLE>BALANZA Ethernet</TITLE>");
          client.println("</HEAD>");
          client.println("<BODY>");
          client.println("<hr />");
          client.println("<H1>LECTURA:</H1>");
          client.println("<br />");
          client.print(units);
          client.println("<br />");
          client.println("</html>");
          break;
        } 
        }
        if (c == '\n') {
          currentLineIsBlank = true;
        } else if (c != '\r') {
          currentLineIsBlank = false;
        }
    }
    delay(1);
    // close the connection:
    client.stop();
    Serial.println("client disconnected");
    }
  if(Serial.available())
  {
    char temp = Serial.read();
    if(temp == '+' || temp == 'a')
      calibration_factor += 1;
    else if(temp == '-' || temp == 'z')
      calibration_factor -= 1;
  }
}
