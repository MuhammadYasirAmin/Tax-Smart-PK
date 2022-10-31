// ignore_for_file: prefer_const_constructors, prefer_const_literals_to_create_immutables

import 'package:flutter/material.dart';

class MainPage extends StatefulWidget {
  const MainPage({super.key});

  @override
  State<MainPage> createState() => _MainPageState();
}

class _MainPageState extends State<MainPage> {
  @override
  Widget build(BuildContext context) {
    return initWidget();
  }

  Widget initWidget() {
    return Scaffold(
      body: SingleChildScrollView(
          child: Column(
        children: [
          Container(
            height: 300,
            // ignore: prefer_const_constructors
            decoration: BoxDecoration(
              borderRadius: BorderRadius.only(bottomLeft: Radius.circular(90)),
              color: Color(0xffF5591F),
              gradient: LinearGradient(colors: [
                (const Color(0xffF5591F)),
                (const Color(0xffF2861E))
              ], begin: Alignment.topCenter, end: Alignment.bottomCenter),
            ),
            child: Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                crossAxisAlignment: CrossAxisAlignment.center,
                children: [
                  Container(
                    margin: EdgeInsets.only(top: 50),
                    child: Image.asset("assets/Images/logo.png"),
                    height: 190,
                    width: 190,
                  ),
                  Container(
                    margin: EdgeInsets.only(right: 20, top: 20),
                    alignment: Alignment.bottomRight,
                    child: Text(
                      "Tax Smart PK",
                      style: TextStyle(
                        fontSize: 20,
                        color: Colors.white,
                      ),
                    ),
                  )
                ],
              ),
            ),
          ),
          Container(
            margin: EdgeInsets.only(left: 20, right: 20, top: 70),
            padding: EdgeInsets.only(left: 20, right: 20),
            decoration: BoxDecoration(
              borderRadius: BorderRadius.circular(50),
              color: Colors.grey[200],
              boxShadow: [
                BoxShadow(
                    offset: Offset(0, 10),
                    blurRadius: 50,
                    color: Color(0xffEEEEEE))
              ],
            ),
            alignment: Alignment.center,
            child: TextField(
              cursorColor: Color(0xffF5591F),
              decoration: InputDecoration(
                icon: Icon(
                  Icons.supervised_user_circle,
                  color: Color(0xffF5591F),
                ),
                hintText: "Enter FullName",
                enabledBorder: InputBorder.none,
                focusedBorder: InputBorder.none,
              ),
            ),
          ),
          Container(
            margin: EdgeInsets.only(left: 20, right: 20, top: 20),
            padding: EdgeInsets.only(left: 20, right: 20),
            decoration: BoxDecoration(
              borderRadius: BorderRadius.circular(50),
              color: Colors.grey[200],
              boxShadow: [
                BoxShadow(
                    offset: Offset(0, 10),
                    blurRadius: 50,
                    color: Color(0xffEEEEEE))
              ],
            ),
            alignment: Alignment.center,
            child: TextField(
              cursorColor: Color(0xffF5591F),
              decoration: InputDecoration(
                icon: Icon(
                  Icons.email,
                  color: Color(0xffF5591F),
                ),
                hintText: "Enter Email",
                enabledBorder: InputBorder.none,
                focusedBorder: InputBorder.none,
              ),
            ),
          ),
          GestureDetector(
            onTap: () => {},
            child: Container(
              margin: EdgeInsets.only(left: 20, right: 20, top: 70),
              padding: EdgeInsets.only(left: 20, right: 20),
              alignment: Alignment.center,
              height: 54,
              decoration: BoxDecoration(
                gradient: LinearGradient(colors: [
                  (const Color(0xffF5591F)),
                  (const Color(0xffF2861E))
                ], begin: Alignment.centerLeft, end: Alignment.centerRight),
                borderRadius: BorderRadius.circular(20),
                boxShadow: [
                  BoxShadow(
                      offset: Offset(0, 10),
                      blurRadius: 50,
                      color: Color(0xffEEEEEE))
                ],
              ),
              child: Text(
                "Submit Now",
                style: TextStyle(
                  color: Colors.white
                ),
              ),
            ),
          )
        ],
      )),
    );
  }
}
