// ignore_for_file: prefer_const_literals_to_create_immutables, prefer_const_constructors

import 'dart:io';

import 'package:dio/dio.dart';
import 'package:dotted_border/dotted_border.dart';
import 'package:file_picker/file_picker.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:iconsax/iconsax.dart';

class MainPage extends StatefulWidget {
  const MainPage({super.key});

  @override
  State<MainPage> createState() => _MainPageState();
}

class _MainPageState extends State<MainPage>
    with SingleTickerProviderStateMixin {
  TextEditingController userName = new TextEditingController();
  TextEditingController userEmail = new TextEditingController();
  TextEditingController userPhone = new TextEditingController();
  TextEditingController userCNIC = new TextEditingController();

  late AnimationController loadingController;

  File? _file;
  PlatformFile? _platformFile;
  List<dynamic> files = [];

  selectFile() async {
    final file = await FilePicker.platform
        .pickFiles(type: FileType.any, allowMultiple: true);

    if (file != null) {
      if (files != null) {
        for (var i = 0; i < file.files.length; i++) {
          files.add(<String, dynamic>{
            'name': file.files[i].name,
            'path': file.files[i].path,
            'size': file.files[i].size
          });
        }
      } else {
        files = file.files;
      }

      // pickedfile = result.files.first;

      setState(() {
        //  addmapdata();
        print('List ${files}');
        print('Result file is ${file.files}');

        // print('name ${file}');
        // displayfilename = file.name.toString();
      });
    }

    loadingController.forward();
  }

  @override
  void initState() {
    loadingController = AnimationController(
      vsync: this,
      duration: const Duration(seconds: 10),
    )..addListener(() {
        setState(() {});
      });

    super.initState();
  }

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
            height: 200,
            // ignore: prefer_const_constructors
            decoration: BoxDecoration(
              borderRadius: BorderRadius.only(bottomLeft: Radius.circular(100)),
              color: Color.fromARGB(255, 89, 163, 231),
              gradient: LinearGradient(colors: [
                (const Color.fromARGB(255, 89, 163, 231)),
                (Color.fromARGB(255, 10, 129, 240))
              ], begin: Alignment.topCenter, end: Alignment.bottomCenter),
            ),
            child: Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                crossAxisAlignment: CrossAxisAlignment.center,
                children: [
                  Container(
                    margin: EdgeInsets.only(top: 10),
                    child: Image.asset("assets/Images/logo.png"),
                    height: 150,
                    width: 150,
                  ),
                  Container(
                    margin: EdgeInsets.only(right: 20, bottom: 10),
                    alignment: Alignment.center,
                    child: Text(
                      "Tax Smart PK",
                      style: TextStyle(
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                        color: Colors.white,
                      ),
                    ),
                  )
                ],
              ),
            ),
          ),
          Container(
            margin: EdgeInsets.only(left: 20, right: 20, top: 30),
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
              cursorColor: Color.fromARGB(255, 10, 129, 240),
              decoration: InputDecoration(
                icon: Icon(
                  Icons.supervised_user_circle,
                  color: Color.fromARGB(255, 10, 129, 240),
                ),
                hintText: "Enter Full Name",
                enabledBorder: InputBorder.none,
                focusedBorder: InputBorder.none,
              ),
              controller: userName,
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
              cursorColor: Color.fromARGB(255, 10, 129, 240),
              decoration: InputDecoration(
                icon: Icon(
                  Icons.email,
                  color: Color.fromARGB(255, 10, 129, 240),
                ),
                hintText: "Enter Email Address",
                enabledBorder: InputBorder.none,
                focusedBorder: InputBorder.none,
              ),
              controller: userEmail,
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
              cursorColor: Color.fromARGB(255, 10, 129, 240),
              keyboardType: TextInputType.number,
              inputFormatters: <TextInputFormatter>[
                FilteringTextInputFormatter.allow(RegExp(r'[0-9]')),
              ],
              decoration: InputDecoration(
                icon: Icon(
                  Icons.phone,
                  color: Color.fromARGB(255, 10, 129, 240),
                ),
                hintText: "Enter Phone Number",
                enabledBorder: InputBorder.none,
                focusedBorder: InputBorder.none,
                // keyboardType: TextInputType.number,
              ),
              controller: userPhone,
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
              cursorColor: Color.fromARGB(255, 10, 129, 240),
              keyboardType: TextInputType.number,
              inputFormatters: <TextInputFormatter>[
                FilteringTextInputFormatter.allow(RegExp(r'[0-9]')),
              ],
              decoration: InputDecoration(
                icon: Icon(
                  Icons.perm_identity_sharp,
                  color: Color.fromARGB(255, 10, 129, 240),
                ),
                hintText: "Enter CNIC Number",
                enabledBorder: InputBorder.none,
                focusedBorder: InputBorder.none,
              ),
              controller: userCNIC,
            ),
          ),
          Column(
            children: <Widget>[
              SizedBox(
                height: 30,
              ),
              Text(
                'Upload your file',
                style: TextStyle(
                    fontSize: 25,
                    color: Colors.grey.shade800,
                    fontWeight: FontWeight.bold),
              ),
              SizedBox(
                height: 10,
              ),
              Text(
                'File should be relevent.',
                style: TextStyle(fontSize: 15, color: Colors.grey.shade500),
              ),
              SizedBox(
                height: 10,
              ),
              GestureDetector(
                onTap: selectFile,
                child: Padding(
                    padding:
                        EdgeInsets.symmetric(horizontal: 40.0, vertical: 20.0),
                    child: DottedBorder(
                      borderType: BorderType.RRect,
                      radius: Radius.circular(10),
                      dashPattern: [10, 4],
                      strokeCap: StrokeCap.round,
                      color: Color.fromARGB(255, 10, 129, 240),
                      child: Container(
                        width: double.infinity,
                        height: 150,
                        decoration: BoxDecoration(
                            color: Colors.blue.shade50.withOpacity(.3),
                            borderRadius: BorderRadius.circular(10)),
                        child: Column(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: [
                            Icon(
                              Iconsax.folder_open,
                              color: Color.fromARGB(255, 10, 129, 240),
                              size: 40,
                            ),
                            SizedBox(
                              height: 10,
                            ),
                            Text(
                              'Select your file',
                              style: TextStyle(
                                  fontSize: 15, color: Colors.grey.shade400),
                            ),
                          ],
                        ),
                      ),
                    )),
              ),
              files.isNotEmpty
                  ? Container(
                      padding: EdgeInsets.all(20),
                      child: Column(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Text(
                            'Selected Files',
                            style: TextStyle(
                              color: Colors.grey.shade400,
                              fontSize: 15,
                            ),
                          ),
                          SizedBox(
                            height: 10,
                          ),
                          Container(
                            height: 200,
                            child: ListView.builder(
                                shrinkWrap: true,
                                itemCount: files.length,
                                itemBuilder: (context, index) {
                                  return Container(
                                      padding: EdgeInsets.all(8),
                                      decoration: BoxDecoration(
                                          borderRadius:
                                              BorderRadius.circular(10),
                                          color: Colors.white,
                                          boxShadow: [
                                            BoxShadow(
                                              color: Colors.grey.shade200,
                                              offset: Offset(0, 1),
                                              blurRadius: 3,
                                              spreadRadius: 2,
                                            )
                                          ]),
                                      child: Row(
                                        children: [
                                          // ClipRRect(
                                          //     borderRadius:
                                          //         BorderRadius.circular(8),
                                          //     child: Image.file(
                                          //       _file!,
                                          //       width: 70,
                                          //     )),
                                          SizedBox(
                                            width: 10,
                                          ),
                                          Expanded(
                                            child: Column(
                                              crossAxisAlignment:
                                                  CrossAxisAlignment.start,
                                              children: [
                                                Text(
                                                  files[index]['name'],
                                                  style: TextStyle(
                                                      fontSize: 13,
                                                      color: Colors.black),
                                                ),
                                                SizedBox(
                                                  height: 5,
                                                ),
                                                Text(
                                                  '${files[index]['size']} KB',
                                                  style: TextStyle(
                                                      fontSize: 13,
                                                      color:
                                                          Colors.grey.shade500),
                                                ),
                                                SizedBox(
                                                  height: 5,
                                                ),
                                                Container(
                                                    height: 5,
                                                    clipBehavior: Clip.hardEdge,
                                                    decoration: BoxDecoration(
                                                      borderRadius:
                                                          BorderRadius.circular(
                                                              5),
                                                      color:
                                                          Colors.blue.shade50,
                                                    ),
                                                    child:
                                                        LinearProgressIndicator(
                                                      value: loadingController
                                                          .value,
                                                    )),
                                              ],
                                            ),
                                          ),
                                          SizedBox(
                                            width: 10,
                                          ),
                                        ],
                                      ));
                                }),
                          ),
                        ],
                      ))
                  : Container(),
            ],
          ),
          GestureDetector(
            onTap: () => {},
            child: Container(
              margin: EdgeInsets.only(left: 20, right: 20, top: 20),
              padding: EdgeInsets.only(left: 20, right: 20),
              alignment: Alignment.center,
              height: 54,
              decoration: BoxDecoration(
                gradient: LinearGradient(colors: [
                  (const Color.fromARGB(255, 89, 163, 231)),
                  (const Color.fromARGB(255, 10, 129, 240))
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
                style: TextStyle(color: Colors.white),
              ),
            ),
          )
        ],
      )),
    );
  }
}
