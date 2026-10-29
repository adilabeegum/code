def simple_interest(p, t, senior):
    if senior == "yes":
        r = 12
    else:
        r = 10
    return (p * t * r) / 100

p = float(input("Enter principal amount: "))
t = float(input("Enter time in years: "))
senior = input("Are you a senior citizen? (yes/no): ").lower()

si = simple_interest(p, t, senior)
print("Simple Interest =", si)



def check(n):
    if n % 2 == 0:
        return "Even"
    else:
        return "Odd"

n = int(input("Enter a number: "))
print(check(n))


def compare(s1, s2, n):
    return s1[:n] == s2[:n]

s1 = input("Enter first string: ")
s2 = input("Enter second string: ")
n = int(input("Enter number of characters: "))

print(compare(s1, s2, n))


def fib(n):
    if n <= 1:
        return n
    return fib(n - 1) + fib(n - 2)

n = int(input("Enter number of terms: "))

for i in range(n):
    print(fib(i), end=" ")
