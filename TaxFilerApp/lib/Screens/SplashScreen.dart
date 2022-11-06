// ignore_for_file: unused_import

import 'dart:async';

import 'package:flutter/material.dart';
import 'package:tax_filer_app/Screens/Auth/Auth.dart';
import 'package:tax_filer_app/Screens/Auth/LoginScreen.dart';

class SplashScreen extends StatefulWidget {
  const SplashScreen({super.key});

  @override
  State<SplashScreen> createState() => _SplashScreenState();
}

class _SplashScreenState extends State<SplashScreen> {
  @override
  void initState() {
    super.initState();
    startTimer();
  }

  startTimer() async {
    var duration = Duration(seconds: 3);
    return new Timer(duration, mainPageRoute);
  }

  mainPageRoute() {
    Navigator.pushReplacement(
        context, MaterialPageRoute(builder: (context) => LoginScreen()));
  }

  @override
  Widget build(BuildContext context) {
    return initWidget();
  }

  Widget initWidget() {
    return Scaffold(
      body: Stack(
        children: [
          Container(
            decoration: BoxDecoration(
              color: Colors.grey[200],
            ),
          ),
          Center(
            child: Container(
              child: Image.asset("assets/Images/logo.png"),
            ),
          )
        ],
      ),
    );
  }
}
