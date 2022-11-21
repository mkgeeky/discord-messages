"""
# This script is made by: mkgeeky
# Web: https://mkgeeky.xyz
# Git: https://github.com/mkgeeky/
# Mail: contact@mkgeeky.xyz
# Discord: https://discord.gg/tv6ZQ7wzt7
# Lines above MAY NOT BE removed!
"""
import requests
import sys

url = ""

data = {
    "content": sys.argv[1]
}
requests.post(url, json=data)