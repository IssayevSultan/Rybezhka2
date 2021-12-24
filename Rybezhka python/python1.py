import random
b=random.randint(0, 21)
while True:
    a=int(input("vvedite chislo ot 0 do 20:"))
    if a == b:
        print("Vi ugodali!!")
        break
    else:
        print(b)
        print("Ne ugodali!")
        
