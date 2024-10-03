let x
let y
let z
let d
x = prompt('x = ')
y = prompt('y = ')
z = prompt('z = ')
if (x == 0)
console.log("error: x=0")
else {
d = ((x) % (y) % (z))
console.log((x) , " % " , (y) , " % " , (z) , "= " , (d))
}