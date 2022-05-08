import cv2
import mysql.connector
import face_recognition
import os

def insertOrUpdate(id):
    conn = mysql.connector.connect(
        host="localhost", user="root",
        password="", database="face_data")

    cursor = conn.cursor()

    query = "Select * from People Where ID= " + str(0)

    cursor.execute(query)

    isRecordExist = 0

    for row in cursor:
        isRecordExist = 1

    if (isRecordExist == 0):
        query = "Insert into People(ID) values(" + str(id) + ")"
    else:
        query = "Update People Set ID = '" + str(id) + "' Where ID= " + str(0)

    cursor.execute(query)
    conn.commit()
    conn.close()

def generate_id():
    conn = mysql.connector.connect(
        host="localhost", user="root",
        password="", database="face_data")

    cursor = conn.cursor()

    query = "Select * from People "

    cursor.execute(query)

    max = 0

    for row in cursor:
        if (row[0] > max):
            max = row[0]
    conn.close()
    return  max + 1

#Using laptop camera:
cap = cv2.VideoCapture(0)
#Using external camera:
#cap = cv2.VideoCapture(1,cv2.CAP_DSHOW)

id = generate_id()
insertOrUpdate(id)

sampleNum = 0

def check(frame):
    cv2.imwrite(os.path.join('input_image', 'input_image.jpg'), frame)
    img = face_recognition.load_image_file("input_image/input_image.jpg")
    face_locations = face_recognition.face_locations(img)
    if (face_locations == []):
        print("Make sure the camera captures the entire face")
        return False
    else:
        return True

while(True):
    ret, frame = cap.read()
    sampleNum = 0
    frame = frame[120:120 + 250, 200:200 + 250, :]
    if cv2.waitKey(1) & 0XFF == ord('v'):
        cv2.imwrite('verification_image/User.'+str(id) + '.jpg', frame)
        if check (frame) == False:
            sampleNum = 0
        else:
            sampleNum += 1
    cv2.imshow('frame', frame)
    if (cv2.waitKey(10) & 0XFF == ord('q')) | sampleNum == 1:
        break

cap.release()
cv2.destroyAllWindows()