import cv2
import face_recognition
import time
import os
import sqlite3
import datetime

def insertOrUpdate(id, time):

    conn = sqlite3.connect('C:/Users/PC/PycharmProjects/one-shot/face_data.db')

    query = "Select * from People Where ID= "+str(id)

    cursor = conn.execute(query)

    isRecordExist = 0

    for row in cursor:
        isRecordExist = 1

    if (isRecordExist == 0):
        query = "Insert into People(ID, Time) values("+str(id)+",'"+str(time)+"')"
    else:
        query = "Update People Set Time= '"+str(time)+"' Where ID= " + str(id)
    conn.execute(query)
    conn.commit()
    cursor.close()
    conn.close()

def getProfile(id):

    conn = sqlite3.connect('C:/Users/PC/PycharmProjects/one-shot/face_data.db')
    query = "SELECT * FROM People WHERE ID=" + str(id)
    cursor = conn.execute(query)

    profile = None
    for row in cursor:
        profile = row
    cursor.close()
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
#cap = cv2.VideoCapture(0)
#Using external camera:
cap = cv2.VideoCapture(1,cv2.CAP_DSHOW)

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
            insertOrUpdate(id, getTime())
            print(profile[1])
        end = time.time()
        print("The time of execution: ", end - start, "\n")
    if (cv2.waitKey(5) & 0xFF == ord('q')):
        break
cap.release()
cv2.destroyAllWindows()

