woord = input("Geef een woord: ")
fouten = 0
al_geraden = []
goed_geraden = []

for index in woord:
    goed_geraden += "_"
    
while True:
    letter = input("Raad een letter: ")
    
    if letter in al_geraden:
        print("Deze letter heb je al eens geraden. Kies een andere letter.")
    else: 
        al_geraden.append(letter)
        
        zitInWoord = letter in woord
        if zitInWoord == False:
            fouten = fouten + 1
        else: 
            for index in range(len(woord)):
                if woord[index] == letter:
                       goed_geraden[index] = letter
                        
        if fouten > 8:
            print("Je hebt 9 fouten gemaakt. Game Over!")
            break;
            
        geraden_woord = ''.join(goed_geraden)
        if(geraden_woord == woord):
            print("Je hebt het woord goed geraden. Gefeliciteerd!")
            break;
          
        print(goed_geraden)