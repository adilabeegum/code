import math

start = int(input("Enter starting range: "))
end = int(input("Enter ending range: "))

for n in range(max(start, 1000), min(end, 9999) + 1):
    root = math.isqrt(n)

    if root * root == n and all(int(d) % 2 == 0 for d in str(n)):
        print(n)

