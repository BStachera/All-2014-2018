string = "To jest tekst manipulacyjny"
#indexing
print("-----------------")
print(string [:3])
print(string [3:8])
print(string [8:])
print(2*(string))
print("-----------------")

#Format
print("-----------------")
forats = "Dla {0} to auto marki {marka} kosztował {1}{waluta}"
print(forats.format("marek","13000", marka = "VW", waluta = "zł"))
print("-----------------")
# Other 
#print("{:<char}".format("text")
print("{:<20}".format("text"))
print("{:>20}".format("text"))
print("{:b}".format(69)) # binary (0,1)
print("{:o}".format(69)) # octal (8)
print("{:x}".format(69)) #hexadecimal (16)
print("-----------------")
print (r"c:\welcome\with")
print("-----------------")
print("""
WELCOME
    IN
        MY  
            OWN (-> LOOOK <-)
    of
 !   P   Y   T   H   O   N !
""")