#!/usr/bin/env python3
from kivy.app import App
from kivy.uix.boxlayout import BoxLayout

# Import kivy UX components
from kivy.uix.image import Image
from kivy.uix.button import Button
from kivy.uix.label import Label

# Import other kivy stuff
from kivy.clock import Clock
from kivy.graphics.texture import Texture
from kivy.core.window import Window

from kivy.logger import Logger
import mysql.connector
import cv2
import os
import face_recognition
import cgitb 


class CamApp(App):

    def build(self):
        # Main layout components
        self.web_cam = Image(size_hint=(1, .8))
        self.button = Button(text="Capture", on_press=self.cap, size_hint=(1, .1))
        self.verification_label = Label(text="", size_hint=(1, .1))

        # Add items to layout
        layout = BoxLayout(orientation='vertical')
        layout.add_widget(self.web_cam)
        layout.add_widget(self.button)
        layout.add_widget(self.verification_label)

        # Load tensorflow/keras model

        # Setup video capture device
        self.capture = cv2.VideoCapture(0)
        Clock.schedule_interval(self.update, 1.0 / 33.0)

        return layout

    def update(self, *args):
        # Read frame from opencv
        ret, frame = self.capture.read()
        frame = frame[120:120 + 250, 200:200 + 250, :]

        # Flip horizontall and convert image to texture
        buf = cv2.flip(frame, 0).tostring()
        img_texture = Texture.create(size=(frame.shape[1], frame.shape[0]), colorfmt='bgr')
        img_texture.blit_buffer(buf, colorfmt='bgr', bufferfmt='ubyte')
        self.web_cam.texture = img_texture

    def insertOrUpdate(self, id):
        conn = mysql.connector.connect(
            host="localhost", user="root",
            password="", database="web-gymphp")

        cursor = conn.cursor()

        query = "Select * from host_quanlynguoidung Where ID= " + str(0)

        cursor.execute(query)

        isRecordExist = 0

        for row in cursor:
            isRecordExist = 1

        if (isRecordExist == 0):
            query = "Insert into host_quanlynguoidung(ID) values(" + str(id) + ")"
        else:
            query = "Update host_quanlynguoidung Set ID = '" + str(id) + "' Where ID= " + str(0)

        cursor.execute(query)
        conn.commit()
        conn.close()

    def generate_id(self):
        conn = mysql.connector.connect(
            host="localhost", user="root",
            password="", database="web-gymphp")

        cursor = conn.cursor()

        query = "Select * from host_quanlynguoidung "

        cursor.execute(query)

        max = 0

        for row in cursor:
            if (row[0] > max):
                max = row[0]
        conn.close()
        return max + 1

    def check(self, frame):
        cv2.imwrite(os.path.join('input_image', 'input_image.jpg'), frame)
        img = face_recognition.load_image_file("input_image/input_image.jpg")
        face_locations = face_recognition.face_locations(img)
        if (face_locations == []):
            return False
        else:
            return True

    def close_application(self):

        App.get_running_app().stop()
        Window.close()

    def cap(self, *args):

        sampleNum = 0
        ret, frame = self.capture.read()
        frame = frame[120:120 + 250, 200:200 + 250, :]
        self.verification_label.text = 'Make sure the camera captures the entire face' if self.check(frame) == False else ''
        if self.check(frame) == False:
            sampleNum = 0
        else:
            id = self.generate_id()
            self.insertOrUpdate(id)
            cv2.imwrite('verification_image/User.' + str(id) + '.jpg', frame)
            sampleNum += 1
        if (sampleNum == 1):
            self.close_application()

if __name__ == '__main__':
    CamApp().run()
