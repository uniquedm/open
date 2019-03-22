import string
s = input()
s = s.lower()
a = string.ascii_lowercase;
for i in s:
    if(i in a):
        a=a.replace(i,"")
if(a==""):
    print("YES", end="")
else:
    print("NO", end="")