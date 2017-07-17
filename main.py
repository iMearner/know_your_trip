from urllib2 import urlopen 
from bs4 import BeautifulSoup
import sys
import re

url = str(sys.argv[1])

html = urlopen(url)

content = list()
bs = BeautifulSoup(html,'lxml')

tag = bs.body
raw_contents = tag.findAll('p')

for para in raw_contents :
	print(para)

