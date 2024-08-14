import requests
import json
 
#request to first episode
url = 'https://rickandmortyapi.com/api/episode/1' #api

response = requests.get(url)
if response.status_code == 200:
    content = response.content
    #print content in file cartoons.json
    file = open('cartoon_file/cartoons.json', 'wb')
    file.write(content)
    file.close()

data = requests.get(url)
j = data.json()
print(j['name'])
characters = j['characters']
list_names = list()
list_names_human = list()
list_names_other = list()

for character in characters:
    req = requests.get(character)
    js = req.json()
    name = js['name']
    if js['species'] == 'Human':
        list_names_human.append(name)
    else:
        list_names_other.append(name)
        
print('Others:', list_names_other)
print('Humans:', list_names_human)