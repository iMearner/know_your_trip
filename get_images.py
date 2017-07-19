import requests 
from bs4 import BeautifulSoup
import sys
import re

count = 0 
q = str(sys.argv[1])

query = q + "tour" + "travel"

raw_images_content = requests.get('http://in.images.search.yahoo/search/images;?p=' + query)
raw_images = raw_images_content.text

bs = BeautifulSoup(raw_images,'lxml')

tag = bs.findAll('img')

for image in tag :
	image = str(image)
	if ' src=' in image :
		link = image[image.index(' src=')+6:image.index('&')]
		print("<img src=%sstyle='padding:10px; width:250px;' > " %(link) )
		count += 1
	if count > 15:
		break
