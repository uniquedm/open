s = input()
s = list(s.lower())
vowels=['a','e','i','o','u']
for i in range(len(s)-1):
    if(s[i] in vowels and s[i+1] in vowels):
        del s[i+1]
s=''.join(s)
print(s,end="")

'''
s = input()
s = s.lower()
vowels=['a','e','i','o','u']
for i in range(len(s)-1):
    if(s[i] in vowels and s[i+1] in vowels):
        s=s[:i]+s[i+1:]
print(s,end="")
'''