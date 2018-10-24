import time

numberek = ["PaweL","Bartek","Kamil","Dampc","Marek", "Baran", "Jarek"]

print ("DLugosc tablicy wynosi", len(numberek))
x = int (input ("Do Ktorego numberu nie mam brac pod uwage"))

for i,number in enumerate(numberek):
	time.sleep ( 0.5 )
	print ( " ---------------------------------" )
	print ("Sprawdzam {} numer w tablicy = {} ".format(number, i))
	if i >= x:
		print (" --†---†---†---†---†--")
		print ( numberek[i], "Umarl")
		continue
	print (" --♥---♥---♥---♥---♥--")
	print ("{} jest Okey".format(number))
	
print("----------------------------------")
input ("press enter key to exit")
