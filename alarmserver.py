import requests
i = 0
while True:
 i = i + 1
 raum = requests.get('https://TalkativeHugeOctal.schlumpf123cool.repl.co/alarm.txt')



 f = open("alarm.txt", "w")
 f.write(raum.text)
 f.close()

