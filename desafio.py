heroName = input("Digite o nome do personagem: ")
heroXp = int(input("Digite a quantidade de XP adquirida: "))
def determinar_nivel(xp):
    if xp < 1000:
        return "ferro"
    elif 1001 <= xp <= 2000:
        return "bronze"
    elif 2001 <= xp <= 3000:
        return "prata"
    elif 3001 <= xp <= 4000:
        return "ouro"
    elif 4001 <= xp <= 5000:
        return "platina"
    elif 5001 <= xp <= 7000:
        return "diamante"
    elif 7001 <= xp <= 9000:
        return "mestre"
    else:
        return "imortal"

nivel = determinar_nivel(heroXp)

print(f"O seu herói {heroName} está no nível {nivel}.")
