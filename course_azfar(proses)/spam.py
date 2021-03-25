import pyautogui
import time

message = "padlah sayang parcil"
n = 100

time.sleep(1)
pyautogui.typewrite("Ucapkan " + message + "  Sebanyak " + str(n) +"\n")
for i in range(n) :
    pyautogui.typewrite(message + str(i) + "\n")
    