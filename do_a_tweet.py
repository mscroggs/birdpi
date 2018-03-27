from __future__ import print_function
import tweet
import os
import json

with open("done.json") as f:
    done = json.load(f)

def month_as_word(month):
    if month == "01": return "January"
    if month == "02": return "February"
    if month == "03": return "March"
    if month == "04": return "April"
    if month == "05": return "May"
    if month == "06": return "June"
    if month == "07": return "July"
    if month == "08": return "August"
    if month == "09": return "September"
    if month == "10": return "October"
    if month == "11": return "November"
    if month == "12": return "December"

def date_from_filename(filename):
    for i in filename.split("-"):
        if len(i) == 14:
            date = i
            return date[:4], date[4:6], date[6:8], date[8:10], date[10:12], date[12:]

for filename in os.listdir("www/saved"):
    if "jpg" in filename and filename not in done:
        file = os.path.join("www/saved",filename)
        for i in filename.split("-"):
            if len(i) == 14:
                date = i
                break
        year, month, day, hour, minute, second = date_from_filename(filename)
        text = "I took this photo at "
        text += hour+":"+minute
        text += " on "+day+" "+month_as_word(month)+" "+year
        tweet.send_tweet(file, text)
        done.append(filename)
        print(filename, text)
        with open("done.json","w") as f:
            json.dump(done,f)
        break

