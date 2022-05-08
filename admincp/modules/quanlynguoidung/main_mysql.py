import cv2
import face_recognition
import time
import os
import mysql.connector
import datetime

def insertTime(id, time):
    conn = mysql.connector.connect(
        host="localhost", user="root",
        password="", database="face_data")

    cursor = conn.cursor()

    query = "Select * from People Where ID= " + str(id)

    cursor.execute(query)

    isRecordExist = 0

    for row in cursor:
        isRecordExist = 1

    if (isRecordExist == 0):
        query = "Insert into People(Time) values(" + str(time) + "')"
    else:
        query = "Update People Set Time= '"+str(time)+"' Where ID= " + str(id)

    cursor.execute(query)
    conn.commit()
    conn.close()

def getProfile(id):

    conn = mysql.connector.connect(
        host="localhost", user="root",
        password="", database=  "face_data")

    cursor = conn.cursor()

    query = "Select * from People Where ID= " + str(id)

    cursor.execute(query)

    profile = None
    for row in cursor:
        profile = row
    conn.close()
    return profile

def getTime():
    hour = datetime.datetime.now().hour
    minute = datetime.datetime.now().minute
    if minute < 10:
        time = str(hour) + ':0' + str(minute)
    else:
        time = str(hour) + ':' + str(minute)
    return time

def verification(frame):
    cv2.imwrite(os.path.join('input_image', 'input_image.jpg'), frame)
    img = face_recognition.load_image_file("input_image/input_image.jpg")
    face_locations = face_recognition.face_locations(img)
    if (face_locations == []):
        print("Make sure the camera captures the entire face")
        return None
    picture_of_me = face_recognition.load_image_file("input_image/input_image.jpg")
    my_face_encoding = face_recognition.face_encodings(picture_of_me)[0]
    list = os.listdir('verification_image')
    number_files = 0
    for image in os.listdir(os.path.join('verification_image')):
        unknown_picture = face_recognition.load_image_file("verification_image/" + image)
        unknown_face_encoding = face_recognition.face_encodings(unknown_picture)[0]
        results = face_recognition.compare_faces([my_face_encoding], unknown_face_encoding)
        number_files+=1
        if number_files > len(list):
            return None
        if results[0] == True:
            return image.strip('User..jpg')

#Using laptop camera:
cap = cv2.VideoCapture(0)
#Using external camera:
#cap = cv2.VideoCapture(1,cv2.CAP_DSHOW)

while cap.isOpened():
    ret, frame = cap.read()
    frame = frame[120:120 + 250, 200:200 + 250, :]
    cv2.imshow('Verification', frame)
    if cv2.waitKey(5) & 0xFF == ord('v'):
        start = time.time()
        id = verification(frame)
        if(id == None):
            print("Can not identify your face")
        else:
            print(id)
            profile = getProfile(id)
            insertTime(id, getTime())
            print(profile[1])
        end = time.time()
        print("The time of execution: ", end - start, "\n")
    if (cv2.waitKey(5) & 0xFF == ord('q')):
        break
cap.release()
cv2.destroyAllWindows()

