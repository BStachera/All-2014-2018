#include <cstdlib>
#include <iostream>
#include <cstdio>
#include <fstream>
using namespace std ;

int main ()
{
    string imie;
    string nazwisko;
    string a;
    string b;
    string c;
    string d;
    string e;
    string f;
    string g;
    string h;
    string i;
    string j;
    int pkt = 0;

 
 
   cout<< " Podaj imie i Nazwisko:" << endl;
   cin>> imie ;
   cin.ignore();
   cin>>nazwisko;
   cin.ignore();
    
	 cout << " *****************************************************************************" <<endl;
    cout << " WITAJ NA SPRAWDZIANIE" <<endl;
    cout << " Podstawy informatyki - TEST NR 1 - ogolny " <<endl;
   cout << " *****************************************************************************" <<endl;
    cout << " 1. Dyskietka i dysk twardy to rodzaj: " <<endl;
    cout << " a) pamieci wewnetrznej " <<endl;
    cout << " b) pamieci operacyjnej " <<endl;
    cout << " c) ulotnej pamieci zewnetrznej " <<endl;
    cout << " d) pamieci zewnetrznej " <<endl;
     cin>> a;
    cin.ignore();
   cout << " *****************************************************************************" <<endl;
   cout << " 2. Pamiec RAM, to pamiec:  " <<endl;
    cout << " a) przeznaczona tylko do odczytu " <<endl;
    cout << " b) przeznaczona tylko do odczytu " <<endl;
    cout << " c) przeznaczona tylko do zapisu" <<endl;
    cout << " d) zewnetrzna" <<endl;
     cin>> b;
    cin.ignore();
    cout << " *****************************************************************************" <<endl;
    cout << " 3. Jakiego systemu liczbowego uzywa komputer?  " <<endl;
    cout << " a) dziesietnego" <<endl;
    cout << " b) dwojkowego" <<endl;
    cout << " c) szesnastkowego" <<endl;
    cout << " d) dziala bez systemu liczbowego" <<endl;
     cin>> c;
    cin.ignore();
    cout << " *****************************************************************************" <<endl;
    cout << " 4.Plikiem nazywamy:  " <<endl;
    cout << " a) zbior informacji (bajtow) zapisanych na dysku. " <<endl;
    cout << " b) tylko tekst zapisany na dysku twardym. " <<endl;
    cout << " c) czesc systemu operacyjnego Windows. " <<endl;
    cout << " d) zajete miejsce na dysku twardym." <<endl;
     cin>> d;
    cin.ignore();
    cout << " *****************************************************************************" <<endl;
    cout << " 5. Folderem w systemie Windows nazywamy:  " <<endl;
    cout << " a) obrazek zapisany na dysku twardym " <<endl;
    cout << " b) miejsce na dysku do zapisywania plikow lub innych folderow " <<endl;
    cout << " c) czesc systemu operacyjnego." <<endl;
    cout << " d) urzadzenie wejsciowe komputera. " <<endl;
     cin>> e;
    cin.ignore();
   cout << " *****************************************************************************" <<endl;
    cout << " 6. Rozszerzenie nazwy pliku wskazuje na: " <<endl;
    cout << " a) wielkosc pliku " <<endl;
    cout << " b) waznosc pliku w systemie operacyjnym. " <<endl;
    cout << " c) rodzaj danych zapisanych w pliku" <<endl;
    cout << " d) nie wskazuje na nic" <<endl; 
     cin>> f;
    cin.ignore();
   cout << " *****************************************************************************" <<endl;
    cout << " 7. Ktore zdanie jest prawdziwe?  " <<endl;
    cout << " a) W sk³ad minimalnego zestawu komputerowego wchodzi klawiatura, monitor i stacja dyskow." <<endl;
    cout << " b) Mysz jest wyjsciowym urzadzeniem zewnetrznym" <<endl;
    cout << " c) Podstawowym zewnetrznym urzadzeniem wejsciowym jest monitor." <<endl;
    cout << " d) Klawiatura jest podstawowym zewnetrznym urz¹dzeniem wejsciowym." <<endl;
    cin>> g;
    cin.ignore();
   cout << " *****************************************************************************" <<endl;
   cout << " 8. Pliki wykonywalne (programy) posiadaja rozszerzenie: " <<endl;
    cout << " a) .bmp, .jpg, .tif, .gif " <<endl;
    cout << " b) .txt, .doc, .rtf" <<endl;
    cout << " c) .exe, .com, .bat" <<endl;
    cout << " d) .wav, .mid, .mp3 " <<endl;
     cin>> h;
    cin.ignore();
   cout << " *****************************************************************************" <<endl;
    cout << " 9. Po wylaczeniu komputera wymazuje sie zawartosc: " <<endl;
    cout << " a) pamieci RAM. " <<endl;
    cout << " b) pamieci ROM. " <<endl;
    cout << " c) pamieci zewnetrznej. " <<endl;
    cout << " d) dyskietki. " <<endl;
     cin>> i;
    cin.ignore();
   cout << " *****************************************************************************" <<endl;
    cout << " 10. Najmniejsza jednostka informacji odpowiadajaca pojemnosci jednej komorki pamieci komputera jest:" <<endl;
    cout << " a) 1 bajt " <<endl;
    cout << " b) 1 znak" <<endl;
    cout << " c) 1 bit " <<endl;
    cout << " d) 1 plik " <<endl;
     cin>> j;
    cin.ignore();
   cout << " *****************************************************************************" <<endl;
   cout << " "<<imie<<" "<<nazwisko<<" "<<endl ;
   cout << " twoje odpowiedzi to zad.1. "<<a<<" ,zad.2 "<<b<<" ,zad.3. "<<c<<" ,zad.4. "<<d<<" ,zad.5. "<<e<<" ,zad.6. "<<f<<" ,zad.7. "<<g<<" ,zad.8. "<<h<<" ,zad.9. "<<i<<" ,zad.10. "<<j<<" " <<endl ;
   cout << " *****************************************************************************" <<endl;
   
    
    if ( a == "a" ){
     a = "a - 1pkt.";   
     pkt = pkt+1;
    }else{
     a = a+" - 0pkt.";   
    }
   
    if ( b == "b" ){
     b = "b - 1pkt.";   
     pkt = pkt+1;
    }else{
     b = b+" - 0pkt.";   
    }
   
    if ( c == "b" ){
     c = "c - 1pkt.";   
     pkt = pkt+1;
    }else{
     c = c+" - 0pkt.";   
    }
   
    if ( d == "a" ){
     d = "d - 1pkt.";   
     pkt = pkt+1;
    }else{
     d = d+" - 0pkt.";   
    }
  
    if ( e == "b" ){
     e = "e - 1pkt.";   
     pkt = pkt+1;
    }else{
     e = e+" - 0pkt.";   
    }
 
    if ( f == "c" ){
     f = "f - 1pkt.";   
     pkt = pkt+1;
    }else{
     f = f+" - 0pkt.";   
    }
 
    if ( g == "b" ){
     g = "g - 1pkt.";   
     pkt = pkt+1;
    }else{
     g = g+" - 0pkt.";   
    }
 
    if ( h == "c" ){
     h = "h - 1pkt.";   
     pkt = pkt+1;
    }else{
     h = h+" - 0pkt.";   
    } 
 
    if ( i == "a" ){
     i = "i - 1pkt.";   
     pkt = pkt+1;
    }else{
     i = i+" - 0pkt.";   
    }
 
    if ( j == "c" ){
     j = "j - 1pkt.";   
     pkt = pkt+1;
    }else{
     j = j+" - 0pkt.";
    }
    
   cout << " Otrzymales " << pkt << "pkt!" <<endl;
    
    ofstream plik;
   	 plik.open(" odpowiedzi.txt",ios::out)
   	 ;plik<<" imie-"<<imie<<endl;
	plik<<"nazwisko-"<<nazwisko<<endl;   
    plik<<"zad1-"<<a<<endl;
   	plik<<"zad2-"<<b<<endl;
   	plik<<"zad3-"<<c<<endl;
   	plik<<"zad4-"<<d<<endl;
   	plik<<"zad5-"<<e<<endl;
   	plik<<"zad6-"<<f<<endl;
   	plik<<"zad7-"<<g<<endl;
    plik<<"zad8-"<<h<<endl;
   	plik<<"zad9-"<<i<<endl;
   	plik<<"zad10-"<<j<<endl;
   	plik<<"punktu zdobyte-"<<pkt<<endl;
 	
     plik.close();
               
	system ("pause");
	getchar();
	return 0;
}
