import requests 
from bs4 import BeautifulSoup
import sys
import re

url1= ''
url2 = ''

q = str(sys.argv[1]) # query inserted by user 

query = q + "travel" + "tour" + "blog"   # string added to make result more relevant 

url = "https://www.google.co.in/search?q=" + query # passing query to google search engine 

html = requests.get(url) # get html content 

data = html.text # display text of html 

b_soup = BeautifulSoup(data,'lxml') # using  beautifulsoup to  fetch certain portion of web

links = b_soup.findAll("h3",{"class":"r"}) # to get url of other
												# website, scraping google page with specific class 

# get url of website from the source code 
for link in str(links[0]).split('"'):
	if "http" in link :
		if '=' in link:
			for item in link.split('=') :
				if 'http' in item :
					link = item 
					break
		if '&' in link:
			for item in link.split('&') :
				if 'http' in item :
					link = item
					break
		if 'http' in link and '&' not in link and '=' not in link :
			url1 = link 
	else:
		pass		

# get html content of webpage 
details = requests.get(url1)
details = details.text

# display content of scrapped webpage
new_soup = BeautifulSoup(details,'lxml')
para = new_soup.findAll('p')
print(str(para).encode('utf-8'))
