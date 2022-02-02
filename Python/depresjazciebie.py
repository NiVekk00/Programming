import pyautogui
import time

time.sleep(5)
pyautogui.click()
x = 0
while True:
    pyautogui.write(
        "m!mine")
    pyautogui.press("ENTER")
    x += 5
    if x == 60:
        pyautogui.write(
            "m!chop")
        pyautogui.press("ENTER")
        x = 0
    if x == 40:
        pyautogui.write(
            "m!fight")
        pyautogui.press("ENTER")
    time.sleep(5)
