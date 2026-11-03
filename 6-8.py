def add(*args):
    """Function to add variable length arguments."""
    total = 0
    for n in args:
        total = total + n
    return total

numbers = input("Enter integers separated by spaces: ").split()
numbers = list(map(int, numbers))

print("Sum =", add(*numbers))



square = lambda s: s * s
rectangle = lambda l, b: l * b
triangle = lambda b, h: 0.5 * b * h

s = float(input("Enter side of square: "))
l = float(input("Enter length of rectangle: "))
b = float(input("Enter breadth of rectangle: "))
base = float(input("Enter base of triangle: "))
h = float(input("Enter height of triangle: "))

print("Area of square =", square(s))
print("Area of rectangle =", rectangle(l, b))
print("Area of triangle =", triangle(base, h))




n = int(input("Enter number of terms: "))

result = list(map(lambda x: 2 ** x, range(n)))

print("Powers of 2:", result)




def fact(n):
    f = 1
    for i in range(1, n + 1):
        f = f * i
    return f

n = int(input("Enter number of terms: "))
total = 0

for i in range(1, n + 1):
    total = total + (i ** i) / fact(i)

print("Sum of series =", total)
