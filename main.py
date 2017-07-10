
f = open('untitled.html','r',encoding='utf-8') # to encode the file else it gives error 

newLine = ''

for line in f :
	# print(line)
	while ('<' in line and '>' in line ) :

  		# checking index of < and > in string passed 
		start = line.index('<')
		end = line.index('>')
		

		# print("loop is running ", end='\r')

		subString = line[start:end+1]

		line = line.replace(subString,'')
	if ('param' in line or  'it' in line and '=' not in line and '(' not in line ):
		newLine += line


print(newLine.strip(' '))

