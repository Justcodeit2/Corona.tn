# -*- coding: utf-8 -*-

################################################################################
## Form generated from reading UI file 'login.ui'
##
## Created by: Qt User Interface Compiler version 5.15.2
##
## WARNING! All changes made in this file will be lost when recompiling UI file!
################################################################################


from PySide2.QtCore import *
from PySide2.QtGui import *
from PySide2.QtWidgets import *

import files_rc_rc


import os
def oheckFields(self):
    try:
        os.startfile("Main.py")
    except :
        print("e")
#
    # STYLES
    #
    styleLineEditOk = ("QLineEdit {\n"
"    border: 2px solid rgb(45, 45, 45);\n"
"    border-radius: 5px;\n"
"    padding: 15px;\n"
"    background-color: rgb(30, 30, 30);    \n"
"    color: rgb(100, 100, 100);\n"
"}\n"
"QLineEdit:hover {\n"
"    border: 2px solid rgb(55, 55, 55);\n"
"}\n"
"QLineEdit:focus {\n"
"    border: 2px solid rgb(255, 207, 0);    \n"
"    color: rgb(200, 200, 200);\n"
"}")

    styleLineEditError = ("QLineEdit {\n"
"    border: 2px solid rgb(255, 85, 127);\n"
"    border-radius: 5px;\n"
"    padding: 15px;\n"
"    background-color: rgb(30, 30, 30);    \n"
"    color: rgb(100, 100, 100);\n"
"}\n"
"QLineEdit:hover {\n"
"    border: 2px solid rgb(55, 55, 55);\n"
"}\n"
"QLineEdit:focus {\n"
"    border: 2px solid rgb(255, 207, 0);    \n"
"    color: rgb(200, 200, 200);\n"
"}")

    stylePopupError = ("background-color: rgb(255, 85, 127); border-radius: 5px;")
    stylePopupOk = ("background-color: rgb(0, 255, 123); border-radius: 5px;")

    textUser = ""
    textPassword = ""

def showMessage(message):
    self.frame_error.show()
    self.label_error.setText(message)
    # CHECK USER
    if not self.lineEdit_user.text():
        textUser = " User Empyt. "
        self.lineEdit_user.setStyleSheet(self.styleLineEditError)
    else:
        textUser = ""
        self.lineEdit_user.setStyleSheet(self.styleLineEditOk)

    # CHECK PASSWORD
    if not self.lineEdit_password.text():
        textPassword = " Password Empyt. "
        self.lineEdit_password.setStyleSheet(self.styleLineEditError)
    else:
        textPassword = ""
        self.lineEdit_password.setStyleSheet(self.styleLineEditOk)

        # CHECK FIELDS
    if textUser + textPassword != '':
        text = textUser + textPassword
        showMessage(text)
        self.frame_error.setStyleSheet(self.stylePopupError)
    else:
        text = " Login OK. "
        if self.checkBox_save_user.isChecked():
            text = text + " | Saver user: OK "
        showMessage(text)
        self.frame_error.setStyleSheet(self.stylePopupOk)

class Ui_MainWindow(object):
    def setupUi(self, MainWindow):
        if not MainWindow.objectName():
            MainWindow.setObjectName(u"MainWindow")
        MainWindow.resize(500, 790)
        MainWindow.setMinimumSize(QSize(500, 700))
        font = QFont()
        font.setFamily(u"Segoe UI")
        font.setPointSize(10)
        MainWindow.setFont(font)
        icon = QIcon()
        icon.addFile(u":/Icon/Images/Icon.ico", QSize(), QIcon.Normal, QIcon.Off)
        MainWindow.setWindowIcon(icon)
        MainWindow.setStyleSheet(u"color: rgb(200, 200, 200);\n"
"background-color: rgb(10, 10, 10);")
        self.centralwidget = QWidget(MainWindow)
        self.centralwidget.setObjectName(u"centralwidget")
        self.verticalLayout = QVBoxLayout(self.centralwidget)
        self.verticalLayout.setSpacing(0)
        self.verticalLayout.setObjectName(u"verticalLayout")
        self.verticalLayout.setContentsMargins(0, 0, 0, 0)
        self.top_bar = QFrame(self.centralwidget)
        self.top_bar.setObjectName(u"top_bar")
        self.top_bar.setMaximumSize(QSize(16777215, 35))
        self.top_bar.setStyleSheet(u"")
        self.top_bar.setFrameShape(QFrame.NoFrame)
        self.top_bar.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_2 = QHBoxLayout(self.top_bar)
        self.horizontalLayout_2.setSpacing(0)
        self.horizontalLayout_2.setObjectName(u"horizontalLayout_2")
        self.horizontalLayout_2.setContentsMargins(0, 5, 0, 0)
        self.frame_error = QFrame(self.top_bar)
        self.frame_error.setObjectName(u"frame_error")
        self.frame_error.setMaximumSize(QSize(450, 16777215))
        self.frame_error.setStyleSheet(u"background-color: rgb(255, 85, 127);\n"
"border-radius: 5px;")
        self.frame_error.setFrameShape(QFrame.StyledPanel)
        self.frame_error.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_3 = QHBoxLayout(self.frame_error)
        self.horizontalLayout_3.setObjectName(u"horizontalLayout_3")
        self.horizontalLayout_3.setContentsMargins(10, 3, 10, 3)
        self.label_error = QLabel(self.frame_error)
        self.label_error.setObjectName(u"label_error")
        self.label_error.setStyleSheet(u"color: rgb(35, 35, 35);")
        self.label_error.setAlignment(Qt.AlignCenter)

        self.horizontalLayout_3.addWidget(self.label_error)

        self.pushButton_close_pupup = QPushButton(self.frame_error)
        self.pushButton_close_pupup.setObjectName(u"pushButton_close_pupup")
        self.pushButton_close_pupup.setMaximumSize(QSize(20, 20))
        self.pushButton_close_pupup.setStyleSheet(u"QPushButton {\n"
"	border-radius: 5px;	\n"
"	background-image: url(:/Close_Image/Images/cil-x.png);\n"
"	background-position: center;	\n"
"	background-color: rgb(60, 60, 60);\n"
"}\n"
"QPushButton:hover {\n"
"	background-color: rgb(50, 50, 50);	\n"
"	color: rgb(200, 200, 200);\n"
"}\n"
"QPushButton:pressed {\n"
"	background-color: rgb(35, 35, 35);	\n"
"	color: rgb(200, 200, 200);\n"
"}")

        self.horizontalLayout_3.addWidget(self.pushButton_close_pupup)


        self.horizontalLayout_2.addWidget(self.frame_error)


        self.verticalLayout.addWidget(self.top_bar)

        self.content = QFrame(self.centralwidget)
        self.content.setObjectName(u"content")
        self.content.setStyleSheet(u"")
        self.content.setFrameShape(QFrame.NoFrame)
        self.content.setFrameShadow(QFrame.Raised)
        self.horizontalLayout = QHBoxLayout(self.content)
        self.horizontalLayout.setObjectName(u"horizontalLayout")
        self.login_area = QFrame(self.content)
        self.login_area.setObjectName(u"login_area")
        self.login_area.setMaximumSize(QSize(450, 550))
        self.login_area.setStyleSheet(u"border-radius: 10px;")
        self.login_area.setFrameShape(QFrame.NoFrame)
        self.login_area.setFrameShadow(QFrame.Raised)
        self.logo = QFrame(self.login_area)
        self.logo.setObjectName(u"logo")
        self.logo.setGeometry(QRect(45, 40, 360, 90))
        self.logo.setStyleSheet(u"background-image: url(:/Logo/Images/logo_360x90.png);\n"
"background-repeat: no-repeat;\n"
"background-position: center;")
        self.logo.setFrameShape(QFrame.StyledPanel)
        self.logo.setFrameShadow(QFrame.Raised)
        self.avatar = QFrame(self.login_area)
        self.avatar.setObjectName(u"avatar")
        self.avatar.setGeometry(QRect(165, 150, 120, 120))
        self.avatar.setStyleSheet(u"QFrame {\n"
"	background-image: url(:/Avatar/Images/avatar.png);\n"
"	border-radius: 60px;\n"
"	border: 10px solid rgb(255, 207, 0);\n"
"	background-position: center;\n"
"}\n"
"QFrame:hover {\n"
"	border: 10px solid rgb(255, 225, 0);\n"
"}\n"
"\n"
"")
        self.avatar.setFrameShape(QFrame.StyledPanel)
        self.avatar.setFrameShadow(QFrame.Raised)
        self.lineEdit_user = QLineEdit(self.login_area)
        self.lineEdit_user.setObjectName(u"lineEdit_user")
        self.lineEdit_user.setGeometry(QRect(85, 288, 280, 50))
        self.lineEdit_user.setFont(font)
        self.lineEdit_user.setStyleSheet(u"QLineEdit {\n"
"	border: 2px solid rgb(45, 45, 45);\n"
"	border-radius: 5px;\n"
"	padding: 15px;\n"
"	background-color: rgb(30, 30, 30);	\n"
"	color: rgb(100, 100, 100);\n"
"}\n"
"QLineEdit:hover {\n"
"	border: 2px solid rgb(55, 55, 55);\n"
"}\n"
"QLineEdit:focus {\n"
"	border: 2px solid rgb(255, 207, 0);	\n"
"	color: rgb(200, 200, 200);\n"
"}")
        self.lineEdit_user.setMaxLength(32)
        self.lineEdit_password = QLineEdit(self.login_area)
        self.lineEdit_password.setObjectName(u"lineEdit_password")
        self.lineEdit_password.setGeometry(QRect(85, 340, 280, 50))
        self.lineEdit_password.setFont(font)
        self.lineEdit_password.setStyleSheet(u"QLineEdit {\n"
"	border: 2px solid rgb(45, 45, 45);\n"
"	border-radius: 5px;\n"
"	padding: 15px;\n"
"	background-color: rgb(30, 30, 30);	\n"
"	color: rgb(100, 100, 100);\n"
"}\n"
"QLineEdit:hover {\n"
"	border: 2px solid rgb(55, 55, 55);\n"
"}\n"
"QLineEdit:focus {\n"
"	border: 2px solid rgb(255, 207, 0);	\n"
"	color: rgb(200, 200, 200);\n"
"}")
        self.lineEdit_password.setMaxLength(16)
        self.lineEdit_password.setEchoMode(QLineEdit.Password)
        self.checkBox_save_user = QCheckBox(self.login_area)
        self.checkBox_save_user.setObjectName(u"checkBox_save_user")
        self.checkBox_save_user.setGeometry(QRect(85, 395, 281, 22))
        self.checkBox_save_user.setFont(font)
        self.checkBox_save_user.setStyleSheet(u"QCheckBox::indicator {\n"
"	border: 3px solid rgb(100, 100, 100);\n"
"	width: 15px;\n"
"	height: 15px;\n"
"	border-radius: 10px;	\n"
"	background-color: rgb(135, 135, 135);\n"
"}\n"
"QCheckBox::indicator:checked {\n"
"	border: 3px solid rgb(255, 205, 0);\n"
"	background-color: rgb(255, 255, 0);\n"
"}")
        self.pushButton_login = QPushButton(self.login_area)
        self.pushButton_login.setObjectName(u"pushButton_login")
        self.pushButton_login.setGeometry(QRect(85, 425, 280, 50))
        self.pushButton_login.setStyleSheet(u"QPushButton {	\n"
"	background-color: rgb(50, 50, 50);\n"
"	border: 2px solid rgb(60, 60, 60);\n"
"	border-radius: 5px;\n"
"}\n"
"QPushButton:hover {	\n"
"	background-color: rgb(60, 60, 60);\n"
"	border: 2px solid rgb(70, 70, 70);\n"
"}\n"
"QPushButton:pressed {	\n"
"	background-color: rgb(250, 230, 0);\n"
"	border: 2px solid rgb(255, 165, 24);	\n"
"	color: rgb(35, 35, 35);\n"
"}")

        self.horizontalLayout.addWidget(self.login_area)


        self.verticalLayout.addWidget(self.content)

        self.bottom = QFrame(self.centralwidget)
        self.bottom.setObjectName(u"bottom")
        self.bottom.setMaximumSize(QSize(16777215, 35))
        self.bottom.setStyleSheet(u"background-color: rgb(15, 15, 15)")
        self.bottom.setFrameShape(QFrame.NoFrame)
        self.bottom.setFrameShadow(QFrame.Raised)
        self.verticalLayout_2 = QVBoxLayout(self.bottom)
        self.verticalLayout_2.setObjectName(u"verticalLayout_2")
        self.label_credits = QLabel(self.bottom)
        self.label_credits.setObjectName(u"label_credits")
        font1 = QFont()
        font1.setFamily(u"Segoe UI")
        self.label_credits.setFont(font1)
        self.label_credits.setStyleSheet(u"color: rgb(75, 75, 75);")
        self.label_credits.setAlignment(Qt.AlignRight|Qt.AlignTrailing|Qt.AlignVCenter)

        self.verticalLayout_2.addWidget(self.label_credits)


        self.verticalLayout.addWidget(self.bottom)

        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QMenuBar(MainWindow)
        self.menubar.setObjectName(u"menubar")
        self.menubar.setGeometry(QRect(0, 0, 500, 21))
        MainWindow.setMenuBar(self.menubar)

        self.pushButton_login.clicked.connect(oheckFields)

        self.pushButton_close_pupup.clicked.connect(lambda: self.frame_error.hide())

        # HIDE ERROR
        self.frame_error.hide()

        self.retranslateUi(MainWindow)

        QMetaObject.connectSlotsByName(MainWindow)
    # setupUi

    def retranslateUi(self, MainWindow):
        MainWindow.setWindowTitle(QCoreApplication.translate("MainWindow", u"Login", None))
        self.label_error.setText(QCoreApplication.translate("MainWindow", u"Error", None))
        self.pushButton_close_pupup.setText("")
        self.lineEdit_user.setPlaceholderText(QCoreApplication.translate("MainWindow", u"USER", None))
        self.lineEdit_password.setPlaceholderText(QCoreApplication.translate("MainWindow", u"PASSWORD", None))
        self.checkBox_save_user.setText(QCoreApplication.translate("MainWindow", u"SAVE USER", None))
        self.pushButton_login.setText(QCoreApplication.translate("MainWindow", u"CONNECT TO CYBERPUNK", None))
        self.label_credits.setText(QCoreApplication.translate("MainWindow", u"Created by: Bader sekrfi", None))
    # retranslateUi

