import requests
import sys

content = requests.get(str(sys.argv[1]))
s = content.text

print("reading data")

newContent = open('untitled.html','w',encoding='utf-8') 
newContent.write(s)  # python will convert \n to os.linesep
newContent.close()
images = list()

print("data written successfully ")

newLine = ''

f = open('untitled.html','r',encoding='utf-8') 

images = list()

newLine = ''
for line in f :
	while ('<' in line and '>' in line ) :
		# print("loop is running ", end='\r')
			# checking index of < and > in string passed 
		

		start = line.index('<')
		end = line.index('>')

		# print("start %d and end is %d" %(start,end))

		if end > start :
			subString = line[start:end+1]
			line = line.replace(subString,'')
		if end < start :
			line =  line[end+1:]
			line.strip() 
	if '<' in line or '>' in line or '{' in line or '[' in line or '(' in line or '&' in line or ';' in line or '}' in line or ']' in line or ')' in line :
		pass
	else:
		line = line.replace('\n','')
		line = line.replace('\t','')
		newLine += line


print(newLine.encode('utf-8'))


