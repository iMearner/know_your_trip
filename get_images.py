from urllib2 import urlopen 
from bs4 import BeautifulSoup

import re

url = str(sys.argv[1])

html = urlopen(url)

images = list()
bs = BeautifulSoup(html,'lxml')

tag = bs.body
raw_images = tag.findAll('img')

for image in raw_images :
	for p in str(image).split():
		if 'src=' in p :
			p = p.replace('src="','')
			cut = p.index('"')
			p = p[:cut]
			images.append(p)
		else:
			pass

for image in images :
	print(str(image))	
