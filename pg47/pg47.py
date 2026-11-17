from graphics import rectangle
import graphics.circle as c

from graphics.threeD.cuboid import area as ca, perimeter as cp

from graphics.threeD import sphere

l, b = map(float,input("Enter rectangle length and breadth: ").split())
print("Rectangle area:",rectangle.area(l, b))
print("Rectangle perimeter:",rectangle.perimeter(l, b))

r = float(input("\n Enter circle radius:"))
print("Circle area:", c.area(r))
print("Circle perimeter:",c.perimeter(r))

l, b, h = map(float,input("\n Enter cuboid length, breadth and height:").split())
print("Cuboid Area:", ca(l, b, h))
print("Cuboid perimeter:", cp(l, b, h))

r = int(input("Enter Sphere radius:"))
print("Sphere Area:", sphere.area(r))
print("Sphere perimeter:",sphere.perimeter(r))

