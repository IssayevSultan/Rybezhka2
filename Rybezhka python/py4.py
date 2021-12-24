import random
list=[]
for i in range (0, 5):
    n = random.randint(0, 2)
    list.append(n)
print("Список",list)
for i in range(len(list)):
    list[i] = "Ноль" if list[i] == 0 else list[i]
print("Заменили", list)
